<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Responsive Navbar -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                <i class="fa-solid fa-tooth logo-icon"></i>
                <span>Arsh Clinic</span>
            </a>
            
            <div class="nav-links">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/dental-care' ) ); ?>">Dental Care</a>
                <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>">Cosmetic & Skin</a>
                <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Before & After</a>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
            </div>

            <div class="nav-cta">
                <a href="tel:08460472995" class="btn btn-primary"><i class="fa-solid fa-phone"></i> 08460472995</a>
            </div>

            <button class="mobile-menu-btn" aria-label="Open Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu">
        <button class="mobile-menu-close" aria-label="Close Menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="mobile-nav-links">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <a href="<?php echo esc_url( home_url( '/dental-care' ) ); ?>">Dental Care</a>
            <a href="<?php echo esc_url( home_url( '/cosmetic-skin' ) ); ?>">Cosmetic & Skin</a>
            <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Before & After</a>
            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About Us</a>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a>
            <a href="tel:08460472995" class="text-teal"><i class="fa-solid fa-phone"></i> Call 08460472995</a>
        </div>
    </div>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/918460472995" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat with us on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
