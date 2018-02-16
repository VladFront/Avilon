<?php get_header(); ?>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <?php
            $idObj = get_category_by_slug('intro');
            $id = $idObj->term_id;
            $post = get_post($id);
            if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
              <div class="intro-text">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <a href="#about" class="btn-get-started scrollto"><?php the_field('intro_btn_text'); ?></a>
              </div>

              <div class="product-screens">
                <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
                  <?php 
                  $image = get_field('intro_img1');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>

                <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
                  <?php 
                  $image = get_field('intro_img2');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>

                <div class="product-screen-3" data-aos="fade-up">
                  <?php 
                  $image = get_field('intro_img3');
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
              </div>
            <? endwhile; endif; wp_reset_query(); ?>
    
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <?php
              $idObj = get_category_by_slug('about');
              $id = $idObj->term_id;
              $post = get_post($id);
          ?>
          <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
          <span class="section-divider"></span>
          <div class="section-description">
            <?php echo category_description($id);?>
          </div>
        </div>
        <?php
          $idObj = get_category_by_slug('about');
          $id = $idObj->term_id;
          if ( have_posts() ) : query_posts('cat=' . $id);
          while (have_posts()) : the_post(); ?>
            <div class="row">
              <div class="col-lg-6 about-img" data-aos="fade-right">
                <?php 
                $image = get_field('about_img');
                if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
              </div>

              <div class="col-lg-6 content" data-aos="fade-left">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_field('about_subtitle'); ?></h3>
                <?php the_content(); ?>
                <?php if( have_rows('about_list') ): ?>
                  <ul>
                    <?php while( have_rows('about_list') ): the_row(); ?>
                      <li><i class="ion-android-checkmark-circle"></i><?php the_sub_field('about_list_item'); ?></li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                <?php the_field('about_text'); ?>
              </div>
            </div>
          <? endwhile; endif; wp_reset_query(); ?> 
      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header" data-aos="fade" data-aos-duration="1000">
              <?php
                $idObj = get_category_by_slug('featuress');
                $id = $idObj->term_id;
                $post = get_post($id);
              ?>
              <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
              <span class="section-divider"></span>
            </div>
          </div>
            <?php
              $idObj = get_category_by_slug('featuress-img');
              $id = $idObj->term_id;
              if ( have_posts() ) : query_posts('cat=' . $id);
              while (have_posts()) : the_post(); ?>
              <div class="col-lg-4 col-md-5 features-img">
                <?php the_post_thumbnail( $size = 'full', 'data-aos=fade-right&data-aos-easing=ease-out-back&alt=trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ));'); ?>
              </div>
              <? endwhile; endif; wp_reset_query(); ?>
          
          <div class="col-lg-8 col-md-7 ">

            <div class="row">
              <?php
              $idObj = get_category_by_slug('featuress');
              $id = $idObj->term_id;
              if ( have_posts() ) : query_posts('cat=' . $id);
              while (have_posts()) : the_post(); ?>
                <div class="col-lg-6 col-md-6 box" data-aos="fade-left" data-aos-delay="<?php the_field('featuress_speed'); ?>">
                  <div class="icon"><i class="<?php the_field('featuress_icon'); ?>"></i></div>
                  <h4 class="title"><a href=""><?php the_title() ?></a></h4>
                  <div class="description">
                    <?php the_content() ?>
                  </div>
                </div>
              <? endwhile; endif; wp_reset_query(); ?>          
            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">
      <?php
        $idObj = get_category_by_slug('featuress-news');
        $id = $idObj->term_id;
        if ( have_posts() ) : query_posts('cat=' . $id);
        while (have_posts()) : the_post(); ?>
          <div class="features-row">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <?php 
                  $image = get_field('featuress-news_img');
                  if( !empty($image) ): ?>
                    <img class="<?php the_field('featuress-news_direction'); ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-aos="<?php the_field('featuress-news_img-direction'); ?>" />
                  <?php endif; ?>
                  <div data-aos="<?php the_field('featuress-news_animation'); ?>">
                    <h2><?php the_title(); ?></h2>
                    <h3><?php the_field('featuress-news_subtitle'); ?></h3>
                    <?php the_content(); ?>
                    <?php if( have_rows('featuress-news_list') ): ?>
                        <?php while( have_rows('featuress-news_list') ): the_row(); ?>
                          <?php if( have_rows('featuress-news_list-item') ): ?>
                              <?php while( have_rows('featuress-news_list-item') ): the_row(); ?>
                                <i class="<?php the_sub_field('featuress-news_list-item-icon'); ?>" data-aos="<?php the_field('featuress-news_animation'); ?>"></i>
                                <p data-aos="<?php the_field('featuress-news_animation'); ?>"><?php the_sub_field('featuress-news_list-item-text'); ?></p>
                              <?php endwhile; ?>
                          <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <? endwhile; endif; wp_reset_query(); ?>        

    </section><!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <?php
          $idObj = get_category_by_slug('cta');
          $id = $idObj->term_id;
          if ( have_posts() ) : query_posts('cat=' . $id);
          while (have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title"><?php the_title() ?></h3>
              <div class="cta-text">
                <?php the_content() ?>
              </div>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_link_text'); ?></a>
            </div>
          </div>
          <? endwhile; endif; wp_reset_query(); ?>        
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">
        <?php
            $idObj = get_category_by_slug('more-features');
            $id = $idObj->term_id;
            $post = get_post($id);
        ?>
        <div class="section-header">
          <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
          <span class="section-divider"></span>
          <div class="section-description">
            <?php echo category_description($id);?>
          </div> 
        </div>

        <div class="row">
          <?php
            if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
            <div class="col-lg-6">
              <div class="box" data-aos="<?php the_field('more-features_direction'); ?>">
                <div class="icon"><i class="<?php the_field('more-features_icon'); ?>"></i></div>
                <h4 class="title"><a href=""><?php the_title() ?></a></h4>
                <div class="description">
                  <?php the_content() ?>
                </div>
              </div>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>  
        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Clients
    ============================-->
    <section id="clients">
      <div class="container">

        <div class="row">
          <?php
            $idObj = get_category_by_slug('clients');
            $id = $idObj->term_id;
            if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
            <div class="col-md-2">
              <?php the_post_thumbnail( $size = 'full', 'data-aos=fade-up&alt=trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt ));'); ?>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>
        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="section-bg">
      <div class="container">
        <?php
            $idObj = get_category_by_slug('pricing');
            $id = $idObj->term_id;
            $post = get_post($id);
        ?>
        <div class="section-header">
          <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
          <span class="section-divider"></span>
          <div class="section-description">
            <?php echo category_description($id);?>
          </div> 
        </div>

        <div class="row">
          <?php
            if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
            <div class="col-lg-4 col-md-6">
              <div class="box <?php the_field('pricing_active'); ?>" data-aos="<?php the_field('pricing_direction'); ?>">
                <h3><?php the_title(); ?></h3>
                <h4><sup>$</sup><?php the_field('pricing_value'); ?><span> month</span></h4>
                <?php if( have_rows('pricing_list') ): ?>
                  <ul>
                    <?php while( have_rows('pricing_list') ): the_row(); ?>
                      <li><i class="ion-android-checkmark-circle"></i><?php the_sub_field('pricing_list_item'); ?></li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                <a href="#" class="get-started-btn"><?php the_field('pricing_link_text'); ?></a>
              </div>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>  
        </div>
      </div>
    </section><!-- #pricing -->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <?php
            $idObj = get_category_by_slug('questions');
            $id = $idObj->term_id;
            $post = get_post($id);
        ?>
        <div class="section-header">
          <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
          <span class="section-divider"></span>
          <div class="section-description">
            <?php echo category_description($id);?>
          </div> 
        </div>

        <ul id="faq-list" data-aos="fade-up">
          <?php
            if ( have_posts() ) : query_posts('cat=' . $id);
            $questions_value = 1;
            while (have_posts()) : the_post(); ?>
            <li>
              <a data-toggle="collapse" class="collapsed" href="<?php echo '#faq' .$questions_value; ?>"><?php the_title(); ?><i class="ion-android-remove"></i></a>
              <div id="<?php echo 'faq' .$questions_value; ?>" class="collapse" data-parent="#faq-list">
               <?php the_content(); ?>
              </div>
            </li>
            <?php $questions_value += 1; ?>
            <? endwhile; endif; wp_reset_query(); ?>  
          

        </ul>

      </div>
    </section><!-- #faq -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <?php
            $idObj = get_category_by_slug('team');
            $id = $idObj->term_id;
            $post = get_post($id);
        ?>
        <div class="section-header">
          <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
          <span class="section-divider"></span>
          <div class="section-description">
            <?php echo category_description($id);?>
          </div> 
        </div>

        <div class="row" data-aos="fade-up">
          <?php
            $idObj = get_category_by_slug('team');
            $id = $idObj->term_id;
            if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
              <div class="col-lg-3 col-md-6">
                <div class="member">
                  <div class="pic">
                    <?php 
                      $image = get_field('team_img');
                      if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <?php endif; ?>
                  </div>
                  <h4><?php the_title(); ?></h4>
                  <span><?php the_field('team_subtitle'); ?></span>
                  <?php if( have_rows('team_social_list') ): ?>
                    <div class="social">
                      <?php while( have_rows('team_social_list') ): the_row(); ?>
                        <?php if( have_rows('team_social_list_item') ): ?>
                            <?php while( have_rows('team_social_list_item') ): the_row(); ?>
                              <a href="<?php the_sub_field('team_social_link'); ?>"><i class="<?php the_sub_field('team_social_icon'); ?>"></i></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </div>  
                  <?php endif; ?>
                </div>
              </div>
            <? endwhile; endif; wp_reset_query(); ?>        
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <?php
            $idObj = get_category_by_slug('gallery');
            $id = $idObj->term_id;
            $post = get_post($id);
        ?>
        <div class="section-header">
          <h3 class="section-title"><?php echo get_cat_name($id);?></h3>
          <span class="section-divider"></span>
          <div class="section-description">
            <?php echo category_description($id);?>
          </div> 
        </div>

        <div class="row no-gutters">
          <?php
            if ( have_posts() ) : query_posts('cat=' . $id);
            while (have_posts()) : the_post(); ?>
            <div class="col-lg-4 col-md-6">
              <div class="gallery-item" data-aos="<?php the_field('gallery_animation'); ?>">
                 <?php 
                  $image = get_field('gallery_img');
                  if( !empty($image) ): ?>
                    <a href="<?php echo $image['url']; ?>" class="gallery-popup">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                  <?php endif; ?>
              </div>
            </div>
            <? endwhile; endif; wp_reset_query(); ?>  
        </div>
      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3><?php the_field('g_site_title', 'option'); ?></h3>
              <p><?php the_field('g_site_description', 'option'); ?></p>
              <?php if( have_rows('g_site_social', 'option') ): ?>
                <div class="social-links">
                  <?php while( have_rows('g_site_social', 'option') ): the_row(); ?>
                    <?php if( have_rows('g_site_social_item', 'option') ): ?>
                        <?php while( have_rows('g_site_social_item', 'option') ): the_row(); ?>
                          <a href="<?php the_sub_field('g_site_social_link', 'option'); ?>"><i class="<?php the_sub_field('g_site_social_icon', 'option'); ?>"></i></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </div>  
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <?php if( have_rows('g_site_address', 'option') ): ?>
                <div>
                  <?php while( have_rows('g_site_address', 'option') ): the_row(); ?>
                    <?php if( have_rows('g_site_address_item', 'option') ): ?>
                        <?php while( have_rows('g_site_address_item', 'option') ): the_row(); ?>
                          <i class="<?php the_sub_field('g_site_address_icon', 'option'); ?>"></i>
                          <p><?php the_sub_field('g_site_address_text', 'option'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                  <?php endwhile; ?>
                </div>  
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

<?php get_footer(); ?>