<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Moving Company Lite
 */

get_header(); ?>

<div class="container">
    <main id="content" role="main" class="middle-align">
        <header>
            <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','moving-company-lite'), esc_html( get_search_query() ) ); ?></h1> 
        </header>
        <?php
            $moving_company_lite_theme_lay = get_theme_mod( 'moving_company_lite_theme_options','Right Sidebar');
            if($moving_company_lite_theme_lay == 'Left Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
                    <div id="our-services" class="services col-lg-8 col-md-8">
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format());
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            <?php }else if($moving_company_lite_theme_lay == 'Right Sidebar'){ ?>
                <div class="row">
                    <div id="our-services" class="services col-lg-8 col-md-8">
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
                </div>
            <?php }else if($moving_company_lite_theme_lay == 'One Column'){ ?>
                <div id="our-services" class="services">
                    <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                          <div class="navigation">
                            <?php moving_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                          </div>
                        <?php } ?>
                    <?php } ?>
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content',get_post_format()); 
                        endwhile;

                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                          <div class="navigation">
                            <?php moving_company_lite_blog_posts_pagination(); ?>
                              <div class="clearfix"></div>
                          </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php }else if($moving_company_lite_theme_lay == 'Three Columns'){ ?>
                <div class="row">
                    <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-6 col-md-6">
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>
            <?php }else if($moving_company_lite_theme_lay == 'Four Columns'){ ?>
                <div class="row">
                    <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div id="our-services" class="services col-lg-3 col-md-3">
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            <?php }else if($moving_company_lite_theme_lay == 'Grid Layout'){ ?>
                <div class="row">
                    <div id="our-services" class="services col-lg-9 col-md-9">
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                        <div class="row">
                            <?php if ( have_posts() ) :
                            /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/grid-layout' ); 
                                endwhile;

                                else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                        </div>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php }else{ ?>
               <div class="row">
                    <div id="our-services" class="services col-lg-8 col-md-8"> 
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                        <?php if ( have_posts() ) :
                        /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content',get_post_format()); 
                            endwhile;

                            else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'moving_company_lite_blog_post_pagination_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'moving_company_lite_blog_pagination_hide_show',true) == 1) { ?>
                              <div class="navigation">
                                <?php moving_company_lite_blog_posts_pagination(); ?>
                                  <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
                </div>
            <?php } ?>
        <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>