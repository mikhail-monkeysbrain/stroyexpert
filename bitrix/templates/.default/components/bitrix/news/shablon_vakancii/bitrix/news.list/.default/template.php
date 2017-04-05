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
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>

<?
		$t = $arItem["DISPLAY_ACTIVE_FROM"];


		$ttt = explode(" ", $t);
//echo $ttt[0]; 
//echo $ttt[1];
//echo $ttt[2];

?>


	<div class="proba" style="width:326px;">
		<div style="height:180px;width:80px;background-color:#585858;float:left"> <!-- дата -->
			<div style="text-align:center;margin-top:50px;">
				<span style="margin-bottom:3px;color: #fff;display: block;font-size: 18px;" class="news-date-time"><?echo $ttt[0];?></span>
				<span style="margin-bottom:10px;color: #fff;display: block;" class="news-date-time"><?echo $ttt[1];?></span>
				<span style="margin-bottom:6px;display:block;width:30px;border-bottom:1px solid #fff;margin-left:auto;margin-right:auto;"></span>
				<span style="color: #fff;display: block;" class="news-date-time"><?echo $ttt[2];?></span>
			</div>
		</div>


		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

		<div style="float:left;width:246px;height:180px;display:table;">
		<a style="vertical-align: middle;display:table-cell;padding-left: 20px;padding-right: 20px;" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			<b style="line-height: 1.4;font-size:85%;color:#424242;"><?echo $arItem["NAME"]?></b><br><br>
			<span style="color:#008DD2;font-size:85%;">Читать полностью</span>
		</a><br />
	</div>
</div>
<div style="clear:both;"></div>
</div><!-- /общий -->


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
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />

		<?endforeach;?>
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
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>

<?
		$t = $arItem["DISPLAY_ACTIVE_FROM"];


		$ttt = explode(" ", $t);
//echo $ttt[0]; 
//echo $ttt[1];
//echo $ttt[2];

?>


	<div class="proba" style="margin-right:2px;width:326px;">
		<div style="height:180px;width:80px;background-color:#585858;float:left"> <!-- дата -->
			<div style="text-align:center;margin-top:50px;">
				<span style="margin-bottom:3px;color: #fff;display: block;font-size: 18px;" class="news-date-time"><?echo $ttt[0];?></span>
				<span style="margin-bottom:10px;color: #fff;display: block;" class="news-date-time"><?echo $ttt[1];?></span>
				<span style="margin-bottom:6px;display:block;width:30px;border-bottom:1px solid #fff;margin-left:auto;margin-right:auto;"></span>
				<span style="color: #fff;display: block;" class="news-date-time"><?echo $ttt[2];?></span>
			</div>
		</div>


		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

	<div style="float:left;width:246px;height:180px;display:table;">
		<a style="vertical-align: middle;display:table-cell;padding-left: 20px;padding-right: 20px;" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
			<b style="line-height: 1.4;font-size:85%;color:#424242;"><?echo $arItem["NAME"]?></b><br><br>
			<span style="color:#008DD2;font-size:85%;">Читать полностью</span>
		</a><br />
	</div>
</div>
<div style="clear:both;"></div>
</div><!-- /общий -->


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
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />

		<?endforeach;?>
	</p>
<div style="width:100%;height:2px;"></div>



<? }; ?>
<? $cheese++; ?>


<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
