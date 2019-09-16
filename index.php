<?php

/**
 * Main Index File...
 * 
 * App is single point entry
 * 
 * Assigns constant vars
 * 
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 *
 * 
 */
session_start();
error_reporting(0);
// For Mail variables 
define('SMTP_EMAIL_USER_NAME', 'support@shorttermrentalsecrets.com'); # smtp service username
define('SMTP_EMAIL_USER_PASSWORD', '$printer1234'); # smtp service password
define('MAIL_FROM_EMAIL', 'support@shorttermrentalsecrets.com'); # email to be used a from email
define('MAIL_FROM_NAME', 'Short Term Rental University'); # name to be used as from email

define('SMTP_EMAIL_USER_NAME_QUOTE', 'hardik@go-brilliant.com'); # smtp service username for quotes 
define('SMTP_EMAIL_USER_PASSWORD_QUOTE', 'testaccts001.'); # smtp service password for quotes - old vanquotes

switch ($_SERVER['HTTP_HOST']) {
    case "localhost":
        define('DB_HOST', 'localhost');
        define('DB_PASSWORD', '');
        define('DB_UNAME', 'root');
        define('DB_NAME', 'stru_visits');
        define('IS_DEV_ENV', TRUE);
        break;
    case "stru.in":
        define('DB_HOST', 'localhost');
        define('DB_PASSWORD', 'Admin1@#4');
        define('DB_UNAME', 'root');
        define('DB_NAME', 'stru_visits');
        define('IS_DEV_ENV', FALSE);
        break;
}

date_default_timezone_set('America/New_York');

include "loader.php";
