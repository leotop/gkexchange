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

<div class="portfolio_wrapper">
<?foreach($arResult["ITEMS"] as $i=>$arItem) {?>
    <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <?if ($i == 0) {?> 
        <div class="portfolio-item-line">
            <?}?>

        <div class="portfolio-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="portfolio-item-img-container">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            </div>

            <div class="portfolio-item-site" >
                <?=$arItem["PROPERTIES"]["SITE_NAME"]["VALUE"]?>
            </div>

            <div class="portfolio-item-project">
                <?=$arItem["PROPERTIES"]["PROJECT_NAME"]["VALUE"]?>
            </div>
            <?if (is_array($arItem["ITEM_TAGS"]) && count($arItem["ITEM_TAGS"]) > 0) {?>
                <div class="portfolio-item-tag-container">
                    <?foreach ($arItem["ITEM_TAGS"] as $item_tag) {?>
                        <div class="portfolio-item-tag"><?=$item_tag?></div>
                        <?}?>
                </div>
                <?}?>

            <div class="portfolio-item-price">
                <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> 
                <span class="rubznak">c</span>
            </div>       

            <div class="portfolio-bottom-line"></div>

            <a class="portfolio-item-bottom" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <?=GetMessage("VIEW_CASE");?>
            </a>

        </div>

        <?if ($i % 2 != 0){?> 
        </div> 
        <?if ($i != count($arResult["ITEMS"]) - 1) {?>
            <div class="portfolio-item-line">
                <?}?>  
            <?}?>  

        <?}?>     
</div>