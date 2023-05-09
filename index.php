<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simon Game</title>
  <link rel="icon" type="image/x-icon" href="images/header.jpg">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/cd257970a3.js" crossorigin="anonymous"></script>
	<!--Bootstrap Scripts-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  </head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="">
      <img
        src="images/header.png"
        height="60"
        alt="simongame"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Left links -->
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=home">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=mopsz">Simon Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=galeria">Galéria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=contact">Kapcsolat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=messages">Üzenetek</a>
        </li>
      </ul>
      <!-- Left links -->

      <span class="navbar-text">
      <?php
      
      if (isset($_SESSION['username'])) {
        $myConnection= mysqli_connect('localhost', 'root', '', 'simongame') or die ("could not connect to mysql"); 
        $sqlCommand="SELECT * FROM `users` WHERE `username` = '{$_SESSION['username']}'";
        $query=mysqli_query($myConnection, $sqlCommand) or die(mysqli_error($myConnection));
        $show=mysqli_fetch_assoc($query);
        echo "Bejelentkezett: ".$show['lastname']; echo " " .$show['firstname'];
        //mysql_close(); 
      }   
      ?>
      </span>

      <div class="d-flex align-items-center">
        <?php if (isset($_SESSION['username'])) : ?>
          <a href="index.php?page=logout">
        <button type="button" class="btn btn-primary me-3" >
          Kijelentkezés</button>
        </a>
        <?php else : ?>
          <a href="index.php?page=login">
        <button type="button" class="btn btn-primary me-3" >
          Bejelentkezés</button>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->


      <article>
			<div id="centerer">
			
				<section>
					<?php
						if (isset($_GET['page']))
							$page = $_GET['page'];
						else
							$page = 'home';
						if (preg_match('/^[a-z0-9\-]+$/', $page))
						{
							$inserted = include($page . '.php');
							if (!$inserted)
								echo('Requested page was not found.');
						}
						else
							echo('Invalid parameter.');
					?>
				</section>
				<div class="clearer"></div>
			</div>
		</article>

  
</div>

<!-- Footer -->
<footer class="text-center text-lg-start" style="background-color: #db6930;">
  
  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="">Simon Game</a>
  </div>
  <!-- Copyright -->
</footer>

   
		
</body>
</html>