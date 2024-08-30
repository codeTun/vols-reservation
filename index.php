<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tunisair</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: rgb(156,131,33);
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 900px; 
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn-group {
    float: right;
}
.table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 10px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 250px;
}
table.table tr th:last-child {
    width: 150px; /* Increased width for actions */
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}

table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.edit {
    color: #F3CF09;
}
table.table td a.delete {
    color: red;
}
table.table td i {
    font-size: 19px;
}

table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
    position: relative;
}
.custom-checkbox input[type="checkbox"] {    
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
}
.custom-checkbox label:before{
    width: 18px;
    height: 18px;
}
.custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 2px;
    box-sizing: border-box;
    z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
    border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
    max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
    padding: 20px 30px;
}
.modal .modal-content {
    border-radius: 3px;
    font-size: 14px;
}
.modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 3px 3px;
}
.modal .modal-title {
    display: inline-block;
}
.modal .form-control {
    border-radius: 2px;
    box-shadow: none;
    border-color: #dddddd;
}
.modal textarea.form-control {
    resize: vertical;
}
.modal .btn {
    border-radius: 2px;
    min-width: 100px;
}	
.modal form label {
    font-weight: normal;
}
.crud{
    position: relative;
    left: 40rem;
    top: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: red;
}	
/* Status styles */
/* Status styles */
.status-box {
    border-radius: 5px;
    padding: 5px 10px;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    text-align: center;
    min-width: 80px;
}
.status-confirmed {
    background-color: #28a745; 
}
.status-pending {
    background-color: #ECB707; 
}
.status-cancelled {
    background-color: #dc3545; 
}
</style>
<script>
$(document).ready(function(){
    // Activer les tooltips
    $('[data-toggle="tooltip"]').tooltip();
    
    // Sélectionner/Désélectionner les cases à cocher
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});
</script>
</head>
<body>

<div class="crud">
    <img src="logo.png" alt="Tunisair Logo" style="width: 180px; height: auto;" />
</div>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Bienvenue à<b> TUNISAIR</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une nouvelle réservation</span></a>
                    </div>
                </div>
            </div>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom du passager</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Numéro de vol</th>
                        <th>Ville de départ</th>
                        <th>Ville d'arrivée</th>
                        <th>Date de départ</th>
                        <th>Date d'arrivée</th>
                        <th>Numéro de siège</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
include 'dbconn.php';
$query = 'SELECT * FROM reservation_vols';
$mysqliquery = mysqli_query($conn, $query);
while ($result = mysqli_fetch_assoc($mysqliquery)) {
    $statusClass = '';
    $statusText = '';
    if ($result['reservation_status'] == 'Confirmed') {
        $statusClass = 'status-confirmed';
        $statusText = 'Confirmé';
    } elseif ($result['reservation_status'] == 'Pending') {
        $statusClass = 'status-pending';
        $statusText = 'encours';
    } elseif ($result['reservation_status'] == 'Cancelled') {
        $statusClass = 'status-cancelled';
        $statusText = 'Annulé';
    }
    ?>
    <tr>
        <td><?php echo $result['passenger_name']; ?></td>
        <td><?php echo $result['passenger_email']; ?></td>
        <td><?php echo $result['passenger_phone']; ?></td>
        <td><?php echo $result['flight_number']; ?></td>
        <td><?php echo $result['departure_city']; ?></td>
        <td><?php echo $result['arrival_city']; ?></td>
        <td><?php echo $result['departure_date']; ?></td>
        <td><?php echo $result['arrival_date']; ?></td>
        <td><?php echo $result['seat_number']; ?></td>
        <td><span class="status-box <?php echo $statusClass; ?>"><?php echo $statusText; ?></span></td>
        <td>
            <a href="update.php?id=<?php echo $result['reservation_id']; ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
            <a href="delete.php?id=<?php echo $result['reservation_id']; ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></a>
        </td>
    </tr>
    <?php
}
?>
                </tbody>
            </table>
            
    </div>        
</div>
<!-- Ajouter une réservation Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="insert.php" >
                <div class="modal-header">						
                    <h4 class="modal-title">Ajouter une réservation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Nom du passager</label>
                        <input type="text" name="passenger_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="passenger_email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="passenger_phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Numéro de vol</label>
                        <input type="text" name="flight_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ville de départ</label>
                        <input type="text" name="departure_city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ville d'arrivée</label>
                        <input type="text" name="arrival_city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date de départ</label>
                        <input type="date" name="departure_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date d'arrivée</label>
                        <input type="date" name="arrival_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Numéro de siège</label>
                        <input type="text" name="seat_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Statut</label>
                        <select name="reservation_status" class="form-control">
                            <option value="Confirmed">Confirmé</option>
                            <option value="Pending">encours</option>
                            <option value="Cancelled">Annulé</option>
                        </select>
                    </div>					
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                    <input type="submit" name="submit" class="btn btn-success" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modifier Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">						
                    <h4 class="modal-title">Modifier les données</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Nom du passager</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Numéro de vol</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ville de départ</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ville d'arrivée</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date de départ</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date d'arrivée</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Numéro de siège</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Statut</label>
                        <select class="form-control">
                            <option value="Confirmed">Confirmé</option>
                            <option value="Pending">encours</option>
                            <option value="Cancelled">Annulé</option>
                        </select>
                    </div>					
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                    <input type="submit" class="btn btn-info" value="Enregistrer">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>