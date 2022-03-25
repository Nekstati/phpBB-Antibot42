<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace nekstati\antibot42\migrations;

class release_1_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['antibot42_version']) && version_compare($this->config['antibot42_version'], '1.0.1', '>=');
	}

	static public function depends_on()
	{
		return ['\nekstati\antibot42\migrations\release_1_0_0'];
	}

	public function update_data()
	{
		return [
			['config.update', ['antibot42_version', '1.0.1']],
			['custom', [[&$this, 'add_log']]],
		];
	}

	public function add_log()
	{
		$data = date('Y-m-d H:i:s') . '   [ADMIN] Ext updated to v. 1.0.1';
		@file_put_contents($this->phpbb_root_path . 'store/antibot42_log.txt', $data . "\n", FILE_APPEND);
	}
}
