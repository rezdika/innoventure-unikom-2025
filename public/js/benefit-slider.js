document.addEventListener('DOMContentLoaded', function () {
    // Benefit Slider for Mobile
    const benefitSlider = document.getElementById('benefitSlider');
    const dots = document.querySelectorAll('.dot');
    let currentSlide = 0;
    const totalSlides = 6;

    function showSlide(index) {
        if (benefitSlider) {
            benefitSlider.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            currentSlide = index;
        }
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => showSlide(index));
    });

    // Auto slide for mobile
    if (window.innerWidth < 768) {
        setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }, 4000);
    }

    // Touch swipe for mobile slider
    let startX = 0;
    let endX = 0;

    if (benefitSlider) {
        benefitSlider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        benefitSlider.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            if (startX - endX > 50 && currentSlide < totalSlides - 1) {
                showSlide(currentSlide + 1);
            } else if (endX - startX > 50 && currentSlide > 0) {
                showSlide(currentSlide - 1);
            }
        });
    }
});