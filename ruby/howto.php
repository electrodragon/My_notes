<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Ruby Notes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleinstall.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center text-primary"><strong>Ruby On Rails</strong></h1>
        </div>
      </div>
        <?php
        include 'menu.php'
         ?>
      </div>
      <hr>

  	<div class="container">
	   <div class="row">
		   <div class="col-sm-12">
         <h1 style="font-weight:bold;">All Ruby components Must Be Installed.</h1>
         <hr>
         <h2 class="text-center">Terminal</h2>
         <pre id="terminal">
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~</span># cd Desktop/
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop</span># mkdir Funny
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop</span># cd Funny/
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># touch girl.rb
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># echo 'puts "Hello World"' >> girl.rb
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># cat girl.rb
puts "Hello World"
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># ruby girl.rb
Hello World
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># echo 'puts "I Love Your Girls"' >> girl.rb
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># cat girl.rb
puts "Hello World"
puts "I Love Your Girls"
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span># ruby girl.rb
Hello World
I Love Your Girls
<span style="color:red; font-weight:bold;">root@kali</span>:<span style="color:dodgerblue; font-weight:bold;">~/Desktop/Funny</span>#
         </pre>
       </div>
	   </div>

     <div class="text-center">
       <a href="index.php">Go Back</a>
     </div>
    </div><!-- Container DIV END -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
