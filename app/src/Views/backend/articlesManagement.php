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
                <?php
                    for ($i = 0; $i < count($post); $i = $i + 1) {
                ?>
                    <tr>
                        <td><?= $post[$i]->getTitle() ?></td>
                        <td><?= $post[$i]->getContent() ?> ...</td>
                        <td><?= $post[$i]->getdatePost() ?></td>
                        <th><a href="<?= $this->path ?>?action=updateArticle&id=<?= $post[$i]->getId() ?>">modifier</a> | <a href="<?= $this->path ?>?action=deletePostAdmin&id=<?= $post[$i]->getId() ?>">supprimer</a></th>
                    </tr>
                <?php
                    }
                ?>
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