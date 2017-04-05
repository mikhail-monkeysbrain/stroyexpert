<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "комплексное проектирование объектов,инженерное проектирование, комплексное инженерное проектирование, комплексное проектирование,комплексное проектирование жилых зданий, комплексное проектирование зданий, комплексное проектирование инженерных систем, комплексное проектирование объекта, комплексное проектирование объектов, комплексное проектирование складских комплексов и центров, проектирование административного здания, проектирование вологда, проектирование жилой застройки, ктирование зданий | сооружений, проектирование инженерных систем, проектирование многоквартирных домов, проектирование офисных зданий, проектирование производственных зданий,проектирование систем кондиционирования, проектирование складских комплексов, проектирование торгово развлекательного центра, услугу, как комплексное проектирование домов");
$APPLICATION->SetPageProperty("description", "Услуги по архитектурно - строительному проектированию зданий и сооружений,");
$APPLICATION->SetPageProperty("title", "| Услуги | Комплексное проектирование");
$APPLICATION->SetTitle("Комплексное проектирование");
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
						 КОМПЛЕКСНОЕ ПРОЕКТИРОВАНИЕ
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
	"IBLOCK_TYPE" => "uslugi",	// Тип инфоблока
		"IBLOCK_ID" => "20",	// Инфоблок
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
		"SEF_FOLDER" => "/services/kompleksnoe-proektirovanie/",	// Каталог ЧПУ (относительно корня сайта)
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
			0 => "adress",
			1 => "",
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
			0 => "koncepciya_proecta",
			1 => "konstructiv_zdania",
			2 => "foto_object",
			3 => "texniko",
			4 => "sss",
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
		"COMPONENT_TEMPLATE" => "my_shablon4",
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
						 ПРЕЗЕНТАЦИИ
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
						 СЕРТИФИКАТЫ
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
						 УСТОЙЧИВОЕ РАЗВИТИЕ
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