<?php
///////////////////////////////////////////////
//CORS PROXY LIST FOR SSL//////////////////////
///////////////////////////////////////////////
//https://html5radioplayer1us.herokuapp.com/?q=
//https://html5radioplayer2us.herokuapp.com/?q=
//https://html5radioplayer3us.herokuapp.com/?q=
//https://html5radioplayer4us.herokuapp.com/?q=
//https://html5radioplayer5us.herokuapp.com/?q=
//https://html5radioplayer6eu.herokuapp.com/?q=
//https://html5radioplayer7eu.herokuapp.com/?q=
//https://html5radioplayer8eu.herokuapp.com/?q=
//https://html5radioplayer9eu.herokuapp.com/?q=
//https://touteslesradiosfr10.herokuapp.com/index.php?q=
////////////////////////////////////////////////////////////////////////////////////////////
//Or install your own CORS PROXY easy with this Video Tutorial: https://youtu.be/ai2Cx9AjK34
////////////////////////////////////////////////////////////////////////////////////////////

$url1 = "https://html5radioplayer1us.herokuapp.com/?q=http"; // (+ http!)
$url2 = "https://html5radioplayer2us.herokuapp.com/?q=http"; // (+ http!)
$url3 = "https://html5radioplayer3us.herokuapp.com/?q=http"; // (+ http!)
$url4 = "https://html5radioplayer4us.herokuapp.com/?q=http"; // (+ http!)
$url5 = "https://html5radioplayer5us.herokuapp.com/?q=http"; // (+ http!)
$url6 = "https://html5radioplayer6eu.herokuapp.com/?q=http"; // (+ http!)
$url7 = "https://html5radioplayer7eu.herokuapp.com/?q=http"; // (+ http!)
$url8 = "https://html5radioplayer8eu.herokuapp.com/?q=http"; // (+ http!)
$url9 = "https://html5radioplayer9eu.herokuapp.com/?q=http"; // (+ http!)
$url10 = "https://touteslesradiosfr10.herokuapp.com/index.php?q=http"; // (+ http!)

function url_test($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1); // connection timeout in seconds
	curl_setopt($ch, CURLOPT_TIMEOUT, 2); // curl timeout in seconds
	$http_respond = curl_exec($ch);
	$http_respond = trim(strip_tags($http_respond));
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	if(($http_code == "200") || ($http_code == "302")) {
	return true;
	} else {
	// return $http_code;, possible too
	return false;
	}
curl_close($ch);
}
 
if(url_test($url1)) { $proxy = $url1;}
else if(url_test($url2)) { $proxy = $url2;}
else if(url_test($url3)) { $proxy = $url3;}
else if(url_test($url4)) { $proxy = $url4;}
else if(url_test($url5)) { $proxy = $url5;}
else if(url_test($url6)) { $proxy = $url6;}
else if(url_test($url7)) { $proxy = $url7;}
else if(url_test($url8)) { $proxy = $url8;}
else if(url_test($url9)) { $proxy = $url9;}
else if(url_test($url10)) { $proxy = $url10;}
//////////////////////////////////////////////
else { $proxy = "http"; 

	echo "<script language='javascript'>";
	echo "console.log('Proxies not working!')";
	echo "</script>";
}
//////////////////////////////////////////////
?>