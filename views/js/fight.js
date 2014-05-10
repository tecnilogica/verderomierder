var Fight = {};

(function(){

	Fight = {

		score: 0,

		index: 0,

		card: {},

		init: function(){
			this.card = Deck[this.index];

			
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



		}


	}

	return Fight;

}());