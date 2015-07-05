<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brisbane Area Suburb Review - BASR</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="selectize.bootstrap3.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="selectize.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

  </head>
  <body>
    <nav class="navbar .navbar-static-top navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img style="width:25px; height: 25px" alt"logo" src="logo.png" /></a>
          <a class="navbar-brand" href="index.php">Brisbane Area Suburb Review - BASR - GovHack 2015</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
      	<div id="slider-range"></div>
      	<h3 id="slider-display-month" style="text-align: center">test</h3>
        <div class="row">
        	<div class="col-xs-6">
        		<select id="select-suburb1" class="demo-default" placeholder="Select a suburb...">
						<option value="">Select a suburb...</option>
						<option value="Acacia Ridge">Acacia Ridge</option>
						<option value="Albany Creek">Albany Creek</option>
						<option value="Albion">Albion</option>
						<option value="Alderley">Alderley</option>
						<option value="Alexandra Hills">Alexandra Hills</option>
						<option value="Algester">Algester</option>
						<option value="Amberley">Amberley</option>
						<option value="Annerley">Annerley</option>
						<option value="Anstead">Anstead</option>
						<option value="Arana Hills">Arana Hills</option>
						<option value="Archerfield">Archerfield</option>
						<option value="Ascot">Ascot</option>
						<option value="Ashgrove">Ashgrove</option>
						<option value="Aspley">Aspley</option>
						<option value="Auchenflower">Auchenflower</option>
						<option value="Augustine Heights">Augustine Heights</option>
						<option value="Bahrs Scrub">Bahrs Scrub</option>
						<option value="Bald Hills">Bald Hills</option>
						<option value="Balmoral">Balmoral</option>
						<option value="Bannockburn">Bannockburn</option>
						<option value="Banyo">Banyo</option>
						<option value="Bardon">Bardon</option>
						<option value="Barellan Point">Barellan Point</option>
						<option value="Basin Pocket">Basin Pocket</option>
						<option value="Beenleigh">Beenleigh</option>
						<option value="Belivah">Belivah</option>
						<option value="Bellbird Park">Bellbird Park</option>
						<option value="Bellbowrie">Bellbowrie</option>
						<option value="Bellmere">Bellmere</option>
						<option value="Belmont">Belmont</option>
						<option value="Berrinba">Berrinba</option>
						<option value="Bethania">Bethania</option>
						<option value="Birkdale">Birkdale</option>
						<option value="Blackstone">Blackstone</option>
						<option value="Boondall">Boondall</option>
						<option value="Booval">Booval</option>
						<option value="Boronia Heights">Boronia Heights</option>
						<option value="Bowen Hills">Bowen Hills</option>
						<option value="Bracken Ridge">Bracken Ridge</option>
						<option value="Brassall">Brassall</option>
						<option value="Bray Park">Bray Park</option>
						<option value="Brendale">Brendale</option>
						<option value="Bridgeman Downs">Bridgeman Downs</option>
						<option value="Brighton">Brighton</option>
						<option value="Brisbane City">Brisbane City</option>
						<option value="Brookfield">Brookfield</option>
						<option value="Brookwater">Brookwater</option>
						<option value="Browns Plains">Browns Plains</option>
						<option value="Buccan">Buccan</option>
						<option value="Bulimba">Bulimba</option>
						<option value="Bundamba">Bundamba</option>
						<option value="Bunya">Bunya</option>
						<option value="Burpengary">Burpengary</option>
						<option value="Burpengary East">Burpengary East</option>
						<option value="Caboolture">Caboolture</option>
						<option value="Caboolture South">Caboolture South</option>
						<option value="Calamvale">Calamvale</option>
						<option value="Camira">Camira</option>
						<option value="Camp Hill">Camp Hill</option>
						<option value="Cannon Hill">Cannon Hill</option>
						<option value="Capalaba">Capalaba</option>
						<option value="Carbrook">Carbrook</option>
						<option value="Carina">Carina</option>
						<option value="Carina Heights">Carina Heights</option>
						<option value="Carindale">Carindale</option>
						<option value="Carole Park">Carole Park</option>
						<option value="Carseldine">Carseldine</option>
						<option value="Cashmere">Cashmere</option>
						<option value="Chambers Flat">Chambers Flat</option>
						<option value="Chandler">Chandler</option>
						<option value="Chapel Hill">Chapel Hill</option>
						<option value="Chelmer">Chelmer</option>
						<option value="Chermside">Chermside</option>
						<option value="Chermside West">Chermside West</option>
						<option value="Churchill">Churchill</option>
						<option value="Chuwar">Chuwar</option>
						<option value="Clayfield">Clayfield</option>
						<option value="Clear Mountain">Clear Mountain</option>
						<option value="Cleveland">Cleveland</option>
						<option value="Clontarf">Clontarf</option>
						<option value="Coalfalls">Coalfalls</option>
						<option value="Collingwood Park">Collingwood Park</option>
						<option value="Coopers Plains">Coopers Plains</option>
						<option value="Coorparoo">Coorparoo</option>
						<option value="Corinda">Corinda</option>
						<option value="Cornubia">Cornubia</option>
						<option value="Crestmead">Crestmead</option>
						<option value="Daisy Hill">Daisy Hill</option>
						<option value="Dakabin">Dakabin</option>
						<option value="Darra">Darra</option>
						<option value="Deagon">Deagon</option>
						<option value="Deception Bay">Deception Bay</option>
						<option value="Deebing Heights">Deebing Heights</option>
						<option value="Dinmore">Dinmore</option>
						<option value="Doolandella">Doolandella</option>
						<option value="Drewvale">Drewvale</option>
						<option value="Durack">Durack</option>
						<option value="Dutton Park">Dutton Park</option>
						<option value="Eagle Farm">Eagle Farm</option>
						<option value="Eagleby">Eagleby</option>
						<option value="East Brisbane">East Brisbane</option>
						<option value="East Ipswich">East Ipswich</option>
						<option value="Eastern Heights">Eastern Heights</option>
						<option value="Eatons Hill">Eatons Hill</option>
						<option value="Ebbw Vale">Ebbw Vale</option>
						<option value="Edens Landing">Edens Landing</option>
						<option value="Eight Mile Plains">Eight Mile Plains</option>
						<option value="Elimbah">Elimbah</option>
						<option value="Ellen Grove">Ellen Grove</option>
						<option value="Enoggera">Enoggera</option>
						<option value="Everton Hills">Everton Hills</option>
						<option value="Everton Park">Everton Park</option>
						<option value="Fairfield">Fairfield</option>
						<option value="Ferny Grove">Ferny Grove</option>
						<option value="Ferny Hills">Ferny Hills</option>
						<option value="Fig Tree Pocket">Fig Tree Pocket</option>
						<option value="Fitzgibbon">Fitzgibbon</option>
						<option value="Flinders View">Flinders View</option>
						<option value="Forest Lake">Forest Lake</option>
						<option value="Forestdale">Forestdale</option>
						<option value="Fortitude Valley">Fortitude Valley</option>
						<option value="Gailes">Gailes</option>
						<option value="Gaythorne">Gaythorne</option>
						<option value="Geebung">Geebung</option>
						<option value="Goodna">Goodna</option>
						<option value="Gordon Park">Gordon Park</option>
						<option value="Graceville">Graceville</option>
						<option value="Grange">Grange</option>
						<option value="Greenbank">Greenbank</option>
						<option value="Greenslopes">Greenslopes</option>
						<option value="Griffin">Griffin</option>
						<option value="Gumdale">Gumdale</option>
						<option value="Hamilton">Hamilton</option>
						<option value="Hawthorne">Hawthorne</option>
						<option value="Heathwood">Heathwood</option>
						<option value="Hemmant">Hemmant</option>
						<option value="Hendra">Hendra</option>
						<option value="Heritage Park">Heritage Park</option>
						<option value="Herston">Herston</option>
						<option value="Highgate Hill">Highgate Hill</option>
						<option value="Hillcrest">Hillcrest</option>
						<option value="Holland Park">Holland Park</option>
						<option value="Holland Park West">Holland Park West</option>
						<option value="Holmview">Holmview</option>
						<option value="Inala">Inala</option>
						<option value="Indooroopilly">Indooroopilly</option>
						<option value="Ipswich">Ipswich</option>
						<option value="Jamboree Heights">Jamboree Heights</option>
						<option value="Jindalee">Jindalee</option>
						<option value="Joyner">Joyner</option>
						<option value="Kallangur">Kallangur</option>
						<option value="Kangaroo Point">Kangaroo Point</option>
						<option value="Karalee">Karalee</option>
						<option value="Karana Downs">Karana Downs</option>
						<option value="Karawatha">Karawatha</option>
						<option value="Kedron">Kedron</option>
						<option value="Kelvin Grove">Kelvin Grove</option>
						<option value="Kenmore">Kenmore</option>
						<option value="Kenmore Hills">Kenmore Hills</option>
						<option value="Keperra">Keperra</option>
						<option value="Kingston">Kingston</option>
						<option value="Kippa-Ring">Kippa-Ring</option>
						<option value="Kuraby">Kuraby</option>
						<option value="Kurwongbah">Kurwongbah</option>
						<option value="Larapinta">Larapinta</option>
						<option value="Lawnton">Lawnton</option>
						<option value="Leichhardt">Leichhardt</option>
						<option value="Logan Central">Logan Central</option>
						<option value="Logan Reserve">Logan Reserve</option>
						<option value="Loganholme">Loganholme</option>
						<option value="Loganlea">Loganlea</option>
						<option value="Lota">Lota</option>
						<option value="Lutwyche">Lutwyche</option>
						<option value="Lytton">Lytton</option>
						<option value="Macgregor">Macgregor</option>
						<option value="Mackenzie">Mackenzie</option>
						<option value="Mango Hill">Mango Hill</option>
						<option value="Manly">Manly</option>
						<option value="Manly West">Manly West</option>
						<option value="Mansfield">Mansfield</option>
						<option value="Margate">Margate</option>
						<option value="Marsden">Marsden</option>
						<option value="McDowall">McDowall</option>
						<option value="Meadowbrook">Meadowbrook</option>
						<option value="Middle Park">Middle Park</option>
						<option value="Milton">Milton</option>
						<option value="Mitchelton">Mitchelton</option>
						<option value="Moggill">Moggill</option>
						<option value="Moodlu">Moodlu</option>
						<option value="Moores Pocket">Moores Pocket</option>
						<option value="Moorooka">Moorooka</option>
						<option value="Morayfield">Morayfield</option>
						<option value="Morningside">Morningside</option>
						<option value="Mount Crosby">Mount Crosby</option>
						<option value="Mount Gravatt">Mount Gravatt</option>
						<option value="Mount Gravatt East">Mount Gravatt East</option>
						<option value="Mount Ommaney">Mount Ommaney</option>
						<option value="Mount Warren Park">Mount Warren Park</option>
						<option value="Munruben">Munruben</option>
						<option value="Murarrie">Murarrie</option>
						<option value="Murrumba Downs">Murrumba Downs</option>
						<option value="Narangba">Narangba</option>
						<option value="Nathan">Nathan</option>
						<option value="New Beith">New Beith</option>
						<option value="New Chum">New Chum</option>
						<option value="New Farm">New Farm</option>
						<option value="Newmarket">Newmarket</option>
						<option value="Newport">Newport</option>
						<option value="Newstead">Newstead</option>
						<option value="Newtown">Newtown</option>
						<option value="Norman Park">Norman Park</option>
						<option value="North Booval">North Booval</option>
						<option value="North Ipswich">North Ipswich</option>
						<option value="North Lakes">North Lakes</option>
						<option value="Northgate">Northgate</option>
						<option value="Nudgee">Nudgee</option>
						<option value="Nudgee Beach">Nudgee Beach</option>
						<option value="Nundah">Nundah</option>
						<option value="One Mile">One Mile</option>
						<option value="Ormiston">Ormiston</option>
						<option value="Oxley">Oxley</option>
						<option value="Paddington">Paddington</option>
						<option value="Pallara">Pallara</option>
						<option value="Park Ridge">Park Ridge</option>
						<option value="Park Ridge South">Park Ridge South</option>
						<option value="Parkinson">Parkinson</option>
						<option value="Petrie">Petrie</option>
						<option value="Petrie Terrace">Petrie Terrace</option>
						<option value="Pine Mountain">Pine Mountain</option>
						<option value="Pinjarra Hills">Pinjarra Hills</option>
						<option value="Pinkenba">Pinkenba</option>
						<option value="Pullenvale">Pullenvale</option>
						<option value="Raceview">Raceview</option>
						<option value="Ransome">Ransome</option>
						<option value="Red Hill">Red Hill</option>
						<option value="Redbank">Redbank</option>
						<option value="Redbank Plains">Redbank Plains</option>
						<option value="Redcliffe">Redcliffe</option>
						<option value="Redland Bay">Redland Bay</option>
						<option value="Regents Park">Regents Park</option>
						<option value="Richlands">Richlands</option>
						<option value="Riverhills">Riverhills</option>
						<option value="Riverview">Riverview</option>
						<option value="Robertson">Robertson</option>
						<option value="Rochedale">Rochedale</option>
						<option value="Rochedale South">Rochedale South</option>
						<option value="Rocklea">Rocklea</option>
						<option value="Rothwell">Rothwell</option>
						<option value="Runcorn">Runcorn</option>
						<option value="Sadliers Crossing">Sadliers Crossing</option>
						<option value="Salisbury">Salisbury</option>
						<option value="Sandgate">Sandgate</option>
						<option value="Scarborough">Scarborough</option>
						<option value="Seven Hills">Seven Hills</option>
						<option value="Seventeen Mile Rocks">Seventeen Mile Rocks</option>
						<option value="Shailer Park">Shailer Park</option>
						<option value="Sheldon">Sheldon</option>
						<option value="Sherwood">Sherwood</option>
						<option value="Shorncliffe">Shorncliffe</option>
						<option value="Silkstone">Silkstone</option>
						<option value="Sinnamon Park">Sinnamon Park</option>
						<option value="Slacks Creek">Slacks Creek</option>
						<option value="South Brisbane">South Brisbane</option>
						<option value="Spring Hill">Spring Hill</option>
						<option value="Spring Mountain">Spring Mountain</option>
						<option value="Springfield">Springfield</option>
						<option value="Springfield Central">Springfield Central</option>
						<option value="Springfield Lakes">Springfield Lakes</option>
						<option value="Springwood">Springwood</option>
						<option value="St Lucia">St Lucia</option>
						<option value="Stafford">Stafford</option>
						<option value="Stafford Heights">Stafford Heights</option>
						<option value="Strathpine">Strathpine</option>
						<option value="Stretton">Stretton</option>
						<option value="Sumner">Sumner</option>
						<option value="Sunnybank">Sunnybank</option>
						<option value="Sunnybank Hills">Sunnybank Hills</option>
						<option value="Taigum">Taigum</option>
						<option value="Tanah Merah">Tanah Merah</option>
						<option value="Taringa">Taringa</option>
						<option value="Tarragindi">Tarragindi</option>
						<option value="Teneriffe">Teneriffe</option>
						<option value="Tennyson">Tennyson</option>
						<option value="The Gap">The Gap</option>
						<option value="Thorneside">Thorneside</option>
						<option value="Thornlands">Thornlands</option>
						<option value="Tingalpa">Tingalpa</option>
						<option value="Tivoli">Tivoli</option>
						<option value="Toowong">Toowong</option>
						<option value="Underwood">Underwood</option>
						<option value="Upper Caboolture">Upper Caboolture</option>
						<option value="Upper Kedron">Upper Kedron</option>
						<option value="Upper Mount Gravatt">Upper Mount Gravatt</option>
						<option value="Victoria Point">Victoria Point</option>
						<option value="Virginia">Virginia</option>
						<option value="Wacol">Wacol</option>
						<option value="Wakerley">Wakerley</option>
						<option value="Wamuran">Wamuran</option>
						<option value="Warner">Warner</option>
						<option value="Waterford">Waterford</option>
						<option value="Waterford West">Waterford West</option>
						<option value="Wavell Heights">Wavell Heights</option>
						<option value="Wellington Point">Wellington Point</option>
						<option value="West End">West End</option>
						<option value="West Ipswich">West Ipswich</option>
						<option value="Westlake">Westlake</option>
						<option value="Whiteside">Whiteside</option>
						<option value="Willawong">Willawong</option>
						<option value="Willowbank">Willowbank</option>
						<option value="Wilston">Wilston</option>
						<option value="Windaroo">Windaroo</option>
						<option value="Windsor">Windsor</option>
						<option value="Wishart">Wishart</option>
						<option value="Woodend">Woodend</option>
						<option value="Woodridge">Woodridge</option>
						<option value="Woody Point">Woody Point</option>
						<option value="Woolloongabba">Woolloongabba</option>
						<option value="Wooloowin">Wooloowin</option>
						<option value="Wulkuraka">Wulkuraka</option>
						<option value="Wynnum">Wynnum</option>
						<option value="Wynnum West">Wynnum West</option>
						<option value="Yamanto">Yamanto</option>
						<option value="Yeerongpilly">Yeerongpilly</option>
						<option value="Yeronga">Yeronga</option>
						<option value="Zillmere">Zillmere</option>
					</select>
        	</div>
        	<div class="col-xs-6">
        		<select id="select-suburb2" class="demo-default" placeholder="Select a suburb...">
						<option value="">Select a suburb...</option>
						<option value="Acacia Ridge">Acacia Ridge</option>
						<option value="Albany Creek">Albany Creek</option>
						<option value="Albion">Albion</option>
						<option value="Alderley">Alderley</option>
						<option value="Alexandra Hills">Alexandra Hills</option>
						<option value="Algester">Algester</option>
						<option value="Amberley">Amberley</option>
						<option value="Annerley">Annerley</option>
						<option value="Anstead">Anstead</option>
						<option value="Arana Hills">Arana Hills</option>
						<option value="Archerfield">Archerfield</option>
						<option value="Ascot">Ascot</option>
						<option value="Ashgrove">Ashgrove</option>
						<option value="Aspley">Aspley</option>
						<option value="Auchenflower">Auchenflower</option>
						<option value="Augustine Heights">Augustine Heights</option>
						<option value="Bahrs Scrub">Bahrs Scrub</option>
						<option value="Bald Hills">Bald Hills</option>
						<option value="Balmoral">Balmoral</option>
						<option value="Bannockburn">Bannockburn</option>
						<option value="Banyo">Banyo</option>
						<option value="Bardon">Bardon</option>
						<option value="Barellan Point">Barellan Point</option>
						<option value="Basin Pocket">Basin Pocket</option>
						<option value="Beenleigh">Beenleigh</option>
						<option value="Belivah">Belivah</option>
						<option value="Bellbird Park">Bellbird Park</option>
						<option value="Bellbowrie">Bellbowrie</option>
						<option value="Bellmere">Bellmere</option>
						<option value="Belmont">Belmont</option>
						<option value="Berrinba">Berrinba</option>
						<option value="Bethania">Bethania</option>
						<option value="Birkdale">Birkdale</option>
						<option value="Blackstone">Blackstone</option>
						<option value="Boondall">Boondall</option>
						<option value="Booval">Booval</option>
						<option value="Boronia Heights">Boronia Heights</option>
						<option value="Bowen Hills">Bowen Hills</option>
						<option value="Bracken Ridge">Bracken Ridge</option>
						<option value="Brassall">Brassall</option>
						<option value="Bray Park">Bray Park</option>
						<option value="Brendale">Brendale</option>
						<option value="Bridgeman Downs">Bridgeman Downs</option>
						<option value="Brighton">Brighton</option>
						<option value="Brisbane City">Brisbane City</option>
						<option value="Brookfield">Brookfield</option>
						<option value="Brookwater">Brookwater</option>
						<option value="Browns Plains">Browns Plains</option>
						<option value="Buccan">Buccan</option>
						<option value="Bulimba">Bulimba</option>
						<option value="Bundamba">Bundamba</option>
						<option value="Bunya">Bunya</option>
						<option value="Burpengary">Burpengary</option>
						<option value="Burpengary East">Burpengary East</option>
						<option value="Caboolture">Caboolture</option>
						<option value="Caboolture South">Caboolture South</option>
						<option value="Calamvale">Calamvale</option>
						<option value="Camira">Camira</option>
						<option value="Camp Hill">Camp Hill</option>
						<option value="Cannon Hill">Cannon Hill</option>
						<option value="Capalaba">Capalaba</option>
						<option value="Carbrook">Carbrook</option>
						<option value="Carina">Carina</option>
						<option value="Carina Heights">Carina Heights</option>
						<option value="Carindale">Carindale</option>
						<option value="Carole Park">Carole Park</option>
						<option value="Carseldine">Carseldine</option>
						<option value="Cashmere">Cashmere</option>
						<option value="Chambers Flat">Chambers Flat</option>
						<option value="Chandler">Chandler</option>
						<option value="Chapel Hill">Chapel Hill</option>
						<option value="Chelmer">Chelmer</option>
						<option value="Chermside">Chermside</option>
						<option value="Chermside West">Chermside West</option>
						<option value="Churchill">Churchill</option>
						<option value="Chuwar">Chuwar</option>
						<option value="Clayfield">Clayfield</option>
						<option value="Clear Mountain">Clear Mountain</option>
						<option value="Cleveland">Cleveland</option>
						<option value="Clontarf">Clontarf</option>
						<option value="Coalfalls">Coalfalls</option>
						<option value="Collingwood Park">Collingwood Park</option>
						<option value="Coopers Plains">Coopers Plains</option>
						<option value="Coorparoo">Coorparoo</option>
						<option value="Corinda">Corinda</option>
						<option value="Cornubia">Cornubia</option>
						<option value="Crestmead">Crestmead</option>
						<option value="Daisy Hill">Daisy Hill</option>
						<option value="Dakabin">Dakabin</option>
						<option value="Darra">Darra</option>
						<option value="Deagon">Deagon</option>
						<option value="Deception Bay">Deception Bay</option>
						<option value="Deebing Heights">Deebing Heights</option>
						<option value="Dinmore">Dinmore</option>
						<option value="Doolandella">Doolandella</option>
						<option value="Drewvale">Drewvale</option>
						<option value="Durack">Durack</option>
						<option value="Dutton Park">Dutton Park</option>
						<option value="Eagle Farm">Eagle Farm</option>
						<option value="Eagleby">Eagleby</option>
						<option value="East Brisbane">East Brisbane</option>
						<option value="East Ipswich">East Ipswich</option>
						<option value="Eastern Heights">Eastern Heights</option>
						<option value="Eatons Hill">Eatons Hill</option>
						<option value="Ebbw Vale">Ebbw Vale</option>
						<option value="Edens Landing">Edens Landing</option>
						<option value="Eight Mile Plains">Eight Mile Plains</option>
						<option value="Elimbah">Elimbah</option>
						<option value="Ellen Grove">Ellen Grove</option>
						<option value="Enoggera">Enoggera</option>
						<option value="Everton Hills">Everton Hills</option>
						<option value="Everton Park">Everton Park</option>
						<option value="Fairfield">Fairfield</option>
						<option value="Ferny Grove">Ferny Grove</option>
						<option value="Ferny Hills">Ferny Hills</option>
						<option value="Fig Tree Pocket">Fig Tree Pocket</option>
						<option value="Fitzgibbon">Fitzgibbon</option>
						<option value="Flinders View">Flinders View</option>
						<option value="Forest Lake">Forest Lake</option>
						<option value="Forestdale">Forestdale</option>
						<option value="Fortitude Valley">Fortitude Valley</option>
						<option value="Gailes">Gailes</option>
						<option value="Gaythorne">Gaythorne</option>
						<option value="Geebung">Geebung</option>
						<option value="Goodna">Goodna</option>
						<option value="Gordon Park">Gordon Park</option>
						<option value="Graceville">Graceville</option>
						<option value="Grange">Grange</option>
						<option value="Greenbank">Greenbank</option>
						<option value="Greenslopes">Greenslopes</option>
						<option value="Griffin">Griffin</option>
						<option value="Gumdale">Gumdale</option>
						<option value="Hamilton">Hamilton</option>
						<option value="Hawthorne">Hawthorne</option>
						<option value="Heathwood">Heathwood</option>
						<option value="Hemmant">Hemmant</option>
						<option value="Hendra">Hendra</option>
						<option value="Heritage Park">Heritage Park</option>
						<option value="Herston">Herston</option>
						<option value="Highgate Hill">Highgate Hill</option>
						<option value="Hillcrest">Hillcrest</option>
						<option value="Holland Park">Holland Park</option>
						<option value="Holland Park West">Holland Park West</option>
						<option value="Holmview">Holmview</option>
						<option value="Inala">Inala</option>
						<option value="Indooroopilly">Indooroopilly</option>
						<option value="Ipswich">Ipswich</option>
						<option value="Jamboree Heights">Jamboree Heights</option>
						<option value="Jindalee">Jindalee</option>
						<option value="Joyner">Joyner</option>
						<option value="Kallangur">Kallangur</option>
						<option value="Kangaroo Point">Kangaroo Point</option>
						<option value="Karalee">Karalee</option>
						<option value="Karana Downs">Karana Downs</option>
						<option value="Karawatha">Karawatha</option>
						<option value="Kedron">Kedron</option>
						<option value="Kelvin Grove">Kelvin Grove</option>
						<option value="Kenmore">Kenmore</option>
						<option value="Kenmore Hills">Kenmore Hills</option>
						<option value="Keperra">Keperra</option>
						<option value="Kingston">Kingston</option>
						<option value="Kippa-Ring">Kippa-Ring</option>
						<option value="Kuraby">Kuraby</option>
						<option value="Kurwongbah">Kurwongbah</option>
						<option value="Larapinta">Larapinta</option>
						<option value="Lawnton">Lawnton</option>
						<option value="Leichhardt">Leichhardt</option>
						<option value="Logan Central">Logan Central</option>
						<option value="Logan Reserve">Logan Reserve</option>
						<option value="Loganholme">Loganholme</option>
						<option value="Loganlea">Loganlea</option>
						<option value="Lota">Lota</option>
						<option value="Lutwyche">Lutwyche</option>
						<option value="Lytton">Lytton</option>
						<option value="Macgregor">Macgregor</option>
						<option value="Mackenzie">Mackenzie</option>
						<option value="Mango Hill">Mango Hill</option>
						<option value="Manly">Manly</option>
						<option value="Manly West">Manly West</option>
						<option value="Mansfield">Mansfield</option>
						<option value="Margate">Margate</option>
						<option value="Marsden">Marsden</option>
						<option value="McDowall">McDowall</option>
						<option value="Meadowbrook">Meadowbrook</option>
						<option value="Middle Park">Middle Park</option>
						<option value="Milton">Milton</option>
						<option value="Mitchelton">Mitchelton</option>
						<option value="Moggill">Moggill</option>
						<option value="Moodlu">Moodlu</option>
						<option value="Moores Pocket">Moores Pocket</option>
						<option value="Moorooka">Moorooka</option>
						<option value="Morayfield">Morayfield</option>
						<option value="Morningside">Morningside</option>
						<option value="Mount Crosby">Mount Crosby</option>
						<option value="Mount Gravatt">Mount Gravatt</option>
						<option value="Mount Gravatt East">Mount Gravatt East</option>
						<option value="Mount Ommaney">Mount Ommaney</option>
						<option value="Mount Warren Park">Mount Warren Park</option>
						<option value="Munruben">Munruben</option>
						<option value="Murarrie">Murarrie</option>
						<option value="Murrumba Downs">Murrumba Downs</option>
						<option value="Narangba">Narangba</option>
						<option value="Nathan">Nathan</option>
						<option value="New Beith">New Beith</option>
						<option value="New Chum">New Chum</option>
						<option value="New Farm">New Farm</option>
						<option value="Newmarket">Newmarket</option>
						<option value="Newport">Newport</option>
						<option value="Newstead">Newstead</option>
						<option value="Newtown">Newtown</option>
						<option value="Norman Park">Norman Park</option>
						<option value="North Booval">North Booval</option>
						<option value="North Ipswich">North Ipswich</option>
						<option value="North Lakes">North Lakes</option>
						<option value="Northgate">Northgate</option>
						<option value="Nudgee">Nudgee</option>
						<option value="Nudgee Beach">Nudgee Beach</option>
						<option value="Nundah">Nundah</option>
						<option value="One Mile">One Mile</option>
						<option value="Ormiston">Ormiston</option>
						<option value="Oxley">Oxley</option>
						<option value="Paddington">Paddington</option>
						<option value="Pallara">Pallara</option>
						<option value="Park Ridge">Park Ridge</option>
						<option value="Park Ridge South">Park Ridge South</option>
						<option value="Parkinson">Parkinson</option>
						<option value="Petrie">Petrie</option>
						<option value="Petrie Terrace">Petrie Terrace</option>
						<option value="Pine Mountain">Pine Mountain</option>
						<option value="Pinjarra Hills">Pinjarra Hills</option>
						<option value="Pinkenba">Pinkenba</option>
						<option value="Pullenvale">Pullenvale</option>
						<option value="Raceview">Raceview</option>
						<option value="Ransome">Ransome</option>
						<option value="Red Hill">Red Hill</option>
						<option value="Redbank">Redbank</option>
						<option value="Redbank Plains">Redbank Plains</option>
						<option value="Redcliffe">Redcliffe</option>
						<option value="Redland Bay">Redland Bay</option>
						<option value="Regents Park">Regents Park</option>
						<option value="Richlands">Richlands</option>
						<option value="Riverhills">Riverhills</option>
						<option value="Riverview">Riverview</option>
						<option value="Robertson">Robertson</option>
						<option value="Rochedale">Rochedale</option>
						<option value="Rochedale South">Rochedale South</option>
						<option value="Rocklea">Rocklea</option>
						<option value="Rothwell">Rothwell</option>
						<option value="Runcorn">Runcorn</option>
						<option value="Sadliers Crossing">Sadliers Crossing</option>
						<option value="Salisbury">Salisbury</option>
						<option value="Sandgate">Sandgate</option>
						<option value="Scarborough">Scarborough</option>
						<option value="Seven Hills">Seven Hills</option>
						<option value="Seventeen Mile Rocks">Seventeen Mile Rocks</option>
						<option value="Shailer Park">Shailer Park</option>
						<option value="Sheldon">Sheldon</option>
						<option value="Sherwood">Sherwood</option>
						<option value="Shorncliffe">Shorncliffe</option>
						<option value="Silkstone">Silkstone</option>
						<option value="Sinnamon Park">Sinnamon Park</option>
						<option value="Slacks Creek">Slacks Creek</option>
						<option value="South Brisbane">South Brisbane</option>
						<option value="Spring Hill">Spring Hill</option>
						<option value="Spring Mountain">Spring Mountain</option>
						<option value="Springfield">Springfield</option>
						<option value="Springfield Central">Springfield Central</option>
						<option value="Springfield Lakes">Springfield Lakes</option>
						<option value="Springwood">Springwood</option>
						<option value="St Lucia">St Lucia</option>
						<option value="Stafford">Stafford</option>
						<option value="Stafford Heights">Stafford Heights</option>
						<option value="Strathpine">Strathpine</option>
						<option value="Stretton">Stretton</option>
						<option value="Sumner">Sumner</option>
						<option value="Sunnybank">Sunnybank</option>
						<option value="Sunnybank Hills">Sunnybank Hills</option>
						<option value="Taigum">Taigum</option>
						<option value="Tanah Merah">Tanah Merah</option>
						<option value="Taringa">Taringa</option>
						<option value="Tarragindi">Tarragindi</option>
						<option value="Teneriffe">Teneriffe</option>
						<option value="Tennyson">Tennyson</option>
						<option value="The Gap">The Gap</option>
						<option value="Thorneside">Thorneside</option>
						<option value="Thornlands">Thornlands</option>
						<option value="Tingalpa">Tingalpa</option>
						<option value="Tivoli">Tivoli</option>
						<option value="Toowong">Toowong</option>
						<option value="Underwood">Underwood</option>
						<option value="Upper Caboolture">Upper Caboolture</option>
						<option value="Upper Kedron">Upper Kedron</option>
						<option value="Upper Mount Gravatt">Upper Mount Gravatt</option>
						<option value="Victoria Point">Victoria Point</option>
						<option value="Virginia">Virginia</option>
						<option value="Wacol">Wacol</option>
						<option value="Wakerley">Wakerley</option>
						<option value="Wamuran">Wamuran</option>
						<option value="Warner">Warner</option>
						<option value="Waterford">Waterford</option>
						<option value="Waterford West">Waterford West</option>
						<option value="Wavell Heights">Wavell Heights</option>
						<option value="Wellington Point">Wellington Point</option>
						<option value="West End">West End</option>
						<option value="West Ipswich">West Ipswich</option>
						<option value="Westlake">Westlake</option>
						<option value="Whiteside">Whiteside</option>
						<option value="Willawong">Willawong</option>
						<option value="Willowbank">Willowbank</option>
						<option value="Wilston">Wilston</option>
						<option value="Windaroo">Windaroo</option>
						<option value="Windsor">Windsor</option>
						<option value="Wishart">Wishart</option>
						<option value="Woodend">Woodend</option>
						<option value="Woodridge">Woodridge</option>
						<option value="Woody Point">Woody Point</option>
						<option value="Woolloongabba">Woolloongabba</option>
						<option value="Wooloowin">Wooloowin</option>
						<option value="Wulkuraka">Wulkuraka</option>
						<option value="Wynnum">Wynnum</option>
						<option value="Wynnum West">Wynnum West</option>
						<option value="Yamanto">Yamanto</option>
						<option value="Yeerongpilly">Yeerongpilly</option>
						<option value="Yeronga">Yeronga</option>
						<option value="Zillmere">Zillmere</option>
					</select>
        	</div>

        </div>
      </div>
    </div>
    
    <div class="container">
    <div class="row">
    <div class="col-xs-6 left">
    <h1 style="text-align: center" class="left" id="side1Suburb">Suburb</h1><br />
    <div style="text-align: center" id="side1Map"></div>
    </div>
    <div class="col-xs-6 right">
    <h1 style="text-align: center" class="right" id="side2Suburb">Suburb</h1><br />
    <div style="text-align: center" id="side2Map"></div>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-12">
    	<h3 class="text-center">Rental Properties</h3>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-6 left" id="side1Properties">
    </div>
    <div class="col-xs-6 right" id="side2Properties">
    </div>
    </div>
    <div class="row">
    <div class="col-xs-6 left" id="side1Bedrooms">
    </div>
    <div class="col-xs-6 right" id="side2Bedrooms">
    </div>
    </div>
    <div class="row">
    <div class="col-xs-6 left" id="side1Bonds">
    </div>
    <div class="col-xs-6 right" id="side2Bonds">
    </div>
    </div>
    <div class="row">
    	<div style="width:900px; display:block; margin: 0 auto !important;" id="chart">
    </div>
    </div>
<div class="row">
    <div class="col-xs-12">
    	<h3 class="text-center">All Properties</h3>
    </div>
    </div>
    <div class="row">
    <div class="col-xs-6 left"id="side1Vampire">
    </div>
    <div class="col-xs-6 right" id="side2Vampire">
    </div>
    </div>
    <div class="row">
    <div class="col-xs-6 left" id="side1Metro">
    </div>
    <div class="col-xs-6 right" id="side2Metro">
    </div>
    </div>
<script>
google.load('visualization', '1.1', {packages: ['corechart']});
				$('#select-suburb1').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body',
					onItemAdd: function(value, $item) {
						$("#side1Suburb").html(value);
						$("#side1Map").html("<p><a href=\"https://www.google.com.au/maps/place/"+value+" QLD/\" class=\"left\">Map</a><p>");

						$.post("getVampire.php", {
							suburb: value
						}).done(function(data) {
							$("#side1Vampire").html(data);
						});
						
						$.post("getMetro.php", {
							suburb: value
						}).done(function(data) {
							$("#side1Metro").html(data);
						});

						$.post("getDwelling.php", {
							suburb: value, 
							start: $( "#slider-range" ).slider( "values", 0 ),
							end: $( "#slider-range" ).slider( "values", 1 )
						}).done(function(data) {
							$("#side1Properties").html(data);
							dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	$.post("getBedrooms.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes
  	}).done(function(data) {
  		$("#side1Bedrooms").html(data);
  		dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side1Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {

  		$("#side1Bonds").html(data);
  		getGraphInfo();
  	});
  	});
						});
					}
				});

				$('#select-suburb2').selectize({
					create: false,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body',
					onItemAdd: function(value, $item) {
						$("#side2Suburb").html(value);
						$("#side2Map").html("<p><a href=\"https://www.google.com.au/maps/place/"+value+" QLD\" class=\"right\">Map</a></p>");

						$.post("getVampire.php", {
							suburb: value
						}).done(function(data) {
							$("#side2Vampire").html(data);
						});
						$.post("getMetro.php", {
							suburb: value
						}).done(function(data) {
							$("#side2Metro").html(data);
						});
						$.post("getDwelling.php", {
							suburb: value, 
							start: $( "#slider-range" ).slider( "values", 0 ),
							end: $( "#slider-range" ).slider( "values", 1 )
						}).done(function(data) {
							$("#side2Properties").html(data);
							dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	$.post("getBedrooms.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes
  	}).done(function(data) {
  		$("#side2Bedrooms").html(data);
  		dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side2Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {
  		$("#side2Bonds").html(data);
  		getGraphInfo();
  	});
  	});
						});
					}
				});

  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 1,
      max: 21,
      values: [ 1, 21 ],
      slide: function( event, ui ) {
        $( "#slider-display-month" ).html(getDate(ui.values[ 0 ]) + " - " + getDate(ui.values[ 1 ]));
        if ($("#side1Suburb").html() != "Suburb") {
        	$.post("getDwelling.php", {
				suburb: $("#side1Suburb").html(), 
				start: $( "#slider-range" ).slider( "values", 0 ),
				end: $( "#slider-range" ).slider( "values", 1 )
			}).done(function(data) {
				$("#side1Properties").html(data);
dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	$.post("getBedrooms.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes
  	}).done(function(data) {
  		$("#side1Bedrooms").html(data);
  		dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side1Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {

  		$("#side1Bonds").html(data);
  		getGraphInfo();
  	});
  	});

			});
        }
        if ($("#side2Suburb").html() != "Suburb") {
        	$.post("getDwelling.php", {
				suburb: $("#side2Suburb").html(), 
				start: $( "#slider-range" ).slider( "values", 0 ),
				end: $( "#slider-range" ).slider( "values", 1 )
			}).done(function(data) {
				$("#side2Properties").html(data);

				dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	$.post("getBedrooms.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes
  	}).done(function(data) {
  		$("#side2Bedrooms").html(data);

  		dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side2Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {
  		$("#side2Bonds").html(data);
  		getGraphInfo();
  	});
  	});
			});
        }
      }
    });
    $( "#slider-display-month" ).html(getDate($( "#slider-range" ).slider( "values", 0 )) +
      " - " + getDate($( "#slider-range" ).slider( "values", 1 ) ));
  });

  $(document).on("click", '.suburbButton', function() {
  	if ($(this).hasClass("btn-default")) {
  		$(this).removeClass("btn-default").addClass("btn-warning");
  	} else {
  		$(this).removeClass("btn-warning").addClass("btn-default");
  	}

  	if ($(this).parent().parent().parent().parent().attr("id") == "side1Properties") {

  	dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	$.post("getBedrooms.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes
  	}).done(function(data) {
  		$("#side1Bedrooms").html(data);
  		dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side1Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {

  		$("#side1Bonds").html(data);
  		getGraphInfo();
  	});
  	});

  	}

  	if ($(this).parent().parent().parent().parent().attr("id") == "side2Properties") {

  	dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	$.post("getBedrooms.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes
  	}).done(function(data) {
  		$("#side2Bedrooms").html(data);
  		dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side2Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {
  		$("#side2Bonds").html(data);
  		getGraphInfo();
  	});
  	});

  	}
  	

  });

$(document).on("click", ".bedroomButton", function() {
	if ($(this).hasClass("btn-default")) {
  		$(this).removeClass("btn-default").addClass("btn-warning");
  	} else {
  		$(this).removeClass("btn-warning").addClass("btn-default");
  	}
  	if ($(this).parent().parent().parent().parent().parent().attr("id") == "side1Bedrooms") {

  	dwellingTypes = "";

  	$("#side1Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side1Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side1Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {

  		$("#side1Bonds").html(data);
  		getGraphInfo();
  	});

  	}

  	if ($(this).parent().parent().parent().parent().parent().attr("id") == "side2Bedrooms") {

  	dwellingTypes = "";

  	$("#side2Properties").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			dwellingTypes = dwellingTypes + "'" + $(this).text() +"',";
  		}
  	});

  	bedrooms = "";

  	$("#side2Bedrooms").find("button").each(function() {
  		if ($(this).hasClass("btn-default")) {
  			bedrooms = bedrooms + $(this).text() +",";
  		}
  	});

  	$.post("getBonds.php",  {
  		suburb: $("#side2Suburb").html(), 
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings: dwellingTypes,
		bedrooms: bedrooms
  	}).done(function(data) {
  		$("#side2Bonds").html(data);
  		getGraphInfo();

  	});

  	}
});

function getDate(month) {
	switch (month) {
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

function getGraphInfo() {
	leftSuburb = "";
	leftDwellings = "";
	leftBedrooms = "";

	rightSuburb = "";
	rightDwellings = "";
	rightBedrooms = "";

	if ($("#side1Suburb").html() == "Suburb") {
		leftSuburb == "EMPTY";
	} else {
		leftSuburb = $("#side1Suburb").html();
	  	$("#side1Properties").find("button").each(function() {
	  		if ($(this).hasClass("btn-default")) {
	  			leftDwellings = leftDwellings + "'" + $(this).text() +"',";
	  		}
	  	});

	  	$("#side1Bedrooms").find("button").each(function() {
	  		if ($(this).hasClass("btn-default")) {
	  			leftBedrooms = leftBedrooms + $(this).text() +",";
	  		}
	  	});
	}
	if ($("#side2Suburb").html() == "Suburb") {
		rightSuburb == "EMPTY";
	} else {
		rightSuburb = $("#side2Suburb").html();
	  	$("#side2Properties").find("button").each(function() {
	  		if ($(this).hasClass("btn-default")) {
	  			rightDwellings = rightDwellings + "'" + $(this).text() +"',";
	  		}
	  	});

	  	$("#side2Bedrooms").find("button").each(function() {
	  		if ($(this).hasClass("btn-default")) {
	  			rightBedrooms = rightBedrooms + $(this).text() +",";
	  		}
	  	});
	}
	$.post("suburbGraph.php", {
		suburb1: leftSuburb,
		suburb2: rightSuburb,
		start: $( "#slider-range" ).slider( "values", 0 ),
		end: $( "#slider-range" ).slider( "values", 1 ),
		dwellings1: leftDwellings,
		dwellings2: rightDwellings,
		bedrooms1: leftBedrooms,
		bedrooms2: rightBedrooms
	}).done(function(data) {
		//alert(data);
		drawChart(data);
	});
}

function drawChart(chartInfo) {
	var data = google.visualization.arrayToDataTable(jQuery.parseJSON(chartInfo));

	var options = {
		title: "Comparision of Suburbs Weekly Rent Over Time",
		width: 900,
		//curveType: 'function',
		height: 500,
		seriesType: 'line',
		series: {
			0: {color: '#B87FD1'},
			1: {color: '#B87FD1'},
			2: {color: '#B87FD1'},
			3: {color: '#B87FD1', type: "bars"},
			4: {color: '#8BE3BA'},
			5: {color: '#8BE3BA'},
			6: {color: '#8BE3BA'},
			7: {color: '#8BE3BA', type: "bars"},
		}

	};

	var chart = new google.visualization.ComboChart(document.getElementById('chart'));
	chart.draw(data, options);
}

  </script>

  </body>
</html>