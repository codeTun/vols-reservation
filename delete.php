<?php
include 'dbconn.php';
$id = $_GET['id'];
$delete = "DELETE FROM reservation_vols WHERE reservation_id = $id";
$deletequery = mysqli_query($conn, $delete);
if($deletequery){
    ?>
<script>
    window.location.replace("index.php");
</script>

<?php 

}else{
    echo 'Not deleted';
}

?>