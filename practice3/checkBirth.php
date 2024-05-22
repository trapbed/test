<?php
$today = strtotime(date('Y-m-d'));
$birthday = isset($_POST['birth']) ? strtotime($_POST['birth']) : false;
$yearsOld = false;
if($_POST['birth']){
    $difference = $today - $birthday;
    $yearsOld = floor($difference / (365*24*60*60));
}
try{
    if($yearsOld < 0){
        throw new Exception("Вы еще не родились ?!");
    }
    if($yearsOld && $yearsOld < 18 ){
        throw new Exception("Вы еще совсем малыш! Вам всего лишь ".$yearsOld."! 
        <br><a href='../index.php'>Вернуться на главную</a>");
    }
    if(!$yearsOld){
        throw new Exception("Введите свою дату рождения! 
        <br><a href='../birth.php'>Вернуться</a>");
    }
    else {
        throw new Exception("Вам ".$yearsOld."! И Вам доступно пользование сайтом! 
        <br><a href='../index.php'>Вернуться на главную</a>");
    }
}catch(Exception $e){
    echo $e->getMessage();
    die();
}

?>

