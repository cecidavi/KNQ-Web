// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    // Testimonial slider functionality
    let sliderIndex = 0;
    const testimonials = document.querySelectorAll('.testimonial');
    const totalTestimonials = testimonials.length;

    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.style.display = i === index ? 'block' : 'none';
        });
    }

    function nextTestimonial() {
        sliderIndex = (sliderIndex + 1) % totalTestimonials;
        showTestimonial(sliderIndex);
    }

    showTestimonial(sliderIndex);
    setInterval(nextTestimonial, 5000); // Cambia cada 5 segundos
});
