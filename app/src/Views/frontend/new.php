<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    $bannerTxt = "Toutes les actualités de GC Plastic sont disponibles sur ces pages.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>
<div class="container">
    <section class="new">
        <div class="images-groupe new-image-groupe">
            <img class="new-image" style="background-image: url('<?= $post->getImagePost() ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        </div>
        <div class="new-txt">
            <h3 id="new-txt-title"><?= strtoupper($post->getTitle()) ?></h3>
            <p id="new-txt-p">
            <?= $post->getContent() ?>
            </p>
            <span><?= $post->getdatePost() ?></span>
        </div>
        <a href="?action=news">
            <button class="btn-yellow btn-large">LISTES DES ACTUALITES</button>
        </a>
    </section>
</div>

<?php require_once "./app/src/Views/footer.php"; ?>