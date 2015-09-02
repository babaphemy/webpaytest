

<?php session_start(); 
//if(isset($_POST['name'])){
	//$amt1 =  htmlspecialchars(mysql_real_escape_string($_POST['amount'])) * 100 ;
	 $amt1 = $_POST['amount'] * 100;
	 $_SESSION['amt4hash'] =  $amt1;
	 $tref =  $_SESSION['genref']  ;
	$_SESSION['pdtid'] = $pdid = 6205;
$_SESSION['item'] = $pitem =  101;
$rurl = "http://localhost/webpaytest/tpay.php";
$mac = "D3D1D05AFE42AD50818167EAC73C109168A0F108F32645C8B59E897FA930DA44F9230910DAC9E20641823799A107A02068F7BC0F4CC41D2952E249552255710F";
$tohash = $tref.$pdid.$pitem.$amt1.$rurl.$mac;
$dhash =  hash('sha512',$tohash);
$_SESSION['hashout'] = $dhash;
	
//}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>
</head>

<body>
<div class="container">
	<!-- row 1: navigation -->
    <div class="row">
    	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="glyphicon glyphicon-arrow-down"></span>
                  MENU
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown">About <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	<li><a href="#">Dr. Winthrop</a></li>
                            <li><a href="#">Dr. Chase</a></li>
                            <li><a href="#">Dr. Sanders</a></li>
                        </ul>                    
                    </li>
                    <li class="active"><a href="#">Services</a></li>
                    <li><a href="#">Photo Gallery</a></li>
                    <li><a href="#">Contact</a></li>  
                </ul> 
            </div>
         </nav> 
    </div>
   
    <!-- row 2: header -->
    <header class="row">
    	<div class="col-lg-6 col-sm-5">
        	<a href="index.html"><img src="img/logo.png" alt="Wisdom Pets. click for home." class="img-responsive"></a>
        </div>
    	<div class="col-lg-6 col-sm-7">
        	<img src="img/animals.jpg" alt="" class="hidden-xs img-responsive">
        </div>
    </header>
    
    <!-- row 3: article/aside -->
    <div class="row">
    	<article class="col-lg-offset-1 col-sm-offset-1 col-lg-8 col-sm-7 col-lg-push-3 col-sm-push-4">
        
            <ol class="breadcrumb">
              <li><a href="#">Home</a> <span class="glyphicon glyphicon-circle-arrow-right"></span></li>
              <li><a href="#">Services</a> <span class="glyphicon glyphicon-circle-arrow-right"></span></li>
              <li class="active">Vaccinations</li>
            </ol>
        
           
            <p><span class="glyphicon-credit-card"></span>
            <p>
            <form name="contactform" method="post" action="https://stageserv.interswitchng.com/test_paydirect/pay">
            <fieldset>
            <legend>Confirm your payment </legend>
            <input name="product_id" type="hidden" value="<?php echo $pdid ;?>" >
  			<input name="pay_item_id" type="hidden" value="<?php echo $pitem ;?>" >
  			<input name="currency" type="hidden" value="566" >
  			<input name="amount" type="hidden" value="<?php echo $amt1 ; ?>" >
 			 <input name="txn_ref" type="hidden" value="<?php echo $tref ;?>" >
 			 <input name="site_redirect_url" type="hidden" value="<?php echo $rurl ; ?>" >
 			 <input name="hash" type="text" value="<?php echo $dhash;   ?>" >
  			 <input name="cust_name" type="hidden" value="Test" >
 			  <input name="cust_id" type="hidden" value="AD99" >
            
			<label>Reference : <?php echo $tref ;?></label>
           <input type="hidden" value="<?php echo $tref ;?>" ><br />
           <label>Amount</label>
           <input name="ama" type="text" value="<?php echo $_SESSION['amt4hash']/100;?>" readonly="readonly" ><br />
           <button type="submit">Pay</button>
            
            
               

</form>
            </p>
            Wisdom Pet Medicine is a state-of-the-art veterinary hospital,   featuring the latest in diagnostic and surgical equipment, and a staff   of seasoned veterinary specialists in the areas of general veterinary   medicine and surgery, oncology, dermatology, orthopedics, radiology,   ultrasound, and much more. We also have a 24-hour emergency clinic in   the event your pet needs urgent medical care after regular business   hours.</p>
            <p>At Wisdom, we strive to be your pet&rsquo;s medical experts from youth   through the senior years. We build preventative health care plans for   each and every one of our patients, based on breed, age, and sex, so   that your pet receives the most appropriate care at crucial milestones   in his or her life. Our overarching goal is to give your pet the best   shot possible at a long and healthy life, by practicing simple   preventative care. We even provide an online Pet Portal where you can   view all your pet&rsquo;s diagnostic results, treatment plans, vaccination and   diagnostic schedules,  prescriptions, and any other health records.</p>
                        <!-- nested row 3a: callouts -->
         <div class="clearfix visible-xs visible-lg"></div>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                	<div class="thumbnail">
                        <div class="caption">
                            <h4><span class="glyphicon glyphicon-pushpin"></span> Vaccinations</h4>
                            <p>Dogs and cats are susceptible to a variety of illnesses that can be completely prevented by following the appropriate vaccination schedule.</p>
                            <p><a href="#" class="btn btn-info" data-toggle="tooltip" title="Read more about vaccines">Read more >></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                     <div class="thumbnail">
                        <div class="caption">
                            <h4><span class="glyphicon glyphicon-ok"></span> Checkups</h4>
                            <p>Regular checkups are a key factor in pet wellness, and can often unearth problems that could lead to health issues down the road.  </p>
                            <p><a href="#" class="btn btn-info" data-toggle="tooltip" title="Read more about checkups">Read more >></a></p>
                    	</div>
                    </div>
                </div>
                <div class="clearfix visible-md visible-xs"></div>
                <div class="col-lg-3 col-xs-6">
                	<div class="thumbnail">
                        <div class="caption">
                            <h4><span class="glyphicon glyphicon-heart"></span> Senior Pets</h4>
                            <p>Senior pets generally require more medical attention than their younger counterparts, just as senior humans do. So when is a pet considered “senior”? </p>
                            <p><a href="#" class="btn btn-info" data-toggle="tooltip" title="Read more about senior pets">Read more >></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                	<div class="thumbnail">
                        <div class="caption">
                    		<h4><span class="glyphicon glyphicon-cutlery"></span> Diet Plans</h4>
                    		<p>Wisdom veterinarians have all had extensive training in pet nutrition and are your best resources when considering changing your pet’s diet. </p>
                     		<p><a href="#" class="btn btn-info" data-toggle="tooltip" title="Read more about diet plans">Read more >></a></p>
                    	</div>
                    </div>
                 </div>
            </div><!-- end nested row 3a -->
        </article>
        <aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
        	<h3>About Our Services</h3>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Vaccinations</a></li>
                <li><a href="#">Checkups</a></li>
                <li><a href="#">Senior Pets</a></li>
                <li><a href="#">Diet Plans</a></li>
            </ul> 
         </aside>
    

        </div><!-- end row 3 -->
    
    <!-- row 4 -->
    <footer class="row">
         <p><small>This not a real veterinary medicine site, and is not meant to diagnose or offer treatment. Please see your veterinarian for all matters related to your pet's health.</small></p>
         <p><small>Wisdom Pet Medicine is a training brand owned by lynda.com.</small></p>
    </footer>

</div> <!-- end container -->

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		$('a.btn-info').tooltip()
	</script>
</body>
</html>
