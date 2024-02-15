<?php
/* Template Name: Page with Sidebar */

get_header();

?>
<h1>
  <?php echo get_the_title(); ?>
</h1>

<p>This is a custom template called page with sidebar</p>
<main class="flex flex-row">
  <div class="w-2/3">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt eius sint voluptas soluta deserunt dignissimos,
    ratione quod, quasi laborum aperiam ex modi a obcaecati explicabo quibusdam voluptate iusto animi sed?
  </div>
  <aside class="w-1/3">
    sidebar
  </aside>
</main>
<?php get_footer(); ?>