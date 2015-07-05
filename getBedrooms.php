<?php

require "MySQL.php";
require "queries.php";

$suburb = $_POST["suburb"];
$start = $_POST["start"];
$end = $_POST["end"];

$dwellings = $_POST["dwellings"];

$dwellings = $dwellings."'Fixed'";


$bedrooms = getSuburbBedRooms($suburb, $start, $end, $dwellings);

echo "<div class=\"row\">";

echo "<div class=\"col-xs-2\">";

echo "<h5 class=\"text-center\"># Bedrooms</h5>";

echo "</div><div class=\"col-xs-10\">";

echo "<div class=\"btn-group btn-group-justified\" role=\"group\">";

	foreach($bedrooms as $bedroom) {
		echo "<div class=\"btn-group\" role=\"group\">";
		echo "<button type=\"button\" class=\"btn btn-default bedroomButton\">";
		echo $bedroom["bedrooms"];
		echo "</button>";
		echo "</div>";
	}
echo "</div></div>";
?>