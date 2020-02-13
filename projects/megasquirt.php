<!DOCTYPE html>
<!-- This is the megasquirt project page of lazymillennial.me-->
<html>
	<head>
			<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Lobster font -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <Title>LazyMillennial.me</title>
	</head>
<body>
	<header>
     <!-- this loads my header script and custom CSS stylesheet-->
      <?php 
      $pagevar = "#projects"; /* change this to the page */
      $rootpath = "../"; /* how to get back to the main dir from here (use ending slash) */
      echo '<link href="' . $rootpath . 'lazymillennial.css" rel="stylesheet">'; /* LOAD THE CUSTOM STYLESHEET */
      include $rootpath . 'header.php'; 
      ?>
  </header>
	<main>
    <div class="text-center">
      <br>
      <h2>Megasquirt Computer Build Project</h2>
      <br>
      <img src="megasquirt/megasquirt1.JPG" alt="megasquirt complete" class="img-fluid border border-dark">
      <br>
      <br>
    </div>
    <br>
    <p>What is megasquirt? It's a fully customizable standalone computer that is mostly used to control fuel injection and electronic ignition systems on automotive engines. That said it can be configured to control or retrofit fuel injection and electronic ignition for practically any engine (even a lawn mower) and has even been used as a PLC for industrial equipment. Let me show you my build and how it works...</p>

    <br>
      <div class="container text-center>">
        <div class="row align-items-center">
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt2-2.JPG" alt="megasquirt circuit board" class="border border-dark img2rows">
          </div>
          <div class="col-md mb-4">
            <div class="text-center embed-responsive embed-responsive-4by3">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/_TLaNSSyLes" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="border border-dark embed-responsive-item">
              </iframe>
            </div>
          </div>
        </div>
    </div>
    <br>

    <p>For my particular application, I needed to control the turbocharged engine of my project race car. Since my car originally came with 1986 year technology there was practically nothing usable there. The engine I wanted to use came out of a completely different vehicle (a v8 from a 2000 Chevy Tahoe). I didn't receive the computer with the junkyard engine, just a cut wiring harness, and even still the engine and computer were never meant to control the demands of a turbocharger.</p>

    <br>
      <div class="container text-center>">
        <div class="row">
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt3.JPG" alt="Car with no engine" class="border border-dark img2rows">
          </div>
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt4.JPG" alt="ls engine in truck" class="border border-dark img2rows">
          </div>
        </div>
    </div>
    <br>

    <p>This meant that in my particular situation, I needed something that could control a modern engine with a turbo in an old school car that practically just supplied a battery and some gauges. I researched and after looking at standalone computers that cost thousands of dollars, I decided that they were simply out of my budget. Then I found megasquirt and some projects where others were using it in similar applications to mine. It only cost about $250 so I pulled the trigger.</p>

    <p>The kit came with about 200+ pieces. Circuit boards, resistors, diodes, wires, transistors, integrated circuits, etc. At first I thought maybe I made a grave mistake. My dad was an electronics technician for some years and came over to help me get started. Though I had done a bit of soldering prior, I was not prepared for something this complex. I started reading the manual and got to work. After about 10-12 hours of soldering, I had the board built for a v8 engine with multiple coils that used the stock engine sensors. Cool..</p>

    <br>
    <div class="container text-center>">
        <div class="row">
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt5.JPG" alt="building board 1" class="border border-dark img2rows">
          </div>
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt6.JPG" alt="building board 2" class="border border-dark img2rows">
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt7.JPG" alt="building board 3" class="border border-dark img2rows">
          </div>
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt13.JPG" alt="building board 4" class="border border-dark img2rows">
          </div>
        </div>
    </div>
    <br>

    <p>I mounted it inside the car and then began wiring things up. The process was slow. To be honest here the building of the board and wiring ended up being the easy part. Configuring the computer and getting it to actually run an engine was almost hell. I was plagued by crank position sensor problems among others. The computer was not reading the sensor properly and without it, the engine could not start. My dad brought over an OLD OLD oscilloscope and we started probing, reading diagrams, and searching for the issue starting with the sensor and working back.</p>

    <br>
      <div class="container text-center>">
        <div class="row">
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt8.JPG" alt="megasquirt diagnistics" class="border border-dark img2rows">
          </div>
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt9.JPG" alt="crank sensor" class="border border-dark img2rows">
          </div>
        </div>
    </div>
    <br>

    <p>We found it. A small variable resistor that got a little too hot when I was soldering it to the board. Oops. I ordered a new one from an electronics store and swapped it out using solder wick and a bulb. After a little adjustment to the resistor, the engine fired up! The next weeks were spent going through seemingly endless configuration pages, data logging, and editing fuel/ignition settings. Then I finally could move the car. Down the street and back at first. Then around the block. Then after some more adjustments, a longer trip. The thing ran like a champ.</p>

    <br>
      <div class="container text-center>">
        <div class="row">
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt10.PNG" alt="megasquirt diagnistics" class="border border-dark img2rows">
          </div>
          <div class="col-md mb-4">
            <img src="megasquirt/megasquirt11.PNG" alt="crank sensor" class="border border-dark img2rows">
          </div>
        </div>
    </div>
    <br>

    <div class="vid-small">
      <div class="text-center embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nT-JkGNhvwU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive-item"></iframe>
        </iframe>
      </div>
    </div>
    <br>

    <p>Over the next year the megasquirt board would see a few changes with additions to the prototype board for different things. Some gauges, a 2-step rev limiter, and a few other things necessary to control the soon to come turbocharger. I decided to mount a 10" tablet to the dash of the car to run digital gauges linked via Bluetooth to the megasquirt computer (see the video at the top of the page). Something very modern for the year. The megasquirt even proved useful as a fuel injector flow bench tester after I experienced a series of catastrophic engine failures. Maybe I will post about that sometime! More on this project can be seen in the other project pages once they are completed.</p>

    <p class="text-center">Thanks for reading and feel free to comment below!</p>
    <br>
    <hr>
    <!-- Back to top button-->
    <div class="text-center">
      <a href="#top"><button type="button" class="btn btn-light border border-dark">Back to top</button></a>
    </div>
    <br>
  <!-- DISQUS COMMENTING CODE -->
  <div id="disqus"><br> <!-- MY DIV FOR THIS MAKE SURE TO COPY THE CSS AND @MEDIA QUEIRY FOR THIS-->
  <div id="disqus_thread"></div>
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
<!-- END DISCUS CODE -->
	</main>
</body>
</html>