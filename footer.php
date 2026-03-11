    <!-- Global Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Clinic Info -->
                <div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" style="color: white; margin-bottom: 1rem;">
                        <i class="fa-solid fa-tooth logo-icon" style="color: white;"></i>
                        <span>Arsh Clinic</span>
                    </a>
                    <p style="margin-bottom: 1.5rem; color: var(--clr-text-light);">
                        Advanced Dental and Cosmetic Care in Bilaspur led by Dr. Aradhna Das.
                    </p>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="fa-solid fa-location-dot contact-icon"></i>
                            <span>Opposite Yamaha Showroom, Mangarpara Road, Bilaspur, Chhattisgarh</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa-solid fa-phone contact-icon"></i>
                            <span>08460472995</span>
                        </div>
                        <div class="contact-item">
                            <i class="fa-solid fa-clock contact-icon"></i>
                            <span>Mon - Sat: 10:00 AM - 8:00 PM <br> Sun: By Appointment</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3>Quick Links</h3>
                    <div class="footer-links">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <a href="<?php echo esc_url( home_url( '/dental-care' ) ); ?>">Dental Treatments</a>
                        <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>">Laser & Skin Care</a>
                        <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Transformation Gallery</a>
                        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Meet Dr. Aradhna Das</a>
                    </div>
                </div>

                <!-- Services Recap -->
                <div>
                    <h3>Our Specialties</h3>
                    <div class="footer-links">
                        <a href="<?php echo esc_url( home_url( '/dental-care' ) ); ?>#rct">Painless Root Canals</a>
                        <a href="<?php echo esc_url( home_url( '/dental-care' ) ); ?>#implants">Dental Implants</a>
                        <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>#laser-hair">Laser Hair Removal</a>
                        <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>#tattoo">Laser Tattoo Removal</a>
                        <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>#botox">Facial Rejuvenation</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Arsh Family Dental Care & Cosmetic Centre. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
