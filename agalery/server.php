<?php
// Подключение к базе данных
$db = mysqli_connect('localhost', 'root', '', 'galery');
// Получение параметров из запроса
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = isset($_GET['perPage']) ? (int)$_GET['perPage'] : 3;
// Получение общего количества изображений
$totalImages = mysqli_query($db, 'SELECT COUNT(*) FROM images');
$totalImages = mysqli_fetch_array($totalImages)[0];
$totalPages = ceil($totalImages / $perPage);
// Получение изображений для текущей страницы
$offset = ($page - 1) * $perPage;
$images = mysqli_query($db, "SELECT url, description FROM images LIMIT $perPage OFFSET $offset");
$imagesArray = array();
while ($image = mysqli_fetch_array($images)) {
    $imagesArray[] = array('url' => $image['url'], 'description' => $image['description'], 'span' => $image['description']);
}
// Отправка ответа в JSON
$response = array(
    'images' => $imagesArray,
    'totalPages' => $totalPages
);
echo json_encode($response);

mysqli_close($db);
?>