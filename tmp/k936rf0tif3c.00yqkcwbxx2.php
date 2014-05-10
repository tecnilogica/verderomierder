<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fight</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="../css/grayscale.css" rel="stylesheet">

</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


	<!-- SHOW CARD -->
	<div id="card" class="card-template">
	    <section class="intro">
	        <div class="intro-body">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <h1 class="brand-heading" id="ciudad"></h1>							
							<span id="position"></span>
							<div class="data-city">
		                        <span id="habitantes"></span>
		                         |
		                        <span id="renta"></span>								
							</div>

	                    </div>
	                </div>
	                <div>
	                	<img src="" alt="" id="imagen">
	                </div>
	                <div>
	                	<ul class="list-result verder">
	                		<li><i class="fa fa-rocket"></i><span id="transporte"></span></li>
	                		<li><i class="fa fa-picture-o"></i><span id="forestales"></span></li>
	                		<li><i class="fa fa-leaf"></i><span id="arbolado"></span></li>
	                	</ul>
	                	<ul class="list-result mierder">
	                		<li><span id="no2"></span></li>
	                		<li><span id="co2"></span></li>
	                		<li><span id="pm"></span></li>
	                	</ul>
	                </div>
	            </div>
	        </div>
	    </section>
	</div>


	<!-- RESULT CARD -->
    <div id="result-card" class="card-template">
	    <section class="intro">
	        <div class="intro-body">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2 winner-box">
	                        <h1 class="brand-heading none-float">¡¡GANASTE!!</h1>
	                        <img src="../img/winner.png" alt="">
	                    </div>
	                    <div class="col-md-8 col-md-offset-2 loser-box">
	                        <h1 class="brand-heading">¡¡PERDISTE!!</h1>
	                        <img src="../img/loser.png" alt="">
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

    </div>


 <section>
	<div id="score">
		<span id="mios">0</span>
		<span>-</span>
		<span id="tuyos">0</span>
	</div>
    <div class="buttons-box">
		<button data-value="1" class="verder next" id="verder">VERDER</button>
		<button data-value="0" class="mierder next" id="mierder">MIERDER</button>			
    </div> 	 	
 </section>


    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


		<script type="text/javascript" src="../views/js/fight.js"></script>
	    <!-- Custom Theme JavaScript -->
		<script type="text/javascript">


			Deck = <?php echo $carddata; ?>;

			Fight.init();

		</script>

	</body>
</html>