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


			document.getElementById('accesibilidad').innerText = this.card.accesibilidad;
			document.getElementById('no2').innerText = this.card.no2;
			document.getElementById('co2').innerText = this.card.co2;
			document.getElementById('accesibilidad').innerText = this.card.accesibilidad;
			document.getElementById('accesibilidad').innerText = this.card.accesibilidad;

		}


	}

	return Fight;

}());