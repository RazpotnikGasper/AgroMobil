<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Web page" />
        <meta name="author" content="razpotnikconsulting.com" />
        <title>AGROMOBIL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="slike/logotip/logotip.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/custom.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
     <style>

.navbar {
      z-index: 9999;
            /* Remove the following styles:
            max-width: 100%;
            overflow-x: hidden;
            */
        }
  .masthead {
            padding-top: 100px;
        }
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
    }




        </style>


         <body id="page-top">

        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Agromobil</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#shop">  Ponudba</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Kdo smo </a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Kontakt</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partners">  Partnerji</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="trgovina.php">Izdelki </a></li>
                    </ul>
                </div>
            </div>
        </nav>
       <div class="container-fluid " style="padding:0;">
<img src="slike/naslovnaslika/prvanaslovna.jpg" alt="NaslovnaSlika" style="margin-top:80px; width: 100%; max-height: 400px;" />
             </div>

        <!-- Portfolio Section-->

    <div class="container-fluid" >
          <section class="page-section partners" id="partners">

                                   <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="naslovPriSlikih" >PARTNERJI</h2>
      <div class="divider-custom">
                    <div class="divider-custom-line" style="color:black;"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-handshake" style="color:black;"></i></div>
                    <div class="divider-custom-line" style="color:black;"></div>
       </div>
        <div class="row">
<?php
$servername = "localhost";
$dbUsername = "razpotni_gasper2608";
$dbPassword = "Gasper2608.";
$dbname = "razpotni_agromobil";
   $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  `ImePartnerja` , `WebCon`, `imgPotPartner` FROM `partnerji`";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
<div class="col-lg-4 align-items-center text-center ">
<?php
echo '<img src="' . $row['imgPotPartner'] . '" alt="' . $row['ImePartnerja'] . '" class="card-img-top" style="width: 200px; max-height: 250px; height: auto;" />';
echo '<p style="padding-top:20px;"><a class="btn btn-secondary" href="' . $row['WebCon'] . '" role="button">Izvedi več &raquo;</a></p>';
?>    </div>

<?php

   }
} else {
    echo "No results found.";
}

$conn->close();
?>



              </div>
        </section>

             </div>
    <div class="container-fluid">
        <section class="page-section portfolio" id="shop">
 <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="naslovPriSlikih" >NOVO V PONUDBI</h2>
                <!-- Icon Divider-->

                <div class="divider-custom">
                    <div class="divider-custom-line" style="color:black;"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-shop text-center " style="color:black;"></i></div>
                    <div class="divider-custom-line" style="color:black;"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                <div class="album py-5 bg-body-tertiary">
                <div class="container-fluid">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-8">
<?php
$servername = "localhost";
$dbUsername = "razpotni_gasper2608";
$dbPassword = "Gasper2608.";
$dbname = "razpotni_agromobil";
   $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `NameIzdelek`, `Cena`,  `imgpath`, `pathweb` FROM `trgovina` ORDER BY `DatumVnosa` DESC LIMIT 5;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        ?>    <div class="col">
              <div class="card shadow-sm"><?php
         echo   "<p class='card-text text-center' style='padding-top: 20px;'>".$row['NameIzdelek']."</p>";
          echo "<img src='".$row['imgpath']."' alt='Kosilnica ECHO' class='card-img-top img-fluid' style='width: 100%; max-height: 200px; height: auto;'>";?>
        <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <?php   echo"<a href='".$row['pathweb']."'><button type='button' class='btn btn-sm btn-outline-secondary'><i class='fa-solid fa-plus'></i></button></a>";?>
            </div><?php
            echo  "<small class='text-body-secondary' style='font-family:helvetica,sans-serif;'>".$row['Cena']. "<i class='fa-solid fa-euro-sign'></i></small>";
        ?>
        </div>
        </div>
        </div>
        </div>

          <?php
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
    </div>
    </div>
  </div>

   </div>
        </section>
    </div>
        <!-- About Section-->
        <section class="page-section    text-white mb-0" id="about" style="text-align:center;">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Kdo smo</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Trgovina Agromobil predstavlja specializiran prodajni center, kjer strankam ponujajo raznovrstno in kakovostno ponudbo kmetijske mehanizacije. S svojim strokovnim pristopom in bogatim asortimanom izdelkov, trgovina postreže z različnimi vrhunskimi kosilnicami, gozdarsko opremo ter rezervnimi deli za kmetijsko mehanizacijo.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Poleg tega strankam nudijo tudi številne druge izdelke, prilagojene potrebam sodobnega kmetovanja. S svojo zavezanostjo k kakovosti in individualnemu pristopu do strank postaja nepogrešljiv partner za vse, ki skrbijo za učinkovito in zanesljivo kmetijsko opravilo.
                            </p></div>
                </div>

            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section" id="contact">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kontaktiraj nas</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line" style="color:black;"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-map-location-dot  text-center " style="color:black;"></i></div>
                    <div class="divider-custom-line" style="color:black;"></div>
                </div>
            <div class="container">
                  <div class="row">
                    <!-- Footer Location-->

                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0" style="text-align:center;">
                        <h4 class="text-uppercase mb-4">Kje nas najdeš</h4>
                                <p class="lead mb-0">

                                Rudarska cesta 2a, 1412 Kisovec
                                </p>
                                <p for="email"><i class="fa-solid fa-envelope"></i> :
                                        info@agromobil.eu<br/><i class="fa-solid fa-phone"></i>   (03) 620 02 36</p>
                                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/agromobil.mitjadrobez/"><i class="fab fa-fw fa-facebook-f"></i></a>
                                <!--<a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/watch?v=vz2rAgXjkCA"><i class="fab fa-fw fa-youtube"></i></a>-->
                                           <br>  <br> <h6 class="text-uppercase mb-4">Agromobil, Drobež Mitja s.p., trgovina, posredništvo in storitve za kmetijstvo</h6>

                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0" style="text-align:center;">
                        <h4 class="text-uppercase mb-4 s text-center">Lokacija</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.560107979637!2d14.959204729244144!3d46.139591696331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765403aed4f0657%3A0x7b6014a8be3c9483!2sAgromobil%2C%20Drobe%C5%BE%20Mitja%20s.p.%2C%20trgovina%2C%20posredni%C5%A1tvo%20in%20storitve%20za%20kmetijstvo!5e0!3m2!1sen!2sus!4v1699618493178!5m2!1sen!2sus" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4"  style="text-align:center;"><br /><br />
                        <p class="verz">Agromobil trgovina - Kjer kakovost rodi zaupanje, in zaupanje rodi uspeh</p> <br />

                        <a class="btn btn-outline-light btn-social mx-1" ><i class="fa-solid fa-square-check"></i></a>

                    </div>
                    </div>
            </div>
        </section>
        <div class="copyright py-4 text-center text-white" id="noga" style="text-align:center;">
            <div class="container"><small> &copy; razpotnikconsulting 2023</small></div>
        </div>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script>
// Toggle the navigation bar on mobile devices
const navbarToggler = document.querySelector(".navbar-toggler");
const navbarCollapse = document.querySelector(".navbar-collapse");

navbarToggler.addEventListener("click", () => {
  navbarCollapse.classList.toggle("show");
});
$.ajax({
  type: "GET", // Change the type to "POST" or any appropriate method
  url: "api.php?f=data", // Replace with your server's API endpoint to fetch data for the dropdown
success: function(response) {
  var storitveData = JSON.parse(response); // Parse the JSON response into a JavaScript object or array

  // Get the select element reference
  var selectElement = document.getElementById('select1');

  // Clear any existing options in the dropdown (optional)
  selectElement.innerHTML = '';

  // Create and append options to the dropdown
  storitveData.forEach(function(storitev) {
    var option = document.createElement('option');
    option.value = storitev.Name; // Assuming 'nazivstoritve' holds the value for the option
    option.textContent = storitev.Cena; // Assuming 'naziv' holds the display text for the option
    selectElement.appendChild(option);
  });
}
,
  error: function(xhr, status, error) {
    console.log("Error fetching data: " + error);
  }
});
</script>
    </body>
</html>
