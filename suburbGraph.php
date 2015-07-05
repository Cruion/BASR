<?php

require "MySQL.php";
require "queries.php";

$start = $_POST["start"];
$end = $_POST["end"];

$suburb1 = $_POST["suburb1"];
if ($suburb1 != "EMPTY") {

$start = $_POST["start"];
$end = $_POST["end"];

$dwellings1 = $_POST["dwellings1"];

$dwellings1 = $dwellings1."'Fixed'";

$bedrooms1 = $_POST["bedrooms1"];
$bedrooms1 = $bedrooms1."-1";


$monthData1 = getSuburbOverTime($suburb1, $start, $end, $dwellings1, $bedrooms1);
}

$suburb2 = $_POST["suburb2"];

if ($suburb2 != "EMPTY") {

$dwellings2 = $_POST["dwellings2"];

$dwellings2 = $dwellings2."'Fixed'";

$bedrooms2 = $_POST["bedrooms2"];
$bedrooms2 = $bedrooms2."-1";
$monthData2 = getSuburbOverTime($suburb2, $start, $end, $dwellings2, $bedrooms2);
}

$graphArray = array();
$graph = array("Month, Year", "Left Min Rent", "Left Average Rent", "Left Max Rent", "Left New Bonds", "Right Min Rent", "Right Average Rent", "Right Max Rent", "Right New Bonds");
//$graph = array("Month, Year", "Left Min Rent", "Left Average Rent", "Left Max Rent", "Right Min Rent", "Right Average Rent", "Right Max Rent");
$graphArray[] = $graph;

$leftPos = 0;
$rightPos = 0;

for ($i = $start; $i <= $end; $i++) 
{
	$month = getMonthYear($i);
	$lmin = 0;
	$lavg = 0;
	$lmax = 0;
	$lcnt = 0;
	$rmin = 0;
	$ravg = 0;
	$rmax = 0;
	$rcnt = 0;

if ($suburb1 != "EMPTY") {
	while ($monthData1 && $monthData1[$leftPos]["absmonth"] < $i) {
		if ($leftPos > count($monthData1)) {
			break;
		}
		$leftPos++;
	}
	if ($monthData1 && $monthData1[$leftPos]["absmonth"] == $i) {
		$lmin = $monthData1[$leftPos]["minRent"];
		$lavg = $monthData1[$leftPos]["avgRent"];
		$lmax = $monthData1[$leftPos]["maxRent"];
		$lcnt = $monthData1[$leftPos]["numBonds"];
	}
}
if ($suburb2 != "EMPTY") {

	while ($monthData2 && $monthData2[$rightPos]["absmonth"] < $i) {
		$rightPos++;
		if ($rightPos > count($monthData2)) {
			break;
		}
	}
	if ($monthData2 && $monthData2[$rightPos]["absmonth"] == $i) {
		$rmin = $monthData2[$rightPos]["minRent"];
		$ravg = $monthData2[$rightPos]["avgRent"];
		$rmax = $monthData2[$rightPos]["maxRent"];
		$rcnt = $monthData2[$rightPos]["numBonds"];
	}
}

	$graph = array($month, floatval($lmin), floatval($lavg), floatval($lmax), intval($lcnt), floatval($rmin), floatval($ravg), floatval($rmax), intval($rcnt));
	//$graph = array($month, floatval($lmin), floatval($lavg), floatval($lmax), floatval($rmin), floatval($ravg), floatval($rmax));
	$graphArray[] = $graph;
}

echo json_encode($graphArray);

?>