<?php 
    $title = "Contact";
    $bannerTitle = "CONTACT";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>

<div class="container">
    <section class="contact">
        <form class="contact-form" action="" method="">
            <input type="text" name="lastname" placeholder="NOM" required>
            <input type="text" name="firstname" placeholder="PRENOM" required>
            <input type="text" name="society" placeholder="SOCIETE">
            <input type="email" name="email" placeholder="EMAIL" required>
            <textarea rows="10" cols="33" name="message" placeholder="MESSAGE">
            </textarea>
            <button type="submit" class="btn-yellow">ENVOYER</button>
        </form>
    </section>
</div>

<?php require_once "./src/Views/footer.php"; 