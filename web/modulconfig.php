<!DOCTYPE html>
<html lang="en">

<head>
	<script src="js/jquery-1.11.1.min.js"></script>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OpenWB</title>
	<meta name="description" content="Control your charge" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Kevin Wieland" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>
<body>
<?php


$lines = file('/var/www/html/openWB/openwb.conf');
foreach($lines as $line) {

	if(strpos($line, "debug=") !== false) {
		list(, $debugold) = explode("=", $line);
	}
	if(strpos($line, "pvbezugeinspeisung=") !== false) {
		list(, $pvbezugeinspeisungold) = explode("=", $line);
	}
	if(strpos($line, "sofortll=") !== false) {
		list(, $sofortllold) = explode("=", $line);
	}
	if(strpos($line, "dspeed=") !== false) {
		list(, $dspeedold) = explode("=", $line);
	}

	if(strpos($line, "sdmids1=") !== false) {
		list(, $sdmids1old) = explode("=", $line);
	}
	if(strpos($line, "minimalampv=") !== false) {
		list(, $minimalampvold) = explode("=", $line);
	}
	if(strpos($line, "minimalapv=") !== false) {
		list(, $minimalapvold) = explode("=", $line);
	}
	if(strpos($line, "minimalstromstaerke=") !== false) {
		list(, $minimalstromstaerkeold) = explode("=", $line);
	}
	if(strpos($line, "maximalstromstaerke=") !== false) {
		list(, $maximalstromstaerkeold) = explode("=", $line);
	}
	if(strpos($line, "evsecon=") !== false) {
		list(, $evseconold) = explode("=", $line);
	}
	if(strpos($line, "dacregister=") !== false) {
		list(, $dacregisterold) = explode("=", $line);
	}
	if(strpos($line, "dacregisters2=") !== false) {
		list(, $dacregisters2old) = explode("=", $line);
	}

	if(strpos($line, "dacregisters1=") !== false) {
		list(, $dacregisters1old) = explode("=", $line);
	}
	if(strpos($line, "modbusevsesource=") !== false) {
		list(, $modbusevsesourceold) = explode("=", $line);
	}

	if(strpos($line, "modbusevseid=") !== false) {
		list(, $modbusevseidold) = explode("=", $line);
	}
	if(strpos($line, "modbusevselanip=") !== false) {
		list(, $modbusevselanipold) = explode("=", $line);
	}
	if(strpos($line, "evsesources1=") !== false) {
		list(, $evsesources1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid1s1=") !== false) {
		list(, $sdm120modbusllid1s1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid2s1=") !== false) {
		list(, $sdm120modbusllid2s1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid3s1=") !== false) {
		list(, $sdm120modbusllid3s1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid1s2=") !== false) {
		list(, $sdm120modbusllid1s2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid2s2=") !== false) {
		list(, $sdm120modbusllid2s2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid3s2=") !== false) {
		list(, $sdm120modbusllid3s2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid1=") !== false) {
		list(, $sdm120modbusllid1old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid2=") !== false) {
		list(, $sdm120modbusllid2old) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllid3=") !== false) {
		list(, $sdm120modbusllid3old) = explode("=", $line);
	}
	if(strpos($line, "evseids1=") !== false) {
		list(, $evseids1old) = explode("=", $line);
	}
	if(strpos($line, "evseids2=") !== false) {
		list(, $evseids2old) = explode("=", $line);
	}

	if(strpos($line, "evselanips1=") !== false) {
		list(, $evselanips1old) = explode("=", $line);
	}
	if(strpos($line, "lastmanagement=") !== false) {
		list(, $lastmanagementold) = explode("=", $line);
	}
	if(strpos($line, "durchslp1=") !== false) {
		list(, $durchslp1old) = explode("=", $line);
	}
	if(strpos($line, "durchslp2=") !== false) {
		list(, $durchslp2old) = explode("=", $line);
	}
	if(strpos($line, "durchslp3=") !== false) {
		list(, $durchslp3old) = explode("=", $line);
	}
	if(strpos($line, "lastmanagements2=") !== false) {
		list(, $lastmanagements2old) = explode("=", $line);
	}
	if(strpos($line, "lastmmaxw=") !== false) {
		list(, $lastmmaxwold) = explode("=", $line);
	}

	if(strpos($line, "evsecons1=") !== false) {
		list(, $evsecons1old) = explode("=", $line);
	}

	if(strpos($line, "evsecons2=") !== false) {
		list(, $evsecons2old) = explode("=", $line);
	}
	if(strpos($line, "evsesources2=") !== false) {
		list(, $evsesources2old) = explode("=", $line);
	}
	if(strpos($line, "evseids1=") !== false) {
		list(, $evseids1old) = explode("=", $line);
	}
	if(strpos($line, "evselanips2=") !== false) {
		list(, $evselanips2old) = explode("=", $line);
	}
	if(strpos($line, "sdmids2=") !== false) {
		list(, $sdmids2old) = explode("=", $line);
	}
	if(strpos($line, "ladeleistungs2modul=") !== false) {
		list(, $ladeleistungs2modulold) = explode("=", $line);
	}
	if(strpos($line, "wattbezugmodul=") !== false) {
		list(, $wattbezugmodulold) = explode("=", $line);
	}

	if(strpos($line, "vzloggerip=") !== false) {
		list(, $vzloggeripold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerline=") !== false) {
		list(, $vzloggerlineold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerkwhline=") !== false) {
		list(, $vzloggerkwhlineold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerekwhline=") !== false) {
		list(, $vzloggerekwhlineold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerpvip=") !== false) {
		list(, $vzloggerpvipold) = explode("=", $line);
	}
	if(strpos($line, "vzloggerpvline=") !== false) {
		list(, $vzloggerpvlineold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusbezugid=") !== false) {
		list(, $sdm630modbusbezugidold) = explode("=", $line);
	}

	if(strpos($line, "sdm630modbusbezuglanip=") !== false) {
		list(, $sdm630modbusbezuglanipold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusbezugsource=") !== false) {
		list(, $sdm630modbusbezugsourceold) = explode("=", $line);
	}


	if(strpos($line, "pvwattmodul=") !== false) {
		list(, $pvwattmodulold) = explode("=", $line);
	}

	if(strpos($line, "wrfroniusip=") !== false) {
		list(, $wrfroniusipold) = explode("=", $line);
	}
	if(strpos($line, "wrkostalpikoip=") !== false) {
		list(, $wrkostalpikoipold) = explode("=", $line);
	}
	if(strpos($line, "ladeleistungmodul=") !== false) {
		list(, $ladeleistungmodulold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusllid=") !== false) {
		list(, $sdm630modbusllidold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbusllsource=") !== false) {
		list(, $sdm630modbusllsourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm120modbusllsource=") !== false) {
		list(, $sdm120modbusllsourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuslllanip=") !== false) {
		list(, $sdm630modbuslllanipold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuswrid=") !== false) {
		list(, $sdm630modbuswridold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuswrsource=") !== false) {
		list(, $sdm630modbuswrsourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm630modbuswrlanip=") !== false) {
		list(, $sdm630modbuswrlanipold) = explode("=", $line);
	}
	if(strpos($line, "socmodul=") !== false) {
		list(, $socmodulold) = explode("=", $line);
	}
	if(strpos($line, "hsocip=") !== false) {
		list(, $hsocipold) = explode("=", $line, 2);
	}
	if(strpos($line, "socmodul1=") !== false) {
		list(, $socmodul1old) = explode("=", $line);
	}
	if(strpos($line, "hsocip1=") !== false) {
		list(, $hsocip1old) = explode("=", $line);
	}
	if(strpos($line, "nachtladen=") !== false) {
		list(, $nachtladenold) = explode("=", $line);
	}
	if(strpos($line, "nachtll=") !== false) {
		list(, $nachtllold) = explode("=", $line);
	}
	if(strpos($line, "nachtladens1=") !== false) {
		list(, $nachtladens1old) = explode("=", $line);
	}
	if(strpos($line, "nachtlls1=") !== false) {
		list(, $nachtlls1old) = explode("=", $line);
	}
	if(strpos($line, "nachtsocs1=") !== false) {
		list(, $nachtsocs1old) = explode("=", $line);
	}
	if(strpos($line, "nachtsoc1s1=") !== false) {
		list(, $nachtsoc1s1old) = explode("=", $line);
	}
	if(strpos($line, "nachtladenabuhrs1=") !== false) {
		list(, $nachtladenabuhrs1old) = explode("=", $line);
	}
	if(strpos($line, "nachtladenbisuhrs1=") !== false) {
		list(, $nachtladenbisuhrs1old) = explode("=", $line);
	}
	if(strpos($line, "wr_http_w_url=") !== false) {
		list(, $wr_http_w_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "wr_http_kwh_url=") !== false) {
		list(, $wr_http_kwh_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_w_url=") !== false) {
		list(, $bezug_http_w_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_l1_url=") !== false) {
		list(, $bezug_http_l1_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_l2_url=") !== false) {
		list(, $bezug_http_l2_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_l3_url=") !== false) {
		list(, $bezug_http_l3_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_ikwh_url=") !== false) {
		list(, $bezug_http_ikwh_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_http_ekwh_url=") !== false) {
		list(, $bezug_http_ekwh_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "nachtladenabuhr=") !== false) {
		list(, $nachtladenabuhrold) = explode("=", $line);
	}
	if(strpos($line, "nachtladenbisuhr=") !== false) {
		list(, $nachtladenbisuhrold) = explode("=", $line);
	}
	if(strpos($line, "nachtsoc=") !== false) {
		list(, $nachtsocold) = explode("=", $line);
	}
	if(strpos($line, "nachtsoc1=") !== false) {
		list(, $nachtsoc1old) = explode("=", $line);
	}
	if(strpos($line, "mindestuberschuss=") !== false) {
		list(, $mindestuberschussold) = explode("=", $line);
	}
	if(strpos($line, "abschaltuberschuss=") !== false) {
		list(, $abschaltuberschussold) = explode("=", $line);
	}
	if(strpos($line, "ladeleistungs1modul=") !== false) {
		list(, $ladeleistungs1modulold) = explode("=", $line);
	}
	if(strpos($line, "lastmaxap1=") !== false) {
		list(, $lastmaxap1old) = explode("=", $line);
	}
	if(strpos($line, "lastmaxap2=") !== false) {
		list(, $lastmaxap2old) = explode("=", $line);
	}
	if(strpos($line, "lastmaxap3=") !== false) {
		list(, $lastmaxap3old) = explode("=", $line);
	}
	if(strpos($line, "smaemdbezugid=") !== false) {
		list(, $smaemdbezugidold) = explode("=", $line);
	}
	if(strpos($line, "smaemdllid=") !== false) {
		list(, $smaemdllidold) = explode("=", $line);
	}
	if(strpos($line, "smaemdpvid=") !== false) {
		list(, $smaemdpvidold) = explode("=", $line);
	}
	if(strpos($line, "abschaltverzoegerung=") !== false) {
		list(, $abschaltverzoegerungold) = explode("=", $line);
	}
	if(strpos($line, "evsewifiiplp1=") !== false) {
		list(, $evsewifiiplp1old) = explode("=", $line);
	}
	if(strpos($line, "evsewifiiplp2=") !== false) {
		list(, $evsewifiiplp2old) = explode("=", $line);
	}
	if(strpos($line, "evsewifiiplp3=") !== false) {
		list(, $evsewifiiplp3old) = explode("=", $line);
	}

	if(strpos($line, "evsewifitimeoutlp1=") !== false) {
		list(, $evsewifitimeoutlp1old) = explode("=", $line);
	}

	if(strpos($line, "evsewifitimeoutlp2=") !== false) {
		list(, $evsewifitimeoutlp2old) = explode("=", $line);
	}

	if(strpos($line, "evsewifitimeoutlp3=") !== false) {
		list(, $evsewifitimeoutlp3old) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmllsource=") !== false) {
		list(, $mpm3pmllsourceold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmlls1source=") !== false) {
		list(, $mpm3pmlls1sourceold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmlls2source=") !== false) {
		list(, $mpm3pmlls2sourceold) = explode("=", $line);
	}

	if(strpos($line, "mpm3pmpvid=") !== false) {
		list(, $mpm3pmpvidold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmpvsource=") !== false) {
		list(, $mpm3pmpvsourceold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmpvlanip=") !== false) {
		list(, $mpm3pmpvlanipold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmllid=") !== false) {
		list(, $mpm3pmllidold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmlls1id=") !== false) {
		list(, $mpm3pmlls1idold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmlls2id=") !== false) {
		list(, $mpm3pmlls2idold) = explode("=", $line);
	}

	if(strpos($line, "mpm3pmevuid=") !== false) {
		list(, $mpm3pmevuidold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmevusource=") !== false) {
		list(, $mpm3pmevusourceold) = explode("=", $line);
	}
	if(strpos($line, "leafusername=") !== false) {
		list(, $leafusernameold) = explode("=", $line);
	}
	if(strpos($line, "leafpasswort=") !== false) {
		list(, $leafpasswortold) = explode("=", $line);
	}
	if(strpos($line, "leafusernames1=") !== false) {
		list(, $leafusernames1old) = explode("=", $line);
	}
	if(strpos($line, "leafpassworts1=") !== false) {
		list(, $leafpassworts1old) = explode("=", $line);
	}
	if(strpos($line, "i3passworts1=") !== false) {
		list(, $i3passworts1old) = explode("=", $line);
	}
	if(strpos($line, "i3passwort=") !== false) {
		list(, $i3passwortold) = explode("=", $line);
	}
	if(strpos($line, "soci3intervall=") !== false) {
		list(, $soci3intervallold) = explode("=", $line);
	}
	if(strpos($line, "soci3intervall1=") !== false) {
		list(, $soci3intervall1old) = explode("=", $line);
	}
	if(strpos($line, "i3username=") !== false) {
		list(, $i3usernameold) = explode("=", $line);
	}
	if(strpos($line, "i3usernames1=") !== false) {
		list(, $i3usernames1old) = explode("=", $line);
	}
	if(strpos($line, "i3vin=") !== false) {
		list(, $i3vinold) = explode("=", $line);
	}
	if(strpos($line, "i3vins1=") !== false) {
		list(, $i3vins1old) = explode("=", $line);
	}
	if(strpos($line, "zoeusername=") !== false) {
		list(, $zoeusernameold) = explode("=", $line);
	}
	if(strpos($line, "zoepasswort=") !== false) {
		list(, $zoepasswortold) = explode("=", $line);
	}
	if(strpos($line, "evnotifytoken=") !== false) {
		list(, $evnotifytokenold) = explode("=", $line);
	}
	if(strpos($line, "evnotifyakey=") !== false) {
		list(, $evnotifyakeyold) = explode("=", $line);
	}
	if(strpos($line, "evnotifytokenlp2=") !== false) {
		list(, $evnotifytokenlp2old) = explode("=", $line);
	}
	if(strpos($line, "evnotifyakeylp2=") !== false) {
		list(, $evnotifyakeylp2old) = explode("=", $line);
	}
	if(strpos($line, "wrjsonurl=") !== false) {
		list(, $wrjsonurlold) = explode("=", $line, 2);
	}
	if(strpos($line, "wrjsonwatt=") !== false) {
		list(, $wrjsonwattold) = explode("=", $line, 2);
	}
	if(strpos($line, "wrjsonkwh=") !== false) {
		list(, $wrjsonkwhold) = explode("=", $line, 2);
	}
	if(strpos($line, "hausbezugnone=") !== false) {
		list(, $hausbezugnoneold) = explode("=", $line);
	}
	if(strpos($line, "bezugjsonurl=") !== false) {
		list(, $bezugjsonurlold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezugjsonwatt=") !== false) {
		list(, $bezugjsonwattold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezugjsonkwh=") !== false) {
		list(, $bezugjsonkwhold) = explode("=", $line, 2);
	}
	if(strpos($line, "einspeisungjsonkwh=") !== false) {
		list(, $einspeisungjsonkwhold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_solarlog_ip=") !== false) {
		list(, $bezug_solarlog_ipold) = explode("=", $line);
	}
	if(strpos($line, "speichermodul=") !== false) {
		list(, $speichermodulold) = explode("=", $line);
	}
	if(strpos($line, "speicherleistung_http=") !== false) {
		list(, $speicherleistung_httpold) = explode("=", $line, 2);
	}
	if(strpos($line, "speichersoc_http=") !== false) {
		list(, $speichersoc_httpold) = explode("=", $line, 2);
	}
	if(strpos($line, "soc_tesla_username=") !== false) {
		list(, $socteslausernameold) = explode("=", $line);
	}
	if(strpos($line, "soc_tesla_password=") !== false) {
		list(, $socteslapwold) = explode("=", $line);
	}
	if(strpos($line, "soc_tesla_intervall=") !== false) {
		list(, $socteslaintervallold) = explode("=", $line);
	}
	if(strpos($line, "soc_tesla_intervallladen=") !== false) {
		list(, $socteslaintervallladenold) = explode("=", $line);
	}

	if(strpos($line, "wrkostalpikoip=") !== false) {
		list(, $wrkostalpikoipold) = explode("=", $line);
	}

	if(strpos($line, "solaredgepvip=") !== false) {
		list(, $solaredgepvipold) = explode("=", $line);
	}
	if(strpos($line, "solaredgepvslave1=") !== false) {
		list(, $solaredgeipslave1old) = explode("=", $line);
	}
	if(strpos($line, "solaredgepvslave2=") !== false) {
		list(, $solaredgeipslave2old) = explode("=", $line);
	}
	if(strpos($line, "solaredgepvslave3=") !== false) {
		list(, $solaredgeipslave3old) = explode("=", $line);
	}
	if(strpos($line, "solaredgeip=") !== false) {
		list(, $solaredgeipold) = explode("=", $line);
	}
	if(strpos($line, "lllaniplp2=") !== false) {
		list(, $lllaniplp2old) = explode("=", $line);
	}
	if(strpos($line, "sdm630lp2source=") !== false) {
		list(, $sdm630lp2sourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm120lp2source=") !== false) {
		list(, $sdm120lp2sourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm630lp3source=") !== false) {
		list(, $sdm630lp3sourceold) = explode("=", $line);
	}
	if(strpos($line, "sdm120lp3source=") !== false) {
		list(, $sdm120lp3sourceold) = explode("=", $line);
	}
	if(strpos($line, "lllaniplp3=") !== false) {
		list(, $lllaniplp3old) = explode("=", $line);
	}
	if(strpos($line, "lp1name=") !== false) {
		list(, $lp1nameold) = explode("=", $line);
	}
	if(strpos($line, "lp2name=") !== false) {
		list(, $lp2nameold) = explode("=", $line);
	}
	if(strpos($line, "lp3name=") !== false) {
		list(, $lp3nameold) = explode("=", $line);
	}
	if(strpos($line, "goeiplp1=") !== false) {
		list(, $goeiplp1old) = explode("=", $line);
	}
	if(strpos($line, "goetimeoutlp1=") !== false) {
		list(, $goetimeoutlp1old) = explode("=", $line);
	}
	if(strpos($line, "goeiplp2=") !== false) {
		list(, $goeiplp2old) = explode("=", $line);
	}
	if(strpos($line, "goetimeoutlp2=") !== false) {
		list(, $goetimeoutlp2old) = explode("=", $line);
	}
	if(strpos($line, "goeiplp3=") !== false) {
		list(, $goeiplp3old) = explode("=", $line);
	}
	if(strpos($line, "goetimeoutlp3=") !== false) {
		list(, $goetimeoutlp3old) = explode("=", $line);
	}
	if(strpos($line, "smashmbezugid=") !== false) {
		list(, $smashmbezugidold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmspeicherpv=") !== false) {
		list(, $mpm3pmspeicherpvold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmspeicherid=") !== false) {
		list(, $mpm3pmspeicheridold) = explode("=", $line);
	}
	if(strpos($line, "mpm3pmspeicherlanip=") !== false) {
		list(, $mpm3pmspeicherlanipold) = explode("=", $line);
	}

	if(strpos($line, "mpm3pmspeichersource=") !== false) {
		list(, $mpm3pmspeichersourceold) = explode("=", $line);
	}
	if(strpos($line, "speicherekwh_http=") !== false) {
		list(, $speicherekwh_httpold) = explode("=", $line, 2);
	}
	if(strpos($line, "speicherikwh_http=") !== false) {
		list(, $speicherikwh_httpold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_smartme_user=") !== false) {
		list(, $bezug_smartme_userold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_smartme_pass=") !== false) {
		list(, $bezug_smartme_passold) = explode("=", $line, 2);
	}
	if(strpos($line, "bezug_smartme_url=") !== false) {
		list(, $bezug_smartme_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "carnetuser=") !== false) {
		list(, $carnetuserold) = explode("=", $line);
	}
	if(strpos($line, "carnetpass=") !== false) {
		list(, $carnetpassold) = explode("=", $line);
	}
	if(strpos($line, "soccarnetintervall=") !== false) {
		list(, $soccarnetintervallold) = explode("=", $line);
	}
	if(strpos($line, "bydhvuser=") !== false) {
		list(, $bydhvuserold) = explode("=", $line);
	}
	if(strpos($line, "bydhvpass=") !== false) {
		list(, $bydhvpassold) = explode("=", $line);
	}
	if(strpos($line, "bydhvip=") !== false) {
		list(, $bydhvipold) = explode("=", $line);
	}
	if(strpos($line, "wr_smartme_user=") !== false) {
		list(, $wr_smartme_userold) = explode("=", $line, 2);
	}
	if(strpos($line, "wr_smartme_pass=") !== false) {
		list(, $wr_smartme_passold) = explode("=", $line, 2);
	}
	if(strpos($line, "wr_smartme_url=") !== false) {
		list(, $wr_smartme_urlold) = explode("=", $line, 2);
	}
	if(strpos($line, "e3dcip=") !== false) {
		list(, $e3dcipold) = explode("=", $line);
	}
	if(strpos($line, "sbs25ip=") !== false) {
		list(, $sbs25ipold) = explode("=", $line);
	}
	if(strpos($line, "tri9000ip=") !== false) {
		list(, $tri9000ipold) = explode("=", $line);
	}

}
$bezug_http_l1_urlold = str_replace( "'", "", $bezug_http_l1_urlold);
$bezug_http_l2_urlold = str_replace( "'", "", $bezug_http_l2_urlold);
$bezug_http_l3_urlold = str_replace( "'", "", $bezug_http_l3_urlold);
$bezug_http_w_urlold = str_replace( "'", "", $bezug_http_w_urlold);
$bezug_http_ikwh_urlold = str_replace( "'", "", $bezug_http_ikwh_urlold);
$bezug_http_ekwh_urlold = str_replace( "'", "", $bezug_http_ekwh_urlold);
$wr_http_w_urlold = str_replace( "'", "", $wr_http_w_urlold);
$wr_http_kwh_urlold = str_replace( "'", "", $wr_http_kwh_urlold);
$hsocipold = str_replace( "'", "", $hsocipold);
$wrjsonurlold = str_replace( "'", "", $wrjsonurlold);
$wrjsonwattold = str_replace( "'", "", $wrjsonwattold);
$wrjsonkwhold = str_replace( "'", "", $wrjsonkwhold);
$bezugjsonurlold = str_replace( "'", "", $bezugjsonurlold);
$bezugjsonwattold = str_replace( "'", "", $bezugjsonwattold);
$bezugjsonkwhold = str_replace( "'", "", $bezugjsonkwhold);
$einspeisungjsonkwhold = str_replace( "'", "", $einspeisungjsonkwhold);
$bezug_solarlog_ipold = str_replace( "'", "", $bezug_solarlog_ipold);
$speichersoc_httpold = str_replace( "'", "", $speichersoc_httpold);
$speicherleistung_httpold = str_replace( "'", "", $speicherleistung_httpold);
$speicherikwh_httpold = str_replace( "'", "", $speicherikwh_httpold);
$speicherekwh_httpold = str_replace( "'", "", $speicherekwh_httpold);
$bezug_smartme_userold = str_replace( "'", "", $bezug_smartme_userold);
$bezug_smartme_passold = str_replace( "'", "", $bezug_smartme_passold);
$bezug_smartme_urlold = str_replace( "'", "", $bezug_smartme_urlold);
$carnetuserold = str_replace( "'", "", $carnetuserold);
$carnetpassold = str_replace( "'", "", $carnetpassold);
$wr_smartme_userold = str_replace( "'", "", $wr_smartme_userold);
$wr_smartme_passold = str_replace( "'", "", $wr_smartme_passold);
$wr_smartme_urlold = str_replace( "'", "", $wr_smartme_urlold);
$socteslapwold = str_replace( "'", "", $socteslapwold);




$solaredgepvipold = str_replace( "'", "", $solaredgepvipold);
$lp1nameold = str_replace( "'", "", $lp1nameold);
$lp2nameold = str_replace( "'", "", $lp2nameold);
$lp3nameold = str_replace( "'", "", $lp3nameold);
$zoepasswortold = str_replace( "'", "", $zoepasswortold);


?>



	<div class="container">

 
<div class="row"><br>
 <ul class="nav nav-tabs">
    <LI><a data-toggle="tab" href="./index.php">Zurück</A></LI>
    <li><a href="./settings.php">Ladeeinstellungen</a></li>
    <li class="active"><a href="./modulconfig.php">Modulkonfiguration</a></li>
    <li><a href="./misc.php">Misc</a></li>
  </ul><br><br>
 </div>



     
<form action="./tools/savemodul.php" method="POST">


<div class="row">
	<h3> Erster Ladepunkt </h3>
</div>
<div class="row">
	<b><label for="lp1name">Name Ladepunkt 1:</label></b>
			<input type="text" name="lp1name" id="lp1name" value="<?php echo $lp1nameold ?>"><br>
	
</div>
<div class="row">
	<b><label for="evsecon">Anbindung Ladepunkt 1:</label></b>
        <select type="text" name="evsecon" id="evsecon">
		<option <?php if($evseconold == "modbusevse\n") echo selected ?> value="modbusevse">Modbusevse</option>
		<option <?php if($evseconold == "dac\n") echo selected ?> value="dac">DAC</option>
		<option <?php if($evseconold == "simpleevsewifi\n") echo selected ?> value="simpleevsewifi">SimpleEVSEWifi</option>
		<option <?php if($evseconold == "goe\n") echo selected ?> value="goe">Go-e</option>
		<option <?php if($evseconold == "masterethframer\n") echo selected ?> value="masterethframer">OpenWB Master</option>
	</select>

</div>
<div class="row">
<br><br></div>
<div id="evseconmastereth">
	<div class="row bg-success">
	Keine Konfiguration erforderlich.<br>
	</div>
</div>

<div id="evsecondac">
	<div class="row bg-success">
		<b><label for="dacregister">Dacregister:</label></b>
		<input type="text" name="dacregister" id="dacregister" value="<?php echo $dacregisterold ?>"><br>
	</div>
	<div class="row bg-success">
	Gültige Werte 0-99. Bei EVSE Anbindung per DAC (MCP 4725) Standardwert meist 62, oft auch 60 oder 48. Abhängig vom verbauten MCP<br>Der benötigte Wert sollte <a href="../ramdisk/i2csearch">HIER</a> zu finden sein. <br> Alternativ rauszufinden bei angeschlossenem MCP auf der shell mit dem Befehl: "sudo i2cdetect -y 1"<br><br>
	</div>
</div>
<div id="evseconswifi">
<div class="row bg-info">
	<b><label for="evsewifiiplp1">Simple EVSE Wifi IP Adressee:</label></b>
	<input type="text" name="evsewifiiplp1" id="evsewifiiplp1" value="<?php echo $evsewifiiplp1old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP Adresse im Format: 192.168.0.12<br><br>
</div>
<div class="row bg-info">
	<b><label for="evsewifitimeoutlp1">Simple EVSE Wifi Timeout:</label></b>
	<input type="text" name="evsewifitimeoutlp1" id="evsewifitimeoutlp1" value="<?php echo $evsewifitimeoutlp1old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte Zahl. Gibt die Zeit in Sekunden an wie lange auf Antwort der Simple EVSE gewartet wird. Bei gutem Wlan reichen 2 Sekunden aus. <br> Zulange Wartezeit zieht einen Verzug der Regellogik von OpenWB mit sich wenn die SimpleEVSE z.B. gerade unterwegs genutzt wird.<br><br>
</div>

</div>
<div id="evseconmod">
<div class="row bg-info">
	<b><label for="modbusevsesource">EVSE Source:</label></b>
	<input type="text" name="modbusevsesource" id="modbusevsesource" value="<?php echo $modbusevsesourceold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus der EVSE angeschlossen ist.<br><br>
</div>
<div class="row bg-info">
	<b><label for="modbusevseid">EVSE ID:</label></b>
	<input type="text" name="modbusevseid" id="modbusevseid" value="<?php echo $modbusevseidold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte 1-254. Modbus ID der EVSE.<br><br>
</div>
<div class="row bg-info">
	<b><label for="modbusevselanip">RS485/Lan-Konverter IP:</label></b>
	<input type="text" name="modbusevselanip" id="modbusevselanip" value="<?php echo $modbusevselanipold ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP. IP Adresse des Modbus/Lan Konverter. Vermutlich gleich der IP des SDM Zählers in der WB.<br><br>
</div>
</div>
<div id="evsecongoe">
<div class="row bg-info">
	<b><label for="goeiplp1">Go-e IP Adressee:</label></b>
	<input type="text" name="goeiplp1" id="goeiplp1" value="<?php echo $goeiplp1old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP Adresse im Format: 192.168.0.12<br><br>
</div>
<div class="row bg-info">
	<b><label for="goetimeoutlp1">Go-e Timeout:</label></b>
	<input type="text" name="goetimeoutlp1" id="goetimeoutlp1" value="<?php echo $goetimeoutlp1old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte Zahl. Gibt die Zeit in Sekunden an wie lange auf Antwort der Go-e gewartet wird. Bei gutem Wlan reichen 2 Sekunden aus. <br> Zulange Wartezeit zieht einen Verzug der Regellogik von OpenWB mit sich wenn die Go-e z.B. gerade unterwegs genutzt wird.<br><br>
</div>

</div>
<script>
$(function() {
      if($('#evsecon').val() == 'dac') {
		$('#evsecondac').show(); 
		$('#evseconmod').hide();
		$('#evseconswifi').hide();
		$('#llmodullp1').show();
		$('#evsecongoe').hide();
		$('#evseconmastereth').hide();
	}
	if($('#evsecon').val() == 'modbusevse') {
		$('#evseconswifi').hide();
      		$('#evsecondac').hide();
		$('#evseconmod').show();
		$('#llmodullp1').show();
		$('#evsecongoe').hide();
		$('#evseconmastereth').hide();
	
	} 
	if($('#evsecon').val() == 'simpleevsewifi') {
		$('#evseconswifi').show();
      		$('#evsecondac').hide();
		$('#evseconmod').hide();
		$('#llmodullp1').hide();
			$('#evseconmastereth').hide();
		$('#evsecongoe').hide();

      	} 
		if($('#evsecon').val() == 'goe') {
			$('#evsecongoe').show();
			$('#evsecondac').hide();
			$('#evseconmod').hide();
			$('#llmodullp1').hide();
			$('#evseconswifi').hide();
	       		$('#evseconmastereth').hide();
	} 
		if($('#evsecon').val() == 'masterethframer') {
			$('#evsecongoe').hide();
			$('#evsecondac').hide();
			$('#evseconmod').hide();
			$('#llmodullp1').hide();
			$('#evseconswifi').hide();
	        	$('#evseconmastereth').show();
	} 

	$('#evsecon').change(function(){
	        if($('#evsecon').val() == 'dac') {
			$('#evsecondac').show(); 
			$('#evseconmod').hide();
			$('#evseconswifi').hide();
			$('#llmodullp1').show();
			$('#evsecongoe').hide();
		$('#evseconmastereth').hide();
	

		}
		if($('#evsecon').val() == 'modbusevse') {
			$('#evseconswifi').hide();
			$('#evsecondac').hide();
			$('#evseconmod').show();
			$('#llmodullp1').show();
			$('#evsecongoe').hide();
		$('#evseconmastereth').hide();
	
		} 
		if($('#evsecon').val() == 'simpleevsewifi') {
			$('#evseconswifi').show();
			$('#evsecondac').hide();
			$('#evseconmod').hide();
			$('#llmodullp1').hide();
			$('#evsecongoe').hide();
			$('#evseconmastereth').hide();
	        } 
		if($('#evsecon').val() == 'goe') {
			$('#evsecongoe').show();
			$('#evsecondac').hide();
			$('#evseconmod').hide();
			$('#llmodullp1').hide();
			$('#evseconswifi').hide();
	        	$('#evseconmastereth').hide();
		} 
		if($('#evsecon').val() == 'masterethframer') {
			$('#evsecongoe').hide();
			$('#evsecondac').hide();
			$('#evseconmod').hide();
			$('#llmodullp1').hide();
			$('#evseconswifi').hide();
	        	$('#evseconmastereth').show();
	} 
	    });
});
</script>

<br>
<div id="llmodullp1">
<div class="row">
	<b><label for="ladeleistungmodul">Ladeleistungmodul:</label></b>
	<select type="text" name="ladeleistungmodul" id="ladeleistungmodul">
		<option <?php if($ladeleistungmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($ladeleistungmodulold == "sdm630modbusll\n") echo selected ?> value="sdm630modbusll">SDM 630 Modbus</option>
		<option <?php if($ladeleistungmodulold == "smaemd_ll\n") echo selected ?> value="smaemd_ll">SMA Energy Meter</option>
		<option <?php if($ladeleistungmodulold == "sdm120modbusll\n") echo selected ?> value="sdm120modbusll">SDM 120 Modbus</option>
		<option <?php if($ladeleistungmodulold == "simpleevsewifi\n") echo selected ?> value="simpleevsewifi">Simple EVSE Wifi</option>
		<option <?php if($ladeleistungmodulold == "mpm3pmll\n") echo selected ?> value="mpm3pmll">MPM3PM</option>

	</select>
</div>
<div id="llmnone">
	
</div>


<div id="llmpm3pm">
		<div class="row bg-info">
		<b><label for="mpm3pmll">MPM3PM Modbus Ladeleistung Source:</label></b>
		<input type="text" name="mpm3pmllsource" id="mpm3pmllsource" value="<?php echo $mpm3pmllsourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="mpm3pmllid">MPM3PM Modbus Ladeleistung ID:</label></b>
		<input type="text" name="mpm3pmllid" id="mpm3pmllid" value="<?php echo $mpm3pmllidold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des MPM3PM.<br><br>
	</div>


</div>

<div id="llmsdm">
	<div class="row bg-info">
		<b><label for="sdm630modbusllsource">Zähler Source:</label></b>
		<input type="text" name="sdm630modbusllsource" id="sdm630modbusllsource" value="<?php echo $sdm630modbusllsourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der SDM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm630modbusllid">Zähler ID:</label></b>
		<input type="text" name="sdm630modbusllid" id="sdm630modbusllid" value="<?php echo $sdm630modbusllidold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des SDM. Für SDM230 & SDM630v2.<br><br>
	</div>
</div>
	<div id="sdm120div">
	<div class="row bg-info">
		<b><label for="sdm120modbusllsource">Zähler Source:</label></b>
		<input type="text" name="sdm120modbusllsource" id="sdm120modbusllsource" value="<?php echo $sdm120modbusllsourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der SDM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>

	<div class="row bg-info">
		<b><label for="sdm120modbusllid1">SDM 120 Zähler 1 ID:</label></b>
		<input type="text" name="sdm120modbusllid1" id="sdm120modbusllid1" value="<?php echo $sdm120modbusllid1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 1 SDM Zählers in der WB.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid2">SDM 120 Zähler 2 ID:</label></b>
		<input type="text" name="sdm120modbusllid2" id="sdm120modbusllid2" value="<?php echo $sdm120modbusllid2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 1 SDM Zählers 2 in der WB.  Ist keine zweite Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid3">SDM 120 Zähler 3 ID:</label></b>
		<input type="text" name="sdm120modbusllid3" id="sdm120modbusllid3" value="<?php echo $sdm120modbusllid3old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 1 SDM Zählers 3 in der WB. Ist keine dritte Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	</div>
<div id="rs485lanlp1">
	<div class="row bg-info">
		<b><label for="sdm630modbuslllanip">RS485/Lan-Konverter IP:</label></b>
		<input type="text" name="sdm630modbuslllanip" id="sdm630modbuslllanip" value="<?php echo $sdm630modbuslllanipold ?>"><br>
	</div>
	<div class="row bg-info">
		Ist nur von belang wenn die Source auf /dev/virtualcomX steht. Ansonsten irrelevant<br>
		Gültige Werte IP. Wenn ein LAN Konverter genutzt wird muss die Source auf /dev/virtualcomx (z.B. /dev/virtualcom0) gesetzt werden.<br><br>
	</div>
</div>
<div id="llswifi">
<div class="row">
Keine Konfiguration erforderlich.<br>
</div>
</div>
<div id="llsma">
	<div class="row">
		<b><label for="smaemdllid">Seriennummer des SMA Energy Meter</label></b>
		<input type="text" name="smaemdllid" id="smaemdllid" value="<?php echo $smaemdllidold ?>"><br>
	</div>
	<div class="row">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Meter für die Ladeleistung angeben<br>Infos zum SMA Energy Meter <a href="https://github.com/snaptec/openWB#extras">HIER</a><br>

	</div>
</div>
</div>




<script>
$(function() {
      if($('#ladeleistungmodul').val() == 'none') {
		$('#llmnone').show(); 
		$('#llmsdm').hide();
		$('#llmpm3pm').hide();
		$('#llswifi').hide();
		$('#llsma, #sdm120div').hide();
		$('#rs485lanlp1').hide();

      } 
      if($('#ladeleistungmodul').val() == 'sdm630modbusll') {
		$('#llmnone').hide(); 
		$('#llmsdm').show();
		$('#llsma, #sdm120div').hide();
		$('#llswifi').hide();
		$('#llmpm3pm').hide();
		$('#rs485lanlp1').show();

      } 
      if($('#ladeleistungmodul').val() == 'smaemd_ll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #sdm120div').hide();
		$('#llsma').show();
		$('#llmpm3pm').hide();
		$('#llswifi').hide();
		$('#rs485lanlp1').hide();

      } 
      if($('#ladeleistungmodul').val() == 'sdm120modbusll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').show();
		$('#llmpm3pm').hide();
		$('#llswifi').hide();
		$('#rs485lanlp1').show();

      } 
      if($('#ladeleistungmodul').val() == 'simpleevsewifi') {
		$('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').hide();
		$('#llswifi').show();
		$('#llmpm3pm').hide();
		$('#rs485lanlp1').hide();

      } 
      if($('#ladeleistungmodul').val() == 'mpm3pmll') {
		$('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').hide();
		$('#llswifi').hide();
		$('#llmpm3pm').show();
		$('#rs485lanlp1').show();

      } 



 

	$('#ladeleistungmodul').change(function(){
	        if($('#ladeleistungmodul').val() == 'none') {
			$('#llmnone').show(); 
			$('#llmsdm').hide();
			$('#llsma, #sdm120div').hide();
		$('#llmpm3pm').hide();
			$('#llswifi').hide();
		$('#rs485lanlp1').hide();


	        } 
      if($('#ladeleistungmodul').val() == 'sdm630modbusll') {
	      $('#llmnone').hide();
		$('#llmpm3pm').hide();
		$('#llmsdm').show();
		$('#llsma, #sdm120div').hide();
		$('#llswifi').hide();
		$('#rs485lanlp1').show();


      } 
      if($('#ladeleistungmodul').val() == 'smaemd_ll') {
	      $('#llmnone').hide();
	     $('#llmpm3pm').hide();
		$('#llmsdm, #sdm120div').hide();
		$('#llsma').show();
		$('#llswifi').hide();
		$('#rs485lanlp1').hide();


      } 
      if($('#ladeleistungmodul').val() == 'sdm120modbusll') {
 		$('#llmpm3pm').hide();     
	      $('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').show();
		$('#llswifi').hide();
		$('#rs485lanlp1').show();


      } 
      if($('#ladeleistungmodul').val() == 'mpm3pmll') {
	      $('#llmnone').hide();
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').hide();
		$('#llswifi').hide();
		$('#llmpm3pm').show();
		$('#rs485lanlp1').show();
      } 

      if($('#ladeleistungmodul').val() == 'simpleevsewifi') { 
		$('#llmpm3pm').hide();
	      $('#llmnone').hide(); 
		$('#llmsdm, #llsma').hide();
		$('#sdm120div').hide();
		$('#llswifi').show();
		$('#rs485lanlp1').hide();
      } 
	});
});


</script>
<br>

<div class="row">
	<b><label for="socmodul">SOC Modul:</label></b>
	<select type="text" name="socmodul" id="socmodul">
		<option <?php if($socmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($socmodulold == "soc_http\n") echo selected ?> value="soc_http">SoC HTTP</option>
		<option <?php if($socmodulold == "soc_leaf\n") echo selected ?> value="soc_leaf">SoC Nissan Leaf</option>
		<option <?php if($socmodulold == "soc_i3\n") echo selected ?> value="soc_i3">SoC BMW i3</option>
		<option <?php if($socmodulold == "soc_zoe\n") echo selected ?> value="soc_zoe">SoC Renault Zoe</option>
		<option <?php if($socmodulold == "soc_evnotify\n") echo selected ?> value="soc_evnotify">SoC EVNotify</option>
		<option <?php if($socmodulold == "soc_tesla\n") echo selected ?> value="soc_tesla">SoC Tesla</option>
		<option <?php if($socmodulold == "soc_carnet\n") echo selected ?> value="soc_carnet">SoC VW Carnet</option>


	</select>
</div>
<div id="socmnone">
	<br>
</div>
<div id="socmtesla">
	<div class="row bg-info">
	</div>
	<div class="row bg-info">
		<b><label for="teslasocuser">Tesla Benutzername:</label></b>
		<input type="text" name="teslasocuser" id="teslasocuser" value="<?php echo $socteslausernameold ?>"><br>
	</div>
	<div class="row bg-info">
		Email Adresse des Tesla Logins<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="teslasocpw">Tesla Passwort:</label></b>
		<input type="password" name="teslasocpw" id="teslasocpw" value="<?php echo $socteslapwold ?>"><br>
	</div>
	<div class="row bg-info">
		Password des Tesla Logins<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="teslasocintervall">Abfrageintervall Standby:</label></b>
		<input type="text" name="teslasocintervall" id="teslasocintervall" value="<?php echo $socteslaintervallold ?>"><br>
	</div>
	<div class="row bg-info">
		Wie oft der Tesla abgefragt wird wenn nicht geladen wird. Angabe in Minuten.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="teslasocintervallladen">Abfrageintervall Laden:</label></b>
		<input type="text" name="teslasocintervallladen" id="teslasocintervallladen" value="<?php echo $socteslaintervallladenold ?>"><br>
	</div>
	<div class="row bg-info">
		Wie oft der Tesla abgefragt wird während geladen wird. Angabe in Minuten.<br><br>
	</div>


</div>
<div id="socmhttp">
	<div class="row bg-info">
	</div>
	<div class="row bg-info">
		<b><label for="hsocip">SOC Http Abfrage URL:</label></b>
		<input type="text" name="hsocip" id="hsocip" value="<?php echo htmlspecialchars($hsocipold) ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte none, "url". URL für die Abfrage des Soc, Antwort muss der reine Zahlenwert sein.<br><br>
	</div>
</div>
<div id="soczoe">
	<div class="row bg-info">
		<b><label for="zoeusername">Benutzername:</label></b>
		<input type="text" name="zoeusername" id="zoeusername" value="<?php echo $zoeusernameold ?>"><br>
	</div>
	<div class="row bg-info">
		Renault Zoe Benutzername<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="zoepasswort">Passwort:</label></b>
		<input type="password" name="zoepasswort" id="zoepasswort" value="<?php echo $zoepasswortold ?>"><br>
	</div>
	<div class="row bg-info">
		Renault Zoe Passwort<br><br>
	</div>
</div>
<div id="socevnotify">
	<div class="row bg-info">
		<b><label for="evnotifyakey">Akey:</label></b>
		<input type="text" name="evnotifyakey" id="evnotifyakey" value="<?php echo $evnotifyakeyold ?>"><br>
	</div>
	<div class="row bg-info">
		Akey des EVNotify Kontos<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="evnotifytoken">Token:</label></b>
		<input type="text" name="evnotifytoken" id="evnotifytoken" value="<?php echo $evnotifytokenold ?>"><br>
	</div>
	<div class="row bg-info">
		Token des Kontos<br><br>
	</div>
</div>

<div id="socleaf">
	<div class="row bg-info">
		<b><label for="leafusername">Benutzername:</label></b>
		<input type="text" name="leafusername" id="leafusername" value="<?php echo $leafusernameold ?>"><br>
	</div>
	<div class="row bg-info">
		Nissan Connect Benutzername<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="leafpasswort">Passwort:</label></b>
		<input type="password" name="leafpasswort" id="leafpasswort" value="<?php echo $leafpasswortold ?>"><br>
	</div>
	<div class="row bg-info">
		Nissan Connect Passwort<br><br>
	</div>
</div>
<div id="soci3">
	<div class="row bg-info">
		<b><label for="i3username">Benutzername:</label></b>
		<input type="text" name="i3username" id="i3username" value="<?php echo $i3usernameold ?>"><br>
	</div>
	<div class="row bg-info">
		BMW Services Benutzername<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="i3passwort">Passwort:</label></b>
		<input type="password" name="i3passwort" id="i3passwort" value="<?php echo $i3passwortold ?>"><br>
	</div>
	<div class="row bg-info">
		BMW Services Passwort<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="i3vin">VIN:</label></b>
		<input type="text" name="i3vin" id="i3vin" value="<?php echo $i3vinold ?>"><br>
	</div>
	<div class="row bg-info">
		BMW i3 VIN<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="soci3intervall">Verkürztes Intervall beim Laden:</label></b>
		<input type="text" name="soci3intervall" id="soci3intervall" value="<?php echo $soci3intervallold ?>"><br>
	</div>
	<div class="row bg-info">
		Verkürzt das Abfrageintervall beim Laden auf xx Minuten<br><br>
	</div>
</div>
<div id="soccarnet">
	<div class="row bg-info">
		<b><label for="carnetuser">Benutzername:</label></b>
		<input type="text" name="carnetuser" id="carnetuser" value="<?php echo $carnetuserold ?>"><br>
	</div>
	<div class="row bg-info">
		VW Carnet Benutzername<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="carnetpass">Passwort:</label></b>
		<input type="password" name="carnetpass" id="carnetpass" value="<?php echo $carnetpassold ?>"><br>
	</div>
	<div class="row bg-info">
		VW Carnet Passwort<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="soccarnetintervall">Verkürztes Intervall beim Laden:</label></b>
		<input type="text" name="soccarnetintervall" id="soccarnetintervall" value="<?php echo $soccarnetintervallold ?>"><br>
	</div>
	<div class="row bg-info">
		Verkürzt das Abfrageintervall beim Laden auf xx Minuten<br><br>
	</div>
</div>



<script>
$(function() {
      if($('#socmodul').val() == 'none') {
		$('#socmnone').show(); 
		$('#socmhttp').hide();
		$('#socleaf').hide();
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

      } 
     
   if($('#socmodul').val() == 'soc_http')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
		$('#socmhttp').show();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();


      } 
   if($('#socmodul').val() == 'soc_leaf')   {
		$('#socmnone').hide();
		$('#socleaf').show();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

   } 
   if($('#socmodul').val() == 'soc_i3')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').show();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

      } 
   if($('#socmodul').val() == 'soc_zoe')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').show();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

   }
   if($('#socmodul').val() == 'soc_evnotify')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').show();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

   }
   if($('#socmodul').val() == 'soc_tesla')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').show();
		$('#soccarnet').hide();

   }
   if($('#socmodul').val() == 'soc_carnet')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').show();

      } 


	$('#socmodul').change(function(){
        if($('#socmodul').val() == 'none') {
		$('#socmnone').show(); 
		$('#socmhttp').hide();
		$('#socleaf').hide();
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();


      } 
     
   if($('#socmodul').val() == 'soc_http')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
		$('#socmhttp').show();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();


      } 
   if($('#socmodul').val() == 'soc_leaf')   {
		$('#socmnone').hide();
		$('#socleaf').show();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

   } 
   if($('#socmodul').val() == 'soc_i3')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').show();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

      } 
   if($('#socmodul').val() == 'soc_zoe')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').show();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

   }
   if($('#socmodul').val() == 'soc_evnotify')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').show();
		$('#socmtesla').hide();
		$('#soccarnet').hide();

      } 
   if($('#socmodul').val() == 'soc_tesla')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').show();
		$('#soccarnet').hide();

      } 
   if($('#socmodul').val() == 'soc_carnet')   {
		$('#socmnone').hide();
		$('#socleaf').hide();
	       	$('#socmhttp').hide();	
		$('#soci3').hide();
		$('#soczoe').hide();
		$('#socevnotify').hide();
		$('#socmtesla').hide();
		$('#soccarnet').show();

      } 

	});
});
</script>


<hr>
<div class="row">
	<b><h4><label for="lastmanagement">Zweiter Ladepunkte:</label></b>
	<select type="text" name="lastmanagement" id="lastmanagement">
		<option <?php if($lastmanagementold == 0) echo selected ?> value="0">Aus</option>
		<option <?php if($lastmanagementold == 1) echo selected ?> value="1">An</option>
	</select></h4>
</div>
<div id="lastmmaus">
	<br>
</div>
<div id="lastmman" style="margin:5em;">


	

	<div class="row">
	</div>
<div class="row">
	<b><label for="lp2name">Name Ladepunkt 2:</label></b>
			<input type="text" name="lp2name" id="lp2name" value="<?php echo $lp2nameold ?>"><br>
	
</div>
	<div class="row">
		<b><label for="evsecons1">Anbindung der EVSE an Ladepunkt 2:</label></b>
		<select type="text" name="evsecons1" id="evsecons1">
			<option <?php if($evsecons1old == "slaveeth\n") echo selected ?> value="slaveeth">OpenWB Slave</option>
			<option <?php if($evsecons1old == "modbusevse\n") echo selected ?> value="modbusevse">Modbus</option>
			<option <?php if($evsecons1old == "dac\n") echo selected ?> value="dac">DAC</option>
			<option <?php if($evsecons1old == "simpleevsewifi\n") echo selected ?> value="simpleevsewifi">SimpleEVSEWifi</option>
			<option <?php if($evsecons1old == "goe\n") echo selected ?> value="goe">Go-e</option>

		</select>
	</div>
	<div id="evseconmbs1">
		<div class="row">
			Modbus für EVSE DIN. Auf der EVSE muss Register 2003 auf 1 gesetzt werden (Deaktivierung analog Eingang), sonst kein beschreiben möglich<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evsesources1">EVSE Source:</label></b>
			<input type="text" name="evsesources1" id="evsesources1" value="<?php echo $evsesources1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus der EVSE angeschlossen ist.<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evseids1">EVSE ID:</label></b>
			<input type="text" name="evseids1" id="evseids1" value="<?php echo $evseids1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID der Slave 1 EVSE.<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evselanips1">RS485/Lan-Konverter IP:</label></b>
			<input type="text" name="evselanips1" id="evselanips1" value="<?php echo $evselanips1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt, ansonsten ist diese Option irrelevant.<br><br>
		</div>
	</div>
	<div id="evsecondacs1">
		<div class="row bg-success">
			<b><label for="dacregisters1">Dacregister:</label></b>
			<input type="text" name="dacregisters1" id="dacregisters1" value="<?php echo $dacregisters1old ?>"><br>
		</div>
		<div class="row bg-success">
		Gültige Werte 0-99. Bei EVSE Anbindung per DAC (MCP 4725) Standardwert meist 62, oft auch 60 oder 48. Abhängig vom verbauten MCP<br>Rauszufinden bei angeschlossenem MCP auf der shell mit dem Befehl: "sudo i2cdetect -y 1". Muss sich bei Nutzung von zweimal DAC zum ersten unterscheiden!<br><br>
		</div>
	</div>
	<div id="evsecoslaveeth">
		<div class="row bg-success">
		Keine Konfiguration erforderlich.<br><br></div>
	</div>
<div id="evseconswifis1">
<div class="row bg-info">
	<b><label for="evsewifiiplp2">Simple EVSE Wifi IP Adressee:</label></b>
	<input type="text" name="evsewifiiplp2" id="evsewifiiplp2" value="<?php echo $evsewifiiplp2old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP Adresse im Format: 192.168.0.12<br><br>
</div>
<div class="row bg-info">
	<b><label for="evsewifitimeoutlp2">Simple EVSE Wifi Timeout:</label></b>
	<input type="text" name="evsewifitimeoutlp2" id="evsewifitimeoutlp2" value="<?php echo $evsewifitimeoutlp2old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte Zahl. Gibt die Zeit in Sekunden an wie lange auf Antwort der Simple EVSE gewartet wird. Bei gutem Wlan reichen 2 Sekunden aus. <br> Zulange Wartezeit zieht einen Verzug der Regellogik von OpenWB mit sich wenn die SimpleEVSE z.B. gerade unterwegs genutzt wird.<br><br>
</div>

</div>
<div id="evsecongoes1">
<div class="row bg-info">
	<b><label for="goeiplp2">Go-e IP Adressee:</label></b>
	<input type="text" name="goeiplp2" id="goeiplp2" value="<?php echo $goeiplp2old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP Adresse im Format: 192.168.0.12<br><br>
</div>
<div class="row bg-info">
	<b><label for="goetimeoutlp2">Go-e Timeout:</label></b>
	<input type="text" name="goetimeoutlp2" id="goetimeoutlp2" value="<?php echo $goetimeoutlp2old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte Zahl. Gibt die Zeit in Sekunden an wie lange auf Antwort der Go-e gewartet wird. Bei gutem Wlan reichen 2 Sekunden aus. <br> Zulange Wartezeit zieht einen Verzug der Regellogik von OpenWB mit sich wenn die Go-e z.B. gerade unterwegs genutzt wird.<br><br>
</div>

</div>

<script>


$(function() {
      if($('#evsecons1').val() == 'dac') {
		$('#evsecondacs1').show(); 
		$('#evseconmbs1').hide();
		$('#evseconswifis1').hide();
		$('#llmodullp2').show();
		$('#evsecongoes1').hide();
		$('#evsecoslaveeth').hide();
      } 
	if($('#evsecons1').val() == 'modbusevse') {
		$('#evseconswifis1').hide();
		$('#evsecondacs1').hide();
		$('#evseconmbs1').show();
		$('#llmodullp2').show();
		$('#evsecongoes1').hide();
		$('#evsecoslaveeth').hide();
	} 
	if($('#evsecons1').val() == 'simpleevsewifi') {
		$('#evseconswifis1').show();
		$('#evsecondacs1').hide();
		$('#evseconmbs1').hide();
		$('#llmodullp2').hide();
		$('#evsecongoes1').hide();
		$('#evsecoslaveeth').hide();
      } 
	if($('#evsecons1').val() == 'goe') {
		$('#evsecongoes1').show();
		$('#evsecondacs1').hide();
		$('#evseconmbs1').hide();
		$('#llmodullp2').hide();
		$('#evseconswifis1').hide();
		$('#evsecoslaveeth').hide();
      } 
	if($('#evsecons1').val() == 'slaveeth') {
		$('#evsecongoes1').hide();
		$('#evsecondacs1').hide();
		$('#evseconmbs1').hide();
		$('#llmodullp2').hide();
		$('#evseconswifis1').hide();
		$('#evsecoslaveeth').show();
      } 

	$('#evsecons1').change(function(){
	        if($('#evsecons1').val() == 'dac') {
			$('#evsecondacs1').show(); 
			$('#evseconmbs1').hide();
			$('#evseconswifis1').hide();
			$('#llmodullp2').show();
			$('#evsecongoes1').hide();
		$('#evsecoslaveeth').hide();

		} 
		if($('#evsecons1').val() == 'modbusevse') {
			$('#evseconswifis1').hide();
			$('#evsecondacs1').hide();
			$('#evseconmbs1').show();
			$('#llmodullp2').show();
			$('#evsecongoes1').hide();
		$('#evsecoslaveeth').hide();

		} 
		if($('#evsecons1').val() == 'simpleevsewifi') {
			$('#evseconswifis1').show();
			$('#evsecondacs1').hide();
			$('#evseconmbs1').hide();
			$('#llmodullp2').hide();
			$('#evsecongoes1').hide();
		$('#evsecoslaveeth').hide();

		} 
		if($('#evsecons1').val() == 'goe') {
			$('#evsecongoes1').show();
			$('#evsecondacs1').hide();
			$('#evseconmbs1').hide();
			$('#llmodullp2').hide();
			$('#evseconswifis1').hide();
		$('#evsecoslaveeth').hide();

		} 
	if($('#evsecons1').val() == 'slaveeth') {
		$('#evsecongoes1').hide();
		$('#evsecondacs1').hide();
		$('#evseconmbs1').hide();
		$('#llmodullp2').hide();
		$('#evseconswifis1').hide();
		$('#evsecoslaveeth').show();
      } 
	});
});
</script>

<div id="llmodullp2">
	<div class="row"><br>
		<b><label for="ladeleistungs1modul">Ladeleistungsmodul für Ladepunkt 2:</label></b>
		<select type="text" name="ladeleistungs1modul" id="ladeleistungss1modul">
			<option <?php if($ladeleistungs1modulold == "sdm630modbuslls1\n") echo selected ?> value="sdm630modbuslls1">SDM 630 Modbus</option>
			<option <?php if($ladeleistungs1modulold == "sdm120modbuslls1\n") echo selected ?> value="sdm120modbuslls1">SDM 120 Modbus</option>
			<option <?php if($ladeleistungs1modulold == "simpleevsewifis1\n") echo selected ?> value="simpleevsewifis1">Simple EVSE Wifi</option>
			<option <?php if($ladeleistungs1modulold == "mpm3pmlls1\n") echo selected ?> value="mpm3pmlls1">MPM3PM Modbus</option>
			<option <?php if($ladeleistungs1modulold == "goelp2\n") echo selected ?> value="goelp2">Go-e</option>
		</select>
	</div>
	<div class="row">
		Modul zur Messung der Ladeleistung des zweiten Ladepunktes.<br><br>
	</div>



<div id="mpm3pmlls1div">
		<div class="row bg-info">
		<b><label for="mpm3pmlls1">MPM3PM Modbus Ladeleistung Source:</label></b>
		<input type="text" name="mpm3pmlls1source" id="mpm3pmlls1source" value="<?php echo $mpm3pmlls1sourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="mpm3pmlls1id">MPM3PM Modbus Ladeleistung ID:</label></b>
		<input type="text" name="mpm3pmlls1id" id="mpm3pmlls1id" value="<?php echo $mpm3pmlls1idold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des MPM3PM.<br><br>
	</div>

</div>


	<div id="sdm630s1div">
		<div class="row bg-info">
		<b><label for="sdm630lp2source">Zähler Source:</label></b>
		<input type="text" name="sdm630lp2source" id="sdm630lp2source" value="<?php echo $sdm630lp2sourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
		<div class="row bg-info">
			<b><label for="sdmids1">Zähler ID:</label></b>
			<input type="text" name="sdmids1" id="sdmids1" value="<?php echo $sdmids1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID des Ladepunkt 2 Zählers in der WB.<br><br>
		</div>
		
	</div>
<div id="swifis1div">
<div class="row">
Keine Konfiguration erforderlich.<br>
</div>
</div>

	<div id="sdm120s1div">
		<div class="row bg-info">
		<b><label for="sdm120lp2source">Zähler Source:</label></b>
		<input type="text" name="sdm120lp2source" id="sdm120lp2source" value="<?php echo $sdm120lp2sourceold ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>

	<div class="row bg-info">
		<b><label for="sdm120modbusllid1s1">SDM 120 Zähler 1 ID:</label></b>
		<input type="text" name="sdm120modbusllid1s1" id="sdm120modbusllid1s1" value="<?php echo $sdm120modbusllid1s1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers in der WB.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid2s1">SDM Zähler 2 ID:</label></b>
		<input type="text" name="sdm120modbusllid2s1" id="sdm120modbusllid2s1" value="<?php echo $sdm120modbusllid2s1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers 2 in der WB.  Ist keine zweite Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid3s1">SDM Zähler 3 ID:</label></b>
		<input type="text" name="sdm120modbusllid3s1" id="sdm120modbusllid3s1" value="<?php echo $sdm120modbusllid3s1old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 2 SDM Zählers 3 in der WB. Ist keine dritte Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>

	</div>

<div id="rs485lanlp2">
	<div class="row bg-info">
		<b><label for="lllaniplp2">RS485/Lan-Konverter IP:</label></b>
		<input type="text" name="lllaniplp2" id="lllaniplp2" value="<?php echo $lllaniplp2old ?>"><br>
	</div>
	<div class="row bg-info">
		Ist nur von belang wenn die Source auf /dev/virtualcomX steht. Ansonsten irrelevant<br>
		Gültige Werte IP. Wenn ein LAN Konverter genutzt wird muss die Source auf /dev/virtualcomx (z.B. /dev/virtualcom0) gesetzt werden.<br><br>
	</div>
</div>
</div>
<br><br>
		<div class="row">
		<b><label for="socmodul1">SOC Modul für Ladepunkt 2:</label></b>
	<select type="text" name="socmodul1" id="socmodul1">
		<option <?php if($socmodul1old == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($socmodul1old == "soc_http1\n") echo selected ?> value="soc_http1">SoC HTTP</option>
		<option <?php if($socmodul1old == "soc_leafs1\n") echo selected ?> value="soc_leafs1">SoC Nissan Leaf</option>
		<option <?php if($socmodul1old == "soc_i3s1\n") echo selected ?> value="soc_i3s1">SoC BMW i3</option>
		<option <?php if($socmodul1old == "soc_evnotifys1\n") echo selected ?> value="soc_evnotifys1">SoC EVNotify</option>
	</select>
	</div>

	<div id="socmnone1">
		<br>
	</div>
<div id="socevnotifylp2">
	<div class="row bg-info">
		<b><label for="evnotifyakeylp2">Akey:</label></b>
		<input type="text" name="evnotifyakeylp2" id="evnotifyakeylp2" value="<?php echo $evnotifyakeylp2old ?>"><br>
	</div>
	<div class="row bg-info">
		Akey des EVNotify Kontos<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="evnotifytokenlp2">Token:</label></b>
		<input type="text" name="evnotifytokenlp2" id="evnotifytokenlp2" value="<?php echo $evnotifytokenlp2old ?>"><br>
	</div>
	<div class="row bg-info">
		Token des Kontos<br><br>
	</div>
</div>


	<div id="socmhttp1">
		<div class="row">
			Gültige Werte none, soc_http. Wenn nicht vorhanden auf none setzen!<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="hsocip1">SOC zweiter Ladepunkt Http Abfrage URL:</label></b>
			<input type="text" name="hsocip1" id="hsocip1" value="<?php echo $hsocip1old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte none, "url". URL für die Abfrage des Soc der zweiten WB, Antwort muss der reine Zahlenwert sein.<br><br>
		</div>
	</div>

	<div id="socleaf1">
		<br>
		<div class="row bg-info">
			<b><label for="leafusernames1">Benutzername:</label></b>
			<input type="text" name="leafusernames1" id="leafusernames1" value="<?php echo $leafusernames1old ?>"><br>
		</div>
		<div class="row bg-info">
			Nissan Connect Benutzername<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="leafpassworts1">Passwort:</label></b>
			<input type="password" name="leafpassworts1" id="leafpassworts1" value="<?php echo $leafpassworts1old ?>"><br>
		</div>
		<div class="row bg-info">
			Nissan Connect Passwort<br><br>
		</div>
	</div>
<div id="soci31">
	<div class="row bg-info">
		<b><label for="i3usernames1">Benutzername:</label></b>
		<input type="text" name="i3usernames1" id="i3usernames1" value="<?php echo $i3usernames1old ?>"><br>
	</div>
	<div class="row bg-info">
		BMW Services Benutzername<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="i3passworts1">Passwort:</label></b>
		<input type="password" name="i3passworts1" id="i3passworts1" value="<?php echo $i3passworts1old ?>"><br>
	</div>
	<div class="row bg-info">
		BMW Services Passwort<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="i3vins1">VIN:</label></b>
		<input type="text" name="i3vins1" id="i3vins1" value="<?php echo $i3vins1old ?>"><br>
	</div>
	<div class="row bg-info">
		Hier ist die vollständige i3 VIN nötig<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="soci3intervall1">Verkürztes Intervall beim Laden:</label></b>
		<input type="text" name="soci3intervall1" id="soci3intervall1" value="<?php echo $soci3intervall1old ?>"><br>
	</div>
	<div class="row bg-info">
		Verkürzt das Abfrageintervall beim Laden auf xx Minuten<br><br>
	</div>

</div>




<script>
$(function() {
      if($('#ladeleistungss1modul').val() == 'sdm630modbuslls1') {
		$('#sdm630s1div').show(); 
		$('#sdm120s1div').hide();
		$('#swifis1div').hide();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').show();	
      } 
      if($('#ladeleistungss1modul').val() == 'sdm120modbuslls1') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').show();
		$('#swifis1div').hide();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').show();	
      } 
      if($('#ladeleistungss1modul').val() == 'simpleevsewifis1') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').hide();
		$('#swifis1div').show();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').hide();	
      } 
    if($('#ladeleistungss1modul').val() == 'goelp2') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').hide();
		$('#swifis1div').show();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').hide();	
      } 

      if($('#ladeleistungss1modul').val() == 'mpm3pmlls1') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').hide();
		$('#swifis1div').hide();	
		$('#mpm3pmlls1div').show();
		$('#rs485laniplp2').show();	
      } 


	$('#ladeleistungss1modul').change(function(){
	        if($('#ladeleistungss1modul').val() == 'sdm630modbuslls1') {
			$('#sdm630s1div').show(); 
			$('#sdm120s1div').hide();
			$('#swifis1div').hide();	
			$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').show();	

		} 
      if($('#ladeleistungss1modul').val() == 'sdm120modbuslls1') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').show();
		$('#swifis1div').hide();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').show();	

      } 
      if($('#ladeleistungss1modul').val() == 'simpleevsewifis1') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').hide();
		$('#swifis1div').show();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').hide();	
      } 
	    if($('#ladeleistungss1modul').val() == 'goelp2') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').hide();
		$('#swifis1div').show();	
		$('#mpm3pmlls1div').hide();
		$('#rs485laniplp2').hide();	
      } 

      if($('#ladeleistungss1modul').val() == 'mpm3pmlls1') {
		$('#sdm630s1div').hide();
		$('#sdm120s1div').hide();
		$('#swifis1div').hide();	
		$('#mpm3pmlls1div').show();
		$('#rs485laniplp2').show();	
      }         
	    });
});
</script>
<script>
$(function() {
      if($('#socmodul1').val() == 'none') {
		$('#socmnone1').show(); 
		$('#socmhttp1').hide();
		$('#socleaf1').hide();
		$('#soci31').hide();
		$('#socevnotifylp2').hide();


      } 
	if($('#socmodul1').val() == 'soc_http1') {
		$('#socmnone1').hide();
		$('#socmhttp1').show();	
		$('#socleaf1').hide();
		$('#soci31').hide();
		$('#socevnotifylp2').hide();

      } 
	if($('#socmodul1').val() == 'soc_leafs1') {
		$('#socmnone1').hide();
		$('#socmhttp1').hide();	
		$('#socleaf1').show();
		$('#soci31').hide();
 		$('#socevnotifylp2').hide();     
	} 
	if($('#socmodul1').val() == 'soc_i3s1') {
		$('#socmnone1').hide();
		$('#socmhttp1').hide();	
		$('#socleaf1').hide();
		$('#soci31').show();
		$('#socevnotifylp2').hide();
      } 
	if($('#socmodul1').val() == 'soc_evnotifys1') {
		$('#socmnone1').hide();
		$('#socmhttp1').hide();	
		$('#socleaf1').hide();
		$('#soci31').hide();
		$('#socevnotifylp2').show();
      } 

	$('#socmodul1').change(function(){
      if($('#socmodul1').val() == 'none') {
		$('#socmnone1').show(); 
		$('#socmhttp1').hide();
		$('#socleaf1').hide();
		$('#soci31').hide();
		$('#socevnotifylp2').hide();

      } 
	if($('#socmodul1').val() == 'soc_http1') {
		$('#socmnone1').hide();
		$('#socmhttp1').show();	
		$('#socleaf1').hide();
		$('#soci31').hide();
		$('#socevnotifylp2').hide();

      } 
	if($('#socmodul1').val() == 'soc_leafs1') {
		$('#socmnone1').hide();
		$('#socmhttp1').hide();	
		$('#socleaf1').show();
		$('#soci31').hide();
		$('#socevnotifylp2').hide();
      } 
	if($('#socmodul1').val() == 'soc_i3s1') {
		$('#socmnone1').hide();
		$('#socmhttp1').hide();	
		$('#socleaf1').hide();
		$('#soci31').show();
		$('#socevnotifylp2').hide();
      } 
	if($('#socmodul1').val() == 'soc_evnotifys1') {
		$('#socmnone1').hide();
		$('#socmhttp1').hide();	
		$('#socleaf1').hide();
		$('#soci31').hide();
		$('#socevnotifylp2').show();
      } 
	    });
});
</script>

</div>
<script>
$(function() {
      if($('#lastmanagement').val() == '0') {
		$('#lastmmaus').show(); 
		$('#lastmman').hide();
		$('#durchslp2').hide();
		$('#nachtls1div').hide();
      } else {
		$('#lastmmaus').hide();
		$('#lastmman').show();	
		$('#durchslp2').show();
		$('#nachtls1div').show();


      } 

	$('#lastmanagement').change(function(){
	        if($('#lastmanagement').val() == '0') {
			$('#lastmmaus').show(); 
			$('#lastmman').hide();
			$('#durchslp2').hide();
			$('#nachtls1div').hide();


	        } else {
			$('#lastmmaus').hide();
			$('#lastmman').show();
			$('#durchslp2').show();
			$('#nachtls1div').show();
       		} 
	    });
});
</script>

<div class="row">
	<b><h4><label for="lastmanagements2">Dritter Ladepunkt:</label></b>
	<select type="text" name="lastmanagements2" id="lastmanagements2">
		<option <?php if($lastmanagements2old == 0) echo selected ?> value="0">Aus</option>
		<option <?php if($lastmanagements2old == 1) echo selected ?> value="1">An</option>
	</select></h4>
</div>
<div class="row">
</div>
<div id="lasts2mmaus">
	<br>
</div>
<div id="lasts2mman" style="margin:5em;">


	

	<div class="row">
	</div>
<div class="row">
	<b><label for="lp3name">Name Ladepunkt 3:</label></b>
			<input type="text" name="lp3name" id="lp3name" value="<?php echo $lp3nameold ?>"><br>
	
</div>

	<div class="row">
		<b><label for="evsecons2">Anbindung der EVSE an Ladepunkt 3:</label></b>
		<select type="text" name="evsecons2" id="evsecons2">
			<option <?php if($evsecons2old == "modbusevse\n") echo selected ?> value="modbusevse">Modbus</option>
			<option <?php if($evsecons2old == "dac\n") echo selected ?> value="dac">DAC</option>
			<option <?php if($evsecons2old == "simpleevsewifi\n") echo selected ?> value="simpleevsewifi">SimpleEVSEWifi</option>
			<option <?php if($evsecons2old == "goe\n") echo selected ?> value="goe">Go-e</option>
		</select>
	</div>
	<div id="evseconmbs2">
		<div class="row">
			Modbus nur mit EVSE DIN getestet. Auf der EVSE muss Register 2003 auf 1 gesetzt werden (Deaktivierung analog Eingang), sonst kein beschreiben möglich<br>Zudem gibt es einen Bug das die EVSE ID der EVSE DIN sich nicht verstellen und speichern lässt!<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evsesources2">EVSE Source:</label></b>
			<input type="text" name="evsesources2" id="evsesources2" value="<?php echo $evsesources2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus der EVSE angeschlossen ist.<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="evseids2">EVSE ID:</label></b>
			<input type="text" name="evseids2" id="evseids2" value="<?php echo $evseids2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID der Slave 2 EVSE.<br><br>
		</div>
	<div class="row bg-info">
			<b><label for="evselanips2">RS485/Lan-Konverter IP:</label></b>
			<input type="text" name="evselanips2" id="evselanips2" value="<?php echo $evselanips2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt, ansonsten ist diese Option irrelevant.<br><br>
		</div>

	</div>
	<div id="evsecondacs2">
		<div class="row bg-success">
			<b><label for="dacregisters2">Dacregister:</label></b>
			<input type="text" name="dacregisters2" id="dacregisters2" value="<?php echo $dacregisters2old ?>"><br>
		</div>
		<div class="row bg-success">
		Gültige Werte 0-99. Bei EVSE Anbindung per DAC (MCP 4725) Standardwert meist 62, oft auch 60 oder 48. Abhängig vom verbauten MCP<br>Rauszufinden bei angeschlossenem MCP auf der shell mit dem Befehl: "sudo i2cdetect -y 1". Muss sich von bei Nutzung von zweimal DAC zum ersten unterscheiden!<br><br>
		</div>
	</div>
<div id="evseconswifis2">
<div class="row bg-info">
	<b><label for="evsewifiiplp3">Simple EVSE Wifi IP Adressee:</label></b>
	<input type="text" name="evsewifiiplp3" id="evsewifiiplp3" value="<?php echo $evsewifiiplp3old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP Adresse im Format: 192.168.0.12<br><br>
</div>
<div class="row bg-info">
	<b><label for="evsewifitimeoutlp3">Simple EVSE Wifi Timeout:</label></b>
	<input type="text" name="evsewifitimeoutlp3" id="evsewifitimeoutlp3" value="<?php echo $evsewifitimeoutlp3old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte Zahl. Gibt die Zeit in Sekunden an wie lange auf Antwort der Simple EVSE gewartet wird. Bei gutem Wlan reichen 2 Sekunden aus. <br> Zulange Wartezeit zieht einen Verzug der Regellogik von OpenWB mit sich wenn die SimpleEVSE z.B. gerade unterwegs genutzt wird.<br><br>
</div>

</div>
<div id="evsecongoes2">
<div class="row bg-info">
	<b><label for="goeiplp3">Go-e IP Adressee:</label></b>
	<input type="text" name="goeiplp3" id="goeiplp3" value="<?php echo $goeiplp3old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte IP Adresse im Format: 192.168.0.12<br><br>
</div>
<div class="row bg-info">
	<b><label for="goetimeoutlp3">Go-e Timeout:</label></b>
	<input type="text" name="goetimeoutlp3" id="goetimeoutlp3" value="<?php echo $goetimeoutlp3old ?>"><br>
</div>
<div class="row bg-info">
	Gültige Werte Zahl. Gibt die Zeit in Sekunden an wie lange auf Antwort der Go-e gewartet wird. Bei gutem Wlan reichen 2 Sekunden aus. <br> Zulange Wartezeit zieht einen Verzug der Regellogik von OpenWB mit sich wenn die Go-e z.B. gerade unterwegs genutzt wird.<br><br>
</div>

</div>

<script>
$(function() {
      if($('#evsecons2').val() == 'dac') {
		$('#evsecondacs2').show(); 
		$('#evseconmbs2').hide();
		$('#evseconswifis2').hide();
		$('#llmodullp3').show();
		$('#evsecongoes2').hide();


      } 
      if($('#evsecons2').val() == 'modbusevse') {
		$('#evseconswifis2').hide();
		$('#evsecondacs2').hide();
		$('#evseconmbs2').show();
		$('#llmodullp3').show();
		$('#evsecongoes2').hide();

      } 
      if($('#evsecons2').val() == 'simpleevsewifi') {
		$('#evseconswifis2').show();
		$('#evsecondacs2').hide();
		$('#evseconmbs2').hide();
		$('#llmodullp3').hide();
		$('#evsecongoes2').hide();

      } 
      if($('#evsecons2').val() == 'goe') {
		$('#evseconswifis2').hide();
		$('#evsecondacs2').hide();
		$('#evseconmbs2').hide();
		$('#llmodullp3').hide();
		$('#evsecongoes2').show();

      } 
	$('#evsecons2').change(function(){
      if($('#evsecons2').val() == 'dac') {
		$('#evsecondacs2').show(); 
		$('#evseconmbs2').hide();
		$('#evseconswifis2').hide();
		$('#llmodullp3').show();
		$('#evsecongoes2').hide();

      } 
      if($('#evsecons2').val() == 'modbusevse') {
		$('#evseconswifis2').hide();
		$('#evsecondacs2').hide();
		$('#evseconmbs2').show();
		$('#llmodullp3').show();
		$('#evsecongoes2').hide();
      } 
      if($('#evsecons2').val() == 'simpleevsewifi') {
		$('#evseconswifis2').show();
		$('#evsecondacs2').hide();
	       	$('#evseconmbs2').hide();	
 		$('#llmodullp3').hide();
		$('#evsecongoes2').hide();
      } 
      if($('#evsecons2').val() == 'goe') {
		$('#evseconswifis2').hide();
		$('#evsecondacs2').hide();
		$('#evseconmbs2').hide();
		$('#llmodullp3').hide();
		$('#evsecongoes2').show();

      } 

	    });
});
</script>

<div id="llmodullp3">
	<div class="row"><br>
		<b><label for="ladeleistungs2modul">Ladeleistungsmodul für Ladepunkt 3:</label></b>
		<select type="text" name="ladeleistungs2modul" id="ladeleistungss2modul">
			<option <?php if($ladeleistungs2modulold == "sdm630modbuslls2\n") echo selected ?> value="sdm630modbuslls2">SDM 630 Modbus</option>
			<option <?php if($ladeleistungs2modulold == "sdm120modbuslls2\n") echo selected ?> value="sdm120modbuslls2">SDM 120 Modbus</option>
			<option <?php if($ladeleistungs2modulold == "mpm3pmlls2\n") echo selected ?> value="mpm3pmlls2">MPM3PM Modbus</option>
			<option <?php if($ladeleistungs2modulold == "simpleevsewifis2\n") echo selected ?> value="simpleevsewifis2">Simple EVSE Wifi</option>
			<option <?php if($ladeleistungs2modulold == "goelp3\n") echo selected ?> value="goelp3">Go-E</option>
		</select>
	</div>
	<div class="row">
		Modul zur Messung der Ladeleistung des dritten Ladepunktes.<br><br>
	</div>
	<div id="swifis2div">
		<div class="row">
			Keine Konfiguration erforderlich.<br>
		</div>
	</div>
	<div id="mpm3pmlls2div">
			<div class="row bg-info">
			<b><label for="mpm3pmlls2">MPM3PM Modbus Ladeleistung Source:</label></b>
			<input type="text" name="mpm3pmlls2source" id="mpm3pmlls2source" value="<?php echo $mpm3pmlls2sourceold ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="mpm3pmlls2id">MPM3PM Modbus Ladeleistung ID:</label></b>
			<input type="text" name="mpm3pmlls2id" id="mpm3pmlls2id" value="<?php echo $mpm3pmlls2idold ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID des MPM3PM.<br><br>
		</div>

	</div>
	<div id="sdm630s2div">
		<div class="row bg-info">
			<b><label for="sdm630lp3source">Zähler Source:</label></b>
			<input type="text" name="sdm630lp3source" id="sdm630lp3source" value="<?php echo $sdm630lp3sourceold ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus des Zählers angeschlossen ist.<br><br>
		</div>
		<div class="row bg-info">
			<b><label for="sdmids2">SDM 630 Zähler ID:</label></b>
			<input type="text" name="sdmids2" id="sdmids2" value="<?php echo $sdmids2old ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers in der WB.<br><br>
		</div>
		
	</div>
	<div id="sdm120s2div">
		<div class="row bg-info">
			<b><label for="sdm120lp3source">Zähler Source:</label></b>
			<input type="text" name="sdm120lp3source" id="sdm120lp3source" value="<?php echo $sdm120lp3sourceold ?>"><br>
		</div>
		<div class="row bg-info">
			Gültige Werte /dev/ttyUSB0, /dev/virtualcom0. Serieller Port an dem der Modbus des Zählers angeschlossen ist.<br><br>
		</div>

	<div class="row bg-info">
		<b><label for="sdm120modbusllid1s2">SDM Zähler 1 ID:</label></b>
		<input type="text" name="sdm120modbusllid1s2" id="sdm120modbusllid1s2" value="<?php echo $sdm120modbusllid1s2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers in der WB.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid2s2">SDM Zähler 2 ID:</label></b>
		<input type="text" name="sdm120modbusllid2s2" id="sdm120modbusllid2s2" value="<?php echo $sdm120modbusllid2s2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers 2 in der WB.  Ist keine zweite Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>
	<div class="row bg-info">
		<b><label for="sdm120modbusllid3s2">SDM Zähler 3 ID:</label></b>
		<input type="text" name="sdm120modbusllid3s2" id="sdm120modbusllid3s2" value="<?php echo $sdm120modbusllid3s2old ?>"><br>
	</div>
	<div class="row bg-info">
		Gültige Werte 1-254. Modbus ID des Ladepunkt 3 SDM Zählers 3 in der WB. Ist keine dritte Phase / SDM120 vorhanden bitte none eintragen.<br><br>
	</div>

	</div>
	<div id="rs485lanlp3">
	<div class="row bg-info">
		<b><label for="lllaniplp3">RS485/Lan-Konverter IP:</label></b>
		<input type="text" name="lllaniplp3" id="lllaniplp3" value="<?php echo $lllaniplp3old ?>"><br>
	</div>
	<div class="row bg-info">
		Ist nur von belang wenn die Source auf /dev/virtualcomX steht. Ansonsten irrelevant<br>
		Gültige Werte IP. Wenn ein LAN Konverter genutzt wird muss die Source auf /dev/virtualcomx (z.B. /dev/virtualcom0) gesetzt werden.<br><br>
	</div>
</div>


</div>
	
</div>
<script>
$(function() {
      if($('#ladeleistungss2modul').val() == 'sdm630modbuslls2') {
		$('#sdm630s2div').show(); 
		$('#sdm120s2div').hide();
		$('#swifis2div').hide();
		$('#rs485lanlp3').show(); 
		$('#mpm3pmlls2div').hide();

      } 	
      if($('#ladeleistungss2modul').val() == 'sdm120modbuslls2') {
		$('#swifis2div').hide();
    		$('#sdm630s2div').hide();
		$('#sdm120s2div').show();
		$('#rs485lanlp3').show(); 
		$('#mpm3pmlls2div').hide();

      } 
      if($('#ladeleistungss2modul').val() == 'simpleevsewifis2') {
		$('#swifis2div').show();
    		$('#sdm630s2div').hide();
		$('#sdm120s2div').hide();
		$('#rs485lanlp3').hide(); 
		$('#mpm3pmlls2div').hide();

      } 
      if($('#ladeleistungss2modul').val() == 'goelp3') {
		$('#swifis2div').show();
    		$('#sdm630s2div').hide();
		$('#sdm120s2div').hide();
		$('#rs485lanlp3').hide(); 
		$('#mpm3pmlls2div').hide();

      } 
      if($('#ladeleistungss2modul').val() == 'mpm3pmlls2') {
		$('#sdm630s2div').hide();
		$('#sdm120s2div').hide();
		$('#swifis2div').hide();	
		$('#mpm3pmlls2div').show();
		$('#rs485lanlp3').show();	
      } 

	$('#ladeleistungss2modul').change(function(){
      if($('#ladeleistungss2modul').val() == 'sdm630modbuslls2') {
		$('#sdm630s2div').show(); 
		$('#sdm120s2div').hide();
		$('#swifis2div').hide();
		$('#rs485lanlp3').show(); 
		$('#mpm3pmlls2div').hide();
      } 	
      if($('#ladeleistungss2modul').val() == 'sdm120modbuslls2') {
		$('#swifis2div').hide();
    		$('#sdm630s2div').hide();
		$('#sdm120s2div').show();
		$('#rs485lanlp3').show(); 
		$('#mpm3pmlls2div').hide();
      } 
      if($('#ladeleistungss2modul').val() == 'simpleevsewifis2') {
		$('#swifis2div').show();
    		$('#sdm630s2div').hide();
		$('#sdm120s2div').hide();
		$('#rs485lanlp3').hide(); 
		$('#mpm3pmlls2div').hide();
      } 
      if($('#ladeleistungss2modul').val() == 'goelp3') {
		$('#swifis2div').show();
    		$('#sdm630s2div').hide();
		$('#sdm120s2div').hide();
		$('#rs485lanlp3').hide(); 
		$('#mpm3pmlls2div').hide();
      } 
      if($('#ladeleistungss2modul').val() == 'mpm3pmlls2') {
		$('#sdm630s2div').hide();
		$('#sdm120s2div').hide();
		$('#swifis2div').hide();	
		$('#mpm3pmlls2div').show();
		$('#rs485lanlp3').show();	
      } 

	    });
});
</script>

<script>
$(function() {
      if($('#lastmanagements2').val() == '0') {
		$('#lasts2mmaus').show(); 
		$('#lasts2mman').hide();
		$('#durchslp3').hide();
      } else {
		$('#lasts2mmaus').hide();
		$('#lasts2mman').show();
		$('#durchslp3').show();
      } 

	$('#lastmanagements2').change(function(){
	        if($('#lastmanagements2').val() == '0') {
			$('#lasts2mmaus').show(); 
			$('#lasts2mman').hide();
			$('#durchslp3').hide();
	        } else {
			$('#lasts2mmaus').hide();
			$('#lasts2mman').show();
			$('#durchslp3').show();
	        } 
	    });
});
</script>

<div class="row">	<hr>
	<h3> Strombezugsmessmodul (EVU-Übergabepunkt)</h3>
</div>
<div class="row">
	<b><label for="wattbezugmodul">Strombezugsmodul:</label></b>
	<select type="text" name="wattbezugmodul" id="wattbezugmodul">
		<option <?php if($wattbezugmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($wattbezugmodulold == "bezug_ethmpm3pm\n") echo selected ?> value="bezug_ethmpm3pm">OpenWB EVU Kit</option>
		<option <?php if($wattbezugmodulold == "vzlogger\n") echo selected ?> value="vzlogger">VZLogger</option>
		<option <?php if($wattbezugmodulold == "sdm630modbusbezug\n") echo selected ?> value="sdm630modbusbezug">SDM 630</option>
		<option <?php if($wattbezugmodulold == "bezug_http\n") echo selected ?> value="bezug_http">HTTP</option>
		<option <?php if($wattbezugmodulold == "bezug_json\n") echo selected ?> value="bezug_json">Json</option>
		<option <?php if($wattbezugmodulold == "bezug_mpm3pm\n") echo selected ?> value="bezug_mpm3pm">MPM3PM</option>
		<option <?php if($wattbezugmodulold == "smaemd_bezug\n") echo selected ?> value="smaemd_bezug">SMA Energy Meter</option>
		<option <?php if($wattbezugmodulold == "bezug_smashm\n") echo selected ?> value="bezug_smashm">SMA HomeManager</option>
		<option <?php if($wattbezugmodulold == "bezug_fronius_sm\n") echo selected ?> value="bezug_fronius_sm">Fronius Energy Meter</option>
		<option <?php if($wattbezugmodulold == "bezug_fronius_s0\n") echo selected ?> value="bezug_fronius_s0">Fronius WR mit S0 Meter</option>	
		<option <?php if($wattbezugmodulold == "bezug_solarlog\n") echo selected ?> value="bezug_solarlog">SolarLog</option>
		<option <?php if($wattbezugmodulold == "bezug_solaredge\n") echo selected ?> value="bezug_solaredge">Solaredge</option>
		<option <?php if($wattbezugmodulold == "bezug_smartme\n") echo selected ?> value="bezug_smartme">Smartme</option>
		<option <?php if($wattbezugmodulold == "bezug_e3dc\n") echo selected ?> value="bezug_e3dc">E3DC Speicher</option>
		<option <?php if($wattbezugmodulold == "bezug_sbs25\n") echo selected ?> value="bezug_sbs25">SMA SBS2.5 Speicher</option>


	</select>
</div>
<div class="row">
<br><br>
</div>

<div id="wattbezugethmpm3pm">
<div class="row">
Keine Konfiguration erforderlich.<br><br>
</div>
</div>
<div id="wattbezugmpm3pm">
		<div class="row" style="background-color:#febebe">
		<b><label for="mpm3pmevu">MPM3PM Zähler EVU Source:</label></b>
		<input type="text" name="mpm3pmevusource" id="mpm3pmevusource" value="<?php echo $mpm3pmevusourceold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="mpm3pmevuid">MPM3PM Zähler EVU ID:</label></b>
		<input type="text" name="mpm3pmevuid" id="mpm3pmevuid" value="<?php echo $mpm3pmevuidold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte 1-254. Modbus ID des MPM3PM.<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="sdm630modbusbezuglanip">RS485/Lan-Konverter IP:</label></b>
		<input type="text" name="sdm630modbusbezuglanip" id="sdm630modbusbezuglanip" value="<?php echo $sdm630modbusbezuglanipold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
	</div>

</div>

<div id="wattbezugnone">
<div class="row" style="background-color:#febebe">
	<b><label for="hausbezugnone">Angenommener Hausverbrauch:</label></b>
	<input type="text" name="hausbezugnone" id="hausbezugnone" value="<?php echo $hausbezugnoneold ?>"><br>
</div>
<div class="row" style="background-color:#febebe">
	Gültige Werte Zahl. Wenn keine EVU Messung vorhanden ist kann hier ein Hausgrundverbrauch festgelegt werden.<br> Daraus resultierend agiert die PV Regelung bei vorhandenem PV Modul<br><br>
</div>


	<br>
</div>
<div id="wattbezugsdm">
<div class="row" style="background-color:#febebe">
	<b><label for="sdm630modbusbezugsource">SDM 630 Zähler Source:</label></b>
	<input type="text" name="sdm630modbusbezugsource" id="sdm630modbusbezugsource" value="<?php echo $sdm630modbusbezugsourceold ?>"><br>
</div>
<div class="row" style="background-color:#febebe">
	Gültige Werte /dev/ttyUSB0, /dev/virtualcom. Serieller Port an dem der SDM angeschlossen ist.<br><br>
</div>
<div class="row" style="background-color:#febebe">
	<b><label for="sdm630modbusbezugid">Zähler ID:</label></b>
	<input type="text" name="sdm630modbusbezugid" id="sdm630modbusbezugid" value="<?php echo $sdm630modbusbezugidold ?>"><br>
</div>
<div class="row" style="background-color:#febebe">
	Gültige Werte 1-254. Modbus ID des SDM. Getestet SDM230 & SDM630v2.<br><br>
</div>
<div class="row" style="background-color:#febebe">
	<b><label for="sdm630modbusbezuglanip">RS485/Lan-Konverter IP:</label></b>
	<input type="text" name="sdm630modbusbezuglanip" id="sdm630modbusbezuglanip" value="<?php echo $sdm630modbusbezuglanipold ?>"><br>
</div>
<div class="row" style="background-color:#febebe">
	Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
</div>
</div>
<div id="wattbezugvz">
	<div class="row" style="background-color:#febebe">
		<b><label for="vzloggerip">Vzlogger IP Adresse inkl Port:</label></b>
		<input type="text" name="vzloggerip" id="vzloggerip" value="<?php echo $vzloggeripold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte IP:Port z.B. 192.168.0.12:8080. <br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="vzloggerline">Vzlogger Watt Zeile:</label></b>
		<input type="text" name="vzloggerline" id="vzloggerline" value="<?php echo $vzloggerlineold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile die aktullen Watt stehen und diesen hier eintragen. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="vzloggerline">Vzlogger Bezug kWh Zeile:</label></b>
		<input type="text" name="vzloggerkwhline" id="vzloggerkwhline" value="<?php echo $vzloggerkwhlineold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile die Gesamt kWh stehen und diesen hier eintragen. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="vzloggerline">Vzlogger Einspeisung kWh Zeile:</label></b>
		<input type="text" name="vzloggerekwhline" id="vzloggerekwhline" value="<?php echo $vzloggerekwhlineold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile die Gesamt eingespeisten kWh stehen und diesen hier eintragen.<br><br>
	</div>
</div>
<div id="wattbezughttp">
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_http_w_url">Vollständige URL für den Watt Bezug</label></b>
		<input type="text" name="bezug_http_w_url" id="bezug_http_w_url" value="<?php echo htmlspecialchars($bezug_http_w_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als "-" (für Einspeisung) oder "0-9" wird der Wert auf null gesetzt. Der Wert muss in Watt sein.<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_http_ikwh_url">Vollständige URL für den kWh Bezug</label></b>
		<input type="text" name="bezug_http_ikwh_url" id="bezug_http_ikwh_url" value="<?php echo htmlspecialchars($bezug_http_ikwh_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Der Wert muss in WattStunden sein. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_http_ekwh_url">Vollständige URL für die kWh Einspeisung</label></b>
		<input type="text" name="bezug_http_ekwh_url" id="bezug_http_ekwh_url" value="<?php echo htmlspecialchars($bezug_http_ekwh_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Der Wert muss in WattStunden sein. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_http_l1_url">Vollständige URL für die Ampere Phase 1</label></b>
		<input type="text" name="bezug_http_l1_url" id="bezug_http_l1_url" value="<?php echo htmlspecialchars($bezug_http_l1_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als "-" (für Einspeisung) oder "0-9" wird der Wert auf null gesetzt. Der Wert muss in Ampere sein. Bei nicht Nutzung auf none setzen.<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_http_l2_url">Vollständige URL für die Ampere Phase 2</label></b>
		<input type="text" name="bezug_http_l2_url" id="bezug_http_l2_url" value="<?php echo htmlspecialchars($bezug_http_l2_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als "-" (für Einspeisung) oder "0-9" wird der Wert auf null gesetzt. Der Wert muss in Ampere sein. Bei nicht Nutzung auf none setzen.<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_http_l3_url">Vollständige URL für die Ampere Phase 3</label></b>
		<input type="text" name="bezug_http_l3_url" id="bezug_http_l3_url" value="<?php echo htmlspecialchars($bezug_http_l3_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als "-" (für Einspeisung) oder "0-9" wird der Wert auf null gesetzt. Der Wert muss in Ampere sein. Bei nicht Nutzung auf none setzen.<br>
	</div>
</div>
<div id="wattbezugsmartme">
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_smartme_user">Smartme Benutzername</label></b>
		<input type="text" name="bezug_smartme_user" id="bezug_smartme_user" value="<?php echo htmlspecialchars($bezug_smartme_userold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Smartme Benutzername<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_smartme_pass">Smartme Passwort</label></b>
		<input type="text" name="bezug_smartme_pass" id="bezug_smartme_pass" value="<?php echo htmlspecialchars($bezug_smartme_passold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Smartme Passwort<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_smartme_url">Smartme Url</label></b>
		<input type="text" name="bezug_smartme_url" id="bezug_smartme_url" value="<?php echo htmlspecialchars($bezug_smartme_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Smartme Url<br>
	</div>

</div>
<div id="wattbezugshm">
	<div class="row" style="background-color:#febebe">
		<b><label for="smashmdbezugid">Seriennummer des SMA Home Manager</label></b>
		<input type="text" name="smashmbezugid" id="smaeshmbezugid" value="<?php echo $smashmbezugidold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Home Manager für Bezug/Einspeisung angeben. <br>Bei Eintragung oder Änderung der Seriennummer nach dem Speichern unter Misc "SMA Support" ausführen. Danach einen Reboot durchführen.<br><br>
	</div>
</div>

<div id="wattbezugsma">
	<div class="row" style="background-color:#febebe">
		<b><label for="smaemdbezugid">Seriennummer des SMA Energy Meter</label></b>
		<input type="text" name="smaemdbezugid" id="smaemdbezugid" value="<?php echo $smaemdbezugidold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Meter für Bezug/Einspeisung angeben<br> Infos zum SMA Energy Meter <a href="https://github.com/snaptec/openWB#extras">HIER</a><br>
	</div>
</div>
<div id="wattbezugfronius">
	<div class="row" style="background-color:#febebe">
		Die IP des Wechselrichters wird im dazugehörigen Fronius PV Modul eingestellt.<br>
	</div>
</div>

<div id="wattbezugjson">
	<div class="row" style="background-color:#febebe">
		<b><label for="bezugjsonurl">Bezug URL:</label></b>
		<input type="text" name="bezugjsonurl" id="bezugjsonurl" value="<?php echo $bezugjsonurlold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte URL. Vollständige URL die die Json Antwort enthält.<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezugjsonwatt">Json Abfrage für Watt:</label></b>
		<input type="text" name="bezugjsonwatt" id="bezugjsonwatt" value="<?php echo $bezugjsonwattold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Der hier eingetragene Befehl reduziert die Json Abfrage auf das wesentliche.<br> Im Hintergrund wird der Befehl jq benutzt.<br> Ist die Json Antwort z.B."{"PowerInstalledPeak":4655,"PowerProduced":132,"PowerOut":897.08172362555717,"PowerSelfSupplied":234.9182763744428}" So muss hier - .PowerOut - ohne die - - eingetragen werden<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezugjsonkwh">Json Abfrage für Bezug kWh:</label></b>
		<input type="text" name="bezugjsonkwh" id="bezugjsonkwh" value="<?php echo $bezugjsonkwhold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Der hier eingetragene Befehl reduziert die Json Abfrage auf das wesentliche.<br> Im Hintergrund wird der Befehl jq benutzt.<br> Ist die Json Antwort z.B."{"PowerInstalledPeak":4655,"PowerProduced":132,"PowerOut":897.08172362555717,"PowerSelfSupplied":234.9182763744428}" So muss hier - .PowerProduced - ohne die - - eingetragen werden<br><br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="bezugjsonkwh">Json Abfrage für Einspeisung kWh:</label></b>
		<input type="text" name="einspeisungjsonkwh" id="einspeisungjsonkwh" value="<?php echo $einspeisungjsonkwhold ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Der hier eingetragene Befehl reduziert die Json Abfrage auf das wesentliche.<br> Im Hintergrund wird der Befehl jq benutzt.<br> Ist die Json Antwort z.B."{"PowerInstalledPeak":4655,"PowerProduced":132,"PowerOut":897.08172362555717,"PowerSelfSupplied":234.9182763744428}" So muss hier - .PowerSelfSupplied - ohne die - - eingetragen werden<br><br>
	</div>

</div>
<div id="wattbezugsolarlog">
	<div class="row" style="background-color:#febebe">
		<b><label for="bezug_solarlog">IP Adresse des SolarLog</label></b>
		<input type="text" name="bezug_solarlog_ip" id="bezug_solarlog_ip" value="<?php echo htmlspecialchars($bezug_solarlog_ipold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
		Gültige Werte IP. Ein extra PV Modul ist dann nicht mehr nötig.<br> 
	</div>
</div>
<div id="wattbezugsolaredge">
	<div class="row" style="background-color:#febebe">
		Die IP des Wechselrichters wird im dazugehörigen Solaredge PV Modul eingestellt.<br>
		Hierfür muss ein EVU Zähler am SolarEdge Wechselrichter per Modbus angebunden sein.<br>
	</div>
</div>
<div id="wattbezuge3dc">
	<div class="row" style="background-color:#febebe">
		Die IP des Speichers wird im dazugehörigen E3DC Speicher Modul eingestellt.<br>
	</div>
</div>
<div id="wattbezugsbs25">
	<div class="row" style="background-color:#febebe">
		Die IP des Speichers wird im dazugehörigen SMA SBS 2.5 Speicher Modul eingestellt.<br>
	</div>
</div>

<script>
$(function() {
      if($('#wattbezugmodul').val() == 'vzlogger') {
		$('#wattbezugvz').show(); 
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugsmartme').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
      } 
   if($('#wattbezugmodul').val() == 'sdm630modbusbezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').show();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();

      } 
   if($('#wattbezugmodul').val() == 'none')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').show();
		$('#wattbezughttp').hide();
		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();

      } 
   if($('#wattbezugmodul').val() == 'bezug_http')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').show();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
    } 
   if($('#wattbezugmodul').val() == 'smaemd_bezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').show();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_fronius_sm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').show();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_fronius_s0')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').show();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugethmpm3pm').hide();
			$('#wattbezuge3dc').hide();
		$('#wattbezugsbs25').hide();
	$('#wattbezugsmartme').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_json')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').show();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
   } 
   if($('#wattbezugmodul').val() == 'bezug_mpm3pm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').show();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
   		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_solarlog')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').show();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
   		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_solaredge')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').show();
		$('#wattbezugshm').hide();
   		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
   }
  if($('#wattbezugmodul').val() == 'bezug_smashm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').show();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').hide();
  }
  if($('#wattbezugmodul').val() == 'bezug_smartme')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
		$('#wattbezugsmartme').show();
  }
  if($('#wattbezugmodul').val() == 'bezug_e3dc')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').show();
		$('#wattbezugsmartme').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').hide();
  }
  if($('#wattbezugmodul').val() == 'bezug_ethmpm3pm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugsmartme').hide();
		$('#wattbezugethmpm3pm').show();
		$('#wattbezugsbs25').hide();
  }
  if($('#wattbezugmodul').val() == 'bezug_sbs25')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugsmartme').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').show();
  }
   $('#wattbezugmodul').change(function(){
	      if($('#wattbezugmodul').val() == 'vzlogger') {
		$('#wattbezugvz').show(); 
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
	      } 
   if($('#wattbezugmodul').val() == 'sdm630modbusbezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').show();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
 		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').hide();
   		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
   } 
   if($('#wattbezugmodul').val() == 'none')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').show();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').hide();
   		$('#wattbezugethmpm3pm').hide();
   		$('#wattbezuge3dc').hide();
 		$('#wattbezugsbs25').hide();
  		$('#wattbezugsmartme').hide();
} 
   if($('#wattbezugmodul').val() == 'bezug_http')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').show();
  		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
 		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
   } 
   if($('#wattbezugmodul').val() == 'smaemd_bezug')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').show();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').hide();
  		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
 		$('#wattbezugsbs25').hide();
		$('#wattbezugethmpm3pm').hide();
   } 
   if($('#wattbezugmodul').val() == 'bezug_fronius_sm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').hide();
		$('#wattbezugfronius').show();
		$('#wattbezugjson').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').hide();
  		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_fronius_s0')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
  		$('#wattbezugsma').hide();
		$('#wattbezugfronius').show();
		$('#wattbezugjson').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').hide();
  		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
   } 
   if($('#wattbezugmodul').val() == 'bezug_json')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').show();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').hide();
 		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
   }
   if($('#wattbezugmodul').val() == 'bezug_mpm3pm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugmpm3pm').show();
		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
    } 

   if($('#wattbezugmodul').val() == 'bezug_solarlog')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').show();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
    } 
   if($('#wattbezugmodul').val() == 'bezug_solaredge')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').show();
		$('#wattbezugshm').hide();
  		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
   }
  if($('#wattbezugmodul').val() == 'bezug_smashm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').show();
 		$('#wattbezugsmartme').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
  }
  if($('#wattbezugmodul').val() == 'bezug_smartme')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
 		$('#wattbezugsmartme').show();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
  }
  if($('#wattbezugmodul').val() == 'bezug_e3dc')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').show();
		$('#wattbezugsmartme').hide();
		$('#wattbezugethmpm3pm').hide();
 		$('#wattbezugsbs25').hide();
  }
  if($('#wattbezugmodul').val() == 'bezug_ethmpm3pm')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugsmartme').hide();
		$('#wattbezugethmpm3pm').show();
 		$('#wattbezugsbs25').hide();

  }
  if($('#wattbezugmodul').val() == 'bezug_sbs25')   {
		$('#wattbezugvz').hide();
		$('#wattbezugsdm').hide();
		$('#wattbezugnone').hide();
		$('#wattbezughttp').hide();
 		$('#wattbezugsma').hide();
		$('#wattbezugfronius').hide();
		$('#wattbezugjson').hide();
		$('#wattbezugmpm3pm').hide();
		$('#wattbezugsolarlog').hide();
		$('#wattbezugsolaredge').hide();
		$('#wattbezugshm').hide();
  		$('#wattbezuge3dc').hide();
		$('#wattbezugsmartme').hide();
		$('#wattbezugethmpm3pm').hide();
		$('#wattbezugsbs25').show();
  }
	    });
});
</script>
<div class="row"><hr>
	<h3> PV Modul </h3>
</div>
<div class="row">
	<b><label for="pvwattmodul">PV Modul:</label></b>
	<select type="text" name="pvwattmodul" id="pvwattmodul">
		<option <?php if($pvwattmodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($pvwattmodulold == "wr_fronius\n") echo selected ?> value="wr_fronius">Fronius WR</option>
		<option <?php if($pvwattmodulold == "sdm630modbuswr\n") echo selected ?> value="sdm630modbuswr">SDM 630 Modbus</option>
		<option <?php if($pvwattmodulold == "vzloggerpv\n") echo selected ?> value="vzloggerpv">VZLogger</option>
		<option <?php if($pvwattmodulold == "wr_http\n") echo selected ?> value="wr_http">WR mit URL abfragen</option>
		<option <?php if($pvwattmodulold == "smaemd_pv\n") echo selected ?> value="smaemd_pv">SMA Energy Meter</option>
		<option <?php if($pvwattmodulold == "wr_json\n") echo selected ?> value="wr_json">WR mit Json abfragen</option>
		<option <?php if($pvwattmodulold == "mpm3pmpv\n") echo selected ?> value="mpm3pmpv">MPM3PM </option>
		<option <?php if($pvwattmodulold == "wr_kostalpiko\n") echo selected ?> value="wr_kostalpiko">Kostal Piko</option>
		<option <?php if($pvwattmodulold == "wr_solaredge\n") echo selected ?> value="wr_solaredge">SolarEdge WR</option>
		<option <?php if($pvwattmodulold == "wr_smartme\n") echo selected ?> value="wr_smartme">SmartMe</option>
		<option <?php if($pvwattmodulold == "wr_tripower9000\n") echo selected ?> value="wr_tripower9000">SMA Tripower 9000</option>



</select>
</div>
<div class="row">
	<br><br>
</div>
<div id="pvnone">
	<br>
</div>
<div id="pvsmartme">
	<div class="row" style="background-color:#febebe">
		<b><label for="wr_smartme_user">Smartme Benutzername</label></b>
		<input type="text" name="wr_smartme_user" id="wr_smartme_user" value="<?php echo htmlspecialchars($wr_smartme_userold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Smartme Benutzername<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="wr_smartme_pass">Smartme Passwort</label></b>
		<input type="text" name="wr_smartme_pass" id="wr_smartme_pass" value="<?php echo htmlspecialchars($wr_smartme_passold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Smartme Passwort<br>
	</div>
	<div class="row" style="background-color:#febebe">
		<b><label for="wr_smartme_url">Smartme Url</label></b>
		<input type="text" name="wr_smartme_url" id="wr_smartme_url" value="<?php echo htmlspecialchars($wr_smartme_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#febebe">
	Smartme Url<br>
	</div>

</div>

<div id="pvwrjson">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wrjsonurl">WR URL:</label></b>
		<input type="text" name="wrjsonurl" id="wrjsonurl" value="<?php echo $wrjsonurlold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte URL. Vollständige URL die die Json Antwort enthält.<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wrjsonwatt">Json Abfrage für Watt:</label></b>
		<input type="text" name="wrjsonwatt" id="wrjsonwatt" value="<?php echo $wrjsonwattold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Der hier eingetragene Befehl reduziert die Json Abfrage auf das wesentliche.<br> Im Hintergrund wird der Befehl jq benutzt.<br> Ist die Json Antwort z.B."{"PowerInstalledPeak":4655,"PowerProduced":132,"PowerOut":897.08172362555717,"PowerSelfSupplied":234.9182763744428}" So muss hier - .PowerOut - ohne die - - eingetragen werden<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wrjsonkwh">Json Abfrage für kWh:</label></b>
		<input type="text" name="wrjsonkwh" id="wrjsonkwh" value="<?php echo $wrjsonkwhold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Der hier eingetragene Befehl reduziert die Json Abfrage auf das wesentliche.<br> Im Hintergrund wird der Befehl jq benutzt.<br> Ist die Json Antwort z.B."{"PowerInstalledPeak":4655,"PowerProduced":132,"PowerOut":897.08172362555717,"PowerSelfSupplied":234.9182763744428}" So muss hier - .PowerProduced - ohne die - - eingetragen werden<br><br>
	</div>
</div>
<div id="pvwrkostalpiko">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wrfroniusip">WR Kostal Piko IP:</label></b>
		<input type="text" name="wrkostalpikoip" id="wrkostalpikoip" value="<?php echo $wrkostalpikoipold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte IP. IP Adresse Kostal Wechselrichter.<br><br>
	</div>
</div>
<div id="pvwrtri9000">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="tri9000ip">SMA TriPower 9000 IP:</label></b>
		<input type="text" name="tri9000ip" id="tri9000ip" value="<?php echo $tri9000ipold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte IP. IP Adresse des SMA TriPower9000, ggf. funktionieren auch andere SMA Wr mit diesem Modul.<br><br>
	</div>
</div>
<div id="pvwrsolaredge">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="solaredgepvip">WR Solaredge IP:</label></b>
		<input type="text" name="solaredgepvip" id="solaredgepvip" value="<?php echo $solaredgepvipold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte IP. IP Adresse des SolarEdge Wechselrichters.Modbus TCP muss am WR aktiviert werden.<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="solaredgepvslave1">WR 1 Solaredge ID:</label></b>
		<input type="text" name="solaredgepvslave1" id="solaredgepvslave1" value="<?php echo $solaredgeipslave1old ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte Zahl. ID des SolarEdge Wechselrichters. Normalerweise 1.<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="solaredgepvslave2">WR 2 Solaredge ID:</label></b>
		<input type="text" name="solaredgepvslave2" id="solaredgepvslave2" value="<?php echo $solaredgeipslave2old ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte Zahl oder none. ID des zweiten SolarEdge Wechselrichters. Wenn nur ein WR genutzt wird auf none setzen.<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="solaredgepvslave3">WR 3 Solaredge ID:</label></b>
		<input type="text" name="solaredgepvslave3" id="solaredgepvslave3" value="<?php echo $solaredgeipslave3old ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte Zahl oder none. ID des zweiten SolarEdge Wechselrichters. Wenn nur ein oder zwei WRs genutzt werden auf none setzen.<br><br>
	</div>
</div>
<div id="pvwrfronius">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wrfroniusip">WR Fronius IP:</label></b>
		<input type="text" name="wrfroniusip" id="wrfroniusip" value="<?php echo $wrfroniusipold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte IP. IP Adresse Fronius Webinterface.<br><br>
	</div>
</div>
<div id="pvmpm3pm">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="mpm3pmpvsource">MPM3PM Wechselrichterleistung Source:</label></b>
		<input type="text" name="mpm3pmpvsource" id="mpm3pmpvsource" value="<?php echo $mpm3pmpvsourceold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der MPM3PM angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="mpm3pmpvid">MPM3PM Wechselrichterleistung ID:</label></b>
		<input type="text" name="mpm3pmpvid" id="mpm3pmpvid" value="<?php echo $mpm3pmpvidold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte 1-254. Modbus ID des MPM3PM.<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="mpm3pmpvlanip">IP des Modbus/Lan Konverter:</label></b>
		<input type="text" name="mpm3pmpvlanip" id="mpm3pmpvlanip" value="<?php echo $mpm3pmpvlanipold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
	</div>
</div>



<div id="pvsdmwr">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="sdm630modbuswrsource">SDM Modbus Wechselrichterleistung Source:</label></b>
		<input type="text" name="sdm630modbuswrsource" id="sdm630modbuswrsource" value="<?php echo $sdm630modbuswrsourceold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte /dev/ttyUSB0, /dev/virtualcomX. Serieller Port an dem der SDM in der Wallbox angeschlossen ist. Meist /dev/ttyUSB0<br>Nach ändern der Einstellung von ttyUSB auf virtualcom0 ist ein Neustart erforderlich<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="sdm630modbuswrid">SDM Modbus Wechselrichterleistung ID:</label></b>
		<input type="text" name="sdm630modbuswrid" id="sdm630modbuswrid" value="<?php echo $sdm630modbuswridold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte 1-254. Modbus ID des SDM. Getestet SDM230 & SDM630v2.<br><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="sdm630modbuswrlanip">IP des Modbus/Lan Konverter:</label></b>
		<input type="text" name="sdm630modbuswrlanip" id="sdm630modbuswrlanip" value="<?php echo $sdm630modbuswrlanipold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte IP. Ist die source "virtualcomX" wird automatisch ein Lan Konverter genutzt.<br><br>
	</div>
</div>
<div id="pvvzl">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="vzloggerpvip">Vzloggerpv IP Adresse inkl Port:</label></b>
		<input type="text" name="vzloggerpvip" id="vzloggerpvip" value="<?php echo $vzloggerpvipold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte IP:Port z.B. 192.168.0.12:8080. <br><br>
	</div>
	<div class="row bg-warning">
		<b><label for="vzloggerpvline">Vzloggerpv Zeile:</label></b>
		<input type="text" name="vzloggerpvline" id="vzloggerpvline" value="<?php echo $vzloggerpvlineold ?>"><br>
	</div>
	<div class="row bg-warning">
		Gültige Werte z.B. Zahl. Bitte auf der Shell ausführen: "curl -s IPdesVZLogger:Port/ | jq ."<br> Nun zählen in welcher Zeile der gewünschte Wert steht und diesen hier eintragen.<br><br>
	</div>
</div>
<div id="pvhttp">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wr_http_w_url">Vollständige URL für die Wechselrichter Watt</label></b>
		<input type="text" name="wr_http_w_url" id="wr_http_w_url" value="<?php echo htmlspecialchars($wr_http_w_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Enthält der Rückgabewert etwas anderes als wird der Wert auf null gesetzt. Der Wert muss in Watt sein.
	</div>
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="wr_http_kwh_url">Vollständige URL für die Wechselrichter absolut kWh</label></b>
		<input type="text" name="wr_http_kwh_url" id="wr_http_kwh_url" value="<?php echo htmlspecialchars($wr_http_kwh_urlold) ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte vollständige URL. Die abgerufene Url muss eine reine Zahl zurückgeben. Der Wert muss in WattStunden sein. Der Wert dient rein dem Logging. Wird dieses nicht genutzt oder ist der Wert nicht verfügbar bitte auf "none" setzen, dann wird die Abfrage nicht ausgeführt.<br>
	</div>


</div>
<div id="pvsma">
	<div class="row" style="background-color:#BEFEBE">
		<b><label for="smaemdpvid">Seriennummer des SMA Energy Meter</label></b>
		<input type="text" name="smaemdpvid" id="smaemdpvid" value="<?php echo $smaemdpvidold ?>"><br>
	</div>
	<div class="row" style="background-color:#BEFEBE">
		Gültige Werte Seriennummer. Hier die Seriennummer des SMA Meter für die PV angeben<br>Infos zum SMA Energy Meter <a href="https://github.com/snaptec/openWB#extras">HIER</a><br>

	</div>
</div>

<script>
$(function() {
      if($('#pvwattmodul').val() == 'vzloggerpv') {
		$('#pvvzl').show(); 
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();i
		$('#pvwrtri9000').hide();

      } 
   if($('#pvwattmodul').val() == 'sdm630modbuswr')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').show();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'wr_fronius')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').show();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'none')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').show();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'wr_http')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').show();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'smaemd_pv')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').show();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   }
   if($('#pvwattmodul').val() == 'wr_json')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').show();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
 		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'mpm3pmpv')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').show();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
		$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


   } 
      if($('#pvwattmodul').val() == 'wr_kostalpiko')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').show();
			$('#pvwrsolaredge').hide();
   			$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


      } 
      if($('#pvwattmodul').val() == 'wr_solaredge')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').hide();
			$('#pvwrsolaredge').show();
   			$('#pvsmartme').hide();
 		$('#pvwrtri9000').hide();


      } 
      if($('#pvwattmodul').val() == 'wr_smartme')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').hide();
			$('#pvwrsolaredge').hide();
   			$('#pvsmartme').show();
 		$('#pvwrtri9000').hide();


      } 
      if($('#pvwattmodul').val() == 'wr_tripower9000')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').hide();
			$('#pvwrsolaredge').hide();
   			$('#pvsmartme').hide();
 		$('#pvwrtri9000').show();


      } 

  	$('#pvwattmodul').change(function(){
             if($('#pvwattmodul').val() == 'vzloggerpv') {
		$('#pvvzl').show(); 
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
 		$('#pvhttp').hide();
   		$('#pvsma').hide();
   		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


	     } 
   if($('#pvwattmodul').val() == 'sdm630modbuswr')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').show();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'wr_fronius')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').show();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'none')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').show();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   }
   if($('#pvwattmodul').val() == 'wr_http')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').show();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'smaemd_pv')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').show();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'wr_json')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').show();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   } 
   if($('#pvwattmodul').val() == 'mpm3pmpv')   {
		$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').show();
		$('#pvwrkostalpiko').hide();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


   } 
      if($('#pvwattmodul').val() == 'wr_kostalpiko')   {
	      	$('#pvvzl').hide();
		$('#pvsdmwr').hide();
		$('#pvwrfronius').hide();
		$('#pvnone').hide();
		$('#pvhttp').hide();
		$('#pvsma').hide();
		$('#pvwrjson').hide();
		$('#pvmpm3pm').hide();
		$('#pvwrkostalpiko').show();
		$('#pvwrsolaredge').hide();
         	$('#pvsmartme').hide();
  			$('#pvwrtri9000').hide();

     } 
      if($('#pvwattmodul').val() == 'wr_solaredge')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').hide();
			$('#pvwrsolaredge').show();
      			$('#pvsmartme').hide();
 			$('#pvwrtri9000').hide();


      } 

      if($('#pvwattmodul').val() == 'wr_smartme')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').hide();
			$('#pvwrsolaredge').hide();
   			$('#pvsmartme').show();
 			$('#pvwrtri9000').hide();

      } 
      if($('#pvwattmodul').val() == 'wr_tripower9000')   {
	      		$('#pvvzl').hide();
			$('#pvsdmwr').hide();
			$('#pvwrfronius').hide();
			$('#pvnone').hide();
			$('#pvhttp').hide();
			$('#pvsma').hide();
			$('#pvwrjson').hide();
			$('#pvmpm3pm').hide();
			$('#pvwrkostalpiko').hide();
			$('#pvwrsolaredge').hide();
   			$('#pvsmartme').hide();
 		$('#pvwrtri9000').show();


      } 
	});
});
</script>


<div class="row"><hr>
	<h3> Speicher Modul </h3>
</div>
<div class="row">
	<b><label for="speicherodul">Speicher Modul:</label></b>
	<select type="text" name="speichermodul" id="speichermodul">
		<option <?php if($speichermodulold == "none\n") echo selected ?> value="none">Nicht vorhanden</option>
		<option <?php if($speichermodulold == "speicher_http\n") echo selected ?> value="speicher_http">HTTP Abfrage</option>
		<option <?php if($speichermodulold == "mpm3pmspeicher\n") echo selected ?> value="mpm3pmspeicher">MPM3PM</option>
		<option <?php if($speichermodulold == "speicher_bydhv\n") echo selected ?> value="speicher_bydhv">ByD HV</option>
		<option <?php if($speichermodulold == "speicher_fronius\n") echo selected ?> value="speicher_fronius">Fronius Speicher</option>
		<option <?php if($speichermodulold == "speicher_e3dc\n") echo selected ?> value="speicher_e3dc">E3DC Speicher</option>
		<option <?php if($speichermodulold == "speicher_sbs25\n") echo selected ?> value="speicher_sbs25">SMA SBS2.5 Speicher</option>
		<option <?php if($speichermodulold == "speicher_solaredge\n") echo selected ?> value="speicher_solaredge">SolarEdge (StorEdge)</option>

	</select>
</div>

<div id="divspeichernone">
	<br>
</div>
<div id="divspeichere3dc">
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="e3dcip">E3DCIP:</label></b>
		<input type="text" name="e3dcip" id="e3dcip" value="<?php echo $e3dcipold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		Gültige Werte IP. IP Adresse des E3DC Speichers.<br><br>
	</div>
</div>
<div id="divspeichersbs25">
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="sbs25ip">SBS 2.5 IP:</label></b>
		<input type="text" name="sbs25ip" id="sbs25ip" value="<?php echo $sbs25ipold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		Gültige Werte IP. IP Adresse des SMA Sunny Boy Storage 2.5 Speichers.<br><br>
	</div>
</div>
<div id="divspeicherfronius">
	<div class="row" style="background-color:#fcbe1e">
		Die IP des Wechselrichters wird im dazugehörigen Fronius PV Modul eingestellt.<br>
	</div>
</div>

<div id="divspeicherhttp">
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="speicherleistung_http">Speicherleistung URL:</label></b>
		<input type="text" name="speicherleistung_http" id="speicherleistung_http" value="<?php echo $speicherleistung_httpold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		Gültige Werte URL. Vollständige URL die den aktuellen Leistungswert in Watt wiedergibt. Erwartet wird eine Ganzzahl. Positiv heißt Speicher wird geladen und eine negative Zahl bedeutet das der Speicher entladen wird. Das Modul dient dazu bei NurPV Ladung eine Entladung des Speichers zu verhindern.<br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="speichersoc_http">SpeicherSoC URL:</label></b>
		<input type="text" name="speichersoc_http" id="speichersoc_http" value="<?php echo $speichersoc_httpold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		Gültige Werte URL. Vollständige URL die den aktuellen SoC wiedergibt.<br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="speicherikwh_http">Speicher Import Wh URL:</label></b>
		<input type="text" name="speicherikwh_http" id="speicherikwh_http" value="<?php echo $speicherikwh_httpold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		Gültige Werte URL. Wenn nicht vorhanden, none eintragen. Vollständige URL die den Zählerstand der Batterieladung in WattStunden wiedergibt. Erwartet wird eine Ganzzahl.
	<br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="speicherekwh_http">Speicher Export Wh URL:</label></b>
		<input type="text" name="speicherekwh_http" id="speicherekwh_http" value="<?php echo $speicherekwh_httpold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		Gültige Werte URL. Wenn nicht vorhanden, none eintragen.  Vollständige URL die den Zählerstand der Batterieladung in WattStunden wiedergibt. Erwartet wird eine Ganzzahl.
	<br><br>
	</div>
</div>
<div id="divspeicherbydhv">
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="bydhvuser">Byd HV Benutzername:</label></b>
		<input type="text" name="bydhvuser" id="bydhvuser" value="<?php echo $bydhvuserold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
	Benutzername der ByD Batterie<br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="bydhvpass">Byd HV Passwort:</label></b>
		<input type="text" name="bydhvpass" id="bydhvpass" value="<?php echo $bydhvpassold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
	Passwort der ByD Batterie<br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="bydhvip">Byd HV IP Adresse:</label></b>
		<input type="text" name="bydhvip" id="bydhvip" value="<?php echo $bydhvipold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
	IP Adresse der ByD Batterie<br><br>
	</div>
</div>

<div id="divspeichermpm3pm">
	<div class="row" style="background-color:#fcbe1e"><br>
		<b><label for="mpm3pmspeichersource">Modbus Source:</label></b>
		<input type="text" name="mpm3pmspeichersource" id="mpm3pmspeichersource" value="<?php echo $mpm3pmspeichersourceold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
	Gültige Werte /dev/ttyUSBx , /dev/virtualcomX bei Verwendung mit Ethernet Modbus<br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="mpm3pmspeicherid">Modbus ID:</label></b>
		<input type="text" name="mpm3pmspeicherid" id="mpm3pmspeicherid" value="<?php echo $mpm3pmspeicheridold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
	Gültige Werte Zahl. <br><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
		<b><label for="mpm3pmspeicherpv">PV mit einberechnen?:</label></b>
		<select type="text" name="mpm3pmspeicherpv" id="mpm3pmspeicherpv">
			<option <?php if($mpm3pmspeicherpvold == "0\n") echo selected ?> value="0">Keine extra Berechnung</option>
			<option <?php if($mpm3pmspeicherpvold == "1\n") echo selected ?> value="1">Subtrahieren der PV Leistung</option>
		</select>
	</div>
	<div class="row" style="background-color:#fcbe1e"><br>
		<b><label for="mpm3pmspeicherlanip">Lan Modbus Konverter IP:</label></b>
		<input type="text" name="mpm3pmspeicherlanip" id="mpm3pmspeicherlanip" value="<?php echo $mpm3pmspeicherlanipold ?>"><br>
	</div>
	<div class="row" style="background-color:#fcbe1e">
	Gültige Werte eine IP Adresse. <br>
	</div>

</div>
<div id="divspeichersolaredge">
    <div class="row" style="background-color:#fcbe1e">
        Die IP des Wechselrichters wird im dazugehörigen Solaredge PV Modul eingestellt.<br>
        Hierfür muss ein StorEdge mit Speicher am SolarEdge Wechselrichter per Modbus angebunden sein.<br>
    </div>
</div>
<script>
$(function() {
      if($('#speichermodul').val() == 'none') {
		$('#divspeichernone').show(); 
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();
      }
   if($('#speichermodul').val() == 'speicher_http')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').show();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();




   }
   if($('#speichermodul').val() == 'mpm3pmspeicher')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').show();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();




   }
   if($('#speichermodul').val() == 'speicher_bydhv')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').show();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();




   }
   if($('#speichermodul').val() == 'speicher_fronius')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').show();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();


   }
   if($('#speichermodul').val() == 'speicher_e3dc')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').show();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();

   }
   if($('#speichermodul').val() == 'speicher_sbs25')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').show();
		$('#divspeichersolaredge').hide();

   }
     if($('#speichermodul').val() == 'speicher_solaredge')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').show();
		}
$('#speichermodul').change(function(){
     if($('#speichermodul').val() == 'none') {
		$('#divspeichernone').show(); 
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();




      } 
    if($('#speichermodul').val() == 'speicher_http')   {
		$('#divspeichernone').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherhttp').show();
 		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichersbs25').hide();
   
		$('#divspeichere3dc').hide();
		$('#divspeichersolaredge').hide();



    }
   if($('#speichermodul').val() == 'mpm3pmspeicher')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').show();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();




   }
   if($('#speichermodul').val() == 'speicher_bydhv')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').show();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();


   }
   if($('#speichermodul').val() == 'speicher_fronius')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').show();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();


   }
   if($('#speichermodul').val() == 'speicher_e3dc')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').show();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').hide();

   }
   if($('#speichermodul').val() == 'speicher_sbs25')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').show();
		$('#divspeichersolaredge').hide();

   }
    if($('#speichermodul').val() == 'speicher_solaredge')   {
		$('#divspeichernone').hide();
		$('#divspeicherhttp').hide();
		$('#divspeichermpm3pm').hide();
		$('#divspeicherbydhv').hide();
		$('#divspeicherfronius').hide();
		$('#divspeichere3dc').hide();
		$('#divspeichersbs25').hide();
		$('#divspeichersolaredge').show();
		}
});

});
</script>




<br><br>
<button type="submit" class="btn btn-primary btn-green">Save</button>	 
 </form><br><br />
<br><br>
<br><br>
 <button onclick="window.location.href='./index.php'" class="btn btn-primary btn-blue">Zurück</button>
<br><br>
<br><br>
<div class="row">
<div class="text-center">
Open Source made with love!<br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="2K8C4Y2JTGH7U">
<input type="image" src="./img/btn_donate_SM.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="./img/pixel.gif" width="1" height="1">
</form>
</div></div>
</div>
</body></html>

