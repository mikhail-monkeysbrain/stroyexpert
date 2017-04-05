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











<div class="news-detail">

<?
$p = $arResult["DISPLAY_ACTIVE_FROM"];


//$ppp = explode(" ", $p);
//echo $ppp[0];
//echo $ppp[1];
//echo $ppp[2];
?>


	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>

	<!--<div style="background-color:#585858;width:62px;height:47px;float:left;padding-top: 13px;margin-right:10px;">
			<span style="font-weight:bold;font-size:16px;color:#fff;display: block;text-align: center;"  class="news-date-time"><?=$ppp[0];?></span>
			<span style="font-weight:bold;font-size:12px;color:#fff;display:block;text-align: center;"  class="news-date-time"><?=$ppp[1];?></span>
			<span style="display:none"  class="news-date-time"><?=$ppp[2];?></span>
		</div>-->


	<p style="color: #008dd2;margin-bottom: 10px;"><?=$p;?></p>

	<?endif;?>






<?
	//echo "<pre>";
	//print_r($arResult);
	//echo "<pre>";
?>







	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
	<h3 style="font-weight:normal;text-transform: uppercase;color: #008dd2;font-size: 12px;line-height: 1;margin-bottom: 13px;"><?=$arResult["NAME"]?></h3>
	<p style="border-top:1px solid #ccc;width:325px;"></p>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
	<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
	<p style="color:#898989;"><?echo $arResult["DETAIL_TEXT"];?></p>
	<?else:?>
		<p class="vac_preview"><?echo $arResult["PREVIEW_TEXT"];?></p>
	<?endif?>
	<div style="clear:both"></div>






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
	?>

	<?endforeach;
		/*foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

	<?//=$arProperty["NAME"]?>&nbsp;
	<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
	<?//=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>

	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
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
*/?>




<?for($i=0;$i<count($arProperty["FILE_VALUE"]);$i++) {?>
		<a class="group1" href="<?=$arProperty["FILE_VALUE"][$i]["SRC"]?>" title=""><img width="200px" height="150px" src='<?=$arProperty["FILE_VALUE"][$i]["SRC"]?>'></a>

<?}?>





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



<br>
	<p class="vak_punkt" style="margin-top:0px;"><?=$arResult['PROPERTIES']['obyazannosti']['NAME']?>:</p>

	<?for($i=0; $i<count($arResult['PROPERTIES']['obyazannosti']['VALUE']);$i++){?>
	<p style="color:#898989;">- <?=$arResult['PROPERTIES']['obyazannosti']['VALUE'][$i];?></p>
	<?}?>


	<p class="vak_punkt"><?=$arResult['PROPERTIES']['trebovaniya']['NAME']?>:</p>

	<?for($i=0; $i<count($arResult['PROPERTIES']['trebovaniya']['VALUE']);$i++){?>
	<p style="color:#898989;">- <?=$arResult['PROPERTIES']['trebovaniya']['VALUE'][$i];?></p>
	<?}?>


	<p class="vak_punkt"><?=$arResult['PROPERTIES']['usloviya_raboti']['NAME']?>:</p>

	<?for($i=0; $i<count($arResult['PROPERTIES']['usloviya_raboti']['VALUE']);$i++){?>
	<p style="color:#898989;">- <?=$arResult['PROPERTIES']['usloviya_raboti']['VALUE'][$i];?></p>
	<?}?>


<br>
<style>
	.vak_punkt{
		background:url("/bitrix/images/line4.jpg")no-repeat;
		background-position:0px 2px;
		background-size:7px 7px;
		padding-left:15px;
		color:#898989;
		margin-bottom:10px;
		margin-top: 10px;
	}
	.news-detail p{
		line-height:1;
	}
</style>






	<?/*

CModule::IncludeModule("iblock");//подключается модуль с функциями

$arSelect = Array(); 
$arFilter = Array("IBLOCK_ID"=>4, "ACTIVE"=>"Y");                                  // 10 - это ID инфоблока из которого хотим вытащить элемент
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect); 

?>

<?
while($ob = $res->GetNextElement()) 
 {
    $arFields = $ob->GetFields();            // массив инфоблока без свойств
    $arProperties = $ob->GetProperties();      // массив со свойствами инфоблока


	 //echo "<pre>";                 // распечатывает массив в цикле (можно стереть)
	 //print_r($arProperties);
	 //echo "<pre>";



//echo count($arProperties['obyazannosti']['VALUE']);
*/?>


	<p><?//=$arProperties['obyazannosti']['NAME']?></p>

	<?//for($i=0; $i<count($arProperties['obyazannosti']['VALUE']);$i++){?>
	<p><?//=$arProperties['obyazannosti']['VALUE'][$i];?></p>

	<?//}?>





</div>
<?//}?>


