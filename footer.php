<?php
/**
 * The template for displaying the footer
 *
 * Contiene el cierre de #content y todos los elementos después.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dulciela_tema
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="footer-content-container">
            <div class="footer-section about-us">
                <h4>Dulciela</h4>
                <p>Pastelería artesanal con más de 8 años de experiencia. Tortas y postres hechos con amor.</p>
            </div>

            <div class="footer-section contact">
                <h4>Contacto</h4>
                <p><i class="fas fa-map-marker-alt"></i> Av. Larco 1234, Miraflores</p>
                <p><i class="fas fa-phone"></i> (01) 234-5678</p>
                <p><i class="fas fa-envelope"></i> info@dulciela.com</p>
            </div>

            <div class="footer-section hours">
                <h4>Horarios</h4>
                <p>Lunes - Viernes: 8am - 8pm</p>
                <p>Sábados: 9am - 9pm</p>
                <p>Domingo: 9am - 6pm</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Dulciela - Todos los derechos reservados</p>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>