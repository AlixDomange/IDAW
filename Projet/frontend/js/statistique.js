$(document).ready(function() {
    chargerDonneesDansTable();
});

function chargerDonneesDansTable() {
    $.ajax({
        url: endpoint_backend +'/statistique.php', 
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            afficherDonneesDansTable(data);
        },
        error: function(error) {
            console.error('Erreur lors de la requête AJAX:', error);
        }
    });
}

function afficherDonneesDansTable(data) {
    var tbody = $('#maTablesel');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.sel + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTablesucre');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.sucre + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTablelipide');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.lipide + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTableglucide');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.glucide + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTableproteine');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.proteine + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
}

document.getElementById('dateForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var selectedDate = document.getElementById('dateInput').value;
    $.ajax({
        url: endpoint_backend +'/statistique_.php?date=' + selectedDate, 
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            afficherDonneesDuJour(data);
        },
        error: function(error) {
            console.error('Erreur lors de la requête AJAX:', error);
        }
    });
});

function afficherDonneesDuJour(data) {
    var tbody = $('#maTablesel');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.sel + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTablesucre');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.sucre + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTablelipide');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.lipide + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTableglucide');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.glucide + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });
    var tbody = $('#maTableproteine');
    tbody.empty();
    data.forEach(function(element) {
        var newRow = $('<span>');
        newRow.append('<span id="somme">' + element.proteine + '</span>');
        newRow.append('</span>');
        tbody.append(newRow);
    });

}