<?php
// RSS feed URL
$rssFeedUrl = 'https://rss.applemarketingtools.com/api/v2/in/music/most-played/10/albums.json';


// Fetch the RSS feed
$rssContent = file_get_contents($rssFeedUrl);

// Convert the JSON content to an associative array
$rssArray = json_decode($rssContent, true);
// print_r($rssArray);
// Check if the required data is present
if (isset($rssArray['feed']['results'])) {
    $items = $rssArray['feed']['results'];
    
    // Output only the relevant data as JSON
    $output = [
        'channel' => [
            'item' => $items,
        ],
    ];
    // echo "HElooooooooooooooo";
    header('Content-Type: application/json');
    echo json_encode($output);
} else {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Invalid RSS feed structure']);
}
?>
