<!--Slider-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


   <div class="carousel-inner">
        <?php $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 100; // -1 shows all posts
        $args = array(
            'post_type' => 'slider',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<!--contenido--->

              <div class="carousel-item <?php if ($active) {print("active");} ?>">
                    <?php $active = false;
                    $custom = get_post_custom($post->ID);
                    $url = $custom["url"][0];
                    $url_open = $custom["url_open"][0];
                    $custom_title = "#" . $post->ID;
                    ?>
<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="<?php echo get_the_excerpt(); ?>" class="d-block w-100">
                </div>

                
<!--contenido--->
      
      <?php endwhile;
        else : ?>

        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>


    </div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>