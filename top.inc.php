<?php
  include ('connection.inc.php');
  include ('functions.inc.php');

  if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

  }else{
  header('location:login_admin.php');
  die();
  }    
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
        <div class="dropdown">
          <span class="w-5 text-gray-700 ml-5"><i class="fas fa-bars" > </i> </span>
          <div class="dropdown-content">
            <div class="  main-sidebar w-1/5 h  p-6">
              <div class="sidebar-categories">
                <div class="sidebar-main-category cursor-pointer text-gray-700 flex font-bold mb-4 p-2">
                  <span class="w-8"></span>
                  <a href="categories.php"><span>Categories Master</span></a>
                </div>
                <div class="sidebar-main-category cursor-pointer text-gray-700 flex font-bold mb-4 p-2">
                  <span class="w-8"></span>
                  <a href="Product.php"><span>Product Master</span></a>
                </div>
                <div class="sidebar-main-category cursor-pointer text-gray-700 flex font-bold mb-4 p-2">
                  <span class="w-8"></span>
                  <a href="order_master.php"><span>Order Master</span></a>
                </div> 
                <div class="sidebar-main-category cursor-pointer text-gray-700 flex font-bold mb-4 p-2">
                  <span class="w-8"></span>
                  <a href="users.php"><span>User Master</span></a>
                </div> 
                <div class="sidebar-main-category cursor-pointer text-gray-700 flex font-bold mb-4 p-2">
                  <span class="w-8"></span>
                  <a href="contact_us.php"><span>Contact Us</span></a>
                </div> 
              </div>
            </div>
          </div>
        </div>
        
        <div class="logo w-fit ml-0">
        <a href="categories.php">
          <img class ="w-60 h-60 object-contain" src="images/Shop Buddy-logos_black.png" alt="">
    </a>
        </div>
        <!--Right icons-->
        <div class="icons flex items-center ml-auto mr-5 w-48 h-16 justify-around ">
          <div class="top-right">
            <!--drop down-->
            <div class="dropdown">
              <span class="font-bold text-gray-700 mr-5">Hello Admin</span>
              <div class="dropdown-content">
                <div>Admin</div>
                <div class="font-medium truncate"><?php echo $_SESSION['ADMIN_USERNAME'];?></div>
                <hr class="text-gray-500 text-xl">
                <li  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mt-3"><a href="logout_admin.php"><i class="fa fa-power-off"></i>Logout</a></li>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </body>
</html>