<?php

function getSuburbRent($suburbName)
{
	$query = MySQL::getInstance()->prepare(
		"SELECT * FROM rent WHERE locality = :suburbName"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->execute();
	return $query->fetchALL();
}

function getSuburbPropertyTypes($suburbName, $startMonth, $endMonth)
{
	$query = MySQL::getInstance()->prepare(
		"SELECT DISTINCT dwelling FROM rent WHERE locality = :suburbName AND absmonth BETWEEN :startMonth AND :endMonth ORDER BY dwelling"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->bindValue("startMonth", $startMonth, PDO::PARAM_INT);
	$query->bindValue("endMonth", $endMonth, PDO::PARAM_INT);
	$query->execute();
	return $query->fetchALL();
}

function getSuburbBedRooms($suburbName, $startMonth, $endMonth, $dwellingTypes) 
{
	$query = MySQL::getInstance()->prepare(
		"SELECT DISTINCT bedrooms FROM rent WHERE locality = :suburbName AND dwelling IN (".$dwellingTypes.") AND absmonth BETWEEN :startMonth AND :endMonth ORDER BY bedrooms"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->bindValue("startMonth", $startMonth, PDO::PARAM_INT);
	$query->bindValue("endMonth", $endMonth, PDO::PARAM_INT);
	$query->execute();
	return $query->fetchALL();
}

function getSuburbBonds($suburbName, $startMonth, $endMonth, $dwellingTypes, $bedrooms) 
{
	$query = MySQL::getInstance()->prepare(
		"SELECT COUNT(*) as numBonds FROM rent WHERE locality = :suburbName AND dwelling IN (".$dwellingTypes.") AND absmonth BETWEEN :startMonth AND :endMonth AND bedrooms IN (".$bedrooms.")"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->bindValue("startMonth", $startMonth, PDO::PARAM_INT);
	$query->bindValue("endMonth", $endMonth, PDO::PARAM_INT);
	$query->execute();
	return $query->fetch();
}

function getSuburbOverTime($suburbName, $startMonth, $endMonth, $dwellingTypes, $bedrooms)
{
	$query = MySQL::getInstance()->prepare(
		//"SELECT COUNT(*) as numBonds FROM rent WHERE locality = :suburbName AND dwelling IN (".$dwellingTypes.") AND absmonth BETWEEN :startMonth AND :endMonth AND bedrooms IN (".$bedrooms.")"
	
		"SELECT MIN(weekrent) as minRent, ROUND(AVG(weekrent),2) as avgRent, MAX(weekrent) as maxRent, COUNT(weekRent) as numBonds, absmonth FROM rent WHERE locality = :suburbName AND dwelling IN (".$dwellingTypes.") AND absmonth BETWEEN :startMonth AND :endMonth AND bedrooms IN (".$bedrooms.") GROUP BY absmonth"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->bindValue("startMonth", $startMonth, PDO::PARAM_INT);
	$query->bindValue("endMonth", $endMonth, PDO::PARAM_INT);
	$query->execute();
	return $query->fetchALL();
}

function getSuburbVAMPIRE($suburbName) 
{
	$query = MySQL::getInstance()->prepare(
		"SELECT ROUND(MIN(proptwocars)*100,2) as mintwocars, ROUND(AVG(proptwocars)*100,2) as avgtwocars, ROUND(MAX(proptwocars)*100,2) as maxtwocars,
		        ROUND(MIN(proptravelcar)*100,2) as mintravelcar, ROUND(AVG(proptravelcar)*100,2) as avgtravelcar, ROUND(MAX(proptravelcar)*100,2) as maxtravelcar,
		        ROUND(MIN(propmortgage)*100,2) as minmortgage, ROUND(AVG(propmortgage)*100,2) as avgmortgage, ROUND(MAX(propmortgage)*100,2) as maxmortgage,
		        ROUND(MIN(medianincome),2) as minincome, ROUND(AVG(medianincome),2) as avgincome, ROUND(MAX(medianincome),2) as maxincome,
		        MIN(VAMPIRE) as minVAMPIRE, ROUND(AVG(VAMPIRE),0) as avgVAMPIRE, MAX(VAMPIRE) as maxVAMPIRE,
		        COUNT(proptwocars) as cnt FROM vampire WHERE locality = :suburbName"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->execute();
	return $query->fetchALL();
}

function getSuburbMetroARIA($suburbName) 
{
	$query = MySQL::getInstance()->prepare(
		"SELECT MIN(metroariac) as minariac, ROUND(AVG(metroariac),0) as avgariac, MAX(metroariac) as maxariac,
				MIN(metroedu) as minedu, ROUND(AVG(metroedu),0) as avgedu, MAX(metroedu) as maxedu,
				MIN(metrofinpost) as minfinpost, ROUND(AVG(metrofinpost),0) as avgfinpost, MAX(metrofinpost) as maxfinpost,
				MIN(metrohealth) as minhealth, ROUND(AVG(metrohealth),0) as avghealth, MAX(metrohealth) as maxhealth,
				MIN(metrotransport) as mintransport, ROUND(AVG(metrotransport),0) as avgtransport, MAX(metrotransport) as maxtransport,
				MIN(metroshop) as minshop, ROUND(AVG(metroshop),0) as avgshop, MAX(metroshop) as maxshop,
				COUNT(metroariac) as cnt FROM metro WHERE locality = :suburbName"
	);
	$query->bindValue("suburbName", $suburbName, PDO::PARAM_STR);
	$query->execute();
	return $query->fetchALL();
}

function getMonthYear($absMonth) {
	switch ($absMonth) {
		case 1:
			return "July, 2013";
		case 2:
			return "August, 2013";
		case 3:
			return "September, 2013";
		case 4:
			return "October, 2013";
		case 5:
			return "November, 2013";
		case 6:
			return "December, 2013";
		case 7:
			return "January, 2014";
		case 8:
			return "February, 2014";
		case 9:
			return "March, 2014";
		case 10:
			return "April, 2014";
		case 11:
			return "May, 2014";
		case 12:
			return "June, 2014";
		case 13:
			return "July, 2014";
		case 14:
			return "August, 2014";
		case 15:
			return "September, 2014";
		case 16:
			return "October, 2014";
		case 17:
			return "November, 2014";
		case 18:
			return "December, 2014";
		case 19:
			return "January, 2015";
		case 20:
			return "February, 2015";
		case 21:
			return "March, 2015";
	}
}

?>