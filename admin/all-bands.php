<?php
include "./dbconnect.php";
include "../functions.php";
$bands = $maindb->band;
$bands_list = $bands->find([]);
$products = $maindb->product;
$genres = $maindb->genre;
$genres_list = $bands->find([]);
$genres_array = [];
foreach ($genres_list as $genre) {
    array_push($genres_array, $genre);
}
if (isset($_POST['edit'])) {
    $bid = (int)($_POST['edit']);
    $editing_id = $bid;
    $band_to_edit = $bands->findOne(['_id' => $bid]);
    if (!$band_to_edit) {
        die('Fail to load band with ID '.$bid);
    }
    $band_genres_id = $band_to_edit->genres;
    $band_genre_list = [];
    for($index = 0; $index < sizeof($band_genres_id); $index++) {
        $searched_genre = $genres->findOne(['_id' => $band_genres_id[$index]]);
        array_push($band_genre_list, $searched_genre);
    }
    ?>
    <div class="edit-band-window" id="band-id-<?= $bid ?>">
        <div class="close-button-container">
            <div class="close-button" onclick="closeEditBandForm(<?= $bid ?>)"><i class="fa-solid fa-x"></i></div>
        </div>
        <div class="edit-form-container">
            <form action="index.php?content=all_bands" method="post" id="edit-band-form" enctype="multipart/form-data">
                <label for="id">ID:</label>
                <input type="text" id="id" readonly name="id" value="<?= $band_to_edit->_id ?>">
                <br>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?= $band_to_edit->name ?>">
                <br>
                <label for="banner">Banner:</label>
                <img src="data:image/png;base64,<?= $band_to_edit->banner ?>" alt="" class="banner">
                <br>
                <input type="file" id="banner" name="banner" accept="image/png"><br><br>
                <label for="bibliography">Bibliography:</label>
                <br>
                <textarea type="text" id="bibliography" name="bibliography" cols="100" rows="10"><?= $band_to_edit->bibliography ?></textarea>
                <br>
                <label for="genre">Genre:</label>
                <br>
                <?php
                    for($index = 0; $index < sizeof($band_genre_list); $index++) {
                        ?>
                        <select name="genre[<?= $index ?>]" placeholder="<?= $band_genre_list[$index]->name ?>">
                            <option value="">Select a genre...</option>
                            <?php
                            for($i = 0; $i  < sizeof($genres_array); $i++) {
                                ?>
                                <option value="<?= $genres_array[$i]->_id ?>"><?= $genres_array[$i]->name ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php
                    }
                ?>
                <div id="add-genre"></div>
                <div class="add-button" id="add-genre-button"><i class="fa-solid fa-plus"></i> Add Genre</div>
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
                <div id="add-question"></div>
                <div class="add-button" id="add-question-button"><i class="fa-solid fa-plus"></i> Add Question</div>
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
                <div id="add-answer"></div>
                <div class="add-button" id="add-answer-button"><i class="fa-solid fa-plus"></i> Add Answer</div>
                <br>
                <label>Tags:</label><br>
                <textarea name="tags" cols="30" rows="4"><?php
                    for ($i = 0; $i < sizeof($band_to_edit->tags); $i++) {
                        if ($i != sizeof($band_to_edit->tags) - 1) {
                            echo $band_to_edit->tags[$i].', ';
                        } else {
                            echo $band_to_edit->tags[$i];
                        }
                    }
                    ?></textarea>
                <br><br>
                <button type="submit" name="save" value="<?= $bid ?>" class="add-button submit">Save Changes</button>
            </form>
        </div>
        <div class="spacer-bottom"></div>
    </div>
    <script type="text/javascript">
    const genreContainer = document.getElementById('add-genre');
    const genreButton = document.getElementById('add-genre-button');
    var j = <?= sizeof($band_to_edit->genres) ?>;
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
    var k = <?= sizeof($band_to_edit->questions) ?>;
    var l = <?= sizeof($band_to_edit->answers) ?>;
    </script>
    <?php
}
if (isset($_POST['save'])) {
    $bid = (int)($_POST['id']);
    $editing_band = $bands->findOne(['_id' => $bid]);
    $name = $_POST['name'];
    $bibliography = $_POST['bibliography'];
    $genre_temp = $_POST['genre'];
    $old_length = sizeof($genre_temp);
    for($i = 0; $i < sizeof($editing_band->genres); $i++) {
        if ($genre_temp[$i] == "") {
            $genre_temp[$i] = $editing_band->genres[$i];
        }
    }
    $genre_temp = array_unique($genre_temp);
    $genre = [];
    for($i = 0; $i < $old_length; $i++) {
        if ($genre_temp[$i] != "" && $genre_temp[$i] != null) {
            array_push($genre, $genre_temp[$i]);
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
    if (isset($_FILES['banner'])) {
        $base64String = imageUpload($_FILES["banner"]["name"], $_FILES["banner"]["size"], $_FILES["banner"]["type"], $_FILES["banner"]["tmp_name"]);
    } else {
        $base64String = $editing_band->banner;
    }
    $cursor = $bands->updateOne([
        '_id' => $bid],
        ['$set' =>
            ['name' => $name,
            'bibliography' => $bibliography,
            'genres' => $genre,
            'questions' => $question,
            'answers' => $answer,
            'tags' => $tags,
            'banner' => $base64String]
    ]);
}
if (isset($_POST['delete'])) {
    $bid = (int)($_POST['delete']);
    $delete_band = $bands->findOne(['_id' => $bid]);
    ?>
    <div class="pop-up-message-window delete-band-window" id="delete-band-id-<?= $bid ?>">
        <form action="index.php?content=all_bands" id="confirm-delete-band-form" method="post"></form>
        <div class="message-container">Confirm to delete band: <?= $delete_band->name ?></div>
        <div class="options-container">
            <div class="confirm-button-container">
                <button form="confirm-delete-band-form" class="confirm-button" name="delete_confirm" value="<?= $bid ?>">Confirm</button>
            </div>
            <div class="cancel-button-container">
                <button class="cancel-button" onclick="closeDeleteMessage(<?= $bid ?>)">Cancel</button>
            </div>
        </div>
    </div>
    <?php
}
if (isset($_POST['delete_confirm'])) {
    $bid = (int)($_POST['delete_confirm']);
    $cursor = $bands->deleteOne(['_id' => $bid]);
}
?>
<div class="block">
    <table class="table bands-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Banner</th>
                <th>Bibliography</th>
                <th>Products ID</th>
                <th>Genres</th>
                <th>Sales</th>
                <th>Questions</th>
                <th>Answers</th>
                <th>Follower</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($bands_list as $band) {
            ?>
            <tr>
                <td><?= $band->_id?></td>
                <td><?= $band->name ?></td>
                <td><img src="data:image/png;base64,<?= $band->banner ?>" alt="" class="banner"></td>
                <td><?= $band->bibliography ?></td>
                <td><?php
                foreach ($band->products as $pid) {
                    echo "$pid, ";
                }
                ?></td>
                <td><?php
                foreach ($band->genres as $gid) {
                    $genre = $genres->findOne(['_id' => $gid]);
                    echo $genre->name.", ";
                }
                ?></td>
                <td><?= $band->sales ?></td>
                <td><?php
                foreach ($band->questions as $question) {
                    echo "- ".$question."<br>";
                }
                ?></td>
                <td><?php
                foreach ($band->answers as $answer) {
                    echo "- ".$answer."<br>";
                }
                ?></td>
                <td><?= sizeof($band->member_followers) ?></td>
                <td><?php
                foreach ($band->tags as $tag) {
                    echo $tag.", ";
                }
                ?></td>
                <td><form action="index.php?content=all_bands" method="post">
                    <button type="submit" name="edit" value="<?= $band->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=all_bands" method="post">
                    <button type="submit" name="delete" value="<?= $band->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>