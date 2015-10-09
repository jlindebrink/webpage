<?php get_header(); ?>    


       <div id="upcoming">
  



<table style="width:100%; letter-spacing: 0.2em; line-height:3em; font-size:0.9em; margin-top: 3em;"> 

  <tr>
    <td> Talk: Auralization - methodology and practice</td>
    <td> Marshall Day Acoustics, Auckland, NZ</td>
    <td> November 23</td>
  </tr>

  <tr>
    <td> Talk: Auralizations in acoustical research and artistic practices</td>
    <td> University of Auckland, NZ</td>
    <td> November 19</td>
  </tr>
    
    <tr>
    <td> Paper: Auralization and visualization through game engines</td>
    <td> Acoustics2015, Hunter Valley, AU</td>
    <td> November 15</td>
  </tr>
  
      <tr>
    <td> Performance: ~tilde - Polish experimental music in Scandinavia</td>
    <td> Fylkingen, Stockholm, SE</td>
    <td> October 1</td>
  </tr>
  
      <tr>
    <td> Entities - Showing/Work in progress</td>
    <td> Studio 12, Uferstudios, Berlin, DE</td>
    <td> September 1</td>
  </tr>
  
      <tr>
    <td> Entities - Artistic residency w/ <a href="http://mirkoguido.com/" target="_blank">Mirko Guido</a> </td>
    <td> Uferstudios, Berlin, DE</td>
    <td> September 1-30</td>
  </tr>
 

</table> 

<p style="letter-spacing: 0.2em; margin-left:0.2em; margin-top:0em;"><a href="http://www.josefinlindebrink.com/calendar/">[...]</a></p>
 

</div> 
 
  
  <div id="featured_home_top">
  

   
    
  </div><!--//featured_home_top-->
  
  <div id="content">


<?php
      $args = array(
                   'category_name' => 'featured small',
                   'post_type' => 'post',
                   'posts_per_page' => 18,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );
      query_posts($args);
      $x = 0;
      while (have_posts()) : the_post(); ?>
    
        <?php if($x == 0) { ?>
        <div class="featured_box ">
        <?php } elseif($x == 12) { ?>
        <div class="featured_box ">
        <?php } else { ?>
        <div class="featured_box">
        <?php } ?>
        
          <a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('featured-small'); ?></a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
         <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,170)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 170) echo "..."; ?></p>
       
	   
	    </div><!--//featured_box-->
	    
	    
        
        <?php if($x == 3) { $x=-1; ?>
        <div class="clear"></div>
        <div class="post_divider"></div>
         <!--<div id = "works">
 	 <p style="font-size: 1.2em; font-weight:none; letter-spacing: 0.2em;">WORKS</p>
        </div>-->
        <?php } ?>
      
        <?php $x++; ?>
        
      
      
   
    
    <?php endwhile; ?>
    
    
    

    <div class="clear"></div>
    
 
    
    <div class="nav_container">
      <div class="left"><?php previous_posts_link('\\\ Previous') ?></div>
      <div class="right"><?php next_posts_link('Next //') ?></div>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </div>
    
  </div><!--//content-->
  


<?php get_sidebar(); ?>

<?php get_footer(); ?>