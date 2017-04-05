<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>


	<div style="width:100%;background-color:#fff;">
		<div class="wrapper1" >


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

			<div style="clear:both;"></div>






			<div class="profil_d_block_copy" style="">
				<div class="otstup">
					<div class="profd"  style="margin-right:0px;margin-bottom:20px;"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">НОВОСТИ КОМПАНИИ</p></div>
						<?$APPLICATION->IncludeComponent(
						"bitrix:news", 
						"my_shablon3", 
						array(
							"IBLOCK_TYPE" => "news",
							"IBLOCK_ID" => "1",
							"NEWS_COUNT" => "5",
							"USE_SEARCH" => "N",
							"USE_RSS" => "N",
							"NUM_NEWS" => "20",
							"NUM_DAYS" => "30",
							"YANDEX" => "N",
							"USE_RATING" => "N",
							"USE_CATEGORIES" => "N",
							"USE_FILTER" => "N",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"CHECK_DATES" => "Y",
							"SEF_MODE" => "Y",
							"SEF_FOLDER" => "/news/",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_SHADOW" => "N",
							"AJAX_OPTION_JUMP" => "Y",
							"AJAX_OPTION_STYLE" => "Y",
							"AJAX_OPTION_HISTORY" => "Y",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "36000000",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"DISPLAY_PANEL" => "N",
							"SET_TITLE" => "Y",
							"SET_STATUS_404" => "Y",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"USE_PERMISSIONS" => "N",
							"PREVIEW_TRUNCATE_LEN" => "",
							"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
							"LIST_FIELD_CODE" => array(
								0 => "",
								1 => "",
							),
							"LIST_PROPERTY_CODE" => array(
								0 => "",
								1 => "",
							),
							"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
							"DISPLAY_NAME" => "Y",
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
								1 => "foto",
								2 => "",
							),
							"DETAIL_DISPLAY_TOP_PAGER" => "N",
							"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
							"DETAIL_PAGER_TITLE" => "Страница",
							"DETAIL_PAGER_TEMPLATE" => "arrows",
							"DETAIL_PAGER_SHOW_ALL" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => "",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
							"PAGER_SHOW_ALL" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"ADD_ELEMENT_CHAIN" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"USE_SHARE" => "N",
							"SEF_URL_TEMPLATES" => array(
								"news" => "",
								"section" => "",
								"detail" => "#ELEMENT_ID#/",
							)
						),
						false
					);?>
				</div>

				<?if ($APPLICATION->GetCurPage(false) == SITE_DIR."news/"){?> 
				<!-- толстая линия снизу -->
				<div style="background-color:#585858;width:100%;height:30px;margin-top: -41px;"></div>
				<!-- /толстая линия снизу -->
				<?}?>
			</div>






<div class="news_block_pd">
				<div class="otstup">
					<div class="news_r" style="margin-bottom:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">УСТОЙЧИВОЕ РАЗВИТИЕ</p></div>

	
	
						<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:17px;">
								<div style="font-size:11px;line-height:1;color:#898989;text-align:justify;">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "grey_banner_news",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/grey_banner_news.php"
										),
										false
									);?>
								</div>
							</div>
						</div>
	
					<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">ПРЕЗЕНТАЦИИ</p></div>

						<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:17px;">
								<div style="font-size:11px;line-height:1;color:#898989;text-align:justify;">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "grey_banner_news2",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/grey_banner_news2.php"
										),
										false
									);?>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>



<div style="clear:both;"></div>

</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>