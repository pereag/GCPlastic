<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
<div class="container">
    <section class="new">
        <div class="images-groupe new-image-groupe">
            <img class="new-image" src="" alt="Photo de l'articles" style="background-image: url('<?= $this->path; ?>/public/images/<?= $post->getImagePost() ?>')">
        </div>
        <div class="new-txt">
            <h3 id="new-txt-title"><?= $post->getTitle() ?></h3>
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