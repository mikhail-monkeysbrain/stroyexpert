<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "����������� �������������� ��������,���������� ��������������,������������ ���������� ��������������,������������ ��������������,����������� �������������� ����� ������,������������ �������������� ������,������������ �������������� ���������� ������,������������ �������������� �������,������������ �������������� ��������,������������ �������������� ��������� ���������� � �������, �������������� ����������������� ������,��������������� �������,��������������� ����� ���������,����������� ������ | ����������, �������������� ���������� ������, �������������� ��������������� �����,��������������� ������� ������, �������������� ���������������� ������,�������������� ������ �����������������,��������������� ��������� ����������, �������������� ������� ���������������� ������, ������, ��� ����������� �������������� �����");
$APPLICATION->SetPageProperty("description", "������ �� ������������ - ������������� �������������� ������ � ����������,");
$APPLICATION->SetPageProperty("title", "| ������ | ����������� ��������������");
$APPLICATION->SetTitle("����������� ��������������");
?><div class="project_wrap2" style="width:100%;background-color:#fff;padding-top: 144px;">
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
				<div class="profd" style="margin-bottom:17px;background-color:#585858;">
					<p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
						 ����������� ��������������
					</p>
				</div>
				 <?
if($_SERVER['REQUEST_URI']=='/services/kompleksnoe-proektirovanie/inzhenernoe-proektirovanie/'){
?>
				<div class="block_inj_soor">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "number1",
		"EDIT_TEMPLATE" => "/include",
		"PATH" => "/include/injenernoe_proektirovanie.php"
	)
);?>
				</div>
				 <?}?> <?
if($_SERVER['REQUEST_URI']=='/services/kompleksnoe-proektirovanie/'){
?>
				<div class="text_peredel" style="margin-right:20px;" align="justify">
					<div style="margin-bottom:15px;color:#43442; font-size:12px;">
						 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "zagolovok_index4",
		"EDIT_TEMPLATE" => ""
	)
);?>
					</div>
					<div>
						 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "kompl_proekt_index",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/kompl_proekt_index.php"
	)
);?>
					</div>
				</div>
				 <?}?> <?
if($_SERVER['REQUEST_URI']!='/services/kompleksnoe-proektirovanie/'){
	$APPLICATION->IncludeComponent("bitrix:news", "my_shablon5", Array(
	"IBLOCK_TYPE" => "uslugi",	// ��� ���������
		"IBLOCK_ID" => "20",	// ��������
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"USE_SEARCH" => "N",	// ��������� �����
		"USE_RSS" => "N",	// ��������� RSS
		"USE_RATING" => "N",	// ��������� �����������
		"USE_CATEGORIES" => "N",	// �������� ��������� �� ����
		"USE_FILTER" => "N",	// ���������� ������
		"SORT_BY1" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "",	// ����������� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER2" => "",	// ����������� ��� ������ ���������� ��������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"SEF_MODE" => "Y",	// �������� ��������� ���
		"SEF_FOLDER" => "/services/kompleksnoe-proektirovanie/",	// ������� ��� (������������ ����� �����)
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"SET_STATUS_404" => "Y",	// ������������� ������ 404
		"SET_TITLE" => "Y",	// ������������� ��������� ��������
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
		"ADD_ELEMENT_CHAIN" => "N",	// �������� �������� �������� � ������� ���������
		"USE_PERMISSIONS" => "N",	// ������������ �������������� ����������� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",	// ������ ������ ����
		"LIST_FIELD_CODE" => array(	// ����
			0 => "SORT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// ��������
			0 => "adress",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"DISPLAY_NAME" => "N",	// �������� �������� ��������
		"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
		"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
		"BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",	// ������ ������ ����
		"DETAIL_FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(	// ��������
			0 => "koncepciya_proecta",
			1 => "konstructiv_zdania",
			2 => "foto_object",
			3 => "texniko",
			4 => "sss",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DETAIL_PAGER_TITLE" => "",	// �������� ���������
		"DETAIL_PAGER_TEMPLATE" => "",	// �������� �������
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
		"PAGER_TEMPLATE" => "",	// ������ ������������ ���������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"PAGER_TITLE" => "������",	// �������� ���������
		"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
		"DISPLAY_DATE" => "N",	// �������� ���� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"USE_SHARE" => "N",	// ���������� ������ ���. ��������
		"SHOW_ORDER_LINK" => "Y",
		"SHOW_ORDER_TITLE" => "���� ��� ��!",
		"CLASS" => "",
		"RESIZE_IMAGE_WIDTH" => "200",
		"RESIZE_IMAGE_HEIGHT" => "150",
		"MORE_PHOTO" => "PICTURES",
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"COMPONENT_TEMPLATE" => "my_shablon4",
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"DETAIL_SET_CANONICAL_URL" => "N",	// ������������� ������������ URL
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);
};
?>
			</div>
		</div>
		<div class="news_block_pd">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 ���������
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"uslugi_shablon_menu_right",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "kompleksnoe_proektirovanie",
		"COMPONENT_TEMPLATE" => "uslugi_shablon_menu_right",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "kompleksnoe_proektirovanie",
		"USE_EXT" => "Y"
	)
);?>
						</div>
					</div>
				</div>
			</div>
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 �����������
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
						<div class="buklet" style=" color: #898989;font-size: 12px;line-height: 1;text-align: justify;">
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
			</div>
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 �����������
					</p>
				</div>
				<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">
					<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
						<div class="buklet" style=" color: #898989;font-size: 12px;line-height: 1;text-align: justify;">
							 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "CRO",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/cro.php"
	)
);?>
						</div>
					</div>
				</div>
			</div>
			 <!--<div class="news_block_pd" style="margin-top:21px;">-->
			<div class="otstup">
				<div class="news_r" style="margin-top:20px;margin-bottom:20px;background-color:#08c;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 ���������� ��������
					</p>
				</div>
				<div class="plashka_seraya sust_development" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
					<div class="plashka_seraya_vn" style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
						<div class="left-menu percent_200">
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
			</div>
			 <!--</div>-->
		</div>
	</div>
	<div style="clear:both;">
	</div>
</div>
<?
	//echo "<pre>";
	//print_r($_SERVER);
	//echo "<pre>";

?>
<script>



	$(function () { 
    		$('.menu_uslugi_a1').each(function () {
        	var location = window.location.pathname;

				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/services/') {
            	$(this).addClass('active2');
        	}
    	});
    });

</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>