<?php
/**
 * Template Name: Página de Cotización
 */
get_header();
?>

<style>
.cotizacion-container {
    max-width: 1100px;
    margin: 40px auto;
    padding: 40px;
    background: #fff8fd;
    border-radius: 22px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.06);
    font-family: 'Poppins', sans-serif;
}

.cotizacion-title {
    font-size: 36px;
    font-weight: 700;
    color: #c5005a;
    margin-bottom: 10px;
}

.cotizacion-subtitle {
    font-size: 18px;
    color: #333;
    margin-bottom: 30px;
}

.cotizacion-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

.cotizacion-card {
    background: white;
    padding: 25px;
    border-radius: 18px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.cotizacion-card h3 {
    margin-top: 0;
    color: #c5005a;
}

.cotizacion-form input,
.cotizacion-form textarea {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    border-radius: 10px;
    border: 1px solid #ddd;
    font-size: 15px;
}

.btn-send {
    display: inline-block;
    background: #ff2f88;
    color: white;
    padding: 14px 26px;
    margin-top: 15px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
}

.btn-send:hover {
    background: #e02070;
}

@media(max-width: 800px){
    .cotizacion-grid{
        grid-template-columns: 1fr;
    }
}
</style>

<div class="cotizacion-container">

    <h1 class="cotizacion-title">Solicitar Cotización</h1>
    <p class="cotizacion-subtitle">Cuéntanos cómo te gustaría tu torta personalizada</p>

    <div class="cotizacion-grid">

        <!-- FORMULARIO -->
        <div class="cotizacion-card">
            <h3>Formulario</h3>

            <form class="cotizacion-form">

                <label>Tu Nombre *</label>
                <input type="text" required>

                <label>Tu Email *</label>
                <input type="email" required>

                <label>Teléfono</label>
                <input type="text">

                <label>Describe tu torta *</label>
                <textarea rows="5" required placeholder="Sabores, tamaño, temática, colores..."></textarea>

                <a href="#" class="btn-send">Enviar Solicitud</a>
            </form>
        </div>

        <!-- INFORMACIÓN -->
        <div class="cotizacion-card">
            <h3>Detalles del Servicio</h3>

            <p>✨ Diseños únicos personalizados</p>
            <p>🎂 Tortas para cumpleaños, bodas, eventos</p>
            <p>📸 Puedes enviarnos imágenes de referencia</p>
            <p>⏰ Entregas 24 – 72 horas</p>

            <h3>Contacto Directo</h3>
            <p><b>Whatsapp:</b> 957 242 814</p>
            <p><b>Email:</b> mjanccokallo@gmail.com</p>
        </div>

    </div>

</div>

<?php get_footer(); ?>
