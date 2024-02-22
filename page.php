<?php
    include "header.php";
    session_start();
    echo "<main id='account'>Здравствуй, ".$_SESSION['user_name']." !</main></body>";
?>