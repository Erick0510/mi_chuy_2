<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require 'autoload.php';

$enableSandbox = True;

$paypalConfig = [
    'client_id' => 'AYveaRSMZ8lFHvRGRygrCyk_NHiccTwIzA0HYBkygErcTYvNVyM6QTgIiSzcz0vPO90BxL2K4tGlGf5_',
    'client_secret' => 'EBwigEOPQYAwOA3cdclnmMWUHuhhCPisrFoIisksCuWtLPRkTqNyOKIZGncPSZ_I1U_d5fe_67b8aXlC',
    'return_url' => 'http://localhost/APIs/DAGOMUCK/PayPalSuccess.php',
    'cancel_url' => 'http://localhost/APIs/DAGOMUCK/Index.php'
];

$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'name' => 'codeat21'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

function getApiContext($clientId, $clientSecret, $enableSandbox = False) {
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );
    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox': 'live'
    ]);
    
    return $apiContext;
}