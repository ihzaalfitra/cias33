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
  </head>
  <body class="h-screen overflow flex h-auto items-center justify-center" style="background: #FBFAF5;">
    <div class="bg-green-100 text-green-800 py-6 h-screen xl:w-1/4 lg:w-1/3 md:w-1/3 sm:w-1/2 w-80 fixed z-50" id="mobileMenu">
        <div class="py-4">&nbsp;</div>
        <div class="bg-green-200 w-20 h-20 mx-auto rounded-full flex justify-center">
          <h1 class="styled font-semibold text-6xl text-center">HelloTeach</h1>
        </div>
        <div class="py-1">&nbsp;</div>
        <div class="w-2/3 mx-auto">
          <p>
            Selamat datang <b>Mark Zuckerberg</b>!<br>
						Anda adalah seorang guru di HelloTeach sekarang. Lengkapi profilmu yuk!
          </p><br>
					<label for="bio">Biodata</label>
					<textarea class="border border-grey-500 w-full mb-4" id="bio" name="bio" rows="8" cols="80" style="resize:none"></textarea>
          <a
            class=""
            type="submit" href="jadwal.php"
          >
          <div class="bg-green-300 transition duration-300 ease-in-out px-4 py-2 font-bold text-green-800 hover:text-green-100 rounded-full hover:bg-green-800 focus:outline-none focus:shadow-outline text-center">
            Atur Jadwal
          </div>
          </a>
					<a href="index.php">
						<div class="w-full text-center">
							<u>
								Lakukan nanti
							</u>
						</div>
					</a>
        </div>

  	</div>
  </body>
</html>
