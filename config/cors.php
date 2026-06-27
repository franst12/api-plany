<?php

return [

    'paths' => ['*'], // <-- Ubah jadi bintang biar SEMUA jalur URL aman dari CORS

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'], // <-- Ubah jadi bintang biar SEMUA domain (Lokal & Vercel) diizinkan penuh

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];