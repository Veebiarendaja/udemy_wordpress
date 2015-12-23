<?php
$featurette_title = get_field('featurette_title');
$featurette_video_link = get_field('featurette_video_link');
?>

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