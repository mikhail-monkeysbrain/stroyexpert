<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" ÓÏÔÎÂÍÒÌÓÂ ÔÓÂÍÚËÓ‚‡ÌËÂ");
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
					<div class="profd"  style="margin-right:0px;margin-bottom:20px;background-color:#878787;"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">—“–Œ»“≈À‹ÕŒ ÃŒÕ“¿∆Õ€≈ –¿¡Œ“€</p></div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						".default", 
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "stroy_montaj_index",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/stroy_montaj_index.php"
						),
						false
					);?>

				</div>
			</div>

			<div class="news_block_pd">
				<div class="otstup">

					<div class="news_r" style="margin-bottom:30px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;"> ¿“≈√Œ–»»</p></div>
						<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
								<div class="left-menu">
									<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"uslugi_shablon_menu_right2", 
	array(
		"ROOT_MENU_TYPE" => "section2",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		)
	),
	false
);?>
								</div>
							</div>
						</div>
					</div>




					<div class="news_r" style="margin-bottom:30px;margin-top:30px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">œ–≈«≈Õ“¿÷»»</p></div>

						<div style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">
							<div style="width:27%;min-width:250px;background-color:#EBEDEC;padding:30px 10px 30px;">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include", 
									".default", 
									array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "grey_banner_news2",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/grey_banner_news.php"
									),
									false
								);?>
							</div>
						</div>
					</div>


		</div>
		<div style="clear:both;"></div>






</div>
</div>
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
    		$('.menu_uslugi_a2').each(function () {
        	var location = window.location.pathname;

				var x1 = location.split("/");
				var new_str = x1[0]+"/"+x1[1]+"/";
				//alert (new_str);


        	var link = this.href; 					
        	if(new_str == '/services2/') {
            	$(this).addClass('active2');
        	}
    	});
    });



});

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>