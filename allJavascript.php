<script>
    const slider = document.querySelector(".testimonial-slider");
    const sliderContainer = slider.querySelector(".slider-container");
    const prevBtn = slider.querySelector(".prev-btn");
    const nextBtn = slider.querySelector(".next-btn");
    const testimonials = slider.querySelectorAll(".testimonial");

    let currentIndex = 0;
    const slideWidth = testimonials[0].offsetWidth;
    const slideMargin = parseInt(getComputedStyle(testimonials[0]).marginRight);

    sliderContainer.style.transform = `translateX(-${slideWidth * currentIndex}px)`;

    nextBtn.addEventListener("click", () => {
        currentIndex++;
        if (currentIndex > testimonials.length - 3) {
            currentIndex = 0;
        }
        sliderContainer.style.transform =
            `translateX(-${(slideWidth + slideMargin) * currentIndex}px)`;
    });

    prevBtn.addEventListener("click", () => {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = testimonials.length - 3;
        }
        sliderContainer.style.transform =
            `translateX(-${(slideWidth + slideMargin) * currentIndex}px)`;
    });
    </script>
    <!-- End js for testimonial -->


    <!-- Font-Awesome js -->
    <script src="js/all.min.js"></script>