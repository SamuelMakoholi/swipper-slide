<!-- Slider main container -->
<div class="swiper custom-slider">
    <!-- Static background -->
    <div class="slide-background"></div>

    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="slide-content">
                <div class="slide-text swipe-top-to-bottom">
                    <h2>Welcome to Slide 1</h2>
                    <p>This is the description for slide 1.</p>
                </div>
                <div class="slide-image">
                    <img src="<?php echo plugins_url('images/slide1.jpg', __FILE__); ?>" alt="Slide 1">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-content">
                <div class="slide-text swipe-top-to-bottom">
                    <h2>Welcome to Slide 2</h2>
                    <p>This is the description for slide 2.</p>
                </div>
                <div class="slide-image">
                    <img src="<?php echo plugins_url('images/slide4.png', __FILE__); ?>" alt="Slide 2">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-content">
                <div class="slide-text swipe-top-to-bottom">
                    <h2>Welcome to Slide 3</h2>
                    <p>This is the description for slide 3.</p>
                </div>
                <div class="slide-image">
                    <img src="<?php echo plugins_url('images/slide3.jpg', __FILE__); ?>" alt="Slide 3">
                </div>
            </div>
        </div>
        <!-- Add more slides as needed -->
    </div>
    <!-- Navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
</div>