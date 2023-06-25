<?php
include "./dbconnect.php";
$blogs = $maindb->blog;
$blogs_list = $blogs->find([]);
$members = $maindb->member;
?>
<div class="block">
    <table class="table bands-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Time</th>
                <th>Content</th>
                <th>Thumbnail</th>
                <th>Upvotes</th>
                <th>Downvotes</th>
                <th>Tags</th>
                <th>Status</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($blogs_list as $blog) {
            ?>
            <tr>
                <td><?= $blog->_id?></td>
                <td><?= $blog->title ?></td>
                <td><?php
                $author = $members->findOne(['_id' => $blog->author]);
                echo $author->display_name;
                ?></td>
                <td><?= $blog->time ?></td>
                <td><?= $blog->content ?></td>
                <td><img src="data:image/png;base64,<?= $blog->thumbnail ?>" alt="" class="thumbnail"></td>
                <td><?= sizeof($blog->upvote) ?></td>
                <td><?= sizeof($blog->downvote) ?></td>
                <td><?php
                foreach ($blog->tags as $tag) {
                    echo $tag.", ";
                }
                ?></td>
                <td><?= sizeof($blog->comments) ?></td>
                <td><?= $blog->accepted ?></td>
                <td><form action="index.php?content=products" method="post">
                    <button type="submit" name="edit" value="<?= $blog->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=products" method="post">
                    <button type="submit" name="delete" value="<?= $blog->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>