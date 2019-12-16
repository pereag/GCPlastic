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
                La fraiseuse est une machine-outil permettant de réaliser des opérations d’usinage à l’aide d’une fraise. Elle peut également être équipée d’un foret, de taraud ou d’alésoir pour réaliser des opérations de perçage et taraudage.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Fraiseuse traditionnels</h4>
                    <h5>Fraiseuse marmo 400 K 20</h5>
                    <p>fraiseuse 4 axes</p>
                    <h5>Fraiseuse narutama 1200</h5>
                    <p>Fraiseuse 3 axes</p>
                    <h5>Fraiseuse brone lex 2000</h5>
                    <p>Fraiseuse 3 axes</p>
                </div>
                <div class="park-list-center park-list-content">
                    <h4>Fraiseuse numeriques</h4>
                    <h5>Fraiseuse Huron SXD 833</h5>
                    <p>Commandes numérique 3 axes</p>
                    <h5>Fraiseuse Novar 800 K 30</h5>
                    <p>Commandes numériques 4 axes</p>
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
                Le tour est un mécanisme ou une machine-outil sur laquelle on peut fixer une pièce que l'on veut faire tourner sur elle-même pour la travailler. 
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Tours traditionnels</h4>
                    <h5>Tours famax 20R</h5>
                    <p>Tours à bois</p>
                    <h5>Tour fanuc 1998</h5>
                    <p>Tours 2 axes</p>
                    <h5>Tours akam 2000</h5>
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
                L'électro-érosion, appelé aussi EDM (Electrical Discharge Machining), est un procédé d'usinage qui consiste à enlever de la matière dans une pièce en utilisant des décharges électriques.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Electro-erosion</h4>
                    <h5>Fanuc Electro</h5>
                    <p>219F 20K</p>
                    <h5>Katar</h5>
                    <p>20PD 6Q</p>
                    <h5>Novateck</h5>
                    <p>10D 80TI</p>
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
            L’injection plastique est un procédé de mise en œuvre des thermoplastiques. Il consiste à ramollir la matière plastique pour l’amener en phase plastique, à l’injecter dans un moule pour le mettre en forme et à la refroidir.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>presse à injecter</h4>
                    <h5>Billion</h5>
                    <p>Krauss Maffei 150T, Krauss Maffei 175T</p>
                    <h5>Arburg</h5>
                    <p>Arburg allrounder 50T</p>
                    <h5>Bucher faht</h5>
                    <p>Bucher 120T</p>
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
            La rectifieuse est une machine-outil qui permet de faire de la rectification. Cette machine-outil utilise une meule afin de produire une surface parfaite de rugosité faible après usinage par une fraiseuse ou par un tour.
            </p>
            <div id="park-list">
                <div class="park-list-left park-list-content">
                    <h4>Rectifieuse</h4>
                    <h5>Rochard</h5>
                    <p>Rochard 40T</p>
                    <h5>Buigsburt</h5>
                    <p>Buigsburt 700T</p>
                    <h5>novake</h5>
                    <p>Super 97</p>
                </div>
                <div class="park-list-center park-list-content">
                    <h5>Patrouk</h5>
                    <p>A18T</p>
                    <h5>Mirmilon</h5>
                    <p>122T 30</p>
                    <h5>Valek</h5>
                    <p>Samus 750</p>
                </div>
            </div>
        </section>
    </div>
<?php require_once "./app/src/Views/footer.php"; ?>