function show_cidades(uf) {
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cidade").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "ajax_cidade.php?uf=" + uf, true);
    xmlhttp.send();
}
