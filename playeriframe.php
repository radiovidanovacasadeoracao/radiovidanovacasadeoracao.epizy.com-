<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- Viewport for all playerpages with iframes! -->
<meta name="viewport" content="width=470, user-scalable=no"><!-- 468+2x(border:1px) -->

<link rel="stylesheet" type="text/css" href="css/style.iframe.css">
<link rel="stylesheet" type="text/css" href="css/marquee.css">

<script src="js/jquery.min.js"></script>
<script src="js/update.me.nowplaying.jquery.js"></script>
<!--<script src="js/no.rightclick.select.js"></script>-->
<script src="js/yes.rightclick.select.js"></script>

<!-- Force Audio Autoplay in Chrome Browser -->
<script src="js/reload.page.php.js"></script>

</head>
<body style="background-color:<?php echo "$sc_page_background_color"; ?>;">

<table style="border:<?php echo "$border"; ?>">
<tr>
<td style="width:468px;height:60px;">
<iframe id="player" src="updateplayer.php" frameborder="0"></iframe>
</td>
</tr>
<tr>
<td style="width:468px;height:45px;">
<!--/////////////////////////////////-->
<!-- BEGINS: MUSES RADIO PLAYER CODE -->
<script type="text/javascript" src="js/mrp.js"></script>
<script type="text/javascript">
MRP.insert({
'url':'<?php echo "$sc_protocol://$sc_url_ip:$sc_url_port/$sc_url_mount.$sc_url_ext"; ?>',
'fallbackUrl':'<?php echo "$sc_protocol://$sc_url_ip:$sc_url_port/$sc_url_mount.$sc_url_ext"; ?>',
'lang':'en',
'codec':'<?php echo "$sc_url_ext"; ?>',
'volume':<?php echo "$sc_startvolume_player"; ?>,
'autoplay':<?php echo "$sc_autostart_player"; ?>,
'jsevents':true,
'buffering':0,
'title':'',
'wmode':'transparent',
'skin':'<?php echo "$skin"; ?>',
'width':468,
'height':45
});
</script>
<!-- ENDS: MUSES RADIO PLAYER CODE -->
<!--///////////////////////////////-->
<!-- Begin No JavaScript Alert -->
<noscript>
<p>THIS PLAYER NEEDS JAVASCRIPT TO WORK!</p>
</noscript>
<!-- End No JavaScript Alert -->
</td>
</tr>
</table>

</body>
</html>