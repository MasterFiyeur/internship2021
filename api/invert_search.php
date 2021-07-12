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
		switch ($filter->getMethod()) {
			case 'stim':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"reaction"=>"argent",
						"stimulus"=>"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
					));
				}
				break;
			case 'react':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"reaction"=>"argent",
						"stimulus"=>"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
					));
				}
				break;
			default:
				/* Letter/word method */
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"reaction"=>"argent",
						"stimulus"=>"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
					));
				}
				break;
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'sanf':
		/* get data from database and send them */
		$data = array();
		switch ($filter->getMethod()) {
			case 'stim':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			case 'frequency':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			default:
				/* Letter/word method */
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'sanfn':
		/* get data from database and send them */
		$data = array();
		switch ($filter->getMethod()) {
			case 'stim':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			case 'frequency':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			default:
				/* Letter/word method */
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fasn':
		/* get data from database and send them */
		$data = array();
		switch ($filter->getMethod()) {
			case 'stim':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			case 'react':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			default:
				/* Letter/word method */
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas1_red':
		/* get data from database and send them */
		$data = array();
		switch ($filter->getMethod()) {
			case 'stim':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			case 'react':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			default:
				/* Letter/word method */
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
		}
		print json_encode(array("status" => 200, 'status_message' =>'OK.', "data" => $data));
		break;
	case 'fas2_red':
		/* get data from database and send them */
		$data = array();
		switch ($filter->getMethod()) {
			case 'stim':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			case 'react':
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
			default:
				/* Letter/word method */
				for ($i=0; $i < 5; $i++) { 
					array_push($data,array(
						"id"=>$i,
						"stimulus"=>"justice",
						"reactions"=>"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
					));
				}
				break;
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