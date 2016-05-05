<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Интеграция Битрикс24 и интернет-магазина – если Вам нужна интеграция Битрикс 24 с интернет магазином, мы ждём");
$APPLICATION->SetPageProperty("keywords", "интеграция интернет-магазина и битрикс24, интеграция битрикс24 и интернет магазина, интеграция битрикс24, нужна интеграция битрикс24 с интернет магазином");
$APPLICATION->SetPageProperty("description", "Интеграция Битрикс24 и интернет-магазина от профессионалов. Если Вам нужна интеграция Битрикс 24 с интернет магазином, мы ждём Вас на нашем сайте.");
$APPLICATION->SetTitle("Интеграция Битрикс24 и интернет-магазина – если Вам нужна интеграция Битрикс 24 с интернет магазином, мы ждём");
?>

<div >
<div class="wrap">
    <div class="zagolovok"><?$APPLICATION->IncludeFile(SITE_DIR."include/zagolovok_integratsiya-internet-magazina-i-bitrix24.php", Array(),Array("MODE"=>"html"));?></div>
    <div class="line"></div>
    <div class="obr">
        <div class="menu">
           <div class="m1 active"><a href="/vygruzka-dannyh-iz-excel-v-1c/">Выгрузка и загрузка данных из excel в 1С</a></div>
            <div class="m1"><a href="/vygruzka-iz-excel-v-bitrix/">Выгрузка и загрузка данных в 1С-Битркс</a></div>
            <div class="m1"><a href="/integratsiya-1c-cherez-api/">Интеграция 1С через API</a></div>
            <div class="m1"><a href="/integratsiya-bitrix-cherez-api/">Интеграция 1С-Битрикс через API</a></div>
            <div class="m1"><a href="/integratsiya-1c-i-bitrix24/ ">Интеграция 1С и Битрикс24</a></div>
            <div class="m1"><a href="/integratsiya-internet-magazina-i-bitrix24/ "> Интеграция интернет-магазина и Битрикс24</a></div>
             <div class="kybiki"><img src="/i/kybiki.png" alt=""></div>
        </div>
        
        
         
        <div class="content">
       <?$APPLICATION->IncludeFile(SITE_DIR."include/content_integratsiya-internet-magazina-i-bitrix24.php", Array(),Array("MODE"=>"html"));?>
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