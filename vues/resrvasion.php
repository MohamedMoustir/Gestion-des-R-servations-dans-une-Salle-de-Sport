
<?php 

 include '../db/connx.php';

 if (isset($_POST['id_activite']) && isset($_POST['time_activity']) && isset($_POST['date_activity'])) {
  $activity_id = $_POST['id_activite'];
  $date_activity = $_POST['date_activity'];
  $time_activity = $_POST['time_activity'];

  echo 'nnnnn';
    if (empty($activity_id)||empty($date_activity)||empty($time_activity)) {
      echo 'll';
      
    }else {
      $stmt = "INSERT INTO reservations(activityId, userId, date_activity,time_activity) VALUES ('$activity_id',8,'$date_activity','$time_activity')";
      mysqli_query($connx , $stmt);
      echo 'dddddddddddddd';
    }
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sports Facility Booking</title>
</head>
<body class="bg-gray-100">


 <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SPORTS</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="../vues/login.php">Log up</a></button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Réservations </a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav> 

  
      <?php 
     
      $sq = "SELECT * FROM users";
      $result = $connx->query($sq);
      $rows=mysqli_fetch_assoc($result);
      ?> 
      <!-- Card 1 -->
  <form class="w-screen" method="POST" >
  <div class="relative mx-auto mt-20 mb-20 max-w-screen-lg overflow-hidden rounded-t-xl bg-emerald-400/60 py-32 text-center shadow-xl shadow-gray-300">
    <h1 class="mt-2 px-8 text-3xl font-bold text-white md:text-5xl">Reserve Your Spot for Any Sport</h1>
    <p class="mt-6 text-lg text-white">reserve your spot and enjoy an exciting session with professional facilities and trainers.</p>
    <img class="absolute top-0 left-0 -z-10 h-full w-full object-cover" src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
  </div>

  <div class="mx-auto grid max-w-screen-lg px-6 pb-20">
  
    <div class="">
      
      <p class="font-serif  text-xl font-bold text-blue-900">Select a service</p>
    
      <div class="mt-4 grid  gap-x-4 gap-y-3 sm:grid-cols-2 md:grid-cols-4">
       
 
        <div class="relative">
          
          <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
          <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"></span>
          <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white" for="radio_1">
          <select name="id_activite" id="activite" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
        <?php
        $sql = "SELECT * FROM activites"; 
        $result = $connx->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['id_activite'] . '">' . $row['Nom_activite'] . '</option>';
        }
        ?>
    </select>
            <span class="text-xs uppercase">1 Hour</span>
          </label>
        </div>
  
    </div>
 
   
    <div class="">
      <p class="mt-8 font-serif text-xl font-bold text-blue-900">Select a date</p>
      <div class="relative mt-4 w-56">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
          <svg aria-hidden="true" class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
        </div>
        <input datepicker="" datepicker-orientation="bottom" autofocus="autofocus" name="date_activity" value="" type="date" class="datepicker-input block w-full rounded-lg border border-emerald-300 bg-emerald-50 p-2.5 pl-10 text-emerald-800 outline-none ring-opacity-30 placeholder:text-emerald-800 focus:ring focus:ring-emerald-300 sm:text-sm" placeholder="Select date" />
      </div>
    </div>

    <div class="">
  <p class="mt-8 font-serif text-xl font-bold text-blue-900">Select a time</p>
  <div class="mt-4 grid grid-cols-4 gap-2 lg:max-w-xl">
    <select name="time_activity" id="activite" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
      <option value="12:00">12:00</option>
      <option value="14:00">14:00</option>
      <option value="09:00">09:00</option>
      <option value="1:00">1:00</option>
      <option value="15:00">15:00</option>
      <option value="13:00">13:00</option>
      <option value="14:00">14:00</option>
      <option value="19:00">19:00</option>
    </select>
  </div>
</div>


    <input  type="submit" class="mt-8 w-56 rounded-full border-8 border-emerald-500 bg-emerald-600 px-10 py-4 text-lg font-bold text-white transition hover:translate-y-1" value="Réserve Now">
      </div>
      </form>

  <script src="../script/main.js"></script>

</body>
</html>
