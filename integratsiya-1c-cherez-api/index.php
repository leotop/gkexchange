<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "���������� 1� ����� api, api ��� ���������� 1�");
$APPLICATION->SetPageProperty("description", "API ��� ���������� 1� � ��� ������� ��� ������ ����! ���������� 1� ����� API �� �������������� � �������� ���� ����� ����� ������!");
$APPLICATION->SetTitle(" ���������� 1� ����� API");
?>

<div>
<div class="wrap">
    <div class="zagolovok"><?$APPLICATION->IncludeFile(SITE_DIR."include/zagolovok_integratsiya-1c-cherez-api.php", Array(),Array("MODE"=>"html"));?></div>
    <div class="line"></div>
    <div class="obr">
        <div class="menu">
            <div class="m1 active"><a href="/vygruzka-dannyh-iz-excel-v-1c/">�������� � �������� ������ �� excel � 1�</a></div>
            <div class="m1"><a href="/vygruzka-iz-excel-v-bitrix/">�������� � �������� ������ � 1�-������</a></div>
            <div class="m1"><a href="/integratsiya-1c-cherez-api/">���������� 1� ����� API</a></div>
            <div class="m1"><a href="/integratsiya-bitrix-cherez-api/">���������� 1�-������� ����� API</a></div>
            <div class="m1"><a href="/integratsiya-1c-i-bitrix24/ ">���������� 1� � �������24</a></div>
            <div class="m1"><a href="/integratsiya-internet-magazina-i-bitrix24/ "> ���������� ��������-�������� � �������24</a></div>
             <div class="kybiki"><img src="/i/kybiki.png" alt=""></div>
        </div>
        
        
         
        <div class="content">
      <?$APPLICATION->IncludeFile(SITE_DIR."include/content_integratsiya-1c-cherez-api.php", Array(),Array("MODE"=>"html"));?>
        <div class="line_2"></div>
        <div class="consult_pages" onclick="show_popup(1);yaCounter23705659.reachGoal('ORDER6'); return true;">��������</div>
        <?//����������� ���� 9?>
<div id="p9" class="popup">

    <div class="success">���� ������ ��������!</div>
    <div class="button" onclick="popup_close(this)"></div>

</div>

<?//����������� ���� 1?>
<?// include([$_SERVER["DOCUMENT_ROOT"]]."/include/offerform.php")?>
<?///////////////////////////?>
    
    
    
    </div>
</div>
</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>