$(function() {

    animate = 0; //���� ��������

    //���������� �������� ��� ������, �� ������� ������ ����
    $(".icon").mouseover(function(){
        $("#d" + $(this).attr("id").slice(1)).css("display","block");
    })
    $(".icon").mouseout(function(){
        $(".icon_desc").css("display","none")
    })


    //��������� �������� ������
    countdown();
    setInterval(countdown,1000);

    //��������� �� ������� ���������� ��������, ����� ���������� ������ ����� ���������
    scroll_check();




    //��������� ����������� ����� �����
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
            if ($(this).attr("name")=="email") $(this).val("������ �������� email!");   
            else if($(this).attr("name")=="company") $(this).val("�� ������� �������� �����������!");    
                else if($(this).attr("name")=="name") $(this).val("���� ��� �� ���������!");
                    else if($(this).attr("name")=="phone") $(this).val("�� ������ �������!");
                        else $(this).val("������������ ���� �� ���������!");


            br = "yes";
        }  
    })

    $("input").focus(function(){
        if ($(this).val() === "���� ��� �� ���������!"|| $(this).val() ==="������ �������� email!"|| $(this).val() ==="���� Email �� ���������!") {
            $(this).val(""); 
        }
        $(this).parent().removeClass("nogood");
        $(this).removeClass("nogood");  
    })


    //�������� ������� ����
    $("#form1").submit(function(){
        form_id = $(this).attr("id").slice(4);
        //��������� ����������� ����
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
                    $(this).val("������ �������� email!");    
                }
                
                else
                    $(this).val("���� �� ���������!"); 
                br = "yes";
            }
            
        })
             
        if (br == "yes") {

            return false;
        }

        //���� ���������� �������� �� ���������, �� ��������� ����, ������� ���������� ������ �� �����

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
                        //������ �� ������

                        case 0:
                            yaCounter23705659.reachGoal('ORDER11'); return true;
                            break;

                        //������������� ������������
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

// ���������� ��������� ��� �������� ���������� email
var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
//var reEmailCheck = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;    

//������� ����������� ������ �� �����
function name_check(number,e){ //number - �����, e - ������� ���������: d - ����, h -  ���, m -  ������, s - �������

    var number_name;

    //��� 11 12 13 � 14 ������� ��������� ������
    switch(number) {

        case 11:
        switch (e) {
            case "d": number_name = "����"; break;
            case "h": number_name = "�����"; break;
            case "m": number_name = "�����"; break;
            case "s": number_name = "������"; break;
        }
        ; break;

        case 12:
        switch (e) {
            case "d": number_name = "����"; break;
            case "h": number_name = "�����"; break;
            case "m": number_name = "�����"; break;
            case "s": number_name = "������"; break;
        }
        ; break;

        case 13:
        switch (e) {
            case "d": number_name = "����"; break;
            case "h": number_name = "�����"; break;
            case "m": number_name = "�����"; break;
            case "s": number_name = "������"; break;
        }
        ; break;

        case 14:
        switch (e) {
            case "d": number_name = "����"; break;
            case "h": number_name = "�����"; break;
            case "m": number_name = "�����"; break;
            case "s": number_name = "������"; break;
        }
        ; break;


        default:
        var last_num = (String(number)).charAt((String(number).length - 1));
        switch (last_num) {
            case "1":
            switch (e) {
                case "d": number_name = "����"; break;
                case "h": number_name = "���"; break;
                case "m": number_name = "������"; break;
                case "s": number_name = "�������"; break;
            }
            break;

            case "2":
            switch (e) {
                case "d": number_name = "���"; break;
                case "h": number_name = "����"; break;
                case "m": number_name = "������"; break;
                case "s": number_name = "�������"; break;
            }
            break;

            case "3":
            switch (e) {
                case "d": number_name = "���"; break;
                case "h": number_name = "����"; break;
                case "m": number_name = "������"; break;
                case "s": number_name = "�������"; break;
            }
            break;

            case "4":
            switch (e) {
                case "d": number_name = "���"; break;
                case "h": number_name = "����"; break;
                case "m": number_name = "������"; break;
                case "s": number_name = "�������"; break;
            }
            break;

            default:
            switch (e) {
                case "d": number_name = "����"; break;
                case "h": number_name = "�����"; break;
                case "m": number_name = "�����"; break;
                case "s": number_name = "������"; break;
            }
            break;
        }

        break;



    }






    return number_name;
}


//������� ��������� �������
function countdown() {
    /*
    var date = finish_date.split(".");
    var month, month_rus;

    switch (parseInt(date[1])) {
    case 1: month = "January"; month_rus = "������";  break;
    case 2: month = "February"; month_rus = "�������"; break;
    case 3: month = "March"; month_rus = "�����"; break;
    case 4: month = "April"; month_rus = "������"; break;
    case 5: month = "May"; month_rus = "���"; break;
    case 6: month = "June"; month_rus = "����"; break;
    case 7: month = "July"; month_rus = "����"; break;
    case 8: month = "August"; month_rus = "�������"; break;
    case 9: month = "September"; month_rus = "��������"; break;
    case 10: month = "October"; month_rus = "�������"; break;
    case 11: month = "November";  month_rus = "������"; break;
    case 12: month = "December";  month_rus = "�������"; break;
    }

    var countdown = date[0] + " " + month + " " + date[2];



    var rightNow = new Date();
    var final = Date.parse(countdown);  //���� ��������� � �������������
    var now = Date.parse(rightNow); //������� ���� � �������������

    var dif =  final - now; //���������� ������ �� ��������� �������
    if (dif < 0) {dif = 0; }
    var c_days = Math.floor(dif / 86400000);  //���������� ����� ���� �� ���������
    $(".days > .num").html(c_days);
    var day_name = name_check(c_days,"d");
    $(".days > .num_name").html(day_name);

    var without_days = dif - c_days * 86400000; //���������� �����, ��� ����� ����
    var c_hours = Math.floor(without_days / 3600000); //���������� ����� ����� �� ���������
    if (String(c_hours).length == 1) {c_hours = "0" + c_hours;}
    $(".hours > .num").html(c_hours);
    var hour_name = name_check(c_hours,"h");
    $(".hours > .num_name").html(hour_name);

    var without_hours = without_days - c_hours * 3600000; //���������� �����, ��� ����� ���� � �����
    var c_minutes = Math.floor(without_hours / 60000); //���������� ����� ����� �� ���������
    if (String(c_minutes).length == 1) {c_minutes = "0" + c_minutes;}
    $(".minutes > .num").html(c_minutes);
    var minute_name = name_check(c_minutes,"m");
    $(".minutes > .num_name").html(minute_name);

    var without_minutes = without_hours - c_minutes * 60000; //���������� �����, ��� ����� ����, ����� � �����
    var c_seconds = Math.floor(without_minutes / 1000); //���������� ����� �� ���������
    if (String(c_seconds).length == 1) {c_seconds = "0" + c_seconds;}
    $(".seconds > .num").html(c_seconds);
    var second_name = name_check(c_seconds,"s");
    $(".seconds > .num_name").html(second_name);



    //������� ���� � ������� %) � ������ �����, ��� ��� ����������
    //$(".bomb_text").html(date[0] + "." + date[1]);
    // $(".attention").html('<span>��������!</span> �� ����� ����� �������� ' + c_days +' ' + day_name + ".");
    //$(".sub_desc").html('<span>*</span>����� ��������� �� ' +date[0] + ' ' + month_rus);  
    */
}



//���������, ��������� ����������� ��������, ����� ������� ������ ����� ���������
function scroll_check(){

    //��� ������������ �������� ��������� ������� �����
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


    //�������� ������� ��������� ��� ��������� ����������
    if (parseInt($("body").css("width")) < 1280) {
        $("#nav").css("display", "none");
    }


    //������ ������� �� �������� ����
    $(document).scroll(function() {

        if ($("#nav").length>0){

            if (animate == 0) {

                //��� ������������ �������� ��������� ������� �����
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


                //�������� ������� ��������� ��� ��������� ����������
                if (parseInt($("body").css("width")) < 1280) {
                    $("#nav").css("display", "none");
                }


                if (animate == 0 ) { //���� � ������ ������ �� ���������� ��������

                    var scroll_top = $(window).scrollTop();
                    // alert(scroll_top);
                    //������� �����
                    var cur_slide = $("#nav > .active").attr("id").slice(1);
                    var cur_slide_top = $("#b" + cur_slide).offset().top;

                    //���������� �����
                    var prev_slide = cur_slide - 1;
                    if (prev_slide < 1) {prev_slide = 1;}
                    var prev_slide_top = $("#b" + prev_slide).offset();

                    //�������� �����
                    var next_slide = cur_slide*1+1;
                    if (next_slide > 6) {next_slide = 6; }
                    var next_slide_top = $("#b" + next_slide).offset();

                    //��� ������� ����
                    if (scroll_top > next_slide_top.top ) {
                        $(".nav_block").removeClass("active");
                        $("#n" + next_slide).addClass("active");
                    }

                    //��� ������� �����
                    if (scroll_top  < cur_slide_top ) {
                        $(".nav_block").removeClass("active");
                        $("#n" + prev_slide).addClass("active");
                    }

                }

            }  
        }
    });

}


//������ �������� � ���������� �����. �� ���� - ����� �����
function main_scroll(n) {
    animate = 1; //��������� ���� ��������, ����� � ���� ������ ������ ������� �� �����������

    $(".nav_block").removeClass("active");
    $("#n" + n).addClass("active");
    //������ ��������
    var new_top = $("#b" + n).offset();
    $("html, body").stop().animate({ scrollTop: new_top.top}, 750 , function(){animate = 0;});

}


//����� ������������ ����. �� ���� - ����� ����
function show_popup(n){


    //�������� ��� �������� ����
    $(".popup").css("display","none");

    var form_head;

    //�������� ����
    switch(n) {
        //����������� ���
        case 0:
            form_head = '<span>�����������</span> ���';
            $("#p0 .popud_head").html(form_head);
            $(".form0").val(n);
            $("#p0").fadeIn(250);

            break;


        //������������� ������������
        case 1:
            form_head = '<span>����� ������</span> ����� �� 1� ';
            $("#p1 .popud_head").html(form_head);
            $(".form1").val(n);
            $("#p1").fadeIn(250);


            break;


        //���������� ������������ �����������
        case 2:
            form_head = '<span>����� ������</span> ���������� ������������ �����������';
            $("#p1 .popud_head").html(form_head);
            $(".form1").val(n);
            $("#p1").fadeIn(250);

            break;


        //������������ ����������� �� 1�
        case 3:
            form_head = '<span>����� ������</span> ������������ �� ���������� ';
            $("#p1 .popud_head").html(form_head);
            $(".form1").val(n);
            $("#p1").fadeIn(250);

            break;
        
        //������� �������� ���    
        case 4:
            $("#p4").fadeIn(250);

            break;
        
        //������������� �������� 1�   
        case 5:
            $("#p5").fadeIn(250);

            break;

        //���� success
        case 9:

            $("#p9").fadeIn(250);

            break;


    }
}

//�������� ������������ ����
function popup_close(e) {
    //

    $(e).parent(".popup").fadeOut(250);
    //������� ���� ���� ����
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

