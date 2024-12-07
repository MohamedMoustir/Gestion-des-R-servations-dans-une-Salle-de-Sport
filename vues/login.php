
<?php 
include '../db/connx.php';
session_start();
 $errors=[];

if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['email']) && isset($_POST['password'])) {
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    echo "done";  
    if (empty( $email)||empty( $password)) {

    }else{
     $stmt ="SELECT email,pass_word,isAdmin FROM users WHERE email = '$email' AND pass_word = '$password'";
     
     
     $result = $connx->query($stmt);
     if ($result->num_rows>0){
      $user = $result->fetch_assoc();
      if ($user['isAdmin']== '1') {
      header('location:./dachbourd.php');
      }else {
        echo 'not admin';
      }

    }else {
      echo 'is not valde';
    }
   
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

<body >
  <section class="bg-gray-50 dark:bg-gray-900" style="background-image: url(../Body.png); background-repeat: no-repeat; background-size: cover;">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
        Flowbit
      </a>
      <div
        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Sign in to your account
          </h1>
          <form class="space-y-4 md:space-y-6" action="" method="POST">
            <div>
              <label for="email" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
              <input type="email" name="email" id="emailLog"
                class="bg-[#99CCCC] text-black text-black  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-green-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 outline-0"
                placeholder="name@company.com" >
            </div>
            <div>
              <label for="password"
                class="block mb-2 text-sm font-medium text-black  dark:text-black ">Password</label>
              <input type="password" name="password" id="passwordLog" placeholder=""
                class="bg-[#99CCCC] outline-0 border border-gray-300 text-black  rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-green-900 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-black "
                >
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" aria-describedby="remember" type="checkbox"
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                    >
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                </div>
              </div>
              <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                password?</a>
            </div>
            <button type="submit" id="btnlogin" name="signup"
              class=" w-full inline-block pt-2 pr-2 pb-2 pl-2 my-8 text-xl font-medium text-center text-white bg-[#006666]
              rounded-lg transition duration-200  ease">Sign
              in</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Don’t have an account yet? <a href="#"
                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="../script/loginScript.js"></script>

</body>

</html>
<!-- component -->
