<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->fas->{$_SESSION["lang"]}; ?></a></li>
			</ul>
		</div>
	</div>
	<!-- ################################################################################################ -->
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<div class="sidebar one_quarter first">
				<nav class="sdb_holder">
					<ul>
						<li><a href="#about"><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="#stim"><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></a></li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang->pages->title->{$_SESSION["lang"]}; ?></h1>
				<div id=about>
					<h2><?php echo $lang->dict->about_title->{$_SESSION["lang"]}; ?></h2>
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->fas->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fas->stim->{$_SESSION["lang"]}; ?></p>
					<p>??tre, avoir, faire, dire, pouvoir, tout, aller, voir, bien, homme,
						mari, vouloir, grand, femme, venir, devoir, petit, jour, prendre, mer, trouver,
						donner, temps, m??me, falloir, parler, main, chose, mettre, vie, savoir, yeux,
						passer, autre, regarder, aimer, heure, croire, monde, enfant, fois, seul, bon,
						demander, jeune, moment, rester, r??pondre, entendre, t??te, p??re, fille,
						premier, coeur, eau, an, beau, terre, dieu, monsieur, voix, penser, nouveau,
						arriver, maison, coup, conna??tre, devenir, air, mot, nuit, sentir, vieux,
						sembler, tenir, noir, comprendre, rendre, attendre, sortir, ami, porte, amour,
						dernier, pied, gens, nom, vivre, entrer, reprendre, porter, pays, ciel, fr??re,
						regard, chercher, ??me, c??t??, blanc, fort, la mort, revenir, esprit, maintenant,
						ville, bas, rue, appeler, soir, chambre, mourir, un pas, partir, soleil, jeter,
						roi, ??tat, pauvre, corps, suivre, bras, ??crire, montrer, tomber, place, ouvrir,
						parti, cher, ann??e, loin, visage, bruit, lettre, franc, haut, fond, force,
						effet, arr??ter, perdre, commencer, para??tre, marcher, milieu, un saint, id??e,
						ailleurs, travail, lumi??re, long, mois, fils, lever, raison, gouvernement,
						permettre, asseoir, point, plein, personne, vrai, peuple, fait, parole, guerre,
						fran??ais, ??couter, pens??e, affaire, matin, pierre, monter, vent, doute, front,
						ombre, part, ma??tre, aujourd'hui, besoin, question, apercevoir, recevoir,
						mieux, peine, tour, servir, finir, famille, souvent, rire, madame, sorte,
						figure, le droit, peur, bout, lieu, silence, gros, chef, le bois, histoire,
						crier, jouer, feu, tourner, doux, longtemps, heureux, froid, garder, partie,
						face, mouvement, la fin, rouge, reconna??tre, quitter, route, manger, livre,
						arbre, courir, cas, mur, ordre, continuer, l'est, bonheur, oublier, descendre,
						int??r??t, cacher, profond, argent, cause, poser, travers, instant, fa??on, oeil,
						tirer, forme, pr??senter, ajouter, agir, retrouver, chemin, cheveu, offrir,
						plaisir, suite, apprendre, tuer, sang, retourner, rencontrer, sentiment, fleur,
						service, envoyer, table, vite, paix, moyen, dormir, pousser, lit, humain,
						voiture, rappeler, un ??tre, lire, g??n??ral, nature, l'or, pouvoir, joie, tard,
						pr??sident, bouche, changer, essayer, compter, occuper, sens, cri, esp??ce,
						expliquer, cheval, loi, sombre, s??r, ancien, frapper, ministre, travailler,
						propre, obtenir, rentrer, mal, pleurer, r??p??ter, soci??t??, politique, oreille,
						payer, politique, apporter, fen??tre, possible, fortune, compte, champ, manier,
						immense, exister, action, boire, public, gar??on, pareil, bleu, exemple,
						sourire, couleur, coucher, papier, le mal, causer, pi??ce, montagne, le sol,
						oeuvre, cours, raconter, serrer, songer, d??sir, manquer, cour, nommer, bord,
						douleur, conduire, salle, saisir, premier, entier, projet, demeurer, simple,
						??tude, remettre, journal, geste, dispara??tre, battre, toucher, situation,
						oiseau, n??cessaire, si??cle, appara??tre, souffrir, million, prix, groupe,
						centre, malheur, honneur, fermer, accepter, garde, mauvais, tendre (vb),
						na??tre, sauver, probl??me, larme, avancer, chien, peau, reste, traverser,
						nombre, debout, mesure, social, un souvenir, article, vue, couvrir, ??ge,
						gagner, syst??me, long, former, plaire, effort, embrasser, r??ve, oser, passion,
						emp??cher, rapport, refuser, important, d??cider, produire, soldat, l??vre, signe,
						v??rit??, charger, mariage, m??ler, certain, esp??rer, plan, cesser, ressembler,
						dos, marche, souvenir, dame, chanter, conseil, sou, triste, coin, jardin, joli,
						doigt,objet, fer, lendemain, lentement, approcher, prier, train, papa,
						diff??rent, valeur, jeu, ??chapper, glisser, un secret, haut, vieillard, briller,
						docteur, br??ler, terrible, placer, ton, jambe, juger, suffire, endroit, minute,
						atteindre, nuage, pr??sence, fou, ??paule, l??ger, feuille, libert??, journ??e,
						libre, annoncer, avenir, sourire, r??sultat, ??lever, acheter, le pass??, mener,
						pr??parer, h??tel, semaine, for??t, assurer, pur, qualit??, prince, le bien,
						??galement, deviner, m??decin, consid??rer, volont??, seigneur, vert, art, moindre,
						foule, appartenir, ligne, repr??senter, tromper, int??rieur, vendre, beaut??,
						riche, craindre, ??trange, emporter, soin, naturel, hasard, condition, classe,
						voyage, expression, le pr??sent, caract??re, attention, gris, exprimer, rouler,
						faible, poss??der, sc??ne, difficile, r??veiller, foi, aider, d??couvrir, odeur,
						choisir, musique, oncle, ??v??nement, prononcer, village, taire, envie, midi,
						herbe, un vieux, pluie, r??ver, appuyer, ??tendre, un g??n??ral, lutte, trembler,
						r??ponse, gr??ce, espace, habitude, d??fendre, existence, m??moire, cr??er, grave,
						maintenir, verre, campagne, juge, genou, impossible, f??te, indiquer, pr??t,
						promettre, relever, abandonner, ignorer, large, parent, col??re, ??toile, le
						devoir, conscience, accompagner, immobile, adresser, observer, juste,
						puissance, mati??re, sable, s??parer, marier, pr??voir, vivant, accord, hiver,
						retour, autrefois, genre, vif, amener, obliger, acte, image, horizon, ??clairer,
						poursuivre, danger, livrer, r??le, escalier, go??t, b??te, recherche, membre,
						pain, phrase, contenir, le rire, fuir, couler, terme, moyen, police, rocher,
						proposer, tranquille, unique, ??prouver, retenir, type, vin, sup??rieur,
						attacher, voler, sec, entra??ner, justice, ??poque, la somme, passage, science,
						surprendre, c??te, doucement, gauche, faute, ??cole, ensemble, rayon, briser,
						sujet, imaginer, diriger, avis, parvenir, ouvert, p??n??trer, po??te, meilleur,
						paysan, remarquer, chair, ??viter, succ??s, ??le, ??tablir, r??ussir, pencher,
						habiter, entourer, d??clarer, d??tail, arme, r??alit??, confiance, masse, crise,
						??tonner, poste, dresser, durer, faux, fixer, ??norme, principe, direction,
						taille, d??sirer, sant??, ventre, march??, entr??e, puissant, simplement, arracher,
						soutenir, couper, trou, examiner, inconnu, pont, lune, robe, douter, retirer,
						cesse, source, espoir, camarade, dent, connaissance, cou, but, promener, une
						vague, ??l??ment, fil, voie, nez, forcer, particulier, discours, maladie,
						chaleur, gloire, vide, revoir, aide, d??but, ennemi, second, aile, flamme,
						chaise, lourd, sein, v??ritable, toit, remplir, terminer, vaste, nu, poussi??re,
						nord, tenter, ??motion, remonter, r??volution, th????tre, arm??e, court,
						appartement, semblable, installer, haine, un jeune, position, seconde, frais,
						appel, soulever, allumer, imposer, respirer, arri??re, baisser, la droite,
						poitrine, mort, jeunesse, bureau, sac, ??tranger, courage, souffler, jaune,
						page, un ??tranger, miser, rapide, digne, chaud, propos, attirer, pr??ter, clair,
						amuser, occasion, voile, ??clater, importance, quartier, auteur, religion,
						palais, r??unir, traiter, engager, flot, intelligence, un voisin, carte, secret,
						animal, ??t??, tra??ner, cabinet, morceau, employer, capable, souffrance, marquer,
						prouver, importer, titre, d??sert, facile, spectacle, exiger, reposer, d??part,
						fier, danser, demande, saluer, lueur, joue, saint, accorder, pri??re, achever,
						avouer, distinguer, emmener, fonction, aspect, sommeil, ??clat, moiti??, demi,
						calme, contraire, colline, agiter, h??siter, terrain, fin, rare, poids, sonner,
						changement, charge, composer, enlever, poche, rejoindre, son, int??rieur,
						veille, ramener, fruit, complet, ??tudier, partager, croix, suivant, chasser,
						interrompre, ??loigner, tr??sor, compagnie, ??troit, cuisine, r??duire, ??gal,
						empire, nation, ??teindre, recommencer, sauter, plaindre, conversation, soir??e,
						violent, impression, trait, pr??f??rer, r??v??ler, magnifique, d??sespoir, t??moin,
						visite, respect, solitude, subir, prochain, rapporter, un anglais, co??ter,
						r??fl??chir, officier, remercier, d??poser, fauteuil, fumer, affirmer, relation,
						fum??e, convenir, branche, malade, circonstance, ouvrage, compagnon, v??tir,
						exp??rience, port, accomplir, r??soudre, plonger, goutte, chant, d??truire,
						combat, personnage, aventure, int??resser, disposer, absence, machine, cha??ne,
						honte, fait, lisser, faim, plaine, verser, pointe, ob??ir, preuve, ??ternel,
						lutter, pr??tendre, bataille, construire, ??nergie, victime, sauvage, soumettre,
						usage, peser, double, tache, hauteur, troubler, tendre, curiosit??, r??pandre,
						glace, r??sister, prison, ??tage, billet, droit, s??rieux, prot??ger, la rose,
						enfermer, attitude, dur, mode, neuf, crainte, creuser, grandir, enfoncer,
						v??tement, envelopper, vague, pr??venir, violence, inspirer, inutile, content,
						courant, folie, piti??, intention, ramasser, endormir, inventer, trace, toile,
						presser, confier, effacer, reculer, user, nourrir, dangereux, po??sie, sommet,
						remplacer, accultur??, acculturer, africain, africanis??, africaniser,
						alphab??tis??, alphab??tiser, anc??tre, animiste, assimil??, authenticit??, banane,
						bi??re, boisson, boubou, boy, brousse, brun, cabaret, case, charlatan, chicotte,
						chr??tien, cit??, civilisation, civilis??, clan, colonisation, coutume, coutumier,
						culture, d??frisage, d??friser, d??mocratie, deuil, dot, drapeau, ??cole,
						??ducation, ??lections, ethnie, europ??en, ??volu??, expatri??, f??tiche, fun??railles,
						gouverneur, gris-gris, gu??risseur, haricot, indig??ne, intellectuel, justice,
						langue, lettr??, machette, maman, mangue, manioc, marabout, masque, m??re, m??tis,
						mission, missionnaire, mixte, musulman, national, occidental, occidentalis??,
						occidentaliser, pagne, palabre, paludisme, papaye, patois, piste, sant??, sexe,
						sida, soeur, sorcier, symbole, tambour, tam-tam, teint, t??le, tradition,
						traditionnel, tribu, universit??, vache, vieille, voter.</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<!-- / main body -->
				<div class="clear"></div>
		</main>
	</div>
	<div class="bg-dictionary wrapper row3">
		<section class="hoc container clear counter-section">
			<div class="counter-card">
				<span><i class="fas fa-users"></i></span>
				<div class="number">3500</div>
				<div class="desc"><?php echo $lang->dict->card[0]->{$_SESSION["lang"]}; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-history"></i></span>
				<div class="number">25 ??????</div>
				<div class="desc"><?php echo $lang->dict->card[1]->{$_SESSION["lang"]}; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-venus-mars"></i></span>
				<div class="number">45%/55%</div>
				<div class="desc"><?php echo $lang->dict->card[2]->{$_SESSION["lang"]}; ?><br />&nbsp;</div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-pencil-alt"></i></span>
				<div class="number">65432</div>
				<div class="desc"><?php echo $lang->dict->card[3]->{$_SESSION["lang"]}; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-book"></i></span>
				<div class="number">1500</div>
				<div class="desc"><?php echo $lang->dict->card[4]->{$_SESSION["lang"]}; ?></div>
			</div>
		</section>
	</div>
	<!-- ################################################################################################ -->
	<?php include "includes/footer.php"; ?>
</body>

</html>