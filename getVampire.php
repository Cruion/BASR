<?php

require "MySQL.php";
require "queries.php";

$suburb = $_POST["suburb"];

$vampire = getSuburbVAMPIRE($suburb);

if (is_null($vampire[0]["avgincome"])) {
	echo "<h3 class=\"text-center\">";
	echo "N/A";
	echo "</h3>";
	exit();
}

echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Median Household Income</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo "$".$vampire[0]["avgincome"];
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">$".$vampire[0]["minincome"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">$".$vampire[0]["maxincome"]."</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Drive to Work</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo $vampire[0]["avgtravelcar"]."%";
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["mintravelcar"]."%</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["maxtravelcar"]."%</p>";
echo "</div>";
echo "</div></div></div>";



echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Two or More Cars</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo $vampire[0]["avgtwocars"]."%";
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["mintwocars"]."%</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["maxtwocars"]."%</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Current Mortgage</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo $vampire[0]["avgmortgage"]."%";
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["minmortgage"]."%</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["maxmortgage"]."%</p>";
echo "</div>";
echo "</div></div></div>";



echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Vulnerability Index</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo $vampire[0]["avgVAMPIRE"]." - ".getVAMPIREInfo($vampire[0]["avgVAMPIRE"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["minVAMPIRE"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$vampire[0]["maxVAMPIRE"]."</p>";
echo "</div>";
echo "</div></div>";

echo "<div class=\"row\">";
echo "<h6 class=\"text-center\">Based on ".$vampire[0]["cnt"]." data collection area(s).</h6>";
echo "</div>";


function getVAMPIREInfo($value) {
	if ($value <= 8) {
		return "Very Low";
	} else if ($value <= 12) {
		return "Low";
	} else if ($value <= 16) {
		return "Moderate";
	} else if ($value <= 20) {
		return "High";
	} else {
		return "Very High";
	}
}