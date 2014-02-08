<?php

$image = rand(1, 8);
$page = rand(1, 20);

$url = "https://ajax.googleapis.com/ajax/services/search/images?q=zombie&v=1.0&imgsz=small&rsz=8&page={$page}";
$data = file_get_contents($url);
$json = json_decode($data);

echo "<img src='{$json->responseData->results[$image - 1]->url}' />";