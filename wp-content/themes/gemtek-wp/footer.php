<?php wp_footer();?>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-1 text-center text-md-start">
            <img src="<?php bloginfo('template_url'); ?>/dist/images/gemtek.png" alt="">
          </div>
          <div class="col-md-5 col-lg-3 ms-auto order-md-4 mb-3 mb-md-0">
            <h5 class="text-light text-center text-md-start my-3 mt-md-0">Subscribe to our Newsletter</h5>
            <div class="input-group mb-3">
              <input type="text" class="form-control form--newsletter" placeholder="Email Address" aria-label="Email Address" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary btn--newsletter" type="button" id="button-addon2">
                <img src="<?php bloginfo('template_url'); ?>/dist/images/arrow-forward.svg" alt="">
              </button>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center text-md-start mb-3 mb-md-0">
            <h5 class="text-light">Solutions</h5>
            <ul class="list-unstyled text-small">
            <?php
              $i = 1;
                $args2 = array(
                  'post_type' => 'solutions',
                  'post_status' => 'publish',
              );
              $arr_posts2 = new WP_Query( $args2 );

              if ( $arr_posts2->have_posts() ) :  
              while ( $arr_posts2->have_posts() ) :
              $arr_posts2->the_post();
            ?>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#modal-<?php echo $i++;?>" data-bs-toggle="modal"><?php the_title();?></a></li>
              <?php
                    endwhile;
                endif;
                wp_reset_query();
              ?>
            </ul>
          </div>
          <div class="col-md-3 col-lg-2 text-center text-md-start">
            <h5 class="text-light">Company</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#about">About Company</a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>

    <?php
        $args2 = array(
          'post_type' => 'solutions',
          'post_status' => 'publish',
      );
      $arr_posts2 = new WP_Query( $args2 );
    ?>
    <?php
      $i = 1;
      if ( $arr_posts2->have_posts() ) :  
      while ( $arr_posts2->have_posts() ) :
      $arr_posts2->the_post();
      ?>
    <!-- Modal -->
    <div class="modal fade" id="modal-<?php echo $i++;?>" tabindex="-1" aria-labelledby="SampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?php the_title();?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 order-lg-2 align-self-center">
                  <!-- <img src="https://dummyimage.com/1600x1000/ddd/333" class="img-fluid border-radius-10 shadow-2 mb-3 mb-md-0" alt="..."> -->
                  <?php
                  if ( has_post_thumbnail() ) :
                      the_post_thumbnail('single-feature', array('class' => 'img-fluid border-radius-10 shadow-2 mb-3 mb-md-0'));
                  endif;
                ?>
                </div>
                <div class="col-md-6 order-lg-1 align-self-center text-center text-md-start">
                  <h2 class="fs-2 fw-bold"><?php the_title();?></h2>
                  <p><?php the_content();?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?php
          endwhile;
      endif;
      wp_reset_query();
    ?>
    
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/vendor.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/dist/scripts/main.js"></script>
  </body>
</html>
