<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Rutas donde aplicar CORS

    'allowed_methods' => ['*'], // Métodos permitidos: GET, POST, PUT, DELETE, etc.

    'allowed_origins' => ['http://localhost:5500', 'http://127.0.0.1:5500', 'http://frontapilaravel.test'], // Orígenes permitidos (URL de tu frontend)

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
