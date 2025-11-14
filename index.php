<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h3>Select File to upload</h3>
        <input type="file" name="fileimage">
        <input type="submit" value="Upload File">
    </form>
</body>
</html>