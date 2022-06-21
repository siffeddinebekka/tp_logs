
<!DOCTYPE html>
<head>
    
	<title>Neige&Soleil</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	<link href="js/zoombox/zoombox.css" rel="stylesheet" >
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    
</head>
<body>
    
	<div class="templatemo-logo visible-xs-block">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg logo-left-container">
			<h1 class="logo-left">SOG</h1>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg logo-right-container">
			<h1 class="logo-right">Sog
		</div>
	</div>
	<div class="templatemo-container">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 black-bg left-container">
          <!--  <?php echo '<img src="C:\Users\benjamin\Downloads\esteban.jpg" style="width:100px;"/>'; ?> -->

			<h1 class="logo-left hidden-xs margin-bottom-60">Neige</h1>
			<div class="tm-left-inner-container">
				<ul class="nav nav-stacked templatemo-nav">

                     <?php
      if(isset($_SESSION['connecte']) && $_SESSION['connecte'] == true){
        ?>
      <p>connecte</p>
      <li><a href="index.php?p=accueil.php" ><i class="fa fa-home fa-medium"></i>Accueil</a></li>
      <li><a href="index.php?p=logout.php" ><i class="fa fa-power-off fa-medium"></i>Déconnexion</a></li>
      <?php
          
      }else{
          ?>
     
     <li><a href="index.php?p=accueil.php" ><i class="fa fa-home fa-medium"></i>Accueil</a></li>
     <li><a href="index.php?p=login.php" ><i class="fa fa-user fa-medium"></i>Connexion</a></li>
      <li><a href="index.php?p=representant.php"><i class="fa fa-user fa-medium"></i>Représentants</a></li>
      <?php
      }
      
      
      ?>
				    
				  <li><a href="index.php?p=appartement.php"><i class="fa fa-building fa-medium"></i>Appartements</a></li>
				  <li><a href="index.php?p=about.php"><i class="fa fa-info fa-medium"></i>A propos</a></li>
				  <li><a href="index.php?p=contact.php"><i class="fa fa-envelope-o fa-medium"></i>Contact</a></li>
				  <li><a href="index.php?p=profile.php"><i class="fa fa-envelope-o fa-medium"></i>profile</a></li>
				</ul>
			</div>
			</div> <!-- left section -->
			<?php echo $content; ?>
			<footer>
					
					
				</footer>
			</div>
		</div> <!-- right section -->
		</div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/zoombox/zoombox.js"></script>
		<script type="text/javascript">

  var map = '';
  var center;

  function initialize() {
      var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(16.8496189,96.1288854)
      };

      map = new google.maps.Map(document.getElementById('map-canvas'),  mapOptions);

      google.maps.event.addDomListener(map, 'idle', function() {
      calculateCenter();
    });

    google.maps.event.addDomListener(window, 'resize', function() {
      map.setCenter(center);
    });
  }

  function calculateCenter() {
    center = map.getCenter();
  }

  function loadGoogleMap(){
      // load google map
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
      'callback=initialize';
      document.body.appendChild(script);
  }

  $(document).ready( function() {
    loadGoogleMap();
  });

</script>
	<script>
		jQuery(function($){
				$("a.zoombox").zoombox();
		});
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



</body>
</html>
</body>
</html>
