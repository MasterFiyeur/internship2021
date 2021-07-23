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
	/* array with differents educations */
	private $education;
	private $dict;
	private $method;
	/* If one or more variables are not correct */
	private $error_msg;

	function __construct(){
		$this->error_msg=[];

		/* dictionary defined */
		if(!$this->dict_check()){return;}

		/* all variables present */
		if(!$this->var_check()){return;}

		/* correct age */
		$this->age_check();

		/* city correct (prevent sql injection)*/
		$this->city_check();

		/* Need the database structure for check region, specialization, lang, education and sex*/
		/* region check */
		$this->region = $_POST["filter"]["region"];
		$this->lang = $_POST["filter"]["lang"];
		$this->specialization = $_POST["filter"]["specialization"];
		$this->sex = $_POST["filter"]["sex"];
		$this->education = $_POST["filter"]["education"];
	}

	/* check that all variables are present  */
	function var_check(){
		if(!isset($_POST["filter"]["agemin"])
		|| !isset($_POST["filter"]["agemax"])
		|| !isset($_POST["filter"]["region"])
		|| !isset($_POST["filter"]["city"])
		|| !isset($_POST["filter"]["specialization"])
		|| !isset($_POST["filter"]["education"])
		|| !isset($_POST["filter"]["sex"])
		|| !isset($_POST["filter"]["lang"])){
			array_push($this->error_msg,"One or more POST variables are missing.");
			return false;
		}
		return true;
	}

	/* age check*/
	function age_check(){
		if(!is_numeric($_POST["filter"]["agemin"]) || !is_numeric($_POST["filter"]["agemax"])){
			array_push($this->error_msg,"Age is not a numeric value.");
			return false;
		}
		$min_age = intval($_POST["filter"]["agemin"]);
		$max_age = intval($_POST["filter"]["agemax"]);
		if($min_age < 1 || $min_age > 99 || $max_age < 1 || $max_age > 99 || $min_age>$max_age){
			array_push($this->error_msg,"Age must be between 1 and 99.");
			return false;
		}
		$this->age[0] = intval($_POST["filter"]["agemin"]);
		$this->age[1] = intval($_POST["filter"]["agemax"]);
		return true;
	}

	function city_check(){
		$alphabet = "abcdefghijklmnopqrstuvwxyz- ";
		for ($i=0; $i < strlen($_POST["filter"]["city"]); $i++) { 
			if(!strrpos($alphabet, strtolower($_POST["filter"]["city"][$i])) && strtolower($_POST["filter"]["city"][$i])!='a'){
				array_push($this->error_msg,"The city must contain only characters of the alphabet.");
				return false;
			}
		}
		$this->city = $_POST["filter"]["city"];
		return true;
	}

	function dict_check(){
		
		/* Dictionary check */
		if(!isset($_POST["dict"])){
			array_push($this->error_msg,"The request must contain a 'dict' variable.");
			return false;
		}elseif (!in_array($_POST["dict"],array("fas","fasn","sanf","sanfn","fas1_red","fas2_red"))) {
			array_push($this->error_msg,"The specified dictionary doesn't exist.");
			return false;
		}
		$this->dict=$_POST["dict"];

		/* Method check */
		if(!isset($_POST["method"])){
			array_push($this->error_msg,"The request must contain a 'method' variable.");
			return false;
		}elseif (!in_array($_POST["method"],array("letter","stim","react","frequency","questionnaires"))) {
			array_push($this->error_msg,"The specified method doesn't exist.");
			return false;
		}
		/* Méthode letter check */
		if($_POST["method"]=="letter"){
			if(!isset($_POST["letter"])){
				array_push($this->error_msg,"You must specify a letter or word for this method.");
				return false;
			}else{
				if((strpos($_POST["letter"], "\"") !== false) || 
				(strpos($_POST["letter"], "'") !== false) || 
				(strpos($_POST["letter"], ";") !== false)){
					array_push($this->error_msg,"You must specify a word that does not contains one of these characters (\" ' ;).");
					return false;
				}
			}
		}
		$this->method=$_POST["method"];
		return true;
	}

	function getObject(){
		return (array(
			"dict"=>$this->dict,
			"age" => $this->age,
			"region" => $this->region,
			"city"=>$this->city,
			"specialization"=>$this->specialization,
			"sex"=>$this->sex,
			"lang"=>$this->lang,
			"education"=>$this->education
		));
	}

	function getDict(){
		return $this->dict;
	}

	function getErrors(){
		return $this->error_msg;
	}
}


?>