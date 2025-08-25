document.addEventListener('DOMContentLoaded', function () {
    const bemSection = document.getElementById('bemSection');
    const roleDescription = document.getElementById('roleDescription');

    // Card click functionality
    const cardItems = document.querySelectorAll('.bem-card-item');
    cardItems.forEach(item => {
        item.addEventListener('click', function() {
            const bgImage = this.dataset.bg;
            const role = this.dataset.role;
            const desc = this.dataset.desc;

            // Add updating class for animation
            roleDescription.classList.add('updating');
            
            // Change background with proper positioning
            bemSection.style.backgroundImage = `url('${bgImage}')`;
            bemSection.style.backgroundSize = 'cover';
            bemSection.style.backgroundRepeat = 'no-repeat';
            
            // Update role description with delay for smooth transition
            setTimeout(() => {
                roleDescription.innerHTML = `
                    <div class="role-content">
                        <h4 class="text-white fw-bold mb-3 role-title">${role}</h4>
                        <p class="text-white opacity-90 role-desc">${desc}</p>
                    </div>
                `;
                
                // Remove updating class and add updated class
                roleDescription.classList.remove('updating');
                roleDescription.classList.add('updated');
                
                // Remove updated class after animation
                setTimeout(() => {
                    roleDescription.classList.remove('updated');
                }, 600);
            }, 200);

            // Add active state
            cardItems.forEach(p => p.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Navigation functionality
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const cardsContainer = document.getElementById('cardsContainer');
    const cardWidth = 220;
    let currentPosition = 0;
    const maxPosition = (cardItems.length - 3) * cardWidth;

    if (prevBtn && cardsContainer) {
        prevBtn.addEventListener('click', () => {
            currentPosition = Math.max(0, currentPosition - cardWidth);
            cardsContainer.scrollTo({
                left: currentPosition,
                behavior: 'smooth'
            });
            updateProgress();
        });
    }

    if (nextBtn && cardsContainer) {
        nextBtn.addEventListener('click', () => {
            currentPosition = Math.min(maxPosition, currentPosition + cardWidth);
            cardsContainer.scrollTo({
                left: currentPosition,
                behavior: 'smooth'
            });
            updateProgress();
        });
    }

    function updateProgress() {
        const progressFill = document.querySelector('.progress-fill');
        if (progressFill) {
            const progress = maxPosition > 0 ? (currentPosition / maxPosition) * 100 : 0;
            progressFill.style.width = `${Math.min(100, progress + 33)}%`;
        }
    }

    updateProgress();
});