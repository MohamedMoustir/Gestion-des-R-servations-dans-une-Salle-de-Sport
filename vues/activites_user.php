
<?php 
include '../db/connx.php';

 

if ( isset($_POST['activity-name'])&&isset($_POST['date_debut'])&&isset($_POST['date_fin'])&&isset($_POST['capacite'])&&isset($_POST['description'])&&isset($_POST['activity-image'])&&isset($_POST['disponibilite'])) {
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
// Suppression
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $squl="DELETE FROM reservations WHERE id ='$id'";
 $result= mysqli_query($connx,$squl);
 
 require_once "../vues/alert_Success.php";
 
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
       <!-- users -->
      <?php 
        $stmt = "SELECT *
        FROM reservations 
        JOIN activites  ON reservations.activityId = activites.id_activite
        JOIN users  ON reservations.userId = users.id_users
        ";

$result = mysqli_query($connx, $stmt);

?>
<?php
    include "../vues/nav.php";
    ?>

<div class="p-4">

  <div class="overflow-x-auto mb-[300px] mt-[100px]">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
      <!-- Table Header -->
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="px-6 py-3 text-left font-semibold text-sm">Activité</th>
          <th class="px-6 py-3 text-left font-semibold text-sm">Time</th>
          <th class="px-6 py-3 text-left font-semibold text-sm">Date</th>
          <th class="px-6 py-3 text-center font-semibold text-sm">Actions</th>
        </tr>
      </thead>
      <!-- Table Body -->
      <tbody class="divide-y divide-gray-200">
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr class="hover:bg-blue-100">
            <td class="px-6 py-4 text-gray-700"><?php echo $row['Nom_activite']; ?></td>
            <td class="px-6 py-4 text-gray-700"><?php echo $row['time_activity']; ?></td>
            <td class="px-6 py-4 text-gray-700"><?php echo $row['date_activity']; ?></td>
            <td class="px-6 py-4 text-center space-x-2">
              <button class="text-red-500 hover:text-red-700 transition duration-200">
                <a href="../vues/activites_user.php?id=<?php echo $row['id']; ?>">Annuler</a>
              </button>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>


   
   
   
      
    </div>

  </div>

  <?php
    require_once "../vues/footer.php";
    ?>
  <script src="../script\main.js"></script>

</body>

</html>