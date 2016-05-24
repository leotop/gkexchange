<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    foreach ($arResult["ITEMS"] as $i=>$arItem) {
        if (!empty($arItem["TAGS"])) {
           $tags = explode(",", $arItem["TAGS"]); 
           foreach ($tags as $tag) {
              $arResult["ITEMS"][$i]["ITEM_TAGS"][] = trim($tag); 
           }
        }
    }
?>