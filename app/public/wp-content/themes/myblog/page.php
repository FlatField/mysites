<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Navigation -->
  <?php get_template_part('includes/nav'); ?>


  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>


  <!-- Page Header -->
  <?php $eyecatch = get_eyecatch_with_default(); ?>

  <header class="masthead" style="background-image: url('<?php echo $eyecatch[0];?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
      </div>
    </div>
  </div>

  <hr>
  
  <?php endwhile; ?>
  <?php endif; ?>

  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>

</body>

</html>