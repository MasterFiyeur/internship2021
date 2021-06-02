/* Generate letter for direct dictionary */
function letterGen(){
    const alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (let index = 0; index < alphabet.length; index++) {
        let letter = alphabet[index];
        $('#alpha_search .letter_container').append("<span onclick=\"printResDirect('"+letter+"')\">"+letter+"</span>");
    }
}

/* Generate letter for invert dictionary */
function letterExtendGen(){
    const alphabet = "?0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (let index = 0; index < alphabet.length; index++) {
        let letter = alphabet[index];
        $('#alpha_search .letter_container').append("<span>"+letter+"</span>");
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
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1"
        },
        {
            id:2,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1"
        },
        {
            id:3,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1"
        },
        {
            id:4,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1"
        },
        {
            id:5,
            stimulus:"justice",
            reactions:"loi 95; droit 80; balance 70; tribunal 40; égalité 26; juge 19; avocat 18; équité 17; lois 13;palais 11; paix 10; injustice 8; peine 5; aveugle, cour, sociale 4; équitable, magistrat, musique,ordre, procès 3; épée, état, honneur, idéal, jurisprudence, juste, légalité, mensonge, parlement,police, prison, social, tous, tribunaux, utopie, vengeance, vertu, voleur 2; armée, aucune,Batman, belle, bêtise, bien, blason, chaos, ciel, civilisation, commune, conflit, court, croix,d.a.n.c.e, Dati, de classe, devoir, doute, Droit, droits, droiture, électron, équilibre, erreur judiciaire, faire, fonction, française, glaive, gouvernement, Hadopi, héros, hommes, honnête,humanité, impartiale, inégalité, inexistante, inique, injuste, interprétation, introuvable,jamais, jugement, jury, jus naturalisme, justice, laquelle, légale, lente, lenteur, liberté,lourde, magistrature, marteau, Metallica, métier, morale, norme, organisation, parquet, pénale,pouvoir, punition, règles, réinsertion, rigidité, rigueur, robe, Saint Louis, sceaux, Simian,simulacre, système, valeur, vérité, violence, vrai 1"
        }
    ];
    for (let index = 0; index < data.length; index++) {
        $('<tr><td>'+data[index].id+'</td><td>'+data[index].stimulus+'</td><td>'+data[index].reactions+'</td></tr>').appendTo(".result div table tbody");
    }
}