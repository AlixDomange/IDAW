$(document).ready(function() {
    
    var table = $('#alimentsTable').DataTable({
        ajax: {
            url: endpoint_backend +'/aliments.php',
            dataSrc: ''
        },
        columns: [
            { data: 'nom' },
            { data: 'type' },
            { data: 'glucide' },
            { data: 'lipide' },
            { data: 'proteine' },
            { data: 'sel' },
            { data: 'sucre' }
        ]
    });

    $('#alimentsTable tbody').on('click', 'tr', function() {            
        var rowData = table.row(this).data(); 
        if (rowData) {
            var id = rowData.id; 
            var type = rowData.type;
            var nom = rowData.nom;
            var glucide = rowData.glucide;
            var lipide = rowData.lipide;
            var proteine = rowData.proteine;
            var sel = rowData.sel;
            var sucre = rowData.sucre;
            var form = $('<form action="index.php?page=info_aliment" method="post"></form>');
            form.append('<input type="hidden" name="id" value="' + id + '">');
            form.append('<input type="hidden" name="type" value="' + type + '">');
            form.append('<input type="hidden" name="nom" value="' + nom + '">');
            form.append('<input type="hidden" name="glucide" value="' + glucide + '">');
            form.append('<input type="hidden" name="proteine" value="' + proteine + '">');
            form.append('<input type="hidden" name="lipide" value="' + lipide + '">');
            form.append('<input type="hidden" name="sel" value="' + sel + '">');
            form.append('<input type="hidden" name="sucre" value="' + sucre + '">');
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