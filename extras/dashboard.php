<?php
    session_start();

    if (isset($_SESSION['username'])) {
        echo '<h1>Welcome ' . $_SESSION['username'] . '</h1>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<h1>Welcome Guest</h1> <br>';
        echo '<a href="/php-crash/sessions.php">Home</a>';
        echo '--- ' . $_SESSION['username'];
    }
?>
