$(function() {

    animate = 0; //факт анимации

    //показываем описания для иконки, на которую навели мышь
    $(".icon").mouseover(function(){
        $("#d" + $(this).attr("id").slice(1)).css("display","block");
    })
    $(".icon").mouseout(function(){
        $(".icon_desc").css("display","none")
    })


    //запускаем обратный отсчет
    countdown();
    setInterval(countdown,1000);

    //проверяем на сколько прокручена страница, чтобы подсветить нужный пункт навигации
    scroll_check();




    //подсветка заполненных полей формы
    $("input").blur(function(){
        var validEmail = ($(this).attr("name")=="email") ? reEmailCheck.test($(this).val()) : true;  
        if ($(this).val().length > 0 && validEmail ) 
        {
            $(this).parent().removeClass("nogood");
            $(this).removeClass("nogood");
            $(this).parent().addClass("good");
            $(this).addClass("good");
        }
        else {
            $(this).parent().removeClass("good");
            $(this).removeClass("good");
            $(this).parent().addClass("nogood");
            $(this).addClass("nogood");
            if ($(this).attr("name")=="email") $(this).val("указан неверный email!");   
            else if($(this).attr("name")=="company") $(this).val("не указано название организации!");    
                else if($(this).attr("name")=="name") $(this).val("поле Имя не заполнено!");
                    else if($(this).attr("name")=="phone") $(this).val("не указан телефон!");
                        else $(this).val("обязательное поле не заполнено!");


            br = "yes";
        }  
    })

    $("input").focus(function(){
        if ($(this).val() === "поле Имя не заполнено!"|| $(this).val() ==="указан неверный email!"|| $(this).val() ==="поле Email не заполнено!") {
            $(this).val(""); 
        }
        $(this).parent().removeClass("nogood");
        $(this).removeClass("nogood");  
    })


    //проверка сабмита форм
    $("#form1").submit(function(){
        form_id = $(this).attr("id").slice(4);
        //проверяем заполненные поля
        var br;
        $("#form" + form_id +"  input.req").each(function(){ 
            var validEmail = ($(this).attr("name")=="email") ? reEmailCheck.test($(this).val()) : true;
            if (($(this).val().length > 0 && (!$(this).hasClass("nogood")))|| validEmail) {}
            else {
                $(this).parent().removeClass("good");
                $(this).removeClass("good");
                $(this).parent().addClass("nogood");
                $(this).addClass("nogood");
                if ($(this).attr("name")=="email")
                {
                    $(this).val("указан неверный email!");    
                }
                
                else
                    $(this).val("поле не заполнено!"); 
                br = "yes";
            }
            
        })
             
        if (br == "yes") {

            return false;
        }

        //если блокировка отправки не сработала, то запускаем аякс, который отправляет письмо на почту

        else {
            var a=parseInt($(this).find("input[type='hidden']").val());
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

            });

        }

        return false;
        // $(this).parent().siblings("popup_close").click();     

    })


});

// регулярное выражение для проверки валидности email
var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
//var reEmailCheck = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;    

//функция определения падежа по числу
function name_check(number,e){ //number - число, e - единица изменерия: d - день, h -  час, m -  минута, s - секунда

    var number_name;

    //для 11 12 13 и 14 создаем отдельный случай
    switch(number) {

        case 11:
        switch (e) {
            case "d": number_name = "дней"; break;
            case "h": number_name = "часов"; break;
            case "m": number_name = "минут"; break;
            case "s": number_name = "секунд"; break;
        }
        ; break;

        case 12:
        switch (e) {
            case "d": number_name = "дней"; break;
            case "h": number_name = "часов"; break;
            case "m": number_name = "минут"; break;
            case "s": number_name = "секунд"; break;
        }
        ; break;

        case 13:
        switch (e) {
            case "d": number_name = "дней"; break;
            case "h": number_name = "часов"; break;
            case "m": number_name = "минут"; break;
            case "s": number_name = "секунд"; break;
        }
        ; break;

        case 14:
        switch (e) {
            case "d": number_name = "дней"; break;
            case "h": number_name = "часов"; break;
            case "m": number_name = "минут"; break;
            case "s": number_name = "секунд"; break;
        }
        ; break;


        default:
        var last_num = (String(number)).charAt((String(number).length - 1));
        switch (last_num) {
            case "1":
            switch (e) {
                case "d": number_name = "день"; break;
                case "h": number_name = "час"; break;
                case "m": number_name = "минута"; break;
                case "s": number_name = "секунда"; break;
            }
            break;

            case "2":
            switch (e) {
                case "d": number_name = "дня"; break;
                case "h": number_name = "часа"; break;
                case "m": number_name = "минуты"; break;
                case "s": number_name = "секунды"; break;
            }
            break;

            case "3":
            switch (e) {
                case "d": number_name = "дня"; break;
                case "h": number_name = "часа"; break;
                case "m": number_name = "минуты"; break;
                case "s": number_name = "секунды"; break;
            }
            break;

            case "4":
            switch (e) {
                case "d": number_name = "дня"; break;
                case "h": number_name = "часа"; break;
                case "m": number_name = "минуты"; break;
                case "s": number_name = "секунды"; break;
            }
            break;

            default:
            switch (e) {
                case "d": number_name = "дней"; break;
                case "h": number_name = "часов"; break;
                case "m": number_name = "минут"; break;
                case "s": number_name = "секунд"; break;
            }
            break;
        }

        break;



    }






    return number_name;
}


//функция обратного отсчета
function countdown() {
    /*
    var date = finish_date.split(".");
    var month, month_rus;

    switch (parseInt(date[1])) {
    case 1: month = "January"; month_rus = "января";  break;
    case 2: month = "February"; month_rus = "ферваля"; break;
    case 3: month = "March"; month_rus = "марта"; break;
    case 4: month = "April"; month_rus = "апреля"; break;
    case 5: month = "May"; month_rus = "мая"; break;
    case 6: month = "June"; month_rus = "июня"; break;
    case 7: month = "July"; month_rus = "июля"; break;
    case 8: month = "August"; month_rus = "августа"; break;
    case 9: month = "September"; month_rus = "сентября"; break;
    case 10: month = "October"; month_rus = "октября"; break;
    case 11: month = "November";  month_rus = "ноября"; break;
    case 12: month = "December";  month_rus = "декабря"; break;
    }

    var countdown = date[0] + " " + month + " " + date[2];



    var rightNow = new Date();
    var final = Date.parse(countdown);  //дата окончания в милисеккундах
    var now = Date.parse(rightNow); //текущая дата в милисеккундах

    var dif =  final - now; //количество секунд до окончания отсчета
    if (dif < 0) {dif = 0; }
    var c_days = Math.floor(dif / 86400000);  //количество целых дней до окончания
    $(".days > .num").html(c_days);
    var day_name = name_check(c_days,"d");
    $(".days > .num_name").html(day_name);

    var without_days = dif - c_days * 86400000; //оставшееся время, без учета дней
    var c_hours = Math.floor(without_days / 3600000); //количество целых часов до окончания
    if (String(c_hours).length == 1) {c_hours = "0" + c_hours;}
    $(".hours > .num").html(c_hours);
    var hour_name = name_check(c_hours,"h");
    $(".hours > .num_name").html(hour_name);

    var without_hours = without_days - c_hours * 3600000; //оставшееся время, без учета дней и часов
    var c_minutes = Math.floor(without_hours / 60000); //количество целых минут до окончания
    if (String(c_minutes).length == 1) {c_minutes = "0" + c_minutes;}
    $(".minutes > .num").html(c_minutes);
    var minute_name = name_check(c_minutes,"m");
    $(".minutes > .num_name").html(minute_name);

    var without_minutes = without_hours - c_minutes * 60000; //оставшееся время, без учета дней, часов и минут
    var c_seconds = Math.floor(without_minutes / 1000); //количество минут до окончания
    if (String(c_seconds).length == 1) {c_seconds = "0" + c_seconds;}
    $(".seconds > .num").html(c_seconds);
    var second_name = name_check(c_seconds,"s");
    $(".seconds > .num_name").html(second_name);



    //выводим дату в гранату %) и другие блоки, где она фигурирует
    //$(".bomb_text").html(date[0] + "." + date[1]);
    // $(".attention").html('<span>внимание!</span> До конца акции осталось ' + c_days +' ' + day_name + ".");
    //$(".sub_desc").html('<span>*</span>акция действует до ' +date[0] + ' ' + month_rus);  
    */
}



//проверяем, насколько проскролена страница, чтобы выбрать нужный пункт навигации
function scroll_check(){

    //при перезагрузке страницы проверяем текущий слайд
    var scroll_top = $(window).scrollTop();

    var cur_slide;

    if (scroll_top == 0) {
        cur_slide = 1;
    } else {
        cur_slide = Math.ceil(scroll_top/864);
        if (cur_slide > 6) {
            cur_slide = 6;
        }
    }
    $(".nav_block").removeClass("active");
    $("#n" + cur_slide).addClass("active");


    //скрываем боковую навигацию при маленьком разрешении
    if (parseInt($("body").css("width")) < 1280) {
        $("#nav").css("display", "none");
    }


    //скролл главной по колесику мыши
    $(document).scroll(function() {

        if ($("#nav").length>0){

            if (animate == 0) {

                //при перезагрузке страницы проверяем текущий слайд
                var scroll_top = $(window).scrollTop();
                var cur_slide;

                if (scroll_top == 0) {
                    cur_slide = 1;
                } else {
                    cur_slide = Math.ceil(scroll_top/864);
                    if (cur_slide > 6) {
                        cur_slide = 6;
                    }
                }
                $(".nav_block").removeClass("active");
                $("#n" + cur_slide).addClass("active");


                //скрываем боковую навигацию при маленьком разрешении
                if (parseInt($("body").css("width")) < 1280) {
                    $("#nav").css("display", "none");
                }


                if (animate == 0 ) { //если в данный момент не происходит анимация

                    var scroll_top = $(window).scrollTop();
                    // alert(scroll_top);
                    //текущий слайд
                    var cur_slide = $("#nav > .active").attr("id").slice(1);
                    var cur_slide_top = $("#b" + cur_slide).offset().top;

                    //предыдущий слайд
                    var prev_slide = cur_slide - 1;
                    if (prev_slide < 1) {prev_slide = 1;}
                    var prev_slide_top = $("#b" + prev_slide).offset();

                    //следющий слайд
                    var next_slide = cur_slide*1+1;
                    if (next_slide > 6) {next_slide = 6; }
                    var next_slide_top = $("#b" + next_slide).offset();

                    //при скролле вниз
                    if (scroll_top > next_slide_top.top ) {
                        $(".nav_block").removeClass("active");
                        $("#n" + next_slide).addClass("active");
                    }

                    //при скролле вверх
                    if (scroll_top  < cur_slide_top ) {
                        $(".nav_block").removeClass("active");
                        $("#n" + prev_slide).addClass("active");
                    }

                }

            }  
        }
    });

}


//скролл страницы к выбранному блоку. на вход - номер блока
function main_scroll(n) {
    animate = 1; //фиксируем факт анимации, чтобы в этот момент другие события не срабатывали

    $(".nav_block").removeClass("active");
    $("#n" + n).addClass("active");
    //скролл страницы
    var new_top = $("#b" + n).offset();
    $("html, body").stop().animate({ scrollTop: new_top.top}, 750 , function(){animate = 0;});

}


//показ всплывающего окна. на вход - номер окна
function show_popup(n){


    //скрываем все открытые окна
    $(".popup").css("display","none");

    var form_head;

    //варианты форм
    switch(n) {
        //перезвоните мне
        case 0:
            form_head = '<span>Перезвоните</span> мне';
            $("#p0 .popud_head").html(form_head);
            $(".form0").val(n);
            $("#p0").fadeIn(250);

            break;


        //предпроектное исследование
        case 1:
            form_head = '<span>Форма заказа</span> работ по 1С ';
            $("#p1 .popud_head").html(form_head);
            $(".form1").val(n);
            $("#p1").fadeIn(250);


            break;


        //бесплатная консультация специалиста
        case 2:
            form_head = '<span>Форма заказа</span> бесплатной консультации специалиста';
            $("#p1 .popud_head").html(form_head);
            $(".form1").val(n);
            $("#p1").fadeIn(250);

            break;


        //консультация специалиста по 1с
        case 3:
            form_head = '<span>Форма заказа</span> консультации по интеграции ';
            $("#p1 .popud_head").html(form_head);
            $(".form1").val(n);
            $("#p1").fadeIn(250);

            break;

        //окно success
        case 9:

            $("#p9").fadeIn(250);

            break;


    }
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
}
function showBriefPopup(){
    $(".briefPopup").css("display","block");
}
function closeBriefPopup(){
    $(".briefPopup").css("display","none");    
}

function submitBriefForm(n){
    switch(n){
        case 0:
            if($(".briefForm .nogood").length>0)
            {  
                $("#SubmitError").css("display","block");
            }
            else
            {
                $.post( "/ajax/brief.php", { name: $(".briefForm #num_NAME").val(), company: $(".briefForm #num_52").val(), site: $(".briefForm #num_53").val(), telephone: $(".briefForm #num_54").val(),email: $(".briefForm #num_55").val()}, function( data ) {
                    alert(data);
                });
                $(".briefForm").submit();
            }
            break;
        case 1:
            if($(".briefPopupForm .nogood").length>0) 
            {
                $("#popupSubmitError").css("display","block");
            }
            else
            {
                $.post( "/ajax/brief.php", { name: $(".briefPopupForm #num_NAME").val(), company: $(".briefPopupForm #num_52").val(), site: $(".briefPopupForm #num_53").val(), telephone: $(".briefPopupForm #num_54").val(),email: $(".briefPopupForm #num_55").val()}, function( data ) {
                    alert(data);
                });
                $(".briefPopupForm").submit();
            }
            break;
    }

}     


