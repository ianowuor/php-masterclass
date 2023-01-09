<?php 
// Database Parameters
define("SERVER_NAME", "localhost");
define("USERNAME", "owuorian");
define("PASSWORD", "Valmamucera95");
define("DATABASE", "emaillist");

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class User {
    private $firstName;
    private $lastName;
    private $email;

    function __construct($firstName, $lastName, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    function generateSQL($table) {
        $sql = "INSERT INTO ${table} (Email, FirstName, LastName)
        VALUES ('$this->email', '$this->firstName', '$this->lastName')";
        return $sql;
    }
}

function checkInput() {
    if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email'])) {
        return 'All fields are required';
    }

    return false;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up to our Email List</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for='firstName'>First Name: </label>
            <input type="text" name="firstName" id="firstName"><br>
            <label for="lastName">Last Name: </label>
            <input type="text" name="lastName" id="lastName"><br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br>
            <input type="submit" id="submit" name="submit" value="Sign Up">
        </form>
        <div id="messageBox" style="color: green;"></div>
    </body>
</html>

<?php
    if (isset($_POST['submit'])) {
        if (!checkInput()) {
            $user = new User($_POST['firstName'], $_POST['lastName'], $_POST['email']);
            if (mysqli_query($conn, $user->generateSQL('contacts'))) {
            echo "<script>
                let messageBox = document.getElementById('messageBox');
                messageBox.innerHTML = 'Thanks for subscribing';
                setTimeout(function () {
                    messageBox.style.display = 'none';
                }, 5000);
            
            </script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }        
        } else {
            echo checkInput();
        }
    }
?>