<?php

// Verifica si los parametros son correctos
if (!isset($_POST["id"], $_POST["type"]) || !ctype_digit($_POST["id"])) {
  http_response_code(400);
  return;
}

http_response_code(200);

$noti_mp = $_POST
$file_name = "notificacion.json";
file_put_contents($file_name, $noti_mp);


# Tipo de notificacion

/*
// SDK de Mercado Pago
require_once __DIR__ .'/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }
*/