<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_Wordpress
 */

get_header(); ?>
    <!-- BLOG CONTENT ========================= -->
    <div class="container">
        <div class="row" id="primary">
            <main id="content" class="col-sm-8">

                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">

                            <?php
                            if (is_single()) {
                                the_title('<h3 class="entry-title">', '</h3>');
                            } else {
                                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
                            }

                            if ('post' === get_post_type()) : ?>
                                <div class="post-details">
                                    <i class="fa fa-user"></i>
                                    <?php the_author(); ?>

                                    <i class="fa fa-clock-o"></i>
                                    <time><?php the_date(); ?></time>

                                    <i class="fa fa-folder"></i>
                                    <?php the_category(', '); ?>

                                    <i class="fa fa-tags"></i>
                                    <?php the_tags('', ', ', '') ?>

                                    <div class="post-comments-badge">
                                        <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number(0, 1, '%'); ?></a>
                                    </div>
                                    <!--post-comments-badge-->
                                    <?php edit_post_link('Edit', '<i class="fa fa-pencil"></i>', ''); ?>
                                </div>
                                <?php
                            endif; ?>
                        </header>
                        <!-- .entry-header -->
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="post-image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php } ?>
                        <!--post-image-->
                        <div class="post-body">
                            <?php the_content(); ?>
                        </div>
                    </article>

                    <?php the_post_navigation(); ?>

                    <?php // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif; ?>

                <?php endwhile; // End of the loop.?>
            </main>
            <!-- main -->

            <!-- SIDEBAR ========================= -->
            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>
            <!-- aside -->
        </div>
        <!-- primary -->
    </div><!-- container -->

<?php
get_footer();
