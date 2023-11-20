$(document).ready(function() {
    $("#supprimerForm").submit(function(event) {
        event.preventDefault();
        supprimerElement();
    });
});

function supprimerElement() {
    var id = $("#id").val();
    $.ajax({
        url: endpoint_backend +'/info_aliment.php',
        type: 'DELETE',
        contentType: 'application/json',
        data: JSON.stringify({ id: id }),
        success: function(response) {
            window.location.href = "index.php?page=aliments";
        },
        error: function(error) {
            console.error(error.responseText);
            alert("Une erreur s'est produite lors de la suppression de l'élément.");
        }
    });
}