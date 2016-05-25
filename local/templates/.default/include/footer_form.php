<!--form-->
<div class="forma popup" id="p1">
    <div class="close"></div>
    <div class="h1">
        <?=GetMessage("ORDER_FORM")?>
    </div>       

    <form method="post" id="form" class="order_form">
        <label><input autocomplete="off" type="text" class="input req" name="NAME" placeholder="<?=GetMessage("YOUR_NAME")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="COMPANY" placeholder="<?=GetMessage("COMPANY")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req email" name="EMAIL" placeholder="<?=GetMessage("EMAIL")?>" value=""/></label>
        <label><input autocomplete="off" type="text" class="input req" name="PHONE" placeholder="<?=GetMessage("PHONE")?>" value=""/></label>
        <label><textarea class="textarea req" name="TEXT" placeholder="<?=GetMessage("TEXT")?>"></textarea></label>
        <input type="hidden" name="IBLOCK_ID" value="7"/>
        <button type="submit" class="button button9"><?=GetMessage("SEND_FORM")?></button>
    </form>
</div>
<!--END form-->

<!-- BEGIN JIVOSITE CODE {literal} --> 
<script type='text/javascript'> 
(function(){ var widget_id = 'OZSv3jgC1G'; 
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script> 
<!-- {/literal} END JIVOSITE CODE -->