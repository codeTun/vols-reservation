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
$sql = "SELECT id, username, email FROM users";
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
</body>
</html>

<?php
$conn->close();
?>