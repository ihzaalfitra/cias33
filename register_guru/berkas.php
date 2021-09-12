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
          <h1 class="styled font-semibold text-4xl text-center">Berkas</h1>
        </a>
        <div class="py-4">&nbsp;</div>
        <div class="w-2/3 mx-auto">
          <form action="pertanyaan_tambahan.php" method="post">
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>KTP</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Foto memegang KTP</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Ijazah</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Curriculum Vitae</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Sertifikat</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Foto Formal</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
                />
              </label>
            </div>
            <div class="mb-4">
              <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                <span>Dokumen Pendukung</span>
                <input
                  class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="email"
                  id="email"
                  type="file"
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
