<?php 
    $title = "Espace d'administration";
    $bannerTitle = "ESPACE D'ADMINISTRATION";
    require_once "./src/Views/header.php";
    require_once "./src/Views/banner.php";
?>  

    <script>
       $(document).ready(function() {
            $('#example').DataTable({
  "language": {
    "sProcessing": "Traitement en cours ...",
    "sLengthMenu": "Afficher MENU lignes",
    "sZeroRecords": "Aucun résultat trouvé",
    "sEmptyTable": "Aucune donnée disponible",
    "sInfo": "Lignes START à END sur TOTAL",
    "sInfoEmpty": "Aucune ligne affichée",
    "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
    "sInfoPostFix": "",
    "sSearch": "Chercher:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Chargement...",
    "oPaginate": {
      "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
    },
    "oAria": {
      "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
    }
  }
});
        } ); 
    </script>
    <div class="container">
        <section class="articlesManager">
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Extrait</th>
                <th>Date et heure</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Titre</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore non eius nobis neque nisi blanditiis ...</td>
                <td>Le 20/12/19 à 8h30</td>
            </tr>
            <tr>
                <td>Titre</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore non eius nobis neque nisi blanditiis ...</td>
                <td>Le 20/12/19 à 8h30</td>
            </tr>
            <tr>
                <td>Titre</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore non eius nobis neque nisi blanditiis ...</td>
                <td>Le 20/12/19 à 8h30</td>
            </tr>
        </tfoot>
    </table>
            <button class="btn-yellow btn-large">CREE UN NOUVEL ARTICLE</button>
        </section>
    </div>
   
<?php 
    require_once "./src/views/footer.php"; 
?>