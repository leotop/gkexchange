<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title-top", "О компании – Gkexchange");
$APPLICATION->SetPageProperty("keywords", "GKexchange,  интеграция 1с-битрикс,  1с, API, интернет-магазин, настройка");
        $APPLICATION->SetPageProperty("page_title_top", "Почему мы круто разбираемся в интеграции 1C и 1С-Битрикс");
    $APPLICATION->SetPageProperty("page_title", "Почему мы круто разбираемся в интеграции 1C и 1С-Битрикс");
    $APPLICATION->SetPageProperty("description", "Информация об компании GKexchange настройка интеграции интернет-магазинов и 1С");
    $APPLICATION->SetTitle("GKexchange - о компании – интеграция 1С и сайтов и интернет-магазинов на Битрикс");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_DIR."include/about.php",
    "EDIT_TEMPLATE" => ""
    )
    );?>
                

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>