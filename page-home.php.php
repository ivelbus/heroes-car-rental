<?php
/*
Template Name: Página de Inicio
*/
get_header(); ?>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>¿Necesitas el Coche Perfecto para tu Roadtrip?</h1>
            <p class="subtitle">¡Nosotros lo tenemos!</p>
            <a href="#booking" class="btn-primary">Reservar Ahora</a>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/bmw-black.jpg" alt="BMW Negro" class="hero-image">
    </div>
</div>

<!-- Flota de Vehículos -->
<section id="fleet" class="fleet-section">
    <div class="container">
        <h2>Nuestra Flota</h2>
        <div class="vehicle-grid">
            <!-- Vehículo 1 -->
            <div class="vehicle-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mitsubishi-outlander.jpg" alt="Mitsubishi Outlander 2019">
                <div class="vehicle-info">
                    <h3>Mitsubishi Outlander 2019</h3>
                    <div class="rating"><span>5.0★</span> (69 alquileres)</div>
                    <p>7 pasajeros | 4x4 | Tech Package</p>
                    <a href="#" class="btn-secondary">Ver Detalles</a>
                </div>
            </div>
            <!-- Vehículo 2 -->
            <div class="vehicle-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nissan-rogue.jpg" alt="Nissan Rogue Sport">
                <div class="vehicle-info">
                    <h3>Nissan Rogue Sport</h3>
                    <div class="rating"><span>4.98★</span> (59 alquileres)</div>
                    <p>5 pasajeros | EcoBoost | Cámara trasera</p>
                    <a href="#" class="btn-secondary">Ver Detalles</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonios -->
<section id="testimonials" class="testimonials-section">
    <div class="container">
        <h2>Lo Que Dicen Nuestros Clientes</h2>
        <div class="testimonial-slider">
            <!-- Testimonio 1 -->
            <div class="testimonial-item">
                <div class="avatar">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/avatar1.jpg" alt="Tanae W.">
                </div>
                <div class="testimonial-content">
                    <div class="rating-stars">★★★★★</div>
                    <p>"Altamente recomendado. El anfitrión es muy profesional."</p>
                    <p><strong>Tanae W.</strong> • Julio 8, 2025</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>