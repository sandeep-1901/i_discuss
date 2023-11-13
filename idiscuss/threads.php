<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title></title>
  </head>
  <body  style="background-color:Lavender;">

  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">I_Discuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/idiscuss/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
       
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
      
           include'partial/dbconnect.php';
           $select_query = "SELECT * FROM `insert category`  ";
           $result = mysqli_query($conn, $select_query);
           while ($row = mysqli_fetch_assoc($result)) {
                    $_title = $row['card_title'];
                    $_description = $row['card_description'];

                }
                ?>
<!-- jombotron -->
<div class="container mt-2 mb-2 px-2 rounded-2" style="background-color: #8293a0;">
<div class="jumbotron mt-2 mb-2 px-2" >
  <h1 class="display-4 text-center">Hello, world!</h1>
  <p class="lead text-center"> Welcome to <?php 
  echo$_title; 
  ?></p>
  <hr class="my-4 text-center">
  <p class="text-center"><?php 
  echo$_description; 
  ?></p></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg mb-2" href="#" role="button">Learn more</a>
  </p>
</div>
</div>




<!-- 
media object -->
<h1 class="text-center mt-2 mb-2">Browse Question</h1>

<div class="container justify-item-center rounded-2 mt-2 mb-2 px-2" style="background-color: #8293a0;">


<div class="media">
  <img class="mr-3 rounded-4" src="user.avif" height="30px" width="30px"  alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>

</div>















    
<div>
        <?php
        include 'partial/footer.php';
        ?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
      
           include'partial/dbconnect.php';
           $select_query = "SELECT * FROM `insert category` order by card_title ";
           $result = mysqli_query($conn, $select_query);
           while ($row = mysqli_fetch_assoc($result)) {
                    $_title = $row['card_title'];
                    $_description = $row['card_description'];

                }
                ?>