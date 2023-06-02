<?php

    require_once __DIR__ . '/src/JsonWebToken/JWT.php';
    use src\JsonWebToken\JWT;

    $secretKey = "YOUR_SECRET_KEY";

    $payload = [
        'iss'    => 'http://example.org',
        'aud'    => 'http://example.com',
        'exp'    => (new DateTime('2023-06-12 22:10:00'))->getTimestamp(),
        'userId' => 25
    ];

    $encode = JWT::encode($secretKey, $payload, "HS256");
    $decode = JWT::decode($encode);

    echo JWT::validate($secretKey, $encode) ? "is valid" : "is not valid.";