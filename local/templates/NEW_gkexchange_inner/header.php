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

</head>
<body> 
<?$APPLICATION->ShowPanel()?>
<!--wrapper-->
<div class="wrapper">

<?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/menu.php");?>       

<div class="block-in">
<div id="header">
    <div class="row">
        <div class="nav_chain_container">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "nav_chain", Array(), false);?>
        </div>
        <h1 class="h1 page-title"><?$APPLICATION->ShowTitle()?></h1>
    </div>
</div>

<div class="row">

        