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

// Handle form submission
if (isset($_POST['submit'])) {
    $passenger_name = $_POST['passenger_name'];
    $passenger_email = $_POST['passenger_email'];
    $passenger_phone = $_POST['passenger_phone'];
    $departure_city = $_POST['departure_city'];
    $arrival_city = $_POST['arrival_city'];
    $departure_date = $_POST['departure_date'];
    $arrival_date = $_POST['arrival_date'];

    $sql = "INSERT INTO reservation_vols (passenger_name, passenger_email, passenger_phone, departure_city, arrival_city, departure_date, arrival_date) 
            VALUES ('$passenger_name', '$passenger_email', '$passenger_phone', '$departure_city', '$arrival_city', '$departure_date', '$arrival_date')";

    if ($conn->query($sql) === TRUE) {
        // Redirect with success status
        header("Location: myReservation.php?status=success");
        exit;
    } else {
        // Redirect with error status
        header("Location: myReservation.php?status=error");
        exit;
    }
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="my-4 text-dark">Welcome</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white mx-2" href="#" data-toggle="modal" data-target="#addEmployeeModal">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white mx-2" href="welcome.php">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container"> 
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
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Afficher les utilisateurs
                    while($row = $result->fetch_assoc()) {
                        if ($row['reservation_status'] == 'Confirmed') {
                            $statusClass = 'status-confirmed';
                            $statusText = 'Confirmé';
                        } elseif ($row['reservation_status'] == 'Pending') {
                            $statusClass = 'status-pending';
                            $statusText = 'En cours';
                        } elseif ($row['reservation_status'] == 'Cancelled') {
                            $statusClass = 'status-cancelled';
                            $statusText = 'Annulé';
                        } elseif ($row['reservation_status'] == '') {
                            $statusClass = 'status-pending';
                            $statusText = 'En cours';
                        }
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
                        echo "<td>" . $statusText . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>Aucune réservation trouvée</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Reservation Modal -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">
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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            if (status === 'success') {
                alert('Réservation ajoutée avec succès!');
                window.location.href = 'myReservation.php'; // Refresh the page
            } else if (status === 'error') {
                alert('Erreur lors de l\'ajout de la réservation.');
                window.location.href = 'myReservation.php'; // Refresh the page
            }
        });
    </script>
</body>
</html>

<?php
$conn->close();
?>