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
<?include($_SERVER["DOCUMENT_ROOT"]."/local/templates/.default/include/js.php");?>

</body>
</html>