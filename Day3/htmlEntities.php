<?php
$htmlEntities = '<p>This is P tag <em>Simple</em> Special char like : & < are converted </p>';
$encodedContent = htmlspecialchars($htmlEntities);

echo $encodedContent; 

$str = '<a href="https://www.google.com">Go to google.com</a>';
echo htmlentities($str);
?>
