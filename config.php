<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//######################################### shoutcast-html5-player.com #########################################//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Enter your settings:
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//##############################################################################################################//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_ip = "s3.free-shoutcast.com" ; // <= CHANGE THIS ex: "radiogaga.dynu.com" or "0.0.0.0" (no http(s):// !)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_port = "18150" ; // <= CHANGE THIS ex: "8000"
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_sID = "1"; // <= CHANGE THIS ex: "1" (SHOUTcast Default) 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_mount = ";" ; // <= CHANGE THIS ex: ";" (SHOUTcast Default)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_ext = "mp3" ; // <= CHANGE THIS "mp3" or "aac" (2 options!)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_ssl = "no" ; // <= CHANGE THIS to "yes" or "no" (SSL HTTPS Stream ?)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_url = "http://radiovidanovacasadeoracao.infinityfreeapp.com" ; // <= CHANGE THIS ex: "http(s)://www.radiostation.com"
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_name = "RADIO VIDA NOVA CASA DE ORACAO" ; // <= CHANGE THIS ex: "RADIO STATION"
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_offline_txt = "RADIO OFFLINE" ; // <= CHANGE THIS ex: "STATION OFFLINE!"
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_autostart_player = "true" ; // <= CHANGE THIS to "true" or "false" (No effect on pop-ups!)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_autostart_player_popup = "true" ; // <= CHANGE THIS to "true" or "false" (Only effect on pop-ups!)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_startvolume_player = "100" ; // <= CHANGE THIS from "0" to "100"
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$theme_color = "light" ; // <= CHANGE THIS to "dark" or "light" (2 options!)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$sc_scroll_now_playing = "marquee" ; // <= CHANGE THIS to "marquee" or leave empty ("")
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$show_max_songs_history = "5" ; // <= CHANGE THIS to "5" or "10" (2 options!)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$album_art_size = "large" ; // <= CHANGE THIS to "medium", "large" or "extralarge"
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$buy_url = "no" ; // <= CHANGE THIS to "yes" or "no" (Not working on mobile devices!)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$affiliate_token = "1000lIPN"; // <= CHANGE THIS ex: "1000lIPN" (iTunes/Apple Music Partner Token)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$affiliate_app = "itunes"; // <= CHANGE THIS to "itunes" or "music" (iTunes/Apple Music)
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$time_zone = "America/Sao_Paulo" ; //YOUR TIMEZONE => http://php.net/manual/en/timezones.php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$time_zone_format = "H:i:s" ; // <= CHANGE THIS ex:  "H:i:s" or "h:i:s A" (AM/PM) 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//##############################################################################################################//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//##############################################################################################################//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Do not edit below this line!!!
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//######################################### shoutcast-html5-player.com #########################################//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(!function_exists('curl_init')){die('<script type="text/javascript">alert("cURL not available!")</script>');}///
include_once 'config_include.php';////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
?>