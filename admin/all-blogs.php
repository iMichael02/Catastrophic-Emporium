<?php
include "./dbconnect.php";
$blogs = $maindb->blog;
$blogs_list = $blogs->find([]);
$members = $maindb->member;
if (isset($_POST['edit'])) {
    $bid = (int)($_POST['edit']);
    $blog_to_edit = $blogs->findOne(['_id' => $bid]);
    ?>
    <div class="edit-blog-window" id="blog-id-<?= $bid ?>">
        <div class="close-button-container">
            <div class="close-button" onclick="closeEditBlogForm(<?= $bid ?>)"><i class="fa-solid fa-x"></i></div>
        </div>
        <div class="edit-form-container">
            <form action="index.php?content=all_blogs" method="post" id="edit-blog-form">
                <label for="id">ID:</label>
                <input type="text" id="id" readonly name="id" value="<?= $blog_to_edit->_id ?>">
                <br>
                <label for="title">Title:</label>
                <input type="text" id="title" readonly name="title" value="<?= $blog_to_edit->title ?>">
                <br><br>
                <label>Tags:</label><br>
                <textarea name="tags" cols="30" rows="4"><?php
                    for ($i = 0; $i < sizeof($blog_to_edit->tags); $i++) {
                        if ($i != sizeof($blog_to_edit->tags) - 1) {
                            echo $blog_to_edit->tags[$i].', ';
                        } else {
                            echo $blog_to_edit->tags[$i];
                        }
                    }
                    ?></textarea>
                <br><br>
                <button type="submit" name="save" value="<?= $bid ?>" class="add-button submit">Save Changes</button>
            </form>
        </div>
        <div class="spacer-bottom"></div>
    </div>
    <?php
}
if (isset($_POST['save'])) {
    $bid = (int)($_POST['id']);
    $editing_blog = $blogs->findOne(['_id' => $bid]);
    $tags = explode(', ', $_POST['tags']);
    $cursor = $blogs->updateOne(['_id' => $bid], ['$set' => ['tags' => $tags]]);
}
if (isset($_POST['delete'])) {
    $bid = (int)($_POST['delete']);
    $delete_blog = $blogs->findOne(['_id' => $bid]);
    ?>
    <div class="pop-up-message-window delete-blog-window" id="delete-blog-id-<?= $bid ?>">
        <form action="index.php?content=all_blogs" id="confirm-delete-blog-form" method="post"></form>
        <div class="message-container">Confirm to delete blog with ID: <?= $delete_blog->_id ?></div>
        <div class="options-container">
            <div class="confirm-button-container">
                <button form="confirm-delete-blog-form" class="confirm-button" name="delete_confirm" value="<?= $bid ?>">Confirm</button>
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
    $cursor = $blogs->deleteOne(['_id' => $bid]);
}
?>
<div class="block">
    <table class="table blogs-table">
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
                <td><form action="index.php?content=all_blogs" method="post">
                    <button type="submit" name="edit" value="<?= $blog->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=all_blogs" method="post">
                    <button type="submit" name="delete" value="<?= $blog->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>