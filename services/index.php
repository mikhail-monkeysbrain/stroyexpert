<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "������ ��������������, ���������� ��������� ������������,������ ��������� �����������, ������ �������� �����������, ���������� �������");
$APPLICATION->SetPageProperty("title", "| ������ ");
$APPLICATION->SetPageProperty("description", "������ � ������� ������������ ��������������. ��������, ������������ , ������ ��������� � �������� ����������� �� ����������� �������");
$APPLICATION->SetTitle("������");
?>
<!-- ���� � ������� ������������ -->
<div style="min-height:245px;width:100%;">
	<div class="block_img_uslugi_index">
	</div>

	<div class="block_img_uslugi_index2">
		<div class="serv_block_icon_wrap">

			<a class="serv_block_ssilka" href="/services/kompleksnoe-proektirovanie/">
				<div class="serv_blocks">
					<span class="serv_wrap_img"><img src="/bitrix/images/uslugi_img1.png"></span>
				</div>
				<div class="serv_block_text"><span>����������� ��������������</span></div>
			</a>

			<a class="serv_block_ssilka" href="/services/ekspertiza-proektnoy-dokumentacii/">
				<div class="serv_blocks">
					<span class="serv_wrap_img"><img src="/img/uslugi_img_1new.png"></span>
				</div>
				<div class="serv_block_text"><span>���������� ���������<br>������������</span></div>
			</a>

			<a class="serv_block_ssilka" href="/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/">
				<div class="serv_blocks">
					<span class="serv_wrap_img"><img src="/bitrix/images/uslugi_img2.png"></span>
				</div>
				<div class="serv_block_text"><span>��������������� �����������<br>������������� ������</span></div>
			</a>

			<a class="serv_block_ssilka" href="/services/inzhenernye-sistemy/">
				<div class="serv_blocks">
					<span class="serv_wrap_img"><img src="/img/uslugi_img_2new.png"></span>
				</div>
				<div class="serv_block_text"><span>���������� �������</span></div>
			</a>

		</div>
	</div>

</div>
 <!-- /���� � ������� ������������ -->


<div style="clear:both;"></div>

<div class="top_block" style="padding-top:0;">
	 <?/*$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "services_menu",
						"EDIT_TEMPLATE" => "",
						"PATH" => "services/services_menu.php"
					),
					false
);*/?>
	<div style="clear:both;">
	</div>
	<div class="wrapper1" style="margin-top:0px;border-top: 1px solid #fff;">
		<div class="otstup">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
	"AREA_FILE_SHOW" => "file",	// ���������� ���������� �������
		"AREA_FILE_SUFFIX" => "number1",	// ������� ����� ����� ���������� �������
		"EDIT_TEMPLATE" => "",	// ������ ������� �� ���������
		"PATH" => "/index_number1.php"
	)
);?>
		</div>
		 <!--<div style="border-top:1px solid #ccc;width:500%;margin-top:30px;margin-left: -200%;"></div>-->
		<div class="profil_d_block_copy" style="margin-top:21px">
			<div class="otstup">
				<div class="profd" style="background-color:#0088CC;">
					<p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">
						������
					</p>
				</div>








				<div class="text_peredel" style="margin-right:20px;" align="justify">
					<div style="margin-bottom:13px;">
						 <?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
							"AREA_FILE_SHOW" => "page",	// ���������� ���������� �������
								"AREA_FILE_SUFFIX" => "zagolovok_index3",	// ������� ����� ����� ���������� �������
								"EDIT_TEMPLATE" => "",	// ������ ������� �� ���������
							)
						);?>
					</div>
					<div style="color:#898989;">
						 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
	"AREA_FILE_SHOW" => "file",	// ���������� ���������� �������
		"AREA_FILE_SUFFIX" => "uslugi_index",	// ������� ����� ����� ���������� �������
		"EDIT_TEMPLATE" => "",	// ������ ������� �� ���������
		"PATH" => "/uslugi_index.php"
	)
);?>
					</div>
 <br>
 <br>
 <br>
 <br>
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	array(
	"AREA_FILE_SHOW" => "file",	// ���������� ���������� �������
		"AREA_FILE_SUFFIX" => "banner_uslugi",	// ������� ����� ����� ���������� �������
		"EDIT_TEMPLATE" => "",	// ������ ������� �� ���������
		"PATH" => "/banner_uslugi.php"
	)
);?>
				</div>
			</div>
		</div>
		<div class="news_block_pd" style="margin-top:21px;">
			<div class="otstup">
				<div class="news_r" style="margin-bottom:20px;background-color:#08c;">
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
								array(
								"AREA_FILE_SHOW" => "file",	// ���������� ���������� �������
									"AREA_FILE_SUFFIX" => "services_ustoichivoe_razvitie",	// ������� ����� ����� ���������� �������
									"EDIT_TEMPLATE" => "",	// ������ ������� �� ���������
									"PATH" => "/include/services_ustoichivoe_razvitie.php"
								)
							);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="clear:both;">
	</div>
</div>
<div style="clear:both;">
</div>





















<!--<div style="margin-top:80px;"></div>--><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>