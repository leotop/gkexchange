<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "GK/О нас");
$APPLICATION->SetPageProperty("page_title_top", "Почему мы круто разбираемся в интеграции");
$APPLICATION->SetPageProperty("page_title", "Почему мы круто разбираемся в интеграции");
$APPLICATION->SetPageProperty("description", "Интеграция 1С и 1С-Битрикс – наш профиль уже долгие годы! Интеграция 1С и 1С-Битрикс от профессионалов – сделайте свой выбор прямо сейчас!");
$APPLICATION->SetTitle("GK/О нас");
?>

<div>
    <div class="wrap">
        <div class="zagolovok">     
        <span><?$APPLICATION->ShowProperty("page_title_top");?></span>
        </div>
        <div class="line"></div>
        <div class="obr">

            <div class="menu">
                <?/*
                    <div class="m1 active"><a href="/vygruzka-dannyh-iz-excel-v-1c/">Выгрузка и загрузка данных из excel в 1С</a></div>
                    <div class="m1"><a href="/vygruzka-iz-excel-v-bitrix/">Выгрузка и загрузка данных в 1С-Битркс</a></div>
                    <div class="m1"><a href="/integratsiya-1c-cherez-api/">Интеграция 1С через API</a></div>
                    <div class="m1"><a href="/integratsiya-bitrix-cherez-api/">Интеграция 1С-Битрикс через API</a></div>
                    <div class="m1"><a href="/integratsiya-1c-i-bitrix24/ ">Интеграция 1С и Битрикс24</a></div>
                    <div class="m1"><a href="/integratsiya-internet-magazina-i-bitrix24/ "> Интеграция интернет-магазина и Битрикс24</a></div>
                    <div class="kybiki"><img src="/i/kybiki.png" alt=""></div>
                */?>
            </div>




            <div class="content">
            <h1><?$APPLICATION->ShowProperty("page_title");?></h1>
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR."include/about.php",
                        "EDIT_TEMPLATE" => ""
                        )
                    );?>
                <div class="line_2"></div>
                <div class="consult_pages" onclick="show_popup(1);yaCounter23705659.reachGoal('ORDER6'); return true;">заказать</div>
                <?//всплывающее окно 9?>
                <div id="p9" class="popup">

                    <div class="success">Ваша заявка приянята!</div>
                    <div class="button" onclick="popup_close(this)"></div>

                </div>

                <?//всплывающее окно 1?>
                <?// include([$_SERVER["DOCUMENT_ROOT"]]."/include/offerform.php")?>
                <?///////////////////////////?>



            </div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>