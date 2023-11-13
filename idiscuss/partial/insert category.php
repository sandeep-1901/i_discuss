<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <title>insert-card</title>
</head>

<body>
    <div class="container rounded-3 mt-4 mb-4 h-600px w-600px"style="background-color:Lavender;">
        <h1 class="text-center">card-details</h1>
        <div class="container mt-4 w-50 m-auto">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-outline mb-3">
                    <label for="card_title" class="form-label">card-title</label>
                    <input type="text" name="card_title" id="card_title" class="form-control"
                        placeholder="enter the card title " required="required">
                </div>

                <div class="form-outline mb-3">
                    <label for="card_description" class="form-label">card-description</label>
                    <input type="text" name="card_description" id="card_description" class="form-control"
                        placeholder="enter the card-description " required="required">
                </div>

                <div class="form-outline mb-3">
                    <label for="card_image" class="form-label">card-image-1</label>
                    <input type="file" name="card_image" id="card_image" class="form-control" required="required">
                </div>

                <div class="form-outline mb-3">
                    <input type="submit" class="btn btn-info mb-4">
                    <a class="btn btn-info mb-4" href="/idiscuss/index.php" role="button">home</a>
                </div>

            </form>
        </div>
    </div>
    <?php
 include('dbconnect.php') ;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $card_title = $_POST['card_title'];
  $card_description = $_POST['card_description'];
  


  $card_image =  $_FILES['card_image']['name'];
  


$folder='./img';
  $tmp_image =  $_FILES['card_image']['tmp_name'];
  

  if ($card_title =='' or $card_description =='' or $card_image == '') {
    echo '<div class="alert alert-danger">
    <strong>Failure!</strong> Fill all the details
  </div>';
  } else {
    move_uploaded_file($tmp_image, "./img/$card_image");
    

    $insert_prod = "INSERT INTO `insert category`(`card_title`, `card_description`, `card_image`) VALUES ('$card_title','$card_description','$card_image')";
    $result = mysqli_query($conn, $insert_prod);
    if ($result) {
      echo '<div  class="d-flex justify-content-center"><div class="alert alert-success w-50 ">
      <strong>Success!</strong> You have inserted the card
    </div>
    </div>';
    } else {
      echo '<div class="alert alert-danger">
      <strong>Danger!</strong> Unable to insert the card.
    </div>';
    }
  }
}

?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>