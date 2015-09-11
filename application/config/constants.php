<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define("SITE_NAME", 'KG');
define("HOST_SERVER", $_SERVER['SERVER_NAME']);
define("INFOBIP_USERNAME", 'xxx');
define("INFOBIP_PASSWORD", 'xxx');
define("CENTILI_APIKEY", 'xxx');

define("DEFAULT_GIFT_IMAGE", 'default.jpg');

define("DEFAULT_WIDGET_LOGO", "default.png");
define("DEFAULT_WIDGET_WIDTH", 800);
define("DEFAULT_WIDGET_HEIGHT", 600);
define("DEFAULT_WIDGET_COLOR", "#000000");
define("DEFAULT_WIDGET_BACKGROUND", "#FFFFFF");

define("FEE", 10);