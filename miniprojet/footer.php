 <footer class="footer">
      <div class="container">
        <span class="text-muted">copyright 2026.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/3.0.0/js/dataTables.js"></script>

<script>

    let table = new DataTable('#myTable', {
    language: {
        search: "Rechercher :",
        lengthMenu: "Afficher _MENU_ lignes",
        info: "Affichage de _START_ à _END_ sur _TOTAL_ lignes",
        infoEmpty: "Aucune ligne à afficher",
        infoFiltered: "(filtré de _MAX_ lignes)",
        zeroRecords: "Aucun résultat trouvé",
        emptyTable: "Aucune donnée disponible",
        paginate: {
            
            next: "Suivant",
            previous: "Précédent"
        }
    }
});
</script>
  </body>
</html>
