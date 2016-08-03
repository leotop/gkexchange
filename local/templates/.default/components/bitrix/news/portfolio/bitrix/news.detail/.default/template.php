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
<?if(!empty($arResult["PROPERTIES"]["PROJECT_NAME"]["VALUE"]) 
    && (!empty($arResult["DETAIL_TEXT"]) || is_array($arResult["PROPERTIES"]["DESCRIPTION"]["VALUE"]["TEXT"]))){?>
<div>    
    <div class="portfolio-block"> 
        
        <div class="block-id">
            <?
                $block_id = increase_block_id($block_id);
                echo $block_id;
            ?>
        </div>
        
        <h2 class="h2">
            <?=$arResult["PROPERTIES"]["PROJECT_NAME"]["VALUE"]?>
        </h2>

        <?if (is_array($arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"])){
            foreach ($arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"] as $arVal){?>
                <div class="description"><?=$arVal["TEXT"];?></div>
            <?}    
        } else {
            echo $arResult["DETAIL_TEXT"];            
        }?>
        
    </div>
    <?}?>

    <?if(!empty($arResult["PROPERTIES"]["PRICE"]["VALUE"]) && !empty($arResult["PROPERTIES"]["HOURS_SPENT"]["VALUE"])){?>
    <div class="portfolio-block">
        
       
        <div class="block-id">
            <?
                $block_id = increase_block_id($block_id);
                echo $block_id;
            ?>
        </div> 
        <h2 class="h2">
            <?=GetMessage("SOME_STATISTIC");?>
        </h2>
        <div class = 'rectangle-block'>
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
        <?if(!empty($arResult["PROPERTIES"]["PRODUCTS_COUNT"]["VALUE"]) && !empty($arResult["PROPERTIES"]["TRADE_OFFERS_COUNT"]["VALUE"])){?>
            <div class = 'rectangle-block'>   
                <div>
                    <div class='properties-block'>
                        <div class='properties-block-value'>
                            <?=$arResult["PROPERTIES"]["PRODUCTS_COUNT"]["VALUE"]?>            
                        </div> 
                        <div class='properties-block-name'>
                            <?=GetMessage("PRODUCTS_COUNT");?>          
                        </div>
                    </div> 
                    <div class='properties-block'>
                        <div class='properties-block-value'>
                            <?=$arResult["PROPERTIES"]["TRADE_OFFERS_COUNT"]["VALUE"]?>           
                        </div>
                        <div class='properties-block-name'>
                            <?=GetMessage("TRADE_OFFERS_COUNT");?>                      
                        </div> 
                    </div>
                </div>
            </div>
        <?}?>
    </div>
    <?}?>

    <?if(is_array($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"]["~VALUE"]) && count($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"]["~VALUE"]) > 0){?>
    <div class="portfolio-block">

        <div class="block-id">
            <?
                $block_id = increase_block_id($block_id);
                echo $block_id;
            ?>
        </div> 

        <h2 class="h2">
            <?=GetMessage('INTEGRABLE_PRODUCTS');?>
        </h2>
        <div>
        <?foreach ($arResult["PROPERTIES"]["INTEGRABLE_PRODUCTS"]["~VALUE"] as $arVal):?>
            <div class='portfolio-list'>
                <div class='portfolio-list-circle'></div>
                <?=$arVal?>
            </div>
        <?endforeach?>
        </div> 
    </div>
    <?}?>

    <?if(is_array($arResult["PROPERTIES"]["SOLUTIONS"]["~VALUE"]) && count($arResult["PROPERTIES"]["SOLUTIONS"]["~VALUE"]) > 0){?>
    <div class="portfolio-block">

        <div class="block-id">
            <?
                $block_id = increase_block_id($block_id);
                echo $block_id;
            ?>
        </div>
         
        <h2 class="h2">
            <?=GetMessage('SOLUTIONS');?>  
        </h2>
        <div>
        <?foreach ($arResult["PROPERTIES"]["SOLUTIONS"]["~VALUE"] as $arVal):?>
            <div class='portfolio-list'>
                <div class='portfolio-list-circle'></div>
                <?=$arVal?>
            </div>
        <?endforeach?>
        </div>  
    </div>
    <?}?>

    <?if(!empty($arResult["PROPERTIES"]["EPILOG"]["~VALUE"])){?>
    <div class="portfolio-block">
        <?foreach ($arResult["PROPERTIES"]["EPILOG"]["~VALUE"] as $arVal){?>
            <div class="description"><?=$arVal["TEXT"];?></div>
        <?}?>
    </div>
    <?}?>
</div>