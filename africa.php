<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'Africa';
	include dirname(__FILE__) . '/includes/header.inc.php';
}
?>
<ul>
	<li>Algeria </li>
	<li>Angola </li>
	<li>Benin </li>
	<li>Botswana </li>
	<li>Burkina </li>
	<li>Burundi </li>
	<li>Cameroon </li>
	<li>Cape Verde </li>
	<li>Central African Republic </li>
	<li>Chad </li>
	<li>Comoros </li>
	<li>Congo </li>
	<li>Congo (Dem. Rep.) </li>
	<li>Djibouti </li>
	<li>Egypt </li>
	<li>Equatorial Guinea </li>
	<li>Eritrea </li>
	<li>Ethiopia </li>
	<li>Gabon </li>
	<li>Gambia </li>
	<li>Ghana </li>
	<li>Guinea </li>
	<li>Guinea-Bissau </li>
	<li>Ivory Coast </li>
	<li>Kenya </li>
	<li>Lesotho </li>
	<li>Liberia </li>
	<li>Libya </li>
	<li>Madagascar </li>
	<li>Malawi </li>
	<li>Mali </li>
	<li>Mauritania </li>
	<li>Mauritius </li>
	<li>Morocco </li>
	<li>Mozambique </li>
	<li>Namibia </li>
	<li>Niger </li>
	<li>Nigeria </li>
	<li>Rwanda </li>
	<li>Sao Tome and Principe </li>
	<li>Senegal </li>
	<li>Seychelles </li>
	<li>Sierra Leone </li>
	<li>Somalia </li>
	<li>South Africa </li>
	<li>Sudan </li>
	<li>Swaziland </li>
	<li>Tanzania </li>
	<li>Togo </li>
	<li>Tunisia </li>
	<li>Uganda </li>
	<li>Zambia </li>
	<li>Zimbabwe</li>
</ul>
<?php
if (!$isXHR)
{
	include dirname(__FILE__) . '/includes/footer.inc.php';
}
?>