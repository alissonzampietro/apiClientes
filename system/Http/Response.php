<?php

namespace System\Http;

class Response extends Request{
    public static function show($message)
    {
        switch ($this->getRequiredEncodeResponse()) {
            case "application/json":
                echo json_encode($message);
                break;
            case "application/xml":
                echo $this->generateXML($message);
                break;
            case "text/html":
                print_r($message);
                break;
            default:
                print_r($message);
                break;
        }
    }
    
    private function generateXML($array) {
        function array_to_xml($array, &$xml_user_info) {
            foreach($array as $key => $value) {
                if(is_array($value)) {
                    if(!is_numeric($key)){
                        $subnode = $xml_user_info->addChild("$key");
                        array_to_xml($value, $subnode);
                    }else{
                        $subnode = $xml_user_info->addChild("item$key");
                        array_to_xml($value, $subnode);
                    }
                }else {
                    $xml_user_info->addChild("$key",htmlspecialchars("$value"));
                }
            }
        }
        
        $xml_user_info = new SimpleXMLElement("<?xml version=\"1.0\"?><user_info></user_info>");
        return array_to_xml($users_array,$xml_user_info);
    }
}