var Fight = {};

(function(){

	Fight = {

		score: {verder:0,mierder:0},

		index: 0,

		card: {},

		init: function(){

			var _self = this;

			this.card = Deck[this.index];
			this.setValues();

			// Delegate events
			document.addEventListener('click', function(ev){

				if(ev.target.className.match('next') ){

					_self.next(ev.target.getAttribute('data-value'));

				}

				if(ev.target.className.match('result')){

					_self.showResults();

				}

			});


			
		},

		next: function(score){
			//Update score
			if(score==0){
				this.score.mierder++;
				document.getElementById('mierder').innerText = 'MIERDER ' + this.score.mierder;
			}else{
				this.score.verder++;
				document.getElementById('verder').innerText = 'VERDER ' + this.score.verder;
			}
			

			if(Deck.length-1>this.index){
				this.index++;
				this.card = Deck[this.index];
				this.setValues();
			}else{
				//Set result button
				document.getElementById('mierder').style.display = 'none';
				document.getElementById('verder').style.display = 'none';
				document.getElementById('result').style.display = 'block';
				
			}


		},

		setValues: function(){

			document.getElementById('ciudad').innerText = this.card.ciudad;
			document.getElementById('habitantes').innerText = this.card.habitantes.toLocaleString() + ' hab.';
			document.getElementById('renta').innerText = this.card.renta.toLocaleString() + '€';
			document.getElementById('imagen').src = '../img/imagen_' + this.card.cartodb_id;			

			document.getElementById('accesibilidad').innerText = this.card.accesibilidad_y_movilidad_m_100_urbantur_2012.toLocaleString() + ' sobre 100';
			document.getElementById('no2').innerText = this.card.concentracion_no2_mg_m3.toLocaleString() + ' mg/m3';
			document.getElementById('co2').innerText = this.card.emisiones_co2_tm_per_capita.toLocaleString() + ' tm per cápita';
			document.getElementById('pm').innerText = this.card.pm_2_5_mg_m3.toLocaleString() + ' mg/m3';
			//document.getElementById('transporte').innerText = this.card.uso_transporte_no_vehiculo_privado.toLocaleString();
			document.getElementById('forestales').innerText = this.card.zonas_forestales.toLocaleString() + '%';
			document.getElementById('arbolado').innerText = this.card.zonas_verdes_y_arbolado.toLocaleString() + '%';

		},

		showResults: function(){

			document.getElementById('card').style.display = 'none';
			document.getElementById('result-card').style.display = 'block';

		}


	}

	return Fight;

}());