$(document).ready(function() {
    $("#create_form").submit(function(event) {
        event.preventDefault();
        var formData = {
            nom: $("#nom").val(),
            date: $("#date").val(),
            quantite: $("#quantite").val(),
        };
        ajouterAliment(formData);
        console.log(formData);
        window.location.href = "index.php?page=journal";
    });

    function ajouterAliment(formData) {
        $.ajax({
            url: endpoint_backend +'/ajouter_journal.php', 
            type: 'POST', 
            data: formData,
            success: function(response) {
                
            },
            error: function(xhr, status, error) {
                console.error("Erreur:", error);
            }
        });
    }
});