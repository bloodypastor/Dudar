<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Зворотній звязок";
    require_once "blocks/head.php"
    ?>
    <script src="libs/jquery-3.1.0.min.js"></script>
    <script>
        $(document).ready (function () {
            $("#done").click(function () {
                $('#messageShow').hide();
                var name = $("#name").val ();
                var email = $("#email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail ="";
                if (name.length < 3) fail = "Імя не менше 3 символів";
                else if (email.split('@').length -1 == 0 || email.split('.').length -1 == 0)
                    fail = "Ви ввели невірний адрес";
                else if (subject.length < 5)
                    fail = "Тема повідомлення не менше 5 символів";
                else if (message.length < 20)
                    fail = "Повідомлення не менше 20 символів";
                if (fail != "") {
                    $('#messageShow').html (fail + "<div class='clear'><br><div/>");
                    $('#messageShow').show();
                    return false;
                }
                $.ajax({
                    url:'ajax/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email, 'subject': subject, 'message': message},
                    dataType: 'html',
                    success: function (data) {
                        
                    }
                })
            });

        });
    </script>

</head>
<body>
<?php  require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="left-bar">
        <input type="text" placeholder="Name" id="name" name="name"><br>
        <input type="text" placeholder="E-mail" id="email" name="email"><br>
        <input type="text" placeholder="Subject" id="subject" name="subject"><br>
        <textarea name="Message" placeholder="Write your message" id="message"></textarea><br>
        <div id="messageShow"></div>
        <input type="button" id="done" name="done" value="Send"><br>
    </div>
    <?php require_once "blocks/right_bar.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>

