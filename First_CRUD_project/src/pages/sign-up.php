<?php
$msg = "";
include './service/signup_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body class="h-screen">
    <header class="h-20 fixed inset-x-0 px-10 flex items-center justify-between">
        <img src="https://tse4.mm.bing.net/th?id=OIP.ma5PysP35gUHuKuG_fKH9gHaHa&pid=Api&P=0&h=180" alt="" class="h-48">
        <a href="login.php"
            class="px-8 py-3 rounded-md block bg-gray-300 text-gray-700 hover:text-white hover:bg-blue-400">Already have
            an Account?</a>
    </header>
    <main class="px-28 pt-36 pb-20  h-full">
        <?php
        if (strlen($msg) > 0) {
            if ($msg == "Data saved") {
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
        <div class="flex items-center gap-32 h-full bg-slate-300 p-10 rounded-xl">
            <div class="w-5/12 h-full  bg-red-200 rounded-2xl overflow-hidden">
                <img class="object-cover w-full h-full "
                    src="https://images.unsplash.com/photo-1460467820054-c87ab43e9b59?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1067&q=80"
                    alt="">
            </div>
            <form action="" method="post" class="block h-full">
                <table class="h-full">
                    <tr>
                        <td>
                            <h1 class="py-6 text-center text-6xl font-extrabold text-gray-800 ">Sign Up</h1>
                        </td>
                    </tr>
                    <tr class="text-lg font-semibold text-gray-400">
                        <td><label for="fname">First Name :</label></td>
                        <td><input required type="text" name="fname" id="fname"
                                class=" p-1 rounded-lg outline-blue-400 "></td>
                    </tr>
                    <tr class="text-lg font-semibold text-gray-400">
                        <td><label for="lname">Last Name :</label></td>
                        <td><input required type="text" name="lname" id="lname"
                                class=" p-1 rounded-lg outline-blue-400"></td>
                    </tr>
                    <tr class="text-lg font-semibold text-gray-400">
                        <td><label for="email">Email :</label></td>
                        <td><input required type="email" name="email" id="email"
                                class=" p-1 rounded-lg outline-blue-400"></td>
                    </tr>
                    <tr class="text-lg font-semibold text-gray-400">
                        <td><label for="password">Password :</label></td>
                        <td><input required type="password" name="password" id="password"
                                class=" p-1 rounded-lg outline-blue-400"></td>
                    </tr>
                    <tr class="text-lg font-semibold text-gray-400">
                        <td><label for="c_password">Confirm Password :</label></td>
                        <td><input required type="password" name="c_password" id="c_password"
                                class=" p-1 rounded-lg outline-blue-400"></td>
                    </tr>
                    <tr class="hidden">
                        <td><label for="created_date">created_date :</label></td>
                        <td><input required type="datetime" name="created_date" id="created_date" value="<?php echo date("y/m/d h:i:s"); ?>"></td>
                    </tr>
                    <tr class="hidden">
                        <td><label for="created_date">modified_date :</label></td>
                        <td><input required type="datetime" name="modify_date" id="modified_date" value="<?php echo date("y/m/d h:i:s"); ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="SignUp" name="singup"
                                class="px-8 py-3 rounded-md block bg-white text-lg font-semibold text-gray-500 hover:text-white hover:bg-blue-400">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>

</html>