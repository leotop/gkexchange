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

<?$block_id = 0; ?>


<?if(is_array($arResult["PROPERTIES"]["PROJECT_NAME"]) && count($arResult["PROPERTIES"]["PROJECT_NAME"]) > 0){?>
<div class="portfolio-block"> 
    
    <?$block_id = $block_id + 1;        
    if ($block_id < 10){
        $block_id_str = '0'.strval($block_id);
    } else {
        $block_id_str = strval($block_id);    
    };
    ?>
    
    <span class="block-id">
        <?=$block_id_str?>
    </span>
    
    <h2 class="h2">
        <?=$arResult["PROPERTIES"]["PROJECT_NAME"]["VALUE"]?>
    </h2>

    <?foreach ($arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arVal):?>
        <p><?=$arVal?></p>
    <?endforeach;?>
</div>
<?}?>

<?if((is_array($arResult["PROPERTIES"]["PRICE"]["VALUE"])
    && count($arResult["PROPERTIES"]["PRICE"]["VALUE"]) > 0)
    && (is_array($arResult["PROPERTIES"]["HOURS_SPENT"]["VALUE"])
    && count($arResult["PROPERTIES"]["HOURS_SPENT"]["VALUE"]) > 0)) 
{?>
<div class="portfolio-block">
    
    <?$block_id = $block_id + 1;        
    if ($block_id < 10){
        $block_id_str = '0'.strval($block_id);
    } else {
        $block_id_str = strval($block_id);    
    };
    ?>
    
    <span class="block-id">
        <?=$block_id_str?>
    </span> 
    <h2 class="h2">
        <?=GetMessage("SOME_STATISTIC");?>
    </h2>

    <div class='properties-block'>
        <div class='properties-block-value'>
            <?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> <span class="rubznak">c</span>            
        </div> 
        <div class='properties-block-name'>
            <?=GetMessage("INTEGRATION_COST");?>          
        </div>
    </div> 
    <div class='properties-block'>
        <div class='properties-block-value'>
            <?=$arResult["PROPERTIES"]["HOURS_SPENT"]["VALUE"]?>           
        </div>
        <div class='properties-block-name'>
            <?=GetMessage("HOURS_SPENT");?>                      
        </div> 
    </div>
</div>
<?}?>

<?if(is_array($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"]["VALUE"]) && count($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"]["VALUE"]) > 0){?>
<div class="portfolio-block">

    <?$block_id = $block_id + 1;        
    if ($block_id < 10){
        $block_id_str = '0'.strval($block_id);
    }
    else {
        $block_id_str = strval($block_id);    
    };
    ?>
    
    <span class="block-id">
        <?=$block_id_str?>
    </span> 

    <h2 class="h2">
        <?=GetMessage('INTEGRABLE_PRODUCTS');?>
    </h2>
    
    <?foreach ($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"]["VALUE"] as $arVal):?>
        <div class='portfolio-list'>
            <div class='portfolio-list-circle'></div>
            <?=$arVal?>
        </div>
    <?endforeach?>
     
</div>
<?}?>

<?if(is_array($arResult["PROPERTIES"]["SOLUTIONS"]["VALUE"]) && count($arResult["PROPERTIES"]["SOLUTIONS"]["VALUE"]) > 0){?>
<div class="portfolio-block">

    <?$block_id = $block_id + 1;        
    if ($block_id < 10){
        $block_id_str = '0'.strval($block_id);
    }
    else {
        $block_id_str = strval($block_id);    
    };
    ?>
    
    <span class="block-id">
        <?=$block_id_str?>
    </span>
     
    <h2 class="h2">
        <?=GetMessage('SOLUTIONS');?>  
    </h2>
    <?foreach ($arResult["PROPERTIES"]["SOLUTIONS"]["VALUE"] as $arVal):?>
        <div class='portfolio-list'>
            <div class='portfolio-list-circle'></div>
            <?=$arVal?>
        </div>
    <?endforeach?>  
</div>
<?}?>

<?if(is_array($arResult["PROPERTIES"]["EPILOG"]["VALUE"]) && count($arResult["PROPERTIES"]["EPILOG"]["VALUE"]) > 0){?>
<div class="portfolio-block">
    <p><?=$arResult["PROPERTIES"]["EPILOG"]["VALUE"]?></p>     
</div>
<?}?>  

