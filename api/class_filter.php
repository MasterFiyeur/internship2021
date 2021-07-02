<?php
class Filter {

	/* age[0] => age minimum
	   age[1] => age maximum */
	private $age;
	private $region;
	private $city;
	private $specialization;
	private $sex;
	private $lang; 
	/* array with differents formations */
	private $formation;
	/* If one or more variables are not correct */
	private $error_msg;

	function __construct(){
		$this->error_msg="";

		/* all variables present */
		if(!$this->var_check()){return;}

		/* correct age */
		if(!$this->age_check()){return;}

		/* city correct (prevent sql injection)*/
		if(!$this->city_check()){return;}

		/* Need the database structure for check region, specialization, lang, formation and sex*/
		/* region check */
		$this->region = $_POST["region"];
		$this->lang = $_POST["lang"];
		$this->specialization = $_POST["specialization"];
		$this->sex = $_POST["sex"];
		$this->formation = $_POST["formation"];



		
		$this->city = $_POST["city"];
	}

	/* check that all variables are present  */
	function var_check(){
		if(!isset($_POST["age"])
		|| !isset($_POST["region"])
		|| !isset($_POST["city"])
		|| !isset($_POST["specialization"])
		|| !isset($_POST["sex"])
		|| !isset($_POST["lang"])){
			$this->error_msg="One or more POST variables are missing.";
			return false;
		}
		return true;
	}

	/* age check*/
	function age_check(){
		if(!is_numeric($_POST["age"][0]) || !is_numeric($_POST["age"][1])){
			$this->error_msg="Age is not a numeric value.";
			return false;
		}
		$min_age = intval($_POST["age"][0]);
		$max_age = intval($_POST["age"][1]);
		if($min_age < 1 || $min_age > 99 || $max_age < 1 || $max_age > 99 || $min_age>$max_age){
			$this->error_msg="Age must be between 1 and 99.";
			return false;
		}
		$this->age[0] = intval($_POST["age"][0]);
		$this->age[1] = intval($_POST["age"][1]);
		return true;

	}

	function city_check(){
		$alphabet = "abcdefghijklmnopqrstuvwxyz ";
		for ($i=0; $i < strlen($_POST["city"]); $i++) { 
			if(!strrpos($alphabet, strtolower($_POST["city"][$i])) && strtolower($string[$i])!='a'){
				$this->error_msg="The city must contain only characters of the alphabet.";
				return false;
			}
		}
		return true;
	}

	function toJSON(){
		return(json_encode(
			array(
				"error" => $this->error_msg,
				"age" => array($this->age[0],$this->age[1]),
				"region" => $this->region,
				"city" => $this->city,
				"specialization" => $this->specialization,
				"sex" => $this->sex,
				"lang" => $this->lang,
			)
		));
	} 
}


?>