<?php
$args = array(
    'post_type' => 'post', // Fetch posts
    'posts_per_page' => 3, // Number of posts to fetch
    'order' => 'DESC', // Order by descending (latest first)
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <?php the_post_thumbnail();?>
        <h2><?php the_title();?></h2>
        <div class="post-content">
            <?php the_content();?>


        </div>
        <?php
}
    wp_reset_postdata(); // Restore global post data
} else {
    echo 'No posts found.';
}
