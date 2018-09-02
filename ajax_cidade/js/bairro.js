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
