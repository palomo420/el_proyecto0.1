 <div class="w-full max-w-md">
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="flex border-b">
                <button id="login-tab" class="switch-tab active flex-1 py-4 px-6 text-center">
                    <i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesión
                </button>
                <button id="register-tab" class="switch-tab flex-1 py-4 px-6 text-center">
                    <i class="fas fa-user-plus mr-2"></i>Registrarse
                </button>
            </div>
            
            <div id="login-content" class="p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Bienvenido de vuelta</h2>
                
                <div class="flex justify-center mb-6">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" id="natural-btn" class="user-type-btn px-4 py-2 text-sm font-medium rounded-l-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-user mr-2"></i>Persona Natural
                        </button>
                        <button type="button" id="juridica-btn" class="user-type-btn px-4 py-2 text-sm font-medium rounded-r-md border border-gray-200 bg-gray-100 text-gray-700 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-building mr-2"></i>Persona Jurídica
                        </button>
                    </div>
                </div>
                
                <form id="login-form" class="space-y-4">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="login-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                        <label class="floating-label">Correo electrónico</label>
                    </div>
                    
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="login-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                        <label class="floating-label">Contraseña</label>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">Recordarme</label>
                        </div>
                        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">¿Olvidaste tu contraseña?</a>
                    </div>
                    
                    <button type="submit" class="w-full bg-custom-gradient text-white py-2 px-4 rounded-lg hover:opacity-90 transition duration-300 font-medium">
                        Iniciar Sesión
                    </button>
                </form>
                
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">O inicia sesión con</span>
                        </div>
                    </div>
                    
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i class="fab fa-google text-red-500 mr-2"></i> Google
                        </button>
                        <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            <i class="fab fa-facebook-f text-blue-600 mr-2"></i> Facebook
                        </button>
                    </div>
                </div>
            </div>
            
            <div id="register-content" class="p-8 hidden">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Crea tu cuenta</h2>
                
                <div class="flex justify-center mb-6">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" id="reg-natural-btn" class="user-type-btn px-4 py-2 text-sm font-medium rounded-l-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-user mr-2"></i>Persona Natural
                        </button>
                        <button type="button" id="reg-juridica-btn" class="user-type-btn px-4 py-2 text-sm font-medium rounded-r-md border border-gray-200 bg-gray-100 text-gray-700 hover:bg-gray-50 focus:z-10 focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-building mr-2"></i>Persona Jurídica
                        </button>
                    </div>
                </div>
                
                <form id="register-natural-form" class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" id="natural-firstname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                            <label class="floating-label">Nombres</label>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" id="natural-lastname" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                            <label class="floating-label">Apellidos</label>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <i class="fas fa-id-card"></i>
                        <input type="text" id="natural-document" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                        <label class="floating-label">Doc.Legales o Doc.Identificasion</label>
                    </div>
                    
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="natural-email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                        <label class="floating-label">Correo electrónico</label>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="natural-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                            <label class="floating-label">Contraseña</label>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="natural-confirm-password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder=" " required>
                            <label class="floating-label">Confirmar contraseña</label>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <input id="natural-terms" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" required>
                        <label for="natural-terms" class="ml-2 block text-sm text-gray-700">
                            Acepto los <a href="#" class="text-indigo-600 hover:text-indigo-500">Términos y Condiciones</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full bg-custom-gradient text-white py-2 px-4 rounded-lg hover:opacity-90 transition duration-300 font-medium">
                        Registrarse
                    </button>