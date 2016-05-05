<?require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");?>
<?
    if ($_POST["name"] && $_POST["email"]){

        $el = new CIBlockElement;

        $PROP = array();                   
        $PROP["EMAIL"] = $_POST["email"];  

        $arLoadProductArray = Array(
            "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => 10,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => iconv('UTF-8','CP1251',$_POST["name"]),
            "ACTIVE"         => "Y",            // активен
            
        );

        if($PRODUCT_ID = $el->Add($arLoadProductArray))
            echo "OK";
        else
            echo "Error: ".$el->LAST_ERROR;
            
           
$arEventFields = array(    
    "NAME"  => $arLoadProductArray["NAME"],  
    "EMAIL" => $arLoadProductArray["PROPERTY_VALUES"]["EMAIL"], 
    );
$arrSITE =  's1';
CEvent::Send("OFFER_SUBMIT", $arrSITE, $arEventFields); 
                                                        
    }
?>