<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "���������� 1�-������� � 1�, ���������� 1� � 1�-�������, ���������� 1�,  ���������� 1�-�������, ���������� �����, ���������� 1� � �������24");
    $APPLICATION->SetPageProperty("title", "� ��������");
    $APPLICATION->SetPageProperty("page_title_top", "������ �� ����� ����������� � ���������� 1C � 1�-�������");
    $APPLICATION->SetPageProperty("page_title", "������ �� ����� ����������� � ���������� 1C � 1�-�������");
    $APPLICATION->SetPageProperty("description", "���������� 1� � 1�-������� � ��� ������� ��� ������ ����! ���������� 1� � 1�-������� �� �������������� � �������� ���� ����� ����� ������!");
    $APPLICATION->SetTitle("� ��������");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
    "AREA_FILE_SHOW" => "file",
    "PATH" => SITE_DIR."include/about.php",
    "EDIT_TEMPLATE" => ""
    )
    );?>
                

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>