<?php
/**
 * Template Name: Página de Contacto Dulciela
 * Template Post Type: page
 */

get_header();

// ========================
// PROCESAR ENVÍO DEL FORMULARIO
// ========================
$mensaje_enviado = false;
$mensaje_error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre   = sanitize_text_field($_POST['nombre']);
    $email    = sanitize_email($_POST['email']);
    $telefono = sanitize_text_field($_POST['telefono']);
    $mensaje  = sanitize_textarea_field($_POST['mensaje']);

    $to = "info@dulciela.com";  // <-- Cambia a tu correo real
    $subject = "Nuevo mensaje desde la web - Dulciela";

    $body = "
        Nombre: $nombre\n
        Email: $email\n
        Teléfono: $telefono\n
        Mensaje:\n$mensaje
    ";

    $headers = ["From: $nombre <$email>"];

    if (wp_mail($to, $subject, $body, $headers)) {
        $mensaje_enviado = true;
    } else {
        $mensaje_error = true;
    }
}
?>

<div class="contacto-container">

    <h1 class="contacto-title">Contacto</h1>

    <!-- MENSAJES DE ÉXITO / ERROR -->
    <?php if ($mensaje_enviado): ?>
        <div class="contacto-success">🎉 ¡Tu mensaje ha sido enviado con éxito! Te responderemos pronto.</div>
    <?php endif; ?>

    <?php if ($mensaje_error): ?>
        <div class="contacto-error">❌ Ocurrió un problema al enviar tu mensaje. Inténtalo de nuevo.</div>
    <?php endif; ?>

    <div class="contacto-grid">

        <!-- FORMULARIO -->
        <div class="contacto-form">
            <h2>Envíanos un mensaje</h2>

            <form method="post" class="form-box">

                <label>Nombre *</label>
                <input type="text" name="nombre" required>

                <label>Email *</label>
                <input type="email" name="email" required>

                <label>Teléfono</label>
                <input type="text" name="telefono">

                <label>Mensaje *</label>
                <textarea name="mensaje" required></textarea>

                <button type="submit" class="btn primary">Enviar Mensaje</button>
            </form>
        </div>

        <!-- INFORMACIÓN -->
        <div class="contacto-info">
            <h2>Información</h2>

            <p><i class="fa-solid fa-location-dot"></i><strong>Dirección</strong><br>
                Av. flora tristan, Arequipa</p>

            <p><i class="fa-solid fa-phone"></i><strong>Teléfono</strong><br>
                (01) 234-5678<br>
                WhatsApp: 957242814
            </p>

            <p><i class="fa-solid fa-envelope"></i><strong>Email</strong><br>
                mjanccokallo@gmail.com
            </p>

            <hr>

            <h3>Horarios</h3>
            <p>Lunes - Viernes: 8am – 8pm<br>
                Sábados: 9am – 9pm<br>
                Domingos: 9am – 6pm</p>
        </div>
    </div>

    <!-- TIP -->
    <div class="contacto-tip">
        <p><i class="fa-solid fa-lightbulb"></i> Para pedidos personalizados, contáctanos con 3 días de anticipación.</p>
    </div>

</div>

<!-- MAPA -->
<div class="contacto-mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9983174306665!2d-77.0344965!3d-12.1209189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c82f3df2db87%3A0x7a4347ab0d9c0495!2sLarco%201234!5e0!3m2!1ses!2spe!4v1700000000000"
        width="100%" height="350" style="border:0;" allowfullscreen loading="lazy"></iframe>
</div>

<!-- BOTÓN WHATSAPP -->
<a href="https://wa.me/51999999999" class="whatsapp-btn" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<?php get_footer(); ?>
