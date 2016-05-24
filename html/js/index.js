$(document).ready(function () {
    //красивый скролл
    $("#menu").niceScroll({
        cursorwidth: "7px",
        cursorcolor: "#fff",
        cursorborder: "1px solid #ebf0f1",
        autohidemode: false,  cursorfixedheight: 100,
        railpadding: {top: 5, right: 12, left: 0, bottom: 5}
    });

    $("input[name='phone']").mask('+ 7 99999 999 99 99');

    //проверка сабмита форм
    $("form").submit(function(){
        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;
        form_id = $(this).attr("id").slice(4) || "";
        //проверяем заполненные поля
        var br;


        $(this).find("input.req,textarea.req").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("Заполните") !== -1) {
                val = "";
            }
            var validEmail = ($(this).attr("name")=="email") ? reEmailCheck.test(val) : true;



            if ((val.length > 0)&& validEmail) {}
            else {

                $(this).parent().removeClass("good");
                $(this).removeClass("good");
                $(this).parent().addClass("nogood");
                $(this).addClass("nogood");
                if (!validEmail)
                    $(this).val("Заполните правильно e-mail");
                if (val.length == 0)
                $(this).val("Заполните "+ (el.attr("placeholder") || "поле"));

                br = "yes";
            }

        });

        if (br == "yes") {

            return false;
        }

        //если блокировка отправки не сработала, то запускаем аякс, который отправляет письмо на почту
        else {
            alert("Ваша заявка принята!");
            /*var a=parseInt($(this).find("input[type='hidden']").val());
            $.post("/ajax/email_send.php", {
                    theme_id: $(this).find("input[type='hidden']").val(),
                    name: $(this).find("input[name='name']").val(),
                    company: $(this).find("input[name='company']").val(),
                    phone: $(this).find("input[name='phone']").val(),
                    email: $(this).find("input[name='email']").val(),
                    text: $(this).find("textarea[name='text']").val(),
                },
                function(data){

                    $("#p" + form_id).find(".popup_close").click();
                    //console.log(a);

                    show_popup(9);

                    switch(a) {
                        //заявка на звонок

                        case 0:
                            yaCounter23705659.reachGoal('ORDER11'); return true;
                            break;

                        //предпроектное исследование
                        case 1:
                            //alert(1);
                            yaCounter23705659.reachGoal('ORDER21'); yaCounter23705659.reachGoal('ORDER51'); return true;
                            break;

                        case 2:
                            yaCounter23705659.reachGoal('ORDER31'); return true;
                            break;

                        case 3:
                            yaCounter23705659.reachGoal('ORDER41'); return true;
                            break;
                    }
                    //yaCounter23705659.reachGoal('ORDER11'); return true;
                    console.log(data);
                    //alert(data);

                });*/

        }

        return false;
        // $(this).parent().siblings("popup_close").click();

    });
    $("input[type=text],textarea").focus(function(){
        var el = $(this), val = el.val();
        if (val.indexOf("Заполните") !== -1) {
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
    animate = 1; //фиксируем факт анимации, чтобы в этот момент другие события не срабатывали   
    
    //скролл страницы
    var new_top = $("#b" + n).offset();
    $("html, body").stop().animate({ scrollTop: new_top.top}, 750 , function(){animate = 0;});

}

//проверяем, насколько проскролена страница, чтобы выбрать нужный пункт навигации

function show_popup(n){
    $("#p"+n).fadeIn(500);
    $(".block").addClass("blur");
    return false;
}
//закрытие всплывающего окна
function popup_close(e) {
    //

    $(e).parent(".popup").fadeOut(250);
    //очищаем поля всех форм
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