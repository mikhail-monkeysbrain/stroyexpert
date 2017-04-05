<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!--<script type="text/javascript" src="jquery-2.1.3.min.js"></script>-->
<script type="text/javascript" src="markers.js">
</script>
</head>
<body><div id="map"></div>
<div ><input type="button" id="showmarkers" value="Показать маркеры" /></div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>