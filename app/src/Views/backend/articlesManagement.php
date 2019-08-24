<?php 
    $title = "Espace d'administration";
    $bannerTitle = "ESPACE D'ADMINISTRATION";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>  
    <div class="container">
        <section class="articlesManager">
        <table id="tableArticles" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Extrait</th>
                <th>Image</th>
                <th>Date et heure</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Titre</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore non eius nobis neque nisi blanditiis ...</td>
                <td><img src="" alt="Image de l'article"></td>
                <td>Le 20/12/19 à 8h30</td>
                <th><a href="<?= $this->path ?>/updateArticle">modifier</a></th>
                <th><a href="<?= $this->path ?>/deleteArticle">supprimer</a></th>
            </tr>
        </tfoot>
    </table>
            <a href="<?= $this->path ?>/newArticle"><button class="btn-yellow btn-large">CREE UN NOUVEL ARTICLE</button></a>
        </section>
    </div>
   
<?php 
    require_once "./src/views/footer.php"; 
?>