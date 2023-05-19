<?php
$msg = "";
$check = 0;
if (isset($_REQUEST['user_id'])) {
    include './service/forgot_password_data.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
        <link rel="stylesheet" href="../dist/output.css">
    </head>

    <body class="h-screen bg-gradient-to-r from-violet-500 to-fuchsia-500">
        <header class="h-20 fixed inset-x-0 px-10 flex items-center justify-between">
            <a href="" class="invisible"></a>
            <a href="login.php"
                class="px-8 py-3 rounded-md block bg-gray-300 text-gray-700 hover:text-white hover:bg-blue-400">Login
                Here.</a>
        </header>
        <main class="px-28 pt-36 pb-20 h-full">
            <?php
            if (strlen($msg) > 0) {
                if ($msg == "data matched" || $msg == "password updated") {
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
            <div class="flex flex-col items-center justify-center gap-16 h-full bg-slate-500 p-10 rounded-xl">
                <h1 class="py-6 text-center text-6xl font-extrabold">Forgot Password</h1>
                <form action="" method="post" class="block h-full">
                    <table class="h-full">
                        <tr class="text-lg font-semibold">
                            <td><label for="lname">User ID :</label></td>
                            <td><input required type="text" name="user_id" id="lname"
                                    class=" p-1 rounded-lg outline-blue-400 bg-slate-100"></td>
                        </tr>
                        <tr class="text-lg font-semibold">
                            <td><label for="email">Email :</label></td>
                            <td><input required type="email" name="email" id="email"
                                    class=" p-1 rounded-lg outline-blue-400 bg-slate-100"></td>
                        </tr>
                        <tr class="text-lg font-semibold">
                            <td><label for="password">Password :</label></td>
                            <td><input required type="password" name="password" id="password"
                                    class=" p-1 rounded-lg outline-blue-400 bg-slate-100"></td>
                        </tr>
                        <tr>
                            <td><input required type="submit" value="Check" name="check"
                                    class="px-8 py-3 rounded-md block bg-white text-lg font-semibold text-gray-500 hover:text-white hover:bg-blue-400">
                            </td>
                        </tr>
                        <?php
                        if ($check == 1) {
                            ?>
                            <tr class="text-lg font-semibold">
                                <td><label for="password">New Password :</label></td>
                                <td><input required type="password" name="n_password" id="password"
                                        class=" p-1 rounded-lg outline-blue-400 bg-slate-100"></td>
                            </tr>
                            <tr class="text-lg font-semibold">
                                <td><label for="c_password">Confirm Password :</label></td>
                                <td><input required type="password" name="c_password" id="c_password"
                                        class=" p-1 rounded-lg outline-blue-400 bg-slate-100"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Update" name="change"
                                        class="px-8 py-3 rounded-md block bg-white text-lg font-semibold text-gray-500 hover:text-white hover:bg-blue-400">
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </form>
            </div>
        </main>
    </body>

    </html>
    <?php
} else {
    header('location: login.php');
}
?>