<?php
  error_reporting(1);
  date_default_timezone_set('Asia/Jakarta');
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
    header("Pragma: no-cache"); // HTTP 1.0.
    header("Expires: 0"); // Proxies.
  session_start();
  	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 30000)) {
	    // last request was more than 30 minutes ago
	    session_unset();     // unset $_SESSION variable for the run-time
	    session_destroy();   // destroy session data in storage
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
  include("conn.php");
  include("function.php");
  // if(!isset($_SESSION['username']) || !isset($_SESSION['name'])){
  //   header("location:login.php");
	// }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script lang="javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script lang="javascript" src="stupidtable.min.js"></script>
	<script lang="javascript" src="excellentexport.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <meta http-equiv=”Pragma” content=”no-cache”>
    <meta http-equiv=”Expires” content=”-1″>
    <meta http-equiv=”CACHE-CONTROL” content=”NO-CACHE”>
	<title>Mandiri Employee Sales Score</title>
    <script lang="javascript" src="https://kit.fontawesome.com/3c684c54ef.js" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript">
      document.addEventListener('contextmenu', event => event.preventDefault());
    </script> -->
		<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body class="h-screen overflow flex h-auto items-center justify-center" style="background: #ffffff;">
  <div class="font-sans antialiased h-screen w-full">
	<!-- desktop -->
	<div class="p-5 bg-blue-700 fixed text-white md:block hidden w-full" id="desktopMenu">
			<a href="index.php">
				<h1 class="inline-block py-3 font-semibold text-xl leading-tight mb-1 text-center float-left">MESS</h1>
			</a>
            <!-- <div class="px-4 mb-2 text-white flex justify-between items-center">Home</div> -->
			<nav class="text-right">
				<a class="inline-block" href="index.php">
			              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200
						  <?php ob_start(); echo (!isset($_GET['page']) || (isset($_GET['page']) && strtolower($_GET['page'])=="home"))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?>
							   py-3 px-5 text-white">Home</div>
				</a>
	            <a class="inline-block" href="index.php?page=record&p=1">
	              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="record")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?>
					py-3 px-5 text-white">Record</div>
	            </a>
				<div class="inline-block dropdown">
					<a href="javascript:void(0)">
		              	<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (
							isset($_GET['page']) &&
							(
								strtolower($_GET['page'])=="report" ||
								strtolower($_GET['page'])=="report_unvalidated" || strtolower($_GET['page'])=="report_validated"
								))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-3 px-5 text-white">Report <i class="fa fa-caret-down" aria-hidden="true"></i>
						</div>
					</a>
					<div class="absolute hidden dropdown-menu text-left">
					<a href="index.php?page=report_menu_validated">
	  	              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 px-8 text-white bg-blue-700">Report Validated</div>
	  	            </a>
					<a href="index.php?page=report_menu_unvalidated">
	  	              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 px-8 text-white bg-blue-700">Report Unvalidated</div>
	  	            </a>
					</div>
				</div>
				<?php ob_start(); if($_SESSION['position_id']==1){
					; ob_flush(); ?>
				<div class="inline-block dropdown">
					<a href="javascript:void(0)">
		              	<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && (strtolower($_GET['page'])=="report" || strtolower($_GET['page'])=="report_generate"))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-3 px-5 text-white">Produk <i class="fa fa-caret-down" aria-hidden="true"></i>
						</div>
					</a>
					<div class="absolute hidden dropdown-menu text-left">
			            <a href="index.php?page=product">
			              	<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="product")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Daftar Produk</div>
			            </a>
						<a href="index.php?page=target">
							<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="target")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Target Produk</div>
						</a>
					</div>
				</div>
				<!-- <div class="dropdown" style="float:right;">
				  <button class="dropbtn">Right</button>
				  <div class="dropdown-content">
				    <a href="#">Link 1</a>
				    <a href="#">Link 2</a>
				    <a href="#">Link 3</a>
				  </div>
				</div> -->
				<div class="inline-block dropdown">
					<a href="javascript:void(0)">
		              	<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start();
						ob_start();
						echo (isset($_GET['page']) && (strtolower($_GET['page'])=="report" || strtolower($_GET['page'])=="report_generate"))?"bg-blue-500":"bg-blue-700";
						ob_flush();
						; ob_flush(); ?> py-3 px-5 text-white">Pegawai <i class="fa fa-caret-down" aria-hidden="true"></i>
						</div>
					</a>
					<div class="absolute hidden dropdown-menu text-left">
			            <a href="index.php?page=employee">
			              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="employee")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Pegawai</div>
			            </a>
			            <a href="index.php?page=branch">
			              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="branch")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Branch</div>
			            </a>
			            <a href="index.php?page=team">
			              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="team")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Team</div>
			            </a>
					</div>
				</div>

					<?php ob_start();
				} ; ob_flush(); ?>
				<div class="inline-block dropdown w-48 text-center">
					<a class="py-3 text-center" href="javascript:void(0)" class="">
						<i class="fas fa-user"></i> &nbsp;
						<span class="text-white text-center opacity-50 transition duration-300 ease-in-out hover:opacity-100 text-sm"><?php ob_start(); echo (isset($_SESSION['name']))?$_SESSION['name']:""; ; ob_flush(); ?></span>
						<i class="fa fa-caret-down"></i>
					</a>
					<div class="absolute hidden dropdown-menu text-left">
						<a href="index.php?page=edit&type=profile&id=<?php ob_start(); echo $_SESSION['id']; ; ob_flush(); ?>">
			              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start();
						  echo (isset($_GET['page']) && strtolower($_GET['page'])=="branch")?"bg-blue-500":"bg-blue-700";
						  ; ob_flush(); ?> py-4 px-8 text-white">Change Password</div>
			            </a>
						<a href="logout.php">
			              <div class="text-red-700 transition duration-300 ease-in-out hover:bg-red-700 hover:text-white bg-blue-700 py-4 px-8">Logout</div>
			            </a>
					</div>
				</div>
		</nav>
  	</div>
	<!-- mobile -->
    <div class="bg-blue-700 text-white w-64 py-6 md:hidden h-screen w-3/4 fixed hidden z-50" id="mobileMenu">
        <div class="text-white mb-2 flex justify-between border-b border-blue-800">
            <div class="flex-auto mb-6">
					<h1 class="mt-0 font-semibold text-xl leading-tight mb-1 text-center">MESS</h1>
				<h1 class="py-3 text-center">
					<a class="transition duration-300 ease-in-out py-2 px-4 opacity-50 border border-white rounded-full hover:opacity-100 " href="index.php?page=edit&type=profile&id=<?php ob_start(); echo $_SESSION['id']; ; ob_flush(); ?>" class="">
						<span class="text-white text-center text-sm"><?php ob_start(); echo (isset($_SESSION['name']))?$_SESSION['name']:""; ; ob_flush(); ?></span>
					</a>
				</h1>
            </div>
        </div>
        <div class="space-y-8">
            <!-- <div class="px-4 mb-2 text-white flex justify-between items-center">Home</div> -->
			<a href="index.php">
		              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200
					  <?php ob_start(); echo (!isset($_GET['page']) || (isset($_GET['page']) && strtolower($_GET['page'])=="home"))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?>
						   py-4 px-8 text-white">Home</div>
			</a>
            <a class="" href="index.php?page=record">
              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && strtolower($_GET['page'])=="record")?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?>
				py-4 px-8 text-white">Record</div>
            </a>
			<div class="dropdown-click">
	            <a href="javascript:void(0)">
	              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && (strtolower($_GET['page'])=="report" || strtolower($_GET['page'])=="report_generate"))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Report <i class="fa fa-caret-down" aria-hidden="true"></i></div>
	            </a>
				<div class="hidden dropdown-menu bg-blue-600">
					<a href="index.php?page=report_menu_validated">
						<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 pl-16 text-white">Report Validated</div>
					</a>
					<a href="index.php?page=report_menu_unvalidated">
						<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 pl-16 text-white">Report Unvalidated</div>
					</a>
				</div>
			</div>
			<?php ob_start(); if($_SESSION['position_id']==1){
				; ob_flush(); ?>
			<div class="dropdown-click">
				<a href="javascript:void(0)">
	              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && (strtolower($_GET['page'])=="report" || strtolower($_GET['page'])=="report_generate"))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Produk <i class="fa fa-caret-down" aria-hidden="true"></i></div>
	            </a>
				<div class="hidden dropdown-menu bg-blue-600">
		            <a href="index.php?page=product">
		              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 pl-16 text-white">Daftar Produk</div>
		            </a>
					<a href="index.php?page=target">
						<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 pl-16 text-white">Target Produk</div>
					</a>
				</div>
			</div>
			<div class="dropdown-click">
				<a href="javascript:void(0)">
					<div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 <?php ob_start(); echo (isset($_GET['page']) && (strtolower($_GET['page'])=="report" || strtolower($_GET['page'])=="report_generate"))?"bg-blue-500":"bg-blue-700"; ; ob_flush(); ?> py-4 px-8 text-white">Pegawai <i class="fa fa-caret-down" aria-hidden="true"></i></div>
	            </a>
				<div class="hidden dropdown-menu bg-blue-600">
		            <a href="index.php?page=employee">
		              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 pl-16 text-white">Pegawai</div>
		            </a>
		            <a href="index.php?page=branch">
		              <div class="transition duration-300 ease-in-out hover:bg-blue-500 hover:text-gray-200 py-4 pl-16 text-white">Branch</div>
		            </a>
				</div>
			</div>
				<?php ob_start();
			} ; ob_flush(); ?>
            <a href="index.php?page=logout">
              <div class="transition duration-300 ease-in-out hover:bg-red-700 hover:text-gray-200 bg-blue-700 mt-10 py-4 px-8 text-red-700">Logout</div>
            </a>
        </div>
  	</div>
	<div class="py-6 h-screen w-1/4 absolute right-0 hidden" id="hamburgerbtnClose">
	</div>

  	<div class="flex md:hidden" id="default-header">
  		<div class="absolute mt-2" id="hamburgerbtnOpen">
  			<i class="text-blue-700 fas fa-bars text-4xl p-6"></i>
  		</div>
  		<div class="w-full">
			<a href="index.php">
				<h1 class="text-blue-700 py-6 align-center font-semibold text-4xl leading-tight mb-1 truncate text-center">MESS</h1>
			</a>
  		</div>
  	</div>
  <?php ob_start();
  if(isset($_GET['page'])){
    if(include($_GET['page'].".php")){

    }else{
      echo "<span class='inline-block align-middle h-screen w-full text-4xl text-blue-800 text-center'>Page not found.</span>";
    }
    // switch($_GET['page']){
    //   case "home":
    //   include("home.php");
    //   break;
    //   case "product_detail":
    //     include("product_detail.php");
    //   break;
    //   default:
    //     include("home.php");
    //   break;
    // }
  }else{
    include("home.php");
  }

  ; ob_flush(); ?>
</div>
</body>
	<script>
	    let hamburgerClose = $('#hamburgerbtnClose');
	    let hamburgerOpen = $('#hamburgerbtnOpen');
	    let mobileMenu = $('#mobileMenu');
	    let defaultHeader = $('#default-header');
	    hamburgerClose.click( function(){
	        mobileMenu.animate({width:'toggle'},300);
	        hamburgerClose.animate({width:'toggle'},300);
	    });
	    hamburgerOpen.click( function(){
	        mobileMenu.animate({width:'toggle'},350);
	        hamburgerClose.animate({width:'toggle'},350);
	    });

		$(function() {
		   $('.dropdown').hover( function(){
				$(this).find( 'i.fa' ).removeClass("fa-caret-down");
				$(this).find( 'i.fa' ).addClass("fa-caret-up");
			  	$(this).find( 'div.dropdown-menu' ).slideToggle(80);
		   },
		   function(){
			   $(this).find( 'i.fa' ).addClass("fa-caret-down");
			   $(this).find( 'i.fa' ).removeClass("fa-caret-up");
			   $(this).find( 'div.dropdown-menu' ).slideToggle(80);
		   });
		});

		$(function() {
			$('.dropdown-click').click( function(){
				if($(this).find( 'i.fa' ).hasClass('fa-caret-down')){
					$(this).find( 'i.fa' ).removeClass("fa-caret-down");
					$(this).find( 'i.fa' ).addClass("fa-caret-up");
					$(this).find( 'div.dropdown-menu' ).slideToggle('fast');
				}else{
					$(this).find( 'i.fa' ).removeClass("fa-caret-up");
					$(this).find( 'i.fa' ).addClass("fa-caret-down");
					$(this).find( 'div.dropdown-menu' ).slideToggle('fast');
				}
		   });
		});
	</script>
</html>
