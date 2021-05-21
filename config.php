<?php
/*
 * Configura esta pasarela ficticia con un código de tienda, y la dirección
 * 
 * En una pasarela bancaria de verdad, nos dan los datos de acceso para nuestra app
 * despues de firmar el contrato e informamos de las URLS con algún tipo de app de configuración.
 */

$comercios = [
    1111 => // El código del comercio
    [
        "nombre" => "Alidaw. Todo barato. Comercio de ejemplo",
        "url_pingback_informa" => "http://localhost/tutienda/informa",
        "url_retorno" => "http://localhost/tutienda/retorno"
    ],
    2222 => // El código del comercio
    [
        "nombre" => "Tienda videojuegos Andres",
        //Esto es para el servidor, aqui unicamente el servidor se informa de que el usuario haya pagado o no
        "url_pingback_informa" => "http://localhost/Servidor/tiendaVirtual/informa",
        //Aqui simplemente genero una vista en la cual el usuario se entera de que el pago se ha efectuado o no
        "url_retorno" => "http://localhost/Servidor/tiendaVirtual/retorno"
    ], 
    3333 => // El código del comercio
    [
        "nombre" => "Cinedix",
        "url_pingback_informa" => "http://192.168.1.39:8081/cinedix/informa",
        "url_retorno" => "http://192.168.1.39:8081/cinedix/retorno"
    ],
    // esa coma tras el último elemento de array no es error sintáctico en PHP7
];
