<?php 

if(isset($_GET['from'])){

$from = $_GET['from'];
$to = 'A+R+Tower,+Bir+Uttam+Aminul+Haque+Sarak,+Dhaka+1212'; 

$url = "https://maps.googleapis.com/maps/api/directions/json?origin=$from&destination=$to&departure_time=now&traffic_model=best_guess&key=AIzaSyAcNgQm3Pgi3TXeWB7Fh9YlcFC3ljzBTTs";
$response = file_get_contents($url);
$response = json_decode($response, true);
 
//error_reporting(0); 
//print_r($response);
 
$distance = $response['routes'][0]['legs'][0]['distance']['text'];
$DistanceDuration =$response['routes'][0]['legs'][0]['duration_in_traffic']['text']; 
 
$distance = $distance; 
//echo "Distance: "; 
//echo $distance;

//echo "<br/> Time Required: ";
//cho $DistanceDuration; 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SEU CSE - Arrival Time Calculator</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
    
        </div>

        
        <h1>You are <?php echo $distance ?> Away!</h1>
        <h1>--- <?php echo $DistanceDuration ?> ---</h1>
        <h2>Needed to reach SEU CSE Campus<br/> <span class="rotating">using public transport, approximate time, (-/+ 10 mins varies)</span></h2>
       

 		
 			<a href="./" class="btn-get-started">Back</a>
        




        </div>


<div class="credit" style="position:absolute; bottom:0;"> <center>Realtime Data fetched from Google Maps API, Traffic Mode Used: Best Guess, Created By:<a href="">Anik</a></center>  
     </div> 


   </div>


    </div>

  </section>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
<?php 
} 

else{
	echo 'Error! <a href="../">Get Back</a>'; 
}



?>
