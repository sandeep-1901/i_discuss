<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel"stylesheet" href="partial\style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <!-- <style> 


#carosel {
  width: 1685px;
  height: 200px;  
  padding: 50px;
  border: 1px solid red;
  object-fit: cover;
}

</style> -->
    <title>Idiscuss</title>
</head>

<body style="background-color:Lavender;">
    <div class="cotainer">
        <nav class="  navbar navbar-expand-lg navbar-dark bg-dark rounded ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">I_Discuss</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-autod-flex align-items-start">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="partial\insert category.php">Insert</a>
                        </li>

                        <li class="nav-item dropdown rounded-4">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu text-light text-center ">
                                <li><a class="dropdown-item p-2" href="#">Action</a></li>
                                <li><a class="dropdown-item p-2" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider p-2">
                                </li>
                                <li><a class="dropdown-item p-2" href="">insert category</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="threads.php">Threads</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="d-flex align-items-end mx-2 ">
                <form class="d-flex mx-2 " role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
                <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" data-bs-target="#LoginModal">login</button>
                <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">signup</button>
            </div>
        </nav>


    </div>




    <!-- carosel -->
    <div class="container mt-3 mb-3 px-3 rounded-2" style="background-color:#8293a0;  ; height:450px; width:2200px; ">

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img1.jpg" class="mt-4 mb-4 px-2 rounded-4" height="400px" width="1800px"  alt="...">
                </div>
                <div class="carousel-item">
                    <img src="mark-basarab-1OtUkD_8svc-unsplash.jpg" class="mt-4 mb-4 px-2 rounded-4" height="400px" width="1800px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img3.jpg" class="mt-4 mb-4 px-2 rounded-4" height="400px" width="1800px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




    </div>








    <p class="text-center mt-2 mb-2 ">CATEGORIES</p>

    <div class="row px-1 p-2 mt-2 mb-2 mx-2 my-2 rounded-3" style="background-color: #8293a0;">
        <div class="col-md-14 mb-2 p-2 ">
            <div class="row p-2 ">
                <!-- cards -->

                <?php
                include('dbconnect.php');
                $select_query = "SELECT * FROM `insert category` order by card_title ";
                $result = mysqli_query($conn, $select_query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id=$row['category_id'];
                    $card_title = $row['card_title'];
                    $card_description = $row['card_description'];

                    $card_image = $row['card_image'];

                    echo " <div class='card mt-2 mb-2 mx-4 'style='width:18rem; height:30rem;'>
                    <img src='./partial/img/$card_image 'width='250px' height='200px' class='mt-3 mb-3 px-3' ' alt='Fissure in Sandstone' />
                    <div class='card-body'>
                        <h5 class='card-title'><a href=threads.php?=catid='$id'' $card_title </h5>
                        <h5 class='card-title'> $card_description </h5>
                        
                        <a href='#!' class='btn btn-primary'>Read More</a>
                    </div>
                </div>";
                }
                ?>



            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
</body>

</html>