<?php

/**
 * Loader file.
 * Includes libraries
 * Inititaes controller + view
 * 
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package Aerus  
 * 
 */
define("_PATH", str_replace("loader.php", "", __FILE__));

function default_autoload($class) {
    @include_once(_PATH . 'lib/' . $class . '.class.php');
}

spl_autoload_register('default_autoload');

function __autoload($class_name) {
    include_once(_PATH . 'lib/' . $class_name . '.class.php');
}

include "lib/utils.php"; # includes general function
//d($_SESSION);

_getInstance($_REQUEST['q']);
$instance = _cg("instance");

$host = $_SERVER['HTTP_HOST'];

$http_protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'] == "https" ? "https://" : "http://";
define('_U', $http_protocol . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1));
define('_UPlain', "http://" . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1));
define("_MEDIA_URL", _U . "instance/{$instance}/media/");

$db = Db::__d();

include _PATH . "instance/{$instance}/config.inc.php";

$url = _cg("url"); // set from _getInstance function
define(_URL, $url);

$modulePage = $url . ".php";

// solution when approval quote is not found in /var/quotes/
if ($modulePage == 'var.php') {
    print "Quote Not Found";
    die;
}

@include _PATH . "instance/{$instance}/controller/{$url}.inc.php";
$_templete = isset($_templete) ? $_templete : 'index.tpl.php';
@include _PATH . "instance/{$instance}/tpl/{$_templete}";
?>