<div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <div class="flex-1 relative">
                    <input type="text" placeholder="Buscar por puesto, empresa o palabras clave" 
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Buscar
                </button>
            </div>

            <div class="flex flex-wrap gap-2 mb-4">
                <button class="filter-option active px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Todas las categorías
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Tecnología
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Salud
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Finanzas
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Educación
                </button>
                <button class="filter-option px-4 py-2 rounded-full border border-gray-300 text-sm font-medium transition-colors">
                    Marketing
                </button>
            </div>

            <div class="flex flex-wrap gap-3">
                <div class="flex items-center">
                    <label class="mr-2 text-sm text-gray-600">Ubicación:</label>
                    <select class="border border-gray-300 rounded-md px-3 py-1 text-sm">
                        <option>Cualquier lugar</option>
                        <option>Remoto</option>
                        <option>Ciudad de México</option>
                        <option>Monterrey</option>
                        <option>Guadalajara</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <label class="mr-2 text-sm text-gray-600">Tipo:</label>
                    <select class="border border-gray-300 rounded-md px-3 py-1 text-sm">
                        <option>Todos</option>
                        <option>Tiempo completo</option>
                        <option>Medio tiempo</option>
                        <option>Freelance</option>
                        <option>Prácticas</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <label class="mr-2 text-sm text-gray-600">Experiencia:</label>
                    <select class="border border-gray-300 rounded-md px-3 py-1 text-sm">
                        <option>Todos</option>
                        <option>Sin experiencia</option>
                        <option>Junior (1-3 años)</option>
                        <option>Mid-level (3-5 años)</option>
                        <option>Senior (5+ años)</option>
                    </select>
                </div>
            </div>
        </div>
<!-- fin -->
 <!-- ofertas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="job-card bg-white rounded-lg shadow-md p-6 relative border-l-4 border-blue-500 transition-all duration-300">
                
                <div class="flex items-start mb-4">
                    <img src="https://logo.clearbit.com/google.com" alt="Google" class="w-12 h-12 rounded-md mr-4">
                    <div>
                        <h3 class="font-bold text-lg">personal de limpieza</h3>
                        <p class="text-gray-600">I.E. El carmen</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4"> Buscamos personal de limpieza para mantener nuestras instalaciones escolares impecables. Tu labor es clave para un ambiente de aprendizaje óptimo.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tag bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs">con contrato</span>
                    <span class="tag bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs">Horario de mañana y tarde</span>
                    <span class="tag bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs">Prima</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Publicado hace 2 días</span>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Aplicar
                    </button>
                </div>
            </div>

            <div class="job-card bg-white rounded-lg shadow-md p-6 relative border-l-4 border-purple-500 transition-all duration-300">
                
                <div class="flex items-start mb-4">
                    <img src="https://logo.clearbit.com/amazon.com" alt="Amazon" class="w-12 h-12 rounded-md mr-4">
                    <div>
                        <h3 class="font-bold text-lg">Albañil</h3>
                        <p class="text-gray-600">Constructora Ibirico S.A.S.</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Buscamos a alguien que pueda ejecutar trabajos de mampostería, cimentación, encofrado y acabados con precisión y eficiencia. Si eres proactivo, cumples los plazos y te enorgullece de tu trabajo, ¡queremos conocerte!.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tag bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs">con esperiencioa </span>
                    <span class="tag bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs">contrato</span>
                    <span class="tag bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-xs">entreotros</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Publicado hoy</span>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Aplicar
                    </button>
                </div>
            </div>

            <div class="job-card bg-white rounded-lg shadow-md p-6 relative border-l-4 border-green-500 transition-all duration-300">
               
                <div class="flex items-start mb-4">
                    <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft" class="w-12 h-12 rounded-md mr-4">
                    <div>
                        <h3 class="font-bold text-lg">Cajero</h3>
                        <p class="text-gray-600">Ara</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Buscamos personas proactivas, con excelente actitud y capacidad para trabajar en un ambiente de ritmo rápido. Tu sonrisa y tu atención serán clave para que nuestros clientes tengan la mejor experiencia de compra.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tag bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs">contrato</span>
                    <span class="tag bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs">horario de 8h</span>
                    <span class="tag bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs">sin y con experiencia</span>
                    <span class="tag bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs">entreotro</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Publicado hace 1 semana</span>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Aplicar
                    </button>
                </div>
            </div>

            <div class="job-card bg-white rounded-lg shadow-md p-6 relative border-l-4 border-yellow-500 transition-all duration-300">
               
                <div class="flex items-start mb-4">
                    <img src="https://logo.clearbit.com/facebook.com" alt="Facebook" class="w-12 h-12 rounded-md mr-4">
                    <div>
                        <h3 class="font-bold text-lg">Meseros</h3>
                        <p class="text-gray-600">Sason Jaguero</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Buscamos personas con o sin experiencia, pero con una actitud positiva, ganas de aprender y el compromiso de ofrecer un servicio de primera. Si eres ágil, organizado/a y te comunicas con facilidad, ¡queremos conocerte!.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tag bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs">vacantes:6</span>
                    <span class="tag bg-yellow-100 yellow-800 px-3 py-1 rounded-full text-xs">por dia </span>
                    <span class="tag bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs">Entreoro</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Publicado hace 3 días</span>
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Aplicar
                    </button>
                </div>
            </div>

            <div class="job-card bg-white rounded-lg shadow-md p-6 relative border-l-4 border-red-500 transition-all duration-300">
               
                <div class="flex items-start mb-4">
                    <img src="https://logo.clearbit.com/apple.com" alt="Apple" class="w-12 h-12 rounded-md mr-4">
                    <div>
                        <h3 class="font-bold text-lg">Jardinero</h3>
                        <p class="text-gray-600">Floreria el amanecer</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Buscamos a alguien que pueda asegurar que cada planta en nuestra tienda esté en óptimas condiciones, desde el riego y la poda hasta la prevención de plagas y enfermedades. Tu experiencia y tu ojo para el detalle serán clave para mantener nuestro inventario vibrante y atractivo para nuestros clientes.Tus responsabilidades incluirá.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tag bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs">Por dia</span>
                    <span class="tag bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs">con esperiencia</span>
                    <span class="tag bg-red-100 text-red-800 px-3 py-1 rounded-full text-xs">entreotro</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Publicado hace 5 días</span>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Aplicar
                    </button>
                </div>
            </div>

            <div class="job-card bg-white rounded-lg shadow-md p-6 relative border-l-4 border-indigo-500 transition-all duration-300">
               
                <div class="flex items-start mb-4">
                    <img src="https://logo.clearbit.com/netflix.com" alt="Netflix" class="w-12 h-12 rounded-md mr-4">
                    <div>
                        <h3 class="font-bold text-lg">Cocinero</h3>
                        <p class="text-gray-600">Sason Jaguero</p>
                    </div>
                </div>
                <p class="text-gray-700 mb-4">Buscamos a alguien con experiencia comprobada en la cocina, capaz de trabajar bajo presión, con atención al detalle y un profundo conocimiento de las técnicas culinarias. Si eres proactivo/a, organizado/a y te enorgulleces de cada plato que sale de tu cocina, ¡queremos conocerte!.</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="tag bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-xs">Producto</span>
                    <span class="tag bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-xs">Agile</span>
                    <span class="tag bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-xs">SCRUM</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">Publicado ayer</span>
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Aplicar
                    </button>
                </div>
            </div>
        </div>
<!-- fin -->
        <div class="flex justify-center gap-2">
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
                ...
            </button>
            <button class="pagination-btn px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                10
            </button>
            <button class="pagination-btn px-4 py-2 border border-gray-300 rounded-md text-sm font-medium">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </main>

    <section class="bg-blue-50 py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-blue-800 mb-4">¿Quieres recibir las mejores ofertas?</h2>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">Suscríbete a nuestro boletín y recibe las últimas ofertas de trabajo directamente en tu correo.</p>
            <div class="flex flex-col sm:flex-row gap-2 justify-center max-w-md mx-auto">
                <input type="email" placeholder="Tu correo electrónico" 
                        class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">
                    Suscribirse
                </button>
            </div>
        </div>
    </section>