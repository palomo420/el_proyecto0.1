<div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-indigo-700 mb-3">Crea tu Servicio Profesional</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">Completa los detalles de tu servicio y sube tu hoja de vida para aumentar tu credibilidad</p>
            </div>

            <!-- Form Container -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Progress Steps -->
                <div class="flex items-center justify-between px-8 py-6 border-b">
                    <div class="flex flex-col items-center relative">
                        <div class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center z-10">
                            <span>1</span>
                        </div>
                        <span class="text-sm font-medium mt-2 text-indigo-600">Información</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2 relative">
                        <div class="absolute top-0 left-0 h-full bg-indigo-600 w-1/2"></div>
                    </div>
                    <div class="flex flex-col items-center relative">
                        <div class="w-10 h-10 rounded-full bg-indigo-600 text-white flex items-center justify-center z-10">
                            <span>2</span>
                        </div>
                        <span class="text-sm font-medium mt-2 text-indigo-600">Experiencia</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-2 relative">
                        <div class="absolute top-0 left-0 h-full bg-indigo-600 w-0"></div>
                    </div>
                    <div class="flex flex-col items-center relative">
                        <div class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center z-10">
                            <span>3</span>
                        </div>
                        <span class="text-sm font-medium mt-2 text-gray-500">Finalizar</span>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-8">
                    <form id="serviceForm">
                        <!-- Service Details -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6">Detalles del Servicio</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="serviceName" class="block text-sm font-medium text-gray-700 mb-1">Nombre del Servicio</label>
                                    <input type="text" id="serviceName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Ej: Diseño Web Profesional">
                                </div>
                                <div>
                                    <label for="serviceCategory" class="block text-sm font-medium text-gray-700 mb-1">Categoría</label>
                                    <select id="serviceCategory" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Selecciona una categoría</option>
                                        <option value="design">Diseño</option>
                                        <option value="development">Desarrollo</option>
                                        <option value="marketing">Marketing</option>
                                        <option value="writing">Redacción</option>
                                        <option value="consulting">Consultoría</option>
                                    </select>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="serviceDescription" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                                    <textarea id="serviceDescription" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Describe detalladamente tu servicio..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6">Precio y Disponibilidad</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="servicePrice" class="block text-sm font-medium text-gray-700 mb-1">Precio ($)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500">$</span>
                                        </div>
                                        <input type="number" id="servicePrice" class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="0.00">
                                    </div>
                                </div>
                                <div>
                                    <label for="serviceType" class="block text-sm font-medium text-gray-700 mb-1">Tipo de Precio</label>
                                    <select id="serviceType" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="fixed">Precio Fijo</option>
                                        <option value="hourly">Por Hora</option>
                                        <option value="project">Por Proyecto</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="deliveryTime" class="block text-sm font-medium text-gray-700 mb-1">Tiempo de Entrega</label>
                                    <select id="deliveryTime" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="1">1 día</option>
                                        <option value="3">3 días</option>
                                        <option value="7" selected>1 semana</option>
                                        <option value="14">2 semanas</option>
                                        <option value="30">1 mes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- CV Upload Section -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6">Hoja de Vida (CV)</h2>
                            <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center bg-gray-50">
                                <div id="uploadArea" class="cursor-pointer">
                                    <i class="fas fa-file-upload text-4xl text-indigo-500 mb-3"></i>
                                    <h3 class="text-lg font-medium text-gray-700 mb-1">Sube tu hoja de vida</h3>
                                    <p class="text-sm text-gray-500 mb-4">Formatos aceptados: PDF, DOC, DOCX (Tamaño máximo: 5MB)</p>
                                    <button type="button" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors">
                                        Seleccionar archivo
                                    </button>
                                    <input type="file" id="cvUpload" class="file-upload" accept=".pdf,.doc,.docx" style="display: none;">
                                </div>
                                
                                <!-- Upload Progress (hidden by default) -->
                                <div id="uploadProgress" class="hidden mt-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <span id="fileName" class="text-sm font-medium text-gray-700 truncate"></span>
                                        <span id="fileSize" class="text-xs text-gray-500"></span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div id="progressBar" class="progress-bar bg-indigo-600 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <div class="flex justify-between mt-1">
                                        <span class="text-xs text-gray-500">Subiendo...</span>
                                        <span id="progressPercent" class="text-xs text-gray-500">0%</span>
                                    </div>
                                </div>
                                
                                <!-- Upload Complete (hidden by default) -->
                                <div id="uploadComplete" class="hidden mt-4 p-4 bg-green-50 rounded-lg">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 text-2xl mr-3"></i>
                                        <div>
                                            <p class="text-sm font-medium text-green-800">¡Archivo subido con éxito!</p>
                                            <p id="uploadedFileName" class="text-xs text-green-600"></p>
                                        </div>
                                        <button type="button" id="changeFileBtn" class="ml-auto text-xs text-indigo-600 hover:text-indigo-800">Cambiar archivo</button>
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">Al subir tu CV, aceptas que los clientes potenciales puedan verlo para evaluar tu experiencia.</p>
                        </div>

                        <!-- Skills -->
                        <div class="mb-8">
                            <h2 class="text-xl font-semibold text-gray-800 mb-6">Habilidades</h2>
                            <div class="flex flex-wrap gap-2 mb-4" id="skillsContainer">
                                <!-- Skills will be added here -->
                            </div>
                            <div class="flex">
                                <input type="text" id="skillInput" class="flex-1 px-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Añade una habilidad">
                                <button type="button" id="addSkillBtn" class="px-4 py-2 bg-indigo-600 text-white rounded-r-lg hover:bg-indigo-700 transition-colors">
                                    Añadir
                                </button>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="button" id="nextBtn" class="px-8 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors font-medium">
                                Siguiente
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>