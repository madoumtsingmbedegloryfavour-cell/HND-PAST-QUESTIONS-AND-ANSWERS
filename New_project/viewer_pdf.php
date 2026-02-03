<?php
// Debug (remove later)
if (empty($_GET)) {
    die("No file selected (empty GET).");
}

if (!isset($_GET['file']) || $_GET['file'] === '') {
    die("No file selected.");
}

$file = basename(urldecode($_GET['file']));
$filePath = __DIR__ . "/uploads/" . $file;

if (!file_exists($filePath)) {
    die("File not found: " . htmlspecialchars($file));
}

header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"$file\"");
header("Content-Length: " . filesize($filePath));

readfile($filePath);
exit;


