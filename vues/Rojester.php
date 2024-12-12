
<?php 
include '../db/connx.php';

if (isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwords = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if (empty( $username)||empty( $email)||empty( $passwords)) {

    }else{
      $sql = "INSERT INTO  users(username,email,pass_word) VALUES ('$username','$email','$passwords')";
      mysqli_query($connx , $sql);

    }
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class=" ">
    <section class="bg-white dark:bg-gray-900" style="background-image: url(); background-repeat: no-repeat; background-size: cover;">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <img src="../imgs\Capture_d_écran_2024-12-11_090559-removebg-preview.png" alt="" class='w-36'>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="" method = "POST">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                            <input type="name" name="username" id="name" class="bg-[#99CCCC] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-green-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" placeholder="itsmoustir@gmail.com" class="bg-[#99CCCC] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-green-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                            <input type="password" name="password" id="password" placeholder="123456" class="bg-[#99CCCC] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-green-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"  id="btnRojester" class="w-full inline-block pt-2 pr-2 pb-2 pl-2 my-8 text-xl font-medium text-center text-white bg-[#006666]
                        rounded-lg transition duration-200  ease"><a href="<?php echo '../vues/login.php';?>">Create an account</a></button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500" >Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>
      <script src="../script/main.js"></script>

</body>

</html>