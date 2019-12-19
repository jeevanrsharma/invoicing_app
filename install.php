<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "b5202c17552fb5ac25ff6c3d01f19a68";
$scopes = "read_orders,write_products";
$redirect_uri = "https://turtleappstest.com/invoicing_app/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();