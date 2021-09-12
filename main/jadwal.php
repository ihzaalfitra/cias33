<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In | HelloTeach</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../styles.css" rel="stylesheet">
    <!-- <link href="custom.css" rel="stylesheet"> -->
    <style media="screen">.styled{font-family:"Mistral";}</style>
    <script lang="javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script lang="javascript" src="https://kit.fontawesome.com/3c684c54ef.js" crossorigin="anonymous"></script>
  </head>
  <body class="h-screen overflow flex h-auto items-center justify-center" style="background: #FBFAF5;">
    <div class="bg-green-100 text-green-800 h-screen xl:w-1/4 lg:w-1/3 md:w-1/3 sm:w-1/2 w-80">
      <div class="absolute mt-2" id="hamburgerbtnOpen">
  			<i class="text-green-700 fas fa-bars text-4xl p-6"></i>
  		</div>
    <!-- <div class="bg-green-100 text-green-800 py-6 h-screen xl:w-1/4 lg:w-1/3 md:w-1/3 sm:w-1/2 w-80 fixed z-50"> -->
      <div class="bg-green-500 text-white w-64 py-6 h-screen fixed z-50 hidden" id="mobileMenu">
          <div class="text-white mb-2 flex justify-between border-b border-grey-800">
              <div class="flex-auto mb-6">
              </div>
          </div>
          <div class="space-y-8">
            <a href="index.php">
              <div class="transition duration-300 ease-in-out hover:bg-green-300 hover:text-gray-200 py-4 px-8 text-white">Home</div>
            </a>
            <a class="" href="#">
              <div class="transition duration-300 ease-in-out hover:bg-green-300 hover:text-gray-200 py-4 px-8 text-white">Profile</div>
            </a>
            <a class="" href="#">
              <div class="transition duration-300 ease-in-out hover:bg-green-300 hover:text-gray-200 py-4 px-8 text-white">Poin</div>
            </a>
            <a class="" href="jadwal.php">
              <div class="transition duration-300 ease-in-out hover:bg-green-300 hover:text-gray-200 py-4 px-8 text-white">Jadwal</div>
            </a>
            <a class="" href="siswa.php">
              <div class="transition duration-300 ease-in-out hover:bg-green-300 hover:text-gray-200 py-4 px-8 text-white">Siswa Saya</div>
            </a>
            <a class="" href="#">
              <div class="transition duration-300 ease-in-out hover:bg-green-300 hover:text-gray-200 py-4 px-8 text-white">Pendaftar</div>
            </a>
            <a href="../login.php">
              <div class="transition duration-300 ease-in-out hover:bg-red-500 hover:text-gray-200 bg-green-500 mt-10 py-4 px-8 text-red-700">Logout</div>
            </a>
          </div>
    	</div>
    	<div class="py-6 h-screen absolute right-0 w-full hidden" id="hamburgerbtnClose">
    	</div>
      <div class="pt-6">
        <a href="index.php">
          <h1 class="styled font-semibold text-4xl text-center">HelloTeach</h1>
        </a>
      </div>
      <div class="pt-6 px-6">
          <h1 class="font-semibold text-xl text-center">Jadwal</h1>
          <input type="date" name="" value="">
          <div class="">
            <div class="w-1/3 py-1 px-1 float-left text-center border-t border-l border-green-500">07:00 - 09:00</div>
            <div class="w-2/3 py-1 px-3 float-right border-t border-r border-green-500">Mengajar</div>
            <div class="w-1/3 py-1 px-1 float-left text-center border-t border-l border-green-500">09:00 - 10:00</div>
            <div class="w-2/3 py-1 px-3 float-right border-t border-r border-green-500">Bisnis Online</div>
            <div class="w-1/3 py-1 px-1 float-left text-center border-t border-l border-green-500">10:00 - 11:00</div>
            <div class="w-2/3 py-1 px-3 float-right border-t border-r border-green-500">Freelance</div>
            <div class="w-1/3 py-1 px-1 float-left text-center border-t border-b border-l border-green-500">14:00 - 15:00</div>
            <div class="w-2/3 py-1 px-3 float-right border-t border-b border-r border-green-500">HelloTeach Les Private</div>
          </div>
      </div>
      <div>
        &nbsp;
      </div>
      <a href="jadwal.php">
        <div class="w-24 mx-auto bg-green-300 transition duration-300 ease-in-out px-4 py-2 font-bold text-green-800 hover:text-green-100 rounded-full hover:bg-green-800 focus:outline-none focus:shadow-outline text-center">
          Tambah
        </div>
      </a>
      <div>
        &nbsp;
      </div>
      <a href="jadwal.php">
        <div class="w-24 mx-auto bg-green-300 transition duration-300 ease-in-out px-4 py-2 font-bold text-green-800 hover:text-green-100 rounded-full hover:bg-green-800 focus:outline-none focus:shadow-outline text-center">
          Edit
        </div>
      </a>
  	</div>
    <script>
  	    let hamburgerClose = $('#hamburgerbtnClose');
  	    let hamburgerOpen = $('#hamburgerbtnOpen');
  	    let mobileMenu = $('#mobileMenu');
        console.log(hamburgerClose);
        console.log(mobileMenu);
  	    hamburgerClose.click( function(){
          console.log("lmao zedd");
  	        mobileMenu.animate({width:'toggle'},300);
  	        hamburgerClose.animate({width:'toggle'},300);
  	    });
  	    hamburgerOpen.click( function(){
  	        mobileMenu.animate({width:'toggle'},350);
  	        hamburgerClose.animate({width:'toggle'},350);
  	    });
    </script>
  </body>
</html>
