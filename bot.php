<?php
$path = "https://api.telegram.org/bot1853678478:AAHNO2fknDJPQBmlkkXnzw7Z8ORy9PRGHp8";
$url = "http://api.openweathermap.org/data/2.5/weather?q=";
$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if (strpos($message, "/weather") === 0) {
$location = substr($message, 9);
$weather = json_decode(file_get_contents($url.$location."&appid=e452a367436f0555945ff6107612fb88"), TRUE);
$resp = $path."/sendmessage?chat_id=".$chatId;
file_get_contents($resp . "&text=Wind Speed in the " . $location . " : " . $weather["wind"]["speed"] . "m/s";
}
?>
