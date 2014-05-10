<!doctype html>
<html>
	<head>
		
	</head>
	<body>

		<button data-value="1" class="verder next">VERDER</button>
		<button data-value="0" class="mierder next">MIERDER</button>
		<button class="result">RESULT</button>

		<script type="text/javascript" src="js/fight.js"></script>
		<script type="text/javascript">

			Deck = <?php echo $carddata; ?>;

			Fight.init();

			// Delegate events
			document.addEventListener('click', function(ev){

				if(ev.target.className.match('next') ){

					Fight.next(ev.target.getAttribute('data-value'));

				}
			})


		</script>

	</body>
</html>