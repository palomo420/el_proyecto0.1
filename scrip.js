// Mobile menu toggle
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});

// Company carousel scrolling
const companyCarousel = document.getElementById('company-carousel');
const prevCompanyButton = document.getElementById('prev-company');
const nextCompanyButton = document.getElementById('next-company');

if (prevCompanyButton && nextCompanyButton && companyCarousel) {
    prevCompanyButton.addEventListener('click', () => {
        companyCarousel.scrollBy({
            left: -300, // Ajusta la cantidad de desplazamiento según sea necesario
            behavior: 'smooth'
        });
    });

    nextCompanyButton.addEventListener('click', () => {
        companyCarousel.scrollBy({
            left: 300, // Ajusta la cantidad de desplazamiento según sea necesario
            behavior: 'smooth'
        });
    });
}