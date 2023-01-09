<?php
    if ($_POST['list']) {
        echo $_POST['list'];
    } else if ($_POST['individual']) {
        echo $_POST['individual'];
    } else {
    echo "Superglobal not found";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sending Emails With PHP</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans">
    </head>
    <body>
        <div id="heading">
            <h1><span id="php">Php</span> <span id="mail">Mail</span></h1>
        </div>
        <div id="formWrapper">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <!-- <label for='name'>Name: </label> -->
                <div id="nameWrapper">
                    <input type="text" name="firstname" id="firstname" placeholder="First name" size="15"> 
                    <!-- <label for='receiver'>To: </label> -->
                    <input type="text" name="lastname" id="lastname" placeholder="Last name" size="15">
                </div>
                <input type="email" name="receiver" id="receiver" placeholder="Receiver's email" size="40">
                <!-- <label for='subject'>Subject: </label> -->
                <input type="text" name="subject" id="subject" placeholder="Subject" size="40">
                <!-- <label for='emailBody'>Message: </label> -->
                <textarea name="emailBody" id="emailBody" placeholder="Message" cols="55"></textarea>
                <input type="submit" value="Send" name="submit" id="submit">
            </form>
        </div>
        <?php
            if (isset($_POST['submit'])) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $receiver = $_POST['receiver'];
                $subject = $_POST['subject'];
                $body = $_POST['emailBody'];
                $sender = "From:owuorian95@gmail.com";
                $message = $body . "\nFrom: ${firstname} ${lastname}";
                if (empty($firstname) || empty($_POST['lastname']) || empty($receiver) || empty($subject) || empty($body)) {
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



