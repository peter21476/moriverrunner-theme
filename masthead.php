<?php 
$fields = get_fields();

$position = $fields['masthead_position'];
?>


<div class="masthead">
    <div class="masthead__background masthead__position--<?php echo $position ?>">
        <div class="masthead__overlay"></div>
        <?php if (has_post_thumbnail($post)) {
            $thumbnail_url = get_the_post_thumbnail_url($post, 'full');
        } ?>
        <img src="<?php echo $thumbnail_url; ?>" alt="">
    </div>
    <div class="masthead__content">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-12 d-flex justify-content-center align-items-center h-100">
                    <h1 class="masthead__title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>