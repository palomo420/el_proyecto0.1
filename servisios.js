// Base de datos simulada de servicios
        let services = [
            {
                id: 1,
                name: "Búsqueda de Empleo",
                description: "Accede a miles de ofertas laborales en el Cesar filtradas por tu perfil, experiencia y preferencias.",
                category: "candidates",
                icon: "fa-search",
                color: "blue",
                date: "2023-10-15"
            },
            {
                id: 2,
                name: "Publicación de Vacantes",
                description: "Para empresas que buscan el talento ideal. Publica tus vacantes y llega a miles de candidatos.",
                category: "companies",
                icon: "fa-building",
                color: "purple",
                date: "2023-10-10"
            },
            {
                id: 3,
                name: "Currículum Profesional",
                description: "Crea un currículum atractivo que destaque tus habilidades y experiencia frente a reclutadores.",
                category: "candidates",
                icon: "fa-file-alt",
                color: "green",
                date: "2023-10-05"
            },
            {
                id: 4,
                name: "Asesoramiento Laboral",
                description: "Recibe orientación profesional para mejorar tu perfil y estrategias de búsqueda de empleo.",
                category: "advice",
                icon: "fa-bullseye",
                color: "yellow",
                date: "2023-09-28"
            },
            {
                id: 5,
                name: "Estudios de Mercado",
                description: "Para empresas: obtén datos actualizados sobre salarios, competencia y tendencias del mercado laboral.",
                category: "companies",
                icon: "fa-chart-line",
                color: "red",
                date: "2023-09-20"
            },
            {
                id: 6,
                name: "Ferias Virtuales de Empleo",
                description: "Conectamos empresas y candidatos en eventos virtuales especializados por sector e industria.",
                category: "training",
                icon: "fa-users",
                color: "indigo",
                date: "2023-09-15"
            }
        ];

        // Referencias a elementos del DOM
        const servicesContainer = document.getElementById('servicesContainer');
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');
        const sortSelect = document.getElementById('sortSelect');
        const categorySelect = document.getElementById('categorySelect');
        const addServiceBtn = document.getElementById('addServiceBtn');
        const addServiceModal = document.getElementById('addServiceModal');
        const cancelAddService = document.getElementById('cancelAddService');
        const submitService = document.getElementById('submitService');
        const serviceForm = document.getElementById('serviceForm');
        const notification = document.getElementById('notification');
        const notificationText = document.getElementById('notificationText');

        // Colores para las tarjetas
        const colorClasses = {
            blue: { icon: 'bg-blue-100 text-blue-600', border: 'border-l-blue-500', button: 'bg-blue-600 hover:bg-blue-700' },
            purple: { icon: 'bg-purple-100 text-purple-600', border: 'border-l-purple-500', button: 'bg-purple-600 hover:bg-purple-700' },
            green: { icon: 'bg-green-100 text-green-600', border: 'border-l-green-500', button: 'bg-green-600 hover:bg-green-700' },
            yellow: { icon: 'bg-yellow-100 text-yellow-600', border: 'border-l-yellow-500', button: 'bg-yellow-500 hover:bg-yellow-600' },
            red: { icon: 'bg-red-100 text-red-600', border: 'border-l-red-500', button: 'bg-red-500 hover:bg-red-600' },
            indigo: { icon: 'bg-indigo-100 text-indigo-600', border: 'border-l-indigo-500', button: 'bg-indigo-600 hover:bg-indigo-700' }
        };

        // Cargar servicios al iniciar
        document.addEventListener('DOMContentLoaded', () => {
            renderServices(services);
            setupEventListeners();
        });

        // Configurar event listeners
        function setupEventListeners() {
            searchBtn.addEventListener('click', handleSearch);
            searchInput.addEventListener('keyup', (e) => {
                if (e.key === 'Enter') handleSearch();
            });
            sortSelect.addEventListener('change', handleSortAndFilter);
            categorySelect.addEventListener('change', handleSortAndFilter);
            
            // Filtros por categoría
            document.querySelectorAll('.filter-option').forEach(button => {
                button.addEventListener('click', function() {
                    document.querySelectorAll('.filter-option').forEach(btn => btn.classList.remove('active', 'bg-blue-100', 'text-blue-800'));
                    this.classList.add('active', 'bg-blue-100', 'text-blue-800');
                    
                    const filter = this.textContent.trim().toLowerCase();
                    let filteredServices = services;
                    
                    if (filter.includes('candidatos')) {
                        filteredServices = services.filter(service => service.category === 'candidates');
                    } else if (filter.includes('empresas')) {
                        filteredServices = services.filter(service => service.category === 'companies');
                    } else if (filter.includes('asesoría')) {
                        filteredServices = services.filter(service => service.category === 'advice');
                    } else if (filter.includes('capacitación')) {
                        filteredServices = services.filter(service => service.category === 'training');
                    }
                    
                    renderServices(filteredServices);
                });
            });
            
            // Modal para agregar servicio
            addServiceBtn.addEventListener('click', () => {
                addServiceModal.style.display = 'flex';
            });
            
            cancelAddService.addEventListener('click', () => {
                addServiceModal.style.display = 'none';
                serviceForm.reset();
            });
            
            submitService.addEventListener('click', handleAddService);
        }

        // Manejar búsqueda
        function handleSearch() {
            const searchTerm = searchInput.value.toLowerCase();
            if (searchTerm === '') {
                renderServices(services);
                return;
            }
            
            const filteredServices = services.filter(service => 
                service.name.toLowerCase().includes(searchTerm) || 
                service.description.toLowerCase().includes(searchTerm) ||
                service.category.toLowerCase().includes(searchTerm)
            );
            
            renderServices(filteredServices);
        }

        // Manejar ordenamiento y filtrado
        function handleSortAndFilter() {
            const sortBy = sortSelect.value;
            const category = categorySelect.value;
            
            let filteredServices = [...services];
            
            // Filtrar por categoría
            if (category !== 'all') {
                filteredServices = filteredServices.filter(service => service.category === category);
            }
            
            // Ordenar
            switch(sortBy) {
                case 'newest':
                    filteredServices.sort((a, b) => new Date(b.date) - new Date(a.date));
                    break;
                case 'oldest':
                    filteredServices.sort((a, b) => new Date(a.date) - new Date(b.date));
                    break;
                case 'name':
                    filteredServices.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'nameDesc':
                    filteredServices.sort((a, b) => b.name.localeCompare(a.name));
                    break;
            }
            
            renderServices(filteredServices);
        }

        // Agregar nuevo servicio
        function handleAddService() {
            const name = document.getElementById('serviceName').value;
            const description = document.getElementById('serviceDescription').value;
            const category = document.getElementById('serviceCategory').value;
            const icon = document.getElementById('serviceIcon').value;
            const color = document.getElementById('serviceColor').value;
            
            if (!name || !description || !category || !icon || !color) {
                showNotification('Por favor, complete todos los campos', 'error');
                return;
            }
            
            const newService = {
                id: services.length + 1,
                name,
                description,
                category,
                icon,
                color,
                date: new Date().toISOString().split('T')[0]
            };
            
            services.unshift(newService);
            renderServices(services);
            addServiceModal.style.display = 'none';
            serviceForm.reset();
            showNotification('Servicio agregado correctamente');
        }

        // Mostrar notificación
        function showNotification(message, type = 'success') {
            notificationText.textContent = message;
            notification.className = 'notification show';
            notification.style.background = type === 'success' ? '#4ade80' : '#f87171';
            
            setTimeout(() => {
                notification.className = 'notification';
            }, 3000);
        }

        // Renderizar servicios
        function renderServices(servicesToRender) {
            servicesContainer.innerHTML = '';
            
            if (servicesToRender.length === 0) {
                servicesContainer.innerHTML = `
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-medium text-gray-600">No se encontraron servicios</h3>
                        <p class="text-gray-500 mt-2">Intenta con otros términos de búsqueda</p>
                    </div>
                `;
                return;
            }
            
            servicesToRender.forEach(service => {
                const colorClass = colorClasses[service.color];
                const serviceElement = document.createElement('div');
                serviceElement.className = `service-card bg-white rounded-lg shadow-md p-6 relative ${colorClass.border}`;
                serviceElement.innerHTML = `
                    <div class="service-icon ${colorClass.icon}">
                        <i class="fas ${service.icon}"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">${service.name}</h3>
                    <p class="text-gray-600 mb-4">${service.description}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="tag px-3 py-1 rounded-full text-xs ${getCategoryClass(service.category)}">${getCategoryName(service.category)}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">Agregado el ${formatDate(service.date)}</span>
                        <button class="${colorClass.button} text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                            Más información
                        </button>
                    </div>
                `;
                servicesContainer.appendChild(serviceElement);
            });
        }

        // Obtener clase CSS para la categoría
        function getCategoryClass(category) {
            switch(category) {
                case 'candidates': return 'bg-blue-100 text-blue-800';
                case 'companies': return 'bg-purple-100 text-purple-800';
                case 'advice': return 'bg-yellow-100 text-yellow-800';
                case 'training': return 'bg-green-100 text-green-800';
                default: return 'bg-gray-100 text-gray-800';
            }
        }

        // Obtener nombre legible de la categoría
        function getCategoryName(category) {
            switch(category) {
                case 'candidates': return 'Para candidatos';
                case 'companies': return 'Para empresas';
                case 'advice': return 'Asesoría';
                case 'training': return 'Capacitación';
                default: return category;
            }
        }

        // Formatear fecha
        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('es-ES', options);
        }