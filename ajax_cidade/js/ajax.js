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

function show_bairros(cidade) {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("bairro").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "ajax_bairro.php?cidade=" + cidade, true);
    xmlhttp.send();
}
