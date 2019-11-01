<?php 
    $title = "Actualités";
    $bannerTitle = "ACTUALITES";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>

<section class="news">
    <div class="container">
        <div id="page" class="page-1">
            <div id="new-1" class="news-content news-content__desable">
                <div class="news-content-txt">
                    <h3 class="news-txt-title">TITRE</h3>
                    <p class="news-txt-p">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Odit, itaque sapiente. Officiis quae...
                    </p>
                    <span class="news-txt-date">20/15/2020 à 18h00</span>
                </div>
            </div>
            <div id="new-2" class="news-content news-content__desable">
                <div class="news-content-txt">
                    <h3 class="news-txt-title">TITRE</h3>
                    <p class="news-txt-p">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Odit, itaque sapiente. Officiis quae...
                    </p>
                    <span class="news-txt-date">20/15/2020 à 18h00</span>
                </div>
            </div>
            <div id="new-3" class="news-content news-content__desable">
                <div class="news-content-txt">
                    <h3 class="news-txt-title">TITRE</h3>
                    <p class="news-txt-p">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Odit, itaque sapiente. Officiis quae...
                    </p>
                    <span class="news-txt-date">20/15/2020 à 18h00</span>
                </div>
            </div>
            <div id="new-4" class="news-content news-content__desable">
                <div class="news-content-txt">
                    <h3 class="news-txt-title">TITRE</h3>
                    <p class="news-txt-p">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Odit, itaque sapiente. Officiis quae...
                    </p>
                    <span class="news-txt-date">20/15/2020 à 18h00</span>
                </div>
            </div>
            <div id="new-5" class="news-content news-content__desable">
                <div class="news-content-txt">
                    <h3 class="news-txt-title">TITRE</h3>
                    <p class="news-txt-p">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Odit, itaque sapiente. Officiis quae...
                    </p>
                    <span class="news-txt-date">20/15/2020 à 18h00</span>
                </div>
            </div>
            <div id="new-6" class="news-content news-content__desable">
                <div class="news-content-txt">
                    <h3 class="news-txt-title">TITRE</h3>
                    <p class="news-txt-p">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Odit, itaque sapiente. Officiis quae...
                    </p>
                    <span class="news-txt-date">20/15/2020 à 18h00</span>
                </div>
            </div>
        </div>
        <div id="paging" class="paging__active">
        <button id="paging-previous" class="btn-yellow btn-medium btn-news btn__desable">PRECEDENT</button>
        <button id="paging-next" class="btn-yellow btn-medium btn-news">SUIVANT</button>
        </div>
    </div> 
</section>

<?php require_once "./src/Views/footer.php";