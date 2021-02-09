<?php

require_once('Mobile.php');

class MobileRestHandler {

    public function getAllMobiles() {
        $mobile = new Mobile();

        $raw_data = $mobile->getAllMobile();
        
        $request_content_type = $_SERVER['HTTP_ACCEPT'];

        if (strpos($request_content_type, 'application/json') !== false ) {
            $response = $this->encodeJson($raw_data);
			echo $response;
        } else if (strpos($request_content_type, 'text/html') !== false ) {
            $response = $this->encodeHtml($raw_data);
			echo $response;
        } else if (strpos($request_content_type, 'application/xml') !== false ) {
            $response = $this->encodeXml($raw_data);
			echo $response;
        }
    }

    public function encodeHtml($response) {
        $html_response = "<table>";
        foreach($response as $key => $value ) {
            $html_response .= "<tr><td>$key</td><td>$value</td></tr>";
        }
        $html_response .= "</table>";
        return $html_response;
    }

    public function encodeJson($response) {
        $json_response = json_encode($response);
        return $json_response;
    }

    public function encodeXml($response) {
        $xml_response = new SimpleXMLElement('<?xml version="1.0"?><mobile></mobile>');
        foreach($responseData as $key=>$value) {
			$xml->addChild($key, $value);
		}
		return $xml->asXML();
    }

    public function getMobile($id) {
        $mobile = new Mobile();
        $raw_data = $mobile->getMobile($id);

        $request_content_type = $_SERVER['HTTP_ACCEPT'];

        if (strpos($request_content_type, 'application/json') !== false ) {
            $response = $this->encodeJson($raw_data);
			echo $response;
        } else if (strpos($request_content_type, 'text/html') !== false ) {
            $response = $this->encodeHtml($raw_data);
			echo $response;
        } else if (strpos($request_content_type, 'application/xml') !== false ) {
            $response = $this->encodeXml($raw_data);
			echo $response;
        }
    }
}