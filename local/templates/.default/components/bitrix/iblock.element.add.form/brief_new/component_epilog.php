<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<!--component epilog-->
<div class="forma popup" id="p2">
    <div class="close"></div>
    <div class="h1">
        <?=GetMessage("IBLOCK_FORM_SUBMIT")?>
    </div>       

    <form data-form-action="no-ajax" method="post" id="form2" class="order_form" enctype="multipart/form-data">
        <label><input autocomplete="off" type="text" class="input req" name="NAME" placeholder="<?=GetMessage("YOUR_NAME")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="COMPANY" placeholder="<?=GetMessage("COMPANY")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req email" name="EMAIL" placeholder="<?=GetMessage("EMAIL")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="PHONE" placeholder="<?=GetMessage("PHONE")?>" value=""/></label>
        <label>
            <input style="display:none" type="file" class="input req" name="BRIEF_FILE" value=""/>
            <div class="input file_select_field" data-name="FILE_SELECT">
                <span><?=GetMessage("FILE")?></span>
                <div class="file_select" >...</div>
            </div>
        </label>
        <input type="hidden" name="LOAD_BRIEF" value="Y">
        <button type="submit" class="button"><?=GetMessage("SEND")?></button>
    </form>
</div>