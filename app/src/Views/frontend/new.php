<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
<div class="container">
    <section class="new">
        <div class="images-groupe new-image-groupe">
            <img class="new-image" style="background-image: url('<?= $post->getImagePost() ?>'); background-size: cover;">
        </div>
        <div class="new-txt">
            <h3 id="new-txt-title"><?= strtoupper($post->getTitle()) ?></h3>
            <p id="new-txt-p">
            <?= $post->getContent() ?>
            </p>
            <span><?= $post->getdatePost() ?></span>
        </div>
        <a href="<?= $this->path ?>?action=news">
            <button class="btn-yellow btn-large">LISTES DES ACTUALITES</button>
        </a>
    </section>
</div>

<?php require_once "./src/Views/footer.php"; ?>