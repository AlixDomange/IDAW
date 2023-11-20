var sqlForm = document.getElementById('sqlForm');
sqlForm.addEventListener('submit', function(event) {
    event.preventDefault();
    var prenom = document.getElementById('prenom').value;
    var age = document.getElementById('age').value;
    var sexe= document.getElementById('sexe').value;
    var sport = document.getElementById('sport').value;
    var objectif = document.getElementById('objectif').value;
    var formData = new FormData();
    formData.append('prenom', prenom);
    formData.append('age', age);
    formData.append('sexe', sexe);
    formData.append('sport', sport);
    formData.append('objectif', objectif);
    updateChampSQL(formData);
});

function updateChampSQL(formData) {
    $.ajax({
        url: endpoint_backend +'/modifier.php', 
        type: 'POST',
        data: formData,
        processData: false,  
        contentType: false,
        success: function(response) {
            window.location.href = "index.php?page=profil";
        },
        error: function(xhr, status, error) {
            alert("Erreur: " + xhr.responseText);
        }
    });
}