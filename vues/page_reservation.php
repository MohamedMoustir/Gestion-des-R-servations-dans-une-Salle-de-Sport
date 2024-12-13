
<?php 

 include '../db/connx.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_btn'])) {
 if (isset($_POST['id_activite']) && isset($_POST['time_activity']) && isset($_POST['date_activity'])) {
  $activity_id = $_POST['id_activite'];
  $date_activity = $_POST['date_activity'];
  $time_activity = $_POST['time_activity'];
  
  
    if (empty($activity_id)||empty($date_activity)||empty($time_activity)) {
      
      
    }else {

      $stmt = "INSERT INTO reservations(activityId, userId, date_activity,time_activity) VALUES ('$activity_id',56,'$date_activity','$time_activity')";
      mysqli_query($connx,$stmt);
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
    <title>Sports Facility Booking</title>
</head>
<body class="bg-gray-100">

<?php 
require_once "../vues/nav.php"
?>

      <!-- Card 1 -->
      <form class="w-screen bg-gray-50 py-12" method="POST">
  <!-- Section d'en-tête -->
  <div class="relative mx-auto max-w-screen-lg overflow-hidden rounded-t-xl bg-gradient-to-r from-blue-600 to-indigo-700 py-24 text-center shadow-xl my-[100px]">
    <h1 class="mt-2 px-8 text-4xl font-extrabold text-white md:text-5xl">Reserve Your Spot for Any Sport</h1>
    <p class="mt-4 text-lg text-blue-200">Enjoy an exciting session with professional facilities and trainers.</p>
    <img class="absolute top-0 left-0 z-10 h-full w-full object-cover opacity-40" src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg" alt="" />
  </div>

  <!-- Section de formulaire -->
  <div class="mx-auto grid max-w-screen-lg px-6 py-12 space-y-10">
    <!-- Choix de l'activité -->
    <div>
      <p class="font-serif text-xl font-bold text-gray-800">Select a Service</p>
      <div class="mt-4">
        <label class="block text-sm font-medium text-gray-700 mb-2" for="activite">
          Choose an Activity
        </label>
        <select 
          name="id_activite" 
          id="activite" 
          class="w-full rounded-md border-2 border-gray-300 bg-white py-3 px-4 text-base font-medium text-gray-700 shadow focus:border-blue-500 focus:ring-2 focus:ring-blue-300 hover:bg-blue-50 transition-all duration-300"
        >
          <?php
            $sql = "SELECT * FROM activites"; 
            $result = $connx->query($sql);
            while ($row = $result->fetch_assoc()) {
              if ($row['Disponibilite']==1) {
               
             
                echo '<option value="' . $row['id_activite'] . '">' . $row['Nom_activite'] . '</option>';
              }
            }
          ?>
        </select>
        <span class="mt-1 block text-sm text-gray-500">1 Hour</span>
      </div>
    </div>

    <!-- Sélection de la date -->
    <div>
      <p class="font-serif text-xl font-bold text-gray-800">Select a Date</p>
      <div class="relative mt-4 w-full md:w-64">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
          <svg aria-hidden="true" class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <input 
          type="date" 
          name="date_activity" 
          class="block w-full rounded-md border-2 border-gray-300 bg-white py-3 pl-10 text-gray-700 shadow focus:border-blue-500 focus:ring-2 focus:ring-blue-300 hover:bg-blue-50 transition-all duration-300"
          required
        />
      </div>
    </div>

    <!-- Sélection de l'heure -->
    <div>
      <p class="font-serif text-xl font-bold text-gray-800">Select a Time</p>
      <div class="mt-4 w-full md:w-64">
        <select 
          name="time_activity" 
          id="time" 
          class="w-full rounded-md border-2 border-gray-300 bg-white py-3 px-4 text-base font-medium text-gray-700 shadow focus:border-blue-500 focus:ring-2 focus:ring-blue-300 hover:bg-blue-50 transition-all duration-300"
        >
          <option value="12:00">12:00</option>
          <option value="14:00">14:00</option>
          <option value="09:00">09:00</option>
          <option value="1:00">1:00</option>
          <option value="15:00">15:00</option>
          <option value="13:00">13:00</option>
          <option value="19:00">19:00</option>
        </select>
      </div>
    </div>

    <!-- Bouton de soumission -->
    <div class="text-center">
      <input 
      name="submit_btn"
        type="submit" 
        value="Reserve Now" 
        class="inline-block w-64 rounded-full bg-blue-600 py-3 px-6 text-lg font-bold text-white shadow-lg transition-transform duration-300 ease-in-out hover:translate-y-1 hover:bg-blue-700"
      />
    </div>
  </div>
</form>


 <footer>
 <?php 
require_once "../vues/footer.php"
?>
 </footer>

</body>
</html>
