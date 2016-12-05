<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    $arResult["BLOCK_NAMES"] = array(
        "PLAT_VERSION" => GetMessage("PLAT_VERSION"),
        "CATALOG_STRUCT" => GetMessage("CATALOG_STRUCT"),
        "C_PROP_REGISTARATION" => GetMessage("C_PROP_REGISTARATION"),
        "GOODS_UPLOAD" => GetMessage("GOODS_UPLOAD"),
        "CATALOG_UPDATE" => GetMessage("CATALOG_UPDATE"),
        "NAME" => GetMessage("NAME")
    );

    //если происходит загрузка файла брифа
    if ($_REQUEST["LOAD_BRIEF"] == "Y" && is_array($_FILES["BRIEF_FILE"]) && $_FILES["BRIEF_FILE"]["size"] > 0) {
        if ($_REQUEST["NAME"] && $_REQUEST["COMPANY"] && $_REQUEST["EMAIL"] && $_REQUEST["PHONE"]) {
            $el = new CIBlockElement;

            $PROP = array();
            $PROP["COMPANY_NAME"] = $_REQUEST["COMPANY"]; 
            $PROP["PHONE"] = $_REQUEST["PHONE"];       
            $PROP["EMAIL"] = $_REQUEST["EMAIL"];   

            //сохраняем загружаемый файл в битрикс
            $fileArr = array_merge($_FILES["BRIEF_FILE"], array("MODULE_ID" => "iblock"));                
            $fileID = CFile::SaveFile($fileArr, "iblock/");
            $PROP["BRIEF_FILE"] = $fileID;

            $arLoadProductArray = Array(
                "IBLOCK_SECTION_ID" => false,          
                "IBLOCK_ID"      => $arParams["IBLOCK_ID"],
                "PROPERTY_VALUES"=> $PROP,
                "NAME"           => $_REQUEST["NAME"],
                "ACTIVE"         => "Y",            
            );

            if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
                $arResult["FILE_LOAD_SUCCESS"] = "Y";

                //отправляем письмо о загрузке брифа
                $data["NAME"] = $_REQUEST["NAME"]; 
                $data["COMPANY"] = $_REQUEST["COMPANY"]; 
                $data["PHONE"] = $_REQUEST["PHONE"];       
                $data["EMAIL"] = $_REQUEST["EMAIL"];  

                $arrSITE =  's1';
                CEvent::Send("NEW_BRIEF_LOAD", $arrSITE, $data,'N');
            }

        }   
    }

?>