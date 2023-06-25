<?php
include "./dbconnect.php";
$genres = $maindb->genre;
$genres_list = $genres->find([]);
$products = $maindb->product;
$bands = $maindb->band;
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
                foreach ($genre->bands as $bid) {
                    $band = $bands->findOne(['_id' => $bid]);
                    echo $band->name.", ";
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
                    <button type="submit" name="edit" value="<?= $band->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=genres" method="post">
                    <button type="submit" name="delete" value="<?= $band->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>