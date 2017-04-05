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
$r=0;
$y='effect';

$m="arr";
$n=0;
?>






<div class="news-list new_class">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>




	<div class="obshi obshi_new" style="width: 326px;float: left;margin-bottom: 2px;"><!-- общий -->
	<div style="margin:0;padding:0;min-height:0px;border:none;" class="news-item prt" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>

		<a class="img_news float_style grow" style="position:relative;display:block;float:left;width:326px;height:180px;"  href="<?=$arItem["DETAIL_PAGE_URL"]?>">  <!-- картинка анонса -->
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





<!--////////////////////////////////// -->

			<div class="proba2 <?=$y.$r?>" style="">

					<div class="proba_min" style=""> <!-- дата -->
						<div class="serv_img arrow2 <?=$m.$n?>" style="text-align:center;margin-top:60px;margin-left:10px;">
							<span class="arrow3"></span>
						</div>
					</div>
					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<div class="proba_big" style="text-align:left;float:left;width:246px;height:180px;display:table;">
						<span style="vertical-align: middle;display:table-cell;padding-left: 20px;padding-right: 20px;" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
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
							<span style="color:#008DD2;font-size:12px;">Посмотреть проект</span>
						</span>
					</div>
				</div>

<!--////////////////////////////////// -->


			</a>





<style>
	.proba2{
		width:100%;
		position:absolute;
		top:0;
		left:0;
		background-color: rgba(255, 255, 255, 1);
		opacity:0;
		transition:all 1s
	}
	.img_news:hover .proba2{
		opacity:0.8 !important;
	}
	.obshi:nth-child(odd){
		margin-right:2px;
	}
</style>

























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





	</div><!--asd-->
</div><!-- /общий -->






<!--<div style="width:100%;height:2px;"></div>-->







<?$r++;?>
<?$n++;?>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

<div class="clear_display" style="clear:both;"></div>




<script>
	/*$(".proba2").hover(function(){
					$(this,'.proba_min').stop().animate({ "background-color":"#fff"}, 500);
					$(this,'.proba_big').stop().animate({ "background-color":"#424242"}, 500);
					$(this,'.proba_big a b').stop().animate({ "color":"#fff"}, 500);
 					},function() {
 					$(this,'.proba_min').stop().animate({ "background-color":"#424242"}, 500);
					$(this,'.proba_big').stop().animate({ "background-color":"#fff"}, 500);
});*/

</script>








