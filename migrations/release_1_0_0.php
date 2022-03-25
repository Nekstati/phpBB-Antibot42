<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace nekstati\antibot42\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['antibot42_version']);
	}

	static public function depends_on()
	{
		return ['\phpbb\db\migration\data\v310\gold'];
	}

	public function update_schema()
	{
		return [
			'add_columns' => [
				$this->table_prefix . 'sessions' => [
					'session_rand' => ['VCHAR:40', ''],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns' => [
				$this->table_prefix . 'sessions' => [
					'session_rand',
				],
			],
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['antibot42_version', '0.1.0']], // Typo :)
			['config.add', ['antibot42_config', '']],

			['module.add', ['acp', 'ACP_CAT_DOT_MODS', 'ACP_ANTIBOT42']],
			['module.add', ['acp', 'ACP_ANTIBOT42', [
				'module_basename'	=> '\nekstati\antibot42\acp\main_module',
				'module_langname'	=> 'ACP_ANTIBOT42_SETTINGS',
				'module_mode'		=> 'settings',
				// Not clearly documented, but without full auth description an ext cannot be disabled correctly (possible bug)
				'module_auth'		=> 'ext_nekstati/antibot42 && acl_a_board',
			]]],

			['custom', [[&$this, 'set_config']]],
		];
	}

	public function revert_data()
	{
		return [
			['custom', [[&$this, 'delete_log']]],
		];
	}

	public function set_config()
	{
		$params = [
			'reg'		=> 1,
			'log'		=> 1,
			'geoip'		=> 1,
			'ban'		=> 0,
			'method1'	=> 1,
			'method2'	=> 1,
			'method3'	=> 1,
			'method4'	=> 1,
			'method5'	=> 1,
		];

		if (phpbb_version_compare($this->config['version'], '3.2.2-RC1', '<'))
		{
			$params['method4'] = 0;
		}

		$this->config->set('antibot42_config', json_encode($params));

		$captcha = ($this->config['enable_confirm']) ? $this->config['captcha_plugin'] : 'false';

		$this->add_log('[ADMIN] Ext installed, config defaults to: ' . http_build_query($params, '', ', ') . "; captcha: $captcha");
	}

	public function add_log($string)
	{
		$data = date('Y-m-d H:i:s') . '   ';
		$strlen = 60;
		$indent = mb_strlen($data);
		$data .= utf8_wordwrap($string, $strlen, "\n" . str_repeat(' ', $indent), true);
		$data .= str_repeat(' ', $strlen + $indent + 3 - mb_strlen(strrchr("\n" . $data, "\n")));

		@file_put_contents($this->phpbb_root_path . 'store/antibot42_log.txt', $data . "\n", FILE_APPEND);
	}

	public function delete_log()
	{
		@unlink($this->phpbb_root_path . 'store/antibot42_log.txt');
	}
}
