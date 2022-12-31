$(document).ready(function() {
$("#updateNowplaying").load("./nowplaying.php");
var refreshId = setInterval(function() {
$("#updateNowplaying").load('./nowplaying.php?randval='+ Math.random());
}, 30000);
$.ajaxSetup({ cache: false });
});