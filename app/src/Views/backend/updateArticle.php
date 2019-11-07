<?php 
    $title = "Modification d'article";
    $bannerTitle = "MODIFICATION D'ARTICLE";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
    <div class="container">
    <section class="updateArticle">
        <form class="form" action="?action=sendModifPost&amp;id=<?= $post->getid() ?>" method="post">
            <input type="text" placeholder="TITRE DE L'ARTICLE" name="title" value="<?= $post->getTitle() ?>" required>
            <textarea placeholder="CONTENU" name="content" required><?= $post->getContent() ?></textarea>
                <img class="updateArticle-image"src="<?= $this->path; ?>/public/images/<?= $post->getImagePost() ?>" alt="Image de l'article">
                <div class="updateArticle-imageForm">
                    <label for="image">Changer votre image</label><br>
                    <input type="file">
                </div>
            <button class="btn-yellow btn-medium" type="submit">PUBLIER</button>
        </form>
    </section>
    </div>

<?php 
    require_once "./src/views/footer.php"; 
?>