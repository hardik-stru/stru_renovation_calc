<?php

if (isset($_REQUEST['set_visit']) && $_REQUEST['set_visit'] == '1') {
    $fields = array();
    $fields['tenant_id'] = $tenant_id = $_REQUEST['tenant_id'];
    $fields['login_user_id'] = $_REQUEST['login_user_id'];
    $fields['property_id'] = $_REQUEST['property_id'];
    $fields['theme_id'] = $_REQUEST['theme_id'];
    $fields['ip_address'] = $_REQUEST['ip_address'];
    $fields['referrer'] = $_REQUEST['referer'];
    $fields['date_time'] = $_REQUEST['date_time'];
    $fields['browser'] = $_REQUEST['browser'];
    $fields['browser_version'] = $_REQUEST['browser_version'];
    $fields['platform'] = $_REQUEST['platform'];
    $last_degit = _last_degit($tenant_id);
    qi("log_{$last_degit}", _escapeArray($fields));
}
die;
?>