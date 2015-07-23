<li class="col-sm-4">

    <figure class="sixty-height">

        <img src="<?php echo get_field('image')['url']; ?>" />

        <figcaption class="overlay v-centre">
            <a href="http://<?php echo get_field('link'); ?>" class="v-centre-inner overlay-link" target="_blank">
                <i class="icon-external-link"></i>
                <?php echo get_field('link'); ?>
            </a>
        </figcaption>

    </figure>

    <h3><?php the_title();  ?></h3>

    <p>
        <?php the_field('summary'); ?>
    </p>

    <div class="tags">
        <?php echo get_post_categories(get_the_ID()); ?>
    </div>

</li>