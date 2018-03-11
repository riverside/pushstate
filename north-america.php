<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'North America';
	include dirname(__FILE__) . '/includes/header.inc.php';
}
?>
<ul>
	<li>Antigua and Barbuda</li>
	<li>Bahamas </li>
	<li>Barbados </li>
	<li>Belize </li>
	<li>Canada </li>
	<li>Costa Rica </li>
	<li>Cuba </li>
	<li>Dominica </li>
	<li>Dominican Rep. </li>
	<li>El Salvador </li>
	<li>Grenada </li>
	<li>Guatemala </li>
	<li>Haiti </li>
	<li>Honduras </li>
	<li>Jamaica </li>
	<li>Mexico </li>
	<li>Nicaragua </li>
	<li>Panama </li>
	<li>St. Kitts &amp; Nevis </li>
	<li>St. Lucia </li>
	<li>St. Vincent &amp; the Grenadines </li>
	<li>Trinidad &amp; Tobago </li>
	<li>United States</li>
</ul>
<?php
if (!$isXHR)
{
	include dirname(__FILE__) . '/includes/footer.inc.php';
}
?>