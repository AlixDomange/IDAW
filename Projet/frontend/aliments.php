
<!doctype html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <title>exo2</title>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable( {
                ajax: {
                    url: 'http://localhost/IDAW/Projet/backend/aliments.php',
                    dataSrc:''
                },
                columns: [
                    {data: 'id_aliment'},
                    {data: 'id_type'},
                    {data: 'nom'},
                    {data: 'calories'},
                    {data: 'glucides'},
                    {data: 'lipides'}
                    {data: 'proteines'},
                    {data: 'sel'},
                    {data: 'sucre'}]
            });

        });
    </script>

</head>
<body>
<table id="myTable" class="display">

</table>
</body>
</html> 