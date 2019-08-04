<?php 
    $title = "Contact";
    $bannerTitle = "CONTACT";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>

<section class="contact">
    <form action="" method="">
        <input type="text" name="lastname" placeholder="Nom">
        <input type="text" name="firstname" placeholder="Prenom">
        <input type="text" name="society" placeholder="Société">
        <input type="email" name="email" placeholder="Email">
        <input type="textarea" name="message" placeholder="Message">
        <button type="submit" class="btn-yellow">Envoyer</button>
    </form>
</section>

<?php require_once "./src/Views/footer.php"; 