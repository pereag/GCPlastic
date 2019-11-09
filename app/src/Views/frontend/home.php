<?php 
    $title = "Accueil";
    require_once "./src/Views/header.php"; 
?>

<section id="slideshow">
    <div class="sc-vertical-align">
        <div class="slideshow-content">
            <img id="sarrow-left" class="sbutton" src="<?= $this->path; ?>/public/images/arrow-left-white.png" alt="Fleche gauche">
            <div class='sbutton-groupe sbutton'>
                <div id="sstop-button">
                    <img id="spause" class="sstop-button__active" src="<?= $this->path; ?>/public/images/pause.png" alt="pause">
                    <img id="splay" class="sstop-button__desable" src="<?= $this->path; ?>/public/images/play.png" alt="pause">
                </div>
                <img id="sarrow-right" src="<?= $this->path; ?>/public/images/arrow-right-white.png" alt="Flèche droite">
            </div>
        </div>
    </div>
</section>
<section class="presentation">
    <div class="pimg-tools"></div>
    <div class="p-text">
        <h2>QUI SOMME NOUS ?</h2>
        <hr class="hr-yellow hr-presentation">
        <p>
        GC PLASTIC est spécialisée dans la fabrication de moules métalliques depuis plus de 30 ans.
        Notre société fabrique des moules métalliques pour l’industrie plastique, la fonderie d’aluminium et de zamac.
        Nous pouvons intervenir depuis l’étude de faisabilité, de pièces, du moule, sa fabrication et sa mise en production.
        Nous utilisons des procédés modernes afin de concevoir des outils qui respectent vos normes de qualités, la fabrication, le respect des délais, du cahier des charges, des nuances d’acier, le tout dans les règles de l’art.
        </p>
    </div>
</section>
<section class="last-new">
    <div class="container">
        <h2>DERNIERE ACTUALITE</h2>
        <hr class="hr-yellow hr-center">
        <div id="lnew-content" style="background-image: url('<?= $this->path; ?>/public/images/<?= $post->getImagePost() ?>')">
        <a href="<?= $this->path ?>?action=new&id=<?= $post->getId() ?>">
            <div class="lnew-content-txt">
                <h3 id="lnc-txt-title"><?= strtoupper($post->getTitle()) ?></h3>
                <p id="lnc-txt-p">
                <?= $post->getContent() ?> ...
                </p>
                <span id="lnc-txt-date">Le <?= $post->getDatePost() ?></span>
            </div>
            </a>
        </div>
    </div>
</section>
<?php require_once "./src/Views/footer.php"; ?>
