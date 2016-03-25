<footer class="site-footer row-fluid">
  <?php $query = new WP_Query(array( 'posts_per_page' => 3)); ?>
  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
  <li class="footer-blog__list-item">
    <a class="footer-blog__link" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
  <?php endwhile; endif; wp_reset_postdata(); ?>
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>
