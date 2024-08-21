<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functional Requirements</title>
    <link rel="stylesheet" href="task1.css">
</head>
<body>
    <header>
        <h1>Functional Requirements</h1>
        <a class="back-link" href="progress.php">&#8592; Back to Progress</a>
    </header>

    <main class="submission-section">
        <!-- Text Submission Form -->
        <h2>Submit Your Functional Requirements</h2>
        <form action="submit_text.php" method="post">
            <label for="requirements">Type your requirements:</label><br>
            <textarea id="requirements" name="requirements" rows="8" cols="50" required></textarea><br><br>
            <button type="submit">Submit Text</button>
        </form>

        <hr>

        <!-- File Upload Form -->
        <h2>Upload Your Functional Requirements</h2>
        <form action="upload_function.php" method="post" enctype="multipart/form-data">
            <label for="file">Choose file to upload:</label>
            <input type="file" id="file" name="file" required>
            <br><br>
            <button type="submit">Upload File</button>
        </form>

        <hr>

        <!-- View Submitted and Uploaded Materials -->
        <h3>View F.R</h3>
        <button onclick="window.location.href='view_materials.php'">View uploads</button>
    </main>

</body>
</html>
