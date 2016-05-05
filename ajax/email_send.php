<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
    //передаваемые данные
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $text = $_POST["text"];

    //тема письма
    switch($_POST["theme_id"]) {
        //заявка на звонок
        case 0: $type=4; break;
            //предпроектное исследование
        case 1: $type=1; break;
            //бесплатная консультация специалиста
        case 2: $type=2; break;
            //консультация специалиста по 1С
        case 3: $type=3; break;
    }

    $el = new CIBlockElement;

    $PROP = array();
    $PROP["COMPANY"] = iconv('UTF-8','CP1251',$company);  
    $PROP["PHONE"] = iconv('UTF-8','CP1251',$phone);        
    $PROP["EMAIL"] = iconv('UTF-8','CP1251',$email); 
    $PROP["TYPE"] = $type;

    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 7,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => iconv('UTF-8','CP1251',$name),
        "ACTIVE"         => "Y",            // активен
        "DETAIL_TEXT"    => iconv('UTF-8','CP1251',$text),
    );

    if ( $el->Add($arLoadProductArray) ) {
        echo "add";
    }
    else {
        echo "notadd";    
    }

    $PROP["NAME"] = iconv('UTF-8','CP1251',$name);

    $property_enums = CIBlockPropertyEnum::GetList(Array(), Array("ID" => $type));
    $enum_fields = $property_enums->GetNext();

    $PROP["TYPE"] = $enum_fields["VALUE"];

    

    $message = "Имя: ".$arLoadProductArray["NAME"];
    $message .= "Тип: ".$arLoadProductArray["PROPERTY_VALUES"]["TYPE"];
    $message .= "Компания: ".$arLoadProductArray["PROPERTY_VALUES"]["COMPANY"];
    $message .= "Телефон: ".$arLoadProductArray["PROPERTY_VALUES"]["PHONE"];
    $message .= "Email: ".$arLoadProductArray["PROPERTY_VALUES"]["EMAIL"];
    $message .= "Комментарий: ".$arLoadProductArray["DETAIL_TEXT"];
    
    
    

    // На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
    //$message = wordwrap($message, 70);

    // Отправляем
    $headers  = "Content-type: text/html; charset=cp1251";
    //mail('gk@gkexchange.ru', 'Новая заявка на сайте', $message);
    
    $arrSITE =  's1';
    CEvent::Send("FORM_SUBMIT", $arrSITE, $PROP,'N');

?>