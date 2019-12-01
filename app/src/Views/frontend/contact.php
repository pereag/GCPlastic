<?php 
    $title = "Contact";
    $bannerTitle = "CONTACT";
    $bannerTxt = "Nous sommes à votre écoute, n'hésitez pas à nous contacter.";
    require_once "./app/src/Views/header.php";
    require_once "./app/src/Views/banner.php";
?>

<div class="container">
    <section class="contact">
        <form class="form" action="" method="">
            <p>Vous pouvez nous contacter en remplissant le formulaire ou par mail en cliquant sur cette adresse: <a class="contact-mail" href="mailto:gcplastic@gcplastic.fr, mailto:david@gcplastic.fr">Gcplastic@gcplastic.fr</a></p>
            <input id="lastnameContact" type="text" name="lastname" placeholder="NOM" required>
            <input id="firstnameContact" type="text" name="firstname" placeholder="PRENOM" required>
            <input id="societyContact" type="text" name="society" placeholder="SOCIETE (FACULTATIF)">
            <input id="emailContact" type="email" name="email" placeholder="EMAIL" required>
            <textarea id="messageContact" rows="10" cols="33" name="message" placeholder="MESSAGE" required></textarea>
            <p id="statut-form-contact"></p>
        </form>
        <div class="buttonContact-content">
            <button id="buttonContact" type="submit" class="btn-yellow btn-medium">ENVOYER</button>
        </div>
    </section>
</div>

<?php require_once "./app/src/Views/footer.php"; 