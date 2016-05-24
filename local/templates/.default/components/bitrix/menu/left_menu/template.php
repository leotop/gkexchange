<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)) {?>
    <div id="nav">   
        <?foreach($arResult as $arItem) {?>
            <?if($arItem["SELECTED"]) {?>
                <div class="nav_block active">
                    <a href="<?=$arItem["LINK"]?>" class="block_name"><?=$arItem["TEXT"]?></a>
                </div>
                <?} else {?>
                <div class="nav_block">
                    <a href="<?=$arItem["LINK"]?>" class="block_name"><?=$arItem["TEXT"]?></a>
                </div>
                <?}?>     
            <?}?>    
    </div>
<?}?>