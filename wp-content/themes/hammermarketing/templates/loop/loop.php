<section id="team" class="flexbox flex-around full-width">
<?php
$args = array(
    'post_type' => 'Teams',
    'order'    => 'ASC',
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
        $title = get_field('title');
        $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );
    ?>
    <div class="team-member">
            <img class="team-image" src="<?php echo $featuredImage[0];?>" />    
            <h5 class="all-caps bold has-secondary-color"><?php the_title(); ?></h5>
            <i><?php echo $title;?></i>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="flexbox flex-md link-arrow has-secondary-color">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="22.512" height="17.538" viewBox="0 0 22.512 17.538">
                <g id="Group_13" data-name="Group 13" transform="translate(-1339.857 -1179.482)">
                    <path id="Path_24" data-name="Path 24" d="M1353.6,1176.909l-2.828-2.828,5.941-5.941-5.941-5.941,2.828-2.828,8.769,8.769Z" transform="translate(0 20.112)" fill="#c5aa72"/>
                    <path id="Path_25" data-name="Path 25" d="M1359.74,1190.251h-19.883v-4h19.883Z" fill="#c5aa72"/>
                </g>
                </svg>
            </a>
    </div>  
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
</section>