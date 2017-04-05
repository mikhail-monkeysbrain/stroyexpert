<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->AddHeadString('<met a property="og:title" content="' . $arResult["NAME"] . '" />');
$APPLICATION->AddHeadString('<met a property="og:description" content="' . $arResult["NAME"] . '" />');
$APPLICATION->AddHeadString('<met a property="og:image" content="' . $arResult["PREVIEW_PICTURE"]["SRC"] . '" />');
?>