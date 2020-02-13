<!DOCTYPE html>
<!-- This is the projects page of lazymillennial.me-->
<html>
	<head>
			<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Lobster font -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <!-- Custom stylesheet lazymillennial.css -->
    <link href="lazymillennial.css" rel="stylesheet">   
    <Title>LazyMillennial.me</title>
	</head>
<body>
	<header>
     <!-- this loads my header script-->
      <?php 
      $pagevar = "#projects"; /* change this to the page */
      $rootpath = ""; /* how to get back to the main dir from here (use ending slash) */
      include 'header.php'; 
      ?>
  </header>
	<main>
    <div class="text-center">
      <br>
      <h2>Projects</h2>
      <br>
      <p>Here, I would like to share with you my personal projects. I will slowly be adding them as articles to the site over the next few weeks. Keep checking the home page for updates and feel free to comment!</p>
    </div><br>
    <div class="container">
      <div class="row">
        <div class="col-md text-center">
          <a class="text-dark" href="projects/motorbicycle.php">
          <img src="projects/motorbicycle/motorbicycle-thumb.JPG" alt="motor bicycle thumb" class="img2rows border border-dark rounded">
          <p>Chainsaw motor bicycle</p></a>
        </div>
        <div class="col-md text-center">
          <a class="text-dark" href="projects/megasquirt.php">
          <img src="projects/megasquirt/megasquirt-thumb.JPG" alt="megasquirt thumb" class="img2rows border border-dark rounded">
          <p>Megasquirt Computer Build</p></a>
        </div>        
        <div class="col-md text-center">
          <a class="text-dark" href="projects/zrx.php">
          <img src="projects/zrx/zrx-thumb.JPG" alt="zrx thumb" class="img2rows border border-dark rounded">
          <p>ZRX Motorcycle Build</p></a>
        </div>

        <div class="w-100 d-lg-block"></div>

        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/iroc/iroc-thumb.JPG" alt="camaro thumb" class="img2rows border border-dark rounded">
          <p>IROC Camaro Streetcar</p></a>
        </div> 
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/iroc/383-thumb.JPG" alt="383 thumb" class="img2rows border border-dark rounded">
          <p>383 Stroker Engine Build</p></a>
        </div>
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/iroc/turbo-thumb.JPG" alt="turbo iroc thumb" class="img2rows border border-dark rounded">
          <p>Turbo LSX Engine Build</p></a>
        </div>

        <div class="w-100 d-lg-block"></div>
        
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/woodshop/woodshop-thumb.JPG" alt="woodshop thumb" class="img2rows border border-dark rounded">
          <p>Woodshop Projects</p></a>
        </div>
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/welding/table-thumb.JPG" alt="welding project thumb" class="img2rows border border-dark rounded">
          <p>First Welding Project</p></a>
        </div>
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/failures/failures-thumb.JPG" alt="failures thumb" class="img2rows border border-dark rounded">
          <p>Project Failures :(</p></a>
        </div>

        <div class="w-100 d-lg-block"></div>
        
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="projects/adam/adam-thumb.JPG" alt="adams car thumb" class="img2rows border border-dark rounded">
          <p>Adam's Car</p></a>
        </div>    
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="misc/comingsoon2.jpg" alt="comingsoon thumb" class="img2rows border border-dark rounded">
          <p>The $500 Jeep!</p></a>
        </div>
        <div class="col-md text-center transparent">
          <a class="text-dark" href="#">
          <img src="misc/comingsoon2.jpg" alt="comingsoon thumb" class="img2rows border border-dark rounded">
          <p>MORE COMING SOON!</p></a>
        </div>
      </div>
    </div>
      <hr>
	</main>
  <!-- Back to top button-->
    <div class="text-center">
      <a href="#top"><button type="button" class="btn btn-light border border-dark">Back to top</button></a>
    </div>
    <br><br>
</body>
</html>