
<?php
// Ваш API-ключ
$apiKey = "e0bf17be7d9f002aceaca9c858da1bea";


function getWeather($cityId){
    global $apiKey;
    $url = "http://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&lang=ru&appid={$apiKey}&lang=ru";

    $response = file_get_contents($url);
    return $response;
    
}
$cityId = $_GET['cityId'];
echo getWeather(cityId: $cityId);
?>
