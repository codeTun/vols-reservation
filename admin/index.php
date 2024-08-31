<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tunisair</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href ="style.css" 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
    elseif ($result['reservation_status'] == '') {
        $statusClass = 'status-pending';
        $statusText = 'encours';
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
                    <input type="submit" name="submit" class="btn btn-success" style="background-color: #435d7d" value="Ajouter">
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