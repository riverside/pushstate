<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'Oceania';
	include dirname(__FILE__) . '/includes/header.inc.php';
}
?>
<ul>
	<li>Australia </li>
	<li>Fiji </li>
	<li>Kiribati </li>
	<li>Marshall Islands </li>
	<li>Micronesia </li>
	<li>Nauru </li>
	<li>New Zealand </li>
	<li>Palau </li>
	<li>Papua New Guinea </li>
	<li>Samoa </li>
	<li>Solomon Islands </li>
	<li>Tonga </li>
	<li>Tuvalu </li>
	<li>Vanuatu</li>
</ul>
<?php
if (!$isXHR)
{
	include dirname(__FILE__) . '/includes/footer.inc.php';
}
?>