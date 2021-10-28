<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint Challange | Login</title>
    <link rel="stylesheet" href="<?php echo base_url('css/tailwind.css') ?>">
</head>
<body>

    <div class="flex item-center min-h-screen bg-gray-700">
        <div class="container w-96 lg:w-1/3 h-1/3 pb-5 pt-6 px-8 mt-20 mx-auto text-left bg-white shadow-lg rounded">
            <h3 class="text-2xl font-bold text-center mb-2">Log in to start your session.</h3>

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="text text-yellow-600 bg-yellow-200 flex p-3">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

                <?php if(isset($validation)):?>
                <div class="text text-yellow-600 bg-yellow-200 flex p-3">
                   <?= $validation->listErrors() ?>
                </div>
            <?php endif;?>

            <form action="<?php echo base_url() ?>/Home/loginAuth" method="post">
                <div>
                    <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 mt-6 border rounded focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 mt-6 border rounded focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                <div class="py-2">
                    <input type="checkbox" onclick="showPassword()"> <span>Show password</span>
                </div>
                <div class="flex items-baseline justify-between mt-10">
                    <button type="submit" class="w-full bg-green-500 rounded text-white font-bold p-2 hover:bg-green-700">Sign in</button>
                </div>
                <div class="text-sm text-gray-600 mt-2 text-center">
                    Don't have an account? <a href="<?php echo base_url('register') ?>" class="underline hover:text-gray-800">Sign up</a>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password"){
                x.type = "text";
            }else{
                x.type = "password";
            }
        }
    </script>


</body>
</html>