<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title-top", "���� �� ����������");
$APPLICATION->SetPageProperty("keywords", "����, �������, ������������, 1�-�������, ����������, GKexchange");
$APPLICATION->SetPageProperty("description", "��������� ���� ���  ����������  ��������-�������� �� 1�-������� � 1�");
$APPLICATION->SetTitle("GKexchange - ���� ��� ��������� ������������ �� ���������� 1� � 1�-�������");
$br = $_GET['brief'];
//arshow($br);
?>
<div class="top_menu_brief">
    <div class="top_menu_brief_inner_1">
        <a href="/brief/?brief=1C_brief" <?if ($br == null || $br == "1C_brief"){?>class="top_menu_brief_inner_hover"<?}?>>1� � 1�-�������</a>
    </div>
    <div class="top_menu_brief_inner_2">
        <a href="/brief/?brief=24brief" <?if ($br == "24brief"){?>class="top_menu_brief_inner_hover"<?}?>>1� � �������24</a>
    </div>
</div>
 <?if ($br == null || $br == "1C_brief"){$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form",
	"brief_new",
	Array(
		"COMPONENT_TEMPLATE" => "brief_new",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "��� � ��� ����������?",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(0=>"1",1=>"2",2=>"3",3=>"4",4=>"5",),
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "gkexchange",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(0=>"18",1=>"19",2=>"20",3=>"21",4=>"22",5=>"23",6=>"24",7=>"25",8=>"26",9=>"27",10=>"28",11=>"29",12=>"30",13=>"31",14=>"32",15=>"33",16=>"34",17=>"35",18=>"36",19=>"37",20=>"38",21=>"39",22=>"40",23=>"41",24=>"42",25=>"43",26=>"44",27=>"45",28=>"46",29=>"47",30=>"48",31=>"49",32=>"50",33=>"52",34=>"53",35=>"54",36=>"55",37=>"NAME",),
		"PROPERTY_CODES_REQUIRED" => array(0=>"52",1=>"53",2=>"54",3=>"55",4=>"NAME",),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "���� ������� ���������!",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N"
	)
);}else{$APPLICATION->IncludeComponent(
    "bitrix:iblock.element.add.form", 
    "brief_b24", 
    array(
        "COMPONENT_TEMPLATE" => "brief_b24",
        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
        "CUSTOM_TITLE_DETAIL_TEXT" => "",
        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
        "CUSTOM_TITLE_NAME" => "��� � ��� ����������?",
        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
        "CUSTOM_TITLE_TAGS" => "",
        "DEFAULT_INPUT_SIZE" => "30",
        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
        "ELEMENT_ASSOC" => "CREATED_BY",
        "GROUPS" => array(
            0 => "1",
            1 => "2",
            2 => "3",
            3 => "4",
            4 => "5",
        ),
        "IBLOCK_ID" => BRIEF_BITRIX24_BLOCK_ID,
        "IBLOCK_TYPE" => "gkexchange",
        "LEVEL_LAST" => "Y",
        "LIST_URL" => "",
        "MAX_FILE_SIZE" => "0",
        "MAX_LEVELS" => "100000",
        "MAX_USER_ENTRIES" => "100000",
        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
        "PROPERTY_CODES" => array(
            0 => "79",
            1 => "80",
            2 => "81",
            3 => "82",
            4 => "83",
            5 => "84",
            6 => "85",
            7 => "86",
            8 => "87",
            9 => "88",
            10 => "89",
            11 => "90",
            12 => "91",
            13 => "92",
            14 => "93",
            15 => "94",
            16 => "95",
            17 => "96",
            18 => "NAME",
        ),
        "PROPERTY_CODES_REQUIRED" => array(
            0 => "79",
            1 => "80",
            2 => "81",
            3 => "NAME",
        ),
        "RESIZE_IMAGES" => "N",
        "SEF_MODE" => "N",
        "STATUS" => "ANY",
        "STATUS_NEW" => "N",
        "USER_MESSAGE_ADD" => "���� ������� ���������!",
        "USER_MESSAGE_EDIT" => "",
        "USE_CAPTCHA" => "N"
    ),
    false
);}?><br>
 <br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>