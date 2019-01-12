<?php get_header();

pageBanner(array(
'title' => 'Search Results',
 'subtitle' => 'You search for ' . get_search_query() . '',
 'photo' => 'https://croatia.hr/sites/default/files/styles/image_full_width/public/2017-08/02_01_slide_nature.jpg?itok=ItAHmLlp'
));
?>

<div class="container container--narrow page-section">

<?php

if(have_posts()){

  while(have_posts()){
  the_post();

  get_template_part('template-parts/content', get_post_type());

   } ?>
  <?php echo paginate_links();

} else {

echo '<h2 class="headline headline--small-plus"> No results match that serch.</h2>';

}

get_search_form();

?>






</div>
  <?php get_footer();

?>
