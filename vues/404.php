
<?php
if (isset($_POST['search'])) {
    $url = $_POST['search'];
    header("Location: ../vues/$url");
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
<style>
 
    :root {
    --light: #edf2f9;
    --dark: #152e4d;
    --darker: #12263f;
    }

    .dark .dark\:text-light {
    color: var(--light);
    }

    .dark .dark\:bg-dark {
    background-color: var(--dark);
    }

    .dark .dark\:bg-darker {
    background-color: var(--darker);
    }

    .dark .dark\:text-gray-300 {
    color: #D1D5DB;
    }
</style>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark }">
      
      
      <main
        aria-labelledby="pageTitle"
        class="flex items-center justify-center h-screen bg-gray-100 dark:bg-dark dark:text-light"
      >
        <div class="p-4 space-y-4">
          <div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">
            <p class="font-semibold text-red-500 text-9xl dark:text-red-600">404</p>
            <div class="space-y-2">
              <h1 id="pageTitle" class="flex items-center space-x-2">
                <svg
                  aria-hidden="true"
                  class="w-6 h-6 text-red-500 dark:text-red-600"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                  />
                </svg>
                <span class="text-xl font-medium text-gray-600 sm:text-2xl dark:text-light">
                  Oops! Page not found.
                </span>
              </h1>
              <p class="text-base font-normal text-gray-600 dark:text-gray-300">
                The page you ara looking for was not found.
              </p>
              <p class="text-base font-normal text-gray-600 dark:text-gray-300">
                You may return to
                <a href="" class="text-blue-600 hover:underline dark:text-blue-500">home page</a> or try
                using the search form.
              </p>
            </div>
          </div>

          <form action="" method="POST">
            <div class="flex items-center justify-center">
              <input
                type="text"
                name="search"
                placeholder="What are you looking for?"
                class="w-full px-4 py-2 rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 dark:bg-darker dark:focus:ring-blue-800"
              />
              <button type="submit"
                class="p-2 text-white rounded-r-md bg-blue-600 dark:bg-blue-700 hover:bg-blue-700 dark:hover:bg-blue-800 focus:outline-none focus:ring focus:ring-primary-light dark:focus:ring-primary-darker"
              >
                <span class="sr-only">Search</span>
                <svg
                  aria-hidden="true"
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </main>
      


    </script>
</body>
</html>