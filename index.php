<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "stroyexpert.pro,stroyexpert,������������� ��������������,����������� ��������������,�������������� ������,��������������,������ �������� ������������� �������,������ ������������� �������,������ ��������������� �����������,������������ ��������������� ����������� �����������, ����������� �����������,����������� ���������");
$APPLICATION->SetPageProperty("keywords", "stroyexpert,stroyexpert.pro,stroyexpert.ru,����������� �����������,������������� ������,������������� ������ �������,���������� �������,���������� ������� ������,����������� ��������������,����������� �������������� ������,����������� �������������� ������ � ����������,����������� �������������� ��������� ���������� � �������,�������� ������������� �����,������� �����������,��������������,�������������� ��������������� ����� �����,�������������� ��������,�������������� ���������������� ������,�������������� ��������� ����������,�������������� �������� �������,��������������� �����������,��������������� ����������� �������,��������������� ����������� �������,��������������� �����������,���������� ��������� ������������,��������� ���������������� ������,��������������� ���������� ���������,��������������� ������������ ������������,��������������� ������ ���������,��������������� �������� ������,��������������� ���������� �����,��������������� �������� ���������� �����,��������������� ����,�2b7f0ef45bc3f0215b8a");
$APPLICATION->SetPageProperty("description", "����������� �������������� ������ � ����������.�������� � ������ ��������������� �����������, ������������� �������, ���������� ������������. �������� stroyexpert.pro");
$APPLICATION->SetPageProperty("title", "stroyexpert.pro");
$APPLICATION->SetTitle("stroyexpert.pro");
?>








<div class="block_slide">
	<div  style="width:100%;margin:0px auto; border:0px solid red;">

		<div class="slider" style="position:relative;z-index:993">
			<ul id="slider" style="margin-left:0px;">
				<?
				
				CModule::IncludeModule("iblock");//������������ ������ � ���������
				//$arOrder = Array("SORT"=>"sort");
				$arSelect = Array(); 
				$arFilter = Array("IBLOCK_ID"=>17, "ACTIVE"=>"Y");                                  // 10 - ��� ID ��������� �� �������� ����� �������� �������
				$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect); 

				

				while($ob = $res->GetNextElement()) 
				 {
					$arFields = $ob->GetFields();            // ������ ��������� ��� �������
					$arProperties = $ob->GetProperties();      // ������ �� ���������� ���������

				
					 //echo "<pre>";                 // ������������� ������ � ����� (����� �������)
					 //print_r($res);
					 //echo "<pre>";
				?>
				<li>
					<div class="parallax" style="position:relative"><img src="<?=CFile::GetPath($arFields["DETAIL_PICTURE"])?>" alt=""  /></div>

					<div class="harakteristiki fadeIn wow" data-wow-duration="2s"  data-wow-delay="1s" >
						<div style="position:relative;z-index:9999;padding:10px 10px 10px 15px;">

							<br/>
							<p class="slide_opisanie_4">������� - �������������<br/> ����������:</p>
							<br/>
							<div class="slide_opisanie_5">
														<p style="margin:0;float:left;">
															��� ������������:<br/>
															������� ���������� �������:<br/>
															GBA:<br/>
															GLA:<br/>
															���������:<br/>
															�������:
														</p>
														<p style="margin:0 0 0 30px;float:left;">
															������������<br/>
															1 089 ��. �<br/>
															2 662, 70 ��. �<br/>
															2 328, 10 ��. �<br/>
															2 �����<br/>
															15 �/�
														</p>
								<div style="clear:both"></div>
							</div>
							<br/>
							<p class="slide_opisanie_4 polosa" style="border-top: 1px solid #fff;margin-top:10px;padding-top: 30px;width: 340px;">�������������� �����:</p>
							<br/>
							<p class="slide_opisanie_5">�������������  ����� � �������� ������</p>
						</div>
					</div>

					<div class="slide_z2">
						<div class="slide_z1">
							<div class="slide_opisanie_block" style="max-width:980px;margin-left:auto;margin-right:auto;">
								<p class="slide_opisanie_1"><?=$arFields['NAME'];?></p>
								<p class="slide_opisanie_2"><?=$arProperties['adress']['VALUE']?></p>
								<a class="slide_opisanie_3" href="<?=$arProperties['ssilka']['VALUE']?>">���������� ������</a>
							</div>
						</div>
					</div>
				</li>
				<?
				}
				?>
			</ul>
       </div>
	</div>
	<div class="slide_z3"></div>

</div>

<script type="text/javascript">
		$(document).ready(function(){
    		$('#slider').bxSlider({
				 mode: 'fade',
				 speed: 1000,
				 slideMargin: 0,
				 startSlide: 0,
				 randomStart: false,
				 captions: false,
				 ticker: false,
				 tickerHover: false,
				 adaptiveHeight: false,
				 adaptiveHeightSpeed: 500,
				 responsive: true,

				 // PAGER
				 pager: true,
				 pagerType: 'full',
				 pagerShortSeparator: ' / ',

				 // CONTROLS
				 controls: true,

				 // AUTO
				 auto: true,
				 pause: 5000,

				 // CAROUSEL
				 minSlides: 1,
				 maxSlides: 1,
				 slideWidth: 0
			});
		});
</script>
<script type="text/javascript">
			$(document).ready(function(){
				var $ad = parseInt( $(window).width());
				//alert($ad);
				if($ad > 800){
								$(window).scroll(function(e){
									parallax();
								});
				}
				function parallax(){
					var scrolled = $(window).scrollTop();
					$('.parallax').css('top',(scrolled*1)+'px');
				}

			});
</script>




	<div style="width:100%;background-color:#fff;">
		<div class="wrapper1" >
			<div class="otstup">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "number1",        // �������� ���������� �������
						"EDIT_TEMPLATE" => ""
					)
				);?>
			</div>







			<div style="clear:both;"></div>

			<!--<div  style="background:url(../bitrix/images/line.jpg)repeat-x;width:100%;height:1px;margin-bottom:25px;margin-top:20px;"></div>-->



<!--
<div class="gray_block1">
	<div class="gray_block2">
		<br/><br/>
		<div class="arh_resh">
			<div class="black_banner_p1">
				<?/*$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "black_banner_index",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/black_banner_index.php"
					),
					false
				);?>
			</div>
			<div class="black_banner_p2">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "black_banner_index_text_obl",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/black_banner_index_text_obl.php"
					),
					false
				);*/?>
			</div>
			<div style="clear:both;"></div>
			<br/>
	</div>
	</div>
</div>
-->





<div class="wrap_new_grey_block">
	<div class="wngb_wrap_blocks">

		<div class="wngb_block responsive_none">
			<p class="wngb_zagl">� ��������</p>
			<div class="wngb_content">
				<p class="wngb_text">
					<span style="font: 14px Century Gothic,sans-serif;">stroyexpert.</span><span style="color:#008DD2;font: 14px Century Gothic,sans-serif;">pro</span> ���������� � 2013 �. ��������� �������� - ���������������� ������� 
					������������ � ����������� ������ ������ � ������� ���������, ������������ � ������������� ��������� 
					������������ ������.
					����������� ��������  <span style="font: 14px Century Gothic,sans-serif;">stroyexpert.</span><span style="color:#008DD2;font: 14px Century Gothic,sans-serif;">pro</span> - ������������ ������������� ��������, ������������ �������������, 
					�������� - ��������������, ����������� - ���������, �������� - ��������� - �������� ���������� ������ 
					� ������� �������������� � ������������� �������� ������������ � ����� ������������. 
				</p>
				<div class="wngb_wrap_a">
					<a href="/company/">������ �����</a>
				</div>
			</div>
			<div class="wngb_content">
				<p class="wngb_zagl2">��������</p>
				<p class="wngb_text">
					��������� ����������� ������� - ����� ����������� � �������� ������ �������� � �����. 
					���������� ������������ ������ � ����� �������� - ������� ���� � ������� �����������, 
					�������������� � �������������. �������������� �� ����� ���� ���������� ��������� ����������� ���� 
					� ������ ������������ stroyexpert.pro � ��������� �������� ������������� �������� �� ������������ ������. 

				</p>
				<div class="wngb_wrap_a">
					<a href="/vakanci/">������ �����</a>
				</div>
			</div>
		</div>


		<div class="wngb_block">
			<div class="wngb_line"></div>
			<p class="wngb_zagl">���������</p>
			<div class="wngb_content">
				<p class="wngb_zagl2"><a href="/services/kompleksnoe-proektirovanie/">����������� ��������������</a></p>
				<p class="wngb_zagl3">����������� <span>�������������</span> �������</p>
				<a href="/project/"><div class="wngb_img1"></div></a>
				<div class="wngb_wrap_a">
					<a href="/project/">�������� ������� ��������</a>
				</div>
			</div>
			<div class="wngb_content">
				<p class="wngb_zagl2"><a href="/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/">������������� ������. ��������������� �����������</a></p>
				<p class="wngb_zagl3">����������� <span>��������</span> �������</p>
				<a href="/object/"><div class="wngb_img2"></div></a>
				<div class="wngb_wrap_a">
					<a href="/object/">�������� ������� ��������</a>
				</div>
			</div>
			<div class="wngb_content">
				<p class="wngb_zagl2"><a href="/services/inzhenernye-sistemy/">���������� �������</a></p>
				<p class="wngb_zagl3">����������� <span>����������</span> �������</p>
				<a href="/services/inzhenernye-sistemy/"><div class="wngb_img3"></div></a>
				<div class="wngb_wrap_a">
					<a href="/services/inzhenernye-sistemy/">���������</a>
				</div>
			</div>
		</div>

		<div class="wngb_block">
			<p class="wngb_zagl">������</p>
			<div class="wngb_content">
				<ul class="wngb_ul">
					<li><a href="/services/kompleksnoe-proektirovanie/proektirovanie-mnogokvartirnih-domov/">�������������� ��������������� ����� �����</a></li>
					<li><a href="/services/kompleksnoe-proektirovanie/proektirovanie-torgovyh-centrov/">�������������� �������� ������� (��, ���, ��, ���)</a></li>
					<li><a href="/services/kompleksnoe-proektirovanie/proektirovanie-mnogofunkcionalnyh-kompleksov/">�������������� ������������������� ����������</a></li>
					<li><a href="/services/kompleksnoe-proektirovanie/proektirovanie-skladov/">�������������� ��������� ����������,<br> ���������������� ������ � ����������</a></li>
					<li><a href="/services/kompleksnoe-proektirovanie/inzhenernoe-proektirovanie/">���������� ��������������</a></li>
					<li><a href="/services/kompleksnoe-proektirovanie/eskiz-zastroyki-territorii/">����� ��������� ����������</a></li>
					<li><a href="/services/ekspertiza-proektnoy-dokumentacii/">���������� ��������� ������������</a></li>
				</ul>
			</div>
			<div class="wngb_content">
				<ul class="wngb_ul">
					<li><a href="/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/vitrajnoe-osteklenie/">��������� ����������</a></li>
					<li><a href="/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/ventiliruemye-fasady/">������������� ������</a></li>
						<li><a href="/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/ofisniye-peregorodki/">������� �����������</a></li>
						<li><a href="/services/svetoprozrachnye-konstrukcii-ventiliruemye-fasady/vhodnye-gruppy/">������� ������</a></li>
				</ul>
			</div>
			<div class="wngb_content">
				<ul class="wngb_ul">
					<li><a href="/services/inzhenernye-sistemy/">
						���������, ����������, �����������������,<br> �����������, �������������</a></li>
				</ul>
			</div>
		</div>

	</div>
</div>

















<!--
<div class="blocks_vspl1">
	<div class="blocks_vspl2" style="">
			<div class="b1 fadeInUp wow" data-wow-duration="1s" data-wow-delay="0s">
				<a href="/company/" class="b1_img"><img src="/bitrix/images/f_1_1.jpg" alt="" /></a>
				<div class="b1_text" style="padding:10px 10px 10px 10px;">
					<a href="/company/" class="sil">� ��������</a>
					<div style="height: 54px;overflow: hidden;margin-bottom: 9px;">
					<?/*$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "b1_obl",        // �������� ���������� �������
							"EDIT_TEMPLATE" => ""
						)
						);?>
					</div>
				</div>
			</div>

			<div class="b2 fadeInUp wow" data-wow-duration="1s" data-wow-delay="0.5s">
				<a href="/services/slujba_gen_podrydchika/" class="b1_img"><img src="/bitrix/images/f_2_1.jpg" alt="" /></a>
				<div class="b2_text" style="padding:10px 10px 10px 10px;">
					<a href="/services/slujba_gen_podrydchika/" class="sil">������ ������������ ����������</a>
					<div style="height: 54px;overflow: hidden;margin-bottom: 9px;">
						<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "b2_obl",        // �������� ���������� �������
							"EDIT_TEMPLATE" => ""
						)
						);?>
					</div>
				</div>
			</div>

			<div class="b3 fadeInUp wow" data-wow-duration="1s" data-wow-delay="1s">
				<a href="/services/kompleksnoe-proektirovanie/" class="b1_img"><img src="/bitrix/images/f_3_1.jpg" alt="" /></a>
				<div class="b3_text" style="padding:10px 10px 10px 10px;">
					<a href="/services/kompleksnoe-proektirovanie/" class="sil">����������� ��������������</a>
					<div style="height: 54px;overflow: hidden;margin-bottom: 9px;">
						<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "b3_obl",        // �������� ���������� �������
							"EDIT_TEMPLATE" => ""
						)
						);?>
					</div>
				</div>
			</div>

			<div style="clear:both;"></div>

			<div style="margin-top:35px;">
				<div class="b4 fadeInUp wow" data-wow-duration="1s" data-wow-delay="1.5s">
					<a href="/object/vitrajnoe_osteklenie/" class="b1_img"><img src="/bitrix/images/f_4_1.jpg" alt="" /></a>
					<div class="b4_text" style="padding:10px 10px 10px 10px;">
						<a href="/object/vitrajnoe_osteklenie/" class="sil">��������������� �����������</a>
						<div style="height: 54px;overflow: hidden;margin-bottom: 9px;">
							<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "page",
								"AREA_FILE_SUFFIX" => "b4_obl",        // �������� ���������� �������
								"EDIT_TEMPLATE" => ""
							)
							);?>
						</div>
					</div>
				</div>

				<div class="b5 fadeInUp wow" data-wow-duration="1s" data-wow-delay="2s">
					<a href="/object/ventiliruemi_fasad/" class="b1_img"><img src="/bitrix/images/f_5_1.jpg" alt="" /></a>
					<div class="b5_text" style="padding:10px 10px 10px 10px;">
						<a href="/object/ventiliruemi_fasad/" class="sil">������������� ������</a>
						<div style="height: 54px;overflow: hidden;margin-bottom: 9px;">
							<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "page",
								"AREA_FILE_SUFFIX" => "b5_obl",        // �������� ���������� �������
								"EDIT_TEMPLATE" => ""
							)
							);?>
						</div>
					</div>
				</div>

				<div class="b6 fadeInUp wow" data-wow-duration="1s" data-wow-delay="2.5s">
					<a href="/object/peregorodki/" class="b1_img"><img src="/bitrix/images/f_6_1.jpg" alt="" /></a>
					<div class="b6_text" style="padding:10px 10px 10px 10px;">
						<a href="/object/peregorodki/" class="sil">�����������</a>
						<div style="height: 54px;overflow: hidden;margin-bottom: 9px;">
							<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "page",
								"AREA_FILE_SUFFIX" => "b6_obl",        // �������� ���������� �������
								"EDIT_TEMPLATE" => ""
							)
						);*/?>
						</div>
					</div>
				</div>
			</div>

			<div style="clear:both;"></div>
	</div>
</div>

-->





			<div class="profil_d_block">
				<div class="otstup">
						<div class="profd"  style=""><p style="font-size:13px;color:#fff;text-align:right;padding: 5px 20px 5px 0;">������� ������������</p></div>
					<!--<div  style="background:url(../bitrix/images/line2.jpg)repeat-x;width:100%;height:1px;margin-bottom:50px;"></div>-->
						<div style="margin:0px 0px 30px 0;">
							<div style="margin-bottom:15px;">
								<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "page",
									"AREA_FILE_SUFFIX" => "zagolovok_index1",        // �������� ���������� �������
									"EDIT_TEMPLATE" => ""
								)
								);?>
							</div>
							<div>
								<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "page",
									"AREA_FILE_SUFFIX" => "number2",        // �������� ���������� �������
									"EDIT_TEMPLATE" => ""
								)
								);?>
							</div>
							<div style="margin-top: 17px;margin-bottom:15px;">
								<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "page",
									"AREA_FILE_SUFFIX" => "zagolovok_index2",        // �������� ���������� �������
									"EDIT_TEMPLATE" => ""
								)
								);?>
							</div>
							<div>
								<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "page",
									"AREA_FILE_SUFFIX" => "index_text2",        // �������� ���������� �������
									"EDIT_TEMPLATE" => ""
								)
								);?>
							</div>
						</div>
						<div>
							<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							Array(
								"AREA_FILE_SHOW" => "page",
								"AREA_FILE_SUFFIX" => "number4",        // �������� ���������� �������
								"EDIT_TEMPLATE" => ""
							)
							);?>
						</div>
				</div>
			</div>


			<div class="news_block_pd">
				<div class="otstup">
					<div class="news_r" style="background-color:#08c;"><p style="margin-bottom:23px;font-size:13px;color:#fff;text-align:right;padding:5px 20px 5px 0;">�������</p></div>
					<!--<div  style="background:url(../bitrix/images/line2.jpg)repeat-x;width:100%;height:1px;margin-bottom:50px;"></div>-->


					<div style="width:100%">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"my_shablon",
							array(
								"IBLOCK_TYPE" => "news",
								"IBLOCK_ID" => "1",
								"NEWS_COUNT" => "2",
								"SORT_BY1" => "",
								"SORT_ORDER1" => "",
								"SORT_BY2" => "",
								"SORT_ORDER2" => "",
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
								"ACTIVE_DATE_FORMAT" => "",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "Y",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
								"ADD_SECTIONS_CHAIN" => "Y",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"INCLUDE_SUBSECTIONS" => "Y",
								"DISPLAY_DATE" => "Y",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"PAGER_TEMPLATE" => "",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "�������",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "Y",
								"SET_BROWSER_TITLE" => "Y",
								"SET_META_KEYWORDS" => "Y",
								"SET_META_DESCRIPTION" => "Y",
								"AJAX_OPTION_ADDITIONAL" => ""
							),
							false
						);?>
					</div>
				</div>
			</div>

			<div style="clear:both;"></div>


<!-- �������-�������� -->

			<?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "16",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
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
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
				);*/?>

		<!-- //�������-�������� -->

<!--<div id="wrapper5" style="margin-left:-150%;background:url(../bitrix/images/line.jpg)repeat-x;width:400%;height:1px;margin-bottom:30px;margin-top:40px;"></div>-->

		<!--<div style="width:100%; height:150px;position: relative;">

						<div id="container">
							<img src="http://placehold.it/350x150&text=FooBar1" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar2" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar3" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar4" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar5" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar6" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar7" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar8" alt="Cuba" />
							<img src="http://placehold.it/350x150&text=FooBar9" alt="Cuba" />
						</div>
						<img id="carouselLeft" src="/bitrix/images/str1.png" alt="Left Arrow" />
						<img id="carouselRight" src="/bitrix/images/str2.png" alt="Right Arrow" />

				</div>-->
<div style="clear:both;"></div>
					<script type="text/javascript">
						$(document).ready(function () {
								$(function(){
									$("#container").clickCarousel({margin: 10});
								});
					});
					</script>




	</div>
</div>
















<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>