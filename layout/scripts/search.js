/* Generate letter for direct dictionary */
function letterGen(){
	const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for (let index = 0; index < alphabet.length; index++) {
		let letter = alphabet[index];
		$('#alpha_search .letter_container').append("<span onclick=\"printRes('"+letter+"')\">"+letter+"</span>");
	}
}

/* Generate letter for invert dictionary */
function letterExtendGen(){
	const alphabet = "?0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for (let index = 0; index < alphabet.length; index++) {
		let letter = alphabet[index];
		$('#alpha_search .letter_container').append("<span onclick=\"printRes('"+letter+"')\">"+letter+"</span>");
	}
}

/* Show and hide filter */
function toggleFilter(){
	$("#filter-form").toggleClass("form-hidden");
}

/* Print result of direct dictionary fas in an element with a 'result' class*/
function printResDirectFas(letter,filter,isDefault){
	console.log("Research : "+letter);
	if(isDefault){
		var options = {
			"dict":"fas",
			"method":"letter",
			filter
		};
	}else{
		var options = {
			"dict":$('#dictionary').val(),
			"method":"letter",
			filter
		};
	}
	/* Ajax request */
	var jqxhr = $.post("../../api/direct_search.php", options)
		.done(function(response){
			var data = response.data;
			show_loader(false);
			switch (response.status) {
				case 200:
					$('<div class="result-table"><table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
					for (let index = 0; index < data.length; index++) {
						$('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'</td><td>'+data[index].reactions+'</td></tr>').appendTo(".result-table table tbody");
					}
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});
}

/* Print result of invert dictionary fas in an element with a 'result' class*/
function printResInvertFas(letter,filter){
	console.log("Research : "+letter);
	var data = [
		{
			id:1,
			reaction:"argent",
			stimulus:"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
		},
		{
			id:2,
			reaction:"argent",
			stimulus:"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
		},
		{
			id:3,
			reaction:"argent",
			stimulus:"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
		},
		{
			id:4,
			reaction:"argent",
			stimulus:"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
		},
		{
			id:5,
			reaction:"argent",
			stimulus:"banque 308; or 294; budget 255; salaire 199; profit 194; fonds 192; économie 181; dollar 168; investissement 158; payer 151; financier 140; revenu 134; somme 119; économique 112; couter 99; prix 97; capital 91; valeur 87; cout 85; crédit 84; riche 83; million 74; milliard 68; emprunter 65; acheter, valoir 63; cher 59; compte 57; pièce 56; gagner, mise 50; prêt, travail 46; retirer 44; vendre 43; commission 42; intérêt 41; temps 40; ressource 38; espèce 36; commerce, travailler 34; vente 33; estimer 28; pauvre 27; compter 25; avance 24; client, moyen 23; négociation 22; profiter 21; frais, placer 20; franc 19; affaire 18; emploi 17; entreprise, pouvoir 16; commercial, perte, retraite, succès 15; besoin, échange, gestion, prêter 13; dépendre 12; acquérir, crise, régler 11; manque, posséder, vif 10; millier, règlement, rendre 9; donner, entretenir, fond, rapporter, taux 8; chance, contribuer, déposer 7; assurer, autant, contrat, intéresser, jeu, manquer, réussir 6; agent, avoir, libéral, mériter, obtenir 5; chaine, charge, demande, deuxième, distribuer, indépendant, situation 4; augmenter, cacher, difficulté, disposer, engager, guerre, marché, matériel, perdre, professionnel, puissance, ramener, réserve, suffire 3; appartenir, avantage, bien, carte, chiffre, croissance, entreprendre, étudiant, faveur, maximum, prévoir, problème, production, produire, proposition, recevoir, remettre, réunir, société, total 2; accepter, aider, ajouter, américain, application, argent, armée, association, attendre, battre, cadre, camp, chef, concerner, conseil, conseiller, conserver, contenter, coup, déclarer, découvrir, demander, député, dernier, différence, directeur, droit, école, éducation, employer, emporter, étude, européen, facile, famille, fils, fournir, gouvernement, heure, heureux, honorable, importance, important, importer, industrie, influence, jouer, main, matière, ministère, ministre, mission, mode, mondial, nécessité, neuf, organisation, papier, partager, partenaire, préférer, prison, progrès, projet, refuser, responsabilité, reste, résultat, risquer, scientifique, second, sens, service, soutenir, tirer, tour, trouver, utile, vouloir, voyage 1;<br/>(5164, 217)"
		}
	];
	show_loader(false);
	$('<div class="result-table"><table><thead><tr><th>#</th><th>Reaction</th><th>Stimulus</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
	for (let index = 0; index < data.length; index++) {
		$('<tr><td>'+data[index].id+'</td><td>'+data[index].reaction+'</td><td>'+data[index].stimulus+'</td></tr>').appendTo(".result div table tbody");
	}
}

/* Print result of direct dictionary sanf in an element with a 'result' class*/
function printResDirectSanf(letter, filter){
	console.log("Research : "+letter);
	/* POST params */
	var options = {
		"dict":$('#dictionary').val(),
		"method":"letter",
		filter
	};

	var jqxhr = $.post("../../api/direct_search.php", options)
		.done(function(response){
			var data = response.data;
			show_loader(false);
			switch (response.status) {
				case 200:
					$('<div><table><thead><tr><th colspan="5" class="text-center">Legend</th></tr></thead><tbody class="res-legend"><tr><td class="differents-countries canada">Canada</td><td class="differents-countries suisse">Suisse</td><td class="differents-countries suisse-canada">Suisse, Canada</td><td class="differents-countries belgique">Belgique</td><td class="differents-countries belgique-canada">Belgique, Canada</td></tr><tr><td class="belgique-suisse">Belgique, Suisse</td><td class="belgique-suisse-canada">Belgique, Suisse, Canada</td><td class="france">France</td><td class="france-canada">France, Canada</td><td class="france-suisse">France, Suisse</td></tr><tr><td class="france-suisse-canada">France, Suisse, Canada</td><td class="france-belgique">France, Belgique</td><td class="france-belgique-canada">France, Belgique, Canada</td><td class="france-belgique-suisse">France, Belgique, Suisse</td><td class="france-belgique-suisse-canada">All</td></tr></tbody></table></div>').appendTo('.result');
					$('<div class="result-table"><table><thead><tr><th>#</th><th>Stimulus</th><th class="differents-countries">Joint</th><th class="differents-countries">France</th><th class="differents-countries">Belgique</th><th class="differents-countries">Suisse</th><th class="differents-countries">Canada</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
					for (let index = 0; index < data.length; index++) {
						$('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'<button>Courbe</button></td><td>'+data[index].joint+'</td><td>'+data[index].france+'</td><td>'+data[index].belgique+'</td><td>'+data[index].suisse+'</td><td>'+data[index].canada+'</td></tr>').appendTo(".result-table table tbody");
					}
					break;
				case 400:
					response.error.forEach(error =>{
						$('<div>'+error+'<br/></div>').appendTo(".result");
					});
					break;
				default:
					break;
			}		
		})
		.fail(function(error){
			show_loader(false);
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});
}

/* Organize function's call thanks to url params */
function printRes(letter){
	$('.result').empty();
	show_loader(true);

	/* POST parameters creation */
	let education = [];
	var education_checkbox = document.getElementsByName('education');
	for (let index = 0; index < education_checkbox.length; index++) {
		if(education_checkbox[index].checked){education.push(education_checkbox[index].value);}
	}
	if(education.length==0){education=["lycee","etudiant","doctorant","docteur_science","hdr"];}
	var filter = {
		"agemin":$("#agemin").val(),
		"agemax":$("#agemax").val(),
		"region":$("#region").val(),
		"city":$("#city").val()==""?"noImportant":$("#city").val(),
		"specialization":$("#specialization").val()==""?"noImportant":$("#specialization").val(),
		"sex":document.querySelector('input[name="sexe"]:checked').value,
		"lang":$("#language").val(),
		"education":education
	};

	/* Redirect to the correct function */
	let url_string = window.location.href;
	let url = new URL(url_string);
	if(url.searchParams.get("method")=="inv"){
		/* Invert dictionary */
		printResInvertFas(letter);
	}else{
		/* Direct dictionary */
		switch ($('#dictionary').val()) {
			case "fas":
			case "fasn":
			case "fas1_red":
			case "fas2_red":
				printResDirectFas(letter,filter,false);
				break;
			case "sanf":
			case "sanfn":
				printResDirectSanf(letter,filter);
				break;
			default:
				printResDirectFas(letter,filter,true);
				break;
		}
	}
}

/* Sort by Stimulus (invert dic) */
function printByStimulus(){
	console.log("Sort by Stimulus");
	printRes("a");
}

/* Sort by Reaction (invert dic) */
function printByReact(){
	console.log("Sort by Reaction");
	printRes("a");
}

/* Sort by Frequency (invert dic) */
function printByFreq(frequency){
	console.log("Sort by Frequence from "+frequency+"% to "+(frequency+20)+"%");
	printRes("a");
}

/* Initialize the first questionnaire and the maximum of questionnaires */
function initQuestionnaires(){
	$('.result').empty();
	show_loader(true);
	/* Var initializing */
	let max = 2;
	let sex = "female";
	let firstQuest = {
		sex: sex=="female"?"../../images/female.png":"../../images/male.png",
		age: 18,
		from: "Orléans",
		language: "Français",
		specialization:"Informatique et sciences",
		formation: 2,
		response:[
			{id:1,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:2,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:3,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:4,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:5,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:6,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:7,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:8,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:9,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:10,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:11,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:12,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:13,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:14,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:15,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:16,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:17,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:18,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:19,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:20,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:21,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:22,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:23,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:24,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:25,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:26,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:27,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:28,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:29,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:30,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:31,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:32,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:33,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:34,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:35,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:36,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:37,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:38,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:39,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:40,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:41,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:42,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:43,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:44,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:45,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:46,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:47,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:48,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:49,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:50,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:51,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:52,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:53,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:54,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:55,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:56,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:57,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:58,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:59,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:60,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:61,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:62,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:63,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:64,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:65,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:66,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:67,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:68,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:69,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:70,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:71,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:72,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:73,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:74,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:75,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:76,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:77,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:78,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:79,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:80,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:81,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:82,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:83,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:84,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:85,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:86,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:87,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:88,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:89,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:90,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:91,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:92,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:93,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:94,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:95,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:96,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:97,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:98,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:99,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:100,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"}
		]
	};
	$('#quest-number-max').val(max);
	$('.search_nav')[0].children[3].innerText = "1/"+ max;

	/* Element creation */
	show_loader(false);
	$('<div class="result-indiv-quest"><div class="indiv-info"><div class="line"><img src="'+firstQuest.sex+'" alt="sexe"><div>Age : '+firstQuest.age+' years old</div><div>From : '+firstQuest.from+'</div></div><div class="line"><div>Language : '+firstQuest.language+'</div><div>Field of specialization : '+firstQuest.specialization+'</div><div>Formation : '+firstQuest.formation+'</div> </div></div></div>').appendTo(".result");
	$('<table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th><th>Frequency</th></tr></thead><tbody>').appendTo(".result .result-indiv-quest");
	firstQuest.response.forEach(element => {
		$("<tr><td>"+element.id+"</td><td>"+element.stimulus+"</td><td>"+element.reaction+"</td><td>"+element.frequence+"</td></tr>").appendTo(".result .result-indiv-quest table tbody");
	});
}

function printQuestionnaire(diff){
	$('.result .result-indiv-quest').empty();
	show_loader(true);
	/* Define the new value */
	let actualValue = parseInt(document.getElementById("quest-number-current").value);
	let maxValue = parseInt(document.getElementById("quest-number-max").value)
	let newValue = actualValue;
	switch (diff) {
		case 'first':
			newValue = 1;
			break;
		case 'add':
			newValue += 1;
			break;
		case 'add10':
			newValue += 10;
			break;
		case 'less':
			newValue -= 1;
			break;
		case 'less10':
			newValue -= 10;
			break;
		case 'last':
			newValue = maxValue;
			break;
		default:
			newValue = 1;
			break;
	}
	/* Don't be out */
	if(newValue < 1 ||newValue>maxValue){console.error("Out of range !");return;}
	$('.search_nav')[0].children[3].innerText = newValue+"/"+ maxValue;
	$('#quest-number-current').val(newValue);

	/* Data recuperation */
	var data ={
		sex: "male"=="female"?"../../images/female.png":"../../images/male.png",
		age: 22,
		from: "Paris",
		language: "Français",
		specialization:"Informatique et sciences",
		formation: 3,
		response:[
			{id:1,stimulus:"crainte2",reaction:"peur2",frequence:"424 (84.80%)"},{id:2,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:3,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:4,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:5,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:6,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:7,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:8,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:9,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:10,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:11,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:12,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:13,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:14,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:15,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:16,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:17,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:18,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:19,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:20,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:21,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:22,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:23,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:24,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:25,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:26,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:27,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:28,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:29,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:30,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:31,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:32,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:33,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:34,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:35,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:36,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:37,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:38,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:39,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:40,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:41,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:42,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:43,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:44,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:45,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:46,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:47,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:48,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:49,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:50,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:51,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:52,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:53,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:54,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:55,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:56,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:57,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:58,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:59,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:60,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:61,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:62,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:63,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:64,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:65,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:66,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:67,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:68,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:69,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:70,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:71,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:72,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:73,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:74,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:75,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:76,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:77,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:78,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:79,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:80,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:81,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:82,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:83,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:84,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:85,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:86,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:87,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:88,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:89,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:90,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:91,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:92,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:93,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:94,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:95,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:96,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:97,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:98,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:99,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"},{id:100,stimulus:"crainte",reaction:"peur",frequence:"424 (84.80%)"}
		]
	};

	/* Creation of element */
	show_loader(false);
	$('<div class="indiv-info"><div class="line"><img src="'+data.sex+'" alt="sexe"><div>Age : '+data.age+' years old</div><div>From : '+data.from+'</div></div><div class="line"><div>Language : '+data.language+'</div><div>Field of specialization : '+data.specialization+'</div><div>Formation : '+data.formation+'</div> </div></div>').appendTo(".result .result-indiv-quest");
	$('<table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th><th>Frequency</th></tr></thead><tbody>').appendTo(".result .result-indiv-quest");
	data.response.forEach(element => {
		$("<tr><td>"+element.id+"</td><td>"+element.stimulus+"</td><td>"+element.reaction+"</td><td>"+element.frequence+"</td></tr>").appendTo(".result .result-indiv-quest table tbody");
	});
}

/* Animation for loading */
function init_loader(){
	let base = document.getElementById("res_loader");
	let letters = base.textContent.split("");
	base.textContent="";
	letters.forEach((letter, i) => {
		let span = document.createElement("span");
		span.textContent = letter;
		span.style.animationDelay = `${i / 20}s`;
		base.append(span);
	});
}

/* Show/hide res_loader */
function show_loader(show){
	if(show){
		let base = document.getElementById("res_loader");
		base.style.display = "flex";
	}else{
		let base = document.getElementById("res_loader");
		base.style.display = "none";
	}
}