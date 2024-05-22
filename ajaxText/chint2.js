
var xmlHttp;

function showHint(str){
    if (str.length==0)
    {
        // если длина инпута пустая оставляем пустоту
        $("#txtHint").html("");
        return;
    }
// создаем переменную url в которую записывается ссылка на файл php в котром юудут обраб ответы
    var url = "ghint.php";
// Конкантенируем  url и GET параметр с значением полученным из инпута
    url = url+"?q="+str;
// присваивавем переменной url конкатенацию url доп значение sid с рандомным значением
    url = url+"&sid="+Math.random();
// ajax обращается к функции и передает полученный текст из инпута
    $.get(
        url, function(data){
            $("#txtHint").html(data);
        })
}

