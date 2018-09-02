function show_cidades(uf) {
    let request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            document.getElementById("cidade").innerHTML = request.responseText;
        }
    };
    request.open("GET", "ajax_cidade.php?uf=" + uf, true);
    request.send();
}
