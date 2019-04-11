<?php
// # Create Plan Sample

require __DIR__ . '/../bootstrap.php';

\Stripe\Stripe::setApiKey("sk_test_xmiH2wBAsd8y24hVORNTuDxZ00tJ8kj8M1");

$request = new stdClass();
$request->endPoint = "https://api.stripe.com";
$request->requestMethod = "List all subscriptions";
$request->response = "Json";

// ### Retrieve All Subscriptions
try {
  $result = \Stripe\Subscription::all(['limit' => 3]);
} catch (Exception $ex) {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printError("Retrieve plans", "Plans", null, true);
    exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
ResultPrinter::printResult("Retrieve plans", "Plans", $request, $result);
