// создали счетчики для подсчета выведенных картинок
var currentPage = 1;
var imagesPerPage = 3;
var totalPages;
// обращаемся к документу, только после полной загрузки страницы
$(document).ready(function() {
    // функция вводящая текст в атрибуты
    function displayImages(images) {
        // перебираем все элементы -изображения
        $.each(images, function(index, image) {
            // ищем теги изображения
            var imageElement = $('<img>');
            // var span = $('<span>');
            // imageElement.innerText(image.description);

            // вводим в атрибуты тега изображения текст полученный из БД
            imageElement.attr('src', "../images/"+image.url);
            imageElement.attr('alt', image.description);
            // после чего добавляем теги изображения
            $('#imageContainer').append(imageElement);
        });
    }
    function loadImages() {
        // в ajax`е прописали 
        $.ajax({
            // к какому файлу обращаемся 
            url: 'server.php',
            // передаваемые данные
            data: { page: currentPage, perPage: imagesPerPage },
            // тип данных
            dataType: 'json',
            // функция при успехе (передаваемые данные-> переменные- счетчики)
            success: function(data) {
                // передаем в функцию параметром данные о изображении
                displayImages(data.images);
                totalPages = data.totalPages;
                updateLoadMoreButton();
            },
            error: function() {
                console.error('Ошибка при загрузке изображений');
            }
        });
    }
    function updateLoadMoreButton() {
        if (currentPage < totalPages) {
            $('#loadMoreBtn').show();
        } else {
            $('#loadMoreBtn').hide();
        }
    }
    loadImages();
    $('#loadMoreBtn').on('click', function() {
        currentPage++;
        loadImages();
    });
});