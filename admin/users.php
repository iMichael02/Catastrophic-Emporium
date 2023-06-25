<?php
include "./dbconnect.php";
$users = $maindb->member;
$users_list = $users->find([]);
?>
<div class="block">
    <table class="table users-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Full Name</th>
                <th>Display Name</th>
                <th>Profile Pic</th>
                <th>Joint Date</th>
                <th>Title</th>
                <th>Followers</th>
                <th>Bands Followed</th>
                <th>Blogs</th>
                <th>Comments</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Media</th>
                <th>Admin</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($users_list as $user) {
            ?>
            <tr>
                <td><?= $user->_id?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->fname." ".$user->lname ?></td>
                <td><?= $user->display_name ?></td>
                <td><img src="data:image/png;base64,<?= $user->profile_pic ?>" alt="" class="profile-pic"></td>
                <td><?= $user->joint_date ?></td>
                <td><?php
                if ($user->title->the_creator == "") {
                    if ($user->title->certified_writer == "") {
                        if ($user->title->active_member == "") {
                            echo "New Member";
                        } else {
                            echo "Active Member";
                        }
                    } else {
                        echo "Certified Writer";
                    }
                } else {
                    echo "The Creator";
                }
                ?></td>
                <td><?= sizeof($user->followers) ?></td>
                <td><?php
                foreach ($user->follow_bands as $band_id) {
                    echo $band_id.", ";
                }
                ?></td>
                <td><?= sizeof($user->blogs) ?></td>
                <td><?= sizeof($user->comments) ?></td>
                <td><?= $user->address ?></td>
                <td><?= $user->phone ?></td>
                <td><?php
                foreach ($user->media as $media) {
                    if ($media != "") {
                        echo $media."<br>";
                    } else {
                        continue;
                    }
                }
                ?></td>
                <td><?= $user->admin ?></td>
                <td><form action="index.php?content=users" method="post">
                    <button type="submit" name="edit" value="<?= $user->_id ?>">Edit</button>
                </form></td>
                <td><form action="index.php?content=users" method="post">
                    <button type="submit" name="delete" value="<?= $user->_id ?>">Delete</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>