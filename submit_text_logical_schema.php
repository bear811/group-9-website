<?php
$target_dir = "uploads/task2/logical_schema/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $logical_schema = $_POST['logical_schema'];
    $file_name = $target_dir . "logical_schema_description_" . time() . ".txt";
    file_put_contents($file_name, $logical_schema);
    echo "Your Logical Schema description has been submitted.";
}

echo "<br><a href='task2_logical_schema.php'>Back to Logical Schema Submission</a>";
?>
