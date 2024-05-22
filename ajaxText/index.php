<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src='chint.js'></script> -->
    <script src="jquery-3.7.1.js"></script>
    <script src='chint2.js'></script>
</head>
<body>
    <form action="">
    First name:
    <input type="text" id="txt1" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>