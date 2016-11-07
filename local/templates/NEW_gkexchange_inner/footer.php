</div>
</div>  

<?if ($APPLICATION->GetCurDir() == "/contacts/") {?>
    <div class="map_wrapper">
        <div id="map-zoom-plus" class="map-zoom-plus">+</div>
        <div id="map-zoom-minus" class="map-zoom-minus">-</div>
        <div id="map" class="map_container"></div>
    </div>
    <?}?>

<div class="line"></div>
<div class="button3" onclick="show_popup(1)">
    <?=GetMessage("ORDER_CONSULTATION")?>
</div>
<div class="next-block" onclick="main_scroll(1)"></div>



<?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/footer_block.php")?>

</div>
<!--END wrapper-->

<?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/footer_form.php")?>
<script data-skip-moving="true">
(function(w,d,u,b){
s=d.createElement('script');r=1*new Date();s.async=1;s.src=u+'?'+r;
h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'http://corp.webgk.net/upload/crm/0b6/0b6bcd2805943e49b047a055bf9f1f33.js');
</script>
</body>
</html>