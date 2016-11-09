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
<div class="new-services">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
    <?$serviceNumber = 1;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="new-services-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">        
            <div class="title-top">
                <div class="number">
                    <?if($serviceNumber < '10') {
                        echo '0' . $serviceNumber;                        
                        $serviceNumber = $serviceNumber + 1;
                    } else {
                        echo $serviceNumber;                        
                        $serviceNumber = $serviceNumber + 1;                        
                    }?>
                </div>
            <div class="tags">    
            <?foreach ($arItem['PROPERTIES']['TAGS']['VALUE'] as $TagValue) {?>
                <div class="tag">
                    <?echo $TagValue;?>
                </div>     
            <?}?>
            </div>
            </div>
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
                        class="preview_picture"
                        border="0"
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                        height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                        style="float:left"
                        /></a>
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
                <span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
                <?endif?>

            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <div class="title-bottom"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></div>
                    <?else:?>
                    <h2 class='title-bottom'><?echo $arItem["NAME"]?></h2>
                    <?endif;?>
                <?endif;?>

            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <div class="description-top"><?echo $arItem["PREVIEW_TEXT"];?></div>
                <?endif;?>

            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <div style="clear:both"></div>
                <?endif?>

            <?foreach($arItem["FIELDS"] as $code=>$value):?>
                <?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
                <br />
                <?endforeach;?>
            <div class="description-top">
            <?foreach($arItem['PROPERTIES']['PREVIEW']['VALUE'] as $arPreview):?>
                <?if(!empty($arPreview)){?>
                    <?=$arPreview?>
                    <?}?>                                       
                <?endforeach;?>
             </div>
            <div class="description-bottom">
            <?if (true/*$arItem["DETAIL_PAGE_URL"] && $arItem["DETAIL_TEXT"]*/) {?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="more">
                    Узнать больше
                </a>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="plus-more">

                </a>                 
            <?}?>
            </div>
        </div>
        <?endforeach;?>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?endif;?>
</div>