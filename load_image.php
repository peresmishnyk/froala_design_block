<?php

require_once "vendor/autoload.php";

// Load the images.
try {
    $response = FroalaEditor_Image::getList('/uploads/');
    echo stripslashes(json_encode($response));
}
catch (Exception $e) {
    http_response_code(404);
}