<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 - Data Dictionary</title>
    <link rel="stylesheet" href="task1.css">
</head>
<body>
    <header>
        <h1>Data Dictionary</h1>
        <a class="back-link" href="task2.php">&#8592; Back to Task 2</a>
    </header>

    <main class="submission-section">
        <!-- Text Submission Form -->
        <h2>Submit Your Data Dictionary</h2>
        <form action="submit_text_data_dictionary.php" method="post">
            <label for="data_dictionary">Type your Data Dictionary description:</label><br>
            <textarea id="data_dictionary" name="data_dictionary" rows="8" cols="50" required></textarea><br><br>
            <button type="submit">Submit Text</button>
        </form>

        <hr>

        <!-- File Upload Form -->
        <h2>Upload Your Data Dictionary</h2>
        <form action="upload_data_dictionary.php" method="post" enctype="multipart/form-data">
            <label for="file">Choose file to upload:</label>
            <input type="file" id="file" name="file" required>
            <br><br>
            <button type="submit">Upload File</button>
        </form>

        <hr>

        <!-- View Submitted and Uploaded Materials -->
        <h2>View Submitted and Uploaded Materials</h2>
        <button onclick="window.location.href='view_materials_data_dictionary.php'">View All Materials</button>
    </main>

    <footer>
        <p>&copy; 2024 @udomipt</p>
    </footer>
</body>
</html>
