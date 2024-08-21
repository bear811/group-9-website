<?php
$target_dir = "uploads/task1/";

// Create the directory if it doesn't exist
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Display the list of uploaded files
$files = array_diff(scandir($target_dir), array('.', '..'));

echo "<h2>Uploaded Files:</h2>";
echo "<ul>";

foreach ($files as $file) {
    echo "<li><a href='" . $target_dir . $file . "' target='_blank'>" . $file . "</a></li>";
}

echo "</ul>";
?>

<a href="task1.html">Back to Task 1</a>
