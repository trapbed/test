<?php
session_start();
include "connect.php";
$classes_number = mysqli_query($con, "select distinct number from classes order by number");
$id_class = isset($_GET['class']) ? $_GET['class'] : false;

$sort = isset($_GET['sort']) ? $_GET['sort'] : false;
$query = "";
if (($sort == "") and $id_class) {
  $query = "select id_student, name, surname, patronymic, birthday, number, letter from classes join student on id_class=class where number=$id_class";
} else if (!$id_class and $sort) {
  $query = "select id_student, name, surname, patronymic, birthday, number, letter from classes join student on id_class=class order by $sort";
} else if ($id_class and $sort) {
  $query = "select id_student, name, surname, patronymic, birthday, number, letter from student join classes on id_class=class where number=$id_class order by $sort";
}
else {$query = "select id_student, name, surname, patronymic, birthday, number, letter from student join classes on id_class=class";}
$students = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="images/school.png" alt="school" id='imageLogo'></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php 
                if(isset($_SESSION['user_name'])){
                    echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='/'>".$_SESSION['user_name']."</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='exit.php'>Выход</a>
                    </li>";
                }
                else{
                    echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='auth.php'>Вход</a>
                    </li>";
                }
            ?>
        
        
        
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Найти</button>
      </form>

    </div>
  </div>
</nav>