<?php 
    $title = "Modification d'article";
    $bannerTitle = "MODIFICATION D'ARTICLE";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
    <div class="container">
    <section class="updateArticle">
        <form class="form" action="" methode="">
            <input type="text" placeholder="TITRE DE L'ARTICLE" required>
            <textarea placeholder="CONTENU" required></textarea>
                <img class="updateArticle-image"src="" alt="Image de l'article">
                <div class="updateArticle-imageForm">
                    <label for="image">Changer votre image</label><br>
                    <input type="file" name="image" placeholder="TITRE DE L'ARTICLE" required>
                </div>
            <button class="btn-yellow btn-medium" type="submit">PUBLIER</button>
        </form>
    </section>
    </div>

<?php 
    require_once "./src/views/footer.php"; 
?>