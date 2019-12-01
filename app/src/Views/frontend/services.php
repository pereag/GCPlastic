<?php 
    $title = "Services";
    $bannerTitle = "SERVICES";
    $bannerTxt = "La conception d'outillages, l'usinage et la réalisation de prototypes n'ont pas de secrets pour nous. GC Plastic vous garantit cette expertise.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>
<div class="container">
    <section class="services">
        <div id="services-nav">
            <div id="tools" class="services-nav-block">
                <div class="snav-block-content">
                    <h3 class="snav-title">CONCEPTION & REALISATION D'OUTILLAGES FRANCE OU LOW COST</h3>
                    <span>En savoir plus</span>
                </div>
            </div>
            <div id="maintenance" class="services-nav-block">
                <div class="snav-block-content">
                    <h3 class="snav-title">MODIFICATION, REPARATION & MAINTENANCE</h3>
                    <span>En savoir plus</span>
                </div>
            </div>
            <div id="machining" class="services-nav-block">
                <div class="snav-block-content">
                    <h3 class="snav-title">USINAGE A FACON</h3>
                    <span>En savoir plus</span>
                </div>
            </div>
            <div id="prototype" class="services-nav-block">
                <div class="snav-block-content">
                    <h3 class="snav-title">CONCEPTION ET REALISATION DE PROTOTYPES</h3>
                    <span>En savoir plus</span>
                </div>
            </div>
        </div>

        <div id="tools-content" class="sdescription-content content__active">
            <h2>CONCEPTION ET REALISATION D'OUTILLAGES</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Nous nous chargons de l'etude et de la fabrication de vos moules aciers ou aluminiums, utilisées pour l'obtention de 
            pièces plastiques ou cire perdue. Notre savoir-faire nous permet de vous garantir des outillages de qualité, pour un résultat optimum de vos piéces.</p>
            <div class="images-groupe">
                <img class="services-img" src="<?= $this->path; ?>/public/images/tools-1.jpg" alt="Image outillage">
                <img class="services-img" src="<?= $this->path; ?>/public/images/tools-2.jpg" alt="Image outillage">
            </div>
        </div>
        <div id="maintenance-content" class="sdescription-content content__desactive">
            <h2>MODIFICATION, REPARATION ET MAINTENANCE</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Un outillage cassé? une modification à apporter? Votre outillage a besoin d'une 2ème jeunesse? Nous nous en occupons.
 </p>
            <div class="images-groupe">
                <img class="services-img" src="<?= $this->path; ?>/public/images/maintenance-1.jpg" alt="Image maintenance">
                <img class="services-img" src="<?= $this->path; ?>/public/images/maintenance-2.jpg" alt="Image maintenance">
            </div>
        </div>
        <div id="machining-content" class="sdescription-content content__desactive">
            <h2>DECOUPE A FIL ELECTRO-EROSION</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Si vous avez des pièces à réaliser en découpe fil ou électro-érosion, nous pouvons nous en charger.</p>
            <div class="images-groupe">
                <img  class="services-img"src="<?= $this->path; ?>/public/images/erosion-1.jpg" alt="Image electro-erosion">
                <img  class="services-img"src="<?= $this->path; ?>/public/images/erosion-2.jpg" alt="Image electro-erosion">
            </div>
        </div>
        <div id="prototype-content" class="sdescription-content content__desactive">
            <h2>CONCEPTION ET REALISATION DE PROTOTYPES</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Notre bureau d'études se chargera, avec votre collaboration, de la conception à l'aide de vos premières ébauches, de vos premiers croquis, plans ... Notre atelier effectuera ensuite la fabrication votre prototype.</p>
            <div class="images-groupe">
                <img class="services-img" src="<?= $this->path; ?>/public/images/prototype-1.jpg" alt="Image prototype">
                <img class="services-img" src="<?= $this->path; ?>/public/images/prototype-2.jpg" alt="Image prototype">
            </div>
        </div>
    </section>
</div>
<?php require_once "./app/src/Views/footer.php"; ?>