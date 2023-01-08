<!DOCTYPE html>
<html>
    <head>
        <title>Sending Emails With PHP</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for='name'>Name: </label><br>
            <input type="text" name="name" id="name"><br>
            <label for='receiver'>To: </label><br>
            <input type="email" name="receiver" id="receiver"><br>
            <label for='subject'>Subject: </label><br>
            <input type="text" name="subject" id="subject"><br>
            <label for='emailBody'>Message: </label><br>
            <textarea name="emailBody" id="emailBody"></textarea><br>
            <input type="submit" value="Send" name="submit" id="submit">
        </form>
        <?php
            
            
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $receiver = $_POST['receiver'];
                $subject = $_POST['subject'];
                $body = $_POST['emailBody'];
                $sender = "From:owuorian95@gmail.com";
                $message = $body . "\nFrom: ${name}";
                if (empty($name) || empty($receiver) || empty($subject) || empty($body)) {
                    die("<p style='color: red;'>All fields are mandatory</p>");
                }

                if (mail($receiver, $subject, $message, $sender)) {
                    header("Location: success.php");
                } else {
                    header("Location: error.php");
                }
            }


        ?>
    </body>
</html>



