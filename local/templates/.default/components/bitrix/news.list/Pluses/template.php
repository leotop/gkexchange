<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

<div class="pluses_list">
    <ul>
        <?foreach($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            //id="<?=$this->GetEditAreaId($arItem['ID']);
            ?>
            <li id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                <?=html_entity_decode($arItem['NAME'])?>
            </li>  
            <?//arshow($arItem)?>
        <?endforeach;?>
    </ul>
</div>

<?endif?>
 
                