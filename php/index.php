<!-- New project on a booking app -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking</title>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    <link rel="icon" type="image/png" href="Images/B.jpg"/>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add any additional styles here if needed */
    </style>
</head>

<body>

    <header>
        <h1>Fly to the Moon</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?p=BookingApp"><img src="Images/home.png" alt="Home"/>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=About"><img src="Images/about.png" alt="about"/>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=Service"><img src="Images/service.png" alt="servive"/>Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=Contact"><img src="Images/contact.png" alt="contact"/>Contact</a>
            </li>
        </ul>
    </div>
</nav>

    <div id="imageSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/image3.jpeg" alt="Slide 1" style="height: 440px;">
            </div>
            <div class="carousel-item">
                <img src="Images/image4.jpeg" alt="Slide 2" style="height: 440px;">
            </div>
            <div class="carousel-item">
                <img src="Images/image5.jpeg" alt="Slide 3" style="height: 440px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <main>
        <?php
  if(isset($_GET['p'])){
    $fichier=$_GET['p'].".html";
    if(file_exists($fichier)) include($fichier);
    else echo "Problème : ".$fichier." n'existe pas";  }

    ?>
            
    </main>

<footer>
    <p>&copy;2023 Booking platform. All rights reserved</p>
</footer>

    <!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
