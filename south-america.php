<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'South America';
	include dirname(__FILE__) . '/includes/header.inc.php';
}
?>
<ul>
	<li>Argentina</li>
	<li>Bolivia</li>
	<li>Brazil</li>
	<li>Chile</li>
	<li>Colombia</li>
	<li>Ecuador</li>
	<li>Guyana</li>
	<li>Paraguay</li>
	<li>Peru</li>
	<li>Suriname</li>
	<li>Uruguay</li>
	<li>Venezuela</li>
</ul> 
<?php
if (!$isXHR)
{
	include dirname(__FILE__) . '/includes/footer.inc.php';
}
?>