<?php

class Response {
    public static function sendJSONResponse($data, $statusCode = 200) {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public static function sendError($message, $statusCode = 500) {
        self::sendJSONResponse(['error' => $message], $statusCode);
    }
}
