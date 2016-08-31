<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/sub.css" rel="stylesheet">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<style>
.dnone {display:none !important;}
.dimm {background:#000;opacity:85;filter:alpha(opacity=85);}
#mapDimm {width:100%;height:0px;overflow:hidden;}
</style>
<div id="mapDimm" class="dimm"></div>