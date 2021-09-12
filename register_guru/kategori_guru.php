<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../styles.css" rel="stylesheet">
    <!-- <link href="custom.css" rel="stylesheet"> -->
    <style media="screen">.styled{font-family:"Mistral";}</style>
  </head>
  <body class="overflow flex items-center justify-center" style="background: #FBFAF5;">
    <div class="bg-green-100 text-green-800 py-6 xl:w-1/4 lg:w-1/3 md:w-1/3 sm:w-1/2 w-80 z-50" id="mobileMenu">
        <div class="py-4">&nbsp;</div>
        <a href="../index.php">
          <h1 class="styled font-semibold text-4xl text-center">Kategori Guru</h1>
        </a>
        <div class="py-4">&nbsp;</div>
        <div class="w-2/3 mx-auto">
          <form action="success.php" method="post">
            <div class="mb-1 float-left w-1/2 text-right pr-2">
              <label for="sd" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>SD Sederajat</span>
            </div>
            <div class="mb-1 float-right w-1/2 pl-2">
                <input
                  class="float-left w-4 border-none"
                  style="transform:scale(1.5);outline:0"
                  name="sd"
                  id="sd"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="w-full mb-4">
              <input type="text" name="" value="" class="border border-black w-full px-2 py-1" placeholder="Mata Pelajaran Unggulan">
            </div>
            <div class="">&nbsp;</div>
            <div class="mb-1 float-left w-1/2 text-right pr-2">
              <label for="smp" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>SMP Sederajat</span>
            </div>
            <div class="mb-1 float-right w-1/2 pl-2">
                <input
                  class="float-left w-4 border-none"
                  style="transform:scale(1.5);outline:0"
                  name="smp"
                  id="smp"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="w-full mb-4">
              <input type="text" name="" value="" class="border border-black w-full px-2 py-1" placeholder="Mata Pelajaran Unggulan">
            </div>

            <div class="">&nbsp;</div>
            <div class="mb-1 float-left w-1/2 text-right pr-2">
              <label for="sma" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>SMA Sederajat</span>
            </div>
            <div class="mb-1 float-right w-1/2 pl-2">
                <input
                  class="float-left w-4 border-none"
                  style="transform:scale(1.5);outline:0"
                  name="sma"
                  id="sma"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="w-full mb-4">
              <input type="text" name="" value="" class="border border-black w-full px-2 py-1" placeholder="Mata Pelajaran Unggulan">
            </div>
            <div class="">&nbsp;</div>
            <div class="mb-1 float-left w-1/2 text-right pr-2">
              <label for="sma" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Kejuruan</span>
            </div>
            <div class="mb-1 float-right w-1/2 pl-2">
                <input
                  class="float-left w-4 border-none"
                  style="transform:scale(1.5);outline:0"
                  name="sma"
                  id="sma"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="w-full mb-4">
              <input type="text" name="" value="" class="border border-black w-full px-2 py-1" placeholder="Mata Pelajaran Unggulan">
            </div>
            <div class="">&nbsp;</div>
            <div class="mb-4 float-left w-1/2 text-right pr-2">
              <label for="mentorutbk" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Mentor UTBK</span>
            </div>
            <div class="mb-4 float-right w-1/2 pl-2">
                <input
                  class="float-left w-4 border-none"
                  style="transform:scale(1.5);outline:0"
                  name="mentorutbk"
                  id="mentorutbk"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="">&nbsp;</div>
            <div class="mb-4 float-left w-1/2 text-right pr-2">
              <label for="bahasaasing" class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Pelatih Bahasa Asing</span>
            </div>
            <div class="mb-4 float-right w-1/2 pl-2">
                <input
                  class="float-left w-4 border-none"
                  style="transform:scale(1.5);outline:0"
                  name="bahasaasing"
                  id="bahasaasing"
                  type="checkbox"
                />
              </label>
            </div>
            <div class="mb-6 text-center">
              <button
                class="bg-green-300 transition duration-300 ease-in-out w-full px-4 py-2 font-bold text-green-800 hover:text-green-100 rounded-full hover:bg-green-800 focus:outline-none focus:shadow-outline"
                type="submit"
              >
                Lanjutkan
              </button>
            </div>
          </form>
        </div>

  	</div>
  </body>
</html>
