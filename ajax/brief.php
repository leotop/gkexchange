<?
            $name = $_POST["name"];
            $company = $_POST["company"];
            $site = $_POST["site"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];

            $theme = "Заполнен новый Бриф";
            $mail_text = "
            
            <b>Имя:</b> $name<br>
            <b>Название компания:</b> $company<br>
            <b>Сайт:</b> $site<br>
            <b>Телефон для связи:</b> $phone<br>
            <b>Email:</b> $email<br>

            "; 

            ////////////////////////////    
            $to1 = 'GK@GKEXCHANGE.RU';  $to1 = 'me@webgk.ru';
            $mail = mail($to1,$theme,$mail_text, "From: brief@gkexchange.ru\r\n"."Content-type: text/html; Charset=utf-8 \r\n");
            $mail = mail($to2,$theme,$mail_text, "From: brief@gkexchange.ru\r\n"."Content-type: text/html; Charset=utf-8 \r\n");
?>