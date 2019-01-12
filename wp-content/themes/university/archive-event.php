<?php get_header();

 pageBanner(array(
 'title' => 'All Events',
  'subtitle' => 'See what is goin on in our world.',
  'photo' => 'https://croatia.hr/sites/default/files/styles/image_full_width/public/2017-08/02_01_slide_nature.jpg?itok=ItAHmLlp'
));

?>


<div class="container container--narrow page-section">



<?php
while(have_posts()){
  the_post();

  get_template_part('template-parts/content', 'event');

 } ?>
<?php echo paginate_links(); ?>
<hr class="section-break">
<p><a href="<?php echo site_url('/past-events')?>">Past Events</a></p>


</div>

  <?php get_footer();

?>
