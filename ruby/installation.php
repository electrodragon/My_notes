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

  	<div class="container-fluid">
	   <div class="row">
		<div class="col-sm-12">
<pre class="jumbotron">
<span id="var">~$</span> sudo apt-get update

<span id="var">~$</span> gpg --keyserver hkp://pool.sks-keyservers.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3 7D2BAF1CF37B13E2069D6956105BD0E739499BDB

<span id="var">~$</span> \curl -sSL https://get.rvm.io | bash -s stable --ruby

<span id="var">~$</span> source /usr/local/rvm/scripts/rvm

<span id="var">~$</span> gem install rails

<span id="var">~$</span> rvm docs generate-ri

<span id="var">~$</span> gem install execjs

<span id="var">~$</span> sudo apt-get install nodejs

<span id="var">~$</span> ruby -v
<span id="var">~$</span> rails -v
<span id="var">~$</span> gem -v
<span id="var">~$</span> bundler -v
<span id="var">~$</span> ri -v
<span id="var">~$</span> irb -v

<span id="comment"># copy following line and paste it in end of '.bashrc' file.</span>
<span id="green">[[ -s /usr/local/rvm/scripts/rvm ]] && source /usr/local/rvm/scripts/rvm</span>

<span id="var">~$</span> leafpad ~/.bashrc
<span id="comment"># paste, save, and exit</span>
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
