
<h1 align="center">
  <a href="http://www.amitmerchant.com/electron-markdownify">
  <img src="https://atitudereflexiva.files.wordpress.com/2021/11/jwt_icon.png" width="200"></a>
  <br>
  PHP - Json Web Token (JWT)
  <br>
</h1>

<h4 align="center">for creating, decoding, and validating JWT tokens.</h4>

```php

    // Example:
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

```