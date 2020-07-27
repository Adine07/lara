<?php 

	/**
	 * 
	 */
	class Halaman
	{

		protected $halaman;
		public $luasHalaman = 10;

		public function ShowHalaman(){
			return $this->halaman;
		}

		public function SetLuasHalaman($luasHalaman){
			$this->luasHalaman = $luasHalaman * 2;
		}

	}

	
	class Rumah extends Halaman
	{
		
		function __construct($type, $halaman)
		{
			$this->type = $type;
			$this->halaman = $halaman;
		}

		protected $type;
		private $lantai = "Satu";

		public function SetLantai($lantai){
			$this->lantai = $lantai;
		}

		public function SetLuasHalaman($luasHalaman){
			$this->luasHalaman = $luasHalaman;
		}

		public function ShowType(){
			return $this->type;
		}

		public function ShowLantai(){
			return $this->lantai;
		}

	}

	// $rumah = new rumah();
	// $rumah->SetTypeRumah = "2x1m";
	// echo $rumah->ShowType();


	// $rumah = new Halaman();
	// // $rumah->SetHalaman = "2x1m";
	// echo $rumah->ShowHalaman();

	$rumah = new Rumah("2x1", "taman bunga");
	$rumah->SetLuasHalaman(21);

	echo "Saya memesan rumah dengan type: " . $rumah->ShowType() . " dan memiliki " . $rumah->ShowLantai() . " lantai, dengan halaman " . $rumah->ShowHalaman() . " seluas " . $rumah->luasHalaman . "km.";

	echo "<br/><br/>";

	$rumah->SetLantai("tujuh");
	$rumah->SetLuasHalaman(12);

	echo "Saya memesan rumah dengan type: " . $rumah->ShowType() . " dan memiliki " . $rumah->ShowLantai() . " lantai, dengan halaman " . $rumah->ShowHalaman() . " seluas " . $rumah->luasHalaman . "km.";


?>