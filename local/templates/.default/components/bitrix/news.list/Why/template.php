<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

<?foreach($arResult["ITEMS"] as $arItem):
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	  //id="<?=$this->GetEditAreaId($arItem['ID']);?>
      
	<div id="<?=$this->GetEditAreaId($arItem['ID'])?>" class="list">
        <div class="list_circle"> <?=$arItem['FIELDS']['CODE']?></div>
        <?=$arItem['NAME']?>
    </div>
    <?//arshow($arItem)?>
<?endforeach;?>

<?endif?>
 
                