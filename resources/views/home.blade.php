<!doctype html>
<html>
<head>
    @vite('resources/css/app.css')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-100">
    <header>
        <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-red-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="{{ URL::to('/img/logoGold.png') }}" class="mr-2 sm:h-11" alt="Flowbite Logo" />
                </a>
                <div class="flex items-center lg:order-2">
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <div class="w-full">
        <div id="banner" tabindex="-1" class="flex fixed z-50 gap-8 justify-between items-start py-3 px-4 w-full border border-b border-gray-200 sm:items-center dark:border-gray-700 lg:py-4 dark:bg-gray-200">
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">En el uso para este usuario solo se tiene permiso a los siguientes procesos. Descargar Kardex, Constancia de estudios, Constancias de terminancion de estudios. Asi como consultar informacion basica de los alumnos en el sistema de DEUTT</p>
            <button data-collapse-toggle="banner" type="button" class="flex items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
            </button>
        </div>
        <section class="bg-white dark:bg-gray-100">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                </div>
                <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                    <!-- Pricing Card -->
                    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-200 xl:p-8 dark:bg-white dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold text-gray-900">ESTADIAS</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                    </div>
                    <!-- Pricing Card -->
                    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-200 xl:p-8 dark:bg-white dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold text-gray-900">SAIIUT</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                    </div>
                    <!-- Pricing Card -->
                    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-200 xl:p-8 dark:bg-white dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold text-gray-900">TITULACION</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                </div>
            </div>
        </section>
        <div class="flex flex-col p-5">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center text-sm font-light">
                    <thead
                      class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-gray-300">
                      <tr>
                        <th scope="col" class=" px-6 py-4">TIPO</th>
                        <th scope="col" class=" px-6 py-4">FECHA</th>
                        <th scope="col" class=" px-6 py-4">DESCARGA</th>
                        <th scope="col" class=" px-6 py-4">ELIMINAR</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap  px-6 py-4 font-medium">Kardex</td>
                        <td class="whitespace-nowrap  px-6 py-4">09-05-2023</td>
                        <td class="whitespace-nowrap  px-6 py-4"></td>
                        <td class="whitespace-nowrap  px-6 py-4"></td>
                      </tr>
                      <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap  px-6 py-4 font-medium">Constancia de estudios</td>
                        <td class="whitespace-nowrap  px-6 py-4 ">05-05-2023</td>
                        <td class="whitespace-nowrap  px-6 py-4"></td>
                        <td class="whitespace-nowrap  px-6 py-4"></td>
                      </tr>
                      <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap  px-6 py-4 font-medium">Carta de presentacion</td>
                        <td class="whitespace-nowrap  px-6 py-4 ">05-05-2023</td>
                        <td class="whitespace-nowrap  px-6 py-4"></td>
                        <td class="whitespace-nowrap  px-6 py-4"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</body>
</html>