
<?php 
include '../db/connx.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_btn'])) {
  
if (isset($_POST['activity-name'])&&isset($_POST['date_debut'])&&isset($_POST['date_fin'])&&isset($_POST['capacite'])&&isset($_POST['description'])&&isset($_POST['activity-image'])&&isset($_POST['disponibilite'])) {
    $Nom_Activite = $_POST['activity-name'];
    $Description = $_POST['description'];
    $Capacite = $_POST['capacite'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $Disponibilite = $_POST['disponibilite'];
    $activity_image = $_POST['activity-image'];
    if (empty( $Nom_Activite)||empty( $Description)||empty( $Capacite)||empty( $date_debut)||empty( $date_fin)||empty( $Disponibilite)||empty( $activity_image)) {
 
    }else{
      $sql = "INSERT INTO  activites(Nom_activite,Description_activite,Capacite,date_debut,date_fin,Disponibilite,image_path) VALUES ('$Nom_Activite','$Description','$Capacite','$date_debut','$date_fin','$Disponibilite','$activity_image')";
      mysqli_query($connx , $sql);
      require_once "../vues/alert_Success.php";
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


<body>
  <!-- component -->
  <?php
    require_once "../vues\hedaer.php"
    ?>

      <!-- users -->
   

   <!-- ajoute -->
   <h1 class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white ml-[340px] mb-[30px]">ajoute Activity</h1>

   <div class="bg-white border border-4 rounded-lg shadow relative m-10 ml-[380px]" id="ajoute_card">

<div class="flex items-start justify-between p-5 border-b rounded-t">
    <h3 class="text-xl font-semibold">
        Add Activity
    </h3>
    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="product-modal">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

<div class="p-6 space-y-6">
    <form method="POST" >
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Activity Name</label>
                <input type="text" name="activity-name" id="product-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Yoga, Zumba, etc." >
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="date_debut" class="text-sm font-medium text-gray-900 block mb-2">Start Date</label>
                <input type="date" name="date_debut" id="date_debut" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="date_fin" class="text-sm font-medium text-gray-900 block mb-2">End Date</label>
                <input type="date" name="date_fin" id="date_fin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" >
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="capacite" class="text-sm font-medium text-gray-900 block mb-2">Capacity</label>
                <input type="number" name="capacite" id="capacite" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="e.g. 20" >
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="activity-image" class="text-sm font-medium text-gray-900 block mb-2">Activity Image</label>
                <input type="file" name="activity-image" id="activity-image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" accept="image/*" >
            </div>
            <div class="col-span-full">
                <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Activity Description</label>
                <textarea id="description" name="description" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="Enter a description of the activity"></textarea>
            </div>
            <!-- Disponibilité -->
            <div class="col-span-6 sm:col-span-3">
                <label for="disponibilite" class="text-sm font-medium text-gray-900 block mb-2">Availability</label>
                <select name="disponibilite" id="disponibilite" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    <option value="1">Available</option>
                    <option value="2">Not Available</option>
                </select>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 rounded-b">
    <button name='submit_btn' type="submit" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Add Activity</button>
</div>
    </form>
</div>
   


      <!-- footer -->
      <div class="text-blue-gray-600 ">
        <footer class="py-2">
          <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
            <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023, créé avec
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                class="-mt-0.5 inline-block h-3.5 w-3.5">
                <path
                  d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                </path>
              </svg> par <a href="https://www.creative-tim.com" target="_blank"
                class="transition-colors hover:text-blue-500">Creative Tim</a> pour un meilleur web. </p>
            <ul class="flex items-center gap-4">
              <li>
                <a href="https://www.creative-tim.com" target="_blank"
                  class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative
                  Tim</a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/presentation" target="_blank"
                  class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">À
                  propos</a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/blog" target="_blank"
                  class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Blog</a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license" target="_blank"
                  class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Licence</a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
      
    </div>

  </div>

  

  <script src="../script\main.js"></script>

</body>

</html>