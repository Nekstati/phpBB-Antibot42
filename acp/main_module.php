<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace nekstati\antibot42\acp;

class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;
	private $log_file;

	public function main($id, $mode)
	{
		switch ($mode)
		{
			case 'settings':
			default:
				$this->settings($id, $mode, $this->u_action);
			break;
		}
	}

	private function settings($id, $mode, $u_action)
	{
		global $phpbb_container, $phpbb_root_path;
		$user = $phpbb_container->get('user');
		$config = $phpbb_container->get('config');
		$request = $phpbb_container->get('request');
		$template = $phpbb_container->get('template');
		$config_text = $phpbb_container->get('config_text');

		$this->tpl_name = 'antibot42';
		$this->page_title = $user->lang('ACP_ANTIBOT42');
		$action = $request->variable('action', '');
		$this->log_file = $phpbb_root_path . 'store/antibot42_log.txt';

		$features_are_limited = phpbb_version_compare($config['version'], '3.2.2-RC1', '<');


		add_form_key('acp_antibot42');

		if ($request->is_set('submit'))
		{
			if (!check_form_key('acp_antibot42'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$config_text->set('antibot42_restrictedwords', $request->variable('antibot42_restrictedwords', '', true));

			$new_config = $request->variable('antibot42_config', array('' => ''), true);

			if ($features_are_limited)
			{
				$new_config['method4'] = 0;
			}

			$config->set('antibot42_config', json_encode($new_config));
			$this->add_log('[ADMIN] Ext config changed to: ' . http_build_query($new_config, '', ', '));
			trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}
		elseif ($request->is_set('antibot42_log_delete'))
		{
			if (!confirm_box(true))
			{
				confirm_box(false, $user->lang('ACP_ANTIBOT42_LOG_DELETE_CONFIRM'), build_hidden_fields(array(
					'i'			=> $id,
					'mode'		=> $mode,
					'antibot42_log_delete'	=> true,
				)));
			}
			else
			{
				if (@file_put_contents($this->log_file, '') !== false)
				{
					// trigger_error($user->lang('ACP_ANTIBOT42_LOG_DELETE_SUCCESS') . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang('ACP_ANTIBOT42_LOG_NOT_WRITABLE', $this->log_file) . adm_back_link($this->u_action), E_USER_WARNING);
				}
			}
		}

		$ext_config = json_decode($config['antibot42_config'], true);

		if ($features_are_limited)
		{
			$ext_config['method4'] = 0;
		}

		$log_text = @file_get_contents($this->log_file);
		$log_text = ($log_text !== false) ? $log_text : $user->lang('ACP_ANTIBOT42_LOG_NOT_READABLE', $this->log_file);

		if ($ext_config['geoip'])
		{
			$db_path = $phpbb_root_path . 'ext/nekstati/antibot42/geoip/';
			$geoip_notice = 'NO_DB';
			$geoip_notice = (is_file($db_path . 'GeoLite2-Country.mmdb') && is_readable($db_path . 'GeoLite2-Country.mmdb')) ? 'COUNTRY_ONLY' : $geoip_notice;
			$geoip_notice = (is_file($db_path . 'GeoLite2-City.mmdb') && is_readable($db_path . 'GeoLite2-City.mmdb')) ? null : $geoip_notice;
		}

		$template->assign_vars(array(
			'ACP_ANTIBOT42_REG'				=> $ext_config['reg'],
			'ACP_ANTIBOT42_LOG'				=> $ext_config['log'],
			'ACP_ANTIBOT42_GEOIP'			=> $ext_config['geoip'],
			'ACP_ANTIBOT42_BAN'				=> $ext_config['ban'],
			'ACP_ANTIBOT42_RESTRICTEDWORDS'	=> $config_text->get('antibot42_restrictedwords'),
			'ACP_ANTIBOT42_METHOD1'			=> $ext_config['method1'],
			'ACP_ANTIBOT42_METHOD2'			=> $ext_config['method2'],
			'ACP_ANTIBOT42_METHOD3'			=> $ext_config['method3'],
			'ACP_ANTIBOT42_METHOD4'			=> $ext_config['method4'],
			'ACP_ANTIBOT42_METHOD5'			=> $ext_config['method5'],
			'ACP_ANTIBOT42_LOG_TEXT'		=> htmlspecialchars($log_text),
			'ACP_ANTIBOT42_FEAT_LIMITED'	=> $features_are_limited,
			'ACP_ANTIBOT42_GEOIP_NOTICE'	=> ($ext_config['geoip'] && $geoip_notice) ? $user->lang('ACP_ANTIBOT42_GEOIP_' . $geoip_notice, $db_path) : '',
			'U_ACTION'						=> $this->u_action,
		));
	}

	private function add_log($string)
	{
		$data = date('Y-m-d H:i:s') . '   ';
		$strlen = 60;
		$indent = mb_strlen($data);
		$data .= utf8_wordwrap($string, $strlen, "\n" . str_repeat(' ', $indent), true);
		$data .= str_repeat(' ', $strlen + $indent + 3 - mb_strlen(strrchr("\n" . $data, "\n")));

		@file_put_contents($this->log_file, $data . "\n", FILE_APPEND);
	}
}
