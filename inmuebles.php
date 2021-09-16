<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<?php
$gestion = $_GET["gs"];
$tipo = $_GET["ti"];
$ciudad = $_GET["ci"];
$zona = $_GET["zo"];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vasquez & Vasquez | Inmuebles</title>
    <meta name="description" content="Desarrollado por Dexcon Digital">
    <meta name="author" content="Dexcon Digital">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <META HTTP-EQUIV="Access-Control-Allow-Origin" CONTENT="localhost:8888">
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
                    <h1 class="page-title">INMUEBLES</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class="content-area recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
        <div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 text-center page-title">
                    <!-- /.feature title -->
                    <h2>INMUEBLES </h2>
                    <br>
                    <div class="container">
                        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4 panel vasquez">
                            <div class="panel-heading panel-inmuebles">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label></label>
                                    <select name="" class="form-control" id="operacion">
                                                </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label></label>
                                    <select name="" class="form-control" id="inmueble">
                                                </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label></label>
                                    <select name="" class="form-control" id="ciudad">
                                                </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label></label>
                                    <select name="" class="form-control" id="zona">
                                            <option value='0'>.::Zona::.</option>
                                                </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button class="btn btn-lg btn-block btn-default pull-right" style="margin: 20px 0;" onclick="searchi()">
                                                BUSCAR
                                                </button>
                                </div>
                            </div>
                        </div>
                        <div id="resultado">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-area">

    </div>

    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/iframeResizer.min.js"></script>
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
    <script src="assets/js/inmuebles.js"></script>
    
    <?php echo "<script> var gs ='" . $gestion . "';</script>"; ?>
    <?php echo "<script> var ti ='" . $tipo . "';</script>"; ?>
    <?php echo "<script> var ci ='" . $ciudad . "';</script>"; ?>
    <?php echo "<script> var zo ='" . $zona . "';</script>"; ?>
    <script>
        var res_ciudad = 0, res_inmueble = 0, res_zona = 0, res_contrato = 0;

        res_ciudad = ci;
        res_inmueble = ti;
        res_zona = zo;
        res_contrato = gs;
        console.log(res_ciudad+" "+ res_inmueble+" "+ res_zona+" "+ res_contrato);
        if(res_ciudad != 0 || res_inmueble != 0 || res_zona != 0 || res_contrato != 0){
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
                if (data == 'Sin resultados') {
                    res += "<h3>No hay Inmuebles Según el criterio de busqueda</h3>";
                    $("#resultado").html(res);
                    return;
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
                    $("#resultado").append(res);
                }
            },
            error: function(data) {
                console.log("Fail")
            }
        });
        }else{
            inicio();
        }
    </script>


</body>

</html>