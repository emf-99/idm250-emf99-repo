<?php
/**
 * Single Portfolio Template
 *
 * This template is used for displaying single portfolio items. It's specifically tailored for the 'portfolio' custom post type.
 * Customize it to showcase portfolio details and media in a unique layout, separate from standard posts or pages.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header(); ?>
<?php get_template_part('components/heros/hero-basic'); ?>
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>