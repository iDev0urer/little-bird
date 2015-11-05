<?php

/*
 * Example call
 *
 * $cardInput = [
 *   'number'      => '4032035494035223',
 *   'firstName'   => 'Christopher',
 *   'expiryMonth' => '10',
 *   'expiryYear'  => '20',
 *   'cvv'         => '333',
 * ];
 *
 * $card = Omnipay::creditCard($cardInput);
 *
 * $response = Omnipay::purchase([
 *   'amount'    => '100.00',
 *   'returnUrl' => 'http://bobjones.com/payment/return',
 *   'cancelUrl' => 'http://bobjones.com/payment/cancel',
 *   'card'      => $cardInput
 * ])->send();
 *
 * $response->getData();
 */

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				"username" => env('PAYPAL_API_USER'),
				"password" => env('PAYPAL_API_PASS'),
				"signature" => env('PAYPAL_API_SIG'),
				"testMode" => env('PAYPAL_API_TEST'),
				"solutionType" => [
					"Sole",
					"Mark",
				],
				"landingPage" => [
					"Billing",
					"Login",
				],
				"brandName" => "Little Bird",
				"headerImageUrl" => "",
				"logoImageUrl" => "",
				"borderColor" => "",
			]
		]
	]

];
