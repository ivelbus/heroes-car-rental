<?php
/*
Template Name: Reserva
*/
get_header(); ?>

<section id="booking" class="booking-section">
    <div class="container">
        <h2>Reserva tu Vehículo</h2>
        <!-- Formulario de Reserva -->
        <form id="reservation-form">
            <div class="form-group">
                <label for="vehicle-select">Selecciona un vehículo:</label>
                <select id="vehicle-select" required>
                    <option value="">-- Elige un vehículo --</option>
                    <option value="mitsubishi-outlander">Mitsubishi Outlander 2019 ($60/día)</option>
                    <option value="nissan-rogue">Nissan Rogue Sport ($50/día)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pickup-date">Fecha de Retiro:</label>
                <input type="date" id="pickup-date" required>
            </div>
            <div class="form-group">
                <label for="return-date">Fecha de Devolución:</label>
                <input type="date" id="return-date" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" placeholder="ejemplo@email.com" required>
            </div>
            <button type="submit" class="btn-primary">Pagar con Stripe</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>