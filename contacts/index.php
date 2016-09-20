<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title-top", "Контакты");
$APPLICATION->SetPageProperty("title", "GKexchange  - контактная информация компании по интеграции 1с-Битрикс");
$APPLICATION->SetPageProperty("keywords", "контакты, адрес, телефон, GKexchange");
$APPLICATION->SetPageProperty("description", "Контакты: заказать интеграцию в компании GKexchange");
    $APPLICATION->SetTitle("GKexchange - контактная информация компании по интеграции 1С-Битрикс");
?>
    
    
<div class="contacts_wrapper js_page_with_map">
    <div class="contacts_line">
        <div class="contacts_type">Телефон</div>
        <div class="contacts_value">+7 (495) 215-16-53</div>
    </div>

    <div class="contacts_line">
        <div class="contacts_type">Адрес</div>
        <div class="contacts_value">г. Москва, Серебряническая наб., 29, стр. 4</div>
    </div>

    <div class="contacts_line">
        <div class="contacts_type">Почта</div>
        <div class="contacts_value"><a href="mailto:gk@gkexchange.ru">gk@gkexchange.ru</a></div>
    </div>   
    
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>