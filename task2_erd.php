<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERD Submission</title>
    <link rel="stylesheet" href="task1.css">
</head>
<body>
    <header>
        <h1>ERD Submission</h1>
        <a class="back-link" href="task2.php">&#8592; Back to Tasks</a>
    </header>

    <main class="submission-section">
        
        <!-- File Upload Form -->
        <h2>Upload Your ERD</h2>
        <form action="upload_erd.php" method="post" enctype="multipart/form-data">
            <label for="file">Choose file to upload:</label>
            <input type="file" id="file" name="file" required>
            <br><br>
            <button type="submit">Upload File</button>
        </form>

        <hr>

        <!-- View Submitted and Uploaded Materials -->
        <h2>View ERD</h2>
        <button onclick="window.location.href='view_materials_erd.php'">View ERDs</button>
    </main>

   
</body>
</html>
