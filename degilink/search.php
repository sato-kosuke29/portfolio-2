<?php get_header(); ?>
  <main>
    <section class="mainvisual">
      <ul>
        <?php
        $terms = get_the_terms($post->ID, 'category_color');
        if ($terms) :
            foreach ($terms as $term) {
                echo '<li>' . $term->name . '</li>';
            }
        endif;
        ?>
        <?php
        $terms = get_the_terms($post->ID, 'category_site-type');
        if ($terms) :
            foreach ($terms as $term) {
                echo '<li>' . $term->name . '</li>';
            }
        endif;
        ?>
        <?php
        $terms = get_the_terms($post->ID, 'category_design');
        if ($terms) :
            foreach ($terms as $term) {
                echo '<li>' . $term->name . '</li>';
            }
        endif;
        ?>
        </ul>
    </section>
    <section class="gallery">
      <ul class="gallery-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
        </li>
        <?php endwhile; else : ?>
        <p>該当する投稿はありません。</p>
        <?php endif; ?>
      </ul>
      <?php the_posts_pagination( array(
      'mid_size' => 2,
      'prev_text' => __( '前へ' ),
      'next_text' => __( '次へ' ),
    ) ); ?>
    </section>
  </main>
<?php get_footer(); ?>
