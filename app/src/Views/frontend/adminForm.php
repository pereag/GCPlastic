<?php 
    $title = "Administration";
    $bannerTitle = "ADMINISTRATION";
    $bannerTxt = "Cette page de connexion est réservé à l'administration du site.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>

<div class="container">
    <section class="admin-connection">
        <form class="form" action="?action=verifyLogin" method="post">
            <input type="text" name="pseudo" placeholder="PSEUDO" required>
            <input type="password" name="password" placeholder="MOT DE PASSE" required>
            <button type="submit" class="btn-yellow btn-medium">CONNECTION</button>
        </form>
    </section>
</div>

<?php require_once "./app/src/Views/footer.php"; 