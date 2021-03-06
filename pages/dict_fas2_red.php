<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang->path->home->{$_SESSION["lang"]}; ?></a></li>
				<li><a href="#"><?php echo $lang->dict->fas2_red->{$_SESSION["lang"]}; ?></a></li>
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
								<li><a href="./search/fas2_red.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas2_red.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></a>
						<ul>
								<li><a href="./search/fas2_red.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas2_red.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas2_red.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
								<li><a href="./search/fas2_red.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></a>
							<ul>
								<li><a href="./search/fas2_red.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
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
					<?php include __DIR__."\lang\\".$_SESSION["lang"]."\\".$lang->fas2_red->about->link; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang->dict->stim_title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->fas2_red->stim->{$_SESSION["lang"]}; ?></p>
					<p>abandonner, absence, accepter, accompagner, accord, accorder, acheter, acte, action, adresser, affaire,
						affirmer, ??ge, agir, aide, aider, aimer, air, ajouter, aller, amener, ami, amour, ancien, animal, ann??e,
						annoncer, apparaitre, appartenir, appel, appeler, apporter, apprendre, appuyer, argent, arme, arm??e,
						arr??ter, arriver, article, aspect, assurer, atteindre, attendre, attention, attirer, attitude, auteur,
						avancer, avenir, avis, avoir, baisser, bas, battre, beau, besoin, bien, blanc, bon, bord, bout, bureau, but,
						cacher, campagne, capable, caract??re, carte, cas, cause, causer, centre, certain, cesser, chaine, chambre,
						champ, changement, changer, charge, charger, chef, chemin, cher, chercher, choisir, chose, circonstance,
						clair, classe, c??ur, combat, commencer, compagnie, complet, composer, comprendre, compte, compter,
						condition, conduire, confiance, confier, connaissance, connaitre, conscience, conseil, consid??rer,
						construire, contenir, continuer, contraire, convenir, corps, c??t??, coup, couper, courant, cours, court,
						couter, couvrir, craindre, cr??er, crise, croire, culture, danger, dangereux, d??but, d??cider, d??clarer,
						d??couvrir, d??fendre, demande, demander, demeurer, demi, d??part, d??poser, dernier, d??tail, d??truire, devenir,
						devoir, difficile, dire, direction, diriger, discours, disparaitre, disposer, donner, double, doute, droit,
						dur, durer, eau, ??chapper, ??couter, ??crire, ??ducation, effet, effort, ??gal, ??lection, ??l??ment, ??lever,
						emp??cher, employer, emporter, endroit, ??nergie, enfant, engager, ??norme, ensemble, entendre, entier,
						entrainer, entr??e, entrer, envoyer, ??poque, espace, esp??ce, esp??rer, espoir, esprit, essayer, ??tablir, ??tat,
						??t??, ??tendre, ??tranger, ??tre, ??tude, europ??en, ??v??nement, ??viter, exemple, exiger, existence, exister,
						exp??rience, expliquer, expression, exprimer, face, facile, fa??on, faible, faire, fait, falloir, famille,
						faute, faux, femme, fermer, feu, fille, fils, fin, finir, fixer, fois, fonction, fond, force, forcer, forme,
						former, fort, frais, franc, fran??ais, frapper, fr??re, fruit, gagner, garde, garder, gauche, g??n??ral, genre,
						gens, gouvernement, grand, grave, gros, groupe, guerre, habiter, haut, heure, heureux, histoire, homme,
						honneur, humain, id??e, ignorer, image, imaginer, importance, important, importer, imposer, impossible,
						impression, indiquer, installer, instant, intention, int??resser, int??r??t, int??rieur, jeu, jeune, jouer,
						jour, journal, journ??e, juger, juste, justice, langue, large, le pr??sent, lettre, lever, libert??, libre,
						lieu, ligne, lire, livre, loi, long, or, lourd, lumi??re, lutte, lutter, main, maintenir, maison, maitre,
						mal, malade, manquer, marche, march??, mati??re, matin, mauvais, m??decin, membre, m??moire, mener, mer, m??re,
						mesure, mettre, milieu, million, ministre, minute, mission, mode, moindre, mois, moiti??, moment, monde,
						monter, montrer, mort, mot, mourir, mouvement, moyen, musique, naitre, nation, national, nature, naturel,
						n??cessaire, neuf, noir, nom, nombre, nommer, nord, nouveau, objet, obliger, observer, obtenir, occasion,
						??il, ??uvre, offrir, ordre, oublier, ouvert, ouvrir, page, paix, papier, paraitre, parent, parler, parole,
						part, partager, parti, particulier, partie, partir, parvenir, passage, pass??, passer, pauvre, payer, pays,
						peine, penser, perdre, p??re, permettre, personne, petit, peuple, peur, pi??ce, pied, place, placer, plaire,
						plaisir, plein, poids, point, police, politique, porte, porter, poser, position, poss??der, possible, poste,
						poursuivre, pousser, pouvoir, pr??f??rer, premier, prendre, pr??parer, pr??sence, pr??sent, pr??senter, pr??sident,
						pr??t, pr??tendre, pr??ter, preuve, pr??voir, principe, prison, prix, probl??me, prochain, produire, profond,
						projet, promettre, prononcer, propos, proposer, propre, prot??ger, prouver, public, puissance, qualit??,
						quartier, question, quitter, raconter, raison, ramener, rapide, rappeler, rapport, rapporter, r??alit??,
						recherche, reconnaitre, r??duire, r??fl??chir, refuser, regarder, rejoindre, relation, relever, remarquer,
						remettre, remonter, remplacer, remplir, rencontrer, rendre, rentrer, r??p??ter, r??pondre, r??ponse, reposer,
						reprendre, r??soudre, respect, reste, rester, r??sultat, retenir, retirer, retour, retourner, retrouver,
						r??unir, r??ussir, r??v??ler, revenir, riche, r??le, rouge, route, rue, saisir, salle, sang, sant??, savoir,
						sc??ne, science, second, secret, sein, semaine, sembler, sens, sentiment, sentir, s??parer, s??rieux, service,
						servir, seul, si??cle, signe, simple, simplement, situation, social, soci??t??, soin, soir, soldat, solution,
						somme, sorte, sortir, souffrir, soumettre, source, soutenir, souvenir, subir, succ??s, suffire, suite,
						suivant, suivre, sujet, sup??rieur, s??r, surprendre, syst??me, table, t??che, t??moin, temps, tendre, tenir,
						tenter, terme, terminer, terrain, terre, t??te, tirer, titre, tomber, ton, toucher, tour, tourner, train,
						traiter, travail, travailler, travers, traverser, trouver, tuer, type, unique, universit??, usage, valeur,
						vaste, vendre, v??ritable, v??rit??, vert, victime, vie, vieux, vif, ville, violence, violent, visite, vivant,
						vivre, voie, voir, voisin, voiture, voix, volont??, vouloir, voyage, vrai, vue</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang->dict->search_direct->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_direct->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas2_red.php?method=dir&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas2_red.php?method=dir&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang->dict->search_invert->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_invert->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas2_red.php?method=inv&num=0"><?php echo $lang->dict->search_method->letter->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas2_red.php?method=inv&num=1"><?php echo $lang->dict->search_method->word->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas2_red.php?method=inv&num=2"><?php echo $lang->dict->search_method->stim->{$_SESSION["lang"]}; ?></a></li>
						<li><a href="./search/fas2_red.php?method=inv&num=3"><?php echo $lang->dict->search_method->react->{$_SESSION["lang"]}; ?></a></li>
					</ul>
				</div>
				<div id="indiv_quest">
					<h2><?php echo $lang->dict->search_questionnaire->title->{$_SESSION["lang"]}; ?></h2>
					<p><?php echo $lang->dict->search_questionnaire->description->{$_SESSION["lang"]}; ?></p>
					<ul>
						<li><a href="./search/fas2_red.php?method=que&num=0"><?php echo $lang->dict->search_method->questionnaires->{$_SESSION["lang"]}; ?></a></li>
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