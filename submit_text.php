<?php
$target_dir = "uploads/task1/";

// Create the directory if it doesn't exist
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $requirements = $_POST['requirements'];
    $file_name = $target_dir . "requirements_" . time() . ".txt";

    // Save the typed requirements as a .txt file
    file_put_contents($file_name, $requirements);
    echo "Your requirements have been submitted.";
}

echo "<br><a href='task1.php'>Back to Task 1</a>";
?>
