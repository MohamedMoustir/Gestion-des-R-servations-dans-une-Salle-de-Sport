<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="Success_alert" class=" fixed top-8 left-1/2 transform -translate-x-1/2 z-[160] flex w-72 sm:w-[30%] bg-gradient-to-r from-green-500 to-green-700 p-4 rounded-lg shadow-lg">
    <div class="toast Info flex items-center space-x-4 text-white">
        <i class="fa-solid fa-circle-check text-2xl"></i>
        <div class="content flex-1">
            <div class="title font-semibold text-lg">Success</div>
            <span>This is a success toast.</span>
        </div>
        <i class="fa-solid fa-xmark cursor-pointer" onclick="(this.parentElement).remove()"></i>
    </div>
</div>

</body>
</html>