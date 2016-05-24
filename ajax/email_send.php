<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
    $available_iblocks = array(7, 10, 12); //инфоблоки, доступные для добавления елементов

    //передаваемые данные
    $name = iconv('UTF-8','CP1251',$_POST["NAME"]);
    $phone = $_POST["PHONE"];
    $company = iconv('UTF-8','CP1251',$_POST["COMPANY"]) ;
    $email = $_POST["EMAIL"];
    $text = iconv('UTF-8','CP1251',$_POST["TEXT"]); 
    $iblock_id = intval($_POST["IBLOCK_ID"]);
    
    if (!in_array($iblock_id, $available_iblocks)) {
       echo "notadd";
       die(); 
    }
                        
    $el = new CIBlockElement;

    $PROP = array();
    $PROP["COMPANY"] = $company;  
    $PROP["PHONE"] = $phone;        
    $PROP["EMAIL"] = $email;         

    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,        
        "IBLOCK_ID"      => $iblock_id,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $name,
        "ACTIVE"         => "Y",          
        "DETAIL_TEXT"    => $text,
    );
    
    if ($el->Add($arLoadProductArray) ) {
        echo "OK";
    } else {
        echo "ERROR";    
    }    
    
    //d зависимости от инфоблока выбираем нужный тип почтового события
    switch ($iblock_id) {
        case 7: $event_type = "FORM_SUBMIT"; break;
        case 10: $event_type = "OFFER_SUBMIT"; break; 
    }
    
    //добавляем поля для письма
    $PROP["NAME"] = $name;   
    $PROP["TEXT"] = $text;
    
    $arrSITE =  's1';
    CEvent::Send($event_type, $arrSITE, $PROP,'N');

?>