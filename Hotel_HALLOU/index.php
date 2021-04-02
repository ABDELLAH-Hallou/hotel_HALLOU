<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hotel HALLOU</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>hôtel <em> HALLOU</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">ACCUEIL
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="about.php">A PROPOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACTEZ-NOUS</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>meilleures chambres</h4>
            <h2>meilleures offres avec de bons prix</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>meilleures vues</h4>
            <h2>meilleure expérience pour vos vacances</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>intimité</h4>
            <h2>confort avec une intimité totale</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nos Chambres</h2>
            </div>
          </div>

          <?php
									include "db_conn.php";
									$sql = "SELECT * FROM room";
									$result = mysqli_query($conn, $sql);
									while($row = $result->fetch_assoc()):
					?>
          <div class="col-md-4">
            <div class="product-item">
              <img src="<?php echo "assets/images/rooms/".$row['id'].".jpg"?>" alt="chambre">
              <div class="down-content">
                <h4> Chambre <?php echo $row['id'] ?></h4>
                <h6><?php echo $row['price'] ?> DH</h6>
                <p><?php echo $row['description'] ?></p>
                <ul class="stars">
                <?php for ($i = 0; $i < $row['rating']; $i++) { ?>
                  <li><i class="fa fa-star"></i></li>
                <?php } ?>
                </ul>

                <?php if(date("Y-m-d") < $row['availabe_after']){ ?>
                <span>Disponible Après <?php echo $row['availabe_after'] ?></span>

                <?php }else{ ?>
                <a href="add_reservation.php?id=<?php echo $row['id']?>"><span>RÉSERVER MAINTENANT!</span></a>

                <?php } ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>À propos de l'hôtel HALLOU</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Vous recherchez la meilleure chambre?</h4>
              <p></p>
              <ul class="featured-list">
                <li><a href="#">Service de restauration</a></li>
                <li><a href="#">Services de courrier</a></li>
                <li><a href="#">Service d'étage (24 heures)</a></li>
                <li><a href="#">Médecin de garde</a></li>
                <li><a href="#">Service voiturier</a></li>
              </ul>
              <a href="about.php" class="filled-button">Lire la suite</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0;
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
