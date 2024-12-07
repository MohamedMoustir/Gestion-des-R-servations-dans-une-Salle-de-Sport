<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sports Facility Booking</title>
</head>



<body class="bg-gray-100">

  <!-- Grid Container -->
  <div class="p-6 bg-gray-50">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 w-[100%]">
      
      <?php 
      include '../db/connx.php';
      $sql = "SELECT * FROM activites";
      $resulte = $connx->query($sql);
      if ($resulte->num_rows>0) {
        while($row=$resulte->fetch_assoc()){
      if ($row['Disponibilite']=='1') {
           $primaryColor = "bg-green-700";
            $istrue = 'Disponibile';
          }else {
            $primaryColor = "bg-red-700";
            $istrue = 'not Disponibile';
        }
      ?> 
      <!-- Card 1 -->
      <div class="bg-white shadow-lg rounded-lg  transform transition duration-300 hover:scale-105 hover:shadow-xl">
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
            <button class="bg-blue-600 text-white text-xs px-3 py-1 rounded-lg hover:bg-blue-700">
              Réserver
            </button>
          </div>
        </div>
      </div>

      <?php 
      
      }}
      ?>
    
      <!-- Add more cards similarly -->

    </div>
  </div>

</body>
</html>
