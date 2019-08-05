<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
<div class="container">
    <section id="new">
        <div class="image-groupe">
            <img src="<?= $this->path; ?>/public/images/arrow-left.png" alt="Fleche de gauche">
            <img src="" alt="Photo de l'articles">
            <img src="<?= $this->path; ?>/public/images/arrow-right.png" alt="Fleche de droite">
        </div>
        <div class="new-text">
            <h3>TITLE</h3>
            <p>
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