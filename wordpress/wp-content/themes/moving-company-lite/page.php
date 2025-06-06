<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Moving Company Lite
 */

get_header(); ?>

<?php do_action( 'moving_company_lite_page_top' ); ?>
 
<div class="container">
    <main id="maincontent" role="main" class="middle-align">
        <?php $moving_company_lite_theme_lay = get_theme_mod( 'moving_company_lite_page_layout','One Column');
            if($moving_company_lite_theme_lay == 'One Column'){ ?>
                <?php if(get_theme_mod('moving_company_lite_single_page_breadcrumb',true) == 1){ ?>
                    <div class="breadcrumbs">
                        <?php moving_company_lite_the_breadcrumb(); ?>
                    </div>
                <?php }?>
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-page'); 
                endwhile; ?>
        <?php }else if($moving_company_lite_theme_lay == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <?php if(get_theme_mod('moving_company_lite_single_page_breadcrumb',true) == 1){ ?>
                        <div class="breadcrumbs">
                            <?php moving_company_lite_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        <?php }else if($moving_company_lite_theme_lay == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
                <div class="col-lg-8 col-md-8">
                    <?php if(get_theme_mod('moving_company_lite_single_page_breadcrumb',true) == 1){ ?>
                        <div class="breadcrumbs">
                            <?php moving_company_lite_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
                </div>
            </div>
        <?php }else {?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <?php if(get_theme_mod('moving_company_lite_single_page_breadcrumb',true) == 1){ ?>
                        <div class="breadcrumbs">
                            <?php moving_company_lite_the_breadcrumb(); ?>
                        </div>
                    <?php }?>
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        <?php } ?>
        <?php echo esc_html (moving_company_lite_edit_link()); ?>
    </main>
</div>

<?php do_action( 'moving_company_lite_page_bottom' ); ?>

<?php get_footer(); ?>