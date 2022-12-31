<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo "$sc_url_name"; ?></title><!-- AUTOMATICALLY FILLED IN BY THE CONFIG.PHP FILE! -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="SHOUTcast,HTML5,Player,iTunes,API,Album,Art,Cover,Music,Web,Radio,Stream">
    <meta name="description" content="<?php echo "$sc_url_name"; ?>">
    <!-- AUTOMATICALLY FILLED IN BY THE CONFIG.PHP FILE! -->

    <link rel="icon" href="old_favicon.ico" type="image/x-icon">

    <style>
        body {
            background-color: <?php echo "$sc_page_background_color"; ?>;
            font-size: 15px;
            font: 15px Tahoma;
            color: <?php echo "$sc_font_color"; ?>;
        }

        a {
            color: <?php echo "$sc_font_color"; ?>;
            text-decoration: underline;
        }

        a:visited {
            color: <?php echo "$sc_font_color"; ?>;
        }

        a:active {
            color: <?php echo "$sc_font_color"; ?>;
        }

        a:hover {
            color: <?php echo "$sc_font_color"; ?>;
        }
    </style>

</head>
<body>

<!-- Begin Banner Code -->
<?php include 'include_banneriframe.php'; ?>
<!-- End Banner Code -->

<br>

(Banner Example)

<br><br>

<!-- Begin Player Code -->
<?php include 'include_playeriframe.php'; ?>
<!-- End Player Code -->

<br>

(Webplayer Example)

<br><br>

Pop-up Link Example:

<br><br>

<!-- Begin Player Popup Link Code -->
<script src="js/player.popup.link.js"></script>
<a href="javascript:popUp()">Listen Live</a>
<!-- No Javascript HTML -->
<noscript><a href="playerpopup.php" target="_blank">Listen Live</a></noscript>
<!-- End Player Popup Link Code -->

<br><br>

Pop-up Button Example:

<br><br>

<!-- Begin Player Popup Link Code -->
<script src="js/player.popup.link.js"></script>
<a href="javascript:popUp()"><img src="<?php echo "$listen_button"; ?>" alt="Listen Live"
                                  style="width:64px;height:64px;border:0;display:inline;"></a>
<!-- No Javascript HTML -->
<noscript><a href="playerpopup.php" target="_blank"><img src="<?php echo "$listen_button"; ?>" alt="Listen Live"
                                                         style="width:64px;height:64px;border:0;display:inline;"></a>
</noscript>
<!-- End Player Popup Link Code -->

<br><br>

Mobile Webplayer Example:

<br><br>

<a href="example_mobile.php" target="_blank">Mobile Webplayer</a>

</body>
</html>