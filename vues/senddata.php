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
    include '../db/connx.php';
    if (isset($_GET['id_users']) ) {

      $id_users = $_GET['id_users'];
      
    }
      $sql = "SELECT * FROM activites";
      $sq = "SELECT * FROM users WHERE id_users = '$id_users'" ;
      $result = $connx->query($sq); 
      $resulte = $connx->query($sql);
        $rows=mysqli_fetch_assoc($result);

        

    ?>

<div id="Réserver" class=" flex  items-center justify-center p-12 rounded-lg  shadow-lg ">

<div class="mx-auto w-full max-w-[550px] shadow-inner">
  <form action="" >
    <div class="-mx-3 flex flex-wrap">
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
        <label for="activityId" class="mb-3 block text-base font-medium text-[#07074D]">Select Activity</label>
                    <select name="activityId" id="activityId" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                        <?php
                            echo "<option value='" . $rows['id_users'] . "'>" . $rows['username'] . "</option>";
                        ?>
                    </select>
        </div>
      </div>
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="lName"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            username
          </label>
          <input
            type="username"
            name="username"
            id="username"
            placeholder="username"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
    </div>
    <div class="mb-5">
    <label for="activityId" class="mb-3 block text-base font-medium text-[#07074D]">Select Activity</label>
                    <select name="activityId" id="activityId" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" required>
                        <?php
                        while($row=$resulte->fetch_assoc()){
                  echo "<option value='" . $row['id_activite'] . "'>" . $row['Nom_activite'] . "</option>";
                        }
                           
                        ?>
                    </select>

    <div class="-mx-3 flex flex-wrap">
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="date"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Date
          </label>
          <input
            type="date"
            name="date_reserve"
            id="date"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
      <div class="w-full px-3 sm:w-1/2">
        <div class="mb-5">
          <label
            for="time"
            class="mb-3 block text-base font-medium text-[#07074D]"
          >
            Time
          </label>
          <input
            type="time"
            name="time_reserve"
            id="time"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
      </div>
    </div>

    <div class="mb-5">
      <label class="mb-3 block text-base font-medium text-[#07074D]">
        Are you coming to the event?
      </label>
      <div class="flex items-center space-x-6">
        <div class="flex items-center">
          <input
            type="radio"
            name="radio1"
            id="radioButton1"
            class="h-5 w-5"
          />
          <label
            for="radioButton1"
            class="pl-3 text-base font-medium text-[#07074D]"
          >
            Yes
          </label>
        </div>
        <div class="flex items-center">
          <input
            type="radio"
            name="radio1"
            id="radioButton2"
            class="h-5 w-5"
          />
          <label
            for="radioButton2"
            class="pl-3 text-base font-medium text-[#07074D]"
          >
            No
          </label>
        </div>
      </div>
    </div>

    <div>
      <button
        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
        <a href="">Submit</a>
      </button>
    </div>
  </form>
</div>
</div>












<script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>

</body>
</html>