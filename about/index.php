<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title-top", "� �������� � Gkexchange");
$APPLICATION->SetPageProperty("keywords", "GKexchange,  ���������� 1�-�������,  1�, API, ��������-�������, ���������");
        $APPLICATION->SetPageProperty("page_title_top", "������ �� ����� ����������� � ���������� 1C � 1�-�������");
    $APPLICATION->SetPageProperty("page_title", "������ �� ����� ����������� � ���������� 1C � 1�-�������");
    $APPLICATION->SetPageProperty("description", "���������� �� �������� GKexchange ��������� ���������� ��������-��������� � 1�");
    $APPLICATION->SetTitle("GKexchange - � �������� � ���������� 1� � ������ � ��������-��������� �� �������");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_DIR."include/about.php",
    "EDIT_TEMPLATE" => ""
    )
    );?>
                

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>