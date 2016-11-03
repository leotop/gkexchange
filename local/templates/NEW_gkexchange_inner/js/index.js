$(document).ready(function () {
    //подстановка имени файла в псевдоинпут
    $("input[name=BRIEF_FILE]").on("change", function(){
        $(this).siblings("div").find("span").html($(this).val());
    })
    /////
    
    //красивый скролл
    $("#menu").niceScroll({
        cursorwidth: "7px",
        cursorcolor: "#fff",
        cursorborder: "1px solid #ebf0f1",
        autohidemode: false,  cursorfixedheight: 100,
        railpadding: {top: 5, right: 12, left: 0, bottom: 5}
    });

    $("input[name='PHONE']").mask('+7(999)999-99-99');
    $("input[data-code='PHONE']").mask('+7(999)999-99-99');

    //проверка сабмита форм
    $("form[name='FORM_ORDER']").submit(function(){ 
    
        var form = $(this);
     
        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;

        //проверяем заполненные поля
        var br;

        form.find("input.req, textarea.req").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("Заполните") !== -1) {
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
                    		$("#js_project_form_header").text("Ваша заявка принята!");
                    		$("#form").hide();
                    		$("#js_project_form_header").css("margin-top", ($("#p1").height() / 2) - 190);
                    		setTimeout(function(){
                    			$(".close").click();
                    		}, 3000)
                    	} else {
                    		alert("Ваша заявка принята!");  	
                    	}
                        form.find("input[type=text], textarea").val("");     
                    } else {
                        alert("Произошла ошибка! Проверьте правильность введенных данных и попробуйте снова."); 
                    }   
            });                                             
        }

        return false;

    });
    
    $("form[name='FORM_BRIF']").submit(function(){ 
    
        var form = $(this);
     
        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;

        //проверяем заполненные поля
        var br;

        form.find("input.req, textarea.req").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("Заполните") !== -1) {
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


    });
   
   //имитация поля выбора файла
    $("input[data-name=FILE_SELECT]").on("click", function(){
        $(this).siblings("input").click();
    })    

    //валидация формы при отправке
    $("form[name=brief_add]").on("submit", function(e) {


        var form = $(this);  

        var form_id = form.attr("id");  

        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;

        //проверяем заполненные поля       
        var br;

        form.find(".req_field").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("Заполните") !== -1) {
                val = "";
            }

            var validEmail = ($(this).attr("name") == "EMAIL" || $(this).data("code") == "EMAIL") ? reEmailCheck.test(val) : true;      

            if ((val.length > 0)&& validEmail) {
                
            } else {
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
            e.preventDefault();
            $(".nogood:first").focus();  
            if (form_id) {
                document.location.href = "#" + form_id;   
            }
            return false;
        } else {
            $("form[name=iblock_add]").submit();
        }
    })    
    
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
    
    $('#show_item').click(function(){
        if(jQuery.browser.msie && parseInt(jQuery.browser.version)==6){
            if($('.item').css("display")=="block"){
                $('.item').css("display", "none");
            }
            else{
                $('.item').css("display", "block");
            }
        }
        else{
            $('.item').toggle("slow");
        }
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
// отображение элемента по id 
 var s=[],s_timer=[];
 function show(id,h,spd){ 
     s[id]= s[id]==spd? -spd : spd;
     s_timer[id]=setTimeout(function() {
         var obj=document.getElementById(id);
         if(obj.offsetHeight+s[id]>=h){
             obj.style.height=h+"px";
         }
         else 
         if(obj.offsetHeight+s[id]<=0){
             obj.style.height=0+"px";
             obj.style.display="none";
         }
         else {
             obj.style.height=(obj.offsetHeight+s[id])+"px";
             obj.style.display="block";
             setTimeout(arguments.callee, 10);
         }
     }, 10);
 };