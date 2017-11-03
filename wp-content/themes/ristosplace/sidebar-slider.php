

<section  id="mainCarousel" class="carousel slide d-none d-lg-block" data-ride="carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            // The Query

            $the_query = new WP_Query(array('post_type' => 'slide'));
            // The Loop
            if ($the_query->have_posts()) {
                $i = 0;
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>                        
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>"></li> 
                    <?php
                    $i++;
                }
                wp_reset_postdata();
            }
            ?>  
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            // The Query
            $args = array(
                'post_type' => 'slide',
                'order' => 'ASC',
                'orderby' => 'ID',
            );
            $the_query = new WP_Query($args);

            // The Loop
            if ($the_query->have_posts()) {
                $i = 0;
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <div class="item <?php
                    if ($i == 0) {
                        echo 'active';
                    }
                    ?>">
        <?php the_post_thumbnail('slide'); ?>
                        <div class="container">
                            <div class="carousel-caption">
                                <p class="caption-description" data-animation="animated"><?php echo get_post_meta(get_the_ID(), 'slider_description_text', true); ?>.</p>
        <?php $url_value = esc_url(get_post_meta(get_the_ID(), 'slider_button_text_url', true)); ?>
                                <a class="caption-btn" href="<?php echo $url_value; ?>" data-animation="animated"><?php echo get_post_meta(get_the_ID(), 'slider_button_text', true) ?> <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            }
            ?>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div id="carouselButtons">
            <button id="playButton" type="button" class="btn btn-default btn-xs">
                <span class="glyphicon glyphicon-play"></span>
            </button>
            <button id="pauseButton" type="button" class="btn btn-default btn-xs">
                <span class="glyphicon glyphicon-pause"></span>
            </button>
        </div>
    </div>
</section><!--/#banner-->
<!--<div id="mainCarousel" class="carousel slide d-none d-lg-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slide-1.jpg" alt="slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Ristos Place is a proud to announce we are a Pittsburgh Steelers themed restaurant!</h3>
                        <a class="btn btn-carousel" href="#">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide-2.jpg" alt="slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="display-4">Welcome to the Risto’s Place</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        <a class="btn btn-carousel" href="#">Read More</a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>-->