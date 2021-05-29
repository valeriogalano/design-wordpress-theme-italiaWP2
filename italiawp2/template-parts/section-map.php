<?php
/*
 * ### SEZIONE MAPPA ###
 * Mostra la mappa di Google Maps
 *
 */
?>

<section id="mappa" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php esc_html_e('Interactive Map','italiawp2'); ?></h3>
                <h5><?php esc_html_e('Click on to activate','italiawp2'); ?></h5>
            </div>
        </div>
    </div>
</section>

<section class="map-full-content">
    <div class="map-wrap"></div>
    <iframe src="<?php echo get_option('dettagli-map'); ?>" frameborder="0" allowfullscreen></iframe>
</section>
