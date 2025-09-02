// Efecto de aparición suave al hacer scroll
document.addEventListener('DOMContentLoaded', function() {
    const elementos = document.querySelectorAll('.card, .miembro, .valor');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    elementos.forEach(elemento => {
        elemento.style.opacity = 0;
        elemento.style.transform = 'translateY(20px)';
        elemento.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(elemento);
    });
});