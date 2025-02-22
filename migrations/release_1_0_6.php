<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace nekstati\antibot42\migrations;

class release_1_0_6 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['antibot42_version']) && version_compare($this->config['antibot42_version'], '1.0.6', '>=');
	}

	static public function depends_on()
	{
		return ['\nekstati\antibot42\migrations\release_1_0_3'];
	}

	public function update_data()
	{
		return [
			['config.update', ['antibot42_version', '1.0.6']],
			['custom', [[&$this, 'add_log'], [$this, 'add_config']]],
		];
	}

	public function add_config()
	{
		$text_config = new \phpbb\config\db_text($this->db, $this->table_prefix . 'config_text');
		$text_config->set('antibot42_restrictedwords', '');
	}

	public function add_log()
	{
		$data = date('Y-m-d H:i:s') . '   [ADMIN] Ext updated to v. 1.0.6';
		@file_put_contents($this->phpbb_root_path . 'store/antibot42_log.txt', $data . "\n", FILE_APPEND);
	}
}
