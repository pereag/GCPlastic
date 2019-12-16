<?php 
    $title = "Création d'article";
    $bannerTitle = "CREATION D'ARTICLE";
    $bannerTxt = "Veuillez remplir les champs du formulaire.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>
    <div class="container">
        <form class="form" action="?action=addPost" method="post" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="TITRE DE L'ARTICLE" required>
            <textarea name="content" placeholder="CONTENU" required></textarea>
            <input type="file" name="imagePost" required>
            <button class="btn-yellow btn-medium" type="submit">PUBLIER</button>
        </form>
    </div>

<?php 
    require_once "./app/src/views/footer.php"; 
?> 