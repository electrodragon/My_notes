<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Ruby Notes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
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
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>puts "<span class="text-warning">Hello World</span>"</p>
          <pre>Hello World</pre>
        </div>
        <div class="col-sm-4">
          <p>puts "<span class="text-warning">Hello</span>" <span class="text-info">+</span> "<span class="text-warning">World</span>"</p>
          <pre>HelloWorld</pre>
        </div>
        <div class="col-sm-4">
          <p>puts "<span class="text-warning">Hello</span>" <span class="text-info">+</span> " " <span class="text-info">+</span> "<span class="text-warning">World</span>"</p>
          <pre>Hello World</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "<span class="text-warning">Hello World</span>"</p>
          <p>puts <span class="text-info">var</span></p>
          <pre>Hello World</pre>
        </div>
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "<span class="text-warning">Hello World</span>"</p>
          <p>puts "<span class="text-warning">Val is </span><span class="text-info">#{var}</span>"</p>
          <pre>Val is Hello World</pre>
        </div>
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "<span class="text-warning">Hello World</span>"</p>
          <p>puts '<span class="text-warning">Val is </span>
            <span class="text-info">#{var}</span>'</p>
            <pre>Val is #{var}</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p><span id="def">def</span> <span id="method">function_name</span><br>
            &nbsp;&nbsp;puts "<span class="text-warning">i am a Method !</span>"<br>
          <span id="end">end</span></p>
          <p><span id="method">function_name</span></p>
          <pre>i am a Method !</pre>
        </div>
        <div class="col-sm-4">
          <p><span id="def">def</span> <span id="method">function_name<span class="text-info">(arg_var)</span></span><br>
            &nbsp;&nbsp;puts "<span class="text-warning">Value is <span class="text-info">#{arg_var}</span>!</span>"<br>
          <span id="end">end</span></p>
          <p><span id="method">function_name</span> "Hello World"</p>
          <pre>Value is Hello World!</pre>
        </div>
        <div class="col-sm-4">
          <p><span id="def">def</span> <span id="method">function_name<span class="text-info">(arg1, arg2)</span></span><br>
            &nbsp;&nbsp;puts "<span class="text-warning">Hurray ! <span class="text-info">#{arg1*arg2}</span></span>"<br>
          <span id="end">end</span></p>
          <p><span id="method">function_name<span class="text-info">(6,10)</span></span></p>
          <pre>Hurray ! 60</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "Nameless"<br>
            puts <span class="text-info">var</span>.<span id="method">class</span>
          </p>
            <pre>String</pre>
        </div>
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "Nameless"<br>
            print <span class="text-info">var</span>.<span id="method">methods</span>
          </p>
            <pre>[:encode, :include?, :%, :*, :+, :count, :partition, :to_c, :sum, :next, :casecmp, :casecmp?, :insert, :bytesize, :match, :match?, :succ!, :<=>, :next!, :index, :rindex, :upto, :==, :===, :chr, :=~, :byteslice, :[], :[]=, :scrub!, :getbyte, :replace, :clear, :scrub, :empty?, :eql?, :-@, :downcase, :upcase, :dump, :setbyte, :swapcase, :+@, :capitalize, :capitalize!, :undump, :downcase!, :oct, :swapcase!, :lines, :bytes, :split, :codepoints, :freeze, :inspect, :reverse!, :grapheme_clusters, :reverse, :hex, :scan, :upcase!, :crypt, :ord, :chars, :prepend, :length, :size, :start_with?, :succ, :sub, :intern, :chop, :center, :<<, :concat, :strip, :lstrip, :end_with?, :delete_prefix, :to_str, :to_sym, :gsub!, :rstrip, :gsub, :delete_suffix, :to_s, :to_i, :rjust, :chomp!, :strip!, :lstrip!, :sub!, :chomp, :chop!, :ljust, :tr_s, :delete, :rstrip!, :delete_prefix!, :delete_suffix!, :tr, :squeeze!, :each_line, :to_f, :tr!, :tr_s!, :delete!, :slice, :slice!, :each_byte, :squeeze, :each_codepoint, :each_grapheme_cluster, :valid_encoding?, :ascii_only?, :rpartition, :encoding, :hash, :b, :unicode_normalize!, :unicode_normalized?, :to_r, :force_encoding, :each_char, :unicode_normalize, :encode!, :unpack, :unpack1, :<=, :>=, :between?, :<, :>, :clamp, :instance_variable_set, :instance_variable_defined?, :remove_instance_variable, :instance_of?, :kind_of?, :is_a?, :tap, :instance_variable_get, :instance_variables, :method, :public_method, :singleton_method, :define_singleton_method, :public_send, :extend, :to_enum, :enum_for, :pp, :!~, :respond_to?, :object_id, :send, :display, :nil?, :class, :singleton_class, :clone, :dup, :itself, :yield_self, :taint, :tainted?, :untrust, :untaint, :trust, :untrusted?, :methods, :frozen?, :protected_methods, :singleton_methods, :public_methods, :private_methods, :!, :equal?, :instance_eval, :instance_exec, :!=, :__send__, :__id__]</pre>
        </div>
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "Nameless"<br>
            puts <span class="text-info">var</span>.<span id="method">nil?</span><br>
          </p>
          <pre>false</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p><span style="color:grey;">#</span><br/>
            puts <span class="text-info" style="font-family:courier;">""</span>.<span id="method">nil?</span>
          </p>
            <pre>false</pre>
        </div>
        <div class="col-sm-4">
          <p><span style="color:grey;">#</span><br/>
            puts <span class="text-info">nil</span>.<span id="method">nil?</span>
          </p>
            <pre>true</pre>
        </div>
        <div class="col-sm-4">
          <p><span class="text-info">var</span> = "Nameless"<br>
            puts <span class="text-info">var</span>.<span id="method">length</span><br>
          </p>
          <pre>8</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <p>
          puts <span class="text-info" style="font-family:courier;">" "</span>.<span id="method">empty?</span><br></p>
          <pre>false</pre>
        </div>
        <div class="col-sm-6">
          <p>
            puts <span class="text-info" style="font-family:courier;">""</span>.<span id="method">empty?</span>
          </p>
            <pre>true</pre>
        </div>
      </div>
      <hr>

      <h2 style="font-weight:bold; color:orange;">ESCAPE SEQUENCE</h2>
      <div class="row">
        <div class="col-sm-12">
          <p>\'</p>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            puts "<span class="text-warning">Enter Something</span>"<br>
            <span id="var">var</span> = <span id="method">gets.chomp</span><br>
            puts "<span class="text-warning">You Entered</span> <span id="var">#{var}</span>"
          </p>
        </div>
        <div class="col-sm-8">
          <pre>Enter Something
jungle
You Entered jungle</pre>
        </div>
      </div>
      <hr>

      <div class="row">
          <div class="col-sm-4">
            <p>
              <span id="var">a</span> = <span class="text-warning">1012</span><br>
              puts <span id="var">a</span>.<span id="method">to_f</span><br>
              puts <span id="var">a</span>.<span id="method">to_f</span>.<span id="method">class</span>
            </p>
            <pre>1012.0
Float</pre>
          </div>
          <div class="col-sm-4">
            <p>
              <span id="var">a</span> = <span class="text-warning">1012.0</span><br>
              puts <span id="var">a</span>.<span id="method">to_i</span><br>
              puts <span id="var">a</span>.<span id="method">to_i</span>.<span id="method">class</span>
            </p>
            <pre>1012
Integer</pre>
          </div>
          <div class="col-sm-4">
            <p>
              <span id="var">a</span> = <span class="text-warning">1012.0</span><br>
              puts <span id="var">a</span>.<span id="method">to_s</span><br>
              puts <span id="var">a</span>.<span id="method">to_s</span>.<span id="method">class</span>
            </p>
            <pre>1012.0
String</pre>
          </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <p>
            <span id="var">a</span> = <span class="text-warning">1012</span><br>
            puts <span id="var">a</span>.<span id="method">odd?</span>
          </p>
          <pre>false</pre>
        </div>
        <div class="col-sm-6">
          <p>
            <span id="var">a</span> = <span class="text-warning">1012</span><br>
            puts <span id="var">a</span>.<span id="method">even?</span>
          </p>
          <pre>true</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <p><span style="color:grey"># Ganerates a Random Number</span><br>
          puts <span id="method">rand</span></p>
          <pre>0.6893708070341129</pre>
        </div>
        <div class="col-sm-6">
          <p><span style="color:grey"># Ganerates Random No. b/w 0 to Given Value</span><br>
          puts <span id="method">rand(10)</span></p>
          <pre>2</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>3.<span id="method">times</span> { print "<span class="text-warning">Welcome</span>" }</p>
        </div>
        <div class="col-sm-8">
          <pre>WelcomeWelcomeWelcome</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span style="color:gray;">#.reverse works with string</span><br>
              puts "<span class="text-warning">Enter Something</span>"<br>
              <span id="var">var</span> = <span id="method">gets.chomp</span><br>
              puts "<span class="text-warning">You Entered</span> <span id="var">#{var}</span>"<br>
              puts "<span class="text-warning">Reverse is </span> <span id="var">#{var.reverse}</span>"
          </p>
          <pre>Enter Something
rubyonrails
You Entered rubyonrails
Reverse is sliarnoybur</pre>
        </div>
        <div class="col-sm-4">
          <p>
              puts "<span class="text-warning">Enter Something</span>"<br>
              <span id="var">var</span> = <span id="method">gets.chomp</span><br>
              <span id="var">var</span> = <span id="var">var</span>.<span id="method">to_i</span><br>
              <span style="color:violet;">if</span> <span id="var">var</span> == <span class="text-warning">1</span><br>
                &nbsp;&nbsp;puts "<span class="text-warning">Welcome back</span>"<br>
              <span style="color:violet;">elsif</span> var == 2<br>
                &nbsp;&nbsp;puts "<span class="text-warning">Welcome Master</span>"<br>
              <span style="color:violet;">else</span><br>
                &nbsp;&nbsp;puts "<span class="text-warning">Get Lost bitch</span>"<br>
              <span id="end">end</span>
          </p>
          <pre>Enter Something
2
Welcome Master</pre>
        </div>
      </div>
      <hr>

      <h2 style="font-weight:bold; color:orange;">Arrays</h2>

      <div class="row">
          <div class="col-sm-4">
            <p>
              <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
              print <span id="var">a</span>
            </p>
            <pre>[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]</pre>
          </div>
          <div class="col-sm-4">
            <p>
              <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
              puts <span id="var">a[1]</span>
            </p>
            <pre>2</pre>
          </div>
          <div class="col-sm-4">
            <p>
              <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
              puts <span id="var">a[0]</span>
            </p>
            <pre>1</pre>
          </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
            puts <span id="var">a.include?(5)</span>
          </p>
          <pre>true</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
            puts <span id="var">a.include?("love")</span>
          </p>
          <pre>false</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
            puts <span id="var">a.include?(0)</span>
          </p>
          <pre>false</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <p>
            <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10,"life"]</span><br>
            <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10,"live",[4,"freeze","sea",25],11]</span><br>
            <span id="var">a</span> = <span class="text-warning">[1,2,3,4,5,6,7,8,9,10]</span><br>
          </p>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span id="var">y</span> = <span class="text-warning">(0..25)</span>.<span id="method">to_a</span><br>
            print <span id="var">y</span>
          </p>
        </div>
        <div class="col-sm-8">
          <pre>[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25]</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span id="var">y</span> = <span class="text-warning">(0..10)</span>.<span id="method">to_a</span><br>
            puts <span id="var">y</span>.<span id="method">empty?</span>
          </p>
          <pre>false</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">y</span> = <span class="text-warning">(0..5)</span>.<span id="method">to_a</span><br>
            print <span id="var">y</span>.<span id="method">reverse</span>
          </p>
          <pre>[5, 4, 3, 2, 1, 0]</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">y</span> = <span class="text-warning">(0..5)</span>.<span id="method">to_a</span><br>
            print <span id="var">y</span>.<span id="method">shuffle</span>
          </p>
          <pre>[3, 5, 0, 1, 4, 2]</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span id="var">z</span> = <span class="text-warning">(0..5)</span>.<span id="method">to_a</span><br>
            print <span id="var">z</span><br>
            print "<span class="text-warning">\n</span>"<br>
            <span id="var">z</span> = <span id="var">z</span>.<span id="method">shuffle</span>!<br>
            print <span id="var">z</span>
          </p>
          <pre>[0, 1, 2, 3, 4, 5]
[3, 2, 0, 4, 5, 1]</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">z</span> = <span class="text-warning">(0..5)</span>.<span id="method">to_a</span><br>
            print <span id="var">z</span><br>
            print "<span class="text-warning">\n</span>"<br>
            <span id="var">z</span> = <span id="var">z</span>.<span id="method">reverse</span>!<br>
            print <span id="var">z</span>
          </p>
          <pre>[0, 1, 2, 3, 4, 5]
[5, 4, 3, 2, 1, 0]</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">z</span> = <span class="text-warning">(0..5)</span>.<span id="method">to_a</span>.<span id="method">shuffle</span>!<br>
            print <span id="var">z</span>
          </p>
          <pre>[4, 0, 5, 2, 1, 3]</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
          <span id="var">jungle</span> = <span class="text-warning">(0..7)</span>.<span id="method">to_a</span><br>
          print "<span id="var">#{jungle}</span>" + "<span class="text-warning">\n</span>"<br>
          <span id="var">jungle</span> << <span class="text-warning">5</span><br>
          print <span id="var">jungle</span>
          </p>
          <pre>[0, 1, 2, 3, 4, 5, 6, 7]
[0, 1, 2, 3, 4, 5, 6, 7, 5]</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span id="var">jungle</span> = <span class="text-warning">(0..7)</span>.<span id="method">to_a</span><br>
          print "<span id="var">#{jungle}</span>" + "<span class="text-warning">\n</span>"<br>
          <span id="var">jungle</span>.<span id="method">push</span><span class="text-warning">(5)</span><br>
          print <span id="var">jungle</span>
          </p>
          <pre>[0, 1, 2, 3, 4, 5, 6, 7]
[0, 1, 2, 3, 4, 5, 6, 7, 5]</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span id="var">jungle</span> = <span class="text-warning">(0..7)</span>.<span id="method">to_a</span><br>
          print "<span id="var">#{jungle}</span>" + "<span class="text-warning">\n</span>"<br>
          <span id="var">jungle</span>.<span id="method">unshift</span><span class="text-warning">("Monkey")</span><br>
          print <span id="var">jungle</span>
          </p>
          <pre>[0, 1, 2, 3, 4, 5, 6, 7]
["Monkey", 0, 1, 2, 3, 4, 5, 6, 7]</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span id="var">jungle</span> = <span class="text-warning">(0..7)</span>.<span id="method">to_a</span><br>
            print "<span id="var">#{jungle}</span>" + "<span class="text-warning">\n</span>"<br>
            <span id="var">jungle</span>.<span id="method">pop</span><br>
            print <span id="var">jungle</span>
            </p>
            <pre>[0, 1, 2, 3, 4, 5, 6, 7]
[0, 1, 2, 3, 4, 5, 6]</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="var">jungle</span> = <span class="text-warning">(0..5)</span>.<span id="method">to_a</span><br>
            print "<span id="var">#{jungle}</span>" + "<span class="text-warning">\n</span>"<br>
            <span id="var">jungle</span> << <span id="method">3</span><br>
            <span id="var">jungle</span> << <span id="method">5</span><br>
            print "<span id="var">#{jungle}</span>" + "<span class="text-warning">\n</span>"<br>
            print <span id="var">jungle</span>.<span id="method">uniq</span><br>
            print "<span class="text-warning">\n</span><span id="var">#{jungle}</span>"<br>
            <span id="var">jungle</span>.<span id="method">uniq</span>!<br>
            print "<span class="text-warning">\n</span><span id="var">#{jungle}</span>"<br>
            </p>
            <pre>[0, 1, 2, 3, 4, 5]
[0, 1, 2, 3, 4, 5, 3, 5]
[0, 1, 2, 3, 4, 5]
[0, 1, 2, 3, 4, 5, 3, 5]
[0, 1, 2, 3, 4, 5]</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span id="var">girl</span> = <span class="text-warning">(0..10)</span>.<span id="method">to_a</span><br>
          <span id="var">girl</span>.<span id="method">each</span> { <span style="color:violet;">|</span><span id="var">var</span><span style="color:violet;">|</span> puts <span id="var">var</span> }
          </p>
          <pre>0
1
2
3
4
5
6
7
8
9
10</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
          <span id="var">girl</span> = <span class="text-warning">(0..10)</span>.<span id="method">to_a</span><br>
          <span style="color:violet;">for</span> <span id="var">var</span> in <span id="var">girl</span><br>
          &nbsp;&nbsp;puts "<span class="text-warning">Welcome</span>"<br>
          <span id="end">end</span>
          </p>
          <pre>Welcome
Welcome
Welcome
Welcome
Welcome
Welcome
Welcome
Welcome
Welcome
Welcome
Welcome</pre>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <p>
            <span id="var" style="font-family:courier;">life</span> = <span class="text-warning">["eat", "love", "marry", "die"]</span><br>
            <span id="var" style="font-family:courier;">life</span>.<span id="method">each</span> <span style="color:violet;">do</span> <span style="color:violet;">|</span><span id="var">var</span><span style="color:violet;">|</span><br>
            &nbsp;&nbsp;puts "<span class="text-warning">Bitch</span> <span id="var">#{var}</span>"<br>
            <span id="end">end</span>
            </p>
            <pre>Bitch eat
Bitch love
Bitch marry
Bitch die</pre>
          </div>
          <div class="col-sm-4">
            <p>
            <span id="var" style="font-family:courier;">life</span> = <span class="text-warning">["eat", "love", "marry", "die"]</span><br>
            <span id="var" style="font-family:courier;">life</span>.<span id="method">each</span> <span style="color:violet;">do</span> <span style="color:violet;">|</span><span id="var">var</span><span style="color:violet;">|</span><br>
            &nbsp;&nbsp;puts "<span class="text-warning">Bitch</span> <span id="var">#{var.<span id="method">capitalize</span>}</span>"<br>
            <span id="end">end</span>
            </p>
            <pre>Bitch Eat
Bitch Love
Bitch Marry
Bitch Die</pre>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <p>
          <span id="var" style="font-family:courier;">life</span> = <span class="text-warning">["eat", "love", "marry", "die"]</span><br>
          <span id="var" style="font-family:courier;">life</span>.<span id="method">each</span> { <span style="color:violet;">|</span><span id="var">var</span><span style="color:violet;">|</span> puts "<span id="var">#{var</span>.<span id="method">capitalize</span><span id="var">}</span>" }
          </p>
          <pre>Eat
Love
Marry
Die</pre>
        </div>
        <div class="col-sm-6">
          <p>
            <span id="var">y</span> = <span class="text-warning">(0..10)</span>.<span id="method">to_a</span><br>
            print <span id="var">y</span>.<span id="method">select</span> { <span style="color:violet;">|</span><span id="var">var</span><span style="color:violet;">|</span> <span id="var">var</span>.<span id="method">odd?</span> }
          </p>
          <pre>[1, 3, 5, 7, 9]</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <p>
            <span id="var">y</span> = <span class="text-warning">(0..10)</span>.<span id="method">to_a</span><br>
            <span id="var">y</span>.<span id="method">each</span> { <span style="color:violet;">|</span><span id="var">var</span><span style="color:violet;">|</span> print <span id="var">var</span> <span style="color:violet;">if</span> <span id="var">var</span>.<span id="method">odd?</span> }
          </p>
          <pre>13579</pre>
        </div>
        <div class="col-sm-6">
          <p>
            <span id="var">world</span> = <span class="text-warning">["love", "is", "life"]</span><br>
            puts <span id="var">world</span>.<span id="method">join</span><br>
            puts <span id="var">world</span>.<span id="method">join</span><span class="color:violet;">(" ")</span><br>
            puts <span id="var">world</span>.<span id="method">join</span><span class="color:violet;">(' ')</span><br>
            <span id="var">a</span> = <span id="var">world</span>.<span id="method">join</span><span class="color:violet;">(' preaching ')</span><br>
            puts <span id="var">a</span>
          </p>
          <pre>loveislife
love is life
love is life
love preaching is preaching life</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <h2 style="color:orange;">Hash</h2>
          <p><span id="var">var</span> = {'<span style="color:violet;">Key</span>' => '<span class="text-warning">Value</span>'}</p>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <p style="font-family:monospace;">
            <span id="var">var</span> = {'<span style="color:violet;">keyVarName</span>' => '<span class="text-warning">Master</span>', '<span style="color:violet;">keyVarColour</span>' => '<span class="text-warning">red</span>'}<br>
            puts <span id="var">var</span>["<span style="color:violet;">keyVarColour</span>"]
          </p>
          <pre>red</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
        <p style="font-family:monospace;">
          <span id="var">var</span> = <span class="text-warning">{a:1, b:2, c:3}</span><br>
          puts <span id="var">var</span>
        </p>
        <pre>{:a=>1, :b=>2, :c=>3}</pre>
        </div>
        <div class="col-sm-6">
        <p style="font-family:monospace;">
          <span id="var">var</span> = <span class="text-warning">{a:1, b:2, c:3}</span><br>
          puts <span id="var">var[<span style="color:violet;">:b</span>]</span>
        </p>
        <pre>2</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p style="font-family:monospace;">
          <span id="var">var</span> = <span class="text-warning">{a:1, b:2, c:3}</span><br>
          <span id="var">var[</span><span style="color:violet;">:d</span><span id="var">]</span> = <span class="text-warning">5</span><br>
          puts <span id="var">var</span>
          </p>
          <pre>{:a=>1, :b=>2, :c=>3, :d=>5}</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-family:monospace;">
          <span id="var">var</span> = <span class="text-warning">{a:1, b:2, c:3}</span><br>
          <span id="var">var[</span><span style="color:violet;">:king</span><span id="var">]</span> = <span class="text-warning">"You"</span><br>
          puts <span id="var">var</span>
          </p>
          <pre>{:a=>1, :b=>2, :c=>3, :king=>"You"}</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span style="font-family: monospace;" id="var">var</span> = <span class="text-warning">{a:1, b:2, c:3, king:"You"}</span>
          <span style="font-family:monospace;">
            <span id="var">var</span>.<span id="method">delete</span>(<span style="color:violet;">:c</span>)<br>
            puts <span id="var">var</span>
          </span>
          </p>
          <pre>{:a=>1, :b=>2, :king=>"You"}</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <p style="font-family:monospace;">
          <span id="var">hash_var</span> = <span class="text-warning">{a:1, b:2, c:3, d:4, e:5, f:17}</span><br>
          <span id="var">hash_var</span>.<span id="method">each</span> { <span style="color:violet;">|key_var</span>, <span style="color:violet;">val_var</span><span style="color:violet">|</span> puts <span id="var">val_var</span> }
          </p>
          <pre>1
2
3
4
5
17
</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <p style="font-family:monospace;">
            <span id="var">hash_var</span> = <span class="text-warning">{a:1, b:2, c:3, d:4, e:5, f:17}</span><br>
            <span id="var">hash_var</span>.<span id="method">each</span> { <span style="color:violet;">|key_var</span>, <span style="color:violet;">val_var|</span> <span id="var">hash_var</span>.<span id="method">delete</span>(<span style="color:violet;">key_var</span>) <span style="color:violet;">if</span> <span id="var">val_var</span> > <span class="text-warning">3</span> }<br>
            puts <span id="var">hash_var</span>
          </p>
          <pre>{:a=>1, :b=>2, :c=>3}</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <h2 style="font-weight:bold; color:orange;">Classes</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <p>
          <span id="class">class</span> <span id="cname">NameOfClass</span><br>
          <br>
          <span id="end">end</span><br>
          <br>
          <span id="var">var</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span><br>
          puts <span id="var">var</span><br>
          </p>
          <pre>#&lt;NameOfClass:0x0000558280324940&gt;</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span id="class">class</span> <span id="cname">NameOfClass</span><br>
          <br>
          <span id="end">end</span><br>
          <br>
          puts <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">ancestors</span>
          </p>
          <pre>NameOfClass
Object
Kernel
BasicObject</pre>
        </div>
        <div class="col-sm-4">
          <p>
            <span id="class">class</span> <span id="cname">NameOfClass</span><br>
            &nbsp;&nbsp;  <span id="def">def</span> <span id="initialize">initialize</span>(<span id="var">var1</span>)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;    <span style="color:yellow;">@var</span> = <span id="var">var1</span><br>
            &nbsp;&nbsp;<span id="end">end</span><br>
            <span id="end">end</span><br>
<br>
            <span id="var">var_a</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>("<span class="text-warning">Jungle</span>")<br>
            <span id="var">var_b</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>("<span class="text-warning">Hell</span>")<br>
            <span id="var">var_c</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>("<span class="text-warning">Space</span>")<br>
            <br>
            puts <span id="var">var_a</span><br>
            puts <span id="var">var_b</span><br>
            puts <span id="var">var_c</span>
          </p>
          <pre>#&lt;NameOfClass:0x000055da1cad6190&gt;
#&lt;NameOfClass:0x000055da1cad5fd8&gt;
#&lt;NameOfClass:0x000055da1cad5f60&gt;
</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p>
            <span id="class">class</span> <span id="cname">NameOfClass</span><br>
            &nbsp;&nbsp;<span id="def">def</span> <span id="initialize">initialize</span>(<span id="var">var1</span>)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@var</span> = <span id="var">var1</span><br>
            &nbsp;&nbsp;<span id="end">end</span><br>
<br>
            &nbsp;&nbsp;<span id="def">def</span> <span id="method">show_val</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@var</span><br>
            &nbsp;&nbsp;<span id="end">end</span><br>
            <span id="end">end</span><br>
<br>
            <span id="var">var_a</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>("<span class="text-warning">Jungle</span>")<br>
            <span id="var">var_b</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>("<span class="text-warning">Hell</span>")<br>
            <span id="var">var_c</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>("<span class="text-warning">Space</span>")<br>
            <br>
            puts <span id="var">var_a</span>.<span id="method">show_val</span><br>
            puts <span id="var">var_b</span>.<span id="method">show_val</span><br>
            puts <span id="var">var_c</span>.<span id="method">show_val</span>
          </p>
          <pre>Jungle
Hell
Space</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span id="class">class</span> <span id="cname">NameOfClass</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="initialize">initialize</span>(<span id="var">var1</span>)<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@var</span> = <span id="var">var1</span><br>
          &nbsp;&nbsp;<span id="end">end</span><br>
<br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">show_val</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@var</span><br>
          &nbsp;&nbsp;<span id="end">end</span><br>
<br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">val_set</span>(<span id="var">arg_var</span>)<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: yellow;">@var</span> = <span id="var">arg_var</span><br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="var">yahoo</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>(<span class="text-warning">nil</span>)<br>
<br>
          <span id="var">yahoo</span>.<span id="method">val_set</span>("<span class="text-warning">jungle</span>")<br>
          puts <span id="var">yahoo</span>.<span id="method">show_val</span><br>
<br>
          <span id="var">yahoo</span>.<span id="method">val_set</span>("<span class="text-warning">London</span>")<br>
          puts <span id="var">yahoo</span>.<span id="method">show_val</span><br>
          </p>
          <pre>jungle
London</pre>
        </div>
        <div class="col-sm-4">
          <p>
          <span id="class">class</span> <span id="cname">NameOfClass</span><br>
          &nbsp;&nbsp;<span id="attr">attr_accessor</span> <span class="text-warning">:var1</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="initialize">initialize</span>(<span id="var">var1</span>)<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@var</span> = <span id="var">var1</span><br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="var">fn</span>=<span class="text-warning">"Coca"</span><br>
          <span id="var">sn</span>=<span class="text-warning">"Cola"</span><br>
<br>
          <span id="var">bingo</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>(<span class="text-warning">nil</span>)<br>
<br>
          <span id="var">bingo</span>.<span id="var">var1</span> = <span id="var">fn</span><br>
          print <span id="var">bingo</span>.<span id="var">var1</span><br>
<br>
          <span id="var">bingo</span>.<span id="var">var1</span> = <span id="var">sn</span><br>
          puts <span id="var">bingo</span>.<span id="var">var1</span>
          </p>
          <pre>CocaCola</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <div style="float:right;">
            <pre>Taylor Swift is Hottest than Selena Gomez & Inna

Friend: Cardi B
Girl-Friend: Dua Lipa
Wife: Katy Perry
Whoa ! Lucky kid.</pre>
          </div>
          <p style="font-size:16px; font-family:monospace;">
          <span id="class">class</span> <span id="cname">NameOfClass</span><br>
          &nbsp;&nbsp;<span id="attr">attr_accessor</span> <span class="text-warning">:friend</span>, <span class="text-warning">:girlfriend</span>, <span class="text-warning">:wife</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="initialize">initialize</span>(<span id="var">friend</span>, <span id="var">girlfriend</span>, <span id="var">wife</span>)<br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@cute</span> = <span id="var">friend</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@classy</span> = <span id="var">girlfriend</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@sexy</span> = <span id="var">wife</span><br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="var">a</span> = <span class="text-warning">"Selena Gomez"</span><br>
          <span id="var">b</span> = <span class="text-warning">"Taylor Swift"</span><br>
          <span id="var">c</span> = <span class="text-warning">"Inna"</span><br>
<br>
          <span id="var">life</span> = <span id="cname">NameOfClass</span>.<span style="color:floralwhite;">new</span>(<span class="text-warning">nil</span>,<span class="text-warning">nil</span>,<span class="text-warning">nil</span>)<br>
<br>
          <span id="var">life</span>.<span id="var">friend</span> = <span id="var">a</span><br>
          <span id="var">life</span>.<span id="var">girlfriend</span> = <span id="var">b</span><br>
          <span id="var">life</span>.<span id="var">wife</span> = <span id="var">c</span><br>
          puts "<span id="var">#{life</span>.<span id="var">girlfriend}</span> <span class="text-warning">is Hottest than</span> <span id="var">#{life</span>.<span id="var">friend}</span> <span class="text-warning">&</span> <span id="var">#{life</span>.<span id="var">wife}</span>"<br>
<br>
          <span id="var">life</span>.<span id="var">friend</span> = <span class="text-warning">'Cardi B</span>'<br>
          <span id="var">life</span>.<span id="var">girlfriend</span> = <span class="text-warning">'Dua Lipa'</span><br>
          <span id="var">life</span>.<span id="var">wife</span> = <span class="text-warning">'Katy Perry'</span><br>
          print "<span class="text-warning">\nFriend:</span> <span id="var">#{life</span>.<span id="var">friend}</span><span class="text-warning">\n</span>"<br>
          print "<span class="text-warning">Girl-Friend:</span> <span id="var">#{life</span>.<span id="var">girlfriend}</span><span class="text-warning">\n</span>"<br>
          print "<span class="text-warning">Wife:</span> <span id="var">#{life</span>.<span id="var">wife}</span><span class="text-warning">\n</span>"<br>
          puts "<span class="text-warning">Whoa ! Lucky kid.</span>"
        </p>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p style="font-size:16px; font-family:monospace;">
          <span id="class">class</span> <span id="cname">Water</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">heat</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">Heat Blast</span>"<br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Rain</span> < <span id="cname">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Cool</span> < <span id="cname">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Breeze</span> < <span id="cname">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="var">ice</span> = <span id="cname">Rain</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">snow</span> = <span id="cname">Cool</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">fog</span> = <span id="cname">Breeze</span>.<span style="color:floralwhite;">new</span><br>
<br>
          <span id="var">ice</span>.<span id="method">heat</span><br>
          <span id="var">snow</span>.<span id="method">heat</span><br>
          <span id="var">fog</span>.<span id="method">heat</span>
          </p>
          <pre>Heat Blast
Heat Blast
Heat Blast</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-size:16px; font-family:monospace;">
          <span id="class">class</span> <span id="cname">Water</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">heat</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">Heat Blast</span>"<br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Rain</span> < <span id="cname">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Cool</span> < <span id="cname" style="background:silver;">Rain</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Breeze</span> < <span id="cname" style="background:silver;">Cool</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="var">ice</span> = <span id="cname">Rain</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">snow</span> = <span id="cname">Cool</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">fog</span> = <span id="cname">Breeze</span>.<span style="color:floralwhite;">new</span><br>
<br>
          <span id="var">ice</span>.<span id="method">heat</span><br>
          <span id="var">snow</span>.<span id="method">heat</span><br>
          <span id="var">fog</span>.<span id="method">heat</span>
          </p>
          <pre>Heat Blast
Heat Blast
Heat Blast</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-size:16px; font-family:monospace;">
          <span id="class">class</span> <span id="cname">Water</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">heat</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">Heat Blast</span>"<br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Rain</span> < <span id="cname">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Cool</span> < <span id="cname" style="background:silver;">Rain</span></p>
          <div id="imp">&nbsp;&nbsp;<span id="def">def</span> <span id="method">heat</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">Big Chill</span>"<br>
          &nbsp;&nbsp;<span id="end">end</span></div><p style="font-size:16px; font-family:monospace;">
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Breeze</span> < <span id="cname" style="background:silver;">Cool</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="var">ice</span> = <span id="cname">Rain</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">snow</span> = <span id="cname">Cool</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">fog</span> = <span id="cname">Breeze</span>.<span style="color:floralwhite;">new</span><br>
<br>
          <span id="var">ice</span>.<span id="method">heat</span><br>
          <span id="var">snow</span>.<span id="method">heat</span><br>
          <span id="var">fog</span>.<span id="method">heat</span>
          </p>
          <pre>Heat Blast
Big Chill
Big Chill</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-4">
          <p style="font-size:16px; font-family:monospace;">
          <span id="class">class</span> <span id="cname">Water</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">heat</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">Heat Blast</span>"<br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Rain</span> < <span id="cname">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Cool</span> < <span id="cname" style="background:yellow;">Water</span><br>
          &nbsp;&nbsp;<span id="def">def</span> <span id="method">heat</span><br>
          &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">Big Chill</span>"<br>
          &nbsp;&nbsp;<span id="end">end</span><br>
          <span id="end">end</span><br>
<br>
          <span id="class">class</span> <span id="cname">Breeze</span> < <span id="cname" style="background:yellow;">Water</span><br>
<br>
          <span id="end">end</span><br>
<br>
          <span id="var">ice</span> = <span id="cname">Rain</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">snow</span> = <span id="cname">Cool</span>.<span style="color:floralwhite;">new</span><br>
          <span id="var">fog</span> = <span id="cname">Breeze</span>.<span style="color:floralwhite;">new</span><br>
<br>
          <span id="var">ice</span>.<span id="method">heat</span><br>
          <span id="var">snow</span>.<span id="method">heat</span><br>
          <span id="var">fog</span>.<span id="method">heat</span>
          </p>
          <pre>Heat Blast
Big Chill
Heat Blast</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-family:monospace; font-size:16px;">
            <span id="class">class</span> <span id="cname">Lamborghini</span><br>
                &nbsp;&nbsp;<span id="def">def</span> <span style="color:floralwhite;">self</span>.<span id="method">ferrari</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">a</span> = <span id="method">rand</span>(<span class="text-warning">10</span>)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="if">if</span> <span id="var">a</span> < <span class="text-warning">5</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="var">car</span> = "<span class="text-warning">Ferrari</span>"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="else">else</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="var">car</span> = "<span class="text-warning">Lamborghini</span>"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="end">end</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">You Rock With</span> <span id="var">#{car}</span>"<br>
                &nbsp;&nbsp;<span id="end">end</span><br>
            <span id="end">end</span>
          <br><br>
          <span id="cname">Lamborghini</span>.<span id="method">ferrari</span>
          <p>
            <pre>You Rock With Lamborghini</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-family:monospace; font-size:16px;">
            <span id="class">class</span> <span id="cname">Car_Castle</span><br><br>
                &nbsp;&nbsp;<span id="def">def</span> <span style="color:floralwhite;">self</span>.<span id="method">respect</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">a</span> = <span id="method">rand</span>(<span class="text-warning">10</span>)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span id="if">if</span> <span id="var">a</span> < <span class="text-warning">5</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="var">car</span> = "<span class="text-warning">Ferrari</span>"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span id="else">else</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="var">car</span> = "<span class="text-warning">Lamborghini</span>"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span id="end">end</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">You Rock With</span> <span id="var">#{car}</span>"<br>
                &nbsp;&nbsp;<span id="end">end</span><br><br>
                &nbsp;&nbsp;<span id="def">def</span> <span style="color:floralwhite;">self</span>.<span id="method">security</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">a</span> = <span id="method">rand</span>(<span class="text-warning">10</span>)<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span id="if">if</span> <span id="var">a</span> > <span class="text-warning">5</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="var">car</span> = "<span class="text-warning">Tank</span>"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span id="else">else</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="var">car</span> = "<span class="text-warning">Truck</span>"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span id="end">end</span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;puts "<span class="text-warning">You Rock With</span> <span id="var">#{car}</span>"<br>
                &nbsp;&nbsp;<span id="end">end</span><br><br>
            <span id="end">end</span>
          <br><br>
          <span id="cname">Car_Castle</span>.<span id="method">security</span><br>
          <span id="cname">Car_Castle</span>.<span id="method">respect</span>
          <p>
            <pre>You Rock With Truck
You Rock With Lamborghini</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <h2 style="color:orange; font-weight:bold;">Module</h2>
          <h3 style="color:silver;"># Module Name Ends with 'able', its a trend just !</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <p style="font-family:monospace; font-size:16px;">
            <span style="color:silver;"># Module Name Ends with 'able'</span><br><br>
            <span id="module">module</span> <span id="mname">AnyName</span><br>
  	        &nbsp;&nbsp;<span id="def">def</span> <span id="method">wording</span><br>
  	        &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">a</span> = "<span class="text-warning">I Love You !</span>"<br>
  	        &nbsp;&nbsp;<span id="end">end</span><br>
            <span id="end">end</span><br>
<br>
            <span id="class">class</span> <span id="cname">Wife</span><br>
  	        &nbsp;&nbsp;<span id="inc">include</span> <span id="mname">AnyName</span><br>
            <span id="end">end</span><br>
<br>
            <span id="var">girlfriend</span> = <span id="cname">Wife</span>.<span id="inc">new</span><br>
<br>
            puts <span id="var">girlfriend</span>.<span id="method">wording</span><br>
        </p>
        <pre>I Love You !</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-family:monospace; font-size:16px;">
            <span style="color:silver;"># Module Name Ends with 'able'</span><br><br>
            <span id="module">module</span> <span id="mname">Shakeable</span><br>
  	        &nbsp;&nbsp;<span id="def">def</span> <span id="method">wording</span><br>
  	        &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">a</span> = "<span class="text-warning">I Love You !</span>"<br>
  	        &nbsp;&nbsp;<span id="end">end</span><br>
            <span id="end">end</span><br>
<br>
            <span id="class">class</span> <span id="cname">Wife</span><br>
  	        &nbsp;&nbsp;<span id="inc">include</span> <span id="mname">Shakeable</span><br>
            <span id="end">end</span><br>
<br>
            <span id="var">girlfriend</span> = <span id="cname">Wife</span>.<span id="inc">new</span><br>
<br>
            puts <span id="var">girlfriend</span>.<span id="method">wording</span><br>
        </p>
        <pre>I Love You !</pre>
        </div>
        <div class="col-sm-4">
          <p style="font-family:monospace; font-size:16px;">
            <span style="color:silver;"># Module Name Ends with 'able'</span><br><br>
            <span id="module">module</span> <span id="mname">Foldable</span><br>
  	        &nbsp;&nbsp;<span id="def">def</span> <span id="method">wording</span><br>
  	        &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">a</span> = "<span class="text-warning">I Love You !</span>"<br>
  	        &nbsp;&nbsp;<span id="end">end</span><br>
            <span id="end">end</span><br>
<br>
            <span id="class">class</span> <span id="cname">Wife</span><br>
  	        &nbsp;&nbsp;<span id="inc">include</span> <span id="mname">Foldable</span><br>
            <span id="end">end</span><br>
<br>
            <span id="var">girlfriend</span> = <span id="cname">Wife</span>.<span id="inc">new</span><br>
<br>
            puts <span id="var">girlfriend</span>.<span id="method">wording</span><br>
        </p>
        <pre>I Love You !</pre>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-12">
          <h2 style="color:orange; font-weight:bold;">Project 1</h2>
          <p style="color:silver; font-family:monospace; font-size:15px;">
            Write a Program Which:<br>
<br>
&nbsp;&nbsp;- Gets user information<br>
&nbsp;&nbsp;- Reads permissions from a json file.<br>
&nbsp;&nbsp;- Creates a new user with assigned permissions.<br>
&nbsp;&nbsp;- Saves the user in a new '<span class="text-success">users.rb</span>' file, if file doesn't exist, it creates one.
          </p>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div style="float:right; border-left:1px solid floralwhite; padding-left:10px;">
            <p style="font-size:16px; font-family:monospace;">
              <span style="color:silver;"># runner.rb</span><br>
              <br>
              <span class="text-warning">require 'pp'</span><br>
              <span class="text-warning">require_relative 'user'</span><br>
              <br>
              puts "<span class="text-warning">Enter Email</span>"<br>
              <span id="var">email</span> = <span id="method">gets.chomp</span><br>
              <br>
              puts "<span class="text-warning">Enter Name</span>"<br>
              <span id="var">name</span> = <span id="method">gets.chomp</span><br>
              <br>
              <span id="var">user</span> = <span id="cname">User</span>.<span id="inc">new</span>(<span id="var">email</span>, <span id="var">name</span>)<br>
            <br>
              <span class="text-success">pp</span> <span id="var">user</span><br>
              <br>
              <span id="var">user</span>.<span id="method">save</span><br>
            </p>
            <hr>
            <p style="font-size:16px; font-family:monospace;">
              <span style="color:silver;"># user_permissions_template.json</span><br>
              <br>
              { <span class="text-warning">"accounts": "read",<br>
              &nbsp;&nbsp;"policies": "write",<br>
              &nbsp;&nbsp;"users": "write"</span> }
            </p>
          </div>
          <p style="font-size:16px; font-family:monospace;">
            <span style="color:silver;"># user.rb</span><br>
            <br>
              <span class="text-warning">require 'json'</span><br>
          <br>
              <span id="class">class</span> <span id="cname">User</span><br>
              &nbsp;&nbsp;<span id="inc">attr_accessor</span> <span class="text-warning">:email</span>, <span class="text-warning">:name</span>, <span class="text-warning">:permissions</span><br>
          <br>
              &nbsp;&nbsp;<span id="def">def</span> <span id="initialize">initialize</span>(<span id="var">*args</span>)<br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@email</span> = <span id="var">args[0]</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@name</span> = <span id="var">args[1]</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:yellow;">@permissions</span> = <span id="cname">User</span>.<span id="method">permissions_from_template</span><br>
              &nbsp;&nbsp;<span id="end">end</span><br>
          <br>
              &nbsp;&nbsp;<span id="def">def</span> <span id="inc">self</span>.<span id="method">permissions_from_template</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">file</span> = <span id="inc">File.read</span> <span class="text-warning">'user_permissions_template.json'</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span id="inc">JSON.load</span>(<span id="var">file</span>, <span class="text-warning">nil</span>, <span style="color:red;">symbolize_names: true, create_additions: false</span>)<br>
              &nbsp;&nbsp;<span id="var">end</span><br>
          <br>
              &nbsp;&nbsp;<span id="def">def</span> <span id="method">save</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">love</span> = {<span class="text-warning">email:</span> <span style="color:yellow;">@email</span>, <span class="text-warning">name:</span> <span style="color:yellow;">@name</span>, <span class="text-warning">permissions:</span> <span style="color:yellow">@permissions</span>}.<span id="method">to_json</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span id="inc">open</span>('<span style="color:silver;">users.json</span>', '<span style="color:violet;">a</span>') <span style="color:violet;">do |</span><span id="var">life</span><span style="color:violet;">|</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span id="var">life</span>.puts <span id="var">love</span><br>
              &nbsp;&nbsp;&nbsp;&nbsp;<span id="end">end</span><br>
              &nbsp;&nbsp;<span id="end">end</span>
          <br>
              <span id="end">end</span>
          </p>
          <pre id="terminal"><span style="color:red; font-weight:bold;">root@kali</span><span style="color:#1fff00;">:</span><span style="color:dodgerblue;">~/Ruby_Project_1</span><span id="green;"># ls
runner.rb  user_permissions_template.json  user.rb</span>
<span style="color:red; font-weight:bold;">root@kali</span><span style="color:#1fff00;">:</span><span style="color:dodgerblue;">~/Ruby_Project_1</span><span id="green;"># ruby runner.rb
Enter Email
girl@myhome.com
Enter Name
lovely
#&lt;User:0x00005604562fa020
 @email="girl@myhome.com",
 @name="lovely",
 @permissions={:accounts=>"read", :policies=>"write", :users=>"write"}&gt;</span>
<span style="color:red; font-weight:bold;">root@kali</span><span style="color:#1fff00;">:</span><span style="color:dodgerblue;">~/Ruby_Project_1</span><span id="green;"># ls
runner.rb  user_permissions_template.json  user.rb  users.json</span>
<span style="color:red; font-weight:bold;">root@kali</span><span style="color:#1fff00;">:</span><span style="color:dodgerblue;">~/Ruby_Project_1</span><span id="green;"># cat users.json
{"email":"girl@myhome.com","name":"lovely","permissions":{"accounts":"read","policies":"write","users":"write"}}</span>
<span style="color:red; font-weight:bold;">root@kali</span><span style="color:#1fff00;">:</span><span style="color:dodgerblue;">~/Ruby_Project_1</span><span id="green;">#</span>
</pre>
          <hr>

        </div>
      </div>

    </div><!-- Container DIV END -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
