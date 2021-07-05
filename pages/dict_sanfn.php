<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang["path"]["home"]; ?></a></li>
				<li><a href="#"><?php echo $lang["dict"]["sanfn"]; ?></a></li>
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
						<li><a href="#about"><?php echo $lang["dict"]["about_title"]; ?></a></li>
						<li><a href="#stim"><?php echo $lang["dict"]["stim_title"]; ?></a></li>
						<li><a class="sdb_section"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a>
							<ul>
								<li><a href="./search/sanfn.php?method=dir&num=0"><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
								<li><a href="./search/sanfn.php?method=dir&num=1"><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a>
						<ul>
								<li><a href="./search/sanfn.php?method=inv&num=0"><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
								<li><a href="./search/sanfn.php?method=inv&num=1"><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
								<li><a href="./search/sanfn.php?method=inv&num=2"><?php echo $lang["dict"]["search_method"]["stim"]; ?></a></li>
								<li><a href="./search/sanfn.php?method=inv&num=3"><?php echo $lang["dict"]["search_method"]["frequency"]; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang["pages"]["title"]; ?></h1>
				<div id=about>
					<h2><?php echo $lang["dict"]["about_title"]; ?>е</h2>
					<?php echo $lang["sanfn"]["about"]; ?>
				</div>
				<div id="stim">
					<h2><?php echo $lang["dict"]["stim_title"]; ?></h2>
					<p><?php echo $lang["sanfn"]["stim"]; ?></p>
					<p>être, avoir, faire, dire, pouvoir, aller, voir, bien, homme, mari, vouloir, femme,
						venir, grand, devoir, jour, prendre, petit, mer, trouver, donner, temps, parler,
						main, chose, vie, savoir, yeux, passer, regarder, aimer, heure, croire, monde,
						enfant, fois, demander , jeune , moment, rester, répondre, tête, père, fille,
						entendre, bon, cœur, an, terre, dieu, monsieur, voix, penser, arriver, maison,
						coup, beau, connaître, devenir, air, mot, nuit, sentir, eau, vieux, sembler, tenir,
						comprendre, rendre, attendre, sortir, ami, amour, pied, gens, vivre, reprendre,
						entrer, porter, pays, ciel, frère, regard, chercher, âme, mort, revenir, noir,
						nouveau, ville, rue, appeler, soir, mourir, partir, esprit, soleil , corps, blanc, mal</p>
				</div>
				<div id="dict_direct">
					<h2><?php echo $lang["dict"]["search_direct"]["title"]; ?></h2>
					<p><?php echo $lang["dict"]["search_direct"]["description"]; ?></p>
					<ul>
						<li><a href="./search/sanfn.php?method=dir&num=0"><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
						<li><a href="./search/sanfn.php?method=dir&num=1"><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
					</ul>
				</div>
				<div id="dict_inv">
					<h2><?php echo $lang["dict"]["search_invert"]["title"]; ?></h2>
					<p><?php echo $lang["dict"]["search_invert"]["description"]; ?></p>
					<ul>
						<li><a href="./search/sanfn.php?method=inv&num=0"><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
						<li><a href="./search/sanfn.php?method=inv&num=1"><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
						<li><a href="./search/sanfn.php?method=inv&num=2"><?php echo $lang["dict"]["search_method"]["stim"]; ?></a></li>
						<li><a href="./search/sanfn.php?method=inv&num=3"><?php echo $lang["dict"]["search_method"]["frequency"]; ?></a></li>
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
				<div class="desc"><?php echo $lang["dict"]["card"][0]; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-history"></i></span>
				<div class="number">25 лет</div>
				<div class="desc"><?php echo $lang["dict"]["card"][1]; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-venus-mars"></i></span>
				<div class="number">45%/55%</div>
				<div class="desc"><?php echo $lang["dict"]["card"][2]; ?><br />&nbsp;</div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-pencil-alt"></i></span>
				<div class="number">65432</div>
				<div class="desc"><?php echo $lang["dict"]["card"][3]; ?></div>
			</div>
			<div class="counter-card">
				<span><i class="fas fa-book"></i></span>
				<div class="number">1500</div>
				<div class="desc"><?php echo $lang["dict"]["card"][4]; ?></div>
			</div>
		</section>
	</div>
	<!-- ################################################################################################ -->
	<?php include "includes/footer.php"; ?>
</body>

</html>