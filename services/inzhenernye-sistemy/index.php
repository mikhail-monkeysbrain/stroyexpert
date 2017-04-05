<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "инженерные системы зданий и сооружений, инженерные системы поставка,†инженерные системы,†монтаж вентил€ции здани€,†монтаж и наладка систем вентил€ции,†монтаж инженерных систем вентил€ци€,†монтаж промышленной системы вентил€ции,†монтаж систем отоплени€ канализации вентил€ции,†наладка систем вентил€ции,†поставка и монтаж систем вентил€ции,†системы промышленного хладоснабжени€ в ¬ологде, сооружений промышленного и бытового назначени€ системы гор€чего и холодного");
$APPLICATION->SetPageProperty("title", "| ”слуги | »нженерные системы");
$APPLICATION->SetTitle("»нженерные системы");
?><script>
document.title = '»нженерные системы';
</script>
<div class="project_wrap2" style="width:100%;background-color:#fff;padding-top: 144px;">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "services_menu",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/services/services/services_menu.php"
	)
);?>
	<div style="clear:both;">
	</div>
	<div class="wrapper1" style="margin-top:0px;border-top: 1px solid #fff;">
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
		<div class="profil_d_block_copy">
			<div class="otstup">
				<div class="profd" style="margin-bottom:16px;background-color:#0088CC;">
					<p style="font-size:12px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
						»Ќ∆≈Ќ≈–Ќџ≈ —»—“≈ћџ
					</p>
				</div>
				<div class="text_peredel" style="margin-right:20px;" align="justify">
					<div style="margin-bottom:15px;">
						 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "zagolovok_index6",
		"EDIT_TEMPLATE" => ""
	)
);?>
					</div>
					<div style="color:#898989;">
						 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "slujba_gen_podryadchika",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/slujba_gen_podryadchika.php"
	)
);?>
					</div>
				</div>
			</div>
 <br>
			 <!--<a class="gen_podryad" href="/services/slujba_gen_podrydchika/gallery_project/">ѕосмотреть галерею проектов</a>--> <?if ($APPLICATION->GetCurPage(false) == SITE_DIR."services3/"){?> <!-- толста€ лини€ снизу -->
			<div style="background-color:#0088CC;width:100%;height:30px;margin-top: -46px;">
			</div>
			 <!-- /толста€ лини€ снизу --> <?}?>
		</div>
		<div class="news_block_pd">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						”—“ќ…„»¬ќ≈ –ј«¬»“»≈
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div class="plashka_seraya_vn" style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu percent_200">
							 <!--<div class="buklet" style=" color: #898989;font-size: 11px;line-height: 1;text-align: justify;">--> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "services_ustoichivoe_razvitie",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/services_ustoichivoe_razvitie.php"
	)
);?> <!--</div>-->
						</div>
					</div>
				</div>
			</div>
			 <!--<div class="otstup">
					<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">Ќќ¬ќ—“»</p></div>

						<!--<div style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">--> <!--<div style="width:27%;min-width:250px;background-color:#EBEDEC;padding:30px 10px 30px;">--> <?/*$APPLICATION->IncludeComponent(
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
									"PAGER_TITLE" => "ййй",
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
							);*/?> <!--</div>-->
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
        	if(new_str == '/services/inzhenernye-sistemy/') {
            	$(this).addClass('active2');
        	}
    	});
    });




});

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>