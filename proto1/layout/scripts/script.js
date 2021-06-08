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

/* Show and hide the good element of search */
function toggleSearch(element_id){
    const elements = $(".search_method").children();
    for (let index = 0; index < elements.length; index++) {
        const element = elements[index];
        if(element.id != element_id){	
            $(element).addClass("method_hidden");
        }else{
            $(element).removeClass("method_hidden");
        }
    }
}

/* Show and hide filter */
function toggleFilter(){
    $("#filter-form").toggleClass("form-hidden");
}

/* Print result of direct dictionary in an element with a 'result' class*/
function printResDirect(letter){
    console.log("Research : "+letter);
    $('.result').empty();
    $('<div class="result-table"><table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
    var data = [
        {
            id:1,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
        },
        {
            id:2,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
        },
        {
            id:3,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
        },
        {
            id:4,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
        },
        {
            id:5,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1<br/>(543, 143, 13, 84)"
        }
    ];
    for (let index = 0; index < data.length; index++) {
        $('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'</td><td>'+data[index].reactions+'</td></tr>').appendTo(".result div table tbody");
    }
}

/* Print result of invert dictionary in an element with a 'result' class*/
function printResInvert(letter){
    console.log("Research : "+letter);
    $('.result').empty();
    $('<div class="result-table"><table><thead><tr><th>#</th><th>Reaction</th><th>Stimulus</th></tr></thead><tbody></tbody></table></div>').appendTo(".result");
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
    for (let index = 0; index < data.length; index++) {
        $('<tr><td>'+data[index].id+'</td><td>'+data[index].reaction+'</td><td>'+data[index].stimulus+'</td></tr>').appendTo(".result div table tbody");
    }
}

/* Organize function's call thanks to url params */
function printRes(letter){
    let url_string = window.location.href;
    let url = new URL(url_string);
    if(url.searchParams.has("dic") && url.searchParams.get("dic")=="inv"){
        printResInvert(letter);
    }else{
        printResDirect(letter);
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

/* Initialize the first questionnaire and the maximum of questionnaires */
function initQuestionnaires(){
    /* Var initializing */
    let max = 2;
    let sex = "female";
    let firstQuest = {
        sex: sex=="female"?"../images/female.png":"../images/male.png",
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
    $('.result').empty();
    $('<div class="result-indiv-quest"><div class="indiv-info"><div class="line"><img src="'+firstQuest.sex+'" alt="sexe"><div>Age : '+firstQuest.age+' years old</div><div>From : '+firstQuest.from+'</div></div><div class="line"><div>Language : '+firstQuest.language+'</div><div>Field of specialization : '+firstQuest.specialization+'</div><div>Formation : '+firstQuest.formation+'</div> </div></div></div>').appendTo(".result");
    $('<table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th><th>Frequency</th></tr></thead><tbody>').appendTo(".result .result-indiv-quest");
    firstQuest.response.forEach(element => {
        $("<tr><td>"+element.id+"</td><td>"+element.stimulus+"</td><td>"+element.reaction+"</td><td>"+element.frequence+"</td></tr>").appendTo(".result .result-indiv-quest table tbody");
    });
}

function printQuestionnaire(diff){
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
        sex: "male"=="female"?"../images/female.png":"../images/male.png",
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
    $('.result .result-indiv-quest').empty();
    $('<div class="indiv-info"><div class="line"><img src="'+data.sex+'" alt="sexe"><div>Age : '+data.age+' years old</div><div>From : '+data.from+'</div></div><div class="line"><div>Language : '+data.language+'</div><div>Field of specialization : '+data.specialization+'</div><div>Formation : '+data.formation+'</div> </div></div>').appendTo(".result .result-indiv-quest");
    $('<table><thead><tr><th>#</th><th>Stimulus</th><th>Reaction</th><th>Frequency</th></tr></thead><tbody>').appendTo(".result .result-indiv-quest");
    data.response.forEach(element => {
        $("<tr><td>"+element.id+"</td><td>"+element.stimulus+"</td><td>"+element.reaction+"</td><td>"+element.frequence+"</td></tr>").appendTo(".result .result-indiv-quest table tbody");
    });
}

/* Show method thanks to the url parameters */
function showMethod(){
    let url_string = window.location.href;
    let url = new URL(url_string);
    const searchby = $(".search_by");
    const show = "search_by";
    const hide = "search_by method_hidden";
    if(url.searchParams.has("dic") && url.searchParams.get("dic")=="inv"){
        letterExtendGen();
        searchby[0].classList.value = hide;
        searchby[1].classList.value = show;
        searchby[2].classList.value = hide;
        document.getElementsByClassName("search_by")[1].scrollIntoView();
        if(url.searchParams.has("met")){
            if(url.searchParams.get("met")=="2"){
                $('.search_by')[1].children[2].checked = true;
                toggleSearch('word_search');
            }else if(url.searchParams.get("met")=="3"){
                $('.search_by')[1].children[4].checked = true;
                toggleSearch('stimulus_search');
            }else if(url.searchParams.get("met")=="4"){
                $('.search_by')[1].children[6].checked = true;
                toggleSearch('reaction_search');
            }
        }
    }else if(url.searchParams.has("dic") && url.searchParams.get("dic")=="que"){
        initQuestionnaires();
        searchby[0].classList.value = hide;
        searchby[1].classList.value = hide;
        searchby[2].classList.value = show;
        $(".filter-section").addClass("method_hidden");
        document.getElementsByClassName("search_by")[2].scrollIntoView();
    }else{
        letterGen();
        searchby[0].classList.value = show;
        searchby[1].classList.value = hide;
        searchby[2].classList.value = hide;
        if(url.searchParams.has("dic")){
            document.getElementsByClassName("search_by")[0].scrollIntoView();
        }
        if(url.searchParams.has("met") && url.searchParams.get("met")=="2"){
            $('.search_by')[0].children[2].checked = true;
            toggleSearch('word_search');
        }
    }
}