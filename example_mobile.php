<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo "$sc_url_name"; ?></title><!-- AUTOMATICALLY FILLED IN BY THE CONFIG.PHP FILE! -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="SHOUTcast,HTML5,Player,iTunes,API,Album,Art,Cover,Music,Web,Radio,Stream">
<meta name="description" content="<?php echo "$sc_url_name"; ?>"><!-- AUTOMATICALLY FILLED IN BY THE CONFIG.PHP FILE! -->
<meta name="google" content="notranslate"><!-- disable google translate -->

<link rel="icon" href="old_favicon.ico" type="image/x-icon">

<style>
body {background-color:<?php echo "$sc_page_background_color"; ?>;font-size:15px;font:15px Tahoma;color:<?php echo "$sc_font_color"; ?>;margin:0px;padding:0px;}
table {border-collapse:collapse;border-spacing:0;margin:0px;padding:0px;}
a{color:<?php echo "$sc_font_color"; ?>;text-decoration:underline;}
a:visited{color:<?php echo "$sc_font_color"; ?>;}
a:active{color:<?php echo "$sc_font_color"; ?>;}
a:hover{color:<?php echo "$sc_font_color"; ?>;}
</style>

</head>
<body>

<table style="width:100%;">
<tr>
<td align="center">

<!-- Begin Content -->

<!-- Begin Player Code -->
<?php include 'include_playeriframe.php'; ?>
<!-- End Player Code -->

<!-- End Content -->

</td>
</tr>
</table>

</body>
</html>