<?php get_header(); ?>
<main>
<section class="mainvisual-page">
  <section class="mainvisual">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/mainvisual.png" alt="">
      </div>
    </section>
    <?php the_content(); ?>
  </div>
  <?php endwhile; else : ?>
  <p>
    <?php _e( '申し訳ありません。ページが見つかりませんでした。' ); ?>
  </p>
  <?php endif; ?>
</section>
<?php get_footer(); ?>