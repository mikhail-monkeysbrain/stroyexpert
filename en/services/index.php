<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>


<div class="top_block" style="">

		<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "services_menu",
						"EDIT_TEMPLATE" => "",
						"PATH" => "services/services_menu.php"
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
					<div class="profd"  style="margin-right:0px;margin-bottom:16px;background-color:#0088CC;"><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">УСЛУГИ</p></div>
						<div style="margin-right:20px;" align="justify">
							<div style="margin-bottom:13px;">
								<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"AREA_FILE_SHOW" => "page",
											"AREA_FILE_SUFFIX" => "zagolovok_index3",        // название включаемой области
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
										"AREA_FILE_SUFFIX" => "uslugi_index",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/uslugi_index.php"
									),
									false
								);?>
							</div>
						</div>

				</div>
			</div>

			<div class="news_block_pd">
				<div class="otstup">
					<div class="news_r" style="margin-bottom:20px;background-color:#08c;"><p style="font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">УСТОЙЧИВОЕ РАЗВИТИЕ</p></div>
						<div style="width:300%;background-color:#EBEDEC;box-shadow: 8px 2px 10px #424242;">
							<div style="width:29.2%;min-width:250px;background-color:#EBEDEC;padding:20px 20px 20px;">
								<div class="left-menu">
									<?$APPLICATION->IncludeComponent(
											"bitrix:main.include", 
											".default", 
											array(
												"AREA_FILE_SHOW" => "file",
												"AREA_FILE_SUFFIX" => "uslugi_right",
												"EDIT_TEMPLATE" => "",
												"PATH" => "/uslugi_right.php"
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




<br><br><br><br><br>
<!-- блок с фоновым изображением -->
<div style="min-height:245px;width:100%;">
	<div class="block_img_uslugi_index">

	</div>
	<div class="block_img_uslugi_index2" style="width:100%;background-color: rgba(255,255,255, 0.7);">
			<div style="display: table;height:100%;max-width:980px;padding:0 10px;margin-left:auto;margin-right:auto;">
				<div style="vertical-align: middle;display: table-cell;">
	
					<div style="max-width: 770px;margin-left:auto;margin-right:auto;">
	<!-- блоки с картинками -->
						<a href="/services/kompleksnoe-proektirovanie/">
							<div class="block_uslugi_img1" style="">
								<div class="uslugi_img1" style="cursor:pointer;">
									<span></span>
								</div>
								<p style="color:#fff;background-color:#585858;margin-top:20px;text-align:center;font-size:12px;line-height: 1.2;padding: 8px 0;">
									КОМПЛЕКСНОЕ<br> ПРОЕКТИРОВАНИЕ
								</p>
							</div>
						</a>
						<a href="/services/stroitelno-montazhnye-raboty/">
							<div class="block_uslugi_img2" style="">
								<div class="uslugi_img2" style="cursor:pointer;">
									<span></span>
								</div>
								<p style="color:#fff;background-color:#898989;margin-top:20px;text-align:center;font-size:12px;line-height: 1.2;padding: 8px 0;">
									СТРОИТЕЛЬНО-МОНТАЖНЫЕ<br> РАБОТЫ
								</p>
							</div>
						</a>
						<a href="/services/slujba_gen_podrydchika/">
							<div class="block_uslugi_img3" style="">
								<div class="uslugi_img3" style="cursor:pointer;">
									<span></span>
								</div>
								<p style="color:#fff;background-color:#0994DC;margin-top:20px;text-align:center;font-size:12px;line-height: 1.2;padding: 8px 0;">
									СЛУЖБА ГЕНЕРАЛЬНОГО<br> ПОДРЯДЧИКА
								</p>
							</div>
						</a>
	<!-- /блоки с картинками -->
					</div>
	
				</div>
			</div>
		</div>
</div>
<!-- /блок с фоновым изображением -->
<div style="clear:both;"></div>



</div>


			<div style="clear:both;"></div>






<div style="margin-top:80px;"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>