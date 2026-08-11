<?php

return [
  'api_key'  => [
    'secret' => env('STRIPE_SECRET_KEY'),
],
  'webhook_secret' => env('STRIPE_WEBHOOK_SECRET'),
];
