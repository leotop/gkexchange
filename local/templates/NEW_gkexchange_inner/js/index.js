$(function () {
    //красивый скролл
    $("#menu").niceScroll({
        cursorwidth: "7px",
        cursorcolor: "#fff",
        cursorborder: "1px solid #ebf0f1",
        autohidemode: false,  cursorfixedheight: 100,
        railpadding: {top: 5, right: 12, left: 0, bottom: 5}
    });

    $("input[name='PHONE']").mask('+7(999)999-99-99');

    //проверка сабмита форм
    $("form.order_form").submit(function(){ 


        var form = $(this);    

        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;

        //провер€ем заполненные пол€       
        var br;

        form.find("input[type=text].req, textarea.req").each(function(){
            
            var el = $(this), val = el.val();

            if (val.indexOf("«аполните") !== -1) {
                val = "";
            }

            var validEmail = ($(this).attr("name")=="EMAIL") ? reEmailCheck.test(val) : true;      

            if ((val.length > 0) && validEmail ) {}
            else {

                $(this).parent().removeClass("good");
                $(this).removeClass("good");
                $(this).parent().addClass("nogood");
                $(this).addClass("nogood");
                if (!validEmail)
                    $(this).val("«аполните правильно e-mail");
                if (val.length == 0)
                    $(this).val("«аполните "+ (el.attr("placeholder") || "поле"));

                br = "yes";
            }

        });
        
      
        if (br == "yes") {  

            return false;
        }

        //если блокировка отправки не сработала, то запускаем а€кс, который добавл€ет за€вку в битрикс
        else {

            //если в форме не стоит аттрибут прекращени€ ajax-обработки
            if (form.data("form-action") != "no-ajax") {

                $.post("/ajax/email_send.php", {  
                    NAME: form.find("input[name='NAME']").val(),
                    COMPANY: form.find("input[name='COMPANY']").val(),
                    PHONE: form.find("input[name='PHONE']").val(),
                    EMAIL: form.find("input[name='EMAIL']").val(),
                    TEXT: form.find("textarea[name='TEXT']").val(),
                    IBLOCK_ID : form.find("input[name='IBLOCK_ID']").val(),
                    BRIEF_FILE : form.find("input[name='BRIEF_FILE']").val()
                    }, function(data){  
                        if (data == "OK") {    
                            alert("¬аша за€вка прин€та!");  
                            form.find("input[type=text], textarea").val("");     
                        } else {
                            alert("ѕроизошла ошибка! ѕроверьте правильность введенных данных и попробуйте снова."); 
                        }   
                });  

                return false; 

            }                                          
        }



    });


    $("input[type=text],textarea").focus(function(){
        var el = $(this), val = el.val();
        if (val.indexOf("«аполните") !== -1) {
            el.val("");
        }
        el.parent().removeClass("nogood");
        el.removeClass("nogood");
    });
    $("button[type='reset']").on("click", function() {
        var el = $("input,textarea");
        el.parent().removeClass("nogood");
        el.removeClass("nogood");
    });

    windowResize();
    $(".close").click(function(){
        popup_close($(this));
    });
});

$(window).resize(function(){
    windowResize();
});
function windowResize(){
    $(".block1").css("min-height", $(window).height());
}
var animate = 0;
//скролл страницы к выбранному блоку. на вход - номер блока
function main_scroll(n) {
    animate = 1; //фиксируем факт анимации, чтобы в этот момент другие событи€ не срабатывали            


    //скролл страницы
    var new_top = $("#b" + n).offset();
    $("html, body").stop().animate({ scrollTop: new_top.top}, 750 , function(){animate = 0;});

}

//провер€ем, насколько проскролена страница, чтобы выбрать нужный пункт навигации

function show_popup(n){
    $("#p"+n).fadeIn(500);
    $(".block").addClass("blur");
    return false;
}
//закрытие всплывающего окна
function popup_close(e) {
    //

    $(e).parent(".popup").fadeOut(250);
    //очищаем пол€ всех форм
    $("form input[type='text']").val("");
    $("textarea").val("");
    $("form input[type='text']").removeClass("nogood");
    $("form input[type='text']").parent().removeClass("nogood");
    $(".block").removeClass("blur");
}
/***********************/
var curSlides2=1;
function slider_otziv(dir, sl) {
    var col = $(".slide-item").length;

    $(".slide-item").css("display", "none");
    switch(dir) {
        case "prev" :
            if (curSlides2==1) {
                curSlides2=col;
                $("#ot" + col).fadeIn(500);       
            }
            else {
                curSlides2=curSlides2-1;
                $("#ot" + curSlides2).fadeIn(500);  
            }

            break;
        case "next" :
            if (curSlides2==col) {
                curSlides2=1;
                $("#ot" + curSlides2).fadeIn(500);  
            }
            else {
                curSlides2=parseInt(curSlides2)+1;
                $("#ot" + curSlides2).fadeIn(500);  
            }
            break;
    }
};


//карта 
var markersClicked = [], markers = [], ll;
var openedMarker;
var st;


function initialize() {
	if ($(".js_page_with_map").length) {
	    //адреса
	    var coords = [{lat: 55.7508731, lng: 37.6532301, disabled: 0}];
	
	    var center = {lat: 55.7508731, lng: 37.6532301};
	
	    //карта с настройками
	    var zoom = 16;
	    var map = new google.maps.Map(document.getElementById('map'), {
	        scrollwheel: false,
	        zoom: zoom,
	        disableDefaultUI: true,
	        center: center
	    });
	
	
	
	    //маркеры
	    var i = 0;
	    for (i = 0; i < coords.length; i++) {
	        markers[i] = addMarker(coords[i], map, i);
	        if (openedMarker && openedMarker.ind == i) {
	            openedMarker = markers[i];
	            openedMarker.setIcon("../i/point.png");
	        }
	    }    
	
	    //зоом +
	    $("#map-zoom-plus").off("click").on("click", function () {
	        var currentZoomLevel = zoom;
	        if (currentZoomLevel != 21) {
	            zoom = currentZoomLevel + 1;
	
	        }
	        map.setZoom(zoom);
	
	    });
	
	    //зоом -
	    $("#map-zoom-minus").off("click").on("click", function () {
	        var currentZoomLevel = zoom;
	        if (currentZoomLevel != 0) {
	            zoom = currentZoomLevel - 1;
	        }
	        map.setZoom(zoom);
	    });
	}
}

function addMarker(location, map, i) {

    var marker = new google.maps.Marker({
        position: location,
        icon: "../i/point.png",
        map: map,
        label: ""
    });
    marker.ind = i;   


    return marker;
}

google.maps.event.addDomListener(window, 'load', initialize);

//////END карта

     