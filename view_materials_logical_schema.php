<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Logical Schema Materials</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>View Submitted and Uploaded Logical Schema Materials</h1>
        <a class="back-link" href="task2_logical_schema.html">&#8592; Back to Logical Schema Submission</a>
    </header>

    <main class="materials-list">
        <?php
        $target_dir = "uploads/task2/logical_schema/";
        $files = array_diff(scandir($target_dir), array('.', '..'));

        if (count($files) > 0) {
            echo "<ul>";
            foreach ($files as $file) {
                echo "<li><a href='" . $target_dir . $file . "' target='_blank'>" . $file . "</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No materials have been submitted or uploaded yet.</p>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 @udomipt</p>
    </footer>
</body>
</html>
