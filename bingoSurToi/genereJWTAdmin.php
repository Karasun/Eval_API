<?php
require_once 'global/config.php';
require_once 'libs/JWT.php';

// On crée le header
$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

// On crée le contenu (payload)
$payload = [
    'user_id' => 123,
    'roles' => [
        'ROLE_ADMIN'
       
    ],
    'email' => 's.quesque@orange.fr'
];

$jwt = new JWT();

$token = $jwt->generate($header, $payload, SECRET);

echo $token;