<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Motion Security</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  
	  .row > img {
		padding-top: 2em;
	  }
    </style>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="index.html">Motion Security</a>
        </div>
      </div>
    </div>

    <div class="container">
		<div class="row">
			<h2>System status</h2>
			<button id="toggle" class="btn btn-large">...</button>
		</div>
		<hr />
		<div class="row">
			<h2>Cam 1</h2>
			<div class="btn-group">
				<button id="btn-snapshot" class="btn btn-large btn-primary">Snapshot</button>
				<button id="btn-live" class="btn btn-large">Live</button>
			</div>
			<img id="cam" src="frame.php?<?=time();?>" />
		</div>
		<hr />
    <div class="row">
      <table class="table table-striped table-bordered table-hover span4">
        <tr>
          <th>Events</th>
        </tr>
        <tr>
          <td>2012-05-17</td>
        </tr>
      </table>
    </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--script src="js/bootstrap.min.js"></script-->
	<script src="js/app.js"></script>

  </body>
</html>
