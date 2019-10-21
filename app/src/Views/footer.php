        <footer>
            <div class="fdiv fdiv-rborder fdiv-1">
            </div>
            <div class="fdiv fdiv-rborder fdiv-2">
                <img class="fdiv-icon fdiv-icon-location" src="<?= $this->path; ?>/public/images/location.png" alt="Image localisation">
                <span>9 Rue des Rubis,<br> 38280 Villette d'Anthon</span>
            </div>
            <div class="fdiv fdiv-rborder fdiv-3">
                <img class="fdiv-icon fdiv-icon-mail" src="<?= $this->path; ?>/public/images/envelope.png" alt="Image email">
                <span>Gcplastic@gcplastic.fr</span>
            </div>
            <div class="fdiv fdiv-rborder fdiv-4">
                <img class="fdiv-icon fdiv-icon-phone" src="<?= $this->path; ?>/public/images/telephone.png" alt="Image Téléphone">
                <span>04 78 31 18 31</span>
            </div>
            <div class="fdiv fdiv-white fdiv-5">
            <?php 
            if(!empty($_SESSION) && isset($_SESSION['auth'])) {
                echo '<span><a href="' .$this->path. '?action=articlesManagement">Tableau de bord</a> | <a href="' .$this->path. '?action=sessionDestroy">Déconnexion</a></span>';
            } else {
                echo '<span><a href="' .$this->path. '?action=admin">Administration</a></span>';
            } ?>
                <span>Copyright © 2019</span><br>
                <span>GC Plastic</span><br>
                <span>Tous droits réservés</span><br>
                <span><a href="<?= $this->path; ?>?action=legalNotice">Mentions légales</a></span>
            </div>
            <div class="fdiv fdiv-6"></div>
        </footer>
        <div id="loader">
            <div class="loader-content">
                <img id="loader-icon" src="<?= $this->path; ?>/public/images/loader.png" draggable="false" alt="icone de chargement">
            </div>
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <?php if(isset($servicesScript) && $servicesScript) {
            ?> 
                <script type="text/javascript" src="<?= $this->path; ?>/public/js/ServicesNav.js"></script>
        <?php } if(isset($datatableScript) && $datatableScript) { 
            ?>
            <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            <script type="text/javascript" src="<?= $this->path; ?>/public/js/ArticlesManagement.js"></script>       
        <?php } if(isset($slideshowScript) && $slideshowScript) {
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Slideshow.js"></script>
        <?php } if(isset($parkScript) && $parkScript) {
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Park.js"></script>
        <?php } if(isset($pagingScript) && $pagingScript) {
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Page.js"></script>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Paging.js"></script>
        <?php } if(isset($titleAnimationScript) && $titleAnimationScript) { 
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/TitleAnimation.js"></script>
        <?php }  if(isset($contactScript) && $contactScript) { 
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Contact.js"></script>
        <?php } ?>
        <script type="text/javascript" src="<?= $this->path ?>/public/js/Loader.js"></script>
        <script type="text/javascript" src="<?= $this->path ?>/public/js/MobileMenu.js"></script>
        <div style="background:pink;color:#333;position:fixed;right:0;bottom:0;z-index:99999999;font:1em arial;opacity:.9" id="ld"></div><script>setInterval(function(){if($(window).height()>=$(document).height()){$('#ld').text($(document).width()+' px');}else{$('#ld').text($(document).width()+17+' px');}},150);</script>
    </body>
</html>