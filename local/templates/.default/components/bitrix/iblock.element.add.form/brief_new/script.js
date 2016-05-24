$(function(){

    //имитация поля выбора файла
    $("input[data-name=FILE_SELECT]").on("click", function(){
        $(this).siblings("input").click();
    })    
    //подстановка имени файла в псевдоинпут
    $("input[name=BRIEF_FILE]").on("change", function(){
        $(this).siblings("div").find("span").html($(this).val());
    })
    /////


    $("input[data-code='PHONE']").mask('+7(999)999-99-99');

    //валидация формы при отправке
    $("form[name=brief_add]").on("submit", function(e) {


        var form = $(this);  

        var form_id = form.attr("id");  

        var reEmailCheck=/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.[a-z]{2,4}$/i;
        var rePhoneCheck = /^\d[\d\(\)\ -]{4,14}\d$/;

        //проверяем заполненные поля       
        var br;

        form.find(".req").each(function(){
            var el = $(this), val = el.val();

            if (val.indexOf("Заполните") !== -1) {
                val = "";
            }

            var validEmail = ($(this).attr("name")=="EMAIL" || $(this).data("code")=="EMAIL") ? reEmailCheck.test(val) : true;      

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
})


