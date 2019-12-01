<?php 
    $title = "Parc machines";
    $bannerTitle = "PARC MACHINES";
    $bannerTxt = "Nous disposons d'un parc machines complet qui nous permet de vous proposer des usinages techniques et de qualités.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>
    <div class="container">
        <section id="park-milling" class="park park__active">
            <h2 id="park-title">FRAISAGE</h2>
            <hr class="hr-yellow hr-center">
            <div class="park-nav">
                <div class="vertical-align">
                    <img class="btn-tower" id="pbtn-arrow-left" src="<?= $this->path ?>/public/images/arrow-left.png" alt="Fleche de gauche">
                </div>
                <div class="nav-left">
                    <img class="btn-tower" id="nav-left-img" src="<?= $this->path; ?>/public/images/tower.jpg" alt="Tour">
                </div>
                <div class="nav-center">
                    <img id="nav-center-img" src="<?= $this->path; ?>/public/images/milling.jpg" alt="Fraiseuse">
                </div>
                <div class="nav-right">
                    <img class="btn-grinding" id="nav-right-img" src="<?= $this->path; ?>/public/images/grinding.jpg" alt="Rectifieuse">
                </div>
                <div class="vertical-align">
                    <img class="btn-grinding" id="pbtn-arrow-right" src="<?= $this->path ?>/public/images/arrow-right.png" alt="Fleche de doite">
                </div>
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
        <section id="park-tower" class="park park__desable">
            <h2 id="park-title">TOUR</h2>
            <hr class="hr-yellow hr-center">
            <div class="park-nav">
                <div class="vertical-align">
                    <img class="btn-erosion" id="pbtn-arrow-left" src="<?= $this->path ?>/public/images/arrow-left.png" alt="Fleche de gauche">
                </div>
                <div class="nav-left">
                    <img class="btn-erosion" id="nav-left-img" src="<?= $this->path; ?>/public/images/erosion.jpg" alt="Electro-erosion">
                </div>
                <div class="nav-center">
                    <img id="nav-center-img" src="<?= $this->path; ?>/public/images/tower.jpg" alt="Tour">
                </div>
                <div class="nav-right">
                    <img class="btn-milling" id="nav-right-img" src="<?= $this->path; ?>/public/images/milling.jpg" alt="Fraiseuse">
                </div>
                <div class="vertical-align">
                    <img class="btn-milling" id="pbtn-arrow-right" src="<?= $this->path ?>/public/images/arrow-right.png" alt="Fleche de doite">
                </div>
            </div>
            <p id="park-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi ipsa, quaerat eligendi id ullam magnam facilis! Vel impedit eum facere adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Tours traditionnels</h4>
                    <h5>Nom du tour</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom du tour</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom du tour</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
                <div class="park-list-center park-list-content">
                    <h4>Tours numeriques</h4>
                    <h5>Nom du tour</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom du tour</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </section>
        <section id="park-erosion" class="park park__desable">
            <h2 id="park-title">ELECTRO-EROSION</h2>
            <hr class="hr-yellow hr-center">
            <div class="park-nav">
                <div class="vertical-align">
                    <img class="btn-injection" id="pbtn-arrow-left" src="<?= $this->path ?>/public/images/arrow-left.png" alt="Fleche de gauche">
                </div>
                <div class="nav-left">
                    <img class="btn-injection" id="nav-left-img" src="<?= $this->path; ?>/public/images/injection.jpg" alt="Injection">
                </div>
                <div class="nav-center">
                    <img id="nav-center-img" src="<?= $this->path; ?>/public/images/erosion.jpg" alt="Electro-erosion">
                </div>
                <div class="nav-right">
                    <img class="btn-tower" id="nav-right-img" src="<?= $this->path; ?>/public/images/tower.jpg" alt="Tour">
                </div>
                <div class="vertical-align">
                    <img class="btn-tower" id="pbtn-arrow-right" src="<?= $this->path ?>/public/images/arrow-right.png" alt="Fleche de doite">
                </div>
            </div>
            <p id="park-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi ipsa, quaerat eligendi id ullam magnam facilis! Vel impedit eum facere adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Electro-erosion</h4>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </section>
        <section id="park-injection" class="park park__desable">
            <h2 id="park-title">INJECTION</h2>
            <hr class="hr-yellow hr-center">
            <div class="park-nav">
                <div class="vertical-align">
                    <img class="btn-grinding" id="pbtn-arrow-left" src="<?= $this->path ?>/public/images/arrow-left.png" alt="Fleche de gauche">
                </div>
                <div class="nav-left">
                    <img class="btn-grinding" id="nav-left-img" src="<?= $this->path; ?>/public/images/grinding.jpg" alt="Rectifieuse">
                </div>
                <div class="nav-center">
                    <img id="nav-center-img" src="<?= $this->path; ?>/public/images/injection.jpg" alt="Injection">
                </div>
                <div class="nav-right">
                    <img class="btn-erosion" id="nav-right-img" src="<?= $this->path; ?>/public/images/erosion.jpg" alt="Electro-erosion">
                </div>
                <div class="vertical-align">
                    <img class="btn-erosion" id="pbtn-arrow-right" src="<?= $this->path ?>/public/images/arrow-right.png" alt="Fleche de doite">
                </div>
            </div>
            <p id="park-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi ipsa, quaerat eligendi id ullam magnam facilis! Vel impedit eum facere adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>presse à injecter</h4>
                    <h5>Nom de la presse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la presse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la presse</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </section>
        <section id="park-grinding" class="park park__desable">
            <h2 id="park-title">RECTIFIEUSE</h2>
            <hr class="hr-yellow hr-center">
            <div class="park-nav">
                <div class="vertical-align">
                    <img class="btn-milling" id="pbtn-arrow-left" src="<?= $this->path ?>/public/images/arrow-left.png" alt="Fleche de gauche">
                </div>
                <div class="nav-left">
                    <img  class="btn-milling" id="nav-left-img" src="<?= $this->path; ?>/public/images/milling.jpg" alt="Fraiseuse">
                </div>
                <div class="nav-center">
                    <img id="nav-center-img" src="<?= $this->path; ?>/public/images/grinding.jpg" alt="Rectifieuse">
                </div>
                <div class="nav-right">
                    <img id="nav-right-img" class="btn-injection" src="<?= $this->path; ?>/public/images/injection.jpg" alt="Injection">
                </div>
                <div class="vertical-align">
                    <img class="btn-injection" id="pbtn-arrow-right" src="<?= $this->path ?>/public/images/arrow-right.png" alt="Fleche de doite">
                </div>
            </div>
            <p id="park-p">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quasi ipsa, quaerat eligendi id ullam magnam facilis! Vel impedit eum facere adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Rectifieuse</h4>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
                <div class="park-list-center park-list-content">
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                    <h5>Nom de la machine</h5>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
            </div>
        </section>
    </div>
<?php require_once "./app/src/Views/footer.php"; ?>