<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<?php
$codigo = $_GET["dt"];
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vasquez & Vasquez | Inmuebles</title>
    <meta name="description" content="Desarrollado por Dexcon Digital">
    <meta name="author" content="Dexcon Digital">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="assets/css/price-range.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css?v=1">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style type="text/css">
        #imagen {
            width: 100%;
            height: 100%;
            position: relative;
        }

        #imagen>div {
            position: center;
            bottom: 10px;
            color: #fff;
            background-color: #000;
            padding: 2px 10px;
            opacity: 0.5;
            font-weight: bold;
        }
    </style>    
</head>
<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->

    <div class="header-connect">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8  col-xs-12">
                    <div class="header-half header-call">
                        <p>
                            <span><i class="pe-7s-mail"></i> Arriendos@inmobiliariavasquezyvasquez.com</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                    <div class="header-half header-social">
                        <span><i class="pe-7s-call"></i> PBX: (601) 313 1710</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->

    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="index.html" style="padding: 0;"><img src="assets/img/logo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse yamm" id="navigation">
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="index.html">Inicio</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="dropdown-toggle active" href="inmuebles.php">Inmuebles</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="servicios.html">Servicios</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="quienes_somos.html">Quienes Somos</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="clientes.html">Clientes</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contacto</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->

    <div class="page-head-i">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">RESULTADO DE BUSQUEDA INMUEBLES</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
        <div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                    <!-- /.feature title -->
                    <div class="container">
                        <h2>DETALLE DEL INMUEBLE</h2>
                        <br>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="description">
                                    <div class="title-client">
                                        <h4>Descripción</h4>
                                    </div>
                                    <strong id="titulo"></strong>
                                    <br>
                                    <span class="badge" id="gestion"></span>
                                    <span class="badge vasquez" id="tipo"></span>
                                    <br>
                                        <div class="pull-left"><strong><span class="fa fa-money"></span><span id="precio"></span></strong></div>
                                        <br>
                                        <hr>
                                        <div class="pull-left"><strong><span class="fa fa-map-marker"></span><span id="ubicacion"></span></strong></div>
                                        <br>
                                        <hr>
                                        <div class="pull-left"><strong><span class="fa fa-arrows-h"></span><span id="area"></span></strong></div>
                                        <br>
                                        <hr>
                                        <div class="pull-left"><strong><span class="fa fa-bed"></span><span id="banios"></span></strong></div>
                                        <br>
                                        <hr>
                                        <div class="pull-left"><strong><span class="fa fa-bath"></span><span id="alcobas"></span></strong></div>
                                        <br>
                                        <hr>
                                        <div class="pull-left"><strong><span class="fa fa-location-arrow"></span><span id="estrato"></span></strong></div>
                                        <br>
                                        <hr>
                                        <div class="pull-left"><strong><span class="fa fa-money"></span><span id="administracion"></span></strong></div>
                                        <br>
                                        <br>
                                    </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" id="details">

                            </div>                            
                            
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div id="map"></div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-area">

    </div>

    <script src="assets/js/modernizr-2.6.2.min.js"></script>

    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.js"></script>

    <script src="assets/js/easypiechart.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.js"></script>

    <script src="assets/js/icheck.min.js"></script>
    <script src="assets/js/price-range.js"></script>

    <script src="assets/js/main.js?v=2"></script>
    <script src="assets/js/style.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3eC2yGn79AX-GzatxdgPZB1PEiBWHuo&callback=initMap"></script>
    <?php echo "<script> var x ='" . $codigo . "';</script>"; ?>
    <script>
        var latitud = 0;
        var longitud = 0;
        $.ajax({
            url: "http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/"+x+"",
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
                console.log(data);
                var j = 1;
                var carrousel1  = '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                var carrousel2  = '';
                if(data.fotos== undefined){
                        carrousel1 += '<li data-target="#myCarousel" data-slide-to="0"></li>';
                        carrousel2 += '<div class="item active">'+
                                    '<img src="assets/img/no_image.png">'+
                                    '</div>';
                                    carrousel1 += '<li data-target="#myCarousel" data-slide-to="1"></li>';
                        carrousel2 += '<div class="item ">'+
                                    '<img src="assets/img/no_image.png">'+
                                    '</div>';
                    }else{
                carrousel2 += '<div class="item active">'+
                                    '<img src="' + data.fotos[0].foto + '">'+
                                    '</div>';

                for(var y = 1; y < Object.keys(data.fotos).length-1; y++){
                    if(data.fotos[y].foto != undefined){
                    carrousel1 += '<li data-target="#myCarousel" data-slide-to="'+j+'"></li>';
                    carrousel2 += '<div class="item">'+
                                    '<img src="' + data.fotos[y].foto + '">'+
                                    '</div>';
                    j++;
                    }
                }
            }
                $("#titulo").append(data.barrio + " "+data.depto);
                $("#precio").append(" Precio: "+data.precio);
                $("#ubicacion").append(" Ubicación: "+data.barrio +" - "+data.ciudad);
                $("#alcobas").append(" Alcobas: "+data.alcobas);
                $("#banios").append(" Baños: "+data.banos);
                $("#area").append(" Area construida: "+data.AreaConstruida +" mts<sup>2</sup>");
                $("#gestion").append(data.Gestion);
                $("#tipo").append(data.Tipo_Inmueble);
                $("#estrato").append(" Estrato: "+data.Estrato);
                $("#administracion").append(" Administracion: "+data.Administracion);
                $("#").append();
                $(".descripcion").text(data.descripcionlarga);
                //add data to html
                $(".carousel-indicators").html(carrousel1);
                $(".carousel-inner").html(carrousel2);

                $('#mycarousel').carousel();
                var res = '<div class="panel-group" id="accordion">'+
                                '<div class="panel panel-default">'+
                                    '<div class="panel-heading">'+
                                    '<h4 class="panel-title">'+
                                        '<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Detalles</a>'+
                                    '</h4>'+
                                    '</div>'+
                                    '<div id="collapse1" class="panel-collapse collapse in">'+
                                    '<div class="panel-body" style="text-align:justify;">'+data.descripcionlarga+'</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="panel panel-default">'+
                                    '<div class="panel-heading">'+
                                    '<h4 class="panel-title">'+
                                        '<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Caracteristicas Externas</a>'+
                                    '</h4>'+
                                    '</div>'+
                                    '<div id="collapse2" class="panel-collapse collapse">'+
                                    '<div class="panel-body">';
                                    if(data.caracteristicasExternas != undefined){
                                        res+='<div class="col-md-12">'+
                                        '<table class="table table-bordered table-striped">';
                                        for(var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++){
                                        if(x < Object.keys(data.caracteristicasExternas).length-1){     
                                        res+= '<tr>';
                                        res+= '<td> <i class="fa fa-check"></i>'+data.caracteristicasExternas[x].Descripcion+'</td>';
                                        res+= '<td> <i class="fa fa-check"></i>'+data.caracteristicasExternas[x+1].Descripcion+'</td>';
                                        res+= '</tr>';
                                        x+=2;
                                    }else{
                                        break;
                                    }
                                    }
                                    res+='</table></div>';
                                }
                                res+='</div>'+
                                '</div>'+
                                '</div>';

                                res+='<div class="panel panel-default">'+
                                    '<div class="panel-heading">'+
                                    '<h4 class="panel-title">'+
                                        '<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Caracteristicas internas</a>'+
                                    '</h4>'+
                                    '</div>'+
                                    '<div id="collapse3" class="panel-collapse collapse">'+
                                    '<div class="panel-body" style="text-align:justify;">';
                                    if(data.caracteristicasInternas != undefined){
                                        res+='<div class="col-md-12">'+
                                        '<table class="table table-bordered table-striped">';
                                        for(var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++){
                                        if(x < Object.keys(data.caracteristicasInternas).length-1){     
                                        res+= '<tr>';
                                        res+= '<td> <i class="fa fa-check"></i>'+data.caracteristicasInternas[x].Descripcion+'</td>';
                                        res+= '<td> <i class="fa fa-check"></i>'+data.caracteristicasInternas[x+1].Descripcion+'</td>';
                                        res+= '</tr>';
                                        x+=2;
                                    }else{
                                        break;
                                    }
                                    }
                                    res+='</table></div>';
                                }
                                res+='</div>'+
                                    '</div>'+
                                    '</div>'+
                                '</div>';
                $("#details").append(res);
                latitud = data.latitud;
                longitud = data.longitud;
                initMap(latitud,longitud);
            },
            error: function(data) {
                console.log("Fail")
            }
        });

        function initMap(latitud,longitud) {
            var uluru = {lat: parseFloat(latitud), lng:parseFloat(longitud)};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

    </script>

</body>

</html>