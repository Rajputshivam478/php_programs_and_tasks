<?php
$msg="";
include './service/login_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="h-screen bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <main class="flex flex-col justify-center items-center h-full gap-10">
    <?php
        if (strlen($msg) > 0) {
            if ($msg == "login") {
                ?>
                <div class="bg-green-200 border border-green-600 rounded-xl text-green-600 w-full py-6 text-center my-10">
                    <h2 class="px-10 font-semibold">
                        <?php echo $msg; ?>
                    </h2>
                </div>
                <?php
            } else {
                ?>
                <div class="bg-red-200 border border-red-600 rounded-xl text-red-600 w-full py-6 text-center my-10">
                    <h2 class="px-10 font-semibold">
                        <?php echo $msg; ?>
                    </h2>
                </div>
                <?php
            }
        }
        ?>
        <div class="bg-white w-3/12 h-1/2 rounded-lg">
            <h1 class="py-6 text-center text-6xl font-extrabold text-gray-800 border-b border-gray-400">Login</h1>
            <form action="" method="post" class="h-full w-full flex flex-col gap-4 py-4 px-8">
                <input type="email" name="email" id="email" placeholder="Email"
                    class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                <input type="password" name="password" id="password" placeholder="Password"
                    class="px-4 w-full border-2 border-gray-200 p-1 rounded-lg outline-blue-400">
                <a href="forgot_password.php" class="text-gray-500 hover:text-blue-400">Forgot Password?</a>
                <input type="submit" name="login" value="login"
                    class="px-8 py-3 rounded-md block bg-gray-300 text-lg font-semibold text-gray-500 hover:text-white hover:bg-blue-400">
                <p>Not a member? <a href="sign-up.php" class="text-gray-500 hover:text-blue-400">Signup</a></p>
            </form>
        </div>
    </main>
</body>

</html>