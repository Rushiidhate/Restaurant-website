<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namaste Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <?php include "includes/config.php"; ?>
</head>

<body>
    <div class="wrapper">
        <?php include "sidebar.php"; ?>

        <div class="main">
            <?php include "head_navbar.php"; ?>
            <main class="content px-3 py-2">
                <div class="head row">
                    <div class="col p-1 ps-4">
                        <h3 class="fs-4 mb-0">RESERVATION</h3>
                        <h5 class="fs-6 text-black-50">Reservation List</h5>
                    </div>
                    <hr>
                </div>
                <div class="list p-3">
                    <h5>Reservation List</h5>
                    <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sr.no</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Person Count</th>
                                <th scope="col">Date & Time</th>
                                <th scope="col">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($connect, 'select * from booking');
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['contact_no']; ?></td>
                                    <td><?php echo $row['count']; ?></td>
                                    <td><?php echo $row['date_time']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>