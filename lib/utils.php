<?php

/**
 * General Functions
 * 
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 * 
 */

/**
 * Function to check whether variable is set or not.
 * @param String $var
 * @return Boolean
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 * 
 */
function _set($var) {
    return isset($var) && $var ? true : false;
}

//function isMobile() {
//    $useragent = $_SERVER['HTTP_USER_AGENT'];
//
//    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
//
//        return TRUE;
//    }
//    return FALSE;
//}

function _t($key, $default_value) {
    if (isset($_SESSION['lang'][$key])) {
        return $_SESSION['lang'][$key];
    } else {
        return $default_value;
    }
}

/**
 * Checks if variable is set or not. if
 * variable is not set, it will reutnr second arc
 * @param String $var
 * @param String $var
 * @return String $var
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 * 
 */
function _e(&$s, $a = null) {
    return !empty($s) ? $s : $a;
}

/**
 * function to escape string
 * 
 * @param String $string
 * @return String escaped string
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 */
function _escape($string) {
    $string = stripslashes($string);
    return mysql_real_escape_string(trim($string));
}

/**
 * Wrapper function for db insert query
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 */
function qi($table, $fields, $operation = 'INSERT') {
    $db = Db::__d();
    return $db->insert_query($table, $fields, $operation);
}

function qd($table, $condition) {
    $db = Db::__d();
    return $db->delete_query($table, $condition);
}

function q($query) {
    $db = Db::__d();
    return $db->format_data($db->query($query));
}

function qs($query) {
    $result = q($query);
    return $result[0];
}

/**
 * Wrapper function for db update query
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 */
function qu($table, $fields, $condition) {
    $db = Db::__d();
    return $db->update_query($table, $fields, $condition);
}

/**
 * Return date format that mysql likes YYYY-MM-DD H:I:S
 * 
 * @param String $timestamp optional unixtimestamp
 * @return String $date
 * 
 * @author Hardik Panchal 
 * @version 1.0
 * @package gb_automation
 */
function _mysqlDate($timestamp = 0) {
    $timestamp = $timestamp ? $timestamp : time();
    return date('Y-m-d H:i:s');
}

function GetdataFromdb($array) {
    $counter = 0;
    for ($i = 0, $e = count($array); $i < $e; $i++) {
        if (!empty($array[$i])) {
            $counter += 1;
        }
    }
    return $counter;
}

function _getInstance($url) {
    $arg = explode("/", $url);
    switch ($arg[0]) {
        case 'admin':
            _cg('url', _e($arg[1], "home"));
            _cg("url_instance", $arg[0]);
            _cg("instance", "admin");
            break;
        default:
            if ($arg[0] != '') {
                $url_d = $arg[0];
            } else {
                $url_d = 'home';
            }
            _cg('url', $url_d);
            _cg("url_instance", '');
            _cg("instance", "front");

            if ($_SERVER['HTTP_HOST'] == 'stru.in') {
                _cg('url', "g");
            }

            if ($arg[1]) {
                array_shift($arg);
                _cg("url_vars", $arg);
            }
    }
}

/**
 *  Wrapper function for application level
 *  global variable
 * 
 *  set/get key/value
 * 
 *  @param String $key key
 *  @param $value value
 * 
 *  @return Array 
 * 
 */
function _cg($key, $value = null) {
    if (is_null($value)) {
        return Config::$_vars[$key];
    } else {
        Config::$_vars[$key] = $value;
    }
}

/**
 *  Wrapper function for application level
 *  global variable
 * 
 *  set/get key/value
 * 
 *  @param String $key key
 *  @param $value value
 * 
 *  @return Array 
 * 
 */
function _cgd($key, $value = null) {

    if (is_null($value)) {

        return Config::$_vars[$key];
    } else {
        Config::$_vars[$key] = $value;
    }
}

function lr($url) {
    return _U . $url;
}

function l($url) {
    print lr($url);
}

function getUserNameFromEmail($email) {
    $data = q("select * from admin_users  where user_name  = '{$email}' ");

    return $data[0]['user_name'];
}

function d($arr, $hideStyle = "block") {
    if (is_array($arr) || is_object($arr)) {
        print "<pre style='display:{$hideStyle}'>" . "...";
        print_r($arr);
        print "</pre>";
    } else {
        print "<div class='debug' style='display:{$hideStyle}'>Debug:<br>$arr</div>";
    }
}

function _R($url) {
//    echo $url;
    header("Location:{$url}");
    exit;
}

function _auth_url($pages, $return_page) {
    if (!$_SESSION['user'] && in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}

function _level_auth_url($pages, $return_page) {

    if (!in_array(_cg("url"), $pages)) {
        _cg("url", $return_page);
    }
}

function back_trace() {
    $array = debug_backtrace();
    $output = 'Execution Backtrace:<br><ul>';
    foreach ($array as $debug_data) {
        $output .= "<li><b> " . $debug_data['file'] . "</b> [ Line : <b>" . $debug_data['line'] . "</b> ] <br></li>";
    }
    $output .= '</ul>';
    d($output);
}

function random_string() {
    return date("ymd") . mt_rand(1, 1000) . mt_rand(99, 99999);
}

function _escapeArray($array) {
    $array = array_map('mysql_real_escape_string', $array);
    return array_map('trim', $array);
}

function _bindArray($array, $map) {
    $return = array();
    foreach ($map as $form_field => $db_field) {
        $return[$db_field] = $array[$form_field];
    }
    return $return;
}

function _normalDate($date) {
    return date("d-M-Y H:i a", strtotime($date));
}

function json_die($status = true, $array = array()) {
    $response = array();
    $response['status'] = $status;
    $response['data'] = $array;
    die(json_encode($response));
}

function _errors_on() {
    ini_set("display_errors", "on");
    error_reporting(E_ALL);
}

function _errors_off() {
    ini_set("display_errors", "off");
    error_reporting(0);
}

function clearNumber($number) {
    return str_replace(array("-", "(", ")", " "), array("", "", "", ""), $number);
}

function formatCellDash($data) {
    $data = clearNumber($data);

    return $data ? "(" . substr($data, 0, 3) . ") " . substr($data, 3, 3) . "-" . substr($data, 6) : "--";
}

function formatCell($data) {
    if (preg_match('/^\+\d(\d{3})(\d{3})(\d{4})$/', $data, $matches)) {
        $result = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
        return $result;
    } else {
        return $data;
    }
}

/**
 * Whether its a local machine or host
 */
function _isLocalMachine() {
    return IS_DEV_ENV == 'true' ? true : false; //$_SERVER['HTTP_HOST'] == 'localhost' ? true : false;
}

/**
 * Custom Mail function.
 *    
 * Uses swift mail library and sends mail
 * 
 * @param type $to
 * @param type $subject
 * @param type $content
 * @param type $extra
 * 
 * @author  Hardik Panchal <hardikpanchal469@gmail.com>
 * @since November 28, 2013
 */
function _mail($to, $subject, $content, $extra = array()) {

    # unfortunately, need to use require within function.
    # swift lib overrides the autoloader 
    # and that stops native app classes being resolved and included

    require_once _PATH . 'lib/mail/swift/lib/swift_required.php';

    if (_isLocalMachine()) {
        //_l("To Email is overwritten by -  testoperators@gmail.com  due to dev localmachine ");
        $to = 'hardik@go-brilliant.com';
    }
    $bcc = 'hardik@go-brilliant.com';

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
            ->setUsername(SMTP_EMAIL_USER_NAME)
            ->setPassword(SMTP_EMAIL_USER_PASSWORD);

    $mailer = Swift_Mailer::newInstance($transport);

    if (!is_array($to)) {
        $to = array($to);
    }



    $message = Swift_Message::newInstance($subject)
            ->setFrom(array(MAIL_FROM_EMAIL => MAIL_FROM_NAME))
            ->setTo($to)
            ->setBcc($bcc)
            ->setBody($content, 'text/html', 'utf-8')
            ->addPart(strip_tags(nl2br($content)), 'text/plain');


    // create an array out of the extra if its not an array
    // so user can pass a string or array for attachment
    if ($extra != '') {
        if (is_array($extra)) {
            
        } else {
            $extra = array($extra);
        }
    }

    if (!empty($extra)) {
        if (count($extra) > 0) {
            foreach ($extra as $each_extra):
                if (file_exists($each_extra)) {
                    $message->attach(Swift_Attachment::fromPath($each_extra));
                }
            endforeach;
        }
    }
    $result = $mailer->send($message);

    return $result;
}

function __MEDIA_URL() {
    if (_isLocalMachine()) {
        return 'http://www.my-brilliant.info/dev/v2/instance/front/media/';
    } else {
        return 'http://www.my-brilliant.info/wakeup/instance/front/media/';
    }
}

function isOpUser() {
    return ($_SESSION['user']['user_type'] == 'role_user') ? true : false;
}

function isIntacctUser() {
    return ($_SESSION['user']['email'] == 'intacct@go-brilliant.com') ? true : false;
}

function isFrontUser() {
    return ($_SESSION['user']['user_type'] == 'manifest_user') ? true : false;
}

function isSubUser() {
    return (isset($_SESSION['user']['isSubUser']) && $_SESSION['user']['isSubUser'] == '1') ? true : false;
}

function _cprint($key, $value, $print, $doPrint = true) {

    if ($key == $value) {
        if ($doPrint) {
            print $print;
        } else {
            return $print;
        }
    }
}

/**
 * $ 275.00 => 275.00
 * @param type $subject
 * @return type
 */
function clearDecimal($subject) {
    $search = array(" ", "$", "_", "-", "(", ")", "%");
    $replace = array("", "", "", "", "", "", "");
    return trim(str_replace($search, $replace, $subject));
}

function clearString($subject) {
    $search = array(" ", "$", "_", "-", "(", ")", "%", "'", '"', "/", "\"", "&", "^", "@", "#", "$", "!", "`", "~", ",", ".");
    $replace = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
    return trim(str_replace($search, $replace, $subject));
}

function writeLog($log, $filePath = '') {
    if ($filePath == '') {
        $filePath = _PATH . "error_log/log_" . date("Y-m-d") . ".txt";
    }
    $log = "Time: " . date("h:i A") . $log . "\n\n----------------------------------------------------\n\n";
    file_put_contents($filePath, $log, FILE_APPEND);
}

function div($a, $b) {
    return (int) ($a / $b);
}

function gregorian_to_jalali($g_y, $g_m, $g_d, $str) {
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


    $gy = $g_y - 1600;
    $gm = $g_m - 1;
    $gd = $g_d - 1;

    $g_day_no = 365 * $gy + div($gy + 3, 4) - div($gy + 99, 100) + div($gy + 399, 400);

    for ($i = 0; $i < $gm; ++$i)
        $g_day_no += $g_days_in_month[$i];
    if ($gm > 1 && (($gy % 4 == 0 && $gy % 100 != 0) || ($gy % 400 == 0)))
    /* leap and after Feb */
        $g_day_no++;
    $g_day_no += $gd;

    $j_day_no = $g_day_no - 79;

    $j_np = div($j_day_no, 12053); /* 12053 = 365*33 + 32/4 */
    $j_day_no = $j_day_no % 12053;

    $jy = 979 + 33 * $j_np + 4 * div($j_day_no, 1461); /* 1461 = 365*4 + 4/4 */

    $j_day_no %= 1461;

    if ($j_day_no >= 366) {
        $jy += div($j_day_no - 1, 365);
        $j_day_no = ($j_day_no - 1) % 365;
    }

    for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i)
        $j_day_no -= $j_days_in_month[$i];
    $jm = $i + 1;
    $jd = $j_day_no + 1;
    if ($str)
        return $jy . '/' . $jm . '/' . $jd;
    return array($jy, $jm, $jd);
}

function jalali_to_gregorian($j_y, $j_m, $j_d, $str) {
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);


    $jy = (int) ($j_y) - 979;
    $jm = (int) ($j_m) - 1;
    $jd = (int) ($j_d) - 1;

    $j_day_no = 365 * $jy + div($jy, 33) * 8 + div($jy % 33 + 3, 4);

    for ($i = 0; $i < $jm; ++$i)
        $j_day_no += $j_days_in_month[$i];

    $j_day_no += $jd;

    $g_day_no = $j_day_no + 79;

    $gy = 1600 + 400 * div($g_day_no, 146097); /* 146097 = 365*400 + 400/4 - 400/100 + 400/400 */
    $g_day_no = $g_day_no % 146097;

    $leap = true;
    if ($g_day_no >= 36525) /* 36525 = 365*100 + 100/4 */ {
        $g_day_no--;
        $gy += 100 * div($g_day_no, 36524); /* 36524 = 365*100 + 100/4 - 100/100 */
        $g_day_no = $g_day_no % 36524;

        if ($g_day_no >= 365)
            $g_day_no++;
        else
            $leap = false;
    }

    $gy += 4 * div($g_day_no, 1461); /* 1461 = 365*4 + 4/4 */
    $g_day_no %= 1461;

    if ($g_day_no >= 366) {
        $leap = false;

        $g_day_no--;
        $gy += div($g_day_no, 365);
        $g_day_no = $g_day_no % 365;
    }

    for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++)
        $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
    $gm = $i + 1;
    $gd = $g_day_no + 1;
    if ($str)
        return $gy . '/' . $gm . '/' . $gd;
    return array($gy, $gm, $gd);
}

function _persianToDigits($string) {
    $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $num = range(0, 9);
    return str_replace($persian, $num, $string);
}

function _DigitsTopersian($string) {
    $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $num = range(0, 9);
    return str_replace($num, $persian, $string);
}

function _isOdd($num) {
    $num = intval(_persianToDigits($num));
    return $num & 1 ? true : false;
}

function _permitType($last_4_digit) {
    return _isOdd($last_4_digit) ? "B" : "C";
}

function _last_degit($digit) {
    return substr($digit, -1);
}

?>