<?php

include "class_filter.php";

$filter = new Filter;
if(count($filter->getErrors())>0){
	/* Error in creation of the Filter */
    header('Content-Type: application/json');
	print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.', "error" => $filter->getErrors()));
	exit;
}else{
	http_response_code(200);
    header('Content-Type: application/json');
}

switch ($filter->getDict()) {
	case 'fas':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"justice",
				"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'sanf':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"justice",
				"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'sanfn':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"justice",
				"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fasn':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"justice",
				"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas1_red':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"justice",
				"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas2_red':
		/* get data from database and send them */
		$data = array();
		for ($i=0; $i < 5; $i++) { 
			array_push($data,array(
				"id"=>$i,
				"stimulus"=>"justice",
				"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
			));
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	default:
		/* Make a default case */
		print json_encode(array("status" => 400, 'status_message' =>'Incorrect syntax of parameters.',"error"=>array("Dictionary not found.")));
		break;
}
/* print array with status (code) & status_message & data */
?>