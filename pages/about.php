<!DOCTYPE html>
<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang["path"]["home"]; ?></a></li>
				<li><a href="#"><?php echo $lang["navbar"]["dictionaries"]; ?></a></li>
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
						<li><a href="#dict1"><?php echo $lang["dict"]["fas"]; ?></a></li>
						<li><a href="#dict2"><?php echo $lang["dict"]["sanf"]; ?></a></li>
						<li><a href="#dict3"><?php echo $lang["dict"]["sanfn"]; ?></a></li>
						<li><a href="#dict4"><?php echo $lang["dict"]["fasn"]; ?></a></li>
						<li><a href="#dict5"><?php echo $lang["dict"]["fas1_red"]; ?></a></li>
						<li><a href="#dict6"><?php echo $lang["dict"]["fas2_red"]; ?></a></li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang["pages"]["title"]; ?></h1>
				<div id="dict1">
					<h2><a href="./dict_fas.php"><?php echo $lang["about"]["fas"]["title"]; ?></a></h2>
					<p><?php echo $lang["about"]["fas"]["description"]; ?></p>
				</div>
				<div id="dict2">
					<h2><a href="./dict_sanf.php"><?php echo $lang["about"]["sanf"]["title"]; ?></a></h2>
					<p><?php echo $lang["about"]["sanf"]["description"]; ?></p>
				</div>
				<div id="dict3">
					<h2><a href="./dict_sanfn.php"><?php echo $lang["about"]["sanfn"]["title"]; ?></a></h2>
					<p><?php echo $lang["about"]["sanfn"]["description"]; ?></p>
				</div>
				<div id="dict4">
					<h2><a href="./dict_fasn.php"><?php echo $lang["about"]["fasn"]["title"]; ?></a></h2>
					<p><?php echo $lang["about"]["fasn"]["description"]; ?>.</p>
				</div>
				<div id="dict5">
					<h2><a href="./dict_fas1_red.php"><?php echo $lang["about"]["fas1_red"]["title"]; ?></a></h2>
					<p><?php echo $lang["about"]["fas1_red"]["description"]; ?></p>
				</div>
				<div id="dict6">
					<h2><a href="./dict_fas2_red.php"><?php echo $lang["about"]["fas2_red"]["title"]; ?></a></h2>
					<p><?php echo $lang["about"]["fas2_red"]["description"]; ?></p>
				</div>
			</div>
			<!-- / main body -->
			<div class="clear"></div>
		</main>
	</div>
	<!-- ################################################################################################ -->
	<?php include "includes/footer.php"; ?>
</body>

</html>
