<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" ÓÏÔÎÂÍÒÌÓÂ ÔÓÂÍÚËÓ‚‡ÌËÂ");
?>


<div class="project_wrap2" style="width:100%;background-color:#fff;padding-top: 142px;">

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


<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>

			<div class="profil_d_block_copy" style="">
				<div class="otstup">
					<div class="profd"  style="margin-right:0px;margin-bottom:17px;background-color:#585858;"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;"> ŒÃœÀ≈ —ÕŒ≈ œ–Œ≈ “»–Œ¬¿Õ»≈</p></div>
						<div style="margin-right:20px;" align="justify">
							<div style="margin-bottom:15px;color:#43442; font-size:12px; text-transform:uppercase;">
								<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "page",
											"AREA_FILE_SUFFIX" => "zagolovok_index4",        // Ì‡Á‚‡ÌËÂ ‚ÍÎ˛˜‡ÂÏÓÈ Ó·Î‡ÒÚË
											"EDIT_TEMPLATE" => ""
										)
								);?>
							</div>
							<div>
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include", 
									".default", 
									array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "kompl_proekt_index",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/kompl_proekt_index.php"
									),
									false
								);?>
							</div>
						</div>
				</div>
			</div>

			<div class="news_block_pd">
				<div class="otstup">

					<div class="news_r" style="margin-bottom:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;"> ¿“≈√Œ–»»</p></div>
						<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
								<div class="left-menu">
									<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"uslugi_shablon_menu_right", 
	array(
		"ROOT_MENU_TYPE" => "section",
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_THEME" => "site"
	),
	false
);?>
								</div>
							</div>
						</div>
					</div>




					<div class="news_r" style="margin-bottom:20px;margin-top:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">œ–≈«≈Õ“¿÷»»</p></div>

						<div style="width:300%;background-color:#EBEDEC; box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px;">
								<div class="buklet" style=" color: #898989;font-size: 11px;line-height: 1;text-align: justify;">
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
});

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

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>