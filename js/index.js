$(document).ready(function () {
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
    $("form").submit(function(){ 
    
        var form = $(this);
     
        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;

        //провер€ем заполненные пол€
        var br;

        form.find("input.req, textarea.req").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("«аполните") !== -1) {
                val = "";
            }
            var validEmail = ($(this).attr("name")=="EMAIL") ? reEmailCheck.test(val) : true;      

            if ((val.length > 0)&& validEmail) {}
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

        //если блокировка отправки не сработала, то запускаем а€кс, который отправл€ет письмо на почту
        else {

            $.post("/ajax/email_send.php", {  
                NAME: form.find("input[name='NAME']").val(),
                COMPANY: form.find("input[name='COMPANY']").val(),
                PHONE: form.find("input[name='PHONE']").val(),
                EMAIL: form.find("input[name='EMAIL']").val(),
                TEXT: form.find("textarea[name='TEXT']").val(),
                IBLOCK_ID : form.find("input[name='IBLOCK_ID']").val(),
                }, function(data){
					data = data.trim();
                    if (data == "OK") {
                    	if (form.find("input[name='IBLOCK_ID']").val() == 7) {// форма заказа проекта
                    		$("#js_project_form_header").text("¬аша за€вка прин€та!");
                    		$("#form").hide();
                    		$("#js_project_form_header").css("margin-top", ($("#p1").height() / 2) - 190);
                    		setTimeout(function(){
                    			$(".close").click();
                    		}, 3000)
                    	} else {
                    		alert("¬аша за€вка прин€та!");  	
                    	}
                        form.find("input[type=text], textarea").val("");     
                    } else {
                        alert("ѕроизошла ошибка! ѕроверьте правильность введенных данных и попробуйте снова."); 
                    }   
            });                                             
        }

        return false;

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
                //$(".slide-item").fadeOut(500);
                $("#ot" + col).fadeIn(500);

            }
            else {
                curSlides2=curSlides2-1;
                //$(".slide-item").fadeOut(500);
                $("#ot" + curSlides2).fadeIn(500);

            }

            break;
        case "next" :
            if (curSlides2==col) {
                curSlides2=1;
                //$(".slide-item").fadeOut(500);
                $("#ot" + curSlides2).fadeIn(500);


            }
            else {
                curSlides2=parseInt(curSlides2)+1;
                //$(".slide-item").fadeOut(500);
                $("#ot" + curSlides2).fadeIn(500);

            }
            break;
    }
};