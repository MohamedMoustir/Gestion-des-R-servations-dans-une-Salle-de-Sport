

<?php
include '../db/connx.php';
//  update 

if (isset($_GET['usersname'])) {
    $id_users = $_GET['usersname'];
   
      } 
      if ($id_users != null) {
  $query = "SELECT * FROM users WHERE id_users ='$id_users'";
    $resltes = mysqli_query($connx,$query);
    $row = mysqli_fetch_assoc($resltes);
    echo 'hhhhhhhhhhhhhh';
      }
  

      ?>
      <?php
if (isset($_POST['inputs'])) {
    $type = $_POST['inputs'];
    $update = "UPDATE users SET isAdmin = $type WHERE id_users = '$id_users'";
    $resltes = mysqli_query($connx,$update);
if (!$resltes) {
    die("Update failed: " . mysqli_error($connx));
} else {
  require_once "../vues/alert_Success.php";
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
<?php
    require_once "../vues\hedaer.php"
    ?>
    <form action ="" method="POST"
  class="text-neutral-800 py-6  relative my-[200px] overflow-hidden flex flex-col justify-around ml-[700px] mt-[100px]   w-96 h-44 border border-neutral-500 rounded-lg bg-neutral-50 p-3 px-6"
>
  <div
    class="before:absolute before:w-32 before:h-20 before:right-2 before:bg-rose-300 before:-z-10 before:rounded-full before:blur-xl before:-top-12 z-10 after:absolute after:w-24 after:h-24 after:bg-purple-300 after:-z-10 after:rounded-full after:blur after:-top-12 after:-right-6"
  >
    <span class="font-extrabold text-2xl text-violet-600"
      >Update User Type</span
    >
    <p class="text-neutral-700">
    Change the user type by selecting the appropriate option below.
    </p>
  </div>
  <div class="flex gap-1">
  <div class="relative rounded-lg w-64 overflow-hidden">
                <select name="inputs"
                        class="bg-transparent ring-0 outline-none border border-neutral-500 text-neutral-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full p-2.5">
                    <option value="1" <?php echo $row['isAdmin'] == 1 ; ?>>Admin</option>
                    <option value="0" <?php echo $row['isAdmin'] == 0 ; ?>>User</option>
                </select>
            </div>
    <input name="update" type="submit"
      class="bg-violet-500 text-neutral-50 p-2 rounded-lg hover:bg-violet-400"
    value="update">
     
  
  </div>
</form>

</body>
</html>