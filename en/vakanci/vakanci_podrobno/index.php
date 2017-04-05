<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Строительно-монтажные работы");
?>

<br><br><br><br><br><br><br>
<div style="width:100%;background-color:#fff;margin-top: 7px;">





		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "services_menu",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/services/services/services_menu.php"
	),
	false
);?>




<div style="clear:both;"></div>


<div class="wrapper1" style="margin-top:0px;">

			<div class="otstup">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "number1",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/index_number1.php"
					),
					false
				);?>
			</div>


<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>

			<div class="profil_d_block_copy" style="">
				<div class="otstup">
					<div class="profd"  style="margin-right:0px;margin-bottom:30px;background-color:#0088CC;"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">СЛУЖБА ГЕНЕРАЛЬНОГО ПОДРЯДЧИКА</p></div>
						<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"shablon_vakancii", 
	array(
		"IBLOCK_TYPE" => "vacancies",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "obyazannosti",
			1 => "trebovaniya",
			2 => "undefined",
			3 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "obyazannosti",
			1 => "trebovaniya",
			2 => "undefined",
			3 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"PERIOD_NEW_TAGS" => "",
		"SEF_FOLDER" => "/vakanci/vakanci_podrobno/",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_AS_RATING" => "rating",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"TAGS_CLOUD_WIDTH" => "100%",
		"USE_SHARE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_ID#/",
		)
	),
	false
);?>

				</div>

				<?if ($APPLICATION->GetCurPage(false) == SITE_DIR."services/slujba_gen_podrydchika/gallery_project/"){?> 
				<!-- толстая линия снизу -->
				<div style="background-color:#0088CC;width:100%;height:30px;margin-top: -46px;"></div>
				<!-- /толстая линия снизу -->
				<?}?>

			</div>

			<div class="news_block_pd">
				<div class="otstup">

					<div class="news_r" style="margin-bottom:30px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">УСТОЙЧИВОЕ РАЗВИТИЕ</p></div>
						<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
								<div class="left-menu">
									<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "number1",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/uslugi_right.php"
	),
	false
);?>
								</div>
							</div>
						</div>
					</div>




					<div class="news_r" style="margin-bottom:30px;margin-top:30px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">НОВОСТИ</p></div>

						<!--<div style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">-->
							<!--<div style="width:27%;min-width:250px;background-color:#EBEDEC;padding:30px 10px 30px;">-->
								<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"my_shablon", 
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "",
		"SORT_ORDER1" => "",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
							<!--</div>-->
						<!--</div>-->
					</div>


		</div>
		<div style="clear:both;"></div>






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

</script>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>