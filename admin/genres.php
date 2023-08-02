<?php
include "./dbconnect.php";
include "../functions.php";
$genres = $maindb->genre;
$genres_list = $genres->find([]);
$bands = $maindb->band;
if (isset($_POST['edit'])) {
    $gid = (int)($_POST['edit']);
    $editing_id = $gid;
    $genre_to_edit = $genres->findOne(['_id' => $gid]);
    if (!$genre_to_edit) {
        die('Fail to load genre with ID '.$gid);
    }
    ?>
    <div class="edit-genre-window" id="genre-id-<?= $gid ?>">
        <div class="close-button-container">
            <div class="close-button" onclick="closeEditGenreForm(<?= $gid ?>)"><i class="fa-solid fa-x"></i></div>
        </div>
        <div class="edit-form-container">
            <form action="index.php?content=all_genre" method="post" id="edit-genre-form" enctype="multipart/form-data">
                <label for="id">ID:</label>
                <input type="text" id="id" readonly name="id" value="<?= $genre_to_edit->_id ?>">
                <br>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?= $genre_to_edit->name ?>">
                <br><br>
                <label for="description">Description:</label>
                <textarea type="text" id="description" name="description" cols="100" rows="10"><?= $genre_to_edit->description ?></textarea>
                <label for="banner">Banner:</label>
                <img src="data:image/png;base64,<?= $genre_to_edit->banner ?>" alt="" class="banner">
                <br>
                <label for="logo">Logo:</label>
                <img src="data:image/png;base64,<?= $genre_to_edit->logo ?>" alt="" class="logo">
                <br>
                <label>Questions:</label><br>
                <?php
                for ($i = 0; $i < sizeof($band_to_edit->questions); $i++) {
                    ?>
                    <input type="text" name="question[<?= $i ?>]" value="<?= $band_to_edit->questions[$i] ?>">
                    <br>
                <?php
                }
                ?>
                <br>
                <label>Answer:</label><br>
                <?php
                for ($i = 0; $i < sizeof($band_to_edit->answers); $i++) {
                    ?>
                    <input type="text" name="answer[<?= $i ?>]" value="<?= $band_to_edit->answers[$i] ?>">
                    <br>
                <?php
                }
                ?>
                <br><br>
                <button type="submit" name="save" value="<?= $gid ?>" class="add-button submit">Save Changes</button>
            </form>
        </div>
        <div class="spacer-bottom"></div>
    </div>
    <?php
}
if (isset($_POST['save'])) {
    $gid = (int)($_POST['id']);
    $editing_genre = $genres->findOne(['_id' => $gid]);
    $name = $_POST['name'];
    $description = $_POST['description'];
    $banner = imageUpload($_FILES["banner"]["name"], $_FILES["banner"]["size"], $_FILES["banner"]["type"], $_FILES["banner"]["tmp_name"]);
    if ($banner == "") {
        $banner = $editing_genre->banner;
    }
    $logo = imageUpload($_FILES["logo"]["name"], $_FILES["logo"]["size"], $_FILES["logo"]["type"], $_FILES["logo"]["tmp_name"]);
    if ($logo == "") {
        $logo = $editing_genre->logo;
    }
    $question_temp = $_POST['question'];
    $question = [];
    for($i = 0; $i < sizeof($question_temp); $i++) {
        if ($question_temp[$i] != "") {
            array_push($question, $question_temp[$i]);
        } else {
            array_push($question, $editing_genre->questions[$i]);
        }
    }
    $answer_temp = $_POST['answer'];
    $answer = [];
    for($i = 0; $i < sizeof($answer_temp); $i++) {
        if ($answer_temp[$i] != "") {
            array_push($answer, $answer_temp[$i]);
        } else {
            array_push($question, $editing_genre->answers[$i]);
        }
    }
    $cursor = $genres->updateOne([
        '_id' => $gid],
        ['$set' =>
            ['name' => $name,
            'description' => $band_id,
            'banner' => $banner,
            'logo' => $logo,
            'questions' => $question,
            'answers' => $answer]
    ]);
}
?>
<div class="block">
    <table class="table bands-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Banner</th>
                <th>Description</th>
                <th>Logo</th>
                <th>Bands</th>
                <th>Questions</th>
                <th>Answers</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($genres_list as $genre) {
            ?>
            <tr>
                <td><?= $genre->_id?></td>
                <td><?= $genre->name ?></td>
                <td><img src="data:image/png;base64,<?= $genre->banner ?>" alt="" class="banner"></td>
                <td><?= $genre->description ?></td>
                <td><img src="data:image/png;base64,<?= $genre->logo ?>" alt="" class="logo"></td>
                <td><?php
                $band_list = [];
                foreach ($genre->bands as $bid) {
                    $band = $bands->findOne(['_id' => $bid]);
                    array_push($band_list, $band);
                }
                for ($i = 0; $i < sizeof($band_list); $i++) {
                    if ($i == sizeof($band_list) - 1) {
                        echo $band->name;
                    } else {
                        echo $band->name.", ";
                    }
                }
                ?></td>
                <td><?php
                foreach ($genre->questions as $question) {
                    echo "- ".$question."<br>";
                }
                ?></td>
                <td><?php
                foreach ($genre->answers as $answer) {
                    echo "- ".$answer."<br>";
                }
                ?></td>
                <td><form action="index.php?content=genres" method="post">
                    <button type="submit" name="edit" value="<?= $genre->_id ?>">Edit</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>