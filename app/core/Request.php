<?php

class Request
{
    public function getPath(): string
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = strtok($uri, '?');

        if (defined('ROOT')) {
            $root = rtrim(ROOT, '/');
            if (strpos($path, $root) === 0) {
                $path = substr($path, strlen($root));
            }
        }

        return $path ?: '/';
    }

    public function method(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD'] ?? 'get');
    }

    public function getBody(): array
    {
        $method = $this->method();
        $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

        if ($method === 'get') {
            return filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS) ?? [];
        }

        if ($method === 'post') {
            if (stripos($contentType, 'application/json') !== false) {
                return json_decode(file_get_contents('php://input'), true) ?? [];
            }
            return filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS) ?? [];
        }

        if (in_array($method, ['put', 'patch', 'delete'])) {
            $raw = file_get_contents('php://input');
            if (stripos($contentType, 'application/json') !== false) {
                return json_decode($raw, true) ?? [];
            }
            parse_str($raw, $data);
            return is_array($data) ? $data : [];
        }

        return [];
    }
}
