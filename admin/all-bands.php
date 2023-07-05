<?php
include "./dbconnect.php";
$bands = $maindb->band;
$bands_list = $bands->find([]);
$products = $maindb->product;
$genres = $maindb->genre;
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
                <td><form action="index.php?content=bands" method="post">
                    <button type="submit" name="edit" value="<?= $band->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=bands" method="post">
                    <button type="submit" name="delete" value="<?= $band->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>