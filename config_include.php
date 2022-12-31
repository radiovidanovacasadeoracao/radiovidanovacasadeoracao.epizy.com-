<?php include_once 'proxy.php';

if ($theme_color == "dark") {
require_once 'config_theme_dark.php';
$skin = "skin_dark/cosmos.xml";
$border = "1px solid black";
$listen_button = "img/listen_button_dark.png";
} 
else if ($theme_color == "light") {
require_once 'config_theme_light.php';
$skin = "skin_light/cosmos.xml";
$border = "1px solid white";
$listen_button = "img/listen_button_light.png";
}
else { // I CASE SOMEBODY PUTS WRONG VALUE!!!
require_once 'config_theme_light.php';
$skin = "skin_light/cosmos.xml";
$border = "1px solid white";
$listen_button = "img/listen_button_light.png";
}
//////////////////////////////////////
if ($show_max_songs_history == "10") {
$height_history_iframe = "600px";
} 
else {
$height_history_iframe = "300px";
}
/////////////////////////////////////////////////////////////////////////////////////
if ($sc_ssl == "yes") {
$sc_protocol = "https";
}
else if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on" || $sc_ssl == "no") {
$sc_protocol = $proxy;
}
else {
$sc_protocol = "http";
}

?>