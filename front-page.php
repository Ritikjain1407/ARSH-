<?php
/**
 * Template Name: Homepage Template
 */

get_header();
?>

    <!-- Hero Section -->
    <header class="section bg-white" style="position: relative; overflow: hidden; padding-top: 2rem;">
        <div class="container grid grid-cols-2 items-center fade-up gap-8">
            <div class="hero-content" style="z-index: 2;">
                <h1 class="heading-primary" style="margin-bottom: 1.5rem;">Advanced Dental & Cosmetic Care in Bilaspur</h1>
                <p class="text-lead">13+ Years of Excellence. Experience pain-free treatments and state-of-the-art laser technology with Dr. Aradhna Das.</p>
                <div class="flex gap-4" style="flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary">Book Consultation</a>
                    <a href="https://wa.me/918460472995" class="btn btn-secondary"><i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
            <div class="hero-image" style="position: relative; z-index: 1;">
                <div style="position: absolute; top: -5%; right: -5%; width: 100%; height: 100%; background: var(--clr-teal-light); border-radius: 2rem; z-index: -1;"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/clinic_storefront.jpg" alt="Arsh Family Dental and Cosmetology Care Clinic" class="rounded-xl shadow-lg" style="width: 100%; object-fit: cover; border: 4px solid white; min-height: 400px; background-color: #e2e8f0;">
            </div>
        </div>
    </header>

    <!-- Trust Banner -->
    <section class="bg-navy" style="padding: 3rem 0;">
        <div class="container grid grid-cols-2 text-center fade-up gap-8" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="flex flex-col items-center gap-2">
                <i class="fa-solid fa-star text-teal" style="font-size: 2.5rem;"></i>
                <h3 style="color: white; font-size: 1.5rem; margin-top: 1rem;">4.7/5 Stars</h3>
                <p class="text-teal-light" style="color: var(--clr-teal-light);">200+ Satisfied Patients</p>
            </div>
            <div class="flex flex-col items-center gap-2">
                <i class="fa-solid fa-shield-halved text-teal" style="font-size: 2.5rem;"></i>
                <h3 style="color: white; font-size: 1.5rem; margin-top: 1rem;">13+ Years Experience</h3>
                <p class="text-teal-light" style="color: var(--clr-teal-light);">Trusted Expertise</p>
            </div>
            <div class="flex flex-col items-center gap-2">
                <i class="fa-solid fa-face-smile text-teal" style="font-size: 2.5rem;"></i>
                <h3 style="color: white; font-size: 1.5rem; margin-top: 1rem;">Pain-Free Treatments</h3>
                <p class="text-teal-light" style="color: var(--clr-teal-light);">Comfort-First Approach</p>
            </div>
            <div class="flex flex-col items-center gap-2">
                <i class="fa-solid fa-microscope text-teal" style="font-size: 2.5rem;"></i>
                <h3 style="color: white; font-size: 1.5rem; margin-top: 1rem;">Advanced Technology</h3>
                <p class="text-teal-light" style="color: var(--clr-teal-light);">Modern Laser Equipment</p>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="section">
        <div class="container fade-up">
            <div class="text-center" style="margin-bottom: 4rem;">
                <h2 class="heading-secondary">Comprehensive Care Under One Roof</h2>
                <p class="text-lead" style="max-width: 600px; margin: 0 auto;">From essential dental health to advanced aesthetic enhancements, we provide everything you need to feel confident and healthy.</p>
            </div>

            <div class="grid grid-cols-2 gap-8">
                <!-- Column 1: Dental -->
                <div class="bg-white rounded-xl shadow-md" style="padding: 3rem; border-top: 4px solid var(--clr-teal); transition: transform var(--transition-normal);">
                    <div style="width: 60px; height: 60px; background: var(--clr-teal-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                        <i class="fa-solid fa-tooth text-teal" style="font-size: 1.75rem;"></i>
                    </div>
                    <h3 class="heading-tertiary" style="margin-bottom: 1rem;">Dental Excellence</h3>
                    <ul style="margin-bottom: 2rem; color: var(--clr-text-main);" class="flex flex-col gap-2">
                        <li><i class="fa-solid fa-check text-teal" style="margin-right: 0.5rem;"></i> Painless Root Canals (RCT)</li>
                        <li><i class="fa-solid fa-check text-teal" style="margin-right: 0.5rem;"></i> Surgical & Safe Extractions</li>
                        <li><i class="fa-solid fa-check text-teal" style="margin-right: 0.5rem;"></i> General & Preventative Dentistry</li>
                        <li><i class="fa-solid fa-check text-teal" style="margin-right: 0.5rem;"></i> Dental Implants & Braces</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/dental-care' ) ); ?>" class="btn btn-outline" style="color: var(--clr-teal); border-color: var(--clr-teal);">Explore Dental Services <i class="fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- Column 2: Cosmetic -->
                <div class="bg-white rounded-xl shadow-md" style="padding: 3rem; border-top: 4px solid var(--clr-navy); transition: transform var(--transition-normal);">
                    <div style="width: 60px; height: 60px; background: var(--clr-white-dim); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; border: 1px solid var(--clr-navy-light);">
                        <i class="fa-solid fa-wand-magic-sparkles text-navy" style="font-size: 1.75rem; color: var(--clr-navy);"></i>
                    </div>
                    <h3 class="heading-tertiary" style="margin-bottom: 1rem;">Aesthetic & Laser Clinic</h3>
                    <ul style="margin-bottom: 2rem; color: var(--clr-text-main);" class="flex flex-col gap-2">
                        <li><i class="fa-solid fa-check text-navy" style="margin-right: 0.5rem; color: var(--clr-navy);"></i> Laser Hair Removal</li>
                        <li><i class="fa-solid fa-check text-navy" style="margin-right: 0.5rem; color: var(--clr-navy);"></i> Laser Tattoo Removal</li>
                        <li><i class="fa-solid fa-check text-navy" style="margin-right: 0.5rem; color: var(--clr-navy);"></i> Permanent Makeup (Brows/Lips)</li>
                        <li><i class="fa-solid fa-check text-navy" style="margin-right: 0.5rem; color: var(--clr-navy);"></i> Hair Transplants & Restoration</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>" class="btn btn-outline" style="color: var(--clr-navy); border-color: var(--clr-navy);">Explore Cosmetic Services <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section" style="background-color: var(--clr-teal-light); padding: 5rem 0;">
        <div class="container fade-up text-center">
            <h2 class="heading-secondary">What Our Patients Say</h2>
            <div style="max-width: 800px; margin: 3rem auto; position: relative; min-height: 250px; background: white; padding: 3rem; border-radius: 1rem; box-shadow: var(--shadow-md);">
                <i class="fa-solid fa-quote-left" style="font-size: 3rem; color: var(--clr-teal-light); position: absolute; top: 1rem; left: 1.5rem; opacity: 0.5;"></i>
                
                <div class="testimonial-slide">
                    <div class="flex justify-center gap-1 text-teal" style="margin-bottom: 1rem;">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p style="font-size: 1.25rem; font-style: italic; margin-bottom: 1.5rem; color: var(--clr-navy);">"Dr. Aradhna Das is fantastic! The root canal was completely pain-free. The clinic is so modern and hygienic. I felt extremely safe during my entire treatment. Highly recommended for anyone in Bilaspur."</p>
                    <h4 style="font-weight: 700; color: var(--clr-teal);">— Rahul S.</h4>
                </div>

                <div class="testimonial-slide">
                    <div class="flex justify-center gap-1 text-teal" style="margin-bottom: 1rem;">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p style="font-size: 1.25rem; font-style: italic; margin-bottom: 1.5rem; color: var(--clr-navy);">"I have been visiting Arsh Clinic for my laser hair removal sessions. The staff makes you feel so comfortable and the technology is top-notch. I saw results from the very first session!"</p>
                    <h4 style="font-weight: 700; color: var(--clr-teal);">— Priya M.</h4>
                </div>

                <div class="testimonial-slide">
                    <div class="flex justify-center gap-1 text-teal" style="margin-bottom: 1rem;">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p style="font-size: 1.25rem; font-style: italic; margin-bottom: 1.5rem; color: var(--clr-navy);">"I got permanent lip tinting done here and I am amazed at the natural results. Her artistic touch and expertise really shine through. It's the best cosmetic clinic I've been to."</p>
                    <h4 style="font-weight: 700; color: var(--clr-teal);">— Sneha V.</h4>
                </div>
            </div>
            <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="btn btn-primary" style="margin-top: 1rem;">View Before & After Outcomes</a>
        </div>
    </section>

<?php get_footer(); ?>
