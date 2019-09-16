<?php

# Commit Test
//error_reporting(E_ALL);

$auth_pages = array();

//$auth_pages[] = "_template1";


if ($_REQUEST['logout']) {
    User::killSession();
}


// d($_SESSION['user'] ['fname']);
_auth_url($auth_pages, "login");
?>