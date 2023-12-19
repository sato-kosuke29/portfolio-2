<?php get_header(); ?>
<main>
  <section class="single-top">
    <div class="single-mainvisual">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <img class="mainvisual-pc" src="<?php the_field('top-image-1'); ?>" alt=""> <img class="mainvisual-sp" src="<?php the_field('top-image-2'); ?>" alt=""> </div>
    <div class="top-name">
      <h2>
        <?php the_title(); ?>
      </h2>
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
        $terms = get_the_terms($post->ID, 'category_industry');
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
    </div>
  </section>
  <section class="design">
    <h3>作品について</h3>
    <div class="slider">
      <?php the_field('slider'); ?>
    </div>
    <div class="design-description">
      <div>
        <h3>デザインについて</h3>
        <p>
          <?php the_field('design'); ?>
        </p>
      </div>
      <div>
        <h3>頑張ったこと</h3>
        <p>
          <?php the_field('best-point'); ?>
        </p>
      </div>
      <div>
        <h3>今後の課題</h3>
        <p>
          <?php the_field('assignment'); ?>
        </p>
      </div>
    </div>
    <ul class="page-nav">
    </ul>
    <?php endwhile; else : ?>
    <p>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    </p>
    <?php endif; ?>
  </section>
  <section class="gallery">
    <h2>その他の作品</h2>
    <ul class="gallery-list">
      <?php
      // 同じカテゴリから記事を10件呼び出す
      $terms = get_the_terms( $post->ID, 'category_color', $post->ID, 'category_industry',$post->ID, 'category_site-type',$post->ID, 'category_design');

      $terms_ID = array();

      foreach ( $terms as $term ):
        array_push( $terms_ID, $term->cat_ID );
      endforeach;

      $args = array(
        // 今読んでいる記事を除く
        'post__not_in' => array( $post->ID ),
        'posts_per_page' => 4,
        'terms__in' => $terms_ID,
        // ランダムに記事を選ぶ
        'orderby' => 'rand',
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ):
        while ( $query->have_posts() ):
          $query->the_post();
      ?>
      <li> <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
        <h3>
          <?php the_title(); ?>
        </h3>
        </a>
      </li>
      <?php endwhile; else : ?>
      <p>該当する投稿はありません。</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </section>
</main>
<?php get_footer(); ?>
