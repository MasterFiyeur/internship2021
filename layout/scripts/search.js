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
function printResDirectFas(letter){
	console.log("Research : "+letter);

	/* education array */
	let education = [];
	var education_checkbox = document.getElementsByName('education');
	for (let index = 0; index < education_checkbox.length; index++) {
		if(education_checkbox[index].checked){education.push(education_checkbox[index].value);}
	}
	if(education.length==0){education=["lycee","etudiant","doctorant","docteur_science","hdr"];}

	/* POST arguments (add the letter of research) */
	var options = {
		"dict":"fas",
		"agemin":$("#agemin").val(),
		"agemax":$("#agemax").val(),
		"region":$("#region").val(),
		"city":$("#city").val()==""?"noImportant":$("#city").val(),
		"specialization":$("#specialization").val()==""?"noImportant":$("#specialization").val(),
		"sex":document.querySelector('input[name="sexe"]:checked').value,
		"lang":$("#language").val(),
		"education":education
	};

	/* Ajax request */
	var jqxhr = $.post("../../api/direct_search.php", options)
		.done(function(response){
			console.log(response);
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
			$('<div>The program has encountered an error.</div>').appendTo(".result");
			console.log(error);
		});
}

/* Print result of invert dictionary fas in an element with a 'result' class*/
function printResInvertFas(letter){
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
function printResDirectSanf(letter){
	console.log("Research : "+letter);
	var data = [
		{
			id:1,
			stimulus:"aimer",
			joint:"amour 256; adorer 171; détester 110; haïr 99; cœur 80; donner, vie 47; bonheur, vivre 42; apprécier 36; son prochain 32; chérir 28; famille, toujours 25; partager 24; à la folie 19; passion, sentiment 16; autre, enfants 14; désirer, femme 13; amoureux, à perdre la raison, beaucoup, quelqu'un 12; tendresse 11; mourir, souffrir 10; embrasser 9; joie, love, plaisir 8; aimer, amant, couple, d'amour, passionnément 7; être, être aimé, folie, fort, jouir 6; affection, autres, enfant, sans compter 5; bien, câliner, choyer, difficile, essentiel, inconditionnellement, mariage, respecter, rouge, savourer, tout, vouloir 4; à en mourir, agréable, amitié, chaleur, danger, désir, épouse, faire, haine, heureux, homme, important, jouer, lire, manger, mari, offrir, rire, sourire, toi, tout le monde 3; amer, amis, à mourir, animaux, aussi, à vie, beau, bisou, chocolat, choisir, conjoint, croire, dire, don, douceur, encore, éperdument, essence, fille, fils, fleur, follement, harmonie, hum !, liberté, longtemps, lover, maman, marier, monde, nature, oui, papillon dans le ventre, parler, partage, pas, perdre, peur, plaire, pleurer, plus que tout, pour toujours, prendre, quitter, recevoir, réciprocité, regarder, relation, rester, rêve, rose, sa famille, sans limite, Sébastien, ses enfants, sexe, ton prochain, tristesse 2; 14 février, admirer, affectionner, aider, ailes, aimer à la folie, aimer à mourir, aimer est le plus beau verbe, à la vie à la mort, à l'infini, altruisme, âme, âme sœur, ami, à mort, amoureuse, amour toujours, amour universel, appréciation, approuver, à quoi ça sert, attachement, au-delà du réalisme, autrui, avoir plaisir, bague, base, battements cœur, belles choses, bêtise, bien-être, blessure, boire, boire et chanter, bon, cadeau, ça fait du bien---, câlin, câlins, calme, c'est ce qu'il y a de plus beau, chanter, chaud, chercher, ciel, cœur battant, cœur rose, comme au premier jour, comme un fou, compliqué, comprendre, confortable, contact, contrainte, copain, Corinthiens 13, corps, croquer, crucial, Daniel Balavoine, d'avantage, David, déception, déchirure, déraison, désaimer, de tout cœur, deux, dévorer, don de soi, donner p, dormir, douter, d'un impossible amour, dur, durée, échec, écrire, Égée, elle, en amour, ensemble, entier, envers et contre tout, éprouver, espoir, et aimer aimer (Saint-Augustin), éternel, éternue, et être aimée, et le dire, et l'être en retour, être amoureux, être attiré par quelque chose o, être bien, être sûr d'être aimé, et se le dire, exister, facile ou difficile, faire l'amour, feu, fidélité, finalité de la vie, fin de la raison, fleurs, flou, fluidité, formidable, fourre-tout, franchir, Frederick, frères, gâter, généreux, générosité, grâce, gratuit, idéale, idylle, il faut être deux, illusion, impossible, inconditionnel, incontrôlable, indispensable, infiniment, intensément, intensité, je l'aime à mourir, Jérôme, jeunes, jubiler, Lapinou, la vie, le plus important, le problème du français est que, les autres et soi-même, les uns les autres, libre, lier, l'important c'est d'aimer, loin, lorgner, lui, ma copine, mal, Marguerite, mensonge, mère, mon amour, mon chien, mon compagnon, mon homme, naturel, objectif, oser, ou ne pas aimer, pain, palpiter, participer, Philippe, plus que soi, poète, posséder, pour vivre, préserver, prochain, proche, profondément, projet, protéger, raffoler, raison, raison de vivre, regard, ressentir(1824, 369 [20.23%], 0, 231)",
			france : "amour 67; adorer 50; détester 40; cœur 25; vivre 22; haïr 21; donner 18; bonheur 14; vie 13; apprécier, chérir 12; partager 11; à la folie, toujours 8; à perdre la raison, passion, sentiment 7; désirer, son prochain 6; tendresse 5; aimer, famille, folie, passionnément, plaisir, souffrir 4; autre, autres, couple, embrasser, enfant, enfants, femme, mourir, sans compter 3; amant, câliner, choisir, choyer, dire, être aimé, papillon dans le ventre, perdre, pleurer, quelqu'un, quitter, regarder, savourer, toi 2; à en mourir, affection, affectionner, aimer à la folie, à la vie à la mort, âme, amer, amis, amitié, amoureux, à quoi ça sert, attachement, à vie, avoir plaisir, beaucoup, belles choses, boire, boire et chanter, bon, chanter, chercher, cœur rose, comme au premier jour, comprendre, contact, croire, croquer, d'amour, danger, Daniel Balavoine, David, désaimer, désir, deux, dévorer, difficile, don, douter, d'un impossible amour, encore, entier, éperdument, épouse, éprouver, espoir, essence, essentiel, et aimer aimer (Saint-Augustin), éternel, éternue, et le dire, être attiré par quelque chose o, être sûr d'être aimé, exister, faire l'amour, fidélité, fille, finalité de la vie, fleur, fluidité, formidable, fort, fourre-tout, franchir, gratuit, haine, heureux, idylle, il faut être deux, incontrôlable, indispensable, infiniment, je l'aime à mourir, joie, jouer, le problème du français est que, liberté, libre, l'important c'est d'aimer, lire, loin, love, ma copine, mal, Marguerite, mariage, marier, mensonge, monde, naturel, offrir, oui, ou ne pas aimer, palpiter, Philippe, plus que soi, plus que tout, poète, pour toujours, préserver, raffoler, raison, recevoir, réciprocité, relation, respecter, rester, rêve, rire, rouge, sacré, Sandrine, sans retour, savoir, Sébastien, sentiment fort, sentir, sérénité, se retrouver, s'oublier, souhait, souhaiter, tendre, tout, tout donner, tristesse, tuer, vive, volonté, Yoann 1 (568, 179 [31.51%], 0, 130)",
			belgique:"amour 81; adorer 51; détester 29; haïr 27; cœur 26; donner 20; apprécier 14; vie 12; bonheur 9; toujours 8; famille 7; sentiment 6; à la folie, chérir, passion, vivre 5; love, son prochain 4; autre, bien, enfants, être, joie, jouir, mourir, partager, quelqu'un, rouge, souffrir 3; à en mourir, amant, à perdre la raison, beau, beaucoup, choyer, couple, désirer, douceur, embrasser, être aimé, femme, fort, heureux, hum !, mari, peur, plaisir, sans compter, sourire, tendresse 2; admirer, ailes, aimer est le plus beau verbe, à l'infini, amis, à mort, amoureux, approuver, au-delà du réalisme, à vie, bague, bisou, chaleur, cœur battant, confortable, copain, croire, crucial, déception, désir, difficile, don, don de soi, dur, éperdument, essentiel, et être aimée, et l'être en retour, faire, fin de la raison, folie, follement, idéale, illusion, impossible, jeunes, Lapinou, le plus important, lier, longtemps, lover, lui, maman, manger, mariage, mon amour, mon compagnon, mon homme, nature, objectif, offrir, oui, passionnément, plaire, posséder, projet, raison de vivre, regard, relation, respecter, ressentir, savourer, Sébastien, sentiment merveilleux, sexe, simple, son frère, toujour plus, toujours plus, tout le monde, tristesse, uni, vénérer, vivre avec une autre personne, voler, vouloir 1 (469, 126 [26.87%], 0, 76)",
			suisse:"amour 43; adorer 34; haïr 28; détester 26; cœur 9; son prochain 8; bonheur, vie, vivre 7; apprécier 6; désirer 5; amoureux, autre, chérir 4; donner, famille, partager, passion, sentiment, toujours 3; à la folie, aussi, beaucoup, câliner, enfant, enfants, essentiel, être, être aimé, femme, harmonie, inconditionnellement, lire, souffrir 2; 14 février, affection, aider, aimer, aimer à mourir, amant, amer, à mourir, amour toujours, à perdre la raison, autres, autrui, base, battements cœur, bêtise, bien, bien-être, ça fait du bien---, c'est ce qu'il y a de plus beau, chaleur, chocolat, ciel, conjoint, Corinthiens 13, corps, couple, danger, déraison, durée, elle, embrasser, encore, envers et contre tout, épouse, être amoureux, et se le dire, facile ou difficile, feu, fille, fleur, fleurs, fort, gâter, généreux, important, Jérôme, joie, jouer, jubiler, les autres et soi-même, liberté, lorgner, love, lover, manger, mariage, mourir, nature, offrir, pain, partage, participer, passionnément, plaire, plaisir, plus que tout, pour toujours, pour vivre, proche, profondément, protéger, quelqu'un, respecter, rester, rire, sa famille, saisir, sans conditions, sans discrimination, se donner, ses enfants, sexualité, soi, tendresse, toi, très fort, trouver, vibrer, vitale, voiture, vouloir 1 (329, 125 [37.99%], 0, 91)",
			canada:"amour 65; adorer 36; haïr 23; cœur 20; détester, vie 15; son prochain 14; bonheur 12; famille 11; vivre 8; beaucoup, chérir, partager 7; amoureux, d'amour, donner, enfants, femme, quelqu'un, toujours 6; à la folie, apprécier, autre 4; affection, agréable, embrasser, homme, joie, jouir, mourir, tendresse, tout 3; aimer, amant, amitié, animaux, à perdre la raison, difficile, faire, fils, fort, haine, important, inconditionnellement, love, parler, pas, prendre, rose, sans limite, ton prochain, tout le monde, vouloir 2; altruisme, âme sœur, ami, amoureuse, à mourir, amour universel, appréciation, autres, bisou, blessure, cadeau, câlin, câlins, calme, chaleur, chaud, chocolat, comme un fou, compliqué, conjoint, contrainte, couple, danger, d'avantage, déchirure, désir, de tout cœur, donner p, dormir, échec, écrire, Égée, en amour, ensemble, épouse, essence, être, être bien, flou, folie, follement, Frederick, frères, générosité, grâce, inconditionnel, intensément, intensité, jouer, la vie, les uns les autres, longtemps, maman, manger, mari, mariage, marier, mère, mon chien, monde, oser, partage, passion, passionnément, plaisir, prochain, recevoir, réciprocité, respecter, rêve, rire, sa famille, sa femme, s'aimer, s'aimer les uns les autres, sa mère, sans attente, sans limites, sans partage, sans raison, sauver, sa vie, savourer, s'effriter, sensation, ses enfants, sexe, soi-meme, son amoureux/amoureuse, souffrir, sourire, toi, toucher, vertus, youpi 1 (458, 148 [32.31%], 0, 95)"
		}
	];
	show_loader(false);
	/* Legend for sanf dictionary */
	$('<div><table><thead><tr><th colspan="5" class="text-center">Legend</th></tr></thead><tbody class="res-legend"><tr><td class="differents-countries canada">Canada</td><td class="differents-countries suisse">Suisse</td><td class="differents-countries suisse-canada">Suisse, Canada</td><td class="differents-countries belgique">Belgique</td><td class="differents-countries belgique-canada">Belgique, Canada</td></tr><tr><td class="belgique-suisse">Belgique, Suisse</td><td class="belgique-suisse-canada">Belgique, Suisse, Canada</td><td class="france">France</td><td class="france-canada">France, Canada</td><td class="france-suisse">France, Suisse</td></tr><tr><td class="france-suisse-canada">France, Suisse, Canada</td><td class="france-belgique">France, Belgique</td><td class="france-belgique-canada">France, Belgique, Canada</td><td class="france-belgique-suisse">France, Belgique, Suisse</td><td class="france-belgique-suisse-canada">All</td></tr></tbody></table></div>').appendTo('.result');
	$('<div class="result-table"><table><thead><tr><th>#</th><th>Stimulus</th><th class="differents-countries">Joint</th><th class="differents-countries">France</th><th class="differents-countries">Belgique</th><th class="differents-countries">Suisse</th><th class="differents-countries">Canada</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
	for (let index = 0; index < data.length; index++) {
		$('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'<button>Courbe</button></td><td>'+data[index].joint+'</td><td>'+data[index].france+'</td><td>'+data[index].belgique+'</td><td>'+data[index].suisse+'</td><td>'+data[index].canada+'</td></tr>').appendTo(".result-table table tbody");
	}
}

/* Organize function's call thanks to url params */
function printRes(letter){
	$('.result').empty();
	show_loader(true);
	let url_string = window.location.href;
	let url = new URL(url_string);
	if(url.searchParams.get("method")=="inv"){
		printResInvertFas(letter);
	}else{
		switch ($('#dictionary').val()) {
			case "fas":
				printResDirectFas(letter);
				break;
			case "sanf":
				printResDirectSanf(letter);
				break;
		
			default:
				printResDirectFas(letter);
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