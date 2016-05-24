<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    //delayed function must return a string
    if(empty($arResult))
        return "";
   
    if($arResult[count($arResult)-1]["LINK"]!="" && $arResult[count($arResult)-1]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
        $arResult[] = Array("TITLE"=>$GLOBALS["APPLICATION"]->GetTitle());

        $strReturn = '<div class="nav_chain_container">';
        
    for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
    {
        if ($index > 0 && $index < (count($arResult) - 1)) {
            $strReturn .= '<span class="nav-arrow arrow-right"></span>';
        } else if ($index > 0) {
            $strReturn .= '<span class="nav-arrow arrow-down"></span>';
        }

        $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
        if($arResult[$index]["LINK"] <> "" && $arResult[$index]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
            $strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a>';
        else
            $strReturn .= '<span>'.$title.'</span>';
    }

    $strReturn .= '</div>';
    return $strReturn;
?>
