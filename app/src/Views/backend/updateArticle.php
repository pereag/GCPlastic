<?php 
    $title = "Modification d'article";
    $bannerTitle = "MODIFICATION D'ARTICLE";
    $bannerTxt = "Veuillez modifier les champs d'informations désirés.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>
    <div class="container">
    <section class="updateArticle">
        <form class="form" action="?action=sendModifPost&amp;id=<?= $post->getid() ?>" method="post">
            <input type="text" placeholder="TITRE DE L'ARTICLE" name="title" value="<?= $post->getTitle() ?>" required>
            <textarea placeholder="CONTENU" name="content" required><?= $post->getContent() ?></textarea>
            <input type="text" name="imagePost" placeholder="URL DE L'IMAGE" value=<?= $post->getImagePost() ?> required>
            <img class="updateArticle-image" src="<?= $post->getImagePost() ?>" alt="Image de l'article">
            <button class="btn-yellow btn-medium" type="submit">PUBLIER</button>
        </form>
    </section>
    </div>

<?php 
    require_once "./app/src/views/footer.php"; 
?>