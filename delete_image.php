<?php

require_once "vendor/autoload.php";

// Delete the image.
try {
    $response = FroalaEditor_Image::delete($_POST['src']);
    echo stripslashes(json_encode('Success'));
}
catch (Exception $e) {
    http_response_code(404);
}