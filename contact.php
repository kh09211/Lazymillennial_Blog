<!DOCTYPE html>
<!-- This is the contact page of lazymillennial.me-->
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
      $pagevar = "#contact"; /* change this to the page */
      $rootpath = ""; /* how to get back to the main dir from here (use ending slash) */
      include 'header.php'; 
      ?>
  </header>
	<main>
    <div class="text-center">
      <br>
      <h2>Contact me</h2>
      <br>
      <p> You can reach me through the discus commenting platform below and I will reply ASAP. Thanks!
    </div><br>
    <!-- DISQUS COMMENTING CODE -->
    <div id="disqus"><br> <!-- MY DIV FOR THIS MAKE SURE TO COPY THE CSS AND @MEDIA QUEIRY FOR THIS-->
      <div id="disqus_thread">
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

        var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };

        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://lazymillennial-me.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <script id="dsq-count-scr" src="//lazymillennial-me.disqus.com/count.js" async></script>
      </div>
    </div>
      <!-- END DISCUS CODE -->
    </main>
    <!-- Back to top button-->
      <hr>
        <div class="text-center">
          <a href="#top"><button type="button" class="btn btn-light border border-dark">Back to top</button></a>   
  </div>
  <br><br>
</body>
</html>