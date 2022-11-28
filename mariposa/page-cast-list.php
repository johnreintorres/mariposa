<?php get_header();?>



    
<section>
      <div class="cast-list-bg">
            <div class="cast-section">
              <h2 data-aos="fade-right"  data-aos-offset="500" data-aos-duration="500" class="cast-title">CAST LIST</h2>
            <div class="cast-layout">

            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 30,
                          'category_name'=>'uncategorized',
                          'paged' => $paged);
                      $arr_posts = new WP_Query($args);
                      if ($arr_posts->have_posts()):
                          while ($arr_posts->have_posts()):
                              $arr_posts->the_post();?>
                <a class="news-link" href="<?php the_permalink(); ?>" id="post-<?php the_ID();?>" <?php post_class();?>>
                    <div data-aos="zoom-in-down" class="">
                        <div class="" >
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
          
        </div> 
         
<?php get_footer();?>
