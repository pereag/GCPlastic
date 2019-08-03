<?php 
    $title = "Parc machines";
    $bannerTitle = "PARC MACHINES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
    <section class="park">
        <h2 id="park-title">Fraisage</h2>
        <hr class="yello-hr">
        <div class="park-nav">
            <img class="btn-arrow-left" id="pbtn-arrow-left" src="" alt="Fleche de gauche">
            <div class="pnav-left">
                <h3 id="pnav-left-titre">Tours</h3>
                <img id="pnav-left-img" src="" alt="images tours">
            </div>
            <div class="pnav-center">
                <img id="pnav-center-img" src="" alt="Image fraiseuse">
            </div>
            <div class="pnav-right">
                <h3 id="pnav-right-titre">Electro-erosion</h3>
                <img id="pnav-right-img" src="" alt="images electro-erosion">
            </div>
            <img class="btn-arrow-right" id="pbtn-arrow-right" src="" alt="Fleche de doite">
        </div>
        <p id="park-p">
        </p>
        <div id="park-list">

        </div>
    </section>
<?php require_once "./src/Views/footer.php"; ?>