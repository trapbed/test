<?php

    
    $num1 = $_POST['num1'] ? $_POST['num1'] : false;
    $num2 = $_POST['num2'] ? $_POST['num2'] : false;
    $num3 = $_POST['num3'] ? $_POST['num3'] : false;

    try{
        
        if(!$num1 && !$num2 && !$num3){
            throw new Exception("Введите Значение 1, Значение 2 и Значение 3 ! <br><a href='../formula.php'>Вернуться </a>");
        }
        if(!$num1 && !$num2){
            throw new Exception("Введите Значение 1 и Значение 2 ! <br><a href='../formula.php'>Вернуться</a>");
        }
        if(!$num1 && !$num3){
            throw new Exception("Введите Значение 1 и Значение 3! <br><a href='../formula.php'>Вернуться</a>");
        }
        if(!$num2 && !$num3){
            throw new Exception("Введите Значение 2 и Значение 3 ! <br><a href='../formula.php'>Вернуться </a>");
        }
        if(!$num1){
            throw new Exception("Введите Значение 1! <br><a href='../formula.php'>Вернуться</a>");
        }
        if(!$num2){
            throw new Exception("Введите Значение 2! <br><a href='../formula.php'>Вернуться</a>");
        }
        if(!$num3){
            throw new Exception("Введите Значение 3! <br><a href='../formula.php'>Вернуться</a>");
        }       
        else{
            if(is_numeric($num1) && is_numeric($num2) && is_numeric($num3)){
                throw new Exception("Задача : ln(R1 - R2) * R2 - R3 <br> Решение с ответом : <br>ln(".$num1." - ".$num2.") * ".$num2." - ".$num3."  =  ".log($num1 - $num2) * $num2 - $num3."<br><a href='../index.php'>Вернуться на главную</a>");
            }
            else{
                if(!is_numeric($num1)){
                    throw new Exception("Число 1 не вещественное <br><a href='../formula.php'>Вернуться</a>");
                }
                if(!is_numeric($num2)){
                    throw new Exception("Число 2 не вещественное <br><a href='../formula.php'>Вернуться</a>");
                }
                if(!is_numeric($num3)){
                    throw new Exception("Число 3 не вещественное <br><a href='../formula.php'>Вернуться</a>");
                }
            }
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
        die();
    }
?>
