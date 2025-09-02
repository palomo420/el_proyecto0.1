 <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Buscador Avanzado de Servicios</h2>
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <div class="flex-1 relative">
                    <input type="text" id="searchInput" placeholder="Buscar servicios por nombre, categoría o descripción" 
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <button id="searchBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Buscar
                </button>
                <button id="addServiceBtn" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    <i class="fas fa-plus mr-2"></i> Nuevo Servicio
                </button>
            </div>

            <div class="flex flex-wrap gap-2 mb-4">
                <button class="filter-option active px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Todos los servicios
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Para candidatos
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Para empresas
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Asesoría
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Capacitación
                </button>
            </div>

            <div class="flex flex-wrap gap-3">
                <div class="flex items-center">
                    <label class="mr-2 text-sm text-gray-600">Ordenar por:</label>
                    <select id="sortSelect" class="border border-gray-300 rounded-md px-3 py-1 text-sm">
                        <option value="newest">Más recientes</option>
                        <option value="oldest">Más antiguos</option>
                        <option value="name">Nombre (A-Z)</option>
                        <option value="nameDesc">Nombre (Z-A)</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <label class="mr-2 text-sm text-gray-600">Categoría:</label>
                    <select id="categorySelect" class="border border-gray-300 rounded-md px-3 py-1 text-sm">
                        <option value="all">Todas</option>
                        <option value="candidates">Para candidatos</option>
                        <option value="companies">Para empresas</option>
                        <option value="advice">Asesoría</option>
                        <option value="training">Capacitación</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Sección de Servicios -->
        <section id="servicesSection">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-blue-800 mb-2">Nuestros Servicios</h2>
                <p class="text-gray-600">Encuentra los servicios que necesitas para potenciar tu carrera o empresa</p>
            </div>

            <div id="servicesContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Los servicios se cargarán dinámicamente con JavaScript -->
            </div>
        </section>

        <!-- Paginación -->
        <div class="flex justify-center gap-2 mt-8">
            <button class="pagination-btn px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="pagination-btn active px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                1
            </button>
            <button class="pagination-btn px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                2
            </button>
            <button class="pagination-btn px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                3
            </button>
            <button class="pagination-btn px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </main>

    <!-- Modal para agregar nuevo servicio -->
    <div id="addServiceModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 modal" style="display: none;">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md mx-4">
            <div class="px-6 py-4 border-b">
                <h3 class="text-xl font-bold text-gray-800">Agregar Nuevo Servicio</h3>
            </div>
            <div class="px-6 py-4">
                <form id="serviceForm">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="serviceName">Nombre del Servicio</label>
                        <input type="text" id="serviceName" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="serviceDescription">Descripción</label>
                        <textarea id="serviceDescription" rows="3" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="serviceCategory">Categoría</label>
                        <select id="serviceCategory" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Seleccionar categoría</option>
                            <option value="candidates">Para candidatos</option>
                            <option value="companies">Para empresas</option>
                            <option value="advice">Asesoría</option>
                            <option value="training">Capacitación</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="serviceIcon">Icono (Font Awesome)</label>
                        <input type="text" id="serviceIcon" placeholder="Ej: fa-search" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-medium mb-2" for="serviceColor">Color del servicio</label>
                        <select id="serviceColor" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="blue">Azul</option>
                            <option value="purple">Morado</option>
                            <option value="green">Verde</option>
                            <option value="yellow">Amarillo</option>
                            <option value="red">Rojo</option>
                            <option value="indigo">Indigo</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="px-6 py-4 border-t flex justify-end gap-3">
                <button id="cancelAddService" class="px-4 py-2 text-gray-600 hover:text-gray-800 font-medium">Cancelar</button>
                <button id="submitService" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 font-medium">Guardar Servicio</button>
            </div>
        </div>
    </div>

    <!-- Notificación -->
    <div id="notification" class="notification">
        <i class="fas fa-check-circle mr-2"></i> <span id="notificationText"></span>
    </div>