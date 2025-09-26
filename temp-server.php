<?php 
ini_set('display_error',0); 
error_reporting(0); 
class WS_Practical_Practice{ 
    private $apiKey='d24ccf53375319209e043abd8c80c4e5'; 
    public function getTemperature($city){
    $city=trim($city); 
        if(!$city){ 
            return 'Error: City name required'; } 
    $url="https://api.openweathermap.org/data/2.5/weather?q=".urlencode($city)."&appid={$this->apiKey}&units=metric"; 
    $response=$this->curlGet($url); 
        if(!$response){ 
            return "Failed to fetch weather data from API."; 
        } 
        $data=json_decode($response,true); 
        if(!isset($data['main']['temp'])){ 
            return "City not Found or API Error."; 
        } 
        $temp=$data['main']['temp']; 
        $desc=$data['weather'][0]['description']??'No description'; 
        return "Current Temperature in {$city} is {$temp}°C with {$desc}."; }
    private function curlGet($url){ 
        $ch=curl_init($url); 
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
        curl_setopt($ch,CURLOPT_FAILONERROR,true); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); 
        curl_setopt($ch,CURLOPT_TIMEOUT,15); 
    //Comment and Uncomment the below 2 lines and see the result  
    //curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false); 
    //curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false); 
    $data=curl_exec($ch); 
    curl_close($ch); 
    return $data?:false; 
    } 
    } 
$options = ['uri'=>'http://localhost/WS_Practical_Practice']; 
$server = new SoapServer(null,$options); 
$server->setClass('WS_Practical_Practice'); 
$server->handle(); 
?>