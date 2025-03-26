<?php include "includes/config.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-2 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">1</h5>
                    <h6 class="card-subtitle mb-2 text-danger">Lifetime Order</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-2 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">1</h5>
                    <h6 class="card-subtitle mb-2" style="color:rgb(109, 65, 209);">Today Order</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-2 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">1</h5>
                    <h6 class="card-subtitle mb-2 text-success">Today Sell</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-2 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">1</h5>
                    <h6 class="card-subtitle mb-2" style="color:rgb(226, 142, 74);">Total Customer</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-2 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">1</h5>
                    <h6 class="card-subtitle mb-2 text-info">Total Delivery</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-2 mt-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">1</h5>
                    <h6 class="card-subtitle mb-2 text-danger" style="color:rgb(235, 72, 85);">Total Reservation</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-sm-12 col-md-6 mt-4">
            <div class="card-2">
                <div class="card-body">
                    <h5 class="card-title mb-3">Latest Online Order</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Dish Name</th>
                                <th scope="col">Order No.</th>
                                <th scope="col">Address</th>
                                <th scope="col">Punch Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysqli_query($connect , 'select * from onlineorder');
                                while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['dish_name']; ?></td>
                                <td class="text-success"><?php echo $row['id']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>05:30:50</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="card-2">
                <div class="card-body">
                    <h5 class="card-title mb-3">Reservation</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Count</th>
                                <th scope="col">Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysqli_query($connect , 'select * from booking');
                                while($row = mysqli_fetch_array($query)){
                            ?>        
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['contact_no']; ?></td>
                                <td class="text-success"><?php echo $row['count']; ?></td>
                                <td><?php echo $row['date_time']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="card-2">
                <div class="card-body">
                    <h5 class="card-title mb-3">Banquet Booking</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">From Time</th>
                                <th scope="col">To Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = mysqli_query($connect , 'select * from bookbanquet');
                                while($row = mysqli_fetch_array($query)){
                            ?>        
                            <tr>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['event_name']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['fromtime']; ?></td>
                                <td><?php echo $row['totime']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="card-2">
                <div class="card-body">
                    <h5 class="card-title mb-3">Sell Report</h5>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="card-2">
                <div class="card-body">
                    <h5 class="card-title mb-3">Top Selling Items</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Food Name</th>
                                <th scope="col">Variant</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rushi</td>
                                <td>6767675656</td>
                                <td>565</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mt-4">
            <div class="card-2">
                <div class="card-body">
                    <h5 class="card-title mb-3">Latest Online Order</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Order No.</th>
                                <th scope="col">Table No.</th>
                                <th scope="col">Punch Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rushi</td>
                                <td>6767675656</td>
                                <td class="text-success">565</td>
                                <td>3</td>
                                <td>05:30:50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>