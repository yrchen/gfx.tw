<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* Change this config item to empty array if you don't need site wide message */
$config['gfx_site_wide_message'] = array(
	array(
		'type' => 'highlight',
		'icon' => 'comment',
		'message' => '這是個預演(staging)站！請在試玩之後，提供畫面與程式操作互動的意見，謝謝！'
	)
);
$config['gfx_token'] = '--secret-token-good-day-fx';
$config['gfx_forum_auth_token'] = '--secret-md5-string hash blah kkk';
$config['gfx_downloadurl'] = 'http://download.mozilla.org/?product=firefox-3.0.6&lang=zh-TW&os=';
$config['gfx_downloadfallback'] = 'http://www.mozilla.com/firefox/all.html';
$config['gfx_amo_url'] = 'https://addons.mozilla.org/zh-TW/firefox/addon/';
$config['gfx_home_user'] = 'foxmosa'; # this is used to count downloads from homepage
$config['gfx_badname'] = array(
	'editor', 
	'userpage', 
	'feature', 
	'auth', 
	'addons',
	'about', 
	'lobby', 
	'view', 
	'sticker', 
	'stickers', 
	'users', 
	'blog', 
	'events', 
	'event', 
	'doc', 
	'docs', 
	'download',
	'downloads',
	'share', 
	'badge', 
	'home',
	'js',
	'useravatars',
	'system',
	'images'
);
?>
