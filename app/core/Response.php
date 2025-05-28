<?php

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
?>