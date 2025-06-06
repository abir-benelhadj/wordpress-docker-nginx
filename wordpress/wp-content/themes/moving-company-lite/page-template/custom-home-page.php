<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'moving_company_lite_before_slider' ); ?>

  <?php if( get_theme_mod( 'moving_company_lite_slider_arrows', false) == 1 || get_theme_mod( 'moving_company_lite_resp_slider_hide_show', true) == 1) { ?>
    <section id="home-slider-section">
      <?php if(get_theme_mod('moving_company_lite_slider_type', 'Default slider') == 'Default slider' ){ ?>
      <div class="container-fluid p-0">
        <div class="row m-0">
          <?php if( get_theme_mod( 'moving_company_lite_social_media') != '') { ?>
            <div class="col-lg-1 col-md-1 social-media position-relative">
              <?php dynamic_sidebar('social-links'); ?>
            </div>
          <?php }?>
          <div class="p-0 <?php if(get_theme_mod('moving_company_lite_social_media')) { ?>col-lg-11 col-md-11" <?php } else { ?>col-lg-12 col-md-12" <?php } ?>">
            <div id="slider">
               <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'moving_company_lite_slider_speed',4000)) ?>"> 
                <?php $moving_company_lite_pages = array();
                  for ( $count = 1; $count <= 3; $count++ ) {
                    $mod = intval( get_theme_mod( 'moving_company_lite_slider_page' . $count ));
                    if ( 'page-none-selected' != $mod ) {
                      $moving_company_lite_pages[] = $mod;
                    }
                  }
                  if( !empty($moving_company_lite_pages) ) :
                    $args = array(
                      'post_type' => 'page',
                      'post__in' => $moving_company_lite_pages,
                      'orderby' => 'post__in'
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                      $i = 1;
                ?>     
                <div class="carousel-inner" role="listbox">
                  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                      <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                      } else{?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
                      <?php } ?>
                      <div class="carousel-caption">
                        <div class="inner_carousel">
                          <h1 class="wow rollIn delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                          <p class="wow rollIn delay-1000" data-wow-duration="2s"><?php $moving_company_lite_excerpt = get_the_excerpt(); echo esc_html( moving_company_lite_string_limit_words( $moving_company_lite_excerpt, esc_attr(get_theme_mod('moving_company_lite_slider_excerpt_number','30')))); ?></p>
                          <?php
                            $moving_company_lite_button_text = get_theme_mod('moving_company_lite_slider_button_text','READ MORE');
                            $moving_company_lite_button_link = get_theme_mod('moving_company_lite_top_button_url', '');
                            if (empty($moving_company_lite_button_link)) {
                              $moving_company_lite_button_link = get_permalink();
                            }
                            if ($moving_company_lite_button_text || !empty($moving_company_lite_button_link)) { ?>
                            <div class="more-btn wow rollIn delay-1000" data-wow-duration="2s">
                              <?php if( get_theme_mod('moving_company_lite_slider_button_text','READ MORE') != ''){ ?>
                                <a href="<?php echo esc_url($moving_company_lite_button_link); ?>">
                                <?php echo esc_html($moving_company_lite_button_text); ?>
                                  <span class="screen-reader-text"><?php echo esc_html($moving_company_lite_button_text); ?></span>
                                </a>
                              <?php } ?>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  <?php $i++; endwhile; 
                  wp_reset_postdata();?>
                </div>
                <?php else : ?>
                    <div class="no-postfound"></div>
                <?php endif;
                endif;?>
                <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
                  <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                  <span class="screen-reader-text"><?php esc_html_e( 'Previous','moving-company-lite' );?></span>
                </a>
                <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
                  <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                  <span class="screen-reader-text"><?php esc_html_e( 'Next','moving-company-lite' );?></span>
                </a>
              </div>
              <div class="clearfix"></div>
              <div class="info-box">
                <div class="row m-0">
                  <div class="col-lg-5 col-md-5 align-self-center">
                    <?php if( get_theme_mod( 'moving_company_lite_email_text') != '') { ?>
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-4 align-self-center">
                        <i class="<?php echo esc_attr(get_theme_mod('moving_company_lite_email_icon','fas fa-paper-plane')); ?>"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-8 align-self-center">
                        <h2><?php echo esc_html(get_theme_mod('moving_company_lite_email_text',''));?></h2>
                        <p><a href="mailto:<?php echo esc_attr(get_theme_mod('moving_company_lite_email_address',''));?>"><?php echo esc_html(get_theme_mod('moving_company_lite_email_address',''));?></a></p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <div class="col-lg-7 col-md-7 align-self-center">
                    <?php if( get_theme_mod( 'moving_company_lite_opening_time_text') != '') { ?>
                    <div class="row">
                      <div class="col-lg-2 col-md-2 col-4 align-self-center">
                        <i class="<?php echo esc_attr(get_theme_mod('moving_company_lite_timing_icon','fas fa-clock')); ?>"></i>
                      </div>
                      <div class="col-lg-10 col-md-10 col-8 align-self-center">
                        <h2><?php echo esc_html(get_theme_mod('moving_company_lite_opening_time_text',''));?></h2>
                        <p><?php echo esc_html(get_theme_mod('moving_company_lite_opening_time',''));?></p>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
        <?php } else if(get_theme_mod('moving_company_lite_slider_type', 'Advance slider') == 'Advance slider'){?>
          <?php echo do_shortcode(get_theme_mod('moving_company_lite_advance_slider_shortcode')); ?>
        <?php } ?>
    </section>

  <?php } ?>

  <?php do_action( 'moving_company_lite_after_slider' ); ?>

  <?php if( get_theme_mod('moving_company_lite_our_services') != ''){ ?>
    <section id="serv-section" class="wow bounceInUp delay-1000" data-wow-duration="2s">
      <div class="container">
        <?php if( get_theme_mod( 'moving_company_lite_section_title') != '') { ?>
          <h3><?php echo esc_html(get_theme_mod('moving_company_lite_section_title',''));?></h3>
        <?php } ?>
        <div class="row">
          <?php
            $moving_company_lite_catData =  get_theme_mod('moving_company_lite_our_services','');
            if($moving_company_lite_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($moving_company_lite_catData,'moving-company-lite'))); ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
            <div class="col-md-4 col-sm-6">
              <div class="box">
                <?php the_post_thumbnail(); ?>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
                <p><?php $moving_company_lite_excerpt = get_the_excerpt(); echo esc_html( moving_company_lite_string_limit_words( $moving_company_lite_excerpt, esc_attr(get_theme_mod('moving_company_lite_services_excerpt_number','30')))); ?></p>
              </div>
            </div>
            <?php endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'moving_company_lite_after_second_section' ); ?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>