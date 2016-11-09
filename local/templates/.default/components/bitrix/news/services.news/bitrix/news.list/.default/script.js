//Обрезаем текст в блоках
/*$(document).ready(function() {
    var products_name = document.querySelectorAll(".description-top");
    Array.prototype.forEach.call(products_name, function(product, i){
        console.log(product);
    $clamp(product, {clamp: 9});
    });    
});*/

$(document).ready(function() {
    $( '.new-services-block:even' ).each(function() {
        var LeftHeight = $(this).find('.description-top').height();
        var RightHeight = $(this).next().find('.description-top').height(); 
        console.log(RightHeight);
        if (LeftHeight < RightHeight) {
            $(this).find('.description-top').height(RightHeight);        
        } else {
            $(this).next().find('.description-top').height(LeftHeight);    
        };   
    });    
});