<?  
    CModule::IncludeModule('iblock');
	file_exists($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/.config.php") ? require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/.config.php") : "";
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
    
    /* Повышает айдишник секции на детальной странице портфолио*/
    
    function increase_block_id($block_id){
        if (intval($block_id) < 0) {
            return;
        }
        $block_id = intval($block_id);
        $block_id = $block_id + 1;        
        if ($block_id < 10) {
            $block_id_str = '0'.strval($block_id);
            } else {
            $block_id_str = strval($block_id);    
        };
        return $block_id_str;
    }
	
	/**
	 * Создаем лид в CRM
	 * 
	 * @param array $arFields
	 * @return void
	 **/
	function createCRMLead($arFields) {
		$postdata = http_build_query(
		    array_merge(array(
		        'LOGIN'             => CRM_LOGIN,
		        'PASSWORD'          => CRM_PASSWORD,
		        'UF_CRM_1369307880' => CRM_SOURCE_PROJECT,
		        'ASSIGNED_BY_ID'    => CRM_ASSIGNED
		    ), $arFields)
		);
		
		$opts = array('http' =>
		    array(
		      'method'  => 'POST',
		      'header'  => 'Content-type: application/x-www-form-urlencoded',
		      'content' => $postdata
		    )
		);
		
		$context = stream_context_create($opts);
		$result = file_get_contents('http://corp.webgk.net/crm/configs/import/lead.php', false, $context);
	}
?>