<?php
require_once 'ApiClass.php';
$cam = new WindyApi('J8lrm1QEzevtGO5nLI9OuJUvzkZZ7SQp');
$camResult = $cam->getCityCam(43.17,5.6,20);
echo var_dump($camResult);
