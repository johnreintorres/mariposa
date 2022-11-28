<?php get_header();?>

<div class="cast-bg">
<div class="cast-layout-1">
    <h1 data-aos="fade-down" data-aos-duration="500" class="cast-title-1"><?php the_title(); ?></h1>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php endwhile; else : endif; ?>
      <?php if(has_post_thumbnail()): ?>
      <div data-aos="zoom-in-down" data-aos-duration="1000" class="cast-layout-2">
        <img src=" <?php the_post_thumbnail_url('post_image') ?>" class="post-image img-fluid mb-5" alt="">
        
        <?php the_content(); ?>
       

        </div>
      </div>
      <section>
        <div class="cast-recruit">
          <h2 data-aos="fade-down" data-aos-duration="500" class="cast-recruit-text">CAST RECRUIT</h2>
          <img data-aos="flip-right" data-aos-duration="500" class="fourty-img" src="<?php echo get_template_directory_uri();?>/assets/images/fourtyfive-1.png">
        </div>
            <div class="cast-section">
            <h2  data-aos="fade-down" data-aos-duration="500" class="cast-recruit-text">CAST LIST</h2>
            <div class="cast-layout">

            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 30,
                          'category_name'=> 'uncategorized',
                          'paged' => $paged);
                      $arr_posts = new WP_Query($args);
                      if ($arr_posts->have_posts()):
                          while ($arr_posts->have_posts()):
                              $arr_posts->the_post();?>
                <a class="news-link" href="<?php the_permalink(); ?>" id="post-<?php the_ID();?>" <?php post_class();?>>
                    <div class="">
                        <div data-aos="zoom-in-down" class="" >
                        <?php if(has_post_thumbnail()) {?>
                    <img class="cast-1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <?php } ?>
                           <p class="cast"><?php the_title();?> </p>
                           
                        </div>
                    </div>
                </a>
                <?php
                endwhile;
                endif;
                        ?>      
          </div>
          
        </div> 
<?php endif; ?>
</div> 
    


    <?php get_footer();?>
 