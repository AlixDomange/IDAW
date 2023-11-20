var sqlForm = document.getElementById('sqlForm');
if (sqlForm) { 
    sqlForm.addEventListener('submit', function(event) {
        event.preventDefault();
        var nom = document.getElementById('nom') ? document.getElementById('nom').value : '';
        var id = document.getElementById('id') ? document.getElementById('id').value : '';
        var type = document.getElementById('type') ? document.getElementById('type').value : '';
        var glucide = document.getElementById('glucide') ? document.getElementById('glucide').value ?? 0 : 0;
        var proteine = document.getElementById('proteine') ? document.getElementById('proteine').value ?? 0 : 0;
        var sucre = document.getElementById('sucre') ? document.getElementById('sucre').value ?? 0 : 0;
        var lipide = document.getElementById('lipide') ? document.getElementById('lipide').value ?? 0 : 0;
        var sel = document.getElementById('sel') ? document.getElementById('sel').value ?? 0 : 0;
        var formData = new FormData();
        formData.append('id', id);
        formData.append('nom', nom);
        formData.append('type', type);
        formData.append('glucide', glucide);
        formData.append('proteine', proteine);
        formData.append('sucre', sucre);
        formData.append('lipide', lipide);
        formData.append('sel', sel);
        updateChampSQL(formData);
    });
} else {
    console.error("Le formulaire avec l'ID 'sqlForm' n'a pas été trouvé dans le DOM.");
}

function updateChampSQL(formData) {
    $.ajax({
        url: endpoint_backend +'/modifier_aliment.php', 
        type: 'POST',
        data: formData,
        processData: false,  
        contentType: false,
        success: function(response) {
            window.location.href = "index.php?page=aliments";
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}