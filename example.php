<?php

include_once('RottenTomatoes.php');

$rottenTomatoes = new RottenTomatoes('**Your API Key**', 10, 'us');

echo "<pre>";
try {
	$result = $rottenTomatoes->getOpeningMovies();
	print_r($result);
} catch (Exception $e) {
	print_r($e);
}
echo "</pre>";