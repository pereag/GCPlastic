<?php 
    $title = "Services";
    $bannerTitle = "SERVICES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
<div class="container">
    <section class="services">
        <div class="services-nav">
            <div id="tools" class="services-nav-block">
                <div class="snav-block-content">
                    <h3>CONCEPTION ET REALISATION D'OUTILLAGES</h3>
                    <span id="btn-Info-tools">En savoir plus</span>
                </div>
            </div>
            <div id="maintenance" class="services-nav-block">
                <div class="snav-block-content">
                    <h3>MODIFICATION, REPARATION ET MAINTENANCE</h3>
                    <span id="btn-Info-maintenance">En savoir plus</span>
                </div>
            </div>
            <div id="erosion" class="services-nav-block">
                <div class="snav-block-content">
                    <h3>DECOUPE A FIL ET ELECTRO-EROSION</h3>
                    <span id="btn-Info-erosion">En savoir plus</span>
                </div>
            </div>
            <div id="prototype" class="services-nav-block">
                <div class="snav-block-content">
                    <h3>CONCEPTION ET REALISATION DE PROTOTYPES</h3>
                    <span id="btn-Info-prototype">En savoir plus</span>
                </div>
            </div>
        </div>

        <div id="Tools-content" class="sdescription-content">
            <h2>CONCEPTION ET REALISATION D'OUTILLAGES</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Nous nous chargons de l'etude et de la fabrication de vos moules aciers ou aluminiums, utilisées pour l'obtention de 
            pièces plastiques ou cire perdue. Notre savoir-faire nous permet de vous garantir des outillages de qualité, pour un résultat optimum de vos piéces.</p>
            <div class="images-groupe">
                <img class="services-img" src="" alt="Image outillage">
                <img class="services-img" src="" alt="Image outillage">
            </div>
        </div>
        <div id="maintenance-content" class="sdescription-content content__desactive">
            <h2>MODIFICATION, REPARATION ET MAINTENANCE</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Nous nous chargons de l'etude et de la fabrication de vos moules aciers ou aluminiums, utilisées pour l'obtention de 
            pièces plastiques ou cire perdue. Notre savoir-faire nous permet de vous garantir des outillages de qualité, pour un résultat optimum de vos piéces.</p>
            <div class="images-groupe">
                <img class="services-img" src="" alt="Image maintenance">
                <img class="services-img" src="" alt="Image maintenance">
            </div>
        </div>
        <div id="erosion-content" class="sdescription-content content__desactive">
            <h2>DECOUPE A FIL ELECTRO-EROSION</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Nous nous chargons de l'etude et de la fabrication de vos moules aciers ou aluminiums, utilisées pour l'obtention de 
            pièces plastiques ou cire perdue. Notre savoir-faire nous permet de vous garantir des outillages de qualité, pour un résultat optimum de vos piéces.</p>
            <div class="images-groupe">
                <img  class="services-img"src="" alt="Image electro-erosion">
                <img  class="services-img"src="" alt="Image electro-erosion">
            </div>
        </div>
        <div id="prototypes-content" class="sdescription-content content__desactive">
            <h2>CONCEPTION ET REALISATION DE PROTOTYPES</h2>
            <hr class="hr-yellow hr-center">
            <p class="sdescription-content-txt">Nous nous chargons de l'etude et de la fabrication de vos moules aciers ou aluminiums, utilisées pour l'obtention de 
            pièces plastiques ou cire perdue. Notre savoir-faire nous permet de vous garantir des outillages de qualité, pour un résultat optimum de vos piéces.</p>
            <div class="images-groupe">
                <img class="services-img" src="" alt="Image prototype">
                <img class="services-img" src="" alt="Image prototype">
            </div>
        </div>
    </section>
</div>
<?php require_once "./src/Views/footer.php"; ?>