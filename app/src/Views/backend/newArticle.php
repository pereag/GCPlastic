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
        <button class="btn-yellow btn-medium" rows="10" cols="33" type="submit">PUBLIER</button>
    </form>
    </div>

<?php 
    require_once "./src/views/footer.php"; 
?>