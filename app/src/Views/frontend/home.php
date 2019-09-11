<?php 
    $title = "Accueil";
    require_once "./src/Views/header.php"; 
?>

<section id="slideshow">
    <div class="sc-vertical-align">
        <div class="slideshow-content">
            <img id="sarrow-left" src="<?= $this->path; ?>/public/images/arrow-left.png" alt="Fleche gauche">
            <div class='sbutton-groupe'>
                <div id="sstop-button">
                    <img id="spause" class="sstop-button__active" src="<?= $this->path; ?>/public/images/pause.png" alt="pause">
                    <img id="splay" class="sstop-button__desable" src="<?= $this->path; ?>/public/images/play.png" alt="pause">
                </div>
                <img id="sarrow-right" src="<?= $this->path; ?>/public/images/arrow-right.png" alt="Flèche droite">
            </div>
        </div>
    </div>
</section>
<section class="presentation">
    <img class="pimg-tools" src="<?= $this->path; ?>/public/images/tool.jpg" alt="Image fraise">
    <div class="p-text">
        <h2>QUI SOMME NOUS ?</h2>
        <hr class="hr-yellow hr-presentation">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laboriosam explicabo veritatis similique quaerat laudantium,
            ullam, autem reiciendi sapiente doloremque iusto, aspernatur
            quam.
        </p>
    </div>
</section>
<section class="last-new">
    <div class="container">
        <h2>DERNIERE ACTUALITE</h2>
        <hr class="hr-yellow hr-center">
        <div id="lnew-content">
            <div class="lnew-content-txt">
                <h3 id="lnc-txt-title">TITRE</h3>
                <p id="lnc-txt-p">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Odit, itaque sapiente. Officiis quae...
                </p>
                <span id="lnc-txt-date">20/15/2020 à 18h00</span>
            </div>
        </div>
    </div>
</section>
<?php require_once "./src/Views/footer.php"; ?>
