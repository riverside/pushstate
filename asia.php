<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'Asia';
	include dirname(__FILE__) . '/includes/header.inc.php';
}
?>
<ul>
	<li>Afghanistan </li>
	<li>Bahrain </li>
	<li>Bangladesh </li>
	<li>Bhutan </li>
	<li>Brunei </li>
	<li>Burma (Myanmar) </li>
	<li>Cambodia </li>
	<li>China </li>
	<li>East Timor </li>
	<li>India </li>
	<li>Indonesia </li>
	<li>Iran </li>
	<li>Iraq </li>
	<li>Israel </li>
	<li>Japan </li>
	<li>Jordan </li>
	<li>Kazakhstan </li>
	<li>Korea (north) </li>
	<li>Korea (south) </li>
	<li>Kuwait </li>
	<li>Kyrgyzstan </li>
	<li>Laos </li>
	<li>Lebanon </li>
	<li>Malaysia </li>
	<li>Maldives </li>
	<li>Mongolia </li>
	<li>Nepal </li>
	<li>Oman </li>
	<li>Pakistan </li>
	<li>Philippines </li>
	<li>Qatar </li>
	<li>Russian Federation </li>
	<li>Saudi Arabia </li>
	<li>Singapore </li>
	<li>Sri Lanka </li>
	<li>Syria </li>
	<li>Taiwan </li>
	<li>Tajikistan </li>
	<li>Thailand </li>
	<li>Turkey </li>
	<li>Turkmenistan </li>
	<li>United Arab Emirates </li>
	<li>Uzbekistan </li>
	<li>Vietnam </li>
	<li>Yemen</li>
</ul> 
<?php
if (!$isXHR)
{
	include dirname(__FILE__) . '/includes/footer.inc.php';
}
?>