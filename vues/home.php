<?php 
include '../db/connx.php';
 $squl = "SELECT * FROM activites";
 $resluet = mysqli_query($connx,$squl);

 if(isset($_GET['id_activite'])) {
    $id_activite=$_GET['id_activite'];
  
  $query= "DELETE FROM activites WHERE id_activite = '$id_activite'";
  $resulte = mysqli_query($connx,$query);
  
  }

// if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
// $rechrch = $_GET['keyword'];
// $allusers = 'SELECT Nom_activite FROM activites WHERE Nom_activite LIKE "%'.$rechrch.'%" ORDER BY id_activite  DESC';
// $reslue = mysqli_query($connx,$allusers);

// }
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
require_once "../vues/nav.php"
?>

<div class="dark:bg-gray-800">
    <div class="dark:bg-transparent">
        <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-10">
                    Réservation de salles de  
                    <span class="text-violet-800 dark:text-violet-500">sport</span>
                    facilement et rapidement.
                </h1>
                <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-600 dark:text-gray-300 font-normal text-center text-xl">
                Bienvenue sur notre plateforme de réservation de salles de sport ! 
                </p>
            </div>
            <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                <form class="flex rounded-md w-full" method="GET">
                    <input type="text" name="keyword"
                        class="w-full p-3 rounded-md rounded-r-none border border-2 border-gray-300 placeholder-current dark:bg-gray-500  dark:text-gray-300 dark:border-none "
                        placeholder="keyword" />
                    <button
                        class="inline-flex items-center gap-2 bg-violet-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                        <input type="submit" name="submit" value="Find">
                        <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-3">
 
    
     
   
        
    <?php 
   
    while ($row =$resluet->fetch_assoc()) {
     
    ?>
<div class="max-w-sm min-w-sm mx-auto p-6 bg-white rounded-lg shadow-xl hover:shadow-2xl transition-shadow duration-300 ease-in-out my-12">
    <img src="<?php echo "../imgs/". $row['image_path'];?>" alt="Activity Image" class="w-full h-48 object-cover rounded-t-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
    <div class="p-4">
        <h2 class="text-2xl font-semibold text-gray-900 mb-2"> <?php echo $row['Nom_activite']; ?></h2>
        <p class="text-sm text-gray-500 mb-2">Start Date: <?php echo $row['date_debut']; ?></p>
        <p class="text-sm text-gray-500 mb-2">End Date: <?php echo $row['date_fin']; ?></p>
        <p class="text-sm text-gray-500 mb-2">Capacity: <?php echo $row['Capacite']; ?> Participants</p>
        <p class="text-gray-700 text-sm mb-4"><?php echo $row['Description_activite']; ?></p>
        <div class="flex justify-between items-center">
            <span class="text-lg font-bold text-gray-900">$299</span>
            <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors duration-300">
            <a href="../vues/page_reservation.php">reserve Now</a>
            </button>
            
           
        </div>
    </div>
    <td class="p-4">
              <button class="mr-4" title="Edit">
              <a href="../vues/update_activite.php?i_activite=<?php echo $row['id_activite']; ?> ">
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
                <a href="../vues\home.php?id_activite=<?php echo $row['id_activite'];?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                  <path
                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                    data-original="#000000" />
                  <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                    data-original="#000000" />
                </svg>
              </a>
              </button>
</div >
<?php 
};

?>
</div>

<?php 
require_once "../vues/footer.php"
?>



</body>
</html>