<!DOCTYPE html>
<!-- This is the aboutme page of lazymillennial.me-->
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
      $pagevar = "#about_me"; /* change this to the page */
      $rootpath = ""; /* how to get back to the main dir from here (use ending slash) */
      include 'header.php'; 
      ?>
  </header>
	<main>
		<br>
    <div class="text-center">
		<h2 class="text-center">About me</h2>
		<br>
    <img src="aboutme/kyleprofesional2.jpg" alt="kyle professional" class="header-small-img border border-dark rounded">
  </div>
    <br>
		<p> Hello, my name is Kyle! I am a web developer from the United States. I built this website originally as a blog and as my first public website. Since then, the site it has evolved into somewhat of a shocase of my previous projects and a way that I can share my past experiences. Please take a look at my web development portfolio by clicking the link in the menu above. Thanks for visiting the site!</p>
    <p class="text-center"><img src="aboutme/wink.jpg"><br> &nbsp - Sincerely, Kyle </p>
    <br>
		<!-- Back to top button-->
    <hr>
		<div class="text-center">
			<a href="#top"><button type="button" class="btn btn-light border border-dark">Back to top</button></a>
		</div>
	</main>
  <br><br>
</body>
</html>