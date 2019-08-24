        <footer>
            <div class="fdiv fdiv-rborder fdiv-1">
            </div>
            <div class="fdiv fdiv-rborder fdiv-2">
                <img class="fdiv-icon fdiv-icon-location" src="<?= $this->path; ?>/public/images/location.png" alt="Image localisation">
                <span>9 Rue des Rubis,<br> 38280 Villette d'Anthon</span>
            </div>
            <div class="fdiv fdiv-rborder fdiv-3">
                <img class="fdiv-icon fdiv-icon-mail " src="<?= $this->path; ?>/public/images/envelope.png" alt="Image email">
                <span>Gcplastic@gcplastic.fr</span>
            </div>
            <div class="fdiv fdiv-rborder fdiv-4">
                <img class="fdiv-icon fdiv-icon-phone " src="<?= $this->path; ?>/public/images/telephone.png" alt="Image Téléphone">
                <span>04 78 31 18 31</span>
            </div>
            <div class="fdiv fdiv-white fdiv-5">
            <span><a href="<?= $this->path; ?>/admin">Administration</a></span>
                <span>Copyright © 2019</span><br>
                <span>GC Plastic</span><br>
                <span>Tous droits réservés</span><br>
                <span><a href="<?= $this->path; ?>/legalNotice">Mentions légales</a></span>
            </div>
            <div class="fdiv fdiv-6"></div>
        </footer>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <?php if(isset($servicesScript) && $servicesScript) {
            ?> 
                <script type="text/javascript" src="<?= $this->path; ?>/public/js/ServicesNav.js"></script>
        <?php } if(isset($datatableScript) && $datatableScript) { 
            ?>
            <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="<?= $this->path; ?>/public/js/ArticlesManagement.js"></script>       
        <?php } if(isset($slidershowScript) && $slidershowScript) {
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Slidershow.js"></script>
        <?php } if(isset($parkScript) && $parkScript) {
            ?>
            <script type="text/javascript" src="<?= $this->path ?>/public/js/Park.js"></script>
        <?php } ?>
    </body>
</html>