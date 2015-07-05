<?php

require "MySQL.php";
require "queries.php";

$suburb = $_POST["suburb"];
$start = $_POST["start"];
$end = $_POST["end"];

$dwellings = getSuburbPropertyTypes($suburb, $start, $end);

echo "<div class=\"row\">";

echo "<div class=\"col-xs-2\">";

echo "<h5 class=\"text-center\">Dwelling Type</h5>";

echo "</div><div class=\"col-xs-10\">";

echo "<div class=\"btn-group\" role=\"group\">";

	foreach($dwellings as $dwelling) {
		echo "<button type=\"button\" class=\"btn btn-default suburbButton\">";
		echo $dwelling["dwelling"];
		echo "</button>";
	}
echo "</div></div>";

?>