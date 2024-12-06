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

<div class="p-6 bg-gray-100">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card Example -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <!-- Image Section -->
      <img src="https://via.placeholder.com/300x200" alt="Yoga" class="w-full h-48 object-cover">
      <!-- Content Section -->
      <div class="p-4">
        <h3 class="text-lg font-bold text-gray-800">Yoga</h3>
        <p class="text-gray-600 text-sm mt-2">Une séance relaxante pour améliorer votre souplesse et réduire le stress.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-blue-500 font-medium">Disponible: 18h - 19h</span>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Réserver
          </button>
        </div>
      </div>
    </div>

    <!-- Duplicate cards as needed -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img src="https://via.placeholder.com/300x200" alt="Zumba" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-bold text-gray-800">Zumba</h3>
        <p class="text-gray-600 text-sm mt-2">Un entraînement cardio amusant et énergique avec de la musique.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-blue-500 font-medium">Disponible: 19h - 20h</span>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Réserver
          </button>
        </div>
      </div>
    </div>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img src="https://via.placeholder.com/300x200" alt="Zumba" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-bold text-gray-800">Zumba</h3>
        <p class="text-gray-600 text-sm mt-2">Un entraînement cardio amusant et énergique avec de la musique.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-blue-500 font-medium">Disponible: 19h - 20h</span>
          <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Réserver
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="flex items-center justify-center p-12">
  
  <div class="mx-auto w-full max-w-[550px]">
    <form action="https://formbold.com/s/FORM_ID" method="POST">
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="fName"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              First Name
            </label>
            <input
              type="text"
              name="fName"
              id="fName"
              placeholder="First Name"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="lName"
              class="mb-3 block text-base font-medium text-[#07074D]"
            >
              Last Name
            </label>
            <input
              type="text"
              name="lName"
              id="lName"
              placeholder="Last Name"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
          </div>
        </div>
      </div>
      <div class="mb-5">
        <label
          for="guest"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          How many guest are you bringing?
        </label>
        <input
          type="number"
          name="guest"
          id="guest"
          placeholder="5"
          min="0"
          class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>

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
              name="date"
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
              name="time"
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
          class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
</div>  
</body>
</html>


