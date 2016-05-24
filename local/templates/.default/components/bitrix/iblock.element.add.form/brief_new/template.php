<?
    if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
    $this->setFrameMode(false);
   
?>
<h2 class="h2"><?=GetMessage("FILL_BRIEF")?></h2>

<p style="padding-right: 0">
    <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/brief_description.php", Array(),Array("MODE"=>"html"));?>
</p>

<?if ($arResult["FILE_LOAD_SUCCESS"] == "Y") {?>
 <p class="brief_load_success"><?=GetMessage("BRIEF_FILE_LOAD_SUCCESS")?></p>
<?}?>

<a href="/upload/brief.doc" class="button4"><?=GetMessage("DOWNLOAD_BRIEF")?></a>     
<a href="#!" onclick="show_popup(2)" class="button5" title="<?=GetMessage("LOAD_BRIEF")?>"><?=GetMessage("IBLOCK_FORM_SUBMIT")?></a>

<?if (!empty($arResult["ERRORS"])):?>
    <?ShowError(implode("<br />", $arResult["ERRORS"]))?>
    <?endif;
    if (strlen($arResult["MESSAGE"]) > 0):?>
    <?ShowNote($arResult["MESSAGE"])?>
    <?endif?>  

<div class="about-company">
    <form name="brief_add" action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" id="brief_add">

        <?if (is_array($arResult["PROPERTY_LIST"]) && !empty($arResult["PROPERTY_LIST"])):?>

            <?foreach ($arResult["PROPERTY_LIST"] as $propertyID):?>

                <?
                    if ($propertyID == "NAME") {
                        $arResult["PROPERTY_LIST_FULL"][$propertyID]["CODE"] = "NAME";
                    }

                    $prop_code = $arResult["PROPERTY_LIST_FULL"][$propertyID]["CODE"];
                    
                    if ($arResult["BLOCK_NAMES"][$prop_code]) {
                        if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["CODE"] != "NAME") {                        
                            echo "</div>";
                        }
                    ?>
                    <div class="title"><?=$arResult["BLOCK_NAMES"][$prop_code]?></div><div>
                    <?}?>  

                <div class="field">
                    <span class="label">
                        <?if (intval($propertyID) > 0):?>
                            <?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"]?>
                            <?else:?>
                            <?=!empty($arParams["CUSTOM_TITLE_".$propertyID]) ? $arParams["CUSTOM_TITLE_".$propertyID] : GetMessage("IBLOCK_FIELD_".$propertyID)?>
                            <?endif?>
                        <?if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])):?>
                            <span class="req">*</span>
                            <?endif?>
                    </span>

                    <?
                        if (intval($propertyID) > 0)
                        {
                            if (
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "T"
                                &&
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] == "1"
                            )
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "S";
                            elseif (
                                (
                                    $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "S"
                                    ||
                                    $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "N"
                                )
                                &&
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] > "1"
                            )
                                $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "T";
                        }
                        elseif (($propertyID == "TAGS") && CModule::IncludeModule('search'))
                            $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "TAGS";

                        if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y")
                        {
                            $inputNum = ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) ? count($arResult["ELEMENT_PROPERTIES"][$propertyID]) : 0;
                            $inputNum += $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE_CNT"];
                        }
                        else
                        {
                            $inputNum = 1;
                        }

                        if($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"])
                            $INPUT_TYPE = "USER_TYPE";
                        else
                            $INPUT_TYPE = $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"];

                        switch ($INPUT_TYPE):
                        case "USER_TYPE":
                            for ($i = 0; $i<$inputNum; $i++)
                            {
                                if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                {
                                    $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["~VALUE"] : $arResult["ELEMENT"][$propertyID];
                                    $description = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["DESCRIPTION"] : "";
                                }
                                elseif ($i == 0)
                                {
                                    $value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
                                    $description = "";
                                }
                                else
                                {
                                    $value = "";
                                    $description = "";
                                }
                                echo call_user_func_array($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"],
                                    array(
                                        $arResult["PROPERTY_LIST_FULL"][$propertyID],
                                        array(
                                            "VALUE" => $value,
                                            "DESCRIPTION" => $description,
                                        ),
                                        array(
                                            "VALUE" => "PROPERTY[".$propertyID."][".$i."][VALUE]",
                                            "DESCRIPTION" => "PROPERTY[".$propertyID."][".$i."][DESCRIPTION]",
                                            "FORM_NAME"=>"iblock_add",
                                        ),
                                ));
                            ?><br /><?
                            }
                            break;                       

                        case "T":
                            for ($i = 0; $i<$inputNum; $i++)
                            {

                                if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                {
                                    $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                                }
                                elseif ($i == 0)
                                {
                                    $value = intval($propertyID) > 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
                                }
                                else
                                {
                                    $value = "";
                                }
                            ?>
                            <textarea class="textarea <?if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])){?>req<?}?>" cols="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>" rows="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"]?>" name="PROPERTY[<?=$propertyID?>][<?=$i?>]"><?=$value?></textarea>
                            <?
                            }
                            break;

                        case "S":
                        case "N":
                            for ($i = 0; $i<$inputNum; $i++)
                            {
                                if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                {
                                    $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                                }
                                elseif ($i == 0)
                                {
                                    $value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];

                                }
                                else
                                {
                                    $value = "";
                                }
                            ?>
                            <input type="text" data-code="<?=$prop_code?>" class="input <?if(in_array($propertyID, $arResult["PROPERTY_REQUIRED"])){?>req<?}?>" name="PROPERTY[<?=$propertyID?>][<?=$i?>]" size="25" value="<?=$value?>" />
                            <?
                            }
                            break;

                        case "F":
                            for ($i = 0; $i<$inputNum; $i++)
                            {
                                $value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] : $arResult["ELEMENT"][$propertyID];
                            ?>
                            <input type="hidden" name="PROPERTY[<?=$propertyID?>][<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>]" value="<?=$value?>" />
                            <input type="file" size="<?=$arResult["PROPERTY_LIST_FULL"][$propertyID]["COL_COUNT"]?>"  name="PROPERTY_FILE_<?=$propertyID?>_<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>" />
                            <?

                                if (!empty($value) && is_array($arResult["ELEMENT_FILES"][$value]))
                                {
                                ?>
                                <input type="checkbox" name="DELETE_FILE[<?=$propertyID?>][<?=$arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE_ID"] : $i?>]" id="file_delete_<?=$propertyID?>_<?=$i?>" value="Y" /><label for="file_delete_<?=$propertyID?>_<?=$i?>"><?=GetMessage("IBLOCK_FORM_FILE_DELETE")?></label><br />
                                <?

                                    if ($arResult["ELEMENT_FILES"][$value]["IS_IMAGE"])
                                    {
                                    ?>
                                    <img src="<?=$arResult["ELEMENT_FILES"][$value]["SRC"]?>" height="<?=$arResult["ELEMENT_FILES"][$value]["HEIGHT"]?>" width="<?=$arResult["ELEMENT_FILES"][$value]["WIDTH"]?>" border="0" /><br />
                                    <?
                                    }
                                    else
                                    {
                                    ?>
                                    <?=GetMessage("IBLOCK_FORM_FILE_NAME")?>: <?=$arResult["ELEMENT_FILES"][$value]["ORIGINAL_NAME"]?><br />
                                    <?=GetMessage("IBLOCK_FORM_FILE_SIZE")?>: <?=$arResult["ELEMENT_FILES"][$value]["FILE_SIZE"]?> b<br />
                                    [<a href="<?=$arResult["ELEMENT_FILES"][$value]["SRC"]?>"><?=GetMessage("IBLOCK_FORM_FILE_DOWNLOAD")?></a>]<br />
                                    <?
                                    }
                                }
                            }

                            break;
                        case "L":

                            if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["LIST_TYPE"] == "C")
                                $type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "checkbox" : "radio";
                            else
                                $type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "multiselect" : "dropdown";

                            switch ($type):
                            case "checkbox":
                            case "radio":
                            ?>
                            <div class="radio-group">
                                <?
                                    foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum)
                                    {
                                        $checked = false;
                                        if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
                                        {
                                            if (is_array($arResult["ELEMENT_PROPERTIES"][$propertyID]))
                                            {
                                                foreach ($arResult["ELEMENT_PROPERTIES"][$propertyID] as $arElEnum)
                                                {
                                                    if ($arElEnum["VALUE"] == $key)
                                                    {
                                                        $checked = true;
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                        else
                                        {
                                            if ($arEnum["DEF"] == "Y") $checked = true;
                                        }

                                    ?>
                                    <input type="<?=$type?>" class="<?=$type == "radio" ? "radio" : ""?>" name="PROPERTY[<?=$propertyID?>]<?=$type == "checkbox" ? "[".$key."]" : ""?>" value="<?=$key?>" id="property_<?=$key?>"<?=$checked ? " checked=\"checked\"" : ""?> />
                                    <label for="property_<?=$key?>"><?=$arEnum["VALUE"]?></label>
                                    <?}?>
                            </div>
                            <?
                                break;                              

                                endswitch;
                            break;
                            endswitch;?>
                </div>
                <?endforeach;?>


            <?endif?>

        <div class="bottom">
            <span class="text"><?=GetMessage("WARNING")?></span>   
            <button type="reset" class="button7"><?=GetMessage("CLEAR")?></button>
            <input type="submit" class="button8" name="iblock_submit" value="<?=GetMessage("SEND")?>">
        </div> 

        <?=bitrix_sessid_post()?>
        <?if ($arParams["MAX_FILE_SIZE"] > 0):?><input type="hidden" name="MAX_FILE_SIZE" value="<?=$arParams["MAX_FILE_SIZE"]?>" /><?endif?>

    </form>
</div>

