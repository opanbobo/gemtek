<?php get_header() ;?>
<?php /* Template Name: Home Template */ ?>
<?php
    $home1 = get_field('column_headline');  ?>
    <header class="d-flex flex-column align-items-center justify-content-center" style="background-image: url(<?php echo esc_url( $home1['background_img']['url'] ); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-light ">
            <h1 class="fw-bold mb-4"><?php echo $home1['headline']; ?></h1>
            <a href="#" class="btn btn-primary text-uppercase fs-5 d-none d-md-inline-block mb-5">EXPLORE OUR SOLUTION</a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <section id="about" class="about">
      <?php
      $home2 = get_field('column_about');  ?>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 align-self-center">
              <div class="ratio ratio-16x9 mb-5 mb-md-0">
                <iframe class="border-radius-10 shadow" src="https://www.youtube.com/embed/<?php echo $home2['youtube']; ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-lg-6 col-md-7 align-self-end text-center text-md-start">
              <h2 class="fs-2 fw-bold"><?php echo $home2['title']; ?></h2>
              <p><?php echo $home2['descriptions']; ?></p>
            </div>
          </div>
        </div>
      </section>
      
      <section id="feature" class="feature">
        <div class="container">
        <?php
            $args2 = array(
              'post_type' => 'solutions',
              'post_status' => 'publish',
              'post_per_page' => 3
          );
          $arr_posts2 = new WP_Query( $args2 );
        ?>
          <div class="row gy-4">
          <?php
            $i = 1;
            if ( $arr_posts2->have_posts() ) :  
            while ( $arr_posts2->have_posts() ) :
            $arr_posts2->the_post();
            ?>
            <div class="col-md-4">
              <div class="card border-radius-10 shadow-2">
                <?php
                  if ( has_post_thumbnail() ) :
                      the_post_thumbnail('single-feature', array('class' => 'card-img-top'));
                  endif;
                ?>
                <div class="card-body text-center px-4">
                  <h2 class="card-title fs-2 fw-bold"><?php the_title();?></h2>
                  <p class="card-text my-4 fs-5 h-100"><?php echo excerpt(20); ?></p>
                  <div class="d-grid gap-2">
                    <a href="#modal-<?php echo $i++;?>" data-bs-toggle="modal" class="btn btn-outline-secondary btn-block px-5">LEARN MORE</a>
                  </div>                  
                </div>
              </div>
            </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
          </div>
          
          <?php
          $home3 = get_field('column_after_solutions');  ?>
          <div class="row my-150">
            <div class="col-md-6 order-lg-2 align-self-center">
              <img src="<?php echo esc_url( $home3['img']['url'] ); ?>" class="img-fluid border-radius-10 shadow-2 mb-3 mb-md-0" alt="...">
            </div>
            <div class="col-md-6 order-lg-1 align-self-center text-center text-md-start">
              <h2 class="fs-2 fw-bold"><?php echo $home3['title']; ?></h2>
              <p><?php echo $home3['descriptions']; ?></p>
            </div>
          </div>
        </div>
      </section>

      <section class="article">
        <div class="container">
          <div class="col-12 text-center mb-4">
            <h2 class="fs-2 fw-bold">Read Some Articles</h2>
          </div>
          <?php
              $args = array(
                'post_type' => 'article',
                'post_status' => 'publish',
            );
            $arr_posts = new WP_Query( $args );
          ?>
          <div class="slider-article">
            <?php
            if ( $arr_posts->have_posts() ) :  
            while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
            <div class="col-md-3">
              <a href="<?php the_permalink(); ?>">
                <div class="card border-radius-10 shadow-2">
                  <!-- <img src="https://dummyimage.com/1600x1200/ddd/333" class="card-img-top" alt="..."> -->
                  <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail('medium', array('class' => 'card-img-top'));
                    endif;
                  ?>
                  <div class="card-body">
                    <h2 class="card-title fs-5 fw-bold"><?php the_title();?></h2>
                    <p class="card-text my-4 fs-6 h-100"><?php echo excerpt(20); ?></p>
                  </div>
                </div>
              </a>
            </div>
            <?php
                endwhile;
            endif;
            ?>

          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>