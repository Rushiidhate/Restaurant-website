<!DOCTYPE html>
<html lang="en">

<?php include "includes/config.php"; ?>
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
                    <a class="ms-auto mb-0" href="add_food.php">Add Dishes</a>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Dish Name</th>
                        <th scope="col">Main Ingredient</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = mysqli_query($connect, 'select * from dish');
                            while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['dish_name']; ?></td>
                        <td><?php echo $row['main_ingredient']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><img src="images/<?php echo $row['image']; ?>" alt="image" style="width:30%;"></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>