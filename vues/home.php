<?php 
include '../db/connx.php';

 $squl = "SELECT * FROM activites";
 $resluet = mysqli_query($connx,$squl);


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
    require_once "../vues/nav.php";
    ?>

<div class="dark:bg-gray-800 bg-red-700" style="background:url(../imgs/pexels-photo-1229356.webp) ; background-position:center  ;  background-size: cover" >
    <div class="dark:bg-transparent">
        <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-white dark:text-white font-black leading-10">
                    Réservation de salles de  
                    <span class="text-violet-800 dark:text-violet-500">sport</span>
                    facilement et rapidement.
                </h1>
                <p class="mt-5 sm:mt-10 lg:w-10/12  text-white dark:text-gray-300 font-normal text-center text-xl">
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
    
</div>
<?php 
};

?>

</div>

<?php 
require_once "../vues/footer.php";
?>




</body>
</html>