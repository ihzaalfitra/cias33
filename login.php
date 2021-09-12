<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In | HelloTeach</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles.css" rel="stylesheet">
    <!-- <link href="custom.css" rel="stylesheet"> -->
    <style media="screen">.styled{font-family:"Mistral";}</style>
  </head>
  <body class="h-screen overflow flex h-auto items-center justify-center" style="background: #FBFAF5;">
    <div class="bg-green-100 text-green-800 py-6 h-screen xl:w-1/4 lg:w-1/3 md:w-1/3 sm:w-1/2 w-80 fixed z-50" id="mobileMenu">
        <div class="py-12">&nbsp;</div>
        <h1 class="styled font-semibold text-xl text-center">Selamat Datang</h1>
        <div class="py-6">&nbsp;</div>
        <div class="bg-green-200 w-20 h-20 mx-auto rounded-full flex justify-center">
          <h1 class="styled font-semibold text-6xl text-center">HelloTeach</h1>
        </div>
        <div class="py-1">&nbsp;</div>
        <div class="w-2/3 mx-auto">
          <form action="index.php" method="post">
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Email</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="text"
                  required
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                <span>Password</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="password"
                  id="password"
                  type="password"
                  required
                />
              </label>
            </div>
            <div class="mb-6 text-center">
              <button
                class="bg-green-300 transition duration-300 ease-in-out w-full px-4 py-2 font-bold text-green-800 hover:text-green-100 rounded-full hover:bg-green-800 focus:outline-none focus:shadow-outline"
                type="submit"
              >
                Log In
              </button>
            </div>
          </form>
          Tidak punya akun? <a href="register.php" class="font-bold text-green-800">Buat akun</a>
        </div>

  	</div>
  </body>
</html>
