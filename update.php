<!DOCTYPE html>
<html lang="en">
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
</style>
</head>
<body>
<?php
include 'dbconn.php';
$id = $_GET['id'];
$update = "SELECT * FROM reservation_vols WHERE reservation_id = $id";
$updatequery = mysqli_query($conn, $update);
$result = mysqli_fetch_assoc($updatequery);

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $passenger_name = mysqli_real_escape_string($conn, $_POST['passenger_name']);
    $passenger_email = mysqli_real_escape_string($conn, $_POST['passenger_email']);
    $passenger_phone = mysqli_real_escape_string($conn, $_POST['passenger_phone']);
    $flight_number = mysqli_real_escape_string($conn, $_POST['flight_number']);
    $departure_city = mysqli_real_escape_string($conn, $_POST['departure_city']);
    $arrival_city = mysqli_real_escape_string($conn, $_POST['arrival_city']);
    $departure_date = mysqli_real_escape_string($conn, $_POST['departure_date']);
    $arrival_date = mysqli_real_escape_string($conn, $_POST['arrival_date']);
    $seat_number = mysqli_real_escape_string($conn, $_POST['seat_number']);
    $reservation_status = mysqli_real_escape_string($conn, $_POST['reservation_status']);

    $updatequery =  "UPDATE reservation_vols SET 
                        passenger_name ='$passenger_name', 
                        passenger_email ='$passenger_email', 
                        passenger_phone ='$passenger_phone', 
                        flight_number ='$flight_number', 
                        departure_city ='$departure_city', 
                        arrival_city ='$arrival_city', 
                        departure_date ='$departure_date', 
                        arrival_date ='$arrival_date', 
                        seat_number ='$seat_number', 
                        reservation_status ='$reservation_status' 
                    WHERE reservation_id = $id";
    $mysqliquery = mysqli_query($conn, $updatequery);
    if($mysqliquery){
        ?>
    <script>
        window.location.replace("index.php");
    </script>
<?php 
    }else{
        echo 'Not Updated';
    }
}
?>

<!-- Update Modal HTML -->
<div id="editEmployeeModal" class="modal-dialog" style="display:block;">
    <div class="modal-content">
        <form method="POST" action="">
            <div class="modal-header">						
                <h4 class="modal-title">Update Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">					
                <div class="form-group">
                    <label>Passenger Name</label>
                    <input type="text" name="passenger_name" class="form-control" value="<?php echo $result['passenger_name']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="passenger_email" class="form-control" value="<?php echo $result['passenger_email']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="passenger_phone" class="form-control" value="<?php echo $result['passenger_phone']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Flight Number</label>
                    <input type="text" name="flight_number" class="form-control" value="<?php echo $result['flight_number']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Departure City</label>
                    <input type="text" name="departure_city" class="form-control" value="<?php echo $result['departure_city']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Arrival City</label>
                    <input type="text" name="arrival_city" class="form-control" value="<?php echo $result['arrival_city']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Departure Date</label>
                    <input type="date" name="departure_date" class="form-control" value="<?php echo $result['departure_date']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Arrival Date</label>
                    <input type="date" name="arrival_date" class="form-control" value="<?php echo $result['arrival_date']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Seat Number</label>
                    <input type="text" name="seat_number" class="form-control" value="<?php echo $result['seat_number']; ?>">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="reservation_status" class="form-control">
                        <option value="Confirmed" <?php if($result['reservation_status'] == 'Confirmed') echo 'selected'; ?>>Confirmed</option>
                        <option value="Pending" <?php if($result['reservation_status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                        <option value="Cancelled" <?php if($result['reservation_status'] == 'Cancelled') echo 'selected'; ?>>Cancelled</option>
                    </select>
                </div>					
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" name="submit" class="btn btn-info" value="Save">
            </div>
        </form>
    </div>
</div>
</body>
</html>