<?php
	class Padre {
			public $nome; 
			public $cognome;
            private $numeroScarpe;

			public function __construct($nome, $cognome, $numeroScarpe)
			{
				$this->nome = $nome;
                $this->cognome = $cognome;
                $this->numeroScarpe = $numeroScarpe;
			}
			public function getNumeroScarpe() {
				return $this->numeroScarpe;
			}				
			public function setNumeroScarpe($numeroScarpe) {
				 $this->numeroScarpe = $numeroScarpe;
			}
	}

	class Figlio extends Padre {
		public $nomeBattesimo;
		public function __construct($nome, $cognome, $numeroScarpe, $nomeBattesimo)
		{
            Padre::__construct($nome, $cognome, $numeroScarpe);
			$this->nomeBattesimo = $nomeBattesimo;
		}
	}
?>