<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Вакансии");
$APPLICATION->SetPageProperty("description", "Вакансия специалиста технического заказчика");
$APPLICATION->SetTitle("Специалист службы технического заказчика");
?><?$APPLICATION->IncludeComponent(
	"intervolga:smo.opengraph",
	"",
	Array(
		"ADMINS" => array(""),
		"APP_ID" => "",
		"AUDIO" => array(""),
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DESCRIPTION" => "Cпециалист службы технического заказчика",
		"DETERMINER" => "",
		"ELEMENT_ID" => "290",
		"IBLOCK_EXTRACT" => "Y",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "vacancies",
		"IMAGE" => array("/vakanci/stroyexpert_vakansii_.jpg",""),
		"LOCALE" => "",
		"LOCALE_ALTERNATE" => array(""),
		"OVERRIDE_MODULE" => "N",
		"PRIMARY_DOMAIN" => "",
		"PRIMARY_PROTOCOL" => "",
		"PROFILE_ID" => "",
		"RESTRICTIONS_AGE" => "",
		"RESTRICTIONS_CONTENT" => array(""),
		"RESTRICTIONS_COUNTRY" => "",
		"RESTRICTIONS_COUNTRY_ALLOWED" => array(""),
		"RESTRICTIONS_COUNTRY_DISALLOWED" => array(""),
		"SEE_ALSO" => array(""),
		"SITE_NAME" => "",
		"SITE_NAME_FROM" => "",
		"TITLE" => "Вакансии компании stroyexpert.pro",
		"TYPE" => "",
		"UPDATED_TIME" => "",
		"URL" => "/vakanci/vakanci_podrobno/290/",
		"VIDEO" => array("")
	)
);?> <br>
 <br>
 <br>
 <br>
 <br>
 <br>
<div style="width:100%;background-color:#fff;margin-top: 7px;">
	 <?/*$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "services_menu",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/services/services/services_menu.php"
	),
	false
);*/?>
	<div style="clear:both;">
	</div>
	<div class="wrapper1" style="margin-top:0px;">
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
		 <!--<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>-->
		<div class="profil_d_block_copy">
			<div class="otstup">
				<div class="profd" style="margin-right:0px;margin-bottom:30px;background-color:#878787;">
					<p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
						 ВАКАНСИИ
					</p>
				</div>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"shablon_vakancii",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPONENT_TEMPLATE" => "shablon_vakancii",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"obyazannosti",1=>"trebovaniya",2=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "vacancies",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"obyazannosti",1=>"trebovaniya",2=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/vakanci/vakanci_podrobno/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"#ELEMENT_ID#/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?>
			</div>
			 <?if ($APPLICATION->GetCurPage(false) == SITE_DIR."services/slujba_gen_podrydchika/gallery_project/"){?> <!-- толстая линия снизу -->
			<div style="background-color:#0088CC;width:100%;height:30px;margin-top: -46px;">
			</div>
			 <!-- /толстая линия снизу --> <?}?>
		</div>





<div class="news_block_pd" style="">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						УСТОЙЧИВОЕ РАЗВИТИЕ
					</p>
				</div>
				<div class="plashka_seraya sust_development" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div class="plashka_seraya_vn" style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu percent_200">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
								"AREA_FILE_SHOW" => "file",	// Показывать включаемую область
									"AREA_FILE_SUFFIX" => "services_ustoichivoe_razvitie",	// Суффикс имени файла включаемой области
									"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
									"PATH" => "/include/services_ustoichivoe_razvitie.php"
								)
							);?>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!--<div class="news_block_pd">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:30px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 УСТОЙЧИВОЕ РАЗВИТИЕ
					</p>
				</div>
				<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu">
<?/*$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
								"AREA_FILE_SHOW" => "file",	// Показывать включаемую область
									"AREA_FILE_SUFFIX" => "services_ustoichivoe_razvitie",	// Суффикс имени файла включаемой области
									"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
									"PATH" => "/include/services_ustoichivoe_razvitie.php"
								)
);*/?>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="news_r" style="margin-bottom:30px;margin-top:30px;background-color:#08c;">
				<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
					 НОВОСТИ
				</p>
			</div>-->

			<?/*$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"my_shablon",
				Array(
					"ACTIVE_DATE_FORMAT" => "",
					"ADD_SECTIONS_CHAIN" => "Y",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "1",
					"IBLOCK_TYPE" => "news",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"INCLUDE_SUBSECTIONS" => "Y",
					"NEWS_COUNT" => "2",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "Y",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => "",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0=>"",1=>"",),
					"SET_BROWSER_TITLE" => "Y",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SORT_BY1" => "",
					"SORT_BY2" => "",
					"SORT_ORDER1" => "",
					"SORT_ORDER2" => ""
				)
			);*/?>
		</div>
	</div>
	<div style="clear:both;">
	</div>
</div>
<script>

$('document').ready(function() {



	$(function () { 
    		$('.menu_uslugi_a3').each(function () {
        	var location = window.location.pathname;

				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/services/slujba_gen_podrydchika/') {
            	$(this).addClass('active2');
        	}
    	});
    });




});

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>