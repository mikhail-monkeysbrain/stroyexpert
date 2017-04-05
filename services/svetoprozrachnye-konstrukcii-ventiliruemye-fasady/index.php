<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Услуга изготовления, поставки , монтажа светопрозрачных, витражных конструкций на алюминиевой системе, вентилируемых фасадов.");
$APPLICATION->SetPageProperty("keywords", "вентилируемые фасады, вентилируемые фасады Санкт Петербург, вентилируемые-фасады-Вологда, вентилируемый фасад, витражное остекление, монтаж светопрозрачных конструкций, витражных конструкций, изготовление светопрозрачных конструкций, перегородки Вологда, производство светопрозрачных конструкций, светопрозрачные входные группы, светопрозрачные фасады, светопрозрачные конструкции, светопрозрачные перегородки офисные");
$APPLICATION->SetPageProperty("title", "| Услуги | Светопрозрачные конструкции, вентилируемые фасады");
$APPLICATION->SetTitle("Светопрозрачные конструкции, вентилируемые фасады");
?>
<div class="project_wrap2" style="width:100%;background-color:#fff;padding-top: 144px;">





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


<div class="wrapper1" style="margin-top:0px;border-top: 1px solid #fff;">

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


<div class="line_zagran" style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>

			<div class="profil_d_block_copy" style="">
				<div class="otstup">
					<div class="profd"  style="margin-bottom:17px;background-color:#878787;"><p style="font-size:12px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">СВЕТОПРОЗРАЧНЫЕ КОНСТРУКЦИИ, ВЕНТИЛИРУЕМЫЕ ФАСАДЫ</p></div>


<?
if($_SERVER['REQUEST_URI']=='/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/'){
?>
					<div class="text_peredel" style="margin-right:20px;"  align="justify">
						<div style="margin-bottom:15px;">
							<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "page",
										"AREA_FILE_SUFFIX" => "zagolovok_index5",        // название включаемой области
										"EDIT_TEMPLATE" => ""
									)
							);?>
						</div>
						<div style="color:#898989;">
							<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "stroy_montaj_index",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/stroy_montaj_index2.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
						</div>
						<p style="color: #898989; font-size: 12px; text-align: justify;margin-bottom:15px">
							<a class="prosmotr_gal" href="/object/">Посмотреть галерею объектов</a>
						</p>
					</div>
<?}?>


<?
if($_SERVER['REQUEST_URI']!='/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/'){
$APPLICATION->IncludeComponent("bitrix:news", "stroy_montaj_raboti2", Array(
	"IBLOCK_TYPE" => "uslugi",	// Тип инфоблока
		"IBLOCK_ID" => "24",	// Инфоблок
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "N",	// Показывать фильтр
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SEF_FOLDER" => "/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/",	// Каталог ЧПУ (относительно корня сайта)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "SORT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "adress",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "koncepciya_proecta",
			2 => "konstructiv_zdania",
			3 => "foto_object",
			4 => "texniko",
			5 => "konstructiv_zdania",
			6 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DETAIL_PAGER_TITLE" => "",	// Название категорий
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Работы",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"SHOW_ORDER_LINK" => "Y",
		"SHOW_ORDER_TITLE" => "Хочу так же!",
		"CLASS" => "",
		"RESIZE_IMAGE_WIDTH" => "200",
		"RESIZE_IMAGE_HEIGHT" => "150",
		"MORE_PHOTO" => "PICTURES",
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"COMPONENT_TEMPLATE" => "stroy_montaj_raboti1",
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
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
			</div><!--otstup-->







			</div>








			<div class="news_block_pd">
				<div class="otstup">

					<div class="news_r" style="margin-bottom:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">КАТЕГОРИИ</p></div>
						<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
								<div class="left-menu">
									<?$APPLICATION->IncludeComponent(
										"bitrix:menu", 
										"uslugi_shablon_menu_right2", 
										array(
											"ROOT_MENU_TYPE" => "svetoprozrachnye_konstrukcii_ventiliruemye_fasady",
											"MAX_LEVEL" => "1",
											"CHILD_MENU_TYPE" => "svetoprozrachnye_konstrukcii_ventiliruemye_fasady",
											"USE_EXT" => "Y",
											"DELAY" => "N",
											"ALLOW_MULTI_SELECT" => "N",
											"MENU_CACHE_TYPE" => "N",
											"MENU_CACHE_TIME" => "3600",
											"MENU_CACHE_USE_GROUPS" => "Y",
											"MENU_CACHE_GET_VARS" => array(
											),
											"COMPONENT_TEMPLATE" => "uslugi_shablon_menu_right2"
										),
										false
									);?>
								</div>
							</div>
						</div>
					</div>



					<div class="otstup">
						<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">ПРЕЗЕНТАЦИИ</p></div>
	
							<div class="plashka_seraya" style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">
								<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
									<div class="buklet" style=" color: #898989;font-size: 12px;line-height: 1;text-align: justify;">
										<?$APPLICATION->IncludeComponent(
											"bitrix:main.include", 
											".default", 
											array(
												"AREA_FILE_SHOW" => "file",
												"AREA_FILE_SUFFIX" => "grey_banner_news2",
												"EDIT_TEMPLATE" => "",
												"PATH" => "/grey_banner_news1.php"
											),
											false
										);?>
									</div>
								</div>
							</div>
						</div>




					<div class="otstup">
						<div class="news_r" style="margin-top: 20px;margin-bottom:20px;background-color:#08c;">
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

			</div>
		<div style="clear:both;"></div>






			</div>
		</div>



<?
$nash_url = $_SERVER['REQUEST_URI'];
//$put1 = '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/';
$put2 = '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/vitrajnoe_osteklenie/';
$put3 = '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/ventiliruemi_fasad/';
$put4 = '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/ofisnie_peregorodki/';
$put5 = '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/vhodnie_gruppi/';
$put6 = '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/zenitnie_fonari/';


?>



<?if($nash_url == $put2||$nash_url == $put3||$nash_url == $put4||$nash_url == $put5||$nash_url == $put6){?>
	<style>
		@media(min-width:1700px){   /*было 1306px*/
			.wrapper1{
				max-width:1286px;
			}
			.profil_d_block_copy{
				width:76.4%;
				margin-left:-175px;
			}
			.news_block_pd{
				width:25.2%;/*23.4%*/
			}
			.new_class{
				display:inline-block;
				vertical-align:top;
			}
			.str_mont_rab{
				display:inline-block;
				vertical-align:top;
				max-width:326px;
			}
			.clear_display{
				display:none;
			}
			.obshi{
				margin-right:2px;
			}
			.profil_d_block_copy{
				margin-right:2px;
			}
			.obshi:nth-child(3n+3){
				margin-right:0px;
			}
			#bx_incl_area_2_2{
				display:inline-block;
				vertical-align:top;
				max-width:654px;
			}
			#bx_incl_area_2_3{
				display:inline-block;
				vertical-align:top;
				max-width:1266px;
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








<script>

$('document').ready(function() {
	/*$(function () { 
    		$('.menu_uslugi a').each(function () {
        	var location = window.location.href;
				//alert (location);
				var link = this.href; 					
				if((location == link) || (location == 'http://itcdevel-bitrix-46.tw1.ru/services/mnogokv_zhil_doma/')) {
            	$(this).addClass('active2');
        	}
    	});
});*/


	$(function () { 
    		$('.menu_uslugi_a2-2').each(function () {
        	var location = window.location.pathname;

				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/"+x1[2]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/') {
            	$(this).addClass('active2');
        	}
    	});
    });



});

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>