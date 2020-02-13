<!DOCTYPE html>
<!-- BLOG 9-29 learn to code blog-->
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
    <link href="../../lazymillennial.css" rel="stylesheet">
    <Title>LazyMillennial.me</title>
	</head>
<body>
	<header>
      <!-- this loads my header script-->
      <?php 
      $pagevar = "#blog"; /* change this to the page */
      $rootpath = "../../"; /* how to get back to the main dir from here (use ending slash) */
      include $rootpath . 'header.php'; 
      ?>
  </header>
	<main>
    <div class="text-center">
      <br>
      <h2>Learn to Code</h2>
      <br>
      <br>
      <img src="9-29/fcccert.jpg" alt="fcc cert screenshot" class="img-fluid border border-dark">
      <a href="https://www.freecodecamp.org/certification/fcc6f128c61-5cee-47c7-b9fd-7124cccdffe1/responsive-web-design" target="_blank"><p class="h6 text-center text-dark">You can check out my actual FCC cert here</p></a>
    </div>
    <br>
    <p class="text-left">9/29/2019</p>
    <p>So it's been a little bit since I last posted an update. The truth is, I've been working pretty hard on some coding projects. Soon I will be adding a WebDev tab to the navigation bar to show off a few things I've been working on. I've also moved the hosted server of this domain from a free hosting site, to my own EC2 instance that I set up in the Amazon AWS cloud. It was a really fun project and now I have much more control over the site.</p>

    <p>The new server is running Ubuntu Linux version 18.04 with an Nginx webserver configured to run virtual servers for this domain and more that I plan to setup in the future. Since I'm in the process of learning some coding (this site was coded by yours truly), I set up node.js on the server and have started playing with it. I think this is going to give me the tools that I need to step up my programming game to the next level.</p>

    <p>It probably sounds like I'm not extremely new to this stuff. It's because I'm not. I've been involved with programming languages since I was in the 4th grade. An early memory is being in trouble for messing up a computer in my 4th grade classroom. It was a DOS O/S machine that had some things setup with MS Basic, an pretty easy language to learn. I started playing with it. It was fun... Well fun until the principal called me into his office. Even though I was only 9 or 10, I still remember some of his exact words. "Kyle, you know just enough about computers to be dangerous."</p>

    <p>That wasn't the last time that I got in trouble. A neighbor friend of mine and I started getting deeper into programming with Visual Basic. We were compiling programs that could play around on AOL (America OnLine). It wasn't much longer before I was using telnet and and setting up shell scripts on a Linux box at home. By the 7th or 8th grade, I had several Linux boxes setup in my room and a home LAN using an old 386 computer as a router. I was learning A LOT... And then it all came to an abrupt end. </p>

    <p>A friend of mine and I got access to the school's mainframe and started connecting to it from home. We ended up getting caught. It was a big mess because the school didn't know exactly what to do with us. Long story short, I got banned from using the computers at school for a year and my parents took all my computer stuff out of my room. That was the end of my programming days. I moved on to other hobbies.</p>

    <p>Fast forward to a few years ago, my project car turned race car need a standalone computer. I completed a couple electronics projects (the Megasquirt ECU board and the JimStim board) and started getting really interested in that. Then I enrolled in an Electrical Engineering program. It was there that I got exposed to MatLAB. It was an easy language. Or at least it came to me easy. I got to apply a lot of things that I was learning in my math classes and it was pretty fun.</p>

    <p>Well that University program was not for me. I completed all the maths and physics and after 2 years I just didn't feel like I was learning much that I could apply. It was costing me A LOT of money too. Like... tens of thousands of dollars in loans. After a CO-OP internship, my academic adviser told me that I was going to have to take 3 more semesters of a foreign language. My old classes wouldn't transfer. I added up the cost and extra time it would take me and decided to tell them to pound sand. I didn't choose this engineering degree to waste my time and money on learning French.</p>

    <p>Well I heard "learn to code" a few times in the news. I remember something about laid off coal miners being told that they should learn to code. Well heck I need to earn some money and if a a coal miner can do it, why don't I give it another try. So here I am. A few months after digging back into this stuff. To be honest, I'm loving it. So that's what I'm doing. I'm living in a South American country and focusing on 'learning to code'. I promise that this time I will not use what I learn to get me in trouble. This completed FCC certificate is solid step towards my new career. I have set some specific goals for myself and I look forward to discussing relevant topics on this site and share my projects here as I progress in skill. </p>
    <br>
    <p class="text-center">Thanks for reading. Have a comment? Post it below! </p>
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