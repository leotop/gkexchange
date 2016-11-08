<!--form-->

<div class="forma popup" id="p1">
    <div class="close"></div>
    <div class="h1" id="js_project_form_header">
        <?=GetMessage("ORDER_FORM")?>
    </div>

    <form method="post" id="form" class="order_form" name="FORM_ORDER">
        <label><input autocomplete="off" type="text" class="input req" name="NAME" placeholder="<?=GetMessage("YOUR_NAME")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="COMPANY" placeholder="<?=GetMessage("COMPANY")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req email" name="EMAIL" placeholder="<?=GetMessage("EMAIL")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="PHONE" placeholder="<?=GetMessage("PHONE")?>" value=""/></label>
        <label><textarea class="textarea req" name="TEXT" placeholder="<?=GetMessage("TEXT")?>"></textarea></label>
        <input type="hidden" name="IBLOCK_ID" value="7"/>
        <button type="submit" class="button button9" onclick="yaCounter23705659.reachGoal('ORDER21'); return true;"><?=GetMessage("SEND_FORM")?></button>
    </form>
</div>

<div class="forma popup style-reset" id="p4">
    <div class="close"></div>
    <div class="update-1C-popup">
        <?$APPLICATION->IncludeComponent(
                "bitrix:main.include", 
                ".default", 
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/include/subscribtion.php"
                ),
                false
            );?>
    </div>
</div>

<div class="forma popup style-reset" id="p5">
    <div class="close"></div>
    <div class="update-1C-popup">
    <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "COMPONENT_TEMPLATE" => ".default",
                "PATH" => "/include/license.php"
            ),
            false
        );?>
    </div> 
</div>

<!--END form-->

