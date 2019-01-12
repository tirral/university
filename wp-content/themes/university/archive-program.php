<?php get_header();

pageBanner(array(
'title' => 'All Programs',
 'subtitle' => 'The is somting for everyone. Have a look around.',
 'photo' => 'https://croatia.hr/sites/default/files/styles/image_full_width/public/2017-08/02_01_slide_nature.jpg?itok=ItAHmLlp'
));

?>


<div class="container container--narrow page-section">

<ul class="link-list min-list">
<?php
while(have_posts()){
  the_post(); ?>

<li>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>

<?php } ?>
<?php echo paginate_links(); ?>

</ul>


</div>
  <?php get_footer();
?>
