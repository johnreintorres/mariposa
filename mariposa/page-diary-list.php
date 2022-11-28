<?php get_header();?>

<div class="cast-list-bg">

<div class="diary-section">
            <h2 data-aos="fade-right"  data-aos-offset="500" data-aos-duration="500" class="diary-list-title-1">DIARY LIST</h2>
            <div class="diary-layout">
            <div class="diary-content">
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 30,
                          'category_name' => 'diary,diary-1',
                          'paged' => $paged);
                      $arr_posts = new WP_Query($args);
                      if ($arr_posts->have_posts()):
                          while ($arr_posts->have_posts()):
                              $arr_posts->the_post();?>
                <a class="" href="<?php the_permalink(); ?>" id="post-<?php the_ID();?>" <?php post_class();?>>
                <div class="diary-content-layout" >
                        <?php if(has_post_thumbnail()) {?>
                    <img data-aos="flip-right" class="diary-list-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <?php } ?>
                <div data-aos="fade-down" data-aos-duration="1000">
              <h1 class="diary-title"><?php the_title();?></h1>
              <div class="diary-list-content">
              <p><?php get_the_content();?></p>
              <p class="diary-list-tags"><?php the_tags(); ?><p>
              </div>
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
        </div>
        </div>   
<?php get_footer();?>
