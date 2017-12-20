<?php
//defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
ini_set('display_errors', 'off');
require 'vendor/autoload.php';



$instagram = new Andreyco\Instagram\Client('ef42b1c52f6d45f98682156b8b51978d');
// Uncomment this line if you have enabled "Enforce Signed Requests" in Instagram client.
////$result = $instagram;
//
////print_r($result->searchTags("ds"));
//die();