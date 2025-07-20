# Instrucciones para el Desarrollador: Heroes Car Rental

## 📁 Estructura de Carpetas
- **img/**: Imágenes (logo.png, bmw-black.jpg, mitsubishi-outlander.jpg, etc.)
- **style.css**: Estilos principales
- **functions.php**: Funciones de WordPress
- **index.php**: Plantilla principal
- **page-*.php**: Plantillas específicas
- **README.md**: Este archivo

## 🎨 Paleta de Colores
- Negro: `#000`
- Blanco: `#fff`
- Amarillo: `#FFD700`

## 🧩 Plugins Recomendados
1. **WooCommerce + Stripe Gateway**  
   - Instala WooCommerce y el plugin de Stripe.
   - Configura productos virtuales para cada vehículo.
   - Usa precios por día (ej: $60/día).
   - Enlace: [WooCommerce](https://wordpress.org/plugins/woocommerce/ )

2. **Bookly para Citas**  
   - Instala Bookly y crea servicios para cada vehículo.
   - Añade el shortcode `[bookly-form]` en la sección de venta.
   - Enlace: [Bookly](https://codecanyon.net/item/bookly-responsive-appointment-booking-wordpress-plugin/7581569 )

3. **Contact Form 7 (Opcional)**  
   - Para formularios de contacto.
   - Enlace: [Contact Form 7](https://es.wordpress.org/plugins/contact-form-7/ )

## 🖼️ Imágenes
Reemplaza estas imágenes en la carpeta `img/`:
- `logo.png`: Tu logo de Heroes Car Rental
- `bmw-black.jpg`: Imagen de portada
- `mitsubishi-outlander.jpg`: Vehículo 1
- `nissan-rogue.jpg`: Vehículo 2
- `avatar1.jpg`: Foto de testimonio

## 🛠️ Pasos para Implementar
1. **Crea un Child Theme**  
   - Copia todas las carpetas y archivos aquí descritos en `wp-content/themes/heroes-car-rental/`.

2. **Activa el Tema**  
   - Ve a Apariencia > Temas > Activa "Heroes Car Rental".

3. **Crea las Páginas**  
   - Página de Inicio → Asigna la plantilla `page-home.php`
   - Reserva → Asigna `page-booking.php`
   - Venta → Asigna `page-sales.php`

4. **Configura WooCommerce y Stripe**  
   - Ve a WooCommerce > Ajustes > Pagos.
   - Habilita "Stripe" y configura con tus claves API.

5. **Instala Bookly**  
   - Ve a Ajustes > Bookly.
   - Crea servicios para cada vehículo y asigna horarios.

6. **Optimización**  
   - Usa **WP Rocket** para caché.
   - Optimiza imágenes con **Smush**.

## 📌 Notas Adicionales
- **Responsivo:** El diseño es responsivo, pero verifica en móviles.
- **Seguridad:** Asegura el sitio con SSL.
- **SEO:** Usa Yoast SEO para optimización en motores de búsqueda.