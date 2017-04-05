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
<div class="sl-box">
	<div class="sl-right-part">
		<div class="sl-container">
			<?$i=0;
			foreach($arResult["ITEMS"] as $arItem) {?>
				<a data-pos="<?=$i;?>" href="javascript:void(0);">
					<img
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/>
				</a>
				<?$i++;
			}?>
		</div>
	</div>
	<div class="sl-left-part">
		<?$i=0;
		foreach($arResult["ITEMS"] as $arItem) {?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-cnt="<?=$i;?>">
				<div class="sl-title">
					<?$link = 'javascript:void(0);';
					if(strlen($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'])>0) $link = $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];?>
					<a href="<?echo $link;?>"><b><?echo $arItem["NAME"]?></b></a>
					<span class="undertext">
						<?echo $arItem["PREVIEW_TEXT"];?>
					</span>
				</div>
				<img
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					/>

			</div>
			<?$i++;
		}?>
	</div>
</div>