






<?php

if (isset($_GET['id_activite'])) {
    $i_activite=$_GET['id_activite'];
    $sql = "SELECT * FROM activites WHERE id_activite = '$i_activite'";
    $reslut = mysqli_query($connx,$sql);
    $row = $reslut->fetch_assoc();
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



<?php
    require_once "../vues\hedaer.php"
    ?>




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
                <input type="text" value="<?php $row['Nom_activite'];?>" name="activity-name" id="product-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Yoga, Zumba, etc." >
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
</body>
</html>