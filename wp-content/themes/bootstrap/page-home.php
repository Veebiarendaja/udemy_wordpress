<?php
/*
    Template Name: Home Page
 */
//Custom Fields                         page_id, custom_name, string
$prelaunch_price        =  get_post_meta(7, 'prelaunch_price', true);
$launch_price           =  get_post_meta(7, 'launch_price', true);
$final_price            =  get_post_meta(7, 'final_price', true);
$course_url             =  get_post_meta(7, 'course_url', true);
$button_text            =  get_post_meta(7, 'button_text', true);

$optin_text             =  get_post_meta(7, 'optin_text', true);
$optin_button_text      =  get_post_meta(7, 'optin_button_text', true);

//Advanced Custom Fields
$income_feature_image   = get_field('income_feature_image');
$income_section_title   = get_field('income_section_title');
$income_section_desc    = get_field('income_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_description   = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_description   = get_field('reason_2_description');

$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body       = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body  = get_field('features_section_body');
$course_feature_icon    = get_field('course_feature_icon');

$project_features_title = get_field('project_feature_title');
$project_feature_body   = get_field('project_feature_body');

$featurette_title       = get_field('featurette_title');
$featurette_video_link  = get_field('featurette_video_link');

$instructor_section_title = get_field('instructor_section_title');
$instructor_name          = get_field('instructor_name');
$bio_excerpt              = get_field('bio_excerpt');
$full_bio                 = get_field('full_bio');
$twitter_username         = get_field('twitter_username');
$google_plus_username     = get_field('google_plus_username');
$facebook_username        = get_field('facebook_username');
$num_students             = get_field('num_students');
$num_reviews              = get_field('num_reviews');
$num_courses              = get_field('num_courses');









//WP Header
get_header(); ?>

<!--HERO ===================================-->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="BootStrap Wordress" class="logo">
                </div>
                <!--row-->

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>

                    <p class="lead"><?php bloginfo('description'); ?></p>

                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-launch Price
                                <small>Buy!</small>
                            </h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div>
                        <!--price-->

                        <div class="price">
                            <h4>Launch Price
                                <small>Buy!</small>
                            </h4>
                            <span><?php echo $launch_price; ?></span>
                        </div>
                        <!--price-->

                        <div class="price">
                            <h4>Final Price
                                <small>Buy!</small>
                            </h4>
                            <span><?php echo $final_price; ?></span>
                        </div>
                        <!--price-->

                    </div>
                    <!--price-timeline-->
                    <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                </div>

            </div>
        </div>
    </article>
</section>

<!--OPT IN SECTION ===================================-->
<section id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="lead"><?php echo $optin_text; ?></p>
            </div>

            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
            </div>
        </div>
    </div>
</section>

<!--BOOST YOUR INCOME ===================================-->
<section id="boost-income">
    <div class="container">
        <div class="section-header">

            <?php if(!empty($income_feature_image)) : ?>
                <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
            <?php endif; ?>


            <h2><?php echo $income_section_title; ?></h2>
        </div>
        <!--section-header-->
        <p class="lead"><?php echo $income_section_desc; ?></p>

        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $reason_1_title; ?></h3>

                <p><?php echo $reason_1_description; ?></p>
            </div>
            <!--col-->

            <div class="col-sm-6">
                <h3><?php echo $reason_2_title; ?></h3>

                <p><?php echo $reason_2_description; ?></p>
            </div>
            <!--col-->
        </div>
        <!--row-->
    </div>
    <!--container-->
</section>
<!--boost-income-->

<!--SECTION-->
<section id="who-benefits">
    <div class="container">
        <div class="section-header">
            <?php if(!empty($who_feature_image)) : ?>
                <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
            <?php endif; ?>

            <h2><?php echo $who_section_title; ?></h2>
        </div>
        <!--section-header-->

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <?php echo $who_section_body; ?>
            </div>
        </div>
        <!--row-->
    </div>
</section>
<!--who-benefits-->

<!--COURSE FEATURES ===================================-->
<section id="course-features">
    <div class="container">
        <div class="section-header">
            <?php if(!empty($features_section_image)) : ?>
                <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
            <?php endif; ?>

            <h2><?php echo $features_section_title; ?></h2>

            <?php if(!empty($features_section_body)) : ?>
            <p class="lead"><?php echo $features_section_body; ?></p>
            <?php endif; ?>
        </div>
        <!--section-header-->

        <div class="row">
            <?php $loop = new WP_Query( array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="col-sm-2">
                    <i class="<?php the_field('course_feature_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                </div>
            <?php endwhile; wp_reset_query(); ?>

        </div>
        <!--row-->
    </div>
</section>
<!--course-features-->

<!--PROJECT FEATURES ===================================-->
<section id="project-features">
    <div class="container">

        <h2><?php echo $project_features_title; ?></h2>

        <p class="lead"><?php echo $project_feature_body; ?></p>

        <div class="row">
            <?php $loop = new WP_Query( array('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="col-sm-4">
                    <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                    ?>

                    <h3><?php the_title(); ?></h3>

                    <p><?php the_content(); ?></p>
                </div>

            <?php endwhile; wp_reset_query(); ?>
            
        </div>
        <!--row-->

    </div>
</section>
<!--project-features-->

<!--VIDEO FEATURETTE ===================================-->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $featurette_title ?></h2>
                <iframe width="100%" height="415" src="<?php echo $featurette_video_link ?>" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!--container-->
</section>
<!--featurette-->

<!--INSTRUCTOR ===================================-->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2><?php echo $instructor_section_title; ?>
                            <small><?php echo $instructor_name; ?></small>
                        </h2>
                    </div>

                    <div class="col-lg-4">
                        <?php if(!empty($twitter_username)) : ?>
                        <a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i
                                class="fa fa-twitter"></i></a>
                        <?php endif; ?>

                        <?php if(!empty($facebook_username)) : ?>
                        <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank" class="badge social facebook"><i
                                class="fa fa-facebook"></i></a>
                        <?php endif; ?>

                        <?php if(!empty($google_plus_username)) : ?>
                        <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank" class="badge social gplus"><i
                                class="fa fa-google-plus"></i></a>
                        <?php endif;  ?>
                    </div>
                </div>
                <!--row-->
                <p class="lead"><?php echo $bio_excerpt; ?></p>
                <p><?php echo $full_bio; ?></p>

                <h3>The Numbers
                    <small>They Don't Lie</small>
                </h3>

                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_students; ?> <span>students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_reviews; ?> <span>reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $num_courses; ?> <span>courses</span>
                            </div>
                        </div>
                    </div>
                </div> <!--row-->
            </div>
        </div>
        <!--row-->
    </div>
    <!--container-->
</section>
<!--instructor-->

<!--TESTIMONIALS ===================================-->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <h2>What People Are Saying About Brad</h2>

                <!--TESTIMONIAL-->
                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Greate video course!
                            <cite>
                                &mdash; Brennan, graduate of all of Brad's courses
                            </cite>
                        </blockquote>
                    </div>
                </div> <!--row-->

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Illustratrion of a man with a moustache">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Greate video course!
                            <cite>
                                &mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS
                            </cite>
                        </blockquote>
                    </div>
                </div> <!--row-->

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Illustratrion of a man with a beard">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Greate video course!
                            <cite>
                                &mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3
                            </cite>
                        </blockquote>
                    </div>
                </div> <!--row-->

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Illustratrion of a man with a beard">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Greate video course!
                            <cite>
                                &mdash; Ernest, graduate of Code Dynamic Websites with PHP
                            </cite>
                        </blockquote>
                    </div>
                </div> <!--row-->
            </div>
        </div> <!--row-->
    </div> <!--container-->
</section>

<?php
get_footer(); ?>