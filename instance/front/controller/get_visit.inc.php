<?php

if (isset($_REQUEST['get_visit']) && $_REQUEST['get_visit'] == '1') {
    $tenant_id = $_REQUEST['tenant_id'];
    $login_user_id = $_REQUEST['login_user_id'];
    $property_id = $_REQUEST['property_id'];

    $last_degit = _last_degit($tenant_id);
    $table = "log_{$last_degit}";
    $data = qs("select count(id) as total from {$table} where tenant_id='{$tenant_id}' and login_user_id='{$login_user_id}' and property_id='{$property_id}'");

    if (!empty($data)) {
        $total = $data['total'];
        if ($total > 0) {
//            echo $total;
            echo "&nbsp;<span class='badge badge-info custom-badge' data-toggle='tooltip' data-placement='top'  data-original-title='Total visitors'>" . $total . "</span>";
        } else {
            echo "&nbsp;<span class='badge badge-info custom-badge' data-toggle='tooltip' data-placement='top'  data-original-title='Total visitors'>0</span>";
        }
    } else {
         echo "&nbsp;<span class='badge badge-info custom-badge' data-toggle='tooltip' data-placement='top'  data-original-title='Total visitors'>0</span>";
    }
}
die;
?>