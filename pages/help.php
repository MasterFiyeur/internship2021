<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang["path"]["home"]; ?></a></li>
				<li><a href="#"><?php echo $lang["navbar"]["help"]; ?></a></li>
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
						<li><a href="#fas"><?php echo $lang["dict"]["fas"]; ?></a>
							<ul>
								<li><a href="#fas_direct"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<li><a href="#fas_invert"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
								<li><a href="#fas_questionnaire"><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></a></li>
							</ul>
						</li>
						<li><a href="#sanf"><?php echo $lang["dict"]["sanf"]; ?></a>
							<ul>
								<li><a href="#sanf_direct"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<li><a href="#sanf_invert"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
							</ul>
						</li>
						<li><a href="#sanfn"><?php echo $lang["dict"]["sanfn"]; ?></a>
							<ul>
								<li><a href="#sanfn_direct"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<li><a href="#sanfn_invert"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
							</ul>
						</li>
						<li><a href="#fasn"><?php echo $lang["dict"]["fasn"]; ?></a>
							<ul>
								<li><a href="#fasn_direct"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<li><a href="#fasn_invert"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
								<li><a href="#fasn_questionnaire"><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></a></li>
							</ul>
						</li>
						<li><a href="#fas1"><?php echo $lang["dict"]["fas1_red"]; ?></a>
							<ul>
								<li><a href="#fas1_direct"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<li><a href="#fas1_invert"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
								<li><a href="#fas1_questionnaire"><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></a></li>
							</ul>
						</li>
						<li><a href="#fas2"><?php echo $lang["dict"]["fas2_red"]; ?></a>
							<ul>
								<li><a href="#fas2_direct"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<li><a href="#fas2_invert"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
								<li><a href="#fas2_questionnaire"><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang["pages"]["title"]; ?></h1>
				<?php echo $lang["help"]["intro"]; ?>
				<div id="fas">
					<h2><b><?php echo $lang["navbar"]["fas"]; ?></b></h2>
					<div id="fas_direct">
						<h3><?php echo $lang["dict"]["search_direct"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas"]["direct"]; ?>
					</div>
					<div id="fas_invert">
						<h3><?php echo $lang["dict"]["search_invert"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas"]["invert"]; ?>
					</div>
					<div id="fas_questionnaire">
						<h3><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas"]["questionnaire"]; ?>
					</div>
				</div>
				<div id="sanf">
					<h2><b><?php echo $lang["navbar"]["sanf"]; ?></b></h2>
					<div id="sanf_direct">
						<h3><?php echo $lang["dict"]["search_direct"]["title"]; ?></h3>
						<?php echo $lang["help"]["sanf"]["direct"]; ?>
					</div>
					<div id="sanf_invert">
						<h3><?php echo $lang["dict"]["search_invert"]["title"]; ?></h3>
						<?php echo $lang["help"]["sanf"]["invert"]; ?>
					</div>
				</div>
				<div id="sanfn">
					<h2><b><?php echo $lang["navbar"]["sanfn"]; ?></b></h2>
					<div id="sanfn_direct">
						<h3><?php echo $lang["dict"]["search_direct"]["title"]; ?></h3>
						<?php echo $lang["help"]["sanfn"]["direct"]; ?>
					</div>
					<div id="sanfn_invert">
						<h3><?php echo $lang["dict"]["search_invert"]["title"]; ?></h3>
						<?php echo $lang["help"]["sanfn"]["invert"]; ?>
					</div>
				</div>
				<div id="fasn">
					<h2><b><?php echo $lang["navbar"]["fasn"]; ?></b></h2>
					<div id="fasn_direct">
						<h3><?php echo $lang["dict"]["search_direct"]["title"]; ?></h3>
						<?php echo $lang["help"]["fasn"]["direct"]; ?>
					</div>
					<div id="fasn_invert">
						<h3><?php echo $lang["dict"]["search_invert"]["title"]; ?></h3>
						<?php echo $lang["help"]["fasn"]["invert"]; ?>
					</div>
					<div id="fasn_questionnaire">
						<h3><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></h3>
						<?php echo $lang["help"]["fasn"]["questionnaire"]; ?>
					</div>
				</div>
				<div id="fas1">
					<h2><b><?php echo $lang["navbar"]["fas1_red"]; ?></b></h2>
					<div id="fas1_direct">
						<h3><?php echo $lang["dict"]["search_direct"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas1_red"]["direct"]; ?>
					</div>
					<div id="fas1_invert">
						<h3><?php echo $lang["dict"]["search_invert"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas1_red"]["invert"]; ?>
					</div>
					<div id="fas1_questionnaire">
						<h3><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas1_red"]["questionnaire"]; ?>
					</div>
				</div>
				<div id="fas2">
					<h2><b><?php echo $lang["navbar"]["fas2_red"]; ?></b></h2>
					<div id="fas2_direct">
						<h3><?php echo $lang["dict"]["search_direct"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas2_red"]["direct"]; ?>
					</div>
					<div id="fas2_invert">
						<h3><?php echo $lang["dict"]["search_invert"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas2_red"]["invert"]; ?>
					</div>
					<div id="fas2_questionnaire">
						<h3><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></h3>
						<?php echo $lang["help"]["fas2_red"]["questionnaire"]; ?>
					</div>
				</div>
				<!-- / main body -->
				<div class="clear"></div>
		</main>
	</div>
	<?php include "includes/footer.php"; ?>
</body>

</html>