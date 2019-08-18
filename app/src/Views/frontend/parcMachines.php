<?php 
    $title = "Parc machines";
    $bannerTitle = "PARC MACHINES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
    <div class="container">
        <section class="park">
            <h2 id="park-title">Fraisage</h2>
            <hr class="hr-yellow hr-center">
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi ipsa, quaerat eligendi id ullam magnam facilis! Vel impedit eum facere adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Fraiseuse traditionnels</h4>
                    <h5>Nom de la fraiseuse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la fraiseuse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la fraiseuse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
                <div class="park-list-center park-list-content">
                    <h4>Fraiseuse numeriques</h4>
                    <h5>Nom de la fraiseuse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la fraiseuse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </section>
    </div>
<?php require_once "./src/Views/footer.php"; ?>