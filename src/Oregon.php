<?php

namespace GIS\Political\Countries\US;


class Oregon {

	public static function getCounties() {

		return array(
			"Baker" 		=> "Baker",
			"Benton" 		=> "Benton",
			"Clackamas"		=> "Clackamas",
			"Clatsop" 		=> "Clatsop",
			"Columbia"		=> "Columbia",
			"Coos"			=> "Coos",
			"Crook"			=> "Crook",
			"Curry"			=> "Curry",
			"Deschutes"		=> "Deschutes",
			"Douglas"		=> "Douglas",
			"Gillam"		=> "Gillam",
			"Grant"			=> "Grant",
			"Harney"		=> "Harney",
			"Hood River"	=> "Hood River",
			"Jackson"		=> "Jackson",
			"Jefferson"		=> "Jefferson",
			"Josephine"		=> "Josephine",
			"Klamath"		=> "Klamath",
			"Lake"			=> "Lake",
			"Lane"			=> "Lane",
			"Lincoln"		=> "Lincoln",
			"Linn"			=> "Linn",
			"Malheur"		=> "Malheur",
			"Marion"		=> "Marion",
			"Morrow"		=> "Morrow",
			"Multnomah"		=> "Multnomah",
			"Polk"			=> "Polk",
			"Sherman"		=> "Sherman",
			"Tillamook"		=> "Tillamook",
			"Umatilla"		=> "Umatilla",
			"Union"			=> "Union",
			"Wallowa"		=> "Wallowa",
			"Wasco"			=> "Wasco",
			"Washington"	=> "Washington",
			"Wheeler"		=> "Wheeler",
			"Yamhill"		=> "Yamhill"
		);
	}




	public static function getCourts($type = "APPELLATE"){

		return array(
			"" 						 => "All Courts",
			"Oregon Court of Appeals" => "Oregon Court of Appeals",
			"Oregon Supreme Court"   => "Oregon Supreme Court"
		);
	}



}