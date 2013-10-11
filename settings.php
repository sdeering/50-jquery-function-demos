<?php
  /* Settings for jQuery Function Demos */

  /* core settings / load from URL - mod rewrite */
  if (isset($_REQUEST['function'])) {
    $fnprettylower = strtolower($_REQUEST['function']);
  }
  else {
    $fnprettylower = 'animate';
  }

  $fnpretty = ucwords($fnprettylower);
  $fn = '.' . $fnprettylower . '()';


  /* function presence validation */
  //check if folder exists else redirect to function 404 page  404page.php
  $checkDir = 'functions/' . $fnprettylower;
  if(!is_dir($checkDir))
  {
    /* Redirect to a different page in the current directory that was requested */
    // $host  = $_SERVER['HTTP_HOST'];
    // $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    // $extra = '404page.php';
    // header("Location: http://$host$uri/$extra");
    header("Location: http://www.jquery4u.com/not%20found");
    exit;
  }

  /* page settings */
  $fdbase = "http://www.jquery4u.com/function-demos/";
  $fd = 'functions/' . $fnprettylower . '/';
  $desc_filename = $fd . $fnprettylower . '-desc.php';
  $demo_filename = $fdbase . $fd . $fnprettylower . '-demo.html';
  $download_link = $fdbase . $fd . $fnprettylower . '-demo.zip';
  $download_text = $fnprettylower . '-demo.zip (' . round(filesize($fd . $fnprettylower . '-demo.zip') / 1024, 0) . 'kb)';

  /* meta */
  $title = 'jQuery ' . $fnpretty . ' Function Example';
  $meta_title = $title . ' | jQuery4u';
  $keywords = 'jquery '.$fnprettylower.'() example' . ',' . 'jquery '.$fnprettylower.'() demo' . ',' . $fn.' demo'

?>
