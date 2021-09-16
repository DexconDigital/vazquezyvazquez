function inicio()
{$.ajax({
    url: "http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0",
    async: true,
    type: "GET",
    dataType: "json",
    beforeSend: function(xhr) {
        xhr.setRequestHeader(
            "Authorization",
            "Basic " +
            btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
        );
    },
    success: function(data) {
        var res = " ";
        if (data == 'Sin resultados') {
            res += "No hay Inmuebles Según el criterio de busqueda";
            $("#resultado").html(res);
        } else {
            var j = 0;
            for (var i in data) {
                if (parseInt(data[i].Canon) > 0) {
                    res +=
                        '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p0" style="margin-bottom: 10px;">' +
                        '<div class="box-two proerty-item">' +
                        '<div class="item-thumb">' +
                        '<a href="detalle_inmuebles.php?dt=' +
                        data[i].Codigo_Inmueble +
                        '"><img id="img-item1" src="';
                    if (data[i].foto1.localeCompare("") != 0) {
                        res += data[i].foto1;
                    } else {
                        res += "assets/img/no_image.png";
                    }
                    res += '"></a>' +
                        '<span class="badge span-top">' + data[i].Gestion + '</span><span class="badge span-top1">' + data[i].Tipo_Inmueble +
                        '</span>' +
                        "</div>" +
                        '<div class="item-entry overflow">' +
                        '<h5 style="margin-left:5px;text-transform: none;""><span class="fa fa-map-marker"></span> ' + data[i].Ciudad + ' - ' + data[i].Barrio + '</h5>' +
                        '<div class="dot-hr"></div>' +
                        '<span class="pull-left" style="padding: 6px;"><span><label>' + data[i].banios + '</label> <i class="fa fa-bath" aria-hidden="true"></i>&nbsp; <label>' +
                        data[i].Alcobas + '</label> <i class="fa fa-bed" aria-hidden="true"></i> ' + data[i].AreaConstruida + ' M<sup>2</sup></span> ' +
                        " </span>" +
                        '<span class="proerty-price pull-right" style="padding: 6px;"> $' +
                        data[i].Canon +
                        "</span>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                    j++;
                    if (j == 4) {
                        break;
                    }
                }
            }
            $("#resultado").html(res);
        }
    },
    error: function(data) {
        console.log("Fail")
    }
});
}
$(document).ready(function() {

    //guarda el id de los departamentos
    var res = new Array();

    //peticion departamentos
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
            );
        },
        dataType: "json",
        success: function(data) {
            
            if (data == "Sin resultados") {
                res += "No hay Inmuebles destacados";
            } else {
                var informacion = (data);
                for (var i = 0; i < informacion.length; i++) {
                    res[i] = informacion[i].id;
                }
            }
        }
    });

    //peticion ciudades
    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/res[0]",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
            );
        },
        dataType: "json",
        success: function(data) {
            
            if (data == "Sin resultados") {
                res += "No hay Inmuebles destacados";
            } else {
                var resultado = "<option value='0'>.::Ciudad::.</option>";
                var informacion = (data);
                for (var i = 0; i < informacion.length; i++) {
                    resultado +=
                        '<option value="' +
                        informacion[i].id +
                        '">' +
                        informacion[i].nombre +
                        "</option>";
                }
                $("#ciudad").html(resultado);
            }
        }
    });

    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
            );
        },
        dataType: "json",
        success: function(data) {
            
            if (data == "Sin resultados") {
                res += "No hay Inmuebles destacados";
            } else {
                var resultado = "<option value='0'>.::Tipo Inmueble::.</option>";
                var informacion = (data);
                for (var i = 0; i < informacion.length; i++) {
                    resultado +=
                        '<option value="' +
                        informacion[i].idTipoInm +
                        '">' +
                        informacion[i].Nombre +
                        "</option>";
                }
                $("#inmueble").html(resultado);
            }
        }
    });

    $("#ciudad").change(function() {
        var res_ciudad = $("#ciudad option:selected").val();
        console.log(res_ciudad);
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/zonas/idCiudad/" +
                res_ciudad +
                "",
            type: "GET",
            beforeSend: function(xhr) {
                xhr.setRequestHeader(
                    "Authorization",
                    "Basic " +
                    btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
                );
            },
            dataType: "json",
            success: function(data) {
                
                if (data == "Sin resultados") {
                    console.log("No hay zona");
                } else {
                    var resultado = "<option value='0'>.::Zona::.</option>";
                    var informacion = (data);
                    for (var i = 0; i < informacion.length; i++) {
                        resultado +=
                            '<option value="' +
                            informacion[i].id +
                            '">' +
                            informacion[i].nombre +
                            "</option>";
                    }
                    $("#zona").html(resultado);
                }
            }
        });
    });

    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/gestion/",
        type: "GET",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
            );
        },
        dataType: "json",
        success: function(data) {
            
            if (data == "Sin resultados") {
                console.log("No hay zona");
            } else {
                var resultado = "<option value='0'>.::Gestion::.</option>";
                var informacion = (data);
                for (var i = 0; i < informacion.length; i++) {
                    resultado +=
                        '<option value="' +
                        informacion[i].idGestion +
                        '">' +
                        informacion[i].Nombre +
                        "</option>";
                }
                $("#operacion").html(resultado);
            }
        }
    });
});

function searchi(){
    var ciudad = document.getElementById("ciudad");
    res_ciudad = ciudad.options[ciudad.selectedIndex].value;
    var inmueble = document.getElementById("inmueble");
    res_inmueble = inmueble.options[inmueble.selectedIndex].value;
    var zona = document.getElementById("zona");
    res_zona = zona.options[zona.selectedIndex].value;
    var contrato = document.getElementById("operacion");
    res_contrato = contrato.options[contrato.selectedIndex].value;

    $.ajax({
        url: "http://www.simi-api.com/ApiSimiweb/response/v21/filtroInmueble/limite/0/total/100/departamento/0/ciudad/" + res_ciudad + "/zona/" + res_zona + "/barrio/0/tipoInm/" + res_inmueble + "/tipOper/" + res_contrato + "/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0",
        async: true,
        type: "GET",
        dataType: "json",
        beforeSend: function(xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:9Gx1hhqSeQnEOWMF4FJzcrbDo6k1MD7LUGVLimA4-289")
            );
        },
        success: function(data) {
            var res = " ";
            console.log(data)
            if (data == 'Sin resultados') {
                res += "<h3>No hay Inmuebles Según el criterio de busqueda</h3>";
                $("#resultado").html(res);                
            } else {
                for (var i in data) {
                    if (parseInt(data[i].Canon) >= 0) {
                        res +=
                            '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 p0" style="margin-bottom: 10px;">' +
                            '<div class="box-two proerty-item">' +
                            '<div class="item-thumb">' +
                            '<a href="detalle_inmuebles.php?dt=' +
                            data[i].Codigo_Inmueble +
                            '"><img id="img-item1" src="';
                        if (data[i].foto1.localeCompare("") != 0) {
                            res += data[i].foto1;
                        } else {
                            res += "assets/img/no_image.png";
                        }
                        res += '"></a>' +
                            '<span class="badge span-top">' + data[i].Gestion + '</span><span class="badge span-top1">' + data[i].Tipo_Inmueble +
                            '</span>' +
                            "</div>" +
                            '<div class="item-entry overflow">' +
                            '<h5 style="margin-left:5px;text-transform: none;""><span class="fa fa-map-marker"></span> ' + data[i].Ciudad + ' - ' + data[i].Barrio + '</h5>' +
                            '<div class="dot-hr"></div>' +
                            '<span class="pull-left" style="padding: 6px;"><span><label>' + data[i].banios + '</label> <i class="fa fa-bath" aria-hidden="true"></i>&nbsp; <label>' +
                            data[i].Alcobas + '</label> <i class="fa fa-bed" aria-hidden="true"></i> ' + data[i].AreaConstruida + ' M<sup>2</sup></span> ' +
                            " </span>" +
                            '<span class="proerty-price pull-right" style="padding: 6px;"> $' +
                            data[i].Canon +
                            "</span>" +
                            "</div>" +
                            "</div>" +
                            "</div>";
                    }
                }
                $("#resultado").html("");
                $("#resultado").html(res);
            }
        },
        error: function(data) {
            console.log("Fail")
        }
    });

}