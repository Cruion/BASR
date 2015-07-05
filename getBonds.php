<?php

require "MySQL.php";
require "queries.php";

$suburb = $_POST["suburb"];
$start = $_POST["start"];
$end = $_POST["end"];

$dwellings = $_POST["dwellings"];

$dwellings = $dwellings."'Fixed'";

$bedrooms = $_POST["bedrooms"];
$bedrooms = $bedrooms."-1";

$numBonds = getSuburbBonds($suburb, $start, $end, $dwellings, $bedrooms);

echo "<div class=\"row\">";

echo "<div class=\"col-xs-2\">";

echo "<h5 class=\"text-center\"># New Bonds</h5>";

echo "</div><div class=\"col-xs-10\">";

echo "<h3 class=\"text-center\">";
echo $numBonds["numBonds"];
echo "</h3>";
echo "</div></div>";
?>