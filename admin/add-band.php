<?php
include "./dbconnect.php";
// session_start();
$bands = $maindb->band;
$bands_list = $bands->find([]);
$first_band = $bands->findOne([]);
$genres = $maindb->genre;
$genres_list = $genres->find([]);
$genres_array = [];
foreach ($genres_list as $genre) {
    array_push($genres_array, $genre);
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $bibliography = $_POST['bibliography'];
    $tags = explode(", ",$_POST['tags']);
    $fileName = $_FILES["thumbnail"]["name"];
    $fileSize = $_FILES["thumbnail"]["size"]/1024;
    $fileType = $_FILES["thumbnail"]["type"];
    $fileTmpName = $_FILES["thumbnail"]["tmp_name"];
    if ($fileType == "image/png") {
        $random = rand(1111, 9999);
        $newFileName = $random.$fileName;
        $uploadPath = "testUpload/".$newFileName;
        if(move_uploaded_file($fileTmpName,$uploadPath)){
            $imageData = file_get_contents($uploadPath);
            $base64String = base64_encode($imageData);
        }
    }
    $largest = $first_blog->_id;
    foreach ($blogs_list as $blog) {
        if ($blog->_id > $largest) {
            $largest = $blog->_id;
        }
    }
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    // $cursor = $blogs->insertOne([
    //     '_id' => $largest + 1, 
    //     'title' => $title, 
    //     'author' => 1, 
    //     'time' => date("d-m-Y H:i:s", strtotime('now')),
    //     'content' => $blog_content,
    //     'thumbnail' => $base64String,
    //     'upvote' => [],
    //     'downvote' => [],
    //     'tags' => $tags,
    //     'accepted' => true,
    //     'comment' => []
    // ]);
}

?>
<div class="block">
    <form action="" method="post" enctype="multipart/form-data" class="add-band-form">
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Bibliography:</label><br>
        <textarea name="bibliography" cols="100" rows="10"></textarea><br><br>
        <label>Genre(s):</label><br>
        <select name="genre[0]" placeholder="Pick a genre...">
            <option value="">Select a genre...</option>
            <?php
            for($i = 0; $i  < sizeof($genres_array); $i++) {
                ?>
                <option value="<?= $genres_array[$i]->_id ?>"><?= $genres_array[$i]->name ?></option>
                <?php
            }
            ?>
        </select>
        <div id="add-genre"></div>
        <div class="add-button" id="add-genre-button"><i class="fa-solid fa-plus"></i> Add Genre</div>
        <br>

        <label>Questions:</label><br>
        <input type="text" name="question[0]">
        <br>
        <div id="add-question"></div>
        <div class="add-button" id="add-question-button"><i class="fa-solid fa-plus"></i> Add Question</div>
        <br>
        <label>Answer:</label><br>
        <input type="text" name="answer[0]">
        <div id="add-answer"></div>
        <div class="add-button" id="add-answer-button"><i class="fa-solid fa-plus"></i> Add Answer</div>
        <br>
        <label>Tags:</label><br>
        <textarea name="tags"></textarea><br><br>
        <label>Banner:</label><br>
        <input type="file" name="banner" accept="image/png"><br><br>
        <button type="submit" name="submit" value="submit" class="add-button submit">Add Band</button>
    </form>
</div>
<script type="text/javascript">
const genreContainer = document.getElementById('add-genre');
const genreButton = document.getElementById('add-genre-button');
var j = 1;
if (genreButton != null) {
    genreButton.addEventListener('click', function(e) {
        const el = document.createElement('div');
        el.innerHTML = 
        `<select name="genre[`+ j +`]" placeholder="Pick a genre...">
            <option value="">Select a genre...</option>
            <?php
            for ($i = 0; $i < sizeof($genres_array); $i++) {
                echo("<option value=\"".$genres_array[$i]->_id."\">".$genres_array[$i]->name."</option>\r\n");
            }
            ?>
            </select>`;
        genreContainer.appendChild(el);
        $('select').selectize({
            sortField: 'text'
        });
        j++;
    });
}
</script>