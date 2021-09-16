var res_ciudad, res_inmueble, res_zona, res_contrato;

function buscar() {
    var ciudad = document.getElementById("ciudad");
    res_ciudad = ciudad.options[ciudad.selectedIndex].value;
    var inmueble = document.getElementById("inmueble");
    res_inmueble = inmueble.options[inmueble.selectedIndex].value;
    var zona = document.getElementById("zona");
    res_zona = zona.options[zona.selectedIndex].value;
    var contrato = document.getElementById("contrato");
    res_contrato = contrato.options[contrato.selectedIndex].value;

    window.location.href = "inmuebles.php?ti="+res_inmueble+"&gs="+res_contrato+"&zo="+res_zona+"&ci="+res_ciudad+"";

}

$( document ).ready(function() {
    var height = $("#somos").height();
    $("#vision").height(height);
    $("#exp").height(height);
});
