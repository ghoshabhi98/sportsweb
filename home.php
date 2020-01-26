<?php

session_start();

if(!isset( $_SESSION['username'])) {
	header('location:log-in.html');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#"><img src="./images/logo8.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.html">about us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.html">services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./improtance.html">importance</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./positive.html">positive-side</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./index.html">testimonials</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./index.html">contact us</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="./log-in.html">log in</a>
            </li>
              </ul>
          </div>
        </nav> 
  </section>
	
   <div class="container">	
		<h1 class="text-center text-success"> hiiiiiiii  welcome  <?php echo $_SESSION['username'] ?>  </h2>
		<a href="logout.php"> LOGOUT </a>
   </div> 	

</body>
</html>