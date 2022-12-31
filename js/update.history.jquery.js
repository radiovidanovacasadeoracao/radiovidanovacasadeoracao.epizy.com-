$(document).ready(function() {
$("#updateHistory").load("./history.php");
var refreshId = setInterval(function() {
$("#updateHistory").load('./history.php?randval='+ Math.random());
}, 30000);
$.ajaxSetup({ cache: false });
});