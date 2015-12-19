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
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">

            <h2>Course Features</h2>
        </div>
        <!--section-header-->

        <div class="row">

            <div class="col-sm-2">
                <i class="glyphicon glyphicon-hdd"></i>
                <h4>Lifetime access to 80+ lectures</h4>
            </div>

            <div class="col-sm-2">
                <i class="glyphicon glyphicon-picture"></i>
                <h4>10+ hours of HD video content</h4>
            </div>

            <div class="col-sm-2">
                <i class="glyphicon glyphicon-calendar"></i>
                <h4>30-day money back guarantee</h4>
            </div>

            <div class="col-sm-2">
                <i class="glyphicon glyphicon-education"></i>
                <h4>Access to a community of like-minded students</h4>
            </div>

            <div class="col-sm-2">
                <i class="glyphicon glyphicon-link"></i>
                <h4>Direct access to the instructor</h4>
            </div>

            <div class="col-sm-2">
                <i class="glyphicon glyphicon-phone"></i>
                <h4>Accessible content on your mobile devices</h4>
            </div>

        </div>
        <!--row-->
    </div>
</section>
<!--course-features-->

<!--PROJECT FEATURES ===================================-->
<section id="project-features">
    <div class="container">

        <h2>Final Project Features</h2>

        <p class="lead">
            Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the
            website <strong>you</strong> are going to build? <em>You're looking at it!</em> The website you're using
            right now is the website you will have built entirely by yourself, by the end of this course.
        </p>

        <div class="row">
            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">

                <h3>Sexy & Modern Design</h3>

                <p>You get to work with a modern, professional quality design & layout.</p>
            </div>

            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">

                <h3>Quality HTML5 & CSS3</h3>

                <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.</p>
            </div>

            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="CMS">

                <h3>Easy-to-use CMS</h3>

                <p>Allow your clients to easily update their websites by converting your static websites to dynamic
                    websites, using WordPress.</p>
            </div>
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
                <h2>Watch the Course Introduction</h2>
                <iframe width="100%" height="415" src="https://www.youtube.com/embed/q-mJJsnOHew" frameborder="0"
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
                        <h2>Your Instructor
                            <small>Brad Hussey</small>
                        </h2>
                    </div>

                    <div class="col-lg-4">
                        <a href="https://twitter.com/bradhussey" target="_blank" class="badge social twitter"><i
                                class="fa fa-twitter"></i></a>
                        <a href="https://facebook.com/bradhussey" target="_blank" class="badge social facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com/+BradHussey" target="_blank" class="badge social gplus"><i
                                class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <!--row-->

                <p class="lead">
                    A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer,
                    blogger and digital entrepreneur.
                </p>

                <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver,
                    Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of
                    solving problems on the web, crafting design solutions, and speaking in code. </p>

                <p>Brad's determination and love for what he does has landed him in some pretty interesting places with
                    some neat people. He's had the privilege of working with, and providing solutions for, numerous
                    businesses, big & small, across the Americas. </p>

                <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his
                    company, Brightside Studios. He regularly blogs about passive income, living your life to the
                    fullest, and provides premium quality web design tutorials and courses for tens of thousands of
                    amazing people desiring to master their craft.</p>

                <hr>

                <h3>The Numbers
                    <small>They Don't Lie</small>
                </h3>

                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                41,000+ <span>students</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                568 <span>reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                8 <span>courses</span>
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
