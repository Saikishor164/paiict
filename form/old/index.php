<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Easebuzz Payment Gateway Integration in PHP Step by Step</title>
        <!-- Bootstrap CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body >
    <div class="container" style="background:#e6e6e6; padding:20px;">
        <div class="py-5 text-center">
            <h2> Form (Easebuzz Payment Gateway Integration) </h2>
        </div>
        <div class="row">
            <?php
                // Database configuration    
                require "config.php";

                $sql = "SELECT * FROM products WHERE status = '1' order by id DESC";
                $query = $con->query($sql);
                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                <div class="card" style="height: 543px;">
                    <img src="images/<?php echo $row['image']?>" style="width:348px; height: 250px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']?></h5>
                        <p class="card-text"><?php echo $row['description']?></p>
                        <a href="checkout.php?product_id=<?php echo $row['id']?>" class="btn btn-sm btn-warning text-white">Buy Now</a> 
                        <b><span style="float: right;">₹<?php echo $row['price']?></span></b>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</body>
</html>