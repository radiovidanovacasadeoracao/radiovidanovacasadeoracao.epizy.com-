<?php require_once 'config.php'; ?>

<div style="border:0px solid black;width:468px;height:60px;margin:0px;padding:0px;position:relative;display:block;">
<iframe style="width:468px;height:60px;margin:0px;padding:0px;border:<?php echo "$border"; ?>;vertical-align:middle;overflow:hidden;" src="updatebanner.php" frameborder="0"></iframe>
<div style="cursor:pointer;opacity:0;filter:alpha(opacity=0);position:absolute;top:0;bottom:0;left:0;right:0;display:block;z-index:2;background:transparent;" onclick="window.open('<?php echo "$sc_url"; ?>')" title="<?php echo "$sc_url_name"; ?>"></div>
</div>