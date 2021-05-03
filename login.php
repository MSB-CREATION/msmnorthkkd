<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Msm Koyilandi - Login </title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<style>

    body {
        margin: 0;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #1c3564;
    }
    </style>
<body>
<div class="container">
<br> 


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="logmodel.php" class="float-right btn btn-outline-danger mt-1">X</a>
	<h4 class="card-title mt-2">Login</h4>
</header>
<article class="card-body">
<form action="login.php" method="post">
<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

	<div class="form-group">
		<label>Your Name</label>
		<input type="text" name="username" value="<?php echo $username; ?>" class="form-control" placeholder="" required>
	</div> <!-- form-group end.// -->
    <div class="form-group">
		<label>Your Mobile Number</label>
		<input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control" placeholder="" required>
	</div> <!-- form-group end.// -->
	
    <div class="form-group">
        <button type="submit" name="login-btn" class="btn btn-primary btn-block">Login</button>
    </div> <!-- form-group// -->      
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Forgot Number? Call Now <a href="#">234234242342</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br>


</body>
</html>