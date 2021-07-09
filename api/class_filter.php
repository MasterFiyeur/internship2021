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
		$this->region = $_POST["region"];
		$this->lang = $_POST["lang"];
		$this->specialization = $_POST["specialization"];
		$this->sex = $_POST["sex"];
		$this->education = $_POST["education"];
	}

	/* check that all variables are present  */
	function var_check(){
		if(!isset($_POST["agemin"])
		|| !isset($_POST["agemax"])
		|| !isset($_POST["region"])
		|| !isset($_POST["city"])
		|| !isset($_POST["specialization"])
		|| !isset($_POST["education"])
		|| !isset($_POST["sex"])
		|| !isset($_POST["lang"])){
			array_push($this->error_msg,"One or more POST variables are missing.");
			return false;
		}
		return true;
	}

	/* age check*/
	function age_check(){
		if(!is_numeric($_POST["agemin"]) || !is_numeric($_POST["agemax"])){
			array_push($this->error_msg,"Age is not a numeric value.");
			return false;
		}
		$min_age = intval($_POST["agemin"]);
		$max_age = intval($_POST["agemax"]);
		if($min_age < 1 || $min_age > 99 || $max_age < 1 || $max_age > 99 || $min_age>$max_age){
			array_push($this->error_msg,"Age must be between 1 and 99.");
			return false;
		}
		$this->age[0] = intval($_POST["agemin"]);
		$this->age[1] = intval($_POST["agemax"]);
		return true;
	}

	function city_check(){
		$alphabet = "abcdefghijklmnopqrstuvwxyz- ";
		for ($i=0; $i < strlen($_POST["city"]); $i++) { 
			if(!strrpos($alphabet, strtolower($_POST["city"][$i])) && strtolower($_POST["city"][$i])!='a'){
				array_push($this->error_msg,"The city must contain only characters of the alphabet.");
				return false;
			}
		}
		$this->city = $_POST["city"];
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