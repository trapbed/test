<?php
    include "connect.php"; //выражение include включает и выполняет указанный файл

    $query_get_category = " select * from teachers ";
    $categories = mysqli_fetch_all(mysqli_query($con, $query_get_category));//получаем результат запроса из переменной Query_get_category 
    //и преобразуем его в двумерный массив, где каждый элемент это массив с построчным получением кортежей из таблицы результата запроса 
    
    include "header.php";
?>
<main id='form'>
    <div class="containermt">
    <h1>Форма авторизации</h1>
    <form action="auth-db.php" method="post" class='formAuth'>
        <input type="text" name="login" class="form-control" id="login" placeholder="Почта"><br>
        <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
        <div id='forButtons'>
            <button class="btn-success">Авторизоваться</button>
        </div>
    </form> 
    </div>
</main>
</body>