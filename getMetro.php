<?php

require "MySQL.php";
require "queries.php";

$suburb = $_POST["suburb"];
$metro = getSuburbMetroARIA($suburb);


if (is_null($metro[0]["avgariac"])) {
	echo "<h3 class=\"text-center\">";
	echo "N/A";
	echo "</h3>";
	exit();
}

echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">General Metropolitain Accessability</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo getRating($metro[0]["avgariac"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["minariac"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["maxariac"]."</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Education Service Accessability</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo getRating($metro[0]["avgedu"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["minedu"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["maxedu"]."</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Financial and Postal Accessability</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo getRating($metro[0]["avgfinpost"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["minfinpost"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["maxfinpost"]."</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Healthcare Accessability</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo getRating($metro[0]["avghealth"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["minhealth"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["maxhealth"]."</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Public Transportation Accessability</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo getRating($metro[0]["avgtransport"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["mintransport"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["maxtransport"]."</p>";
echo "</div>";
echo "</div></div></div>";


echo "<div class=\"row\">";

echo "<div class=\"col-xs-4\">";

echo "<h5 class=\"text-center\">Shopping Accessability</h5>";

echo "</div><div class=\"col-xs-8\">";
echo "<div class=\"row\">";
echo "<h3 class=\"text-center\">";
echo getRating($metro[0]["avgshop"]);
echo "</h3>";
echo "</div>";
echo "<div class=\"row\">";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Min</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["minshop"]."</p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\"><strong>Max</strong></p>";
echo "</div>";
echo "<div class=\"col-xs-3\">";
echo "<p class=\"text-center\">".$metro[0]["maxshop"]."</p>";
echo "</div>";
echo "</div></div></div>";

echo "<div class=\"row\">";
echo "<h6 class=\"text-center\">Based on ".$metro[0]["cnt"]." data collection area(s).</h6>";
echo "</div>";


function getRating($value) {
	switch($value) {
		case 1:
			return "1 - Very High";
		case 2:
			return "2 - High";
		case 3:
			return "3 - Moderate";
		case 4:
			return "4 - Low";
		case 5:
			return "5 - Limited";
	}
}
?>