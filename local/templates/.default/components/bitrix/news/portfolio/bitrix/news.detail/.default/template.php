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

<?if(isset($arResult["PROPERTIES"]["PROJECT_NAME"]) && isset($arResult["PROPERTIES"]["DESCRIPTION"])){?>
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

<?if(isset($arResult["PROPERTIES"]["PRICE"]) && isset($arResult["PROPERTIES"]["HOURS_SPENT"])){?>
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

<?if(isset($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"])){?>
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

<?if(isset($arResult["PROPERTIES"]["SOLUTIONS"])){?>
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

<?if(isset($arResult["PROPERTIES"]["EPILOG"])){?>
<div class="portfolio-block">
    <p><?=$arResult["PROPERTIES"]["EPILOG"]["VALUE"]?></p>     
</div>
<?}?>  

