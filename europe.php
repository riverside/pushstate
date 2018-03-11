<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'Europe';
	include dirname(__FILE__) . '/includes/header.inc.php';
}
?>
<ul>
	<li>Albania </li>
	<li>Andorra </li>
	<li>Armenia </li>
	<li>Austria </li>
	<li>Azerbaijan </li>
	<li>Belarus </li>
	<li>Belgium </li>
	<li>Bosnia and Herzegovina </li>
	<li>Bulgaria </li>
	<li>Croatia </li>
	<li>Cyprus </li>
	<li>Czech Republic </li>
	<li>Denmark </li>
	<li>Estonia </li>
	<li>Finland </li>
	<li>France </li>
	<li>Georgia </li>
	<li>Germany </li>
	<li>Greece </li>
	<li>Hungary </li>
	<li>Iceland </li>
	<li>Ireland </li>
	<li>Italy </li>
	<li>Latvia </li>
	<li>Liechtenstein </li>
	<li>Lithuania </li>
	<li>Luxembourg </li>
	<li>Macedonia </li>
	<li>Malta </li>
	<li>Moldova </li>
	<li>Monaco </li>
	<li>Netherlands </li>
	<li>Norway </li>
	<li>Poland </li>
	<li>Portugal </li>
	<li>Romania </li>
	<li>San Marino </li>
	<li>Serbia and Montenegro (Yugoslavia) </li>
	<li>Slovakia </li>
	<li>Slovenia </li>
	<li>Spain </li>
	<li>Sweden </li>
	<li>Switzerland </li>
	<li>Ukraine </li>
	<li>United Kingdom </li>
	<li>Vatican City </li>
</ul>
<?php
if (!$isXHR)
{
	include dirname(__FILE__) . '/includes/footer.inc.php';
}
?>