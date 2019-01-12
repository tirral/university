<?php get_header();

pageBanner(array(
'title' => 'Our Campuses',
 'subtitle' => 'We have several conveniently located campuses.',
 'photo' => 'https://croatia.hr/sites/default/files/styles/image_full_width/public/2017-08/02_01_slide_nature.jpg?itok=ItAHmLlp'
));

?>


<div class="container container--narrow page-section">



<div class="">
<?php
while(have_posts()){
  the_post();
  $mapLocation = get_field('map_location');
  ?>


<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_content(); ?> </p>




<?php } ?>

<?php echo paginate_links(); ?>
</div>

</div>
  <?php get_footer();
?>
