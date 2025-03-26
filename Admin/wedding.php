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
                        <h3 class="fs-4 mb-0">BIRTHDAY BANQUET</h3>
                        <h5 class="fs-6 text-black-50">Booking List</h5>
                    </div>
                    <hr>
                </div>
                <div class="list p-3">
                    <h5>Booking List</h5>
                    <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Sr.no</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Address</th>
                                <th scope="col">Event Date</th>
                                <th scope="col">From Time</th>
                                <th scope="col">To time</th>
                                <th scope="col">Quest Count</th>
                                <th scope="col">Addidional Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($connect, 'select * from bookbanquet where category = 3');
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['event_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['contact_no']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['fromtime']; ?></td>
                                    <td><?php echo $row['totime']; ?></td>
                                    <td><?php echo $row['guestcount']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
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