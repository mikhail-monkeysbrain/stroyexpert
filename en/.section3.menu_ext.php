<?
	global $APPLICATION;
	$aMenuLinksNew = $APPLICATION->IncludeComponent(
		"bitrix:menu.sections",
		"",
		Array(
			"IS_SEF" => "Y",
			"SEF_BASE_URL" =>  "/services/slujba_gen_podrydchika/gallery_project/",
			"SECTION_PAGE_URL" => "#SECTION_CODE#/",
			"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"IBLOCK_TYPE" => "services",
			"IBLOCK_ID" => "15",
			"DEPTH_LEVEL" => "1",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000"
		),
		null,
		array("HIDE_ICONS"=>"Y")
	);

	$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksNew);

?>