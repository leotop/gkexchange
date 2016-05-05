<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "выгрузка данных из ексeль в 1с, из эксель в 1с, 1с загрузка данных из excel,  1с загрузка данных из эксель, выгрузка в 1с из excel, выгрузка в 1с из эксель, выгрузка 1с xml, загрузка в 1с из excel, загрузка в 1с из эксель, загрузка excel файла в 1с, загрузка данных в 1с из excel, загрузка эксель файла в 1с, импорт из эксель в 1с");
$APPLICATION->SetPageProperty("title", "Загрузка в 1с из Excel – выгрузка (импорт) данных в 1с из Эксель файла");
$APPLICATION->SetPageProperty("keywords", "1с загрузка данных из excel, выгрузка 1с xml, выгрузка в 1с из excel, выгрузка в 1с из эксель, загрузка excel файла в 1с, загрузка в 1с из excel, загрузка в 1с из эксель, загрузка данных в 1с из excel, из эксель в 1с,  импорт из эксель в 1с");
$APPLICATION->SetPageProperty("description", "Загрузка в 1с из Excel ускорит обмен данными для Вашего бизнеса. Выгрузка (импорт) данных в 1с из Эксель файла от профессионалов.");
$APPLICATION->SetTitle("Загрузка в 1с из Excel – выгрузка (импорт) данных в 1с из Эксель файла ");
?> 
<div >
<div class="wrap">
    <div class="zagolovok"><?$APPLICATION->IncludeFile(SITE_DIR."include/zagolovok_vygruzka-dannyh-iz-excel-v-1c.php", Array(),Array("MODE"=>"html"));?></div>
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
       <?$APPLICATION->IncludeFile(SITE_DIR."include/content_vygruzka-dannyh-iz-excel-v-1c.php", Array(),Array("MODE"=>"html"));?>
        <div class="line_2"></div>
        <div class="consult_pages" onclick="show_popup(1); yaCounter23705659.reachGoal('ORDER6'); return true; ">заказать</div>      
 <?// <!--?>      <?//всплывающее окно 9?>
<div id="p9" class="popup">

    <div class="success">Ваша заявка приянята!</div>
    <div class="button" onclick="popup_close(this)"></div>

</div>

<?//всплывающее окно 1?>
<?//include([$_SERVER["DOCUMENT_ROOT"]]."/include/offerform.php")?>
<?///////////////////////////?>  <?// -->?>
    
    </div>
</div>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>