<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tunisair";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les utilisateurs
$sql = "SELECT * FROM reservation_vols";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Welcome</h1>
        
        <table class="table table-bordered">
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
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Afficher les utilisateurs
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["passenger_name"] . "</td>";
                        echo "<td>" . $row["passenger_email"] . "</td>";
                        echo "<td>" . $row["passenger_phone"] . "</td>";
                        echo "<td>" . $row["flight_number"] . "</td>";
                        echo "<td>" . $row["departure_city"] . "</td>";
                        echo "<td>" . $row["arrival_city"] . "</td>";
                        echo "<td>" . $row["departure_date"] . "</td>";
                        echo "<td>" . $row["arrival_date"] . "</td>";
                        echo "<td>" . $row["seat_number"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Reservation Modal -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="../admin/insert.php">
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
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                        <input type="submit" name="submit" class="btn btn-success" style="background-color: #435d7d" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>