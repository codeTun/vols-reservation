<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence de Voyage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .sponsor-logo {
    max-width: 70%; 
    height: auto;
}
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card {
            width: 100%;
        }
        .hero-section {
            background: url('hero-background.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            
        }
        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 5px 5px 7px rgba(0, 0, 0, 0.5);
        }
        .hero-content p {
            font-size: 1.5rem;
            font-weight: 300;
            margin-top: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            
        }
    </style>
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
                        <a class="nav-link btn btn-primary text-white mx-2" href="loginUser.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white mx-2" href="register.php">Register</a>
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

    <!-- Flight Information Section -->
    <section class="flights-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Actualité des Vols</h2>
            <div class="row">
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <img src="france.jpg" class="card-img-top" alt="Flight 1">
                        <div class="card-body">
                            <h5 class="card-title">Vol Paris - New York</h5>
                            <p class="card-text">Départ: 10:00 AM, 25 Dec 2024</p>
                            <p class="card-text">Arrivée: 01:00 PM, 25 Dec 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <img src="londres.jpg" class="card-img-top" alt="Flight 2">
                        <div class="card-body">
                            <h5 class="card-title">Vol Londres - Paris</h5>
                            <p class="card-text">Départ: 08:00 AM, 26 Dec 2024</p>
                            <p class="card-text">Arrivée: 11:00 PM, 26 Dec 2024</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <img src="emirate.jpg" class="card-img-top" alt="Flight 3">
                        <div class="card-body">
                            <h5 class="card-title">Vol Emirates - Singapour</h5>
                            <p class="card-text">Départ: 09:00 PM, 27 Dec 2024</p>
                            <p class="card-text">Arrivée: 05:00 AM, 28 Dec 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="sponsors py-5">
        <div class="container text-center">
            <h2>Nos Sponsors</h2>
            <div class="row justify-content-center">
            <div class="col-md-2 col-4">
    <img src="facebook.png" alt="Sponsor 1" class="img-fluid mb-4 sponsor-logo">
</div>
                <div class="col-md-2 col-4">
                    <img src="amazon.png" alt="Sponsor 2" class="img-fluid mb-4">
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
    
    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Elazheri Iheb. All rights reserved.</p>
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