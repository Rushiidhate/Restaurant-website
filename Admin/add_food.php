<?php
session_start();

if (isset($_SESSION['user'])) {
    $username = $_SESSION['username'] ?? 'Guest';
} else {
    header("Location: login.php");
    exit();
}
?>
<?php include "includes/config.php";?>
<?php 

define('PATH','#######');
if(isset($_POST['submit']))
{
    
  extract($_POST);
  $path = "upload/";
           
            //   $path = $path . basename( $_FILES['image']['name']);
            // move_uploaded_file($_FILES['image']['tmp_name'], $path);
            //     $path1 = PATH.$path;
  $add="insert into dish(category,dish_name,main_ingredient,price,image) values('$category','$dish_name','$main_ingredient','$price','$image')";        
  $result=mysqli_query($connect,$add) or die(mysqli_error($connect));
  if($result)
  {
    echo "<script>";
    echo "alert('Inserted Successfully..!');";
    echo "window.location.href='view_food.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error in insert');";
    echo "window.location.href='view_food.php';";
    echo "</script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namaste Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="wrapper">
        <?php include "sidebar.php"; ?>

        <div class="main">
            <?php include "head_navbar.php"; ?>
            <h4 class="m-4">MENU</h4>
            <main class="content-inner p-4">
                <div class="top d-flex px-3">
                    <h5 class="mb-0">Add Dish</h5>
                    <a class="ms-auto mb-0" href="view_food.php">View Dishes</a>
                </div>
                <hr>
                <form method="POST" class="p-4">
                    <div class="mb-3 d-flex">
                        <label for="exampleInputPassword1" class="form-label">Category of Dish</label>
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option selected>--- Select Category of Dish ---</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Lunch">Lunch</option>
                            <option value="Dinner">Dinner</option>
                        </select>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="exampleInputPassword1" class="form-label">Dish Name</label>
                        <input type="text" name="dish_name" class="form-control" id="exampleInputPassword1" placeholder="Dish Name" required>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="exampleInputPassword1" class="form-label">Main Ingredient</label>
                        <input type="text" name="main_ingredient" class="form-control" id="exampleInputPassword1" placeholder="Ingredient1 / Ingredient2 / ....." required>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="exampleInputPassword1" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price" required>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <!-- <script>
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script> -->
</body>


</html>