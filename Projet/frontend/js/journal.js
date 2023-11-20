$(document).ready(function() {
    
    var table = $('#journalTable').DataTable({
        ajax: {
            url: endpoint_backend +'/journal.php',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'nom' },
            { data: 'date' },
            { data: 'quantite' },
        ]
    });

    
    $('#journalTable tbody').on('click', 'tr', function() {            
        var rowData = table.row(this).data(); 
        if (rowData) {
            var id = rowData.id;
            var nom = rowData.nom;
            var date = rowData.date;
            var quantite = rowData.quantite;
            var form = $('<form action="index.php?page=journal_info" method="post"></form>');
            form.append('<input type="hidden" name="id" value="' + id + '">');
            form.append('<input type="hidden" name="nom" value="' + nom + '">');
            form.append('<input type="hidden" name="date" value="' + date + '">');
            form.append('<input type="hidden" name="quantite" value="' + quantite + '">');
            form.appendTo('body').submit();
        }
    });

    var showFormButton = document.getElementById('showFormButton');
    var formContainer = document.getElementById('formContainer');

    showFormButton.addEventListener('click', function() {
        if (formContainer.style.display === 'none' || formContainer.style.display === '') {
            formContainer.style.display = 'block';
        } else {
            formContainer.style.display = 'none';
        }
    });
});