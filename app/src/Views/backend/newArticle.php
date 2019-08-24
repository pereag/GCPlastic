<?php 
    $title = "Création d'article";
    $bannerTitle = "CREATION D'ARTICLE";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>
    <div class="container">
    <form class="form" action="" methode="">
        <input type="text" placeholder="TITRE DE L'ARTICLE" required>
        <textarea placeholder="CONTENU" required></textarea>
        <label for="image">Image de l'article</label>
        <input type="file">
        <button class="btn-yellow btn-medium" type="submit">PUBLIER</button>
    </form>
    </div>

<?php 
    require_once "./src/views/footer.php"; 
?>