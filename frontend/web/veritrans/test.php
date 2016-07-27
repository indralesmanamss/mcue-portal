<?php
include_once('Veritrans.php');
//Set Your server key
Veritrans_Config::$serverKey = "VT-server-69iimvbknVdXEbbOiD3PFVCv";

// Uncomment for production environment
// Veritrans_Config::$isProduction = true;

// Uncomment to enable sanitization
// Veritrans_Config::$isSanitized = true;

// Uncomment to enable 3D-Secure
// Veritrans_Config::$is3ds = true;

// Required
$transaction_details = array(
  'order_id' => rand(),
  'gross_amount' => $_GET['price'], // no decimal allowed for creditcard
  );


// Optional, mandatory for mandiri bill payment
$item1_details = array(
    'id' => 'a1',
    'price' => $_GET['price'],
    'quantity' => 1,
    'name' => $_GET['name']
    );


// Optional, mandatory for mandiri bill payment
$item_details = array ($item1_details);

// Optional
$billing_address = array(
    'first_name'    => "David",
    'last_name'     => "Hariyanto",
    'address'       => "Jl Panglima Sudirman 101-103",
    'city'          => "Surabaya",
    'postal_code'   => "16602",
    'phone'         => "081122334455",
    'country_code'  => 'IDN'
    );

// Optional
$shipping_address = array(
    'first_name'    => "Obet",
    'last_name'     => "Supriadi",
    'address'       => "Manggis 90",
    'city'          => "Jakarta",
    'postal_code'   => "16601",
    'phone'         => "08113366345",
    'country_code'  => 'IDN'
    );

$customer_details = array(
    'first_name'    => "Andri", //optional
    'last_name'     => "Litani", //optional
    'email'         => "andri@litani.com", //mandatory
    'phone'         => "081122334455", //mandatory
    'billing_address'  => $billing_address, //optional
    //'shipping_address' => $shipping_address //optional
    );

// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
    );

$vtweb_url = Veritrans_Vtweb::getRedirectionUrl($transaction);

// Go to VT-Web page
header('Location: ' . $vtweb_url);
?>