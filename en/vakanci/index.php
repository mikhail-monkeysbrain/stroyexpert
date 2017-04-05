<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?><br>



<div class="vakanc" style="">
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
		<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;">
		</div>
		<div class="news_block_pd">
			<div class="otstup">
				<div class="news_r" style="margin-left:-200%;margin-bottom:20px;background-color:#878787;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 КАРЬЕРА
					</p>
				</div>
				<div>
					 <?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "vakanci_img",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/vakanci_img.php"
						)
					);?>
				</div>
				<div class="news_r" style="margin-left:-200%;margin-bottom:20px;margin-top:20px;background-color:#878787;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 ВАКАНСИИ
					</p>
				</div>
				<div>
					 <?$APPLICATION->IncludeComponent(
						"bitrix:news.list", 
						"new_shablon3", 
						array(
							"IBLOCK_TYPE" => "vacancies",
							"IBLOCK_ID" => "4",
							"NEWS_COUNT" => "2",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
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
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "Y",
							"SET_BROWSER_TITLE" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_META_DESCRIPTION" => "Y",
							"SET_STATUS_404" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "/vakanci/",
							"INCLUDE_SUBSECTIONS" => "Y",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"PAGER_TEMPLATE" => ".default",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"AJAX_OPTION_ADDITIONAL" => ""
						),
						false
					);?>
				</div>
			</div>
		</div>
		<div class="profil_d_block_copy2">
			<div class="otstup">
				<div class="text_vakans" style="">
					<div style="margin-bottom:15px;color:#43442; font-size:16px;margin-left:20px;">
						<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "page",
									"AREA_FILE_SUFFIX" => "zagolovok_index7",        // название включаемой области
									"EDIT_TEMPLATE" => ""
								)
						);?>
					</div>
					<div style="color:#898989; font-size:13px;margin-left:20px;">
						<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "vakanci_index",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/vakanci_index.php"
								)
						);?>
					</div>
				</div>



				<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#878787;">
					<p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">
						 ФОРМА СВЯЗИ
					</p>
				</div>

				<div class="vak_block_form" style="">
					<div class="vak_block_text_form" style="">
						<p style="padding: 36px 0 36px 15px;font-size:14px;color:#fff;font-style:italic;border-top:1px solid #fff;border-bottom:1px solid #fff;">Если у вас имеется готовое резюме, Вы можете отправить его работодателю, заполнив соответствующую форму:</p>
					</div>
					<div class="block_form" style="">
						<form style="padding:0 10px;padding-right:17px;" method="post" action="add.php" class='product_add' enctype="multipart/form-data">
							<input class="inp1" style="margin-bottom:2px;font-size:12px" type="text" placeholder="Ваше имя" name="user_name" value=""><br>
							<input class="inp1" style="margin-bottom:2px;font-size:12px" type="text" placeholder="e-mail" name="user_email" value=""><br>
							<input class="inp1" style="margin-bottom:2px;font-size:12px" type="text" placeholder="Сообщение" name="user_phone" value=""><br>
							<!--<p style="color:#fff;margin-bottom:10px;">Прикрепить резюме--><input class="inp1" type="file" name="file" value="Прикрепить резюме"><!--</p>-->
							<div align="center" style="margin-top:15px;">
								<input class="inp11" type="submit" value="ОТПРАВИТЬ" style="padding-right:20px;border-right:1px solid #fff;font-size:12px;">
								<input class="clear_but inp11" type="button" value="ОЧИСТИТЬ" style="padding-left:20px;font-size:12px;">
							</div>
						</form>
					</div>
					<div style="clear:both;"></div>
				</div>




			</div>
		</div>

		<div style="clear:both;"></div>


		<script>
			//$('.clear_but').click(function(){
			//$('.inp1').attr('value','');
			//})
$('.clear_but').click(function(){
			$('.product_add')[0].reset();
})





	$('input:file').styler({
        filePlaceholder:'Прикрепить резюме',
		fileBrowse:'Выберите файл',
    });
	</script>



	</div>
</div>
<br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>



<script type='text/javascript'>


</script>