<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

<div class="icons_block">
    <div class="icons">
        <?$i=1; 
        foreach($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], 
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], 
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), 
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            //id="<?=$this->GetEditAreaId($arItem['ID']);
            ?>
            <div class="icon" id="i<?=$i?>">
                <?if (($i%2)!=0):?>
                    <img style="position:absolute; top:0; left:83px" class="arrow" id="s<?=$i?>" src="/i/icons/arrow_top.png" />   
                <?endif?>
                <div style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>')" class="icon_div"></div>   
                <?if ((($i%2)==0)&&($i!=count($arResult["ITEMS"]))):?>
                    <img style="position:absolute; bottom:0; left:83px" class="arrow" id="s<?=$i?>" src="/i/icons/arrow_bottom.png" />
                <?endif?>
                <div class="icon_name"><?=$arItem['NAME']?></div>
            </div>   
            <?$i++?>
        <?endforeach?>
    </div>
    <div class="dash"></div>

    <?$i=1;
    foreach($arResult["ITEMS"] as $arItem)
    {
        $str=$arItem['PREVIEW_TEXT'];
        $firstWord=strstr($str,' ',true);
        if ($firstWord)
        {
            $newFirstWord='<span>'.$firstWord.'</span>';
            $str=substr_replace($str,$newFirstWord,0,strlen($firstWord));  
        }
        else
            $str='<span>'.$str.'</span>';   
        echo "<div class='icon_desc' id='d".$i."'>".$str."</div>";
        $i++;
    }?>              
</div>                

<?endif?>