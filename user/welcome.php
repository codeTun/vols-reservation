<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence de Voyage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../admin/logo.png" alt="Agence de Voyage Logo" height="90" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="#" data-toggle="modal" data-target="#addEmployeeModal">Resérvation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-content text-center">
            <h1>Explorez le monde avec nous</h1>
            <p>Votre aventure commence ici</p>
        </div>
    </div>

    <!-- Sponsors Section -->
    <section class="sponsors py-5">
        <div class="container text-center">
            <h2>Nos Sponsors</h2>
            <div class="row justify-content-center">
                <div class="col-md-2 col-4">
                    <img src="faccebook.png" alt="Sponsor 1" class="img-fluid mb-4">
                </div>
                <div class="col-md-2 col-4">
                    <img src="amazone.png" alt="Sponsor 2" class="img-fluid mb-4">
                </div>
                <div class="col-md-2 col-4">
                    <img src="turkish.png" alt="Sponsor 3" class="img-fluid mb-4">
                </div>
                
            </div>
        </div>
    </section>

    <!-- Reservation Modal -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="insert.php">
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

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 Agence de Voyage. All rights reserved.</p>
            <p>
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>