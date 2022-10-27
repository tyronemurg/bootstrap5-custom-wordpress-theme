<?php  get_header(); 
require_once('components/navbar.inc.php');
?>
   <section class="pt-5">
       
       <div class="container pt-5">
            <?php the_content(); ?>
       </div>
   </section>

<?php  get_footer(); ?>