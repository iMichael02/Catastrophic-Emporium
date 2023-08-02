<?php
include "./dbconnect.php";
include "../functions.php";
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
    $genre_temp = $_POST['genre'];
    $genre = [];
    for($i = 0; $i < sizeof($genre_temp); $i++) {
        if ($genre_temp[$i] != "") {
            array_push($genre, (int)($genre_temp[$i]));
        }
    }
    $question_temp = $_POST['question'];
    $question = [];
    for($i = 0; $i < sizeof($question_temp); $i++) {
        if ($question_temp[$i] != "") {
            array_push($question, $question_temp[$i]);
        }
    }
    $answer_temp = $_POST['answer'];
    $answer = [];
    for($i = 0; $i < sizeof($answer_temp); $i++) {
        if ($answer_temp[$i] != "") {
            array_push($answer, $answer_temp[$i]);
        }
    }
    $tags = explode(", ",$_POST['tags']);
    $base64String = imageUpload($_FILES["banner"]["name"], $_FILES["banner"]["size"], $_FILES["banner"]["type"], $_FILES["banner"]["tmp_name"]);
    $largest = $first_band->_id;
    foreach ($bands_list as $band) {
        if ($band->_id > $largest) {
            $largest = $band->_id;
        }
    }
    $cursor = $bands->insertOne([
        '_id' => $largest + 1,
        'name' => $name,
        'bibliography' => $bibliography,
        'genres' => $genre,
        'questions' => $question,
        'answers' => $answer,
        'tags' => $tags,
        'banner' => $base64String,
        'products' => [],
        'sales' => 0,
        'member_followers' => []
    ]);
}

?>
<div class="block">
    <form action="" method="post" enctype="multipart/form-data" class="add-band-form">
        <label>Name:</label><br>
        <input type="text" name="name"><br><br>
        <label>Bibliography:</label><br>
        <textarea name="bibliography" cols="100" rows="10"></textarea><br><br>
        <label for="genre">Genre(s):</label><br>
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
var k = 1;
var l = 1;
</script>