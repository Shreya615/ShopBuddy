<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Buddy</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/jdenticon@3.1.1/dist/jdenticon.min.js" async
        integrity="sha384-l0/0sn63N3mskDgRYJZA6Mogihu0VY3CusdLMiwpJ9LFPklOARUcOiWEIGGmFELx"
        crossorigin="anonymous">
    </script>
   
</head>
<body>
    <div class="bg-white w-full">
        <!--header-->
        <div class="header h-16 bg-gray-200 flex items-center sticky top-0">
            <div class="logo w-fit ml-0">
            <a href="index.php">
                <img class ="w-60 h-60 object-contain"
                src="images/Shop Buddy-logos_black.png" alt=""       
                ></a>
            </div>
            <form action="search1.php" method="get">
              <div class="flex">
            <input class="h-9 w-96 bg-gray-200 border 
            border-gray-500 border-opacity-75 rounded-l-xl
            px-3 text-slate-700 ml-24 focus:outline-none" 
            id="search" type="text" name="str"
            placeholder="Search...">
            <button type="submit">
            
            <div class="search-icon  h-9 w-10 bg-gray-800 px-3
             text-slate-700 flex justify-center items-center
             rounded-r-xl text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
            </div>
            </button>
          </div>
            </form>
            <!--Right icons-->
            <div class="icons flex items-center ml-auto mr-5 w-48 h-16
            justify-around ">
                <!--heart icon-->
                <a href="wishlist.php">
                <svg class="h-4 w-4"
                 xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                  </a>
                  <!--cart icon-->
                  <a href="cart.php">
                  <div class="cart-icon relative h-10 w-10 bg-gray-800 text-white flex justify-center
                  items-center rounded-xl">
                    <div class="cart-item-number absolute -top-1 -right-1
                    h-4 w-4 bg-white rounded-full flex justify-center items-center text-gray-800 text-xs">
                        0
                    </div>
                    <svg class="h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                  </div>
                </a>
                  <!--<svg class="h-4 w-4"xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                  </svg>-->
                  <a href="login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    </a>
                  <!--jdenticons-->
                  <svg class="h-12 w-12 rounded"
                  data-jdenticon-value="shop buddy">

                  </svg>
            </div>
        </div>
</body>
</html>