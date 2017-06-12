<?php

require 'vendor/autoload.php';
require 'YoutubeApi.php';

$google = new MyApp\YoutubeAPI('AIzaSyBqeNjBzkVUjuiK2-E77IK0XYCVqWkva_k');
$videos = $google->getVideosFromPlaylist('PLCsa_8vz1nX60R_EX42dXsd-dBqZTArbi', 10);

foreach($videos as $video) {
	echo $video->getSnippet()->getTitle()."\n";
}

