<!doctype html>
<html>
<head>
    @vite('resources/css/app.css')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-100">
  <section class="">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow-lg dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-100">
            <div class="p-6 space-y-2 md:space-y-6 sm:p-8">
                <img class=" mr-2" src="{{ URL::to('/img/UTTLOGO.png') }}"> 
                <span class="leading-tight tracking-tight text-sm font-light text-gray-500 dark:text-gray-400">
                    Sistema "DEUTT" para la generacion de archivos academicos electronicos
                </span>
                <form class="space-y-3 md:space-y-6" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">Usuario</label>
                        <input type="email" name="email" id="email" class="border border-gray-50 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-400">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="border border-gray-50 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <button type="submit" class="w-full text-white bg-amber-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Entrar</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
</body>
</html>