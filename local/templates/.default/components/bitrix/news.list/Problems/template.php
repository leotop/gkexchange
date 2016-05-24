<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

<div class="problems">
    <ul>
        <?$i=0; 
        foreach($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], 
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], 
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), 
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            //id="<?=$this->GetEditAreaId($arItem['ID']);
            ?>
            <li id="<?=$this->GetEditAreaId($arItem['ID'])?>">
                <?if ($i==0) 
                    echo "<span>".$arItem['NAME']."</span>";
                  else
                    echo $arItem['NAME']; 
                  $i++;
                ?>
            </li>  
            <?//arshow($this)?>
        <?endforeach;?>
    </ul>
    <div class="dash"></div>
    <div class="and_others">и многое другое...</div>
</div>

<?endif?>
 
                