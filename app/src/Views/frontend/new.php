<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
<div class="container">
    <section class="new">
        <div class="images-groupe new-image-groupe">
            <div class="vertical-align">
                <img class="new-arrow-left" src="<?= $this->path; ?>/public/images/arrow-left.png" alt="Fleche de gauche">
            </div>
            <img class="new-image" src="" alt="Photo de l'articles">
            <div class="vertical-align">
                <img class="new-arrow-right" src="<?= $this->path; ?>/public/images/arrow-right.png" alt="Fleche de droite">
            </div>
        </div>
        <div class="new-txt">
            <h3 id="new-txt-title">TITLE</h3>
            <p id="new-txt-p">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex, pariatur distinctio
                beatae sed impedit voluptatum repellendus dignissimos incidunt sequi doloremque
                exercitationem blanditiis iusto qui assumenda consequuntur reiciendis consectetur quasi totam.
            </p>
            <span>Date et heurs</span>
        </div>
        <button class="btn-yellow btn-large">LISTES DES ACTUALITES</button>
    </section>
</div>

<?php require_once "./src/Views/footer.php"; ?>