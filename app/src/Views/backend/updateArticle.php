<?php 
    $title = "Modification d'article";
    $bannerTitle = "MODIFICATION D'ARTICLE";
    require_once "./src/Views/header.php";
?>

    <form action="" methode="">
        <input type="text" placeholder="TITRE DE L'ARTICLE" required>
        <textarea placeholder="CONTENU" required>
        <button type="submit">MODIFIER</button>
    </form>

<?php 
    require_once "./src/views/footer.php"; 
?>