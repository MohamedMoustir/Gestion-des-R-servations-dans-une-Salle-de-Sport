<?php 
include '../db/connx.php';

//  $squl = "SELECT * FROM activites";
//  $resluet = mysqli_query($connx,$squl);


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

<div class="dark:bg-gray-800 bg-red-700" style="background:url(https://media.istockphoto.com/id/1547293279/fr/photo/jeune-homme-asiatique-courant-sur-tapis-roulant-fitness-gym-exercise.jpg?s=612x612&w=0&k=20&c=cw_lH5FKi4HPdH1PEuARo4q38y7nrRPIRBpRfIm_M1g=) ; background-position:center  ;  background-size: cover" >
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

<!-- component -->
<div class="lg:px-20 md:px-6 px-4 md:py-12 py-8">
  <div class="lg:flex items-center justify-between">
    <div class="lg:w-1/3">
      <h1 class="text-4xl font-semibold leading-9 text-gray-800 dark:text-white">Réservation de Salle de Sport</h1>
      <p class="text-base leading-6 mt-4 text-gray-600 dark:text-gray-100">
        Découvrez nos salles équipées des dernières technologies sportives. Réservez maintenant pour profiter d'une expérience sportive unique et motivante.
      </p>
      <button role="button" aria-label="Réserver maintenant" class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none mt-6 md:mt-8 text-base font-semibold leading-none text-gray-800 dark:text-white flex items-center hover:underline">
       <a href="../vues/page_reservation.php">Réserver maintenant</a> 
        <svg class="ml-2 mt-1 dark:text-white" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.33325 4H10.6666" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M8 6.66667L10.6667 4" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M8 1.33398L10.6667 4.00065" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <div class="lg:w-7/12 lg:mt-0 mt-8">
      <div class="w-full h-full bg-gray-200">
        <img src="https://media.istockphoto.com/id/2154202699/fr/photo/int%C3%A9rieur-sombre-de-la-salle-de-sport-avec-%C3%A9quipement-sportif-pi%C3%A8ce-vide-le-matin.jpg?s=612x612&w=0&k=20&c=-tN5kPFhenbDtUlz71Ycrxne933Bn5TVXpFTg5AnxWg=" alt="Grande salle de sport" class="w-full sm:block hidden" />
        <img src="https://media.istockphoto.com/id/2075354173/fr/photo/un-couple-de-fitness-fait-une-torsion-de-kettlebell-dans-une-salle-de-sport-ensemble.jpg?s=612x612&w=0&k=20&c=rhV4iqy5FA4opjrAoJdSJ4Q0zKA7iLK8KhcM3J4iVnw=" alt="Grande salle de sport" class="sm:hidden block w-full" />
      </div>
      <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 lg:gap-8 gap-6 lg:mt-8 md:mt-6 mt-4">
        <img src="https://media.istockphoto.com/id/2075354173/fr/photo/un-couple-de-fitness-fait-une-torsion-de-kettlebell-dans-une-salle-de-sport-ensemble.jpg?s=612x612&w=0&k=20&c=rhV4iqy5FA4opjrAoJdSJ4Q0zKA7iLK8KhcM3J4iVnw=" class="w-full" alt="Équipements modernes" />
        <img src="https://media.istockphoto.com/id/1493959975/fr/photo/jeune-homme-sentra%C3%AEnant-avec-des-cordes-de-combat-au-gymnase.jpg?s=612x612&w=0&k=20&c=dgUGfRPYviuZDO6OKdZ_QsDqKVvEYxRjzLsWCIYWU7g=" class="w-full" alt="Espace relaxation" />
      </div>
    </div>
  </div>
</div>



</div>



<?php 
require_once "../vues/footer.php";
?>




</body>
</html>