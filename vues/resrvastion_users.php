
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
  <!-- component -->
  <?php
    require_once "../vues\hedaer.php"
    ?>

      <!-- users -->
      <?php 
        $stmt = "SELECT *
        FROM reservations r
        JOIN activites a ON r.activityId = a.id_activite
        JOIN users u ON r.userId = u.id_users
        ";

$result = mysqli_query($connx, $stmt);

      ?>

<section class="py-8 ml-[340px]">
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-0">
                <div class="block">
                    <h2 class="font-manrope font-bold text-2xl leading-9 text-gray-900 mb-3">Toutes les reservations</h2>
                    <p class="font-normal text-sm leading-6 text-gray-500">Remember to avoid sharing sensitive personal information online</p>
                </div>
                <div class="flex flex-col-reverse sm:flex-row sm:items-center gap-3.5">
                    <button class="flex items-center py-2.5 pr-7 pl-5 max-sm:w-max rounded-full bg-indigo-600 gap-2 font-semibold text-base text-white transition-all duration-500 hover:bg-indigo-700">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5553 2.5H3.44439C2.46249 2.5 1.6665 3.29599 1.6665 4.27788C1.6665 4.73582 1.84321 5.1761 2.15979 5.50698L6.83672 10.3951C6.96997 10.5343 7.03659 10.604 7.09715 10.6748C7.57182 11.2299 7.85102 11.9256 7.89183 12.6548C7.89703 12.7479 7.89703 12.8443 7.89703 13.037V15.419C7.89703 16.8534 9.30152 17.8668 10.6627 17.4146C11.5225 17.129 12.1026 16.3249 12.1026 15.419V13.4451C12.1026 12.8505 12.1026 12.5531 12.152 12.2695C12.2321 11.8095 12.4079 11.3715 12.668 10.9838C12.8284 10.7447 13.034 10.5299 13.4451 10.1002L17.8399 5.50698C18.1565 5.1761 18.3332 4.73582 18.3332 4.27788C18.3332 3.29599 17.5372 2.5 16.5553 2.5Z" stroke="white" stroke-width="1.6" stroke-linecap="round"/>
                            </svg>                            
                            Filter                            
                    </button>
                </div>
              
            </div>
        </div>
    </section>
<div class="p-4 ml-[380px]">
  <div class="overflow-x-auto ">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
      <!-- Table Header -->
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="px-6 py-3 text-left font-semibold"># Réservation</th>
          <th class="px-6 py-3 text-left font-semibold">Membre</th>
          <th class="px-6 py-3 text-left font-semibold">Activité</th>
          <th class="px-6 py-3 text-left font-semibold">time</th>
          <th class="px-6 py-3 text-left font-semibold">Date</th>
          <th class="px-6 py-3 text-center font-semibold">Actions</th>
        </tr>
      </thead>
      <!-- Table Body -->
      <tbody>
        <?php while ($row =$result->fetch_assoc()): ?>
          <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="px-6 py-4"><?php echo $row['id']; ?></td>
            <td class="px-6 py-4"><?php echo $row['username']; ?></td>
            <td class="px-6 py-4"><?php  echo $row['Nom_activite']; ?></td>
            <td class="px-6 py-4"><?php  echo $row['time_activity']; ?></td>
            <td class="px-6 py-4"><?php  echo $row['date_activity']; ?></td>
            <td class="px-6 py-4 text-center space-x-2">
              <!-- <button class="text-blue-500 hover:underline">Modifier</button> -->
              <button class="text-red-500 hover:underline"><a href="../vues/resrvastion_users.php?id=<?php echo $row['id'];?>">Supprimer</a></button>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
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