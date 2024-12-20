
<?php
include '../db/connx.php';
// remove
if(isset($_GET['id_users'])) {
  $id=$_GET['id_users'];

$query= "DELETE FROM users WHERE id_users = '$id'";
$resulte = mysqli_query($connx,$query);
require_once "../vues/alert_Success.php";
}


 $stmt = "SELECT * FROM users";
 $reslte = mysqli_query($connx,$stmt);
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

<section class="py-8 ml-[340px]">
        <div class="w-full max-w-7xl mx-auto px-6 md:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 lg:gap-0">
                <div class="block">
                    <h2 class="font-manrope font-bold text-2xl leading-9 text-gray-900 mb-3">Toutes les member</h2>
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
<div class="font-sans overflow-x-auto ml-[340px]">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-100 whitespace-nowrap">
          <tr>
            <th class="p-4 text-left text-xs font-semibold text-gray-800">
              Name
            </th>
            <th class="p-4 text-left text-xs font-semibold text-gray-800">
              Email
            </th>
            <th class="p-4 text-left text-xs font-semibold text-gray-800">
              password
            </th>
            <th class="p-4 text-left text-xs font-semibold text-gray-800">
            Role     
          </th>
            <th class="p-4 text-left text-xs font-semibold text-gray-800">
              Actions
            </th>
          </tr>
        </thead>

        <?php while ($row = $reslte->fetch_assoc()): 
          if ($row['isAdmin']== 1) {
           $type = "admin";

          }else{
            $type = "user";
          }
          ?>

        <tbody class="whitespace-nowrap">
          <tr class="hover:bg-gray-50">
            <td class="p-4 text-[15px] text-gray-800">
            <?php echo $row['username']; ?>
            </td>
            <td class="p-4 text-[15px] text-gray-800">
            <?php echo $row['email']; ?>
            </td>
            <td class="p-4 text-[15px] text-gray-800">
            <?php echo $row['pass_word']; ?>
            </td>
            <td class="p-4 text-[15px] text-gray-800">
            <?php echo $type; ?>
            </td>
            <td class="p-4">
              <button class="mr-4" title="Edit">
              <a href="../vues/update_user.php?usersname=<?php echo $row['id_users'];?>">
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
                <a href="../vues\data_user.php?id_users=<?php echo $row['id_users'];?>">
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
          <?php endwhile; ?>
          
        </tbody>
      </table>
    </div>
</body>
</html>