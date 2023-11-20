var sqlForm = document.getElementById('sqlForm');
if (sqlForm) { 
    sqlForm.addEventListener('submit', function(event) {
        event.preventDefault();
        var id = document.getElementById('id') ? document.getElementById('id').value ?? 0 : 0;
        var date = document.getElementById('date') ? document.getElementById('date').value ?? 0 : 0;
        var quantite = document.getElementById('quantite') ? document.getElementById('quantite').value ?? 0 : 0;
        var formData = new FormData();
        formData.append('id', id);
        formData.append('date', date);
        formData.append('quantite', quantite);
        updateChampSQL(formData);
    });
} else {
    console.error("Le formulaire avec l'ID 'sqlForm' n'a pas été trouvé dans le DOM.");
}

function updateChampSQL(formData) {
    $.ajax({
        url: endpoint_backend +'/modifier_journal.php', 
        type: 'POST',
        data: formData,
        processData: false,  
        contentType: false,
        success: function(response) {
            window.location.href = "index.php?page=journal";
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}