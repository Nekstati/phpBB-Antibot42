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
	'ACP_ANTIBOT42'						=> 'Antibot 42',
	'ACP_ANTIBOT42_SETTINGS'			=> 'Settings',
	'ACP_ANTIBOT42_SETTINGS_EXPLAIN'	=> 'Another way to eliminate spam on your forum. Maybe the best.',

	'ACP_ANTIBOT42_REG'					=> 'Enable protection',
	'ACP_ANTIBOT42_REG_EXPLAIN'			=> 'If spambots registered manually appear on your site, enable protection for registered users as well. Otherwise, it is unnecessary.',
	'ACP_ANTIBOT42_REG_OPTION_1'		=> 'For guests and registered users',
	'ACP_ANTIBOT42_REG_OPTION_0'		=> 'For guests only',

	'ACP_ANTIBOT42_LOG'					=> 'Enable logging',
	'ACP_ANTIBOT42_LOG_EXPLAIN'			=> 'Failed attempts to register or post, as well as cases of successful registration for comparative statistics, are logged.',

	'ACP_ANTIBOT42_GEOIP'				=> 'Enable GeoIP',
	'ACP_ANTIBOT42_GEOIP_EXPLAIN'		=> 'The geographic location of spambots is added to the log. If your site is besieged by lots of bots, this feature may increase server load.',

	'ACP_ANTIBOT42_BAN'					=> 'Ban possible spamers',
	'ACP_ANTIBOT42_BAN_EXPLAIN'			=> 'Ban possible spamers by IP for 5 minutes after 10 attempts to bypass protection. The attempt counter will be reset to zero after the session has expired.',

	'ACP_ANTIBOT42_METHODS_NOTICE'		=> 'The following options are used for testing purposes. If you are not going to participate in the testing, leave all items enabled.',

	'ACP_ANTIBOT42_METHOD1'				=> 'Spambot detection method #1',
	'ACP_ANTIBOT42_METHOD1_EXPLAIN'		=> 'Applies to the register form, posting form and contact form.',
	'ACP_ANTIBOT42_METHOD2'				=> 'Spambot detection method #2',
	'ACP_ANTIBOT42_METHOD2_EXPLAIN'		=> 'Applies to the register form, posting form and contact form.',
	'ACP_ANTIBOT42_METHOD3'				=> 'Spambot detection method #3',
	'ACP_ANTIBOT42_METHOD3_EXPLAIN'		=> 'Applies to the register form.',
	'ACP_ANTIBOT42_METHOD4'				=> 'Spambot detection method #4',
	'ACP_ANTIBOT42_METHOD4_EXPLAIN'		=> 'Applies to the register form.',
	'ACP_ANTIBOT42_METHOD5'				=> 'Spambot detection method #5',
	'ACP_ANTIBOT42_METHOD5_EXPLAIN'		=> 'Applies to the register form, posting form, contact form, user email form and private message form. Use this method with caution: it can cause problems for users who have disabled JavaScript in their browsers.',

	'ACP_ANTIBOT42_LOG_TEXT'			=> 'Log',
	'ACP_ANTIBOT42_LOG_COPY'			=> 'Copy log',
	'ACP_ANTIBOT42_LOG_COPIED'			=> 'Log copied to clipboard.',
	'ACP_ANTIBOT42_LOG_DELETE'			=> 'Delete log',
	'ACP_ANTIBOT42_LOG_DELETE_CONFIRM'	=> 'Delete Antibot 42 log? Sure?',
	'ACP_ANTIBOT42_LOG_DELETE_SUCCESS'	=> 'Log deleted.',
	'ACP_ANTIBOT42_LOG_NOT_READABLE'	=> 'Log file %s or its directory are not readable or don’t exist.',
	'ACP_ANTIBOT42_LOG_NOT_WRITABLE'	=> 'Log file %s or its directory are not writable or don’t exist.',

	'ACP_ANTIBOT42_GEOIP_NO_DB'			=> 'GeoIP feature is enabled, but GeoIP databases not found. <a href="https://dev.maxmind.com/geoip/geoip2/geolite2/">Download them</a> (“GeoLite2 Country” at least) and unzip to %s.',
	'ACP_ANTIBOT42_GEOIP_COUNTRY_ONLY'	=> 'GeoIP is able now to detect the countries of spambots. If you want it to detect cities as well, <a href="https://dev.maxmind.com/geoip/geoip2/geolite2/">download “GeoLite2 City” database</a> and unzip to %s.',

	'ACP_ANTIBOT42_NOTICE'				=> '
		If you wish to help us to <b>improve spambot detection</b>, please do the following:
		<ul>
			<li>test and tell us which spambot detection method works better on your website (1st day – 1st method, 2nd day – 2nd method, etc.);</li>
			<li>temporarily disable other spambot countermeasures, including captcha, and tell us how effective was this extension in itself;</li>
			<li>temporarily enable guest posting and tell us if this caused spam or not;</li>
			<li>copy and send us the log as soon as it grows to 200-300 lines or more.</li>
		</ul>
		This log doesn’t contain any information about your website or users (except spambots IPs).<br />
		You can find us there: <a href="https://phpbbguru.net/community/">https://phpbbguru.net/community/</a>',

	'ACP_ANTIBOT42_VERSION_ALERT'		=> 'Some features of this extension are disabled as they’re not compatible with your phpBB version. <br /> Spambot protection is not optimal. Recommended phpBB version: 3.2.2 or higher.',
));
