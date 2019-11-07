<?php 
    $title = "Création d'article";
    $bannerTitle = "CREATION D'ARTICLE";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
    <div class="container">
        <form class="form" action="?action=addPost" method="post">
            <input type="text" name="title" placeholder="TITRE DE L'ARTICLE">
            <textarea name="content" placeholder="CONTENU"></textarea>
            <label for="image">Image de l'article</label>
            <input type="file">
            <button class="btn-yellow btn-medium" type="submit">PUBLIER</button>
        </form>
    </div>

<?php 
    require_once "./src/views/footer.php"; 
?>