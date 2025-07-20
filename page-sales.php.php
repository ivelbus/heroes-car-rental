<?php
/*
Template Name: Venta de Vehículos
*/
get_header(); ?>

<section id="sales" class="sales-section">
    <div class="container">
        <h2>Compra de Vehículos</h2>
        <p>Agenda una cita para ver los vehículos disponibles.</p>
        <!-- Formulario de Cita -->
        <?php echo do_shortcode('[bookly-form]'); ?>
    </div>
</section>

<?php get_footer(); ?>