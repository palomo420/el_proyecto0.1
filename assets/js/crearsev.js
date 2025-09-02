document.addEventListener('DOMContentLoaded', function() {
            // File Upload Handling
            const uploadArea = document.getElementById('uploadArea');
            const cvUpload = document.getElementById('cvUpload');
            const uploadProgress = document.getElementById('uploadProgress');
            const uploadComplete = document.getElementById('uploadComplete');
            const fileName = document.getElementById('fileName');
            const fileSize = document.getElementById('fileSize');
            const progressBar = document.getElementById('progressBar');
            const progressPercent = document.getElementById('progressPercent');
            const uploadedFileName = document.getElementById('uploadedFileName');
            const changeFileBtn = document.getElementById('changeFileBtn');
            
            // Skills Handling
            const skillInput = document.getElementById('skillInput');
            const addSkillBtn = document.getElementById('addSkillBtn');
            const skillsContainer = document.getElementById('skillsContainer');
            
            // Upload Area Click
            uploadArea.addEventListener('click', function() {
                cvUpload.click();
            });
            
            // File Selection
            cvUpload.addEventListener('change', function(e) {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                    
                    // Validate file type and size
                    const validTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                    if (!validTypes.includes(file.type) && !file.name.match(/\.(pdf|doc|docx)$/i)) {
                        alert('Por favor, sube un archivo PDF o Word.');
                        return;
                    }
                    
                    if (file.size > 5 * 1024 * 1024) {
                        alert('El archivo es demasiado grande. El tamaño máximo es 5MB.');
                        return;
                    }
                    
                    // Show upload progress
                    uploadArea.classList.add('hidden');
                    uploadProgress.classList.remove('hidden');
                    
                    fileName.textContent = file.name;
                    fileSize.textContent = `${fileSizeMB} MB`;
                    
                    // Simulate upload progress
                    let progress = 0;
                    const interval = setInterval(() => {
                        progress += Math.random() * 10;
                        if (progress >= 100) {
                            progress = 100;
                            clearInterval(interval);
                            
                            // Show complete state after a small delay
                            setTimeout(() => {
                                uploadProgress.classList.add('hidden');
                                uploadComplete.classList.remove('hidden');
                                uploadedFileName.textContent = file.name;
                            }, 300);
                        }
                        
                        progressBar.style.width = `${progress}%`;
                        progressPercent.textContent = `${Math.round(progress)}%`;
                    }, 200);
                }
            });
            
            // Change File Button
            changeFileBtn.addEventListener('click', function() {
                uploadComplete.classList.add('hidden');
                uploadArea.classList.remove('hidden');
                cvUpload.value = '';
            });
            
            // Add Skill
            addSkillBtn.addEventListener('click', function() {
                const skill = skillInput.value.trim();
                if (skill) {
                    const skillElement = document.createElement('div');
                    skillElement.className = 'flex items-center bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm';
                    skillElement.innerHTML = `
                        ${skill}
                        <button type="button" class="ml-2 text-indigo-500 hover:text-indigo-700">
                            <i class="fas fa-times"></i>
                        </button>
                    `;
                    
                    skillElement.querySelector('button').addEventListener('click', function() {
                        skillsContainer.removeChild(skillElement);
                    });
                    
                    skillsContainer.appendChild(skillElement);
                    skillInput.value = '';
                }
            });
            
            // Allow adding skill with Enter key
            skillInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    addSkillBtn.click();
                }
            });
            
            // Next Button
            document.getElementById('nextBtn').addEventListener('click', function() {
                // Validate form
                const serviceName = document.getElementById('serviceName').value.trim();
                const serviceCategory = document.getElementById('serviceCategory').value;
                const serviceDescription = document.getElementById('serviceDescription').value.trim();
                const servicePrice = document.getElementById('servicePrice').value;
                
                if (!serviceName || !serviceCategory || !serviceDescription || !servicePrice) {
                    alert('Por favor completa todos los campos obligatorios.');
                    return;
                }
                
                // Here you would typically submit the form or move to next step
                alert('¡Formulario completado correctamente! En una implementación real, los datos serían enviados al servidor.');
            });
        });