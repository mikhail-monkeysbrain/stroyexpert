<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проекты");
?><div class="project_wrap" style="width:100%;background-color:#fff;padding-top: 142px;">
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
				<div class="profd profd_proj" style="margin-right:0px;margin-bottom:17px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
						 ПРОЕКТЫ
					</p>
				</div>
				<div style="margin-right:0px;" align="justify">



					<?//if ($_SERVER['REQUEST_URI']=='/project/'){?>
<?if ($APPLICATION->GetCurPage(false) == SITE_DIR."project/"){?> 
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"nowi_shablon_dlya_proektov1", 
	array(
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "",
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
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "SORT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "adress",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "koncepciya_proecta",
			1 => "konstructiv_zdania",
			2 => "foto_object",
			3 => "texniko",
			4 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Работы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"SHOW_ORDER_LINK" => "Y",
		"SHOW_ORDER_TITLE" => "Хочу так же!",
		"CLASS" => "",
		"RESIZE_IMAGE_WIDTH" => "200",
		"RESIZE_IMAGE_HEIGHT" => "150",
		"MORE_PHOTO" => "PICTURES",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_FOLDER" => "/project/gallery_project/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"nowi_shablon_dlya_proektov2", 
	array(
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "14",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/services/stroitelno-montazhnye-raboty/gallery_project/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "SORT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "adress",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "koncepciya_proecta",
			2 => "konstructiv_zdania",
			3 => "foto_object",
			4 => "texniko",
			5 => "konstructiv_zdania",
			6 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Работы",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"SHOW_ORDER_LINK" => "Y",
		"SHOW_ORDER_TITLE" => "Хочу так же!",
		"CLASS" => "",
		"RESIZE_IMAGE_WIDTH" => "200",
		"RESIZE_IMAGE_HEIGHT" => "150",
		"MORE_PHOTO" => "PICTURES",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
					<?}?> 
					<!-- толстая линия снизу -->
					<!--<div style="background-color:#585858;width:100%;height:30px;">
					</div>-->
					 <!-- /толстая линия снизу -->
				</div>
			</div>
		</div>
		<div class="news_block_pd">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 КАТЕГОРИИ
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu">
							<ul class="menu_services_right">
								<li> <a class="services_number" href="/services/kompleksnoe-proektirovanie/" style="color:#8C8C8C;">Комплексное проектирование</a> </li>
								<li> <a class="services_number" href="/services/stroitelno-montazhnye-raboty/" style="color: #8c8c8c;">Строительно-монтажные работы</a> </li>
								<li> <a class="services_number" href="/services/slujba_gen_podrydchika/" style="color: #8c8c8c;">Служба генерального подрядчика</a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 ПРЕЗЕНТАЦИИ
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC; box-shadow: 1px -6px 14px -7px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
						<div class="buklet" style=" color: #898989;font-size: 11px;line-height: 1;text-align: justify;">
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
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC; box-shadow: 1px 10px 10px -8px #424242;margin-top:2px;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
						<div class="buklet" style=" color: #898989;font-size: 11px;line-height: 1;text-align: justify;">
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
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;margin-top:20px;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 УСТОЙЧИВОЕ РАЗВИТИЕ
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "uslugi_right",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/uslugi_right.php"
	)
);?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="clear:both;">
		</div>
	</div>
</div>

<?if($_SERVER['REQUEST_URI']=='/project/'){?>
	<style>
		@media(min-width:1700px){    /*было 1306px*/
			.wrapper1{
				max-width:1286px;
			}
			.profil_d_block_copy{
				width:76.4%;
				margin-left:-175px;
			}
			.news_block_pd{
				width:23.4%;
			}
			.new_class{
				display:inline-block;
				vertical-align:top;
				max-width:654px;
			}
			.str_mont_rab{
				display:inline-block;
				vertical-align:top;
				max-width:326px;
				margin-left:-2px !important;
			}
			.clear_display{
				display:none;
			}
			.profil_d_block_copy{
				margin-right:2px;
			}
			#bx_incl_area_2_2{
				display:inline-block;
				vertical-align:top;
				max-width:654px;
			}
			#bx_incl_area_2_3{
				display:inline-block;
				vertical-align:top;
				max-width:326px;
				margin-left:-2px;
			}

		}

	</style>
<?};?>

<?
//echo "<pre>";
//print_r($_SERVER);
//echo "<pre>";

?>














<script type="text/javascript">

$('document').ready(function() {

	$(function () { 
    		$('.menu_uslugi_a1').each(function () {
        	var location = window.location.pathname;

				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (location);


        	var link = this.href; 					
        	if(new_str == '/services/') {
            	$(this).addClass('active2');
        	}
    	});
    });

});

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>