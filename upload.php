<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "./dbconnect.php";
        $MY_FILE = $_FILES['file']['tmp_name'];
 
        // To open the file and store its contents in $file_contents
        $file = fopen($MY_FILE, 'r');
        $file_contents = fread($file, filesize($MY_FILE));
        fclose($file);
        /* We need to escape some stcharacters that might appear in  file_contents,so do that now, before we begin the query.*/
        
        $file_contents = addslashes($file_contents);
        $query = "INSERT INTO files SET file_data='$file_contents'";
        mysqli_query($conn, $query) or die("MySQL Query Error: " . mysqli_error($conn) . "<br><br>". "The SQL was: $SQL<br><br>");
        mysqli_close($conn);
    ?>
    <form name="file" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" value="" />
        <input type="submit" name="Upload" value="Upload">
    </form>
</body>
</html>