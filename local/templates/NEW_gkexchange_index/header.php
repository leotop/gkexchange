<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?              
    IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>      

    <?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/meta.php");?>  

    <?  
        //получаем необходимый контент для главной страницы
        if (isset($_GET["utm_content"])) {
            $utm_content=strtoupper($_GET["utm_content"]);
        } else {
            $utm_content="INTEGRACIA";
        }
        $indexData = getIndexPageContentByUtm($utm_content);   
    ?>       
<meta name="yandex-verification" content="4ea7d7e3c4a98fc2" />
</head>
<body> 

<?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/stat.php");?>

<?$APPLICATION->ShowPanel()?>
<!--wrapper-->
<div class="wrapper">

<?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/menu.php");?>       

<!--b1-->
<div class="block block1" id="b1">
    <div class="block-count"><span>01</span>/07</div>
    <h1 class="h1">
        <?=$indexData["H1"]["VALUE"]?>
    </h1>
    <div class="line"></div>

    <div class="digit">
        <?
            if ($indexData["NUMBER"]["VALUE"]) {
                echo $indexData["NUMBER"]["VALUE"];
            } else {?>
            &#9786;
            <?}
        ?>
    </div>

    <div class="h2">
        <?
            if ($indexData["TEXT1"]["VALUE"]["TYPE"]=="HTML"){
                echo $indexData["TEXT1"]["~VALUE"]["TEXT"];
            } else {
                echo $indexData["TEXT1"]["VALUE"]["TEXT"];
            }
        ?>
    </div>

    <div class="line"></div>

    <div class="bonus">  
        <?$APPLICATION->IncludeFile(SITE_DIR."include/promo_block.php", Array(),Array("MODE"=>"html"));?>       
    </div>

    <div class="line"></div>

    <form method="post" id="sOF1" class="order_form">
        <label><input autocomplete="off" type="text" class="input req" name="NAME" placeholder="<?=GetMessage("YOUR_NAME")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req email" name="EMAIL" placeholder="<?=GetMessage("EMAIL")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="PHONE" placeholder="<?=GetMessage("PHONE")?>" value=""/></label>
        <input type="hidden" name="IBLOCK_ID" value="10"/>
        <button type="submit" class="button" onclick="yaCounter23705659.reachGoal('ORDER1'); return true;">
            <?=GetMessage("SEND_FORM")?>
        </button>                 
    </form>

    <div class="next-block"></div>
    <div class="figure1"></div>
    <div class="figure2"></div>
    <div class="figure3"></div>
</div>
<!--END b1-->

<!--b2-->
<div class="block block2" id="b2">
    <div class="block-count"><span>02</span>/07</div>
    <div class="h1">
        <?=$indexData["H2"]["VALUE"]?> 
    </div>
    <ul class="list">    

        <? 
            foreach($indexData["LIST1"]["VALUE"] as $eID=>$el){ 

                //выводим только 3 первых элемента
                if ($eID > 2) {
                    break;
                }
                //получаем число вначале строки
                $num=strstr($el["VALUE"]," ",true);
                if (ctype_digit($num)) {
                    $el["VALUE"]=substr($el["VALUE"],strlen($num)+1);    
                }
            ?>      
            <li class="list<?=($eID+1)?>">
                <div class="line<?if ($eID != 1){?>1<?}?>"></div>
                <div class="list_circle"><?=$num?></div>
                <?=$el["VALUE"]?>
            </li>
            <?}?>   
    </ul>         

    <div class="pluses">
        <div class="line"></div>
        <div class="title">
            <?=GetMessage("OUR_PLUSES")?>
        </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"Pluses", 
	array(
		"IBLOCK_TYPE" => "gkexchange",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "NAME",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "Pluses",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>    
        <a href="/about/" class="more"><?=GetMessage("KNOW_MORE")?></a>     

    </div>

    <div class="next-block"></div>     

</div>
<!--END b2-->

<!--b3-->
<div class="block block3" id="b3">
    <div class="block-count"><span>03</span>/07</div>      
    <?
        if ($indexData["H3"]["VALUE"]["TYPE"]=="HTML") {
            echo $indexData["H3"]["~VALUE"]["TEXT"];
        } else {
            echo $indexData["H3"]["VALUE"]["TEXT"];
        }
    ?>

    <div class="line"></div>
    <div class="figure4"></div>
    <div class="line"></div>

    <div class="button2" onclick="show_popup(1)" onclick="$(this).parent().submit();yaCounter23705659.reachGoal('ORDER2'); return true;"><?=GetMessage("ORDER_CONSULTATION")?></div>
    <div class="next-block"></div>

</div>
<!--END b3-->

<!--b4-->
<div class="block block4" id="b4">
    <div class="block-count"><span>04</span>/07</div>
    <div class="h1">
        <?$APPLICATION->IncludeFile(SITE_DIR."include/slogan1.php", Array(),Array("MODE"=>"html"));?>
    </div>         

    <div class="pluses">         
        <ul>
            <? foreach($indexData["LIST2"]["VALUE"] as $el) {?>
                <li><?=$el["VALUE"]?></li>
                <?}?>
        </ul>                    
        <a href="/portfolio/" class="more"><?=GetMessage("KNOW_MORE")?></a>      
    </div>
    <div class="next-block"></div>               

</div>
<!--END b4-->


<!--b5-->
<div class="block block5" id="b5">
    <div class="block-count"><span>05</span>/07</div>

    <?$APPLICATION->IncludeFile(SITE_DIR."include/slogan2.php", Array(),Array("MODE"=>"html"));?>

    <div class="line"></div>
    <div class="figure4"></div>
    <div class="line"></div>

    <div class="button2" onclick="show_popup(1)" onclick="$(this).parent().submit();yaCounter23705659.reachGoal('ORDER2'); return true;"><?=GetMessage("ORDER_CONSULTATION")?></div>
    <div class="next-block"></div>

</div>
<!--END b5-->

<!--b6-->
<div class="block block4" id="b4">
    <div class="block-count"><span>06</span>/07</div>
    <div class="h1">
        <?$APPLICATION->IncludeFile(SITE_DIR."include/slogan3.php", Array(),Array("MODE"=>"html"));?>
    </div>         

    <div class="pluses">         
        <ul>
            <? foreach($indexData["LIST3"]["VALUE"] as $el) {?>
                <li><?=$el["VALUE"]?></li>
                <?}?>
        </ul>                    
        <a href="/services/" class="more"><?=GetMessage("KNOW_MORE")?></a>      
    </div>
    <div class="next-block"></div>               

</div>
<!--END b6-->

<!--b7-->
<div class="block block6" id="b6">
    <div class="block-count"><span>07</span>/07</div>

    <div class="h1">
        <?=GetMessage("INTEGRATION_SAMPLES")?>
    </div>

    <?
    global $projectsMain;
    $projectsMain = array("!PROPERTY_SHOW_ON_INDEX" => false);
    ?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"project_samples", 
	array(
		"IBLOCK_TYPE" => "gkexchange",
		"IBLOCK_ID" => "11",
		"NEWS_COUNT" => "999",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "projectsMain",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PROJECT_NAME",
			1 => "SITE_NAME",
			2 => "PRICE",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "project_samples",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

    <div class="line"></div>
    <div class="button3" onclick="show_popup(1)" onclick="$(this).parent().submit();yaCounter23705659.reachGoal('ORDER2'); return true;">
        <?=GetMessage("ORDER_CONSULTATION")?>
    </div>
    <div class="next-block" onclick="main_scroll(1)"></div>


    </div>
    <!--END b7-->
