<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Новости компании stroyexpert.pro");
$APPLICATION->SetPageProperty("keywords", "Стройэксперт, строй-эксперт, stroyexpert");
$APPLICATION->SetPageProperty("title", "| Новости компании stroyexpert.pro");
$APPLICATION->SetTitle("Новости");
?><?/*$APPLICATION->IncludeComponent(
	"bitrix:catalog.socnets.buttons",
	"",
	Array(
		"DESCRIPTION" => "",
		"FB_USE" => "Y",
		"GP_USE" => "Y",
		"IMAGE" => "",
		"TITLE" => "",
		"TW_HASHTAGS" => "",
		"TW_RELATED" => "",
		"TW_USE" => "Y",
		"TW_VIA" => "",
		"URL_TO_LIKE" => "",
		"VK_USE" => "Y"
	)
);*/?><?/*$APPLICATION->IncludeComponent(
	"bitrix:rss.show",
	"",
Array()
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:rss.show",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"NUM_NEWS" => "10",
		"OUT_CHANNEL" => "Y",
		"PROCESS" => "TEXT",
		"URL" => ""
	)
);*/?><?/*$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "",
		),
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);*/?>
<div class="news_wrap" style="padding-top: 144px;">
	<div style="width:100%;background-color:#fff;">
		<div class="wrapper1">
			<div class="otstup">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "number1",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/index_number1.php"
	)
);?>
			</div>
			<div class="line_zagran" style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;">
			</div>
			<div style="clear:both;">
			</div>
			<div class="profil_d_block_copy">
				<div class="otstup">
					<div class="profd profd_proj" style="background-color:#08c;margin-right:0px;margin-bottom:20px;">
						<p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
							 НОВОСТИ КОМПАНИИ
						</p>
					</div>
					 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"my_shablon3",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "arrows",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"foto",2=>"",),
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "5",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_ID#/",),
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"YANDEX" => "N"
	)
);?>
				</div>
				 <?if ($APPLICATION->GetCurPage(false) == SITE_DIR."news/"){?> <!-- толстая линия снизу --> <!--<div style="background-color:#585858;width:100%;height:30px;margin-top: -41px;"></div>--> <!-- /толстая линия снизу --> <?}?>
			</div>
			<div class="news_block_pd">
				<div class="otstup">
					<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
						<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
							 УСТОЙЧИВОЕ РАЗВИТИЕ
						</p>
					</div>
					<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
						<div class="plashka_seraya_vn" style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:17px;">
							<div class="percent_200">
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "services_ustoichivoe_razvitie",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/services_ustoichivoe_razvitie.php"
	)
);?>
							</div>
						</div>
					</div>
					<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;">
						<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
							 ПРЕЗЕНТАЦИИ
						</p>
					</div>
					<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 1px -6px 14px -7px #424242;">
						<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:17px;">
							<div style="font-size:11px;line-height:1;color:#898989;">
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "grey_banner_news2",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/grey_banner_news.php"
	)
);?>
							</div>
						</div>
					</div>
					<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow:1px 10px 10px -8px #424242;margin-top:2px;">
						<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:17px;">
							<div style="font-size:11px;line-height:1;color:#898989;">
								 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "grey_banner_news2",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/grey_banner_news1.php"
	)
);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="clear:both;">
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>