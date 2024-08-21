<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Materials</title>
    <link rel="stylesheet" href="task1.css">
</head>
<body>
    <header>
        <h1>View All Submitted and Uploaded Materials</h1>
        <a class="back-link" href="fr.php">&#8592; Back to Tasks</a>
    </header>

    <main class="materials-list">
        <?php
        $target_dir = "uploads/task1/";
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

    
</body>
</html>
