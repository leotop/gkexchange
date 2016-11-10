<? 
    $NewTitle = $arResult["PROPERTIES"]["PROJECT_NAME"]["VALUE"]; 
    $NewTitle = mb_strtolower($NewTitle);   
    $NewTitle = preg_replace("/магазин/", "магазина", $NewTitle);
    $NewTitle = 'Интеграция '.$NewTitle;                          
    $APPLICATION->SetPageProperty("title-top", $NewTitle);
?>