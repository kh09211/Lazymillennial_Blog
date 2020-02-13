<!DOCTYPE html>
<!-- This is the quick cash page of lazymillennial.me-->
<html>
	<head>
			<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <!-- Custom stylesheet lazymillennial.css -->
    <link href="lazymillennial.css" rel="stylesheet">
    <Title>LazyMillennial.me</title>
	</head>
<body>
	<header>
     <!-- this loads my header script-->
      <?php 
      $pagevar = "#quick_cash"; /* change this to the page */
      $rootpath = ""; /* how to get back to the main dir from here (use ending slash) */
      include 'header.php'; 
      ?>
  </header>
	<main>
    <div class="text-center">
      <br>
      <h2>Quick Cash!</h2>
      <br>
      <p>Here are some of the fast ways that you can made money in the "gig economy"!</p>
    </div><br>
    <div class="container">
      <div class="row">
        <div class="col-md text-center transparent">
          <a class="text-dark text-nowrap-" href="#">
          <img src="quickcash/beets/beet-thumb.jpg" alt="beets thumb" class="img2rows border border-dark rounded">
          <p>Sidney Sugarbeet Harvest<br> $5,100 in 5 weeks</p></a>
        </div>
        <div class="col-md text-center transparent">
          <a class="text-dark text-nowrap-" href="#">
          <img src="quickcash/rideshare/rideshare-thumb.jpg" alt="rideshare thumb" class="img2rows border border-dark rounded">
          <p>Rideshare Driving<br> $9,000 in 10 weeks</p></a>
        </div>
        <div class="col-md text-center transparent">
          <a class="text-dark text-nowrap-" href="#">
          <img src="misc/comingsoon2.jpg" alt="comingsoon" class="img2rows border border-dark rounded">
          <p>More Coming Soon!</p></a>
        </div>

        <div class="w-100 d-lg-block"></div>

      </div>
    </div>
    <br>
    <!-- Back to top button-->
    <hr>
    <div class="text-center">
      <a href="#top"><button type="button" class="btn btn-light border border-dark">Back to top</button></a>
    </div>
    <br><br>
	</main>
</body>
</html>