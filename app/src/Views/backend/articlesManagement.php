<?php 
    $title = "Espace d'administration";
    $bannerTitle = "ESPACE D'ADMINISTRATION";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>  
    <div class="container">
        <section class="articlesManager">
        <table id="tableArticles" class="display responsive" style="width:100%">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Extrait</th>
                    <th>Date et heure</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Titre</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore non eius nobis neque nisi blanditiis ...</td>
                    <td>Le 20/12/19 à 8h30</td>
                    <th><a href="<?= $this->path ?>?action=updateArticle&id=14">modifier</a> | <a href="<?= $this->path ?>?action=deletePostAdmin&id=7">supprimer</a></th>
                </tr>
            </tbody>
        </table>
        <div class="button-div">
            <a href="<?= $this->path ?>?action=newArticle"><button class="btn-yellow btn-large btn-articleManager">CREE UN NOUVEL ARTICLE</button></a>
        </div>
        </section>
    </div>
   
<?php 
    require_once "./src/views/footer.php"; 
?>