<?php

if (isset($_REQUEST['convert_number_formate'])) {
    echo "$".number_format($_REQUEST['data'], 2);
    die;
}

$jsInclude = 'home.js.php';
_cg("page_title", "Home");
?>