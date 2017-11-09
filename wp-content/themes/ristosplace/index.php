<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Ristos_Place
 * @since 1.0
 * @version 1.0
 */
get_header();
?>

<div class="wrap">
    <!-- <?php if (is_home() && !is_front_page()) : ?>
                         <header class="page-header">
                             <h1 class="page-title"><?php single_post_title(); ?></h1>
                         </header>
    <?php else : ?>
                         <header class="page-header">
                             <h2 class="page-title"><?php _e('Posts', 'ristosplace'); ?></h2>
                         </header>
    <?php endif; ?>-->

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php echo get_sidebar('slider'); ?>
            <?php
            if (have_posts()) :

                /* Start the Loop */
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/post/content', get_post_format());
                endwhile;
//				the_posts_pagination( array(
//					'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
//					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
//					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
//				) );

            else :
                get_template_part('template-parts/post/content', 'none');
            endif;
            ?>
            <?php
            //query options
            $args = array(
                'post_type' => 'weekly_items',
                'order' => 'ASC',
                'orderby' => 'ID'
            );
            //The Query
            $custom_post = new WP_Query($args);
            ?>
            <section class="weekly-specials text-center">
                <div class="container">
                    <h2>For the week of October 3 – 7</h2>
                    <div class="row">
                        <?php
                        if ($custom_post->have_posts()):
                            //the loop
                            while ($custom_post->have_posts()):
                                $custom_post->the_post();
                                ?>
                                <div class="col-sm-6 col-lg-3 mb-25">
                                    <div class="ih-item circle effect18 bottom_to_top">
                                        <a href="#">
                                            <div class="img"><?php the_post_thumbnail('weekly_items'); ?></div>
                                            <div class="info">
                                                <div class="info-back">
                                                    <h3><?php the_title() //echo get_post_meta(get_the_ID(), 'feature_heading', true); ?></h3>
                                                    <p>ccView More</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="weekly-specials-box">
                                        <h4><?php the_title()?></h4>
                                        <p><?php echo get_post_meta(get_the_ID(), 'item_name', true); ?> <strong> - </strong> <?php echo get_post_meta(get_the_ID(), 'item_ingredient_details', true); ?></p>
                                    </div>
                                </div>          
                                <?php
                            endwhile;
                        //Restore original post data
                        endif;
                        ?>
                        <div class="col-sm-12 text-center">
                            <a class="btn btn-weekly-specials ml-2 mr-2" href="#">View More</a> <a class="btn btn-weekly-reserve ml-2 mr-2" href="#">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer();
?>