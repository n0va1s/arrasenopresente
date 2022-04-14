<?php

return [
    'v3' => [
        'public_key' => env('GOOGLE_RECAPTCHA_PUBL_TOKEN'),
        'private_key' => env('GOOGLE_RECAPTCHA_PRVT_TOKEN'),
        'minimum_score' => 0.6,
    ]
];