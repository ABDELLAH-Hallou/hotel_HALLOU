<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hotel HALLOU</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/add_reservation.css">

  </head>

  <body>
  <?php
	include "db_conn.php";
    $id = $_GET['id'];
	$sql = "SELECT * FROM room WHERE id = $id";
	$result = mysqli_query($conn, $sql);
	$row = $result->fetch_assoc();
    ?>


<div class='container'>
    <div class="card mx-auto col-md-5 col-8 mt-3 p-0"> <img class='mx-auto pic' src="<?php echo "assets/images/rooms/".$row['id'].".jpg"?>" alt="chambre" />
        <div class="card-title d-flex px-4">
            <p class="item text-muted"> Chambre <?php echo $row['id'] ?></p>
            <p><?php echo $row['price'] ?> DH</p>
        </div>

        <form action="add_reservation_process.php?id=<?php echo $row['id']?>" method="post">
        <div class="card-body">
            <p class="text-muted">Entrez vos Données</p>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input class="col-10 p-0" name="fisrt_name" type="text" placeholder="Prénom"> </div>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input class="col-10 p-0" name="last_name" type="text" placeholder="Nom"> </div>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input class="col-10 p-0" name="cin" type="text" placeholder="CIN"> </div>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input class="col-10 p-0" name="phone" type="text" placeholder="Téléphone"> </div>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input id="start-time" class="col-10 p-0" name="start_date" type="date" placeholder="Date de Début"> </div>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input id="end-time" onclick='endDate();'class="col-10 p-0" name="end_date" type="date" placeholder="Date de Fin"> </div>
        </div>
        <div class="footer text-center p-0">
            <div class="col-lg-12 col-12 p-0">
               <button type="submit" class="btn btn-primary">Réserver</button>
            </div>
        </div>
        </form>
        
    </div>
</div>

</body>
<script type="text/javascript">
    var now = new Date();
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
    document.getElementById('start-time').value = now.toISOString().slice(0, 16);
    document.getElementById('start-time').min = now.toISOString().slice(0, 16);
    document.getElementById('end-time').value = document.getElementById('start-time').value;
    document.getElementById('end-time').min = document.getElementById('start-time').value;

    function endDate() {
        document.getElementById('end-time').min = document.getElementById('start-time').value;
    }
</script>
</html>
