<?php
include "db_conn.php";

if(isset($_POST['end_date']) && isset($_POST['start_date'])){

    $id = $_GET['id'];

    $fisrt_name = $_POST['fisrt_name'];
    $last_name = $_POST['last_name'];
    $cin = $_POST['cin'];
    $phone = $_POST['phone'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    

    $sql = "INSERT INTO reservation (id_room, first_name, last_name, cin, phone, start_date, end_date) VALUES ('$id', '$fisrt_name', '$last_name', '$cin', '$phone', '$start_date', '$end_date')";
    $sql2 = "UPDATE room SET availabe_after = '$end_date'  WHERE id='$id'";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);

    header("Location: index.php");
    exit();

}

?>