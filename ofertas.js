// Filter functionality
        document.querySelectorAll('.filter-option').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.filter-option').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                // Here you would typically filter the job listings
            });
        });

        // Pagination functionality
        document.querySelectorAll('.pagination-btn').forEach(button => {
            button.addEventListener('click', function() {
                if(!this.querySelector('i')) { // Don't change active state for arrow buttons
                    document.querySelectorAll('.pagination-btn').forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                }
                // Here you would typically load the corresponding page of job listings
            });
        });

        // Job card hover effect
        document.querySelectorAll('.job-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });

        // Tag hover effect (improved for robustness)
        document.querySelectorAll('.tag').forEach(tag => {
            const originalBgClass = Array.from(tag.classList).find(cls => cls.startsWith('bg-') && cls.includes('-100'));
            const originalTextColorClass = Array.from(tag.classList).find(cls => cls.startsWith('text-') && cls.includes('-800'));

            tag.addEventListener('mouseenter', function() {
                if (originalBgClass && originalTextColorClass) {
                    const color = originalBgClass.split('-')[1]; // e.g., 'blue' from 'bg-blue-100'
                    this.classList.remove(originalBgClass, originalTextColorClass);
                    this.classList.add(`bg-${color}-600`, 'text-white');
                }
            });
            tag.addEventListener('mouseleave', function() {
                if (originalBgClass && originalTextColorClass) {
                    const color = originalBgClass.split('-')[1];
                    this.classList.remove(`bg-${color}-600`, 'text-white');
                    this.classList.add(originalBgClass, originalTextColorClass);
                }
            });
        });