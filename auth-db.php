<?php
    session_start();

    $login = strip_tags(trim($_POST['login']));
    $pass = strip_tags(trim($_POST['pass']));

    require ("connect.php");

    $teacher = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM teachers WHERE email_teacher='$login' AND password_teacher='$pass'" ));

    // print_r($user);

    if(empty($teacher['password_teacher']) AND empty($teacher['email_teacher'])){
        echo "Такой пользователь не найден.";
        exit();
    }
    else if(empty($teacher['password_teacher']) OR empty($teacher['email_teacher'])){
        echo "Логин или пароль введены неверно";
        exit();
    }
    
    $_SESSION["user_name"] = $teacher['name_teacher'];
    setcookie('name', $teacher['name_teacher'], time() + 3600, "/");
    
    header('Location: page.php');

?>