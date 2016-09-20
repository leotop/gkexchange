<!--menu-->
<div id="menu" class="fixed">
    <div>

        <a href="/" class="logo">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""/>
        </a>

        <!--nav-->
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_menu", 
	array(
		"COMPONENT_TEMPLATE" => "left_menu",
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
        <!--END nav-->  

        <!--bottom-->
        <div class="bottom">
            <div class="button1" onclick="show_popup(1)">
                <?=GetMessage("ORDER_PROJECT")?>
            </div>
        </div>
    </div>
    <!--END bottom-->
    </div>
    <!--END menu-->