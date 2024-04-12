<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        // Define allowed file types and maximum file size
        $allowed_types = array('image/png', 'image/jpeg', 'image/gif');
        $max_size = 2 * 1024 * 1024; // 2 MB
        
        // Get file details
        $file_name = $_FILES["file"]["name"];
        $file_type = $_FILES["file"]["type"];
        $file_size = $_FILES["file"]["size"];
        
        // Check file type and size
        if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
            // Move uploaded file to desired directory
            $upload_path = "./" . $file_name;
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $upload_path)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file. Allowed file types: PNG, JPG, GIF. Maximum file size: 2 MB.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload File</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".png, .jpg, .jpeg, .gif"><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
