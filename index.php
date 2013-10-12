<?php require('settings.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Copyright jQuery4u 2011 - All code written by Sam Deering -->

    <meta charset="utf-8">
    <title><?php echo $meta_title; ?></title>
    <!-- <meta name="description" content=""> -->
    <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="jquery4u">

    <!-- styles -->
    <link href="/function-demos/css/bootstrap.css" rel="stylesheet">
    <link href="/function-demos/css/style.css" rel="stylesheet">
    <link href="/function-demos/css/shCoreDefault.css" rel="stylesheet">

    <!-- scripts -->
    <script src="/function-demos/js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="/function-demos/js/syntaxhighlighter/shCore.js"></script>
    <script type="text/javascript" src="/function-demos/js/syntaxhighlighter/shBrushJScript.js"></script>

    <script type="text/javascript">
    jQuery(document).ready( function ()
    {
        SyntaxHighlighter.all(); /* pretty colours */
        $.getScript('http://www.jquery4u.com/scripts/jq4usocialshare.js'); /* social icons */
    });
    </script>

    <!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <!-- Top Bar  -->
    <div class="topbar">
      <div class="topbar-inner">
        <div class="container-fluid">
          <a class="brand" href="http://www.jquery4u.com/">JQUERY FUNCTION DEMOS</a>
          <ul class="nav">
            <li><a href="http://www.jquery4u.com/">Blog</a></li>
            <li><a href="http://www.jquery4u.com/demos/">Showcase</a></li>
            <li class="active"><a href="http://www.jquery4u.com/">Function Demos</a></li>
            <li><a href="http://www.jquery4u.com/plugins/">Plugins</a></li>
          </ul>
          <!-- Social  -->
          <p class="pull-right social-icons">
			<a target="_blank" href="http://facebook.com/pages/Jquery4u/140918675956744" title="Facebook Fans"><img src="http://www.jquery4u.com/images/facebook.png" alt="Join us on facebook"></a> <a target="_blank" href="http://twitter.com/jquery4u" title="Twitter Followers"><img src="http://www.jquery4u.com/images/twitter.png" alt="Follow us on Twitter"></a> <a target="_blank" href="http://www.jquery4u.com/feed/rss/" title="RSS Subscribers"><img alt="Subscribe to our RSS Feed" src="http://www.jquery4u.com/images/rss.png"></a>
      	</p>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="sidebar">

        <!-- Side Menu  -->
        <div class="well">

          <h5>AJAX</h5>
          <ul>
            <li><a href="/function-demos/ajax/">$.ajax()</a></li>
            <li><a href="/function-demos/getjson/">$.getJSON()</a></li>
            <li><a href="/function-demos/getscript/">$.getScript()</a></li>
            <li><a href="/function-demos/load/">.load()</a></li>
            <li><a href="/function-demos/jsonp/">JSONP</a></li>
          </ul>
          <h5>Animations & Effects</h5>
          <ul>
            <li><a href="/function-demos/animate/">.animate()</a></li>
            <li><a href="/function-demos/setinterval/">setInterval()</a></li>
            <li><a href="/function-demos/settimeout/">setTimeout()</a></li>
            <li><a href="/function-demos/slidetoggle/">.slideToggle()</a></li>
            <li><a href="/function-demos/fadetoggle/">.fadeToggle()</a></li>
            <li><a href="/function-demos/delay/">.delay()</a></li>
          </ul>
          <h5>DOM Manipulation</h5>
          <ul>
            <li><a href="/function-demos/css/">.css()</a></li>
            <li><a href="/function-demos/addclass/">.addClass()</a></li>
            <li><a href="/function-demos/toggleclass/">$.toggleClass()</a></li>
            <li><a href="/function-demos/html/">.html(), .text()</a></li>
            <li><a href="/function-demos/append/">.append()</a></li>
            <li><a href="/function-demos/clone/">.clone()</a></li>
          </ul>
          <h5>Events</h5>
          <ul>
            <li><a href="/function-demos/bind/">.bind()</a></li>
            <li><a href="/function-demos/live/">.live()</a></li>
            <li><a href="/function-demos/delegate/">.delegate()</a></li>
            <li><a href="/function-demos/preventdefault/">.preventDefault()</a></li>
            <li><a href="/function-demos/stoppropagation/">.stopPropagation()</a></li>
            <li><a href="/function-demos/stopimmediatepropagation/" style="font-size: 11px;">.stopImmediatePropagation()</a></li>
          </ul>
          <h5>Traversing & Data</h5>
          <ul>
            <li><a href="/function-demos/each/">$.each(), .each()</a></li>
            <li><a href="/function-demos/data/">$.data()</a></li>
            <li><a href="/function-demos/match/">.match()</a></li>
            <li><a href="/function-demos/find/">.find()</a></li>
            <li><a href="/function-demos/filter/">.filter()</a></li>
            <li><a href="/function-demos/slice/">.slice()</a></li>
            <li><a href="/function-demos/next/">.next(), .prev()</a></li>
            <li><a href="/function-demos/extend/">$.extend()</a></li>
            <li><a href="/function-demos/serializearray/">$.serializeArray()</a></li>
          </ul>
        </div>


      </div>
      <div class="content">

        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
          <h1><?php echo $title; ?></h1>
          <p style="margin-top: 5px;">Let's have a closer look at the jQuery <?php echo $fn; ?> function.</p>
          <div style="float: left; height: 70px; width: 300px;"><a href="#demo" id="view-demo-btn" class="btn primary large">Demo</a> <a href="#code" id="view-code-btn" class="btn primary large">Code</a> <a href="#download" id="view-download-btn" class="btn primary large">Download</a></div>
          <div style="margin-top: 20px;" id="jq4usocialshare"></div>

        </div>

        <div class="row">

          <!-- Description  -->
          <div class="span9"  style="width:90%">
            <h2 id="desc">Description</h2>
            <p><?php require($desc_filename); ?> Lets have a look at an example of the <?php echo $fnprettylower; ?> jQuery function in action. <a class="btn" target="_blank" href="http://www.google.com/search?q=<?php echo $fnprettylower; ?>&q=site:jquery4u.com">Further Reading &raquo;</a></p>
          </div>

          <!-- Demo  -->
          <div class="span9 expose exposedemo" style="width:90%">
            <h2 id="demo">Demo</h2>
            <div id="maindemoarea">
            <?php
              $url = $demo_filename;
              $output = file_get_contents($url);
              echo $output;
            ?>
            </div>
            <br/>
          </div>

          <!-- Download  -->
          <div class="span9 expose exposedownload" style="width:90%">
            <h2 id="download">Download</h2>
            <p>The download package includes all the inline HTML, CSS, JavaScript, jQuery and images required for the <?php echo $fn; ?> function demo so you can try it yourself and change as you please.
              <p><strong>The full code listing for all jQuery functions have been now added to GitHub, you can get them there, we are making them work with the latest versions of jQuery!</strong></p>
              <ul>
                <li><a href="https://github.com/sdeering/50-jquery-function-demos/tree/master/functions"><?php echo $download_text; ?></a></li>
              </ul>
            </p>

          </div>

          <!-- Code  -->
          <div id="code" class="span12  expose exposecode" style="width:90%">
            <h2>Code</h2>
            <pre class="brush: js;"><?php echo htmlentities(file_get_contents($demo_filename)); ?></pre>
          </div>

        </div>

        <!-- Footer  -->
        <footer>
          <p>&copy; JQUERY4U <?php echo date('Y'); ?></p>
        </footer>
      </div>
    </div>

  </body>
</html>