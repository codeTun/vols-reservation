<?php
include 'dbconn.php';
if(isset($_POST['submit'])){

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

    $insertquery =  "INSERT INTO reservation_vols (passenger_name, passenger_email, passenger_phone, flight_number, departure_city, arrival_city, departure_date, arrival_date, seat_number, reservation_status)
                     VALUES ('$passenger_name', '$passenger_email', '$passenger_phone', '$flight_number', '$departure_city', '$arrival_city', '$departure_date', '$arrival_date', '$seat_number', '$reservation_status')";
    $mysqliquery = mysqli_query($conn, $insertquery);
    if($mysqliquery){
        ?>
    <script>
        window.location.replace("index.php");
    </script>

<?php 

    }else{
        echo 'Not Inserted';
    }
}
?>