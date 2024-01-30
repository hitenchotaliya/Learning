<?php
// Retrieve and display comments from the database

$comments = getCommentsFromDatabase();

foreach ($comments as $comment) {
    // Output encode the user-generated content
    $safeComment = htmlspecialchars($comment['content'], ENT_QUOTES, 'UTF-8');
    echo "<div>{$safeComment}</div>";
}

function getCommentsFromDatabase()
{
    // Simulated function to retrieve comments from the database
    return [
        ['content' => 'This is a safe comment.'],
        ['content' => '<script>alert("Malicious script!");</script>'],
    ];
}
