document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.custom-slider', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
        },
        on: {
            slideChange: function () {
                // Reset all text animations
                document.querySelectorAll('.slide-text').forEach(text => {
                    text.style.opacity = '0';
                    text.style.transform = 'translateY(-30px)';
                });

                // Animate active slide text
                const activeText = this.slides[this.activeIndex].querySelector('.slide-text');
                if (activeText) {
                    activeText.style.opacity = '1';
                    activeText.style.transform = 'translateY(0)';
                }
            },
        },
    });
});