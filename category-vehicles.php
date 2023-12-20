<?php get_header(); ?>
  
  <!-- category home banner -->
<?php
  if( have_rows('category_home_banner') ):
    while( have_rows('category_home_banner') ) : the_row(); ?>
    <section class="banner relative acf-cat category-banner">
            <video src="<?php echo get_sub_field('background_video'); ?>" loop muted autoplay  class="main-video absolute w-screen z-[-1] h-screen object-cover"></video>
     <div class="container">
     <div class="flex flex-col justify-between h-screen items-center">
     <div class="sec-top-contant">
        <h2><?php the_title() ?></h2>
        <h3><?php echo get_sub_field('starting_price') ?></h3>
        <p><?php echo get_sub_field('after_text') ?></p>
     </div>
        <div class="sec-bottom-content pb-6">
            <div class="flex gap-24 mb-10  items-start">
                <div class="detail-wrap gap-24 flex justify-between">
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white"><?php echo get_sub_field('range') ?> <span class="text-xl font-semibold text-white pl-1">mi</span></h4>
                        <h5 class="text-[12px] pt-2 text-white">Range (EPA est.)</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white"><?php echo get_sub_field('0-60_mph') ?> <span class="text-xl font-semibold text-white pl-1">s</span></h4>
                        <h5 class="text-[12px] pt-2 text-white">Range (EPA est.)</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white"><?php echo get_sub_field('top_speed') ?> <span class="text-xl font-semibold text-white pl-1">mah</span></h4>
                        <h5 class="text-[12px] pt-2 text-white">Range (EPA est.)</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white"><?php echo get_sub_field('peak_power') ?> <span class="text-xl font-semibold text-white pl-1">hp</span></h4>
                        <h5 class="text-[12px] pt-2 text-white">Range (EPA est.)</h5>
                    </div>

                </div>
                <a href="#" class="btn light">Order Now</a>
            </div>
            <p>*Price before savings is <?php  echo get_sub_field('starting_price') ?> $74,990, excluding taxes and fees. Subject to change. <br>
                <a href="<?php echo get_sub_field('about_est_gas_savings') ?>" >Learn about est. gas savings. </a> <br>
                 Specs displayed are <?php the_title() ?> Plaid values.</p>
        </div>
        </div>
        </div>
    </section>
   <?php endwhile;
    endif; ?>

    <!-- interior section -->

    <section class="interior-section dark pt-12">
        <div class="sec-heading pt-8 pb-2 text-center mb-12">
            <h2 class="text-[28px] font-bold"><?php echo the_field('interior_heading') ?></h2>
        </div>
        <img src="<?php echo the_field('interior_banner_image') ?>" alt="" class="w-full">
    </section>

    <!-- Xe-tesla-slider -->
    <?php get_template_part( 'partials/xe-tesla-carousel', '' ); ?>

    <!-- -->
    <section class="features-section dark">
        <div class="container meadium">
        <?php
          if( have_rows('category_features') ):
            while( have_rows('category_features') ) : the_row(); ?>
            <div class="feature-wrap">
                  <div class="w-[49%] feature-image">
                      <img src="<?php echo get_sub_field('feature_image') ?>" alt="<?php echo get_sub_field('feature_name') ?>">
                  </div>
                  <div class="w-[41%]">
                    <div>
                      <h3><?php echo get_sub_field('feature_name') ?></h3>
                      <p><?php echo get_sub_field('feature_description') ?></p>
                    </div> 
                  </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </section>

    <!--More info about model -->
  <?php  if( have_rows('xe-tesla-advanced') ):
            while( have_rows('xe-tesla-advanced') ) : the_row(); ?>
    <section class="xe-tesla-advanced">
        <div class="top relative"> 
           <div class="w-full h-[476px]">
              <img src="<?php echo get_sub_field('background_image') ?>" alt="" class="w-full h-full object-cover">
           </div>
           
      
            <div class="detail-wrap flex justify-between max-w-[800px] mx-auto w-full absolute bottom-0 py-16 left-0 right-0">
              <?php  if( have_rows('specifications') ):
                while( have_rows('specifications') ) : the_row(); ?>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white text-center"><?php echo get_sub_field('peak_power') ?> <span class="text-xl font-semibold text-white pl-1">hp</span></h4>
                        <h5 class="text-[12px] pt-2 text-white text-center">Peak Power</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white text-center"><?php echo get_sub_field('mph_') ?> <span class="text-xl font-semibold text-white pl-1">s</span></h4>
                        <h5 class="text-[12px] pt-2 text-white text-center">@155 mph 1/4 mile</h5>
                    </div>
                    <div class="detail-item">
                        <h4 class="text-2xl font-semibold text-white text-center"><?php echo get_sub_field('0-60_mph') ?> <span class="text-xl font-semibold text-white pl-1">mah</span></h4>
                        <h5 class="text-[12px] pt-2 text-white text-center">0-60 mph*</h5>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="container meadium">
        <?php  if( have_rows('section_detail_bottom') ):
            while( have_rows('section_detail_bottom') ) : the_row(); ?>
            <div class="section-details gap-5">
                <div class="heading col-span-5">
                    <div class="pt-4 pb-2">
                     <span><?php echo get_sub_field('title') ?></span>
                      <h3><?php echo get_sub_field('heading') ?></h3></div>
                    <div class="flex gap-5 flex-wrap">
                       <a href="<?php echo get_sub_field('order_now') ?>" class="btn border">Order Now</a>
                       <a href="<?php echo get_sub_field('compare_models') ?>" class="btn gray">Compare Models</a>
                    </div>
                </div>
                <div class="right col-span-7">
                <p><?php echo get_sub_field('section_detail') ?></p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>

    <!-- Model compairs -->
   

<!-- // Check rows exists. -->
<?php if( have_rows('model_compair') ): 
 while( have_rows('model_compair') ) : the_row(); ?>
    <section class="model-compair bg-[#e2e3e3] pb-[72px]">
        <div class="container meadium">
            <div class="section-heading pt-[72px] pb-14">
               <h2><?php echo get_sub_field('heading') ?></h2>
               <p><?php echo get_sub_field('description') ?></p>
            </div>
        </div>
     
        <?php if( have_rows('model_compair_slider') ): ?>
           <div class="container px-12">
              <div class="model-images">
                <?php while( have_rows('model_compair_slider') ) : the_row(); ?>
                    <div class="img-item">
                        <img src="<?php echo get_sub_field('model_image') ?>" alt="" class="w-full h-full">
                    </div>
                <?php endwhile; ?>
              </div>
            </div>
            <div class="container meadium model-details">   
                <div class="models-wrap">
                <?php while( have_rows('model_compair_slider') ) : the_row(); ?>
                    <div class="model border-t-2 border-black opacity-40 transition-all duration-300">
                        <h3><?php echo get_sub_field('model_name') ?></h3>
                        <p><?php echo get_sub_field('model_description') ?></p>
                        <div class="model-config pt-2">
                            <div class="detail-wrap gap-10 flex">
                                <div class="detail-item">
                                    <h4 class="text-2xl font-semibold text-[#171a20]"><?php echo get_sub_field('mph') ?> <span class="text-xl font-semibold text-[#171a20] pl-1">s</span></h4>
                                    <h5 class="text-[12px] text-[#171a20] font-semibold">0-60 mph</h5>
                                </div>
                                <div class="detail-item">
                                    <h4 class="text-2xl font-semibold text-[#171a20]"><?php echo get_sub_field('range') ?> <span class="text-xl font-semibold text-[#171a20] pl-1">mi</span></h4>
                                    <h5 class="text-[12px] text-[#171a20] font-semibold">Range (EPA est.)</h5>
                                </div>
                                <div class="detail-item">
                                    <h4 class="text-2xl font-semibold text-[#171a20]"><?php echo get_sub_field('peak_power') ?> <span class="text-xl font-semibold text-[#171a20] pl-1">hp</span></h4>
                                    <h5 class="text-[12px] text-[#171a20] font-semibold">Peak Power</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>    
                </div>
        </div>
        <?php endif ?>
        <span class="text-[#5c5e62] text-[12px] text-center font-semibold block">* With rollout subtracted</span>
    </section> 
<?php endwhile; endif; ?>

    <!-- desing section -->
    <section class="dark exterior-section">
    <?php if( have_rows('exterior_slider') ): 
        while( have_rows('exterior_slider') ) : the_row(); ?>
          <div class="img-part w-full h-[414px]">
            <img src="<?php echo get_sub_field('banner_image') ?>" alt="" class="w-full h-full object-cover">
          </div>
        <?php if( have_rows('section_detail') ): 
           while( have_rows('section_detail') ) : the_row(); ?>  
          <div class="container meadium">
            <div class="section-details gap-5 dark">
                <div class="heading col-span-5">
                    <div class="pt-4 pb-2">
                     <span><?php echo get_sub_field('title') ?></span>
                      <h3><?php echo get_sub_field('heading') ?></h3></div>
                      <div class="flex gap-5 flex-wrap">
                    <a href="<?php echo get_sub_field('order_now') ?>" class="btn border light">Order Now</a>
                    <a href="<?php echo get_sub_field('view_inventory') ?>" class="btn light">View Inventory</a>
                   </div>
                </div>
                <div class="right col-span-7">
                <p><?php echo get_sub_field('description') ?></p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
        </div>
    </section>

    <!-- Design feature section -->
    <section class="features-section dark py-[68px]">
        <div class="container meadium">
        <?php
          if( have_rows('category_features') ):
            while( have_rows('category_features') ) : the_row(); ?>
            <div class="feature-wrap design-feature">
                  <div class="w-[49%] feature-image">
                      <img src="<?php echo get_sub_field('feature_image') ?>" alt="<?php echo get_sub_field('feature_name') ?>">
                  </div>
                  <div class="w-[41%]">
                    <div>
                      <h3><?php echo get_sub_field('feature_name') ?></h3>
                      <p><?php echo get_sub_field('feature_description') ?></p>
                    </div> 
                  </div>
            </div>
        <?php endwhile; endif; ?>
        </div>
    </section>
   

<?php get_footer(); ?>
