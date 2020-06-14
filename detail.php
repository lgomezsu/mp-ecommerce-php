<?php

// SDK de Mercado Pago
require_once __DIR__ .'/vendor/autoload.php';
/*
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');


// Codigo Integrador
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


// ARMA PREFERENCIA
$preference = new MercadoPago\Preference();

date_default_timezone_set("America/Argentina/Buenos_Aires");

# Recoge información del item
$titulo = $_POST['title'];
$precio = $_POST['price'];
$cantidad = $_POST['unit'];
$imagen = $_POST['img'];
$imagen0 = substr($imagen,1);
$url_imagen = dirname(__FILE__) . $imagen0;
/*
# Arma el item
$item = new MercadoPago\Item();
$item = array(
              "id" => "1234",
              "title" => $titulo,
              "currency_id" => "ARS",
              "picture_url" => $url_imagen,
              "description" => "Dispositivo móvil de Tienda e-commerce",
              "category_id" => "Smartphones",
              "quantity" => $cantidad,
              "unit_price" => $precio
);
$preference->items = array($item);

# Fecha Creacion
$preference->date_created = date("Y-m-d\TH:i:sO");

# URLs de retorno    VERIFICAR
$preference->back_urls = array(
    "success" => __DIR__ . "/success.php",
    "failure" => __DIR__ . "/failure.php",
    "pending" => __DIR__ . "/pending.php"
);
$preference->auto_return = "approved";


# Setea Metodos y Tipos de Pago y Cuotas máximas
$preference->payment_methods = array(
    "excluded_payment_methods" => array(
        array("id" => "amex")
    ),
    "excluded_payment_types" => array(
        array("id" => "atm")
    ),
    "installments" => 6
);


# Setea Notificación
$preference->notification_url = __DIR__ . "/notificaciones.php";


# Setea Referencia Externa
$preference->external_reference = "lgomezsu01@gmail.com";


# Setea Modo Binario
$preference->binary_mode = false;

# Identificador de Vendedor
// $preference->collector_id = "469485398";


# Recoge información del comprador
if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
    $nombre = $_POST['c_nombre'];
    $apellido = $_POST['c_apellido'];
    $correo = $_POST['c_mail'];
    $tel_area = $_POST['c_te_area'];
    $tel_num = $_POST['c_te_numero'];
    $doc_tipo = $_POST['c_do_tipo'];
    $doc_num = $_POST['c_do_numero'];
    $dir_nom = $_POST['c_di_nombre'];
    $dir_num = $_POST['c_di_numero'];
    $dir_zip = $_POST['c_di_zip'];
    # Arma datos del comprador
    $payer = new MercadoPago\Payer();
    $payer = array(
              "name" => $nombre,
              "surname" => $apellido,
              "email" => $correo,
              "phone" => array("area_code" => $tel_area, "number" => $tel_num),
              "identification" => array("type" => $doc_tipo, "number" => $doc_num),
              "address" => array("street_name" => $dir_nom, "street_number" => $dir_num, "zip_code" => $dir_zip));
    $preference->payer = $payer;


    $preference->save(); # Save the preference and send the HTTP Request to create
}
*/
?>




!--DOCTYPE html
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">
    <style>
        .as-filter-button-text {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }
        .row.as-fixed-nav {
            border-bottom: 1px solid #ddd;
        }
        .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
            height: 330px;
        }
        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 16px 40px;
        }
    </style>
    <style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 1em; line-height: 4; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style><style type="text/css"> .mercadopago-button { padding: 0 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style><style type="text/css"> @keyframes loading-rotate { 100% { transform: rotate(360deg); } } @keyframes loading-dash { 0% { stroke-dasharray: 1, 200; stroke-dashoffset: 0; } 50% { stroke-dasharray: 100, 200; stroke-dashoffset: -20px; } 100% { stroke-dasharray: 89, 200; stroke-dashoffset: -124px; } } @keyframes loading-fade-in { from { opacity: 0; } to { opacity: 1; } } .mp-spinner { position: absolute; top: 100px; left: 50%; font-size: 70px; margin-left: -35px; animation: loading-rotate 2.5s linear infinite; transform-origin: center center; width: 1em; height: 1em; } .mp-spinner-path { stroke-dasharray: 1, 200; stroke-dashoffset: 0; animation: loading-dash 1.5s ease-in-out infinite; stroke-linecap: round; stroke-width: 2px; stroke: #009ee3; } </style>
    <style type="text/css"> .mercadopago-button2 { padding: 10 1.7142857142857142em; font-family: "Helvetica Neue", Arial, sans-serif; font-size: 0.875em; line-height: 2.7142857142857144; background: #009ee3; border-radius: 0.2857142857142857em; color: #fff; cursor: pointer; border: 0; } </style></head>


<!-- Codigo de seguridad MP  -->
<script src="https://www.mercadopago.com/v2/security.js" view=""></script>


<body class="as-theme-light-heroimage">

    <div class="stack">
        
        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320" data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306" class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">

                                    <button class="as-filter-button" aria-expanded="true" aria-controls="as-search-filters" type="button">
                                        <h2 class=" as-filter-button-text">
                                            Smartphones
                                        </h2>
                                    </button>


                                </div>

                            </div>
                        </div>
                        <div class="as-accessories-results  as-search-desktop">
                            <div class="width:60%">
                                <div class="as-producttile-tilehero with-paddlenav " style="float:left;">
                                    <div class="as-dummy-container as-dummy-img">

                                        <img src="./assets/wireless-headphones" class="ir ir item-image as-producttile-image  " style="max-width: 70%;max-height: 70%;"alt="" width="445" height="445">
                                    </div>
                                    <div class="images mini-gallery gal5 ">
                                    

                                        <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                            <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="6|Powerbeats3 Wireless Earphones - Neighborhood Collection - Brick Red|MPXP2">
                                                <div class="as-tilegallery-element as-image-selected">
                                                    <div class=""></div>
                                                    <img src="./assets/003.jpg" class="ir ir item-image as-producttile-image" alt="" width="445" height="445" style="content:-webkit-image-set(url(<?php echo $_POST['img'] ?>) 2x);">
                                                </div>
                                                
                                            </div>
                                            
                                        </div>

                                        

                                    </div>

                                </div>
                                <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                    <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink">
                                                    <span data-ase-truncate="2"><?php echo $_POST['title'] ?></span>
                                                </p>
                                            </h3>
                                        </div>
                                        <h3 >
                                            
                                            <?php echo "$" . $_POST['price'] ?>
                                        </h3>
                                        <h3 >
                                            <?php echo "Cant. " . $_POST['unit'] ?>

                                        </h3>
                                    </div>

                                </div>



                                <div class="form-wrap"style="float:left;min-height: 168px;">
                                    <h3> Completa tus datos de compra </h3>
                                    <form id="formcomprador" method="post" action="">
                                        <div class="form-campo-nombre" > 
                                            <table>
                                            <tr><td>
                                                    <label for="Nombre">Nombre</label>
                                                    <input type="text" id="c-nombre" name="c_nombre" value="" maxlength=40 required="required"/>
                                                </td>
                                                <td>
                                                    <label for="Apellido">Apellido</label>
                                                    <input type="text" id="c-apellido" name="c_apellido" value="" maxlength=40 required="required"/>
                                                </td>
                                            </tr>
                                            </table>
                                        <div class="form-campo-correo">
                                            <label for="Email">Email   </label>
                                            <input type="email" id="c-mail" name="c_mail" value="" maxlength=40 pattern="[a-z0-9._%+-]+@[a-z0-9.-_]+\.[a-z]{2,}$" required="required"/>
                                        </div>
                                        <div class="form-campo-telefono">
                                            <table>
                                            <tr><td>Teléfono</td></tr>
                                            <tr><td>
                                                    <label for="Tel-Area" style="font-size:0.8em"><em>Codigo de Área</em></label>
                                                    <input type="number" id="c-te-area" name="c_te_area" style="font-size:0.875em; width:40px;" value="" max=9999 required="required"/>
                                                </td>
                                                <td>
                                                    <label for="Tel-Num"style="font-size:0.8em"><em>Numero</em></label>
                                                    <input type="number" id="c-te-num" name="c_te_num" style="font-size:0.875em; width:80px;" value="" min=9999999 max=9999999999 pattern="[0-9]{8,}" required="required">
                                                </td>
                                            </tr>
                                            </table>
                                        </div>
                                        <div class="form-campo-documento"> 
                                            <table>
                                            <tr><td>Documento</td></tr>
                                            <tr><td>
                                                    <label for="Doc-Tipo" style="font-size:0.8em"><em>Seleccione Tipo de Documento</em></label>
                                                    <select id="c-do-tipo" name="c_do_tipo" style="font-size:0.875em" required="required">
                                                        <option value="DNI">DNI</option>
                                                        <option value="CI">CI</option>
                                                        <option value="LC">LC</option>
                                                        <option value="LE">LE</option>
                                                        <option value="Otro">Otro</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <label for="Doc-Numero" style="font-size:0.8em"><em>Número</em></label>
                                                    <input type="number" id="c-do-numero" name="c_do_numero" style="font-size:0.875em;width:80px;" value="" min=999999 max=99999999 required="required"/>
                                                </td>
                                            </tr>
                                            </table>
                                        </div>
                                        <div class="form-campo-direccion"> 
                                            <table>
                                            <tr><td>Dirección</td></tr>
                                            <tr><td>
                                                    <label for="Dir-Nombre" style="font-size:0.8em"><em>Calle</em></label>
                                                    <input type="text" id="c-di-nombre" name="c_di_nombre" style="font-size:0.875em" value="" maxlength=40 required="required"/>
                                                </td>
                                                <td>
                                                    <label for="Dir-Numero" style="font-size:0.8em"><em>Número</em></label>
                                                    <input type="number" id="c-di-numero" name="c_di_numero" style="font-size:0.875em;width:50px;" value="" max=99999 required="required"/>
                                                </td>
                                                <td>
                                                    <label for="Dir-Zip" style="font-size:0.8em"><em>Código Postal</em></label>
                                                    <input type="text" id="c-di-zip" name="c_di_zip" style="font-size:0.875em;width:80px;" value="" maxlength=8 required="required"/>
                                                </td>
                                            </tr>
                                            </table>
                                        </div>
                                        <input type="hidden" name="title" value=<?php $_POST['title'] ?>>
                                        <input type="hidden" name="img" value=<?php $_POST['img'] ?>>
                                        <input type="hidden" name="price" value=<?php $_POST['price'] ?>>
                                        <input type="hidden" name="unit" value=<?php $_POST['unit'] ?>>
                                        
                                        <a href="<?php echo $preference->init_point; ?>" class="mercadopago-button2">
                                        <button type="submit" name="submit" class="mercadopago-button" formmethod="post">Pagar la compra</button>
                                        </a>
                                    </form>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda Tecno 2019
                </div>
            </div>
        </div>

    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> 
        <svg class="mp-spinner" viewBox="25 25 50 50"> 
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10">
            </circle> 
        </svg> 
    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> 
        <svg class="mp-spinner" viewBox="25 25 50 50"> 
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10">
            </circle> 
        </svg> 
    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> 
        <svg class="mp-spinner" viewBox="25 25 50 50"> 
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10">
            </circle> 
        </svg> 
    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> 
        <svg class="mp-spinner" viewBox="25 25 50 50"> 
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10">
            </circle> 
        </svg> 
    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> 
        <svg class="mp-spinner" viewBox="25 25 50 50"> 
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10">
            </circle> 
        </svg> 
    </div>
    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> 
        <svg class="mp-spinner" viewBox="25 25 50 50"> 
            <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10">
            </circle> 
        </svg> 
    </div>
    <div id="ac-gn-viewport-emitter"> </div>

</body>
</html>