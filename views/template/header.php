<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmpleoPlus - Ofertas y Servicios de Empleo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/ofertas.css">
    <link rel="stylesheet" href="assets/style/servicios.css">
    <link rel="stylesheet" href="assets/style/conocenos.css">
    <link rel="stylesheet" href="assets/style/perfil.css">
    <link rel="stylesheet" href="assets/style/login.css">

</head>
<body class="font-sans bg-gray-50">
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-briefcase text-blue-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-blue-600">REDOLLS</span>
                    </div>
                    <!-- MENU AMBURGEZA -->
                    <div class="hidden md:ml-10 md:flex md:space-x-8">
                        <a href="index.php?page=home" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Inicio</a>
                        <a href="index.php?page=ofertas" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Ofertas</a>
                        <a href="index.php?page=servicios" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Servicios</a>
                        <a href="index.php?page=conocenos" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Conocenos</a>
                        <a href="#empresas" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Empresas</a>
                        <a href="#contacto" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contacto</a>
                        <!-- FIN -->
                    </div>
                  
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center">
                    <a href="index.php?page=inicio#lo">
                    <button class="ml-4 bg-white hover:bg-gray-50 text-blue-600 px-4 py-2 rounded-md text-sm font-medium border border-blue-600 transition duration-300">Iniciar Sesión</button>
                    </a>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Abrir menú</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
 
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="index.php?page=inicio" class="bg-blue-50 border-blue-500 text-blue-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Inicio</a>
                <a href="index.php?page=ofertas" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Ofertas</a>

                <a href="index.php?page=servicios" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Servicios</a>

                <a href="index.php?page=conocenos" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Conocenos</a>

                <a href="#empresas" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Empresas</a>

                <a href="#contacto" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Contacto</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="mt-3 space-y-1">
                    <a href="index.php?page=login">
                    <button  class="block w-full text-left mt-2 bg-white hover:bg-gray-50 text-blue-600 px-4 py-2 rounded-md text-base font-medium border border-blue-600 transition duration-300">Iniciar Sesión</button>
                    </a>
                </div>
                
        </div>
    </header>