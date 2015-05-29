<?php /* Template Name: Info */ ?>

<?php get_header(); ?>

<section id="mainSection">

<div class="about container">
    <?php the_field("about"); ?>
</div>

<div class="projects container">

    <h2>Projects</h2>

    <?php

        global $post;

        // LA PROJECTS

        $args = array(
            'post_type'      => 'project',
            'orderby'        => 'title',
            'order'          => 'ASC' ,
            'posts_per_page' => -1,
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key'     => 'hidden',
                    'value'   => '',
                    'compare' => '='
                ),
                array(
                    'key'     => 'la_jam',
                    'value'   => '',
                    'compare' => '='
                )
            )
        );

        $projects = new WP_Query($args);

        foreach( $projects->posts as $post ) {
            setup_postdata($post);
            echo "<a href='".get_field('website_url')."' target='_blank'>/ ".get_the_title()."</a>";
        };

    ?>
    
    <h2>LA JAM</h2>
    
    <?php

        // LA JAMS

        $args = array(
            'post_type'      => 'project',
            'orderby'        => 'title',
            'order'          => 'ASC' ,
            'posts_per_page' => -1,
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key'     => 'hidden',
                    'value'   => '',
                    'compare' => '='
                ),
                array(
                    'key'     => 'la_jam',
                    'value'   => '1',
                    'compare' => 'LIKE'
                )
            )
        );

        $projects = new WP_Query($args);

        foreach( $projects->posts as $post ) {
            setup_postdata($post);
            echo "<a href='".get_field('website_url')."' target='_blank'>/ ".get_the_title()."</a>";
        };

        wp_reset_postdata();
    ?>

</div>

<div class="contact container">
    warning@larsattacks.co.uk<br/><br/>
    <div id="mail"><a href="mailto:warning@larsattacks.co.uk"></a></div>
</div>

<iframe width="640px" height="92px" src="https://www.yunojuno.com/p/larsb/availability/" scrolling="no" frameborder="0"></iframe>

</section>

<?php get_footer(); ?>