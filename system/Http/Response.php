<?php

namespace System\Http;

class Response{
    public static function show($message)
    {
        $encode = Request::getRequiredEncodeResponse();
        switch ($encode) {
            case "application/json":
                echo json_encode($message);
                break;
            case "text/html":
                print_r($message);
                break;
            default:
                print_r($message);
                break;
        }
    }
}