<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            gap: 1vmax;
        }
        input[type=text]{
            width: 25vmax;
        }
        input[type=submit]{
            width: 15vmax;
        }
        label{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="formulaCheck.php" method='post'>
        <h1>Задача:</h1>
        <p>Ln(  <font color='orange'>R1</font>  -  <font color='orange'>R2</font>  )  *  <font color='orange'>R2</font>  -  <font color='orange'>R3</font></p>
        <label for="num1">
            Значение1 (R1)
            <input name='num1' type="text">
            <!-- <input name='num1' type="text" pattern='[0-9]{0,}'> -->
        </label>

        <label for="num2">
            Значение2 (R2)
            <input name='num2' type="text">
            <!-- <input name='num2' type="text" pattern='[0-9]{0,}'> -->
        </label>

        <label for="num3">
            Значение3 (R3)
            <input name='num3' type="text">
            <!-- <input name='num3' type="text" pattern='[0-9]{0,}'> -->
        </label>
        <input type="submit" value="Вычислить!">
    </form>
</body>
</html>