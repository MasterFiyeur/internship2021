<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
	<?php include "includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../index.php"><?php echo $lang["path"]["home"]; ?></a></li>
				<li><a href="#"><?php echo $lang["navbar"]["authors"]; ?></a></li>
			</ul>
		</div>
	</div>
	<!-- ################################################################################################ -->
	<div class="wrapper row3">
		<main class="hoc container clear">
			<!-- main body -->
			<div class="content">
				<div class="authors_container group btmspace-50">
					<div class="authors">
						<img class="borderedbox inspace-5" src="../images/Debrenn.png" alt="Debrenn">
						<div class="title text-center"><b><?php echo $lang["authors"]["authors1"]["name"]; ?></b></div>
						<div class="text-center">
							<?php echo $lang["authors"]["authors1"]["description"]; ?>
						</div>
						<a href="mailto:micheledebrenne@gmail.com">micheledebrenne@gmail.com</a>
					</div>
					<div class="authors">
						<img class="borderedbox inspace-5" src="../images/Ufimtseva.png" alt="Ufimtseva">
						<div class="title text-center"><b><?php echo $lang["authors"]["authors2"]["name"]; ?></b></div>
						<div class="text-center">
							<?php echo $lang["authors"]["authors2"]["description"]; ?>
						</div>
					</div>
					<div class="authors">
						<img class="borderedbox inspace-5" src="../images/Romanenko.png" alt="Romanenko">
						<div class="title text-center"><b><?php echo $lang["authors"]["authors3"]["name"]; ?></b></div>
						<div class="text-center">
							<?php echo $lang["authors"]["authors3"]["description"]; ?>
						</div>
						<a href="mailto:arom@nsu.ru">arom@nsu.ru</a>
					</div>
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