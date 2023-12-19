<?php get_header(); ?>
  <main>
    <section class="mainvisual">
      <h2 id="error-name">ページが見つかりません</h2>
      <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/mainvisual.png" alt="">
      </div>
    </section>
    <div class="error-sorry">
      <p><?php _e( '申し訳ありません。ページが見つかりませんでした。' ); ?></p>
    </div>
  </main>
<?php get_footer(); ?>
