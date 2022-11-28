<?php get_header();?>
<section>
      <div class="header-bg">
        <div class="light-bg">
          <img data-aos="fade-up"  data-aos-duration="1000" class="mari-logo" src="<?php echo get_template_directory_uri();?>/assets/images/MARI.png" alt="">
        </div>
      </div>
    </section>
    <section>
      <div class="bg">
        <div class="cast-section">
            <h2 data-aos="fade-right"  data-aos-offset="500" data-aos-duration="500" class="cast-list-title">CAST LIST</h2>
          <div class="cast-layout">
          <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 30,
                          'category_name' => 'uncategorized',
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
                  <a data-aos="zoom-in-up" class="button btn" href="<?php echo site_url(''); ?>/wordpress/cast-list">Cast List</a>
          
          </div>

        </div>
        <div class="diary-section">
            <h2 data-aos="fade-right"  data-aos-offset="500" data-aos-duration="500" class="diary-list-title">DIARY</h2>
            <div class="diary-layout">
            <div class="diary-content">
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                      $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 30,
                          'category_name' => 'diary',
                          'paged' => $paged);
                      $arr_posts = new WP_Query($args);
                      if ($arr_posts->have_posts()):
                          while ($arr_posts->have_posts()):
                              $arr_posts->the_post();?>
                <a class="" href="<?php the_permalink(); ?>" id="post-<?php the_ID();?>" <?php post_class();?>>
                <div data-aos="fade-left" class="diary-content-layout" >
                        <?php if(has_post_thumbnail()) {?>
                    <img class="diary-1" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <?php } ?>
                <div>
              <h1 class="diary-title"><?php the_title();?></h1>
              <p><?php get_the_content();?></p>
              <p class="diary-tags"><?php the_tags(); ?><p>
            </div>
            </div>
            </a>
                <?php
                endwhile;
                endif;
                        ?>   
              </div>
              
              <a data-aos="zoom-in-up" class="button btn" href="<?php echo site_url(''); ?>/wordpress/diary-list">Diary List</a>
          </div>
          </div>
        </div>

          <section>
              <div class="second-section">
                <h1 data-aos="flip-right">新店の応募もこちらからお問合せ下さい</h1>
              </div>
            </section>
            <section>
              <div class="bg2">
            <div class="rooms-section">
            <h2 data-aos="fade-right"  data-aos-offset="500" data-aos-duration="500" class="rooms-title-index">Rooms</h2>
            <div class="rooms-layout">
              <div data-aos="zoom-in-down"><img class="rooms-1" src="<?php echo get_template_directory_uri();?>/assets/images/Image 1.png" alt=""></div>
              <div class="rooms-content">
              <div data-aos="zoom-in-right" class="rooms-spacing"><img class="rooms" src="<?php echo get_template_directory_uri();?>/assets/images/Mask Group 1.png" alt=""></div>
              <div data-aos="zoom-in-up" class="rooms-spacing"><img class="rooms" src="<?php echo get_template_directory_uri();?>/assets/images/Mask Group 2.png" alt=""></div>
              <div data-aos="zoom-in-up" class="rooms-spacing"><img class="rooms" src="<?php echo get_template_directory_uri();?>/assets/images/Mask Group 3.png" alt=""></div>
              <div data-aos="zoom-in-left" class="rooms-spacing"><img class="rooms" src="<?php echo get_template_directory_uri();?>/assets/images/Mask Group 4.png" alt=""></div>
            </div>
                  <a data-aos="zoom-in-up" class="button btn" href="<?php echo site_url(''); ?>/wordpress/rooms">View Rooms</a>
          </div>
          </div>
          <div class="fourty-layout">
            <img data-aos="fade-right" class="fourty-img" src="<?php echo get_template_directory_uri();?>/assets/images/fourtyfive-1.png" alt="">
            <img data-aos="fade-left" class="fourty-img" src="<?php echo get_template_directory_uri();?>/assets/images/fourtyfive-2.png" alt="">

          </div>
          <div class="access-section">
            <h2 data-aos="fade-right"  data-aos-offset="500" data-aos-duration="500" class="access-title">ACCESS</h2>
            <div  class="access-layout">
              <table data-aos="fade-up" data-aos-duration="2000" class="table-layout">
                <tr>
                  <th>住所</th>
                  <td>
                   <p>東京都新宿区歌舞伎町1-9-6 三経32ビル2F</p> 
                  </td>
                </tr>
                <tr>
                  <th>電話番号</th>
                  <td>
                    <p>03-5155-5245（店舗 20:00～LAST</p>
                  </td>
                </tr>
                <tr>
                  <th>営業時間</th>
                  <td>
                    <p>20:00～LAST</p>
                    </td>
                </tr>
                <tr>
                  <th>最寄駅</th>
                  <td>
                    <p>各線【新宿駅】徒歩3分</p>
                    <p>西武新宿線【西武新宿駅】徒歩3分</p>
                  </td>
                </tr>
              </table>
              <div data-aos="fade-down" data-aos-duration="2000" class="map-layout">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.678658113327!2d121.01501665007862!3d14.560359689778151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9096ec55555%3A0xaf0d621b7e9c77c1!2sCityland%2010%20Tower%202!5e0!3m2!1sen!2sph!4v1589942603286!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
          </div>
          </div>
        </div>
        </section>
    </section>
<?php get_footer();?>
