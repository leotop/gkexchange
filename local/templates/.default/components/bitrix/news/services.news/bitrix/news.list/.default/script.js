//Обрезаем текст в блоках
$(document).ready(function() {
    var products_name = document.querySelectorAll(".description-top");
    Array.prototype.forEach.call(products_name, function(product, i){
        console.log(product);
    $clamp(product, {clamp: 9});
    });    
});