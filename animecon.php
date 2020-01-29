<?php 
$id = $_GET['id'];
$eps = $_GET['eps'];
$animesingle = "https://api.gdriveplayer.us/v1/animes/id/$id";
$animesingleget = file_get_contents($animesingle);
$animesingles = json_decode($animesingleget);
 ?>
