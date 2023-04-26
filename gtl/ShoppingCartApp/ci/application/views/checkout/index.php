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

<h1>CHECKOUT</h1>
<div class="checkout">
    <div class="row">
        <?php if(!empty($error_msg)){ ?>
        <div class="col-md-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
        <?php } ?>
		
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Cart</span>
                <span class="badge badge-secondary badge-pill"><?php echo $this->cart->total_items(); ?></span>
            </h4>
            <ul class="list-group mb-3">
                <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <?php $imageURL = !empty($item["image"])?base_url('assets/images/'.$item["image"]):base_url('assets/images/basket.jpg'); ?>
                        <img src="<?php echo $imageURL; ?>" width="75"/>
                        <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                        <small class="text-muted"><?php echo '$'.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                    </div>
                    <span class="text-muted"><?php echo '$'.$item["subtotal"]; ?></span>
                </li>
				            <?php } }else{ ?>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <p>No items in your cart...</p>
                </li>
                <?php } ?>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong><?php echo '$'.$this->cart->total(); ?></strong>
                </li>
            </ul>
            <a href="<?php echo base_url('products/'); ?>" class="btn btn-block btn-info">Add Items</a>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Contact Details</h4>
            <form method="post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" placeholder="Enter name" required>
                    <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo !empty($custData['email'])?$custData['email']:''; ?>" placeholder="Enter email" required>
                    <?php echo form_error('email','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter contact no" required>
                    <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter address" required>
                    <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
                </div>
                <input class="btn btn-success btn-lg btn-block" type="submit" name="placeOrder" value="Place Order">
            </form>
        </div>
    </div>
</div>
</body>
</html>