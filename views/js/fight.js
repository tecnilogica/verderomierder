var Fight = {};

(function(){

	Fight = {

		score: 0,

		index: 0,

		card: {},

		init: function(){
			this.card = Deck[this.index];
			this._setValues();
			
		},

		next: function(score){
			//Update score
			this.score += parseInt(score,10);

			if(Deck.length<=this.index){
				this.index++;
				this.card = Deck[this.index];
				this._setValues();
			}else{
				//Set result button
				
			}


		},

		_setValues: function(){

			document.getElementById('ciudad').innerText = this.card.ciudad;
			document.getElementById('habitantes').innerText = this.card.habitantes;
			document.getElementById('renta').innerText = this.card.renta;


			document.getElementById('accesibilidad').innerText = this.card.accesibilidad_y_movilidad_m_100_urbantur_2012;
			document.getElementById('no2').innerText = this.card.concentracion_no2_mg_m3;
			document.getElementById('co2').innerText = this.card.emisiones_co2_tm_per_capita;
			document.getElementById('pm').innerText = this.card.pm_2_5_mg_m3;
			document.getElementById('transporte').innerText = this.card.uso_transporte_no_vehiculo_privado;
			document.getElementById('forestales').innerText = this.card.zonas_forestales;
			document.getElementById('arbolado').innerText = this.card.zonas_verdes_y_arbolado;

		}


	}

	return Fight;

}());