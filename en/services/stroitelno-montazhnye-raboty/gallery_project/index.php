<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����������-��������� ������");
?>

<div class="project_wrap2" style="width:100%;background-color:#fff;padding-top: 142px;">
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
		<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;">
		</div>
		<div class="profil_d_block_copy">
			<div class="otstup">
				<div class="profd" style="margin-right:0px;margin-bottom:20px;background-color:#878787;">
					<p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
						����������� - ��������� ������
					</p>
				</div>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"stroy_montaj_raboti1",
	Array(
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
		"LIST_FIELD_CODE" => array(0=>"SORT",1=>"DETAIL_PICTURE",2=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"adress",1=>"",),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"koncepciya_proecta",2=>"konstructiv_zdania",3=>"foto_object",4=>"texniko",5=>"konstructiv_zdania",6=>"",),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"SHOW_ORDER_LINK" => "Y",
		"SHOW_ORDER_TITLE" => "���� ��� ��!",
		"CLASS" => "",
		"RESIZE_IMAGE_WIDTH" => "200",
		"RESIZE_IMAGE_HEIGHT" => "150",
		"MORE_PHOTO" => "PICTURES",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"#SECTION_CODE#/","detail"=>"#SECTION_CODE#/#ELEMENT_CODE#/",),
		"VARIABLE_ALIASES" => Array(
		)
	)
);?>
			</div>
			 <?if ($APPLICATION->GetCurPage(false) == SITE_DIR."services/stroitelno-montazhnye-raboty/gallery_project/vitrajnoe_osteklenie/" || $APPLICATION->GetCurPage(false) == SITE_DIR."services/stroitelno-montazhnye-raboty/gallery_project/ventiliruemi_fasad/" || $APPLICATION->GetCurPage(false) == SITE_DIR."services/stroitelno-montazhnye-raboty/gallery_project/peregorodki/" || $APPLICATION->GetCurPage(false) == SITE_DIR."services/stroitelno-montazhnye-raboty/gallery_project/vhodnie_gruppi/" || $APPLICATION->GetCurPage(false) == SITE_DIR."services/stroitelno-montazhnye-raboty/gallery_project/zenitnie_fonari/" || $APPLICATION->GetCurPage(false) == SITE_DIR."services/stroitelno-montazhnye-raboty/gallery_project/"){?> <!-- ������� ����� ����� -->
			<div style="background-color:#898989;width:100%;height:30px;margin-top: -40px;">
			</div>
			 <!-- /������� ����� ����� --> <?}?>
		</div>
		<div class="news_block_pd">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						���������
					</p>
				</div>
				<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"uslugi_shablon_menu_right2",
	Array(
		"ROOT_MENU_TYPE" => "section2",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array()
	)
);?>
						</div>
					</div>
				</div>
			</div>
			<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;">
				<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
					�����������
				</p>
			</div>
			<div style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">
				<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
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
	<div style="clear:both;">
	</div>
</div>
<script>

$('document').ready(function() {



	$(function () { 
    		$('.menu_uslugi_a2').each(function () {
        	var location = window.location.pathname;

				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				//alert (new_str);


        	var link = this.href; 					
				if(new_str == '/services/stroitelno-montazhnye-raboty/') {
            	$(this).addClass('active2');
        	}
    	});
    });




});

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>