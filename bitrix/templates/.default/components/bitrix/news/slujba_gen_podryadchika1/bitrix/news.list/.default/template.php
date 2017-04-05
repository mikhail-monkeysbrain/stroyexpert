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

<?

$cheese = 0;

?>
<?
$r=0;
$y='effect';

$m="arr";
$n=0;
?>


<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


	<? if($cheese%2 == 0){ ?>


	<div class="obshi" style=""><!-- общий -->
	<p style="margin:0;padding:0;min-height:0px;border:none;" class="news-item prt" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

		<a class="img_news float_style grow" style="float:left;margin-right:2px;width:326px;height:180px;display:block;"  href="<?=$arItem["DETAIL_PAGE_URL"]?>">  <!-- картинка анонса -->
				<img style="width:326px;height:180px;"
						class="preview_picture image_news"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/>
			</a>

			<?else:?>
				<img 
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>




<div class="proba2 <?=$y.$r?>" style="width:326px;">
		<div class="proba_min3" style=""> <!-- дата -->
			<div class="serv_img arrow2_3 <?=$m.$n?>" style="text-align:center;margin-top:60px;margin-left:10px;">
				<span class="arrow3_4"></span>

			</div>
		</div>


		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>

<?
		$t = $arItem["DISPLAY_ACTIVE_FROM"];


		$ttt = explode(" ", $t);
//echo $ttt[0]; 
//echo $ttt[1];
//echo $ttt[2];

?>


	<div class="proba" style="width:326px;">
		<div style="height:180px;width:80px;background-color:#424242;float:left;border:1px solid red"> <!-- дата -->
			<div style="text-align:center;margin-top:50px;">
				<span style="font-weight:bold;margin-bottom:3px;color: #fff;display: block;font-size: 18px;" class="news-date-time"><?echo $ttt[0];?></span>
				<span style="font-weight:bold;margin-bottom:10px;color: #fff;display: block;" class="news-date-time"><?echo $ttt[1];?></span>
				<span style="margin-bottom:6px;display:block;width:30px;border-bottom:1px solid #fff;margin-left:auto;margin-right:auto;"></span>
				<span style="font-weight:bold;color: #fff;display: block;" class="news-date-time"><?echo $ttt[2];?></span>
			</div>
		</div>


		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

		<div class="proba_big" style="float:left;width:246px;height:180px;display:table;">
		<a style="vertical-align: middle;display:table-cell;padding-left: 20px;padding-right: 20px;" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			<span style="display:block;margin-bottom:10px;line-height: 1;font-size:12px;color:#424242;text-transform:uppercase;"><?echo $arItem["NAME"]?></span>

											<?else:?>
											<b><?echo $arItem["NAME"]?></b><br />
										<?endif;?>
									<?endif;?>
								<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
								<?/*echo  $arItem["PREVIEW_TEXT"];*/?>
									<?endif;?>
									<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
										<div style="clear:both"></div>
									<?endif?>
									<?foreach($arItem["FIELDS"] as $code=>$value):?>
										<!--<small>
										<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
										</small><br />-->



									<?endforeach;?>
									<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							
							
							
										<small style="margin-bottom:10px;display:block;line-height: 1;font-size:12px;color:#424242;">
											<?/*=$arProperty["NAME"]*/?>
										<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
											<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
										<?else:?>
											<?=$arProperty["DISPLAY_VALUE"];?>
										<?endif?>
										</small>




									<?endforeach;?>

			<span style="color:#008DD2;font-size:12px;">Посмотреть объект</span>
		</a><br />
	</div>
</div>
<div style="clear:both;"></div>
</div><!-- /общий -->





	</p>
<div style="width:100%;height:2px;"></div>

<? }else{ ?>


<div class="obshi" style=""><!-- общий -->
<p style="margin:0;padding:0;min-height:0px;border:none;" class="news-item prt" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

	<a class="img_news float_style grow" style="width:326px;height:180px;display:block;"   href="<?=$arItem["DETAIL_PAGE_URL"]?>">  <!-- картинка анонса -->
				<img style="width:326px;height:180px;"
						class="preview_picture image_news"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/>
			</a>

			<?else:?>
				<img 
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>


		<div class="proba2 <?=$y.$r?>" style="width:326px;">
			<div class="proba_min3" style=""> <!-- дата -->
				<div class="serv_img arrow2_3 <?=$m.$n?>" style="text-align:center;margin-top:60px;margin-left:10px;">
					<span class="arrow3_4"></span>
	
				</div>
			</div>



		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>

<?
		$t = $arItem["DISPLAY_ACTIVE_FROM"];


		$ttt = explode(" ", $t);
//echo $ttt[0]; 
//echo $ttt[1];
//echo $ttt[2];

?>


	<div class="proba" style="margin-right:2px;width:326px;">
		<div style="height:180px;width:80px;background-color:#424242;float:left"> <!-- дата -->
			<div style="text-align:center;margin-top:50px;">
				<span style="font-weight:bold;;margin-bottom:3px;color: #fff;display: block;font-size: 18px;" class="news-date-time"><?echo $ttt[0];?></span>
				<span style="font-weight:bold;margin-bottom:10px;color: #fff;display: block;" class="news-date-time"><?echo $ttt[1];?></span>
				<span style="margin-bottom:6px;display:block;width:30px;border-bottom:1px solid #fff;margin-left:auto;margin-right:auto;"></span>
				<span style="font-weight:bold;color: #fff;display: block;" class="news-date-time"><?echo $ttt[2];?></span>
			</div>
		</div>


		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

	<div class="proba_big" style="float:left;width:246px;height:180px;display:table;">
		<a style="vertical-align: middle;display:table-cell;padding-left: 20px;padding-right: 20px;" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			<span style="display:block;margin-bottom:10px;line-height: 1;font-size:12px;color:#424242;text-transform:uppercase;"><?echo $arItem["NAME"]?></span>


								<?else:?>
									<b><?echo $arItem["NAME"]?></b><br />
										<?endif;?>
									<?endif;?>
								<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
								<?/*echo  $arItem["PREVIEW_TEXT"];*/?>
									<?endif;?>
									<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
										<div style="clear:both"></div>
									<?endif?>
									<?foreach($arItem["FIELDS"] as $code=>$value):?>
										<!--<small>
										<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
										</small><br />-->
									<?endforeach;?>
									<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>


							<small style="margin-bottom:10px;display:block;line-height: 1;font-size:12px;color:#424242;">
								<?/*=$arProperty["NAME"]*/?>
								<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
									<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
								<?else:?>
									<?=$arProperty["DISPLAY_VALUE"];?>
								<?endif?>
							</small>




								<?endforeach;?>


			<span style="color:#008DD2;font-size:12px;">Посмотреть объект</span>
		</a><br />
	</div>
</div>
<div style="clear:both;"></div>
</div><!-- /общий -->



	</p>
<div style="width:100%;height:2px;"></div>



<? }; ?>
<? $cheese++; ?>
<?$r++;?>
<?$n++;?>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>






<script>


$(".proba2").hover(function(){
					$(this).children('.proba_min3').stop().animate({ "background-color":"#fff"}, 500);
					//$(this).children('.proba_big').stop().animate({ "background-color":"#424242"}, 500);
 					},function() {
 					$(this).children('.proba_min3').stop().animate({ "background-color":"#0088CC"}, 500);
					//$(this).children('.proba_big').stop().animate({ "background-color":"#fff"}, 500);
});


</script>








