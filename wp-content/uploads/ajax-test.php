<?php
// Set headers to allow AJAX
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Return a simple JSON response
echo json_encode([
    'success' => true,
    'message' => 'This is a direct PHP response!',
    'time' => date('Y-m-d H:i:s')
]);