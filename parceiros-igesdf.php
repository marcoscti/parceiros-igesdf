<?php

/**
 * Plugin Name: Parcerias IgesDF
 * Description: CRUD de Parcerias IgesDF com shortcode para exibição em cards filtráveis.
 * Version: 0.0.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author: Marcos Cordeiro
 * Author URI:        https://github.com/marcoscti
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if (!defined('ABSPATH')) exit;

define('UA_PLUGIN_URL', plugin_dir_url(__FILE__));
define('PARCERIA_IGESDF_VERSION', '0.0.0');
add_action('init', function () {
    register_post_type('parceria_igesdf', [
        'labels' => [
            'name' => 'Parcerias IgesDF',
            'singular_name' => 'Parceria IgesDF',
        ],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);
});


add_shortcode('galeria_parcerias', function () {
    // Bootstrap CSS
    wp_enqueue_style(
        'parcerias-igesdf-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        [],
        '5.3.8'
    );

    // Bootstrap Completo JS
    wp_enqueue_script(
        'parcerias-igesdf-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.8',
        true
    );

    $q = new WP_Query([
        'post_type' => 'parceria_igesdf',
        'posts_per_page' => -1,
    ]);

    ob_start(); ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-2">
        <?php while ($q->have_posts()): $q->the_post(); ?>
            <div class="" id="<?= get_the_ID() ?>">
                <?php if (has_post_thumbnail()) the_post_thumbnail("medium", ['class' => 'img-fluid rounded', 'alt' => get_the_title()]); ?>
                <?php if (!has_post_thumbnail()) { ?>
                    <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="150" preserveAspectRatio="xMidYMid slice" role="img" width="150" xmlns="http://www.w3.org/2000/svg">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#7d7d7e"></rect><text x="25%" y="50%" fill="#eceeef" dy=".3em">Sem imagem.</text>
                    </svg>
                <?php } ?>
            </div>
        <?php endwhile;
        if (!$q->have_posts()): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    Nenhuma parceria encontrada!
                </div>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
<?php return ob_get_clean();
});
add_shortcode('galeria_parcerias_detail', function () {
    // Bootstrap CSS
    wp_enqueue_style(
        'parcerias-igesdf-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        [],
        '5.3.8'
    );

    // Bootstrap Completo JS
    wp_enqueue_script(
        'parcerias-igesdf-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        [],
        '5.3.8',
        true
    );

    $q = new WP_Query([
        'post_type' => 'parceria_igesdf',
        'posts_per_page' => -1,
    ]);

    ob_start(); ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php while ($q->have_posts()): $q->the_post(); ?>
            <div class="col" id="<?php echo get_the_ID(); ?>">
                <div class="card" data-categoria="<?php echo esc_attr(get_post_meta(get_the_ID(), 'categoria', true)); ?>">
                    <div class="card-image">
                        <?php if (has_post_thumbnail()) the_post_thumbnail("medium", ['class' => '', 'alt' => get_the_title(), 'style' => 'height: 150px; object-fit: contain;text-align: center;width:100%']); ?>
                        <?php if (!has_post_thumbnail()) { ?>
                            <svg aria-label="Placeholder: Thumbnail" class="bd-placeholder-img card-img-top" height="150" preserveAspectRatio="xMidYMid slice" role="img" width="100%" xmlns="http://www.w3.org/2000/svg">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#7d7d7e"></rect><text x="25%" y="50%" fill="#eceeef" dy=".3em">Imagem não encontrada!.</text>
                            </svg>
                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php the_title(); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Button trigger modal -->
                            <div class="d-grid gap-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#openModal-<?php echo get_the_ID(); ?>">
                                    Saiba mais
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="openModal-<?php echo get_the_ID(); ?>" tabindex="-1" aria-labelledby="openModalLabel-<?php echo get_the_ID(); ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="openModalLabel-<?php echo get_the_ID(); ?>"><?php the_title(); ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
        if (!$q->have_posts()): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    Nenhuma parceria encontrada!
                </div>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
<?php return ob_get_clean();
});
