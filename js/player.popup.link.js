var theURL = 'playerpopup.php';

// *** Browser Hack *** //

if (navigator.userAgent.indexOf("OPR") !== -1) {
var width  = 508;
var height = 205;
}
else if (navigator.userAgent.indexOf("Chrome") !== -1) {
var width  = 488;
var height = 125;
}
else if (navigator.userAgent.indexOf("Firefox") !== -1) {
var width  = 488;
var height = 125;
}
else if ((navigator.userAgent.indexOf("MSIE") !== -1) || (!!document.documentMode === true )) {
var width  = 488;
var height = 125;
}
else {
var width  = 488;
var height = 205;
}
function popUp() {
newWindow = window.open(theURL,'newWindow','left=0,top=0,toolbar=no,menubar=no,status=no,scrollbars=no,resizable=no,width='+width+',height='+height);
}