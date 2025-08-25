function toggleMode() {
  const body = document.body;
  const isDark = body.classList.contains("dark");
  body.classList.toggle("dark");
  body.classList.toggle("light");

  const button = document.querySelector(".toggle-btn");
  button.textContent = isDark ? "Modo Oscuro" : "Modo Claro";
}
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
// Modales Servicios
document.addEventListener('DOMContentLoaded', () => {
    const openButtons = document.querySelectorAll('[data-modal-target]');
    const closeButtons = document.querySelectorAll('[data-close-button]');
    const modals = document.querySelectorAll('.modal');

    openButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);

            if (modal) {
                // Mostrar el modal
                modal.style.display = 'block';
                modal.style.position = 'fixed';
                modal.style.left = '0';
                modal.style.top = '0';
                modal.style.width = '100%';
                modal.style.height = '100%';
                modal.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
                modal.style.zIndex = '999';

                // Centrar el contenido
                const modalContent = modal.querySelector('.modal-content');
                if (modalContent) {
                    modalContent.style.position = 'absolute';
                    modalContent.style.top = '35%';
                    modalContent.style.left = '50%';
                    modalContent.style.transform = 'translate(-50%, -50%)';
                }
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            if (modal) modal.style.display = 'none';
        });
    });

    window.addEventListener('click', (e) => {
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
});
 function abrirModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }

  function cerrarModal(id) {
    document.getElementById(id).classList.add('hidden');
  }
  const track = document.getElementById("carousel-track");
  const slides = track.children;
  const totalSlides = slides.length;
  let index = 0;

  const updateCarousel = () => {
    track.style.transform = `translateX(-${index * 100}%)`;
  };

  document.getElementById("next-company").addEventListener("click", () => {
    index = (index + 1) % totalSlides;
    updateCarousel();
  });

  document.getElementById("prev-company").addEventListener("click", () => {
    index = (index - 1 + totalSlides) % totalSlides;
    updateCarousel();
  });

  // autoplay cada 4 segundos
  setInterval(() => {
    index = (index + 1) % totalSlides;
    updateCarousel();
  }, 4000);