<?php
    include "./dbconnect.php";
    $bandCollection = $maindb->band;
    // $arr = array(
    //     'US' => 'Washington',  
    //     'UK' => 'London',
    //     'Spain' => 'Madrid', 
    //     'Italy' => 'Rome'
    // ); 
    // echo json_encode($arr);
    if (isset($_POST['Submit'])) {
        $MY_FILE = $_FILES['banner']['tmp_name'];
        $file = fopen($MY_FILE, 'r');
        $file_contents = fread($file, filesize($MY_FILE));
        fclose($file);
        $banner = base64_encode($file_contents);
        $id = ($bandCollection->count())+1;
        $bandname = $_POST['bandname'];
        $bibliography = $_POST['bibliography'];
        $question1 = $_POST['question1'];
        $question2 = $_POST['question2'];
        $question3 = $_POST['question3'];
        $question4 = $_POST['question4'];
        $question5 = $_POST['question5'];
        $product_array = array_map("trim", explode(",",$_POST['products']));
        $products = json_encode($product_array);
        $genres_array = array_map("trim", explode(",",$_POST['genres']));
        $genres = json_encode($genres_array);
        $sales = $_POST['sales'];
        $insertBand = $bandCollection->insertOne(
            [ '_id' => $id, 'name' => $bandname, 'banner' => $banner, 'bibliography' => $bibliography, 'question1' => $question1,
            'question2' => $question2, 'question3' => $question3, 'question4' => $question4, 'question5' => $question5, 
            'products' => $product_array, 'genres' => $genres_array, 'sales' => $sales ]
        );
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="banner" value="">
        <br>
        <label for="bandname">Name</label>
        <input type="text" name="bandname">
        <br>
        <label for="bibliography">Bibliography</label>
        <textarea rows="5" cols="100" name="bibliography"></textarea>
        <br>
        <label for="question1">Question1</label>
        <textarea rows="2" cols="50" name="question1"></textarea>
        <br>
        <label for="answer1">Answer1</label>
        <textarea rows="2" cols="50" name="answer1"></textarea>
        <br>
        <label for="question2">Question2</label>
        <textarea rows="2" cols="50" name="question2"></textarea>
        <br>
        <label for="answer2">Answer2</label>
        <textarea rows="2" cols="50" name="answer2"></textarea>
        <br>
        <label for="question3">Question3</label>
        <textarea rows="2" cols="50" name="question3"></textarea>
        <br>
        <label for="answer3">Answer3</label>
        <textarea rows="2" cols="50" name="answer3"></textarea>
        <br>
        <label for="question4">Question4</label>
        <textarea rows="2" cols="50" name="question4"></textarea>
        <br>
        <label for="answer4">Answer4</label>
        <textarea rows="2" cols="50" name="answer4"></textarea>
        <br>
        <label for="question5">Question5</label>
        <textarea rows="2" cols="50" name="question5"></textarea>
        <br>
        <label for="answer5">Answer5</label>
        <textarea rows="2" cols="50" name="answer5"></textarea>
        <br>
        <label for="products">Products</label>
        <textarea rows="2" cols="50" name="products"></textarea>
        <br>
        <label for="genres">Genres</label>
        <textarea rows="2" cols="50" name="genres"></textarea>
        <br>
        <label for="sales">Sales</label>
        <input type="text" name="sales">
        <br>
        <input type="submit" name="Submit" value="Upload">
    </form>
</body>
</html>