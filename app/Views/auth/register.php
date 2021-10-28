<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprint Challange | Register</title>
    <link rel="stylesheet" href="<?php echo base_url('css/tailwind.css') ?>">
</head>
<body>
    
    <div class="flex item-center min-h-screen bg-gray-700">
        <div class="container w-96 lg:w-1/3 h-1/3 pb-5 pt-6 px-8 mt-20 mx-auto text-left bg-white shadow-lg rounded">

            <?php if(isset($validation)):?>
                <div class="text text-yellow-600 bg-yellow-200 flex p-3">
                   <?= $validation->listErrors() ?>
                </div>
            <?php endif;?>

            <h3 class="text-2xl font-bold text-center mb-2">Create account to sprint challange.</h3>
            <form action="<?php echo base_url() ?>/Home/store" method="post">
                <div>
                    <input type="text" name="name" id="name" placeholder="Name" class="w-full px-4 py-2 mt-6 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" value="<?= set_value('name') ?>">
                </div>
                <div>
                    <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 mt-6 border rounded focus:outline-none focus:ring-1 focus:ring-green-500" value="<?= set_value('email') ?>">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 mt-6 border rounded focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                <div>
                    <input type="password" name="confirmpassword" id="password" placeholder="Password Confirmation" class="w-full px-4 py-2 mt-6 border rounded focus:outline-none focus:ring-1 focus:ring-green-500">
                </div>
                <div class="flex items-baseline justify-between mt-10">
                    <button type="submit" class="w-full bg-green-500 rounded text-white font-bold p-2 hover:bg-green-700">Sign up</button>
                </div>
                <div class="text-sm text-gray-600 mt-2 text-center">
                    Alreadt have an account? <a href="<?php echo base_url('/') ?>" class="underline hover:text-gray-800">Sign in</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>