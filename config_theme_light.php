<?php
//////////////////////////////////////////////////////////////////////////////////////////////
//Enter your settings:
//////////////////////////////////////////////////////////////////////////////////////////////
//##########################################################################################//
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_name_font = "Tahoma" ; // <= CHANGE THIS ex: "Tahoma"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_name_font_color = "#2F2F2F" ; // <= CHANGE THIS ex: "#2F2F2F"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_name_font_size = "14px" ; // <= CHANGE THIS ex: "14px" (14px max!)
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_url_name_font_weight = "bold" ; // <= CHANGE THIS ex: "bold"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_font = "Tahoma" ; // <= CHANGE THIS ex: "Tahoma"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_font_color = "#2F2F2F" ; // <= CHANGE THIS ex: "#2F2F2F"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_info_font_color = "#5C5C5C" ; // <= CHANGE THIS ex: "#5C5C5C"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_time_font_color = "#5C5C5C" ; // <= CHANGE THIS ex: "#5C5C5C"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_font_size = "12px" ; // <= CHANGE THIS ex: "12px" (12px max!)
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_font_weight = "bold" ; // <= CHANGE THIS ex: "bold"
//////////////////////////////////////////////////////////////////////////////////////////////
$sc_page_background_color = "#FFFFFF" ; // <= CHANGE THIS ex: "#C2C2C2"
//////////////////////////////////////////////////////////////////////////////////////////////
$row_color_1 = "#F0F0F0" ; // <= CHANGE THIS ex: "#F0F0F0"
//////////////////////////////////////////////////////////////////////////////////////////////
$row_color_2 = "#DADADA" ; // <= CHANGE THIS ex: "#DADADA"
//////////////////////////////////////////////////////////////////////////////////////////////
//##########################################################################################//
//////////////////////////////////////////////////////////////////////////////////////////////
//Do not edit below this line!!!
//////////////////////////////////////////////////////////////////////////////////////////////
//##########################################################################################//
//////////////////////////////////////////////////////////////////////////////////////////////
if ($album_art_size == "medium" ) {
$artist_art_size = replace_60;
$sc_no_cover = "img/nocover_light_60.png";
}
else if ($album_art_size == "large" ) {
$artist_art_size = replace_170;
$sc_no_cover = "img/nocover_light_170.png";
}
else if ($album_art_size == "extralarge" ) {
$artist_art_size = replace_300;
$sc_no_cover = "img/nocover_light_300.png";
}

?>