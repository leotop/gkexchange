<? 
    $NewTitle = $arResult["PROPERTIES"]["PROJECT_NAME"]["VALUE"]; 
    $NewTitle = mb_strtolower($NewTitle);   
    $NewTitle = preg_replace("/�������/", "��������", $NewTitle);
    $NewTitle = '���������� '.$NewTitle;                          
    $APPLICATION->SetPageProperty("title-top", $NewTitle);
?>