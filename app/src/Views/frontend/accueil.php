<?php 
    $title = "Accueil";
    require_once "./src/Views/header.php"; 
?>

<section class="slidershow">
    <div id="slidershow-content">
        <img id="sarrow-left" src="<?= $this->imagesPath ?>/arrow-left.png" alt="Fleche gauche">
        <img id="spause" src="<?= $this->imagesPath ?>/arrow-right.png" alt="pause">
        <img id="sarrow-right" src="<?= $this->imagesPath ?>/pause.png" alt="Flèche droite">
    </div>
</section>
<section class="presentation">
    <img class="pimg-tools" src="" alt="Image fraise">
    <div class="p-text">
        <h2>QUI SOMME NOUS ?</h2>
        <hr class="yellow-hr">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laboriosam explicabo veritatis similique quaerat laudantium,
            ullam, autem reiciendi sapiente doloremque iusto, aspernatur
            quam.
        </p>
    </div>
</section>
<section class="last-new">
    <h2>DERNIERE ACTUALITEE</h2>
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
</section>
<?php require_once "./src/Views/footer.php"; ?>
