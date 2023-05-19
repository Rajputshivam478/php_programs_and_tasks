<?php
session_start();
// $destination = "";
// $msg = "";
include './service/variables.php';
include './service/edit_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="h-screen bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <main class="h-full w-full flex flex-col items-center pt-24">
        <?php
        if (strlen($msg) > 0) {
            if ($msg == "file uploaded" || $msg == "file updated") {
                ?>
                <div class="bg-green-200 border border-green-600 rounded-xl text-green-600 w-full py-6 text-center">
                    <h2 class="px-10 font-semibold">
                        <?php echo $msg; ?>
                    </h2>
                </div>
                <?php
            } else {
                ?>
                <div class="bg-red-200 border border-red-600 rounded-xl text-red-600 w-full py-6 text-center">
                    <h2 class="px-10 font-semibold">
                        <?php echo $msg; ?>
                    </h2>
                </div>
                <?php
            }
        }
        ?>
        <h1 class="py-6 text-center text-6xl font-extrabold text-gray-800">Update Form</h1>
        <form action="" method="post" enctype="multipart/form-data" class="block bg-white w-1/2 p-6 mt-8 rounded-lg">
            <table cellspacing="10px" cellpadding="5px" align="center" class="text-lg font-semibold text-gray-400">
                <tbody>
                    <tr class="hidden">
                        <td>
                            <label for="f_name">User id :</label>
                        </td>
                        <td>
                            <input type="text" name="user_id" id="" value="<?php echo $user_id; ?>"
                                class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="f_name">First name :</label>
                        </td>
                        <td>
                            <input type="text" name="fname" id="" value="<?php echo $fname; ?>"
                                class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="l_name">Last name :</label>
                        </td>
                        <td>
                            <input type="text" name="lname" id="" value="<?php echo $lname ?>"
                                class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email :</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="" value="<?php echo $email; ?>"
                                class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="p_number">Role :</label>
                        </td>
                        <td>
                            <input disabled type="text" name="role" id="" value="<?php echo $role; ?>"
                                class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                        </td>
                    </tr>
                    <tr class="hidden">
                        <td>
                            <label for="dob">Modify Date :</label>
                        </td>
                        <td><input type="datetime" name="modify_date" id="modified_date" value="<?php $actualtime = time();
                        echo (date("y/m/d h:i:s", $actualtime)); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="image">Uploaded Image :</label>
                        </td>
                        <td style="display:flex; align-items:center;">
                            <input type="file" name="image" id="image" accept="image/png, image/jpeg">
                            <img src="<?php echo $path; ?>" alt="" height="80px" width="80px">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="update" value="update"
                                class="px-8 py-3 rounded-md block bg-gray-300 text-lg font-semibold text-gray-600 hover:text-white hover:bg-blue-400">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </main>
</body>

</html>