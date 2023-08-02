<?php
include "./dbconnect.php";
$members = $maindb->member;
$members_list = $members->find([]);
if (isset($_POST['ban'])) {
    $uid = (int)($_POST['ban']);
    $member_to_ban = $members->findOne(['_id' => $uid]);
    ?>
    <div class="pop-up-message-window ban-member-window" id="ban-member-id-<?= $uid ?>">
        <form action="index.php?content=members" id="confirm-ban-form" method="post"></form>
        <div class="message-container">Confirm to ban member: <?= $member_to_ban->fname ?> <?= $member_to_ban->lname ?></div>
        <div class="options-container">
            <div class="confirm-button-container">
                <button form="confirm-ban-form" class="confirm-button" name="ban_confirm" value="<?= $uid ?>">Confirm</button>
            </div>
            <div class="cancel-button-container">
                <button class="cancel-button" onclick="closeBanMessage(<?= $uid ?>)">Cancel</button>
            </div>
        </div>
    </div>
    <?php
}
if (isset($_POST['ban_confirm'])) {
    $uid = (int)($_POST['ban_confirm']);
    $member_to_ban = $members->findOne(['_id' => $uid]);
    $temp_ban = (array)($member_to_ban->ban);
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    if (sizeof($member_to_ban->ban) >= 3) {
        array_push($temp_ban, date("d-m-Y H:i:s", strtotime('now')));
        $cursor = $members->updateOne(['_id' => $uid], ['$set' => ['ban' => $temp_ban, 'status' => 'permanent_banned']]);
    } else {
        array_push($temp_ban, date("d-m-Y H:i:s", strtotime('now')));
        $cursor = $members->updateOne(['_id' => $uid], ['$set' => ['ban' => $temp_ban, 'status' => 'banned']]);
    }
}
if (isset($_POST['unban'])) {
    $uid = (int)($_POST['unban']);
    $member_to_unban = $members->findOne(['_id' => $uid]);
    ?>
    <div class="pop-up-message-window unban-member-window" id="unban-member-id-<?= $uid ?>">
        <form action="index.php?content=members" id="confirm-unban-form" method="post"></form>
        <div class="message-container">Confirm to unban member: <?= $member_to_unban->fname ?> <?= $member_to_unban->lname ?></div>
        <div class="options-container">
            <div class="confirm-button-container">
                <button form="confirm-unban-form" class="confirm-button" name="unban_confirm" value="<?= $uid ?>">Confirm</button>
            </div>
            <div class="cancel-button-container">
                <button class="cancel-button" onclick="closeUnbanMessage(<?= $uid ?>)">Cancel</button>
            </div>
        </div>
    </div>
    <?php
}
if (isset($_POST['unban_confirm'])) {
    $uid = (int)($_POST['unban_confirm']);
    $cursor = $members->updateOne(['_id' => $uid], ['$set' => ['status' => 'normal']]);
}
?>
<div class="block">
    <table class="table members-table">
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
        foreach ($members_list as $member) {
            ?>
            <tr>
                <td><?= $member->_id?></td>
                <td><?= $member->email ?></td>
                <td><?= $member->fname." ".$member->lname ?></td>
                <td><?= $member->display_name ?></td>
                <td><img src="data:image/png;base64,<?= $member->profile_pic ?>" alt="" class="profile-pic"></td>
                <td><?= $member->joint_date ?></td>
                <td><?php
                if ($member->title->the_creator == "") {
                    if ($member->title->certified_writer == "") {
                        if ($member->title->active_member == "") {
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
                <td><?= sizeof($member->followers) ?></td>
                <td><?php
                foreach ($member->follow_bands as $band_id) {
                    echo $band_id.", ";
                }
                ?></td>
                <td><?= sizeof($member->blogs) ?></td>
                <td><?= sizeof($member->comments) ?></td>
                <td><?= $member->address ?></td>
                <td><?= $member->phone ?></td>
                <td><?php
                foreach ($member->media as $media) {
                    if ($media != "") {
                        echo $media."<br>";
                    } else {
                        continue;
                    }
                }
                ?></td>
                <td><?= $member->admin ?></td>
                <td>
                    <?php
                    if ($member->status != 'permanent_banned') {
                        if ($member->status == 'normal' || $member->status == null) {
                        ?>
                            <form action="index.php?content=members" method="post">
                                <button type="submit" name="ban" value="<?= $member->_id ?>">Ban</button>
                            </form>
                        <?php
                        } else {
                            ?>
                            <form action="index.php?content=members" method="post">
                                <button type="submit" name="unban" value="<?= $member->_id ?>">Unban</button>
                            </form>
                            <?php
                        }
                    }
                    ?>
                </td>
                <td><form action="index.php?content=members" method="post">
                    <button type="submit" name="promote" value="<?= $member->_id ?>">Admin</button>
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>