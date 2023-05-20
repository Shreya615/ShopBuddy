<?php
  include ('connection.inc.php');
  include ('function.inc1.php');
  require('add_to_cart.inc.php');
  $_SESSION['USER_LOGIN']='yes';
  if(isset($_SESSION['name']) && $_SESSION['name']!=''){

  }else{
  header('location:login.php');
  die();
  }  
  
  $obj=new add_to_cart();
  $totalProduct=$obj->totalProduct();

  



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Buddy Products</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jdenticon@3.1.1/dist/jdenticon.min.js" async
        integrity="sha384-l0/0sn63N3mskDgRYJZA6Mogihu0VY3CusdLMiwpJ9LFPklOARUcOiWEIGGmFELx"
        crossorigin="anonymous">
    </script>
    <style>
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 240px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
      }
      .dropdown:hover .dropdown-content {
        display: block;
      }
    </style>
  </head>
  <body>
    <div class="bg-white w-full">
      <div class="header h-16 bg-gray-200 flex items-center sticky top-0">
        
        
        <div class="logo w-fit ml-0">
        <a href="home.php">
          <img class ="w-60 h-60 object-contain" src="images/Shop Buddy-logos_black.png" alt="">
    </a>
        </div>
        <form action="search.php" method="get">
          <div class="flex">
              <input class="h-9 w-96 bg-gray-200 border border-gray-500 border-opacity-75 rounded-l-xl px-3 text-slate-700 ml-24 focus:outline-none" id="search" type="text" name="str" placeholder="Search..."/>
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
        <div class="icons flex items-center ml-auto mr-5 w-48 h-16 justify-around ">
          <div class="top-right flex items-center ml-auto mr-3 w-48 h-16 justify-around">
            
                <!--heart icon-->
                <a href="wishlist.php">
                  <svg class="h-4 w-4 mr-2"xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </a>
                  <!--cart icon-->
                  <a href="cart.php">
                  <div class="cart-icon relative h-10 w-10 bg-gray-800 text-white flex justify-center
                  items-center rounded-xl mr-3">
                    <div class="cart-item-number absolute -top-1 -right-1
                    h-4 w-4 bg-white rounded-full flex justify-center items-center text-gray-800 text-xs">
                    <span id="cart-item" class="htc__qua"><?php echo $totalProduct?></span>
                       
                    </div>
                    <svg class="h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                  </div>
                </a>


            <!--drop down-->
            <div class="dropdown">
              <span class="font-bold text-gray-700 mr-5">Hello! <?php echo $_SESSION['name'];?></span>
              <div class="dropdown-content">
                <div class="mt-2 font-medium  text-gray-500">Hello!! </div>
                <div class="font-medium truncate mt-2 mb-3 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  <?php echo $_SESSION['name'];?>
                </div>
                <a href="my_order.php"><div class="mb-4 font-medium truncate text-gray-500">My Orders</div></a>
                <hr class="text-gray-500 text-xl">
                <li  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mt-3"><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </body>
</html>