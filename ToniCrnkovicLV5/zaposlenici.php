<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
 <div class="jumbotron">
 <h1>Naslov</h1>
 </div>
 <div class="row">
 </div>
 </div>
 <div class="container">
     <button class="btn btn-secundary" onclick="GetModal('modals.php?modal_id=new_employee')">Add user</button>
    <table class="table" id="refTable">
        <thead>
            <th>ID</th>
            <th>Datum rodenja</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Spol</th>
            <th>Datum zaposlenja</th>
            <th>Uredi</th>
            <th>Obriši</th>
        </thead>
        <tbody id="tbodi">
        </tbody>
    </table>
</div>

<div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby=""
aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content"></div>
 </div>
</div>

 <script src="js/zaposlenici.js"></script>
 <script src="js/globals.js"></script>
</body>
</html>
