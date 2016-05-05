<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Выгрузка 1С-Битрикс – загрузка заказов и данных в 1с-Битрикс");
$APPLICATION->SetPageProperty("keywords", "выгрузка 1с-битрикс, выгрузка заказов в 1с-битрикс, загрузка данных в 1с-битрикс");
$APPLICATION->SetPageProperty("description", "Выгрузка 1С-Битрикс качественно и быстро. Загрузка заказов и данных в 1С-Битрикс – мы импортируем грамотно.");
$APPLICATION->SetTitle("Выгрузка 1С-Битрикс – загрузка заказов и данных в 1с-Битрикс");
?>

<div >
<div class="wrap">
    <div class="zagolovok"><?$APPLICATION->IncludeFile(SITE_DIR."include/zagolovok_vygruzka-iz-excel-v-bitrix.php", Array(),Array("MODE"=>"html"));?></div>
    <div class="line"></div>
    <div class="obr">
        <div class="menu">
           <div class="m1 active"><a href="/vygruzka-dannyh-iz-excel-v-1c/">Выгрузка и загрузка данных из excel в 1С</a></div>
            <div class="m1"><a href="/vygruzka-iz-excel-v-bitrix/">Выгрузка и загрузка данных в 1С-Битрикс</a></div>
            <div class="m1"><a href="/integratsiya-1c-cherez-api/">Интеграция 1С через API</a></div>
            <div class="m1"><a href="/integratsiya-bitrix-cherez-api/">Интеграция 1С-Битрикс через API</a></div>
            <div class="m1"><a href="/integratsiya-1c-i-bitrix24/ ">Интеграция 1С и Битрикс24</a></div>
            <div class="m1"><a href="/integratsiya-internet-magazina-i-bitrix24/ "> Интеграция интернет-магазина и Битрикс24</a></div>
            <div class="kybiki"><img src="/i/kybiki.png" alt=""></div>
        </div>
        
         
         
        <div class="content">
       <?$APPLICATION->IncludeFile(SITE_DIR."include/content_vygruzka-iz-excel-v-bitrix.php", Array(),Array("MODE"=>"html"));?>
        <div class="line_2"></div>
        <div class="consult_pages" onclick="show_popup(1);yaCounter23705659.reachGoal('ORDER6'); return true;">заказать</div>
        <?//всплывающее окно 9?>
<div id="p9" class="popup">

    <div class="success">Ваша заявка приянята!</div>
    <div class="button" onclick="popup_close(this)"></div>

</div>

<?//всплывающее окно 1?>
<?//include([$_SERVER["DOCUMENT_ROOT"]]."/include/offerform.php")?>
<?///////////////////////////?>       
                   
    </div>
</div>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>