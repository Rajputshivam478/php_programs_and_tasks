<?php
session_start();
// $destination = "";
// $msg = "";
if (isset($_REQUEST['view'])) {
    include './service/variables.php';
    include './service/fecth_data.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View</title>
        <link rel="stylesheet" href="../dist/output.css">
    </head>

    <body>
        <main class="flex justify-center pt-20">
            <table cellpadding="20px" class="bg-slate-200 rounded-xl">
                <tr>
                    <td>Image </td>
                    <td>:</td>
                    <td>
                        <img src="<?php echo $path; ?>" alt="" height="100px" width="100px">
                    </td>
                </tr>
                <tr>
                    <td>User ID </td>
                    <td>:</td>
                    <td>
                        <?php echo $user_id; ?>
                    </td>
                </tr>
                <tr>
                    <td>First Name </td>
                    <td>:</td>
                    <td>
                        <?php echo $fname; ?>
                    </td>
                </tr>
                <tr>
                    <td>Last Name </td>
                    <td>:</td>
                    <td>
                        <?php echo $lname; ?>
                    </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td>
                        <?php echo $email; ?>
                    </td>
                </tr>
                <tr>
                    <td>Created Date </td>
                    <td>:</td>
                    <td>
                        <?php echo $created_date; ?>
                    </td>
                </tr>
                <tr>
                    <td>Modified Date </td>
                    <td>:</td>
                    <td>
                        <?php echo $modify_date; ?>
                    </td>
                </tr>
                <?php
                if (isset($row['deleted_date'])) {
                    ?>
                    <tr>
                        <td>Deleted Date </td>
                        <td>:</td>
                        <td>
                            <?php echo $deleted_date; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <?php
                if (!isset($row['deleted_date'])) {
                    ?>
                    <tr>
                        <td>
                            <form action="edit.php" method="post" class="hover:text-blue-400">
                                <input type="number" name="edit_user_id" value="<?php echo $user_id; ?>" hidden>
                                <input type="submit" name="edit" value="edit"
                                    class="px-8 py-3 rounded-md bg-white border border-slate-600 text-gray-800 hover:text-white hover:bg-blue-400">
                            </form>
                        </td>
                        <td></td>
                        <td>
                            <form action="./service/delete.php" method="post" class="hover:text-blue-400"><input type="number"
                                    name="edit_user_id" value="<?php echo $user_id; ?>" hidden><input type="submit"
                                    name="delete" value="delete"
                                    class="px-8 py-3 rounded-md bg-white border border-slate-600 text-gray-800 hover:text-white hover:bg-blue-400">
                            </form>
                        </td>
                        <!-- <td><a href="edit.php"
                        class="px-8 py-3 rounded-md bg-white border border-slate-600 text-gray-800 hover:text-white hover:bg-blue-400"></a>
                </td> -->
                    </tr>
                    <?php
                }
                ?>
            </table>
        </main>
    </body>

    </html>
    <?php
} else {
    header('location: login.php');
}
?>