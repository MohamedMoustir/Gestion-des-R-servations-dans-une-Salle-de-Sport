
<?php 

 include '../db/connx.php';

 if (isset($_POST[''])) {
    
     echo "Reservation has been successfully processed!";
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
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
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
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

  <!-- Grid Container -->
  <div id="continer" class="p-6 bg-gray-50 my-[60px]">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 w-[100%]">

      <?php 
     
      $sql = "SELECT * FROM activites";
      $resulte = $connx->query($sql);
      if ($resulte->num_rows>0) {
        while($row=$resulte->fetch_assoc()){
      if ($row['Disponibilite']=='1') {
           $primaryColor = "bg-green-700";
            $istrue = 'Disponibile';
          }else{
            $primaryColor = "bg-red-700";
            $istrue = 'not Disponibile';
        }
      ?> 
      <!-- Card 1 -->
      <div class="bg-white shadow-lg rounded-lg  transform transition duration-300 hover:scale-105 hover:shadow-xl" method="POST">
        <div class="relative">
          <img src="<?php echo '../imgs/'.$row['image_path'].''; ?>" alt="Yoga" class="w-full h-36 object-cover">
          <div class="absolute top-2 left-2 <?php echo $primaryColor; ?> text-white text-xs px-2 py-1 rounded-full">
          <?php echo $istrue; ?>
          </div>
        </div>
        <div class="p-4">
          <h3 class="text-base font-semibold text-gray-800"><?php echo $row['Nom_activite']; ?></h3>
          <p class="text-gray-500 text-xs mt-2">
            <?php echo $row['Description_activite']; ?>
          </p>
          <div class="mt-3 text-xs text-gray-700">
            <p><strong>Date de début:</strong> <?php echo $row['date_debut']; ?></p>
            <p><strong>Date de fin:</strong> <?php echo $row['date_fin']; ?></p>
          </div>
          <div class="mt-2 text-xs text-gray-700">
            <p><strong>Capacité:</strong> <?php echo $row['Capacite']; ?></p>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <span class="text-green-500 font-medium"></span>
            <button onclick="Openfrom()" name="Reserver" class=" bg-blue-600 text-white text-xs px-3 py-1 rounded-lg hover:bg-blue-700">
              Réserver
            </button>
          </div>
        </div>
      </div>

      <?php 
      
      }}
      ?>
    

    </div>
  </div>
        
<!-- component -->
              
<div id="Réserver" class="hidden flex  items-center justify-center p-12 rounded-lg  shadow-lg ">

<div class="mx-auto w-full max-w-[550px] shadow-inner">
  <form action="https://formbold.com/s/FORM_ID" method="POST">
    <div class="-mx-3 flex flex-wrap">
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="fName"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            First Name
          </label>
          <input
            type="text"
            name="fName"
            id="fName"
            placeholder="First Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="lName"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Last Name
          </label>
          <input
            type="text"
            name="lName"
            id="lName"
            placeholder="Last Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
    </div>
    <div class="mb-5">
      <label
        for="guest"
        class="mb-3 block text-base font-medium text-[#07074D]"
      >
        How many guest are you bringing?
      </label>
      <input
        type="number"
        name="guest"
        id="guest"
        placeholder="5"
        min="0"
        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
      />
    </div>

    <div class="-mx-3 flex flex-wrap">
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="date"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Date
          </label>
          <input
            type="date"
            name="date"
            id="date"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="time"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Time
          </label>
          <input
            type="time"
            name="time"
            id="time"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
    </div>

    <div class="mb-5">
      <label class="mb-3 block text-base font-medium text-[#07074D]">
        Are you coming to the event?
      </label>
      <div class="flex items-center space-x-6">
        <div class="flex items-center">
          <input
            type="radio"
            name="radio1"
            id="radioButton1"
            class="h-5 w-5"
          />
          <label
            for="radioButton1"
            class="pl-3 text-base font-medium text-[#07074D]"
          >
            Yes
          </label>
        </div>
        <div class="flex items-center">
          <input
            type="radio"
            name="radio1"
            id="radioButton2"
            class="h-5 w-5"
          />
          <label
            for="radioButton2"
            class="pl-3 text-base font-medium text-[#07074D]"
          >
            No
          </label>
        </div>
      </div>
    </div>

    <div>
      <button
        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
      >
        Submit
      </button>
    </div>
  </form>
</div>
</div>
  <script src="../script\main.js"></script>

</body>
</html>
