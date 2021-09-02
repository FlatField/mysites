<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Navigation -->
  <?php get_template_part('includes/nav'); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <!-- Page Header -->
      <?php $eyecatch = get_eyecatch_with_default(); ?>

      <header class="masthead" style="background-image: url('<?php echo $eyecatch[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  on <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail(array(32, 32), array('alt' => 'アイキャッチ画像')); ?>
              <?php the_content(); ?>
              </p>
            </div>
          </div>
        </div>
      </article>

      <hr>

    <?php endwhile; ?>
  <?php endif; ?>
  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>