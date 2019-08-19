<?php 
    $title = "Administration";
    $bannerTitle = "ADMINISTRATION";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>

<div class="container">
    <section class="admin-connection">
        <form class="form" action="" method="">
            <input type="text" name="pseudo" placeholder="PSEUDO" required>
            <input type="password" name="password" placeholder="MOT DE PASSE" required>
            <button type="submit" class="btn-yellow btn-medium">CONNECTION</button>
        </form>
    </section>
</div>

<?php 
    require_once "./src/views/footer.php"; 
?>