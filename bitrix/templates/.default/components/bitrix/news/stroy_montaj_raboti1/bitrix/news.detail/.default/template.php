<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>






<div class="news-detail" style="position:relative;">

<?
$p = $arResult["DISPLAY_ACTIVE_FROM"];


		$ppp = explode(" ", $p);
//echo $ppp[0];
//echo $ppp[1];
//echo $ppp[2];
?>


	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>


	<div style="background-color:#424242;width:60px;height:53px;float:left;padding-top: 7px;margin-right:10px;">
			<span style="font-weight:bold;font-size:16px;color:#fff;display: block;text-align: center;"  class="news-date-time"><?=$ppp[0];?></span>
			<span style="font-weight:bold;font-size:12px;color:#fff;display:block;text-align: center;"  class="news-date-time"><?=$ppp[1];?></span>
			<span style="display:none"  class="news-date-time"><?=$ppp[2];?></span>
		</div>

	<?endif;?>



<!-- �������� � ����� -->
	<p style="color: #424242;font-size: 12px;line-height: 1;margin-bottom:15px;text-transform: uppercase;"><?=$arResult['NAME']?></p>
	<p style="color: #424242;font-size: 12px;line-height: 1;margin-bottom:20px;"><?=$arResult['PROPERTIES']['adress']['VALUE']?></p>

<!-- /�������� � ����� -->





	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
	<h3 style="font-size: 16px;line-height: 1.2;float:left;max-width: 580px;"><?=$arResult["NAME"]?></h3>
	<div style="clear:both;"></div>
	<br>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
	<p class="text_big" style="line-height:1;font-size:12px;margin-right:20px;color:#898989;"><?echo $arResult["DETAIL_TEXT"];?></p>
	<?else:?>
	<?endif?>
	<p class="text_big" style="line-height:1;font-size:12px;margin-right:20px;color:#898989;"><?echo $arResult["PREVIEW_TEXT"];?></p>
	<div style="clear:both"></div>
	<br>

	<div style="position:relative;"><!--///////////////////////////-->

<?if(!empty($arResult['PROPERTIES']['stadia']['VALUE'])){ ?>
<!-- ������ ���������� ������� -->
		<p class="stadia_real" style="width: 100%;max-width: 195px;padding:8px 50px;color:#8C8C8C;text-transform: uppercase;position:absolute;left: 342px;top:20px;border-top:1px solid;border-bottom:1px solid;font-family:Century Gothic">
		<?=$arResult['PROPERTIES']['stadia']['NAME']?>:<br>
		<?=$arResult['PROPERTIES']['stadia']['VALUE']?>
	</p>
<!-- /������ ���������� ������� -->
<?}?>


	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
	?><br>







	<?endforeach;
foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>


<!-- ��������� ������� -->
	<?if ($arProperty['CODE']=='foto_object'){?>
		<div class="foto_big2" style="width:325px;height:180px;float:left;"><a class="group1 silka_kart" href="<?=$arProperty['FILE_VALUE'][0]['SRC'];?>"><img class="img_detail2" src="<?=$arProperty['FILE_VALUE'][0]['SRC'];?>" style="width:325px;height:180px;"></a></div>
		<br>
		<div class="carousel shadow">

			<div class="carousel-button-left" style="margin-top:23px;float:left;height:25px;width:25px;margin-right:-26px;position:relative;z-index:99;"><a class="arrow11" style="display:block;" href="#"><span></span></a></div> 
			<div class="carousel-wrapper"> 
				<div class="carousel-items"> 
					<?for($k=0;$k<count($arProperty["FILE_VALUE"]);$k++) {?>
						<div class="carousel-block">
							<img class="img_detail" src="<?=$arProperty['FILE_VALUE'][$k]['SRC'];?>" style="width:100%;height:70px;cursor:pointer;">
						</div>
					<?}?>
				</div>
			</div>
			<div class="carousel-button-right" style="margin-top:23px;float:left;height:25px;width:25px;margin-left:-25px;position:relative;z-index:99;"><a class="arrow22" style="display:block;" href="#"><span></span></a></div>

		</div>

		<div class="carousel-items" style="display:none;"> 
					<?for($k=0;$k<count($arProperty["FILE_VALUE"]);$k++) {?>
						<div class="carousel-block">
							<a class="group1" href="<?=$arProperty['FILE_VALUE'][$k]['SRC'];?>"><img class="img_detail" src="<?=$arProperty['FILE_VALUE'][$k]['SRC'];?>" style="width:100%;height:70px;cursor:pointer;"></a>
						</div>
					<?}?>
		</div>

		<div style="clear:both;"></div>
	<?}?>
<!-- /��������� ������� -->

	<?endforeach;?>

	<!--<div style="width:500px;height:500px;border:1px solid red;position:absolute;top:600px;left:300px"><img src="" style="width:100%;height:100%;display:block;" class="img_img"></div>-->

	</div><!--///////////////////////////-->



<script>
         $(document).ready(function(){
			var max_w = screen.width;
			var max_h = screen.height-57;
			 //alert(max_w);

             $(".group1").colorbox({
				 rel:'group1',                            //����������� �����
 			transition:"elastic",				//����� ����� ������� "elastic","fade","none"
			current: "���� {current} �� {total}",		
				 maxWidth:max_w,			
				 maxHeight:max_h,
				 //width:max_w,
				 //height:50%,
			opacity:0.85,					//������������ ������� ����
			slideshow:true,					//���������� ��������
			slideshowAuto:false,				//������� �� ��������� �������� �� ������������
									
		});


			 /*function heightDetect(){
	   $(".main_head").css("height",$(window).height());    //������� ������ ������ ����� = ������ ���� ��������
	};
    heightDetect();
    $(window).resize(function(){	// ��� ��������� ������� ���� ��������(resize) ���������� ���� �������
        heightDetect()
})*/


});
</script>

<style>
		#cboxMiddleLeft{
			width:0px;
		}
	#cboxContent{
		background:none;
	}
	#cboxClose{
		top:0px;
	}
	#cboxTopCenter{
		height:0px;
	}
	#cboxTopLeft{
		height:0px;
	}
	#cboxTopRight{
		height:0px;
	}
</style>





<script>

	//������������ ��������
	$(document).ready(function(){
		$('.img_detail').click(function(){
			var etaj_img_src = $(this).attr('src');

			$('.img_detail2').attr('src',etaj_img_src);
			$('.silka_kart').attr('href',etaj_img_src);
		});

		// ������� ���������
	$(function() {
           $(".arrow11")
           .find("span")
           .hide()
           .end()
           .hover(function() {
                   $(this).find("span").stop().fadeIn();
           }, function() {
                   $(this).find("span").stop().fadeOut();
           });
    });
	$(function() {
           $(".arrow22")
           .find("span")
           .hide()
           .end()
           .hover(function() {
                   $(this).find("span").stop().fadeIn();
           }, function() {
                   $(this).find("span").stop().fadeOut();
           });
    });

		// /������� ���������
});

</script>








<div class="teh_opis" style="width:100%;background-color:#878787;margin:20px auto 2px;"><p style="color:#fff;font-size: 13px;padding: 5px 10px 5px 10px;">����������� ��������</p></div>

<div class="parametri">
	<?if(!empty($arResult['PROPERTIES']['vidi_vipoln_rabot']['VALUE'])){ ?>
<!-- ��������� ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['vidi_vipoln_rabot']['NAME']?>:</p><p class="no2"><span class="no_2_spa"><?=$arResult['PROPERTIES']['vidi_vipoln_rabot']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_utepleniya_fasada']['VALUE'])){ ?>
	<!-- ������� ���������� ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_utepleniya_fasada']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_utepleniya_fasada']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_utepleniya_fasada_keramogranit']['VALUE'])){ ?>
	<!-- ����� ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_utepleniya_fasada_keramogranit']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_utepleniya_fasada_keramogranit']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_ventil_fasada_kompozit_alumin_panelei']['VALUE'])){ ?>
	<!-- ������� ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_ventil_fasada_kompozit_alumin_panelei']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_ventil_fasada_kompozit_alumin_panelei']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_ventil_fasada_vibrocement_plit']['VALUE'])){ ?>
	<!-- GBA -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_ventil_fasada_vibrocement_plit']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_ventil_fasada_vibrocement_plit']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_ventil_fasada_profilir_list_metala']['VALUE'])){ ?>
	<!-- GLA -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_ventil_fasada_profilir_list_metala']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_ventil_fasada_profilir_list_metala']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_ventil_fasada_metal_kasset']['VALUE'])){ ?>
	<!-- ������� ������ ��������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_ventil_fasada_metal_kasset']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_ventil_fasada_metal_kasset']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_ventil_fasada_saiding']['VALUE'])){ ?>
	<!-- ��������� �������� ������ -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_ventil_fasada_saiding']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_ventil_fasada_saiding']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_ventil_fasada_metal_saidinga']['VALUE'])){ ?>
	<!-- ������� ������������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_ventil_fasada_metal_saidinga']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_ventil_fasada_metal_saidinga']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_fasson_elementov']['VALUE'])){ ?>
	<!-- ������������� ����� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_fasson_elementov']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_fasson_elementov']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['konstructiv_osobennost_fasad']['VALUE'])){ ?>
	<!-- ���������� ����� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['konstructiv_osobennost_fasad']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['konstructiv_osobennost_fasad']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_vitraj_ostekleniya']['VALUE'])){ ?>
	<!-- �������� ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_vitraj_ostekleniya']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_vitraj_ostekleniya']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_celno_steklyanih_peregorodok']['VALUE'])){ ?>
	<!-- ��������������� ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_celno_steklyanih_peregorodok']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_celno_steklyanih_peregorodok']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['s_celno_steklyanih_peregorodok_alumin_karkase']['VALUE'])){ ?>
	<!-- ������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['s_celno_steklyanih_peregorodok_alumin_karkase']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['s_celno_steklyanih_peregorodok_alumin_karkase']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['kolichestvo_celnosteklyanih_dverey']['VALUE'])){ ?>
	<!-- �������� �������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['kolichestvo_celnosteklyanih_dverey']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['kolichestvo_celnosteklyanih_dverey']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['kolichestvo_alumin_dverey']['VALUE'])){ ?>
	<!-- ��������� �������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['kolichestvo_alumin_dverey']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['kolichestvo_alumin_dverey']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['kolichestvo_rolet']['VALUE'])){ ?>
	<!-- ��������� �������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['kolichestvo_rolet']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['kolichestvo_rolet']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>

	<?if(!empty($arResult['PROPERTIES']['konstructiv_osobennosti']['VALUE'])){ ?>
	<!-- ��������� �������� -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['konstructiv_osobennosti']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['konstructiv_osobennosti']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>


	<?}?>

	<?if(!empty($arResult['PROPERTIES']['gsa']['VALUE'])){ ?>
	<!-- GSA -->
	<div class="div_otstup">
		<p class="no1"><?=$arResult['PROPERTIES']['gsa']['NAME']?>:</p><p class="no2"><span class="no_2_spa"> <?=$arResult['PROPERTIES']['gsa']['VALUE']?></span></p>
		<div style="clear:both;"></div>
	</div>
	<?}?>
</div>


	<?if(!empty($arResult['PROPERTIES']['flash_banner']['VALUE'])){ ?>
	<a href="<?=$arResult['PROPERTIES']['ssilka_banner']['VALUE']?>"><img style="max-width:156px;" src="<?=CFile::GetPath($arResult['PROPERTIES']['flash_banner']['VALUE']);?>"></a>

		<style>
			.no2{
				width:159px ;
				margin-right:2px;
			}
		</style>
	<?}else{?>
		<style>
			.no2{
				width:317px;
			}
		</style>
	<?}?>

<div style="clear:both;"></div>







	<script>
	$(document).ready(function(){

	var i;
	for (i = 0; i < 20; i++) {
		if(parseFloat($(".div_otstup:eq("+i+") .no2").css('height'))>= parseFloat($(".div_otstup:eq("+i+") .no1").css('height')) ){
			var height_b = $(".div_otstup:eq("+i+") .no2").css('height');
			//alert(height_b);
			$(".div_otstup:eq("+i+") .no1").css('height',height_b);
		}else{
			var height_b = $(".div_otstup:eq("+i+") .no1").css('height');
			$(".div_otstup:eq("+i+") .no2").css('height',height_b);
		}
	}

	});
	</script>



<!--
<a href="photo/dzhetli.jpg" title="���� ��" class="group1"><img src="photo/dzhetli.jpg" alt="���� ��" class="photos"></a>
	<a href="photo/dzhetli.jpg" title="���� ��" class="group1"><img src="photo/dzhetli.jpg" alt="���� ��" class="photos"></a>
	<a href="photo/dzhetli.jpg" title="���� ��" class="group1"><img src="photo/dzhetli.jpg" alt="���� ��" class="photos"></a>

-->
















<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

<!-- ������������� ������� -->
	<?if ($arProperty['CODE']=='texniko'){?>
		<div style="width:100%;background-color:#585858;margin-bottom:30px;margin-top: 5px;"><p style="color:#fff;font-size: 13px;padding: 5px 10px 5px 10px;">������������� �������</p></div>
	
		<div class="smena_img" style="border:1px solid #434242;width:300px; height:200px;float:left;margin-right: 2px;">
			<img src='<?=$arProperty["FILE_VALUE"][0]["SRC"]?>' style="width:300px;height:200px;"   />
		</div>

		<div class="plan_reshenya" style="float:left;">
			<?for($i=0;$i<count($arProperty["FILE_VALUE"]);$i++) {?>
					<? $decs = $arProperty["DESCRIPTION"][$i];
					$razd = explode(",",$decs);
				 if($razd[0] == $tmp) {?>
			<p class="etaj_no etaj<?=$i?>" style="cursor:pointer;"><?=$razd[1]?><span style="float:right;"><?=$razd[2];?></span></p>
			<img style="display:none"  class="etaj_img<?=$i?>" width="200px" height="150px" src='<?=$arProperty["FILE_VALUE"][$i]["SRC"]?>'>
				<?} else {?>
				<p class="etaj_no block"><?=$razd[0];?></p>
			<p class="etaj_no etaj<?=$i?>" style="cursor:pointer;"><?=$razd[1]?><span style="float:right;"><?=$razd[2];?></span></p>
			<img style="display:none" class="etaj_img<?=$i?>" width="200px" height="150px" src='<?=$arProperty["FILE_VALUE"][$i]["SRC"]?>'>
				<?}?>
	
					<!--<a class="group1" href="<?=$arProperty["FILE_VALUE"][$i]["SRC"]?>" title=""><img width="200px" height="150px" src='<?=$arProperty["FILE_VALUE"][$i]["SRC"]?>'></a>-->
			
				<!--<p><?=$arProperty["DESCRIPTION"][$i]?></p>-->
					<?$tmp = $razd[0];?>
				<?}?>
		</div>
		<div style="clear:both;"></div>
	<?}?>
<!-- /������������� ������� -->




<!--<a href="/bitrix/images/logotype3.png" class="group1">
	<img src="/bitrix/images/logotype3.png">
</a>-->








<?
//echo "<pre>";
//print_r($arResult);
//echo "<pre>";
?>

	<?//=$arProperty["NAME"]?>&nbsp;
	<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
	<?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>

		<?else:?>
	<?//=$arProperty["DISPLAY_VALUE"];?>

		<?endif?>









	<?endforeach;?>

<!--
<div style="width:100%;background-color:#E9E8E8;margin-bottom:20px;margin-top: 5px;"><p style="color:#4F4C4D;font-size: 13px;padding: 5px 10px 5px 10px;">�������� �������</p></div>
<ul style="list-style-image:url(/bitrix/images/line4.jpg);margin-left:15px;color:#898989;">
	<li><?=$arResult['PROPERTIES']['konstructiv_zdania']['VALUE'];?></li>
	<li><?=$arResult['PROPERTIES']['arhitektura']['VALUE'];?></li>
	<li><?=$arResult['PROPERTIES']['obemno_planirovochnie_resheniya']['VALUE'];?></li>
	<li><?=$arResult['PROPERTIES']['injenernie_sistemi']['VALUE'];?></li>
</ul>
-->



	<?if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>








		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>



		<?
	}
	?>






















<script>

jQuery(function($){


	$(".block").click(function(){
		$(".etaj0").css('background-color','#918F8F');
	});



	$(".etaj0").css('background-color','#918F8F');

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		var etaj_img_src = $('.etaj_img0').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		$(".etaj0").css('background-color','#918F8F');
		var div = $(".etaj0"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj0").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj1").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img1').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj1"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj1").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj2").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img2').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj2"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj2").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj3").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img3').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj3"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj3").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj4").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img4').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj4"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj4").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj5").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img5').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj5"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj5").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj6").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img6').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj6"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj6").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj7").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img7').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj7"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj7").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj8").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img8').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj8"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj8").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj9").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img9').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj9"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj9").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj10").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img10').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj10"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj10").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj11").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img11').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj11"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj11").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj12").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img12').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj12"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj12").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj13").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img13').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj13"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj13").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj14").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img14').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj14"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj14").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj15").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img15').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj15"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj15").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj16").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img16').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj16"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj16").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj17").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img17').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj17"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj17").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj18").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img18').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj18"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj18").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj19").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img19').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj19"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj19").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj20").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img20').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj20"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj20").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj21").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img21').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj21"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj21").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj22").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img22').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj22"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj22").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj23").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img23').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj23"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj23").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj24").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img24').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj24"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj24").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj25").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img25').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj25"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj25").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj26").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img26').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj26"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj26").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj27").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img27').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj27"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj27").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj28").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img28').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj28"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj28").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj29").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img29').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj29"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj29").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj30").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img30').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj30"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj30").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj31").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img31').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj31"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj31").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj32").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img32').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj32"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj32").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj33").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img33').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj33"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj33").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj34").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img34').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj34"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj34").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj35").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img35').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj35"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj35").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj36").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img36').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj36"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj36").css('background-color','#585858'); // �������� ���
		}
	});

$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj37").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img37').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj37"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj37").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj38").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img38').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj38"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj38").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj39").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img39').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj39"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj39").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj40").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img40').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj40"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj40").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj41").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img41').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj41"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj41").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj42").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img42').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj42"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj42").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj43").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img43').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj43"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj43").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj44").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img44').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj44"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj44").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj45").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img45').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj45"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj45").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj46").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img46').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj46"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj46").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj47").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img47').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj47"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj47").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj48").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img48').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj48"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj48").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj49").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img49').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj49"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj49").css('background-color','#585858'); // �������� ���
		}
	});

	$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		$(".etaj50").css('background-color','#918F8F');
		var etaj_img_src = $('.etaj_img50').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		var div = $(".etaj50"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj50").css('background-color','#585858'); // �������� ���
		}
	});

	/*//////////////////////////////////////////////////////////////////*/

		$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		var etaj_img_src = $('.etaj_img0').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
		$(".etaj0").css('background-color','#918F8F');
		var div = $(".etaj0"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj0").css('background-color','#585858'); // �������� ���
		}
	});

		$(document).mouseup(function (e){ // ������� ����� �� ���-���������
		var div = $(".plan_reshenya"); // ��� ��������� ID ��������
		if (!div.is(e.target) // ���� ���� ��� �� �� ������ �����
		    && div.has(e.target).length === 0) { // � �� �� ��� �������� ���������
			$(".etaj0").css('background-color','#918F8F'); // �������� ���
		}
	});


	$('.etaj1').click(function(){
		var etaj_img_src = $('.etaj_img1').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj2').click(function(){
		var etaj_img_src = $('.etaj_img2').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj3').click(function(){
		var etaj_img_src = $('.etaj_img3').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj4').click(function(){
		var etaj_img_src = $('.etaj_img4').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj5').click(function(){
		var etaj_img_src = $('.etaj_img5').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj6').click(function(){
		var etaj_img_src = $('.etaj_img6').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj7').click(function(){
		var etaj_img_src = $('.etaj_img7').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj8').click(function(){
		var etaj_img_src = $('.etaj_img8').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj9').click(function(){
		var etaj_img_src = $('.etaj_img9').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj10').click(function(){
		var etaj_img_src = $('.etaj_img10').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj11').click(function(){
		var etaj_img_src = $('.etaj_img11').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj12').click(function(){
		var etaj_img_src = $('.etaj_img12').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj13').click(function(){
		var etaj_img_src = $('.etaj_img13').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj14').click(function(){
		var etaj_img_src = $('.etaj_img14').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj15').click(function(){
		var etaj_img_src = $('.etaj_img15').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj16').click(function(){
		var etaj_img_src = $('.etaj_img16').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj17').click(function(){
		var etaj_img_src = $('.etaj_img17').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj18').click(function(){
		var etaj_img_src = $('.etaj_img18').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj19').click(function(){
		var etaj_img_src = $('.etaj_img19').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj20').click(function(){
		var etaj_img_src = $('.etaj_img20').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj21').click(function(){
		var etaj_img_src = $('.etaj_img21').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj22').click(function(){
		var etaj_img_src = $('.etaj_img22').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj23').click(function(){
		var etaj_img_src = $('.etaj_img23').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj24').click(function(){
		var etaj_img_src = $('.etaj_img24').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj25').click(function(){
		var etaj_img_src = $('.etaj_img25').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj26').click(function(){
		var etaj_img_src = $('.etaj_img26').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj27').click(function(){
		var etaj_img_src = $('.etaj_img27').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj28').click(function(){
		var etaj_img_src = $('.etaj_img28').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj29').click(function(){
		var etaj_img_src = $('.etaj_img29').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj30').click(function(){
		var etaj_img_src = $('.etaj_img30').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj31').click(function(){
		var etaj_img_src = $('.etaj_img31').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj32').click(function(){
		var etaj_img_src = $('.etaj_img32').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj33').click(function(){
		var etaj_img_src = $('.etaj_img33').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj34').click(function(){
		var etaj_img_src = $('.etaj_img34').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj35').click(function(){
		var etaj_img_src = $('.etaj_img35').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj36').click(function(){
		var etaj_img_src = $('.etaj_img36').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj37').click(function(){
		var etaj_img_src = $('.etaj_img37').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj38').click(function(){
		var etaj_img_src = $('.etaj_img38').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj39').click(function(){
		var etaj_img_src = $('.etaj_img39').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj40').click(function(){
		var etaj_img_src = $('.etaj_img40').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj41').click(function(){
		var etaj_img_src = $('.etaj_img41').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj42').click(function(){
		var etaj_img_src = $('.etaj_img42').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj43').click(function(){
		var etaj_img_src = $('.etaj_img43').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj44').click(function(){
		var etaj_img_src = $('.etaj_img44').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj45').click(function(){
		var etaj_img_src = $('.etaj_img45').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj46').click(function(){
		var etaj_img_src = $('.etaj_img46').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj47').click(function(){
		var etaj_img_src = $('.etaj_img47').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj48').click(function(){
		var etaj_img_src = $('.etaj_img48').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj49').click(function(){
		var etaj_img_src = $('.etaj_img49').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});

	$('.etaj50').click(function(){
		var etaj_img_src = $('.etaj_img50').attr('src');
		$('.smena_img img').attr('src',etaj_img_src);
	});









});
</script>












	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>



</div>

