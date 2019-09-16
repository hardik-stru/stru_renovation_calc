<form>
	<input type="text" />
   	 <table>
        <td class="col-md-4">
        <input name='reset' type="reset" value='Reset' class="btn btn-primary" /> 
        </td>
   	 </table>
</form>
<?php
die;

$useragent = $_SERVER['HTTP_USER_AGENT'];

$browser = get_browser(null, true);
echo "<pre>";
print_r($browser);
echo "</pre>";

echo "<pre>";
print_r($useragent);
echo "</pre>";
die;
?>