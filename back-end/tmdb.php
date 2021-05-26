<?php

$api_url = 'https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=en-US&page=1&include_adult=false';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->results;

// Cut long data into small & select only first 10 records
$user_data = array_slice($user_data, 0, 9);

// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
foreach ($user_data as $user) {
	echo "name: ".$user->title;
	echo "<br />";
	echo "ano: ".$user->year;
	echo "<br /> <br />";
}

?>