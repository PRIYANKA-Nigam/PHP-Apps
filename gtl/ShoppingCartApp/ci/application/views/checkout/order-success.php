<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart System</title>
     <!-- $autoload['helper'] = array('url'); added this because error was coming in output as 
    Type: Error
Message: Call to undefined function base_url() -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
	integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" 
  crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')   ?>" rel="stylesheet"> -->
     <!-- Include jQuery library -->
<script src="<?php echo base_url('assets/frontend/js/jquery.js'); ?>"></script>
</head>
<body>

<div class="container">
<h1>ORDER STATUS</h1>
<?php if(!empty($order)){ ?>
    <div class="col-md-12">
        <div class="alert alert-success">Your order has been placed successfully.</div>
    </div>
	
    <!-- Order status & shipping info -->
    <div class="row col-lg-12 ord-addr-info">
        <div class="hdr">Order Info</div>
        <p><b>Reference ID:</b> #<?php echo $order['id']; ?></p>
        <p><b>Total:</b> <?php echo '$'.$order['grand_total'].' USD'; ?></p>
        <p><b>Placed On:</b> <?php echo $order['created']; ?></p>
        <p><b>Buyer Name:</b> <?php echo $order['name']; ?></p>
        <p><b>Email:</b> <?php echo $order['email']; ?></p>
        <p><b>Phone:</b> <?php echo $order['phone']; ?></p>
    </div>
	
    <!-- Order items -->
    <div class="row col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>QTY</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!empty($order['items'])){  
                    foreach($order['items'] as $item){ 
                ?>
                <tr>
                    <td>
                        <?php $imageURL = !empty($item["image"])?base_url('assets/images/'.$item["image"]):base_url('assets/images/basket.jpg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                    </td>
                    <td><?php echo $item["name"]; ?></td>
                    <td><?php echo '$'.$item["price"].' USD'; ?></td>
                    <td><?php echo $item["quantity"]; ?></td>
                    <td><?php echo '$'.$item["sub_total"].' USD'; ?></td>
                </tr>
                <?php } 
                } ?>
            </tbody>
        </table>
    </div>
<?php } else{ ?>
<div class="col-md-12">
    <div class="alert alert-danger">Your order submission failed.</div>
</div>
<?php } ?>
<div class="col-mb-2">
    <div class="row">
        <div class="col-sm-12 col-md-12">
        <a href="<?php echo base_url('products/'); ?>"class="btn btn-block btn-primary">Back to Home</a>
        </div>
    </div>
</div>
</div>
</body>
</html>