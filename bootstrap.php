<?php
require_once "vendor/autoload.php";

ini_set('display_errors',1);
error_reporting(E_ALL);


define("_TELEGRAM_BOT_API_TOKEN" , "949114473:AAFwmENelUDVk3l3t6nLqQdE_FuHcYm8sVQ");
define("_TELEGRAM_BOT_HOOK_URL" , "https://host-5-58-202-113.bitternet.ua/telegram.php");
define("_TELEGRAM_DB_CONFIG", [
    'db_host'       => 'localhost',
    'db_name'       => 'telegram',
    'db_user'       => 'root',
    'db_password'   => '',
]);
define("_TELEGRAM_TABLE_NAME", "telegram_dialog");
define("_TELEGRAM_DOWNLOAD_PATCH", $_SERVER['DOCUMENT_ROOT']."/storage/");

