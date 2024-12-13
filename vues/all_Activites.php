

<?php 
include '../db/connx.php';
 $squl = "SELECT * FROM activites";
 $resluet = mysqli_query($connx,$squl);
// delete
 if(isset($_GET['id_activite'])) {
    $id_activite=$_GET['id_activite'];
  $query= "DELETE FROM activites WHERE id_activite = '$id_activite'";
  $resulte = mysqli_query($connx,$query);
  require_once "../vues/alert_Success.php";
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
    require_once "../vues/hedaer.php";
    ?>
    <!-- -->
    
    <form class="py-8 ml-[340px]" method="POST">
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-0">
                <div class="block">
                    <h2 class="font-manrope font-bold text-2xl leading-9  text-gray-900 mb-3">Toutes les activités</h2>
                    <p class="font-normal text-sm leading-6 text-gray-500">Remember to avoid sharing sensitive personal information online</p>
                </div>
                <div class="flex rounded-md border-2 border-blue-500  overflow-hidden max-w-md ml-[240px]  font-[sans-serif]">
        <input type="text" name="Search" placeholder="Search Something..."
          class="w-full outline-none bg-white text-gray-600 text-sm px-4 py-3" />
        <button onclick="addhoidden()"  type='submit' class="flex items-center justify-center bg-[#007bff] px-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-white">
            <path
              d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
            </path>
          </svg>
        </button>
      </div>
              
            </div>
        </div>
    </form>
                                            
    <div id="static" class=" overflow-x-auto font-[sans-serif] ml-[340px] py-8">

      <table class="min-w-full bg-white">
        <thead class="whitespace-nowrap border ">
          <tr>
            <th class="p-4 text-left text-sm font-semibold text-black">
              Name
            </th>
            
            <th class="p-4 text-left text-sm font-semibold text-black">
             date
            </th>
            <th class="p-4 text-left text-sm font-semibold text-black">
            Disponibilite
            </th>
            <th class="p-4 text-left text-sm font-semibold text-black">
              Action
            </th>
          </tr>
        </thead>
    
        <tbody class="whitespace-nowrap">
        <?php 
   
   while ($row = $resluet->fetch_assoc()) {
  if ($row['Disponibilite'] != 1) {
    $Disponibilite = "No Disponible";
  }else {
    $Disponibilite = "Disponible";
    
  }
    ?>
 <tr class="odd:bg-blue-50">
            <td class="p-4 text-sm">
              <div class="flex items-center cursor-pointer w-max">
                <img src='<?php echo "../imgs/". $row['image_path'];?>' class="w-9 h-9 rounded-md shrink-0" />
                <div class="ml-4">
                  <p class="text-sm text-black"><?php echo $row['Nom_activite']; ?></p>
                  <p class="text-xs text-gray-500"><?php echo $row['Description_activite']; ?></p>
                </div>
              </div>
            </td>
            
            <td class="p-4 text-sm">
            <?php echo $row['date_debut']; ?>
            </td>
            <td class="p-4 text-sm">
            <?php echo $Disponibilite; ?>
            </td>
            <td class="p-4">
              <button class="mr-4" title="Edit">
                <a href="../vues/update_activite.php?id_activite=<?php echo $row['id_activite']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                  viewBox="0 0 348.882 348.882">
                  <path
                    d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                    data-original="#000000" />
                  <path
                    d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                    data-original="#000000" />
                </svg>
                </a>
              </button>
              <button class="mr-4" title="Delete">
              <a href="../vues/all_Activites.php?id_activite=<?php echo $row['id_activite'];?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                  <path
                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                    data-original="#000000" />
                  <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                    data-original="#000000" />
                </svg>
                </a>
              </button>
            </td>
          </tr>
      <?php 
};

?>
        </tbody>
      </table>


</div>
</div>
</div>
<div class=" lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-0 ">
                <div class="block">
                    <h2 class="font-manrope font-bold text-2xl text-center ml-[240px] leading-9 text-gray-900 mb-3">Toutes les Resolute</h2>
              </div>
<div class="w-full max-w-7xl mx-auto px-6 md:px-8">
            

<div id="recherch" class=" overflow-x-auto font-[sans-serif] ml-[340px] mb-[340px] py-8">

<table class="min-w-full bg-white">
  <thead class="whitespace-nowrap border bg-blue-300">
    <tr>
      <th class="p-4 text-left text-sm font-semibold text-black">
        Name
      </th>
      
      <th class="p-4 text-left text-sm font-semibold text-black">
       date
      </th>
      <th class="p-4 text-left text-sm font-semibold text-black">
      Disponibilite
      </th>
      <th class="p-4 text-left text-sm font-semibold text-black">
        Action
      </th>
    </tr>
  </thead>

  <tbody class="whitespace-nowrap">
  <?php 

if (isset($_POST['Search'])) {
  $Search = $_POST['Search'];
  $stmt = "SELECT * FROM activites WHERE Nom_activite LIKE '%$Search%'";
  $res= mysqli_query($connx,$stmt);
  
 }
while ($rows = $res->fetch_assoc()) {
if ($rows['Disponibilite'] != 1) {
$Disponibilite = "No Disponible";
}else {
$Disponibilite = "Disponible";
}
?>
<tr class="odd:bg-blue-50">
      <td class="p-4 text-sm">
        <div class="flex items-center cursor-pointer w-max">
          <img src='<?php echo "../imgs/". $rows['image_path'];?>' class="w-9 h-9 rounded-md shrink-0" />
          <div class="ml-4">
            <p class="text-sm text-black"><?php echo $rows['Nom_activite']; ?></p>
            <p class="text-xs text-gray-500"><?php echo $rows['Description_activite']; ?></p>
          </div>
        </div>
      </td>
      
      <td class="p-4 text-sm">
      <?php echo $rows['date_debut']; ?>
      </td>
      <td class="p-4 text-sm">
      <?php echo $Disponibilite; ?>
      </td>
      <td class="p-4">
        <button class="mr-4" title="Edit">
          <a href="../vues/update_activite.php?id_activite=<?php echo $rows['id_activite']; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
            viewBox="0 0 348.882 348.882">
            <path
              d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
              data-original="#000000" />
            <path
              d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
              data-original="#000000" />
          </svg>
          </a>
        </button>
        <button class="mr-4" title="Delete">
        <a href="../vues/all_Activites.php?id_activite=<?php echo $rows['id_activite'];?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
            <path
              d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
              data-original="#000000" />
            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
              data-original="#000000" />
          </svg>
          </a>
        </button>
      </td>
    </tr>
<?php 
};

?>
  </tbody>
</table>


</div>
</div>
</div>
</body>
</html>