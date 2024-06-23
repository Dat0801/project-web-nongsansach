<?php
class ErrorHandler
{
    public static function handleException(Throwable $ex)
    {
        http_response_code(500);

        echo json_encode([
            'code' => $ex->getCode(),
            'message' => $ex->getMessage(),
            'file' => $ex->getFile(),
            'line' => $ex->getLine()
        ]);
    }
}