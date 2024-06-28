<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Uploading Form</title>
</head>
<body>
    <h3>File upload:</h3>
    select a file to uplaod: <br />
    <form action="/FileUploading/uploadform.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" size="50" />
    <br />
    <br>
    <input type="submit" value="Upload File" />
    </form>
</body>
</html>