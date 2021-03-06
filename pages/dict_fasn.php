<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->fasn->{$_SESSION["lang"]}; ?></a></li>
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
								<li><a href="./search/fasn.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fasn.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fasn.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
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
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->fasn->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fasn->stim->{$_SESSION["lang"]}; ?></p>
					<p>abandonner, absence, absolument, accepter, acc??s, accompagner, accord, accorder, accueillir,
						accuser, acheter, acqu??rir, acte, action, activit??, actuel, admettre, administration, adopter,
						adresser, affaire, affirmer, ??ge, agent, agir, aide, aider, aimer, air, ajouter, allemand,
						aller, am??liorer, amener, am??ricain, ami, amour, ancien, anglais, animal, ann??e, annoncer,
						apparaitre, appartenir, appel, appeler, application, appliquer, apporter, appr??cier, apprendre,
						appuyer, argent, arme, arm??e, arr??ter, arriv??e, arriver, article, aspect, assembl??e, assister,
						association, assurer, attaquer, atteindre, attendre, attente, attention, attirer, attitude,
						augmenter, autant, auteur, autoriser, autorit??, avance, avancer, avantage, avenir, avis, avocat,
						avoir, avril, baisser, bande, banque, bas, base, battre, beau, besoin, bien, blanc, bon, bord,
						bout, bref, budget, bureau, but, cacher, cadre, camp, campagne, canadien, capable, capacit??,
						capital, caract??re, carte, cas, cause, causer, central, centre, certain, cesser, chaine,
						chambre, champ, chance, changement, changer, charge, charger, chef, chemin, cher, chercher,
						chiffre, choisir, choix, chose, circonstance, citer, citoyen, civil, clair, classe, client,
						c??ur, coll??gue, combat, combattre, comit??, commander, commencer, commerce, commercial,
						commission, commun, communaut??, commune, communication, compagnie, complet, complexe, comporter,
						composer, comprendre, compte, compter, concentrer, concerner, concevoir, conclure, concurrence,
						condamner, condition, conduire, conf??rence, confiance, confier, confirmer, conflit,
						connaissance, connaitre, consacrer, conscience, conseil, conseiller, cons??quence, conserver,
						consid??rer, consister, constater, constituer, construction, construire, contact, contenir,
						contenter, continuer, contraire, contrat, contribuer, contr??le, contr??ler, convaincre, convenir,
						corps, c??t??, coup, couper, couple, courant, cours, court, cout, couter, couvrir, craindre,
						cr??ation, cr??dit, cr??er, crime, crise, critique, croire, croissance, culture, danger, dangereux,
						date, d??bat, d??but, d??cembre, d??cider, d??cision, d??claration, d??clarer, d??couvrir, d??crire,
						d??fendre, d??fense, d??finir, demande, demander, demeurer, demi, d??part, d??passer, d??pendre,
						d??placer, d??poser, d??put??, dernier, d??signer, destiner, d??tail, d??terminer, d??truire, deuxi??me,
						d??veloppement, d??velopper, devenir, devoir, diff??rence, difficile, difficult??, dire, direct,
						directeur, direction, diriger, discours, discussion, discuter, disparaitre, disposer,
						disposition, distribuer, divers, document, dollar, domaine, dommage, donn??e, donner, dossier,
						double, doubler, doute, droit, dur, durer, eau, ??change, ??chapper, ??chec, ??cole, ??conomie,
						??conomique, ??couter, ??crire, ??ducation, effectuer, effet, effort, ??gal, ??gard, ??lection,
						??l??ment, ??l??ve, ??lever, ??mission, emp??cher, emploi, employer, emporter, emprunter, endroit,
						??nergie, enfant, engagement, engager, ??norme, enqu??te, ensemble, entendre, entier, entrainer,
						entr??e, entreprendre, entreprise, entrer, entretenir, envers, environ, environnement, envisager,
						envoyer, ??poque, ??quipe, erreur, espace, esp??ce, esp??rer, espoir, esprit, essayer, essentiel,
						estimer, ??tablir, ??tablissement, ??tape, ??tat, ??t??, ??tendre, ??tranger, ??tre, ??tude, ??tudiant,
						??tudier, europ??en, ??v??nement, ??viter, ??voquer, exact, examiner, exception, exemple, exercer,
						exiger, existence, exister, exp??rience, expliquer, exposer, expression, exprimer, ext??rieur,
						face, facile, fa??on, faible, faire, fait, falloir, famille, faute, faux, faveur, f??d??ral, femme,
						ferme, fermer, feu, f??vrier, figurer, fille, film, fils, fin, financier, finir, fixer, fois,
						fonction, fonctionner, fond, fonder, fonds, force, forcer, formation, forme, former, fort,
						fournir, frais, franc, fran??ais, frapper, fr??re, fronti??re, fruit, futur, gagner, garde, garder,
						gauche, g??n??ral, genre, gens, gestion, global, gouvernement, grand, grave, gros, groupe, guerre,
						habiter, haut, heure, heureux, histoire, historique, homme, honneur, honorable, humain, id??e,
						ignorer, image, imaginer, imm??diatement, impliquer, importance, important, importer, imposer,
						impossible, impression, ind??pendant, indiquer, individu, industrie, industriel, influence,
						information, inscrire, insister, installer, instant, institution, intention, interdire,
						int??resser, int??r??t, int??rieur, international, interroger, intervenir, intervention,
						investissement, inviter, janvier, jeu, jeudi, jeune, jouer, jour, journal, journ??e, jugement,
						juger, juin, juste, justice, justifier, laisser, lancer, langue, large, lecture, lettre, lever,
						lib??ral, lib??rer, libert??, libre, lien, lier, lieu, ligne, limite, limiter, lire, liste, livre,
						livrer, local, logique, loi, long, lourd, lumi??re, lundi, lutte, lutter, mai, main, maintenir,
						maison, maitre, majorit??, mal, malade, malgr??, mani??re, manifester, manque, manquer, march??,
						marche, mardi, marquer, mars, mat??riel, mati??re, matin, mauvais, maximum, m??decin, membre,
						m??moire, menacer, mener, mer, mercredi, m??re, m??riter, message, mesure, mesurer, m??thode,
						mettre, milieu, militaire, milliard, millier, million, minist??re, ministre, minute, mise,
						mission, mode, mod??le, modifier, moindre, mois, moiti??, moment, monde, mondial, monter, montrer,
						mort, mot, moteur, motion, mourir, mouvement, moyen, musique, naitre, nation, national, nature,
						naturel, n??cessaire, n??cessit??, n??gociation, neuf, niveau, noir, nom, nombre, nombreux, nommer,
						nord, normal, note, noter, nouveau, novembre, nucl??aire, nul, num??ro, objectif, objet, obliger,
						observer, obtenir, occasion, occuper, octobre, ??il, ??uvre, officiel, offrir, op??ration, opinion,
						opposer, opposition, or, ordre, organisation, organiser, origine, oublier, ouvert, ouvrir, page,
						paix, papier, paraitre, parent, parlement, parler, parole, part, partager, partenaire, parti,
						participer, particulier, partie, partir, parvenir, passage, pass??, passer, pauvre, payer, pays,
						peine, penser, perdre, p??re, p??riode, permettre, personne, personnel, perte, petit, peuple,
						peur, physique, pi??ce, pied, place, placer, plaire, plaisir, plein, poids, point, police,
						politique, population, porte, port??e, porter, poser, positif, position, poss??der, possibilit??,
						possible, poste, poursuivre, pousser, pouvoir, pratique, pr??c??dent, pr??cis, pr??ciser, pr??f??rer,
						premier, prendre, pr??parer, pr??sence, pr??sent, pr??senter, pr??senter, pr??sident, presque, presse,
						pression, pr??t, pr??tendre, pr??ter, preuve, pr??voir, principal, principe, prise, prison, priver,
						prix, probl??me, proc??der, proc??dure, processus, prochain, proche, production, produire, produit,
						professeur, professionnel, profit, profiter, profond, programme, progr??s, projet, promesse,
						promettre, prononcer, propos, proposer, proposition, propre, protection, prot??ger, prouver,
						province, provoquer, public, publier, puisque, puissance, qualit??, quartier, question, quitter,
						raconter, raison, ramener, rapide, rappeler, rapport, rapporter, r??action, r??agir, r??aliser,
						r??alit??, r??cent, recevoir, recherche, recommandation, reconnaitre, r??duire, r??el, r??fl??chir,
						r??forme, refuser, regarder, r??gime, r??gion, r??gional, r??gle, r??glement, r??gler, regretter,
						rejeter, rejoindre, relatif, relation, relever, remarquer, remettre, remonter, remplacer,
						remplir, rencontre, rencontrer, rendre, rentrer, renvoyer, r??p??ter, r??pondre, r??ponse, reposer,
						reprendre, reprise, r??publique, r??seau, r??serve, r??server, r??soudre, respect, respecter,
						responsabilit??, responsable, ressource, reste, rester, r??sultat, retenir, retirer, retour,
						retourner, retraite, retrouver, r??union, r??unir, r??ussir, r??v??ler, revenir, revenu, riche, rien,
						risque, risquer, r??le, rouge, route, rue, saisir, salaire, salle, sang, sant??, satisfaire,
						savoir, sc??ne, science, scientifique, second, secret, secr??taire, secteur, s??curit??, sein,
						semaine, sembler, s??nateur, sens, sensible, sentiment, sentir, s??parer, septembre, s??rie,
						s??rieux, service, servir, seul, si??cle, signal, signe, signer, signifier, simple, simplement,
						situation, situer, social, soci??t??, soin, soir, soldat, solution, somme, sorte, sortie, sortir,
						souffrir, souhaiter, souligner, soumettre, source, soutenir, souvenir, sp??cial, structure,
						subir, succ??s, suffire, suite, suivant, suivre, sujet, sup??rieur, supposer, s??r, surprendre,
						susciter, syst??me, table, t??che, tandis, taux, technique, t??l??vision, t??moin, temps, tendance,
						tendre, tenir, tenter, terme, terminer, terrain, terre, territoire, t??te, texte, tirer, titre,
						tomber, ton, t??t, total, toucher, tour, tourner, traduire, train, traitement, traiter,
						transformer, transport, travail, travailler, travers, traverser, troisi??me, trouver, tuer, type,
						union, unique, unit??, universit??, usage, utile, utiliser, valeur, valoir, vaste, vendre,
						vendredi, vente, v??ritable, v??rit??, version, vert, victime, vie, vieux, vif, ville, violence,
						violent, viser, visite, vitesse, vivant, vivre, voie, voir, voisin, voiture, voix, volont??,
						vote, vouloir, voyage, vrai, vue, zone</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fasn.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fasn.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fasn.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fasn.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
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