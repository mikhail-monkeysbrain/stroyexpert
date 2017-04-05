<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

//Кэшируем необходимые нам ключи $arResult что бы можно было их использовать в component_epilog.php
$this->__component->SetResultCacheKeys(array(
    "NAME",
    "PREVIEW_TEXT",
    "PREVIEW_PICTURE",
	"PROPERTIES"
));?>