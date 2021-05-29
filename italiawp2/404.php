<?php get_header(); ?>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-6 col-md-8">
                <div class="titolo-sezione">
                    <h1 class="ErrorPage-title">404</h1>
                    <h2 class="ErrorPage-subtitle"><?php esc_html_e('Not found','italiawp2'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="articolo-dettaglio-testo">
    <div class="container">
        <div class="row">
            <div class="col-12 linetop pt8">
                <div class="articolo-paragrafi">
                    <div class="row">
                        <div class="col-12 testolungo">
                            <p><?php esc_html_e('The page you are looking for was not found','italiawp2'); ?>, <a href="javascript:history.back();" title="<?php esc_attr_e('come back','italiawp2'); ?>"><?php esc_html_e('come back','italiawp2'); ?></a> <?php esc_html_e('or use the menu to continue browsing','italiawp2'); ?>.</p>
                        </div>
                    </div>
                    
                    <div class="row mt32">
                        <div class="col-md-12 veditutti">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-default btn-verde"><?php esc_html_e('Back to Home','italiawp2'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
