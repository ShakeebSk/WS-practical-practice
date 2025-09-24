<?php
class CurrencyConverter{
    

    //currency converter function using hardcoded rates 

    private $rates = [
        "USD" => 1.0,
        "EUR" => 0.85,
        "GBP" => 0.75,
        "JPY" => 110.0,
        "AUD" => 1.35
    ];

    public function convert($amount, $fromCurrency, $toCurrency) {
        if(!isset($this->rates[$fromCurrency]) || !isset($this->rates[$toCurrency])) {
            return "Currency not supported";
        }
        $amountInUSD = $amount / $this->rates[$fromCurrency];
        $convertedAmount = $amountInUSD * $this->rates[$toCurrency];
        return round($convertedAmount, 2);
    }

    #currency converter function using API
    private $apiURL = "Your API URL here"; //Replace with your exchange rate API URL
    private $rate;

    public function __construct() {
        $json = file_get_contents($this->apiURL);
        $data = json_decode($json, true);
        if(isset($data['rates'])) {
            $this->rates = $data['rates'];
        } else {
            throw new Exception("Failed to fetch exchange rates.");
        }
    }

    public function convertCurr($amount, $fromCurrency, $toCurrency) {
        if(!isset($this->rates[$fromCurrency]) || !isset($this->rates[$toCurrency])) {
            return "Currency not supported";
        }
        $amountInUSD = $amount / $this->rates[$fromCurrency];
        $convertedAmount = $amountInUSD * $this->rates[$toCurrency];
        return round($convertedAmount, 2);
    }
}
$options=['uri'=>'http://localhost'];
$server=new SoapServer(NULL,$options);
$server->setClass("CurrencyConverter");
$server->handle();
?>