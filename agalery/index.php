<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Динамическая подгрузка изображений</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <style>
        #imageCantainer{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 10vmax;
        }
        #imageContainer>img{
            width: 30vmax;
        }
    </style>
</head>
<body>
    <h1>Галерея изображений</h1>
    <div id="imageContainer"></div>
    <button id="loadMoreBtn">Еще</button>
</body>
</html>