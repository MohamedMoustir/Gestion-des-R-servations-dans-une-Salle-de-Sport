
 <?php 
include './db/connx.php';
$sql = "SELECT * FROM activites";
$resulte = $connx->query($sql);
if ($resulte->num_rows>0) {
  while($row=$resulte->fetch_assoc()){

  
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<!-- component -->
<div class="p-6 bg-gray-50">
  <div class="grid grid-cols-1  gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
   
    <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl">
      <div class="relative">
        <img src="<?php echo $row['image_path'];?>" alt="Yoga" class="w-full h-36 object-cover">
        <div class="absolute top-2 left-2 bg-blue-600 text-white text-xs px-2 py-1 rounded-full">
          Populaire
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
          <span class="text-green-500 font-medium"><?php echo $row['Disponibilite']; ?></span>
          <button class="bg-blue-600 text-white text-xs px-3 py-1 rounded-lg hover:bg-blue-700">
            Réserver
          </button>
        </div>
      </div>
    </div>


  </div>
</div>


<!-- <div class="flex items-center justify-center p-12">
  
  <div class="mx-auto w-full max-w-[550px]">
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
</div>   -->
</body>
</html>



<?php 

  }
}
?> 
