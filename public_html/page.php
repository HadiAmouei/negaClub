<?php
var_dump($_POST);
die();
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php
require_once 'layers/links.html';
?>
<body>

<?php
require_once 'layers/preloader.html';
?>

<div class="page">
    <header class="section page-header breadcrumbs-custom-wrap bg-gradient bg-secondary-2">

        <?php
        require_once 'layers/navBar.html';
        ?>
        <section class="breadcrumbs-custom-svg text-center">

            <?php
            require_once 'layers/slider.html';
            ?>
            <div class="parallax-scene-js parallax-scene" data-scalar-x="5" data-scalar-y="10">
                <div class="layer-01">
                    <div class="layer" data-depth="0.25"><img src="images/parallax-scene-01-132x133.png" alt="" width="132" height="133"/>
                    </div>
                </div>
                <div class="layer-02">
                    <div class="layer" data-depth=".55"><img src="images/parallax-scene-02-186x208.png" alt="" width="186" height="208"/>
                    </div>
                </div>
                <div class="layer-03">
                    <div class="layer" data-depth="0.1"><img src="images/parallax-scene-03-108x120.png" alt="" width="108" height="120"/>
                    </div>
                </div>
                <div class="layer-04">
                    <div class="layer" data-depth="0.25"><img src="images/parallax-scene-04-124x145.png" alt="" width="124" height="145"/>
                    </div>
                </div>
                <div class="layer-05">
                    <div class="layer" data-depth="0.15"><img src="images/parallax-scene-05-100x101.png" alt="" width="100" height="101"/>
                    </div>
                </div>
                <div class="layer-06">
                    <div class="layer" data-depth="0.65"><img src="images/parallax-scene-06-240x243.png" alt="" width="240" height="243"/>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <?php
    include_once 'layers/main/story.html';
    include_once 'layers/main/wwo.html';
    include_once 'layers/main/quests.html';
    include_once 'layers/main/advntgs.html';
    include_once 'layers/main/nwsstlr.html';
    //    include_once 'layers/main/advntgsItems.html';
    //    include_once 'layers/main/blog.php';
    include_once 'layers/main/wppsay.php';
    include_once 'layers/main/footer.html';
    ?>



</div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script>

</script>
</body>
</html>