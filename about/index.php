<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "GK/� ���");
$APPLICATION->SetPageProperty("page_title_top", "������ �� ����� ����������� � ����������");
$APPLICATION->SetPageProperty("page_title", "������ �� ����� ����������� � ����������");
$APPLICATION->SetPageProperty("description", "���������� 1� � 1�-������� � ��� ������� ��� ������ ����! ���������� 1� � 1�-������� �� �������������� � �������� ���� ����� ����� ������!");
$APPLICATION->SetTitle("GK/� ���");
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
                    <div class="m1 active"><a href="/vygruzka-dannyh-iz-excel-v-1c/">�������� � �������� ������ �� excel � 1�</a></div>
                    <div class="m1"><a href="/vygruzka-iz-excel-v-bitrix/">�������� � �������� ������ � 1�-������</a></div>
                    <div class="m1"><a href="/integratsiya-1c-cherez-api/">���������� 1� ����� API</a></div>
                    <div class="m1"><a href="/integratsiya-bitrix-cherez-api/">���������� 1�-������� ����� API</a></div>
                    <div class="m1"><a href="/integratsiya-1c-i-bitrix24/ ">���������� 1� � �������24</a></div>
                    <div class="m1"><a href="/integratsiya-internet-magazina-i-bitrix24/ "> ���������� ��������-�������� � �������24</a></div>
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