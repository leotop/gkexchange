<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "интеграция 1с-битрикс и 1с, интеграция 1с и 1с-битрикс, интеграция 1с,  интеграция 1с-битрикс, интеграция сайта, интеграция 1с и битрикс24");
    $APPLICATION->SetPageProperty("title", "О компании");
    $APPLICATION->SetPageProperty("page_title_top", "Почему мы круто разбираемся в интеграции 1C и 1С-Битрикс");
    $APPLICATION->SetPageProperty("page_title", "Почему мы круто разбираемся в интеграции 1C и 1С-Битрикс");
    $APPLICATION->SetPageProperty("description", "Интеграция 1С и 1С-Битрикс – наш профиль уже долгие годы! Интеграция 1С и 1С-Битрикс от профессионалов – сделайте свой выбор прямо сейчас!");
    $APPLICATION->SetTitle("О компании");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_DIR."include/about.php",
    "EDIT_TEMPLATE" => ""
    )
    );?>
                

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>