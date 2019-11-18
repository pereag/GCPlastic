<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>

<section class="news">
    <div class="container">
        <div id="page" class="page-1">
        <?php
            for ($i = 0; $i < count($post); $i = $i + 1) {
        ?>
                <div id="new-<?= $i + 1 ?>" class="news-content news-content__desable" style="background-image: url('<?= $post[$i]->getImagePost() ?>'); background-size: cover; background-position: center;">
                    <a href="?action=new&id=<?= $post[$i]->getId()?>">
                        <div class="news-content-txt">
                            <h3 class="news-txt-title"><?= strtoupper($post[$i]->getTitle()); ?></h3>
                            <p class="news-txt-p">
                            <?= $post[$i]->getContent(); ?>...
                            </p>
                            <span class="news-txt-date"><?= $post[$i]->getdatePost(); ?></span>
                        </div>
                    </a>
                </div>
        <?php
            }
        ?>
    </div>
        <div id="paging" class="paging__active">
        <button id="paging-previous" class="btn-yellow btn-medium btn-news btn__desable">PRECEDENT</button>
        <button id="paging-next" class="btn-yellow btn-medium btn-news">SUIVANT</button>
        </div>
    </div> 
</section>

<?php require_once "./app/src/Views/footer.php";