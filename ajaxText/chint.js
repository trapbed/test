var xmlHttp;
function showHint(str){
    if (str.length==0)
    {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }

    xmlHttp = new XMLHttpRequest();

    var url = "ghint.php";
    url = url+"?q="+str;
    url = url+"&sid="+Math.random();
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}

function stateChanged(){
    if(xmlHttp.readyState == 4){
        // console.log(xmlHttp.responseText);
        document.getElementById("txtHint").innerHTML = xmlHttp.responseText;
    }
}