<?php
/**
*
*  @package Antibot 42
*  @copyright (c) 2019 Татьяна5 and Nekstati
*  @license GNU General Public License, version 2 (GPL-2.0)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ANTIBOT42_JS_NOTICE'						=> 'Check if JavaScript is enabled in your browser.',
	'ANTIBOT42_POSSIBLE_SPAMBOTS'				=> 'Possible spambots',
	'ANTIBOT42_RESTRICTED_WORDS'				=> 'Error while creating topic or post',
));
