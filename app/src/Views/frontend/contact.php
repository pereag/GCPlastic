<?php 
    $title = "Contact";
    $bannerTitle = "CONTACT";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>

<div class="container">
    <section class="contact">
        <form class="contact-form" action="" method="">
            <p>Vous pouvez nous contacter en remplissant le formulaire ou par mail en cliquant sur cette adresse: <a class="contact-mail" href="mailto:gcplastic@gcplastic.fr, mailto:david@gcplastic.fr">Gcplastic@gcplastic.fr</a></p>
            <input type="text" name="lastname" placeholder="NOM" required>
            <input type="text" name="firstname" placeholder="PRENOM" required>
            <input type="text" name="society" placeholder="SOCIETE (FACULTATIF)">
            <input type="email" name="email" placeholder="EMAIL" required>
            <textarea rows="10" cols="33" name="message" placeholder="MESSAGE" required></textarea>
            <button type="submit" class="btn-yellow btn-medium">ENVOYER</button>
        </form>
    </section>
</div>

<?php require_once "./src/Views/footer.php"; 