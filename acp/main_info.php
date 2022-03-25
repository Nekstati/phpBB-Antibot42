<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace nekstati\antibot42\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\nekstati\antibot42\acp\main_module',
			'title'		=> 'ACP_ANTIBOT42',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_ANTIBOT42_SETTINGS',
					'auth'	=> 'ext_nekstati/antibot42 && acl_a_board',
					'cat'	=> ['ACP_ANTIBOT42'],
				],
			],
		];
	}
}
