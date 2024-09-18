<?php
header('Content-type: text/plain');

// Set the filename for the downloaded file
$filename = $title . '.' . $lang_code;
// Sanitize the filename to ensure it's safe to use
$filename = preg_replace('/[^a-zA-Z0-9_\-.]/', '', $filename);

// Check if the file extension is .text and modify it to .txt
if (pathinfo($filename, PATHINFO_EXTENSION) === 'text') {
    $filename = substr($filename, 0, -4) . 'txt';
}

header('Content-disposition: attachment; filename="' . $filename . '"');

echo htmlspecialchars_decode($raw);
