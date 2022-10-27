<?php  get_header(); 
require_once('components/navbar.inc.php');
?>
   <!-- <header class="site-header">
    <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>
    </p>
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
</header>-->

<section class="pt-5">
    <div class="container">
        <div class="row site-content pt-5">
            <div class="col-sm-3">
                <?php echo do_shortcode( '[woof]' ); ?>
                  <!-- <?php echo do_shortcode('[fe_widget title="Looking to gift Someone?" id="85" show_selected="yes" show_count="yes"]'); ?>
                    <?php echo do_shortcode('[fe_widget title="" id="87" show_selected="yes" show_count="yes"]'); ?> -->
            </div>
    <?php
    if ( have_posts() ) :
    
        while ( have_posts() ) :
    
            the_post();
            ?>
    <div class="col-sm-9">
            <article <?php post_class(); ?>>

                
            
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
            
                <div class="entry-content">
                    <?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
                </div><!-- .entry-content -->
            
            </article><!-- #post-## -->
            </div>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
    
        endwhile;
    
    else :
        ?>
<div class="col-sm-9">
            <article class="no-results">
            
            <header class="entry-header">
                <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'my-custom-theme' ); ?></h1>
            </header><!-- .entry-header -->
        
            <div class="entry-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'my-custom-theme' ); ?></p>
            </div><!-- .entry-content -->
        
        </article><!-- .no-results -->
</div>
    <?php
    endif;
    ?>
</div><!-- .site-content -->
    </div>
</section>

<?php  get_footer(); ?>