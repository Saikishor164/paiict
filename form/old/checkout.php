<?php
    
    // Database configuration  
    require "config.php";
  
    if (!empty($_GET['product_id']) && isset($_GET['product_id'])) {
        $pid = $_GET['product_id'];
    }

    $sql = "SELECT * FROM products WHERE id = $pid";
    $query = $con->query($sql);

    if ($count = $query->num_rows > 0) {

        $row = $query->fetch_assoc();
    }

?>

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
<body>
<div class="container" style="background: #f2f2f2; padding-bottom:20px; border: 1px solid #d9d9d9; border-radius: 5px;">
    <div class="py-5 text-center">
        <h2> Easebuzz Payment Gateway Integration Checkout</h2>
        <p class="lead">This Checkout page using Easebuzz Payment Gateway for Testing purpose </p>
    </div>
    <form action="easebuzz.php" method="POST">
        <div class="row">
            <div class="col-md-8">
                <h4>Billing address</h4>
                <div class="card p-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Full Name </label>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mobile">Mobile Number</label>                        
                            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number" required="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="address">Flat, House no. Area, Street, Sector, Village</label>
                        <input type="text" class="form-control" name="address" placeholder="Full Address" required="">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city">Town/City</label>
                            <input type="text" class="form-control" name="city" placeholder="Town/City">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="pincode">Pincode</label>
                            <input type="text" class="form-control" name="pincode" placeholder="6 digits [0-9] Pin code" required="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="d-flex justify-content-between align-items-center">
                    <span>Order Summary</span>
                    <span class="badge badge-secondary badge-pill"><?php echo $count; ?></span>
                </h4>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="product-list">
                            <img src="images/<?php echo $row['image']?>" style="width:100px; height: 100px;">
                            <h6><?php echo $row['product_name']?></h6>
                            <small class="text-muted"><?php echo $row['description']?></small>
                        </div>
                        <span class="text-muted">₹<?php echo $row['price']?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong> Order Total: </strong>
                        <strong>₹<?php echo $row['price']?></strong>
                        <input type="hidden" name="amount" value="<?php echo $row['price']?>" />
                        <input type="hidden" name="product_summary" value="<?php echo $row['product_name']?>" />
                    </li>
                </ul>
                <div class="form-group">
                    <input type="submit" name="check_out" class="btn btn-warning text-white btn-block" value="Continue to Checkout">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>