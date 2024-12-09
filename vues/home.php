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
<div class="relative flex flex-col gap-3 p-4 w-56 bg-gray-800 rounded-lg">
  <div class="relative z-5 w-full h-32 overflow-hidden cursor-pointer bg-purple-900 rounded">
    <svg class="absolute w-12 fill-gray-300 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path>
    </svg>
  </div>
  <div class="overflow-hidden w-full text-gray-300 text-lg font-semibold capitalize truncate">
    New brand name
  </div>
  <div class="text-sm text-gray-300">
    <span>Size</span>
    <ul class="flex items-center gap-1 mt-1">
      <li>
        <button class="cursor-pointer p-2 bg-gray-900 text-gray-300 text-xs rounded border-2 border-gray-900 transition hover:border-gray-300 focus:bg-purple-600 focus:border-purple-900 focus:shadow-inner">
          37
        </button>
      </li>
      <li>
        <button class="cursor-pointer p-2 bg-gray-900 text-gray-300 text-xs rounded border-2 border-gray-900 transition hover:border-gray-300 focus:bg-purple-600 focus:border-purple-900 focus:shadow-inner">
          38
        </button>
      </li>
      <li>
        <button class="cursor-pointer p-2 bg-gray-900 text-gray-300 text-xs rounded border-2 border-gray-900 transition hover:border-gray-300 focus:bg-purple-600 focus:border-purple-900 focus:shadow-inner">
          39
        </button>
      </li>
      <li>
        <button class="cursor-pointer p-2 bg-gray-900 text-gray-300 text-xs rounded border-2 border-gray-900 transition hover:border-gray-300 focus:bg-purple-600 focus:border-purple-900 focus:shadow-inner">
          40
        </button>
      </li>
      <li>
        <button class="cursor-pointer p-2 bg-gray-900 text-gray-300 text-xs rounded border-2 border-gray-900 transition hover:border-gray-300 focus:bg-purple-600 focus:border-purple-900 focus:shadow-inner">
          41
        </button>
      </li>
    </ul>
  </div>
  <div class="flex items-center gap-4">
    <div class="text-2xl font-bold text-gray-300">$299</div>
    <button class="cursor-pointer flex items-center gap-1 p-2 w-full bg-gradient-to-t from-purple-600 to-gray-300 text-xs font-medium text-gray-300 rounded border-2 border-purple-600 shadow-inner">
      <svg class="w-4" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" stroke-linejoin="round" stroke-linecap="round"></path>
      </svg>
      <span>Add to cart</span>
    </button>
  </div>
</div>

<?php 
require_once "../vues/footer.php"
?>



</body>
</html>