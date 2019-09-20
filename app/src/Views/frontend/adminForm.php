<?php 
    $title = "Administration";
    $bannerTitle = "ADMINISTRATION";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>

<div class="container">
    <section class="admin-connection">
        <form class="form" action="<?php $this->path ?>?action=verifyLogin" method="post">
            <input type="text" name="pseudo" placeholder="PSEUDO" >
            <input type="password" name="password" placeholder="MOT DE PASSE" >
            <button type="submit" class="btn-yellow btn-medium">CONNECTION</button>
        </form>
    </section>
</div>

<?php 
    require_once "./src/views/footer.php"; 
?>