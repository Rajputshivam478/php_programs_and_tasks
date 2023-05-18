<?php session_start();
if (isset($_SESSION['email'])) {
    include './service/variables.php';
    include './service/fecth_data.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Profile</title>
        <link rel="stylesheet" href="../dist/output.css">
    </head>

    <body class="h-screen">
        <?php include 'header.php'; ?>
        <main class="flex justify-center pt-32">
            <table class="border border-slate-400" cellpadding="20px" align="center">
                <thead>
                    <tr>
                        <th class="border-2 border-slate-400 bg-slate-200">User ID</th>
                        <th class="border-2 border-slate-400 bg-slate-200">First Name</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Last Name</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Email</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Password</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Role</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Created Date</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Modified Date</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Image</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Edit</th>
                        <th class="border-2 border-slate-400 bg-slate-200">Delete</th>
                        <th class="border-2 border-slate-400 bg-slate-200">View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './service/config.php';

                    if (isset($conn)) {
                        $result = mysqli_query($conn, "SELECT user.user_id,`fname`,`lname`,`email`,`password`,role.role_id,`role`,`created_date`,`modify_date`,`size`,`extension`,`unique_name`,`name`,`path` FROM `user` INNER JOIN `profile` ON profile.user_id = user.user_id INNER JOIN `role` ON user.role_id = role.role_id LEFT JOIN `file` ON user.user_id = file.user_id");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['user_id'] != 101) {
                                    echo '<tr>';
                                    echo '<td class="border-2 border-slate-400">' . $row['user_id'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['fname'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['lname'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['email'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['password'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['role'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['created_date'] . '</td>';
                                    echo '<td class="border-2 border-slate-400">' . $row['modify_date'] . '</td>';
                                    $user_id = $row['user_id'];
                                    echo '<td class="border-2 border-slate-400"><img src="' . $row['path'] . '" alt="Image not uploded.." height="70px" width="70px"></td>';
                                    echo '<td class="border-2 border-slate-400"><form action="edit.php" method="post" class="hover:text-blue-400"><input type="number" name="edit_user_id" value="' . $user_id . '" hidden><button type="submit" name="edit" value="edit">Edit</button></form></td>';
                                    echo '<td class="border-2 border-slate-400"><form action="./service/delete.php" method="post" class="hover:text-blue-400"><input type="number" name="edit_user_id" value="' . $user_id . '" hidden><button type="submit" name="delete" value="delete">delete</button></form></td>';
                                    echo '<td class="border-2 border-slate-400"><form action="view.php" method="post" class="hover:text-blue-400"><input type="number" name="edit_user_id" value="' . $user_id . '" hidden><button type="submit" name="view" value="view">view</button></form></td>';
                                    echo '</tr>';
                                }
                            }
                        }
                    }
                    ?>

                </tbody>
            </table>
        </main>
    </body>

    </html>
    <?php
} else {
    header('location: login.php');
}
?>