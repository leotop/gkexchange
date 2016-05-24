<?
    CModule::IncludeModule('iblock');

    define("INDEX_PAGE_CONTENT_IBLOCK", 8); //инфоблок с контентом для главной страницы


    function arshow($array, $adminCheck = false) {
        global $USER;
        $USER = new Cuser;
        if ($adminCheck) {
            if (!$USER->IsAdmin()) {
                return false;
            } 
        }
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    /***
    * get content for index page blocks
    * 
    * @string $utmCode - символьный код элемента из инфоблока INDEX_PAGE_CONTENT_IBLOCK
    */
    function getIndexPageContentByUtm($utmCode) {
        
        if (empty($utmCode)) {
            return false;
        }
        
        //функция для сортировки значений множественных свойств
        function sortItems($a, $b) {   
            if ($a["SORT"] == $b["SORT"]) {
                return 0;
            }
            return ($a["SORT"] < $b["SORT"]) ? -1 : 1;
        }

        $rsItem = CIBlockElement::GetList(array(), array("IBLOCK_ID" => INDEX_PAGE_CONTENT_IBLOCK, "CODE" => $utmCode));   
        //если результат не найден, повторяем запрос по конкретному коду
        if ($rsItem -> SelectedRowsCount() == 0) {
            $utmCode = "INTEGRACIA";
            $rsItem = CIBlockElement::GetList(array(), array("IBLOCK_ID" => INDEX_PAGE_CONTENT_IBLOCK, "CODE" => $utmCode));
        }

        $arItem = $rsItem -> GetNextElement();
        $arProps = $arItem -> GetProperties();

        //перебираем свойства, чтобы собрать их в нужный формат для вывода
        foreach ($arProps as $pID => $prop) {
            if (is_array($prop["VALUE"]) && count($prop["VALUE"]) > 0 && is_array($prop["DESCRIPTION"]) && count($prop["DESCRIPTION"]) > 0) {
                foreach ($prop["VALUE"] as $vID => $val) {
                    $arProps[$pID]["VALUE"][$vID] = array("VALUE" => $val, "SORT" => $prop["DESCRIPTION"][$vID]); 
                }
                usort($arProps[$pID]["VALUE"],sortItems);
            } 
        }

        return $arProps;


    }
?>