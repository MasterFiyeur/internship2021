<!DOCTYPE html>
<?php include "../includes/header.php"; ?>

<body id="top">
	<?php include "../includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../../index.php"><?php echo $lang["path"]["home"]; ?></a></li>
				<li><a href="../dict_fasn.php"><?php echo $lang["dict"]["fasn"]; ?></a></li>
				<?php
					/* Path depending of the search method used */
					if(isset($_GET["method"]) && isset($_GET["num"])){
						switch ($_GET["method"]) {
							case 'inv':
								?> 
								<li><a><?php echo $lang["dict"]["search_invert"]["title"]; ?></a></li>
								<?php
								switch ($_GET["num"]) {
									case '1':
										?>
										<li><a><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
										<?php
										break;
									case '2':
										?>
										<li><a><?php echo $lang["dict"]["search_method"]["stim"]; ?></a></li>							
										<?php
										break;
									case '3':
										?>
										<li><a><?php echo $lang["dict"]["search_method"]["react"]; ?></a></li>							
										<?php
										break;
									default:
										?>
										<li><a><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>							
										<?php
										break;
								}
								break;
							case 'que':
								?>
								<li><a><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></a></li>
								<li><a><?php echo $lang["dict"]["search_method"]["questionnaires"]; ?></a></li>
								<?php
								break;
							default:
								?> 
								<li><a><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
								<?php
								switch ($_GET["num"]) {
									case '1':
										?>
										<li><a><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>							
										<?php
										break;
									default:
										?>
										<li><a><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>							
										<?php
										break;
								}
								break;
						}
					}else{
					?>
						<li><a><?php echo $lang["dict"]["search_direct"]["title"]; ?></a></li>
						<li><a><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
					<?php
					}
				?>
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
						<li><a href="../dict_fasn.php#about"><?php echo $lang["dict"]["about_title"]; ?></a></li>
						<li><a href="../dict_fasn.php#stim"><?php echo $lang["dict"]["stim_title"]; ?></a></li>
						<li><a class="sdb_section"><?php echo $lang["dict"]["search_direct"]["title"]; ?></a>
							<ul>
								<li><a href="?method=dir&num=0"><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
								<li><a href="?method=dir&num=1"><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang["dict"]["search_invert"]["title"]; ?></a>
							<ul>
								<li><a href="?method=inv&num=0"><?php echo $lang["dict"]["search_method"]["letter"]; ?></a></li>
								<li><a href="?method=inv&num=1"><?php echo $lang["dict"]["search_method"]["word"]; ?></a></li>
								<li><a href="?method=inv&num=2"><?php echo $lang["dict"]["search_method"]["stim"]; ?></a></li>
								<li><a href="?method=inv&num=3"><?php echo $lang["dict"]["search_method"]["react"]; ?></a></li>
							</ul>
						</li>
						<li><a class="sdb_section"><?php echo $lang["dict"]["search_questionnaire"]["title"]; ?></a>
							<ul>
								<li><a href="?method=que&num=0"><?php echo $lang["dict"]["search_method"]["questionnaires"]; ?></a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1><?php echo $lang["pages"]["title"]; ?></h1>
				<div id="result">
					<h2><?php echo $lang["search"]["search"]; ?></h2>
					<!-- Filter -->
					<?php
						/* Show filter for direct or invert search */
						if(isset($_GET["method"]) && in_array($_GET["method"],array("dir","inv"))){
							include "../includes/filter.php";
						}
					?>
					<?php 
						/* Show the good search method thanks to GET arguments */
						if(isset($_GET["method"]) && isset($_GET["num"])){
							switch ($_GET["method"]) {
								case 'inv':
									switch ($_GET["num"]) {
										case '1':
											?>
											<div id="word_search">
												<div class="input_container">
												<input type="text" class="input_search" id="input_searchDirect" placeholder=" ">
												<label for=""><?php echo $lang["dict"]["stim_title"]; ?></label>
												</div>
												<button class="btn-search"
												onclick="printRes(document.getElementById('input_searchDirect').value)"><?php echo $lang["search"]["search"]; ?></button>
											</div>
											<?php 
											break;
										case '2':
											?>
											<div id="stimulus_search">
												<div class="letter_container">
												<span onclick="printByStimulus();"><?php echo $lang["search"]["all"]; ?></span>
												<span onclick="printByStimulus();">350-200</span>
												<span onclick="printByStimulus();">199-150</span>
												<span onclick="printByStimulus();">149-100</span>
												<span onclick="printByStimulus();">99-50</span>
												<span onclick="printByStimulus();">49-1</span>
												</div>
											</div>
											<?php
											break;
										case '3':
											?>
											<div id="reaction_search">
												<div class="letter_container">
													<span onclick="printByReact();"><?php echo $lang["search"]["all"]; ?></span>
													<span onclick="printByReact();">3000-2000</span>
													<span onclick="printByReact();">1999-1500</span>
													<span onclick="printByReact();">1499-1000</span>
													<span onclick="printByReact();">999-750</span>
													<span onclick="printByReact();">749-500</span>
													<span onclick="printByReact();">499-250</span>
													<span onclick="printByReact();">249-1</span>
												</div>
											</div>
											<?php
											break;
										default:
											?>
											<div id="alpha_search">
												<div class="letter_container">
												</div>
											</div>
											<?php											
											break;
									}
									break;
								case 'que':
									?>
									<div class="search_nav">
										<div onclick="printQuestionnaire('first')"><span><?php echo $lang["search"]["first"]; ?></span></div>
										<div onclick="printQuestionnaire('less10')"><span><i class="fas fa-angle-double-left"></i></span></div>
										<div onclick="printQuestionnaire('less')"><span><i class="fas fa-angle-left"></i></span></div>
										<div>1/12800</div>
										<div onclick="printQuestionnaire('add')"><span><i class="fas fa-angle-right"></i></span></div>
										<div onclick="printQuestionnaire('add10')"><span><i class="fas fa-angle-double-right"></i></span></div>
										<div onclick="printQuestionnaire('last')"><span><?php echo $lang["search"]["last"]; ?></span></div>
										<input type="hidden" id="quest-number-current" value="1">
										<input type="hidden" id="quest-number-max" value="1">
									</div>
									<?php
									break;
								default:
									switch ($_GET["num"]) {
										case '1':
											?>
											<div id="word_search">
												<div class="input_container">
												<input type="text" class="input_search" id="input_searchDirect" placeholder=" ">
												<label for=""><?php echo $lang["dict"]["stim_title"]; ?></label>
												</div>
												<button class="btn-search"
												onclick="printRes(document.getElementById('input_searchDirect').value)"><?php echo $lang["search"]["search"]; ?></button>
											</div>
											<?php
											break;
										default:
											?>
											<div class="search_method">
												<div id="alpha_search">
													<div class="letter_container">
													</div>
												</div>
											</div>
											<?php
											break;
									}
									break;
							}
						}else{
							?>
							<div class="search_method">
								<div id="alpha_search">
									<div class="letter_container">
									</div>
								</div>
							</div>
							<?php
						}
					?>
					<div id="res_loader">CHARGEMENT...</div>
					<div class="result"></div>
					<input type="hidden" id="dictionary" value="fasn">
				</div>
			</div>
			<!-- / main body -->
			<div class="clear"></div>
		</main>
	</div>
	<!-- ################################################################################################ -->
	<?php include "../includes/footer.php"; ?>
	<script src="../../layout/scripts/search.js"></script>
	<script>
		init_loader();
		<?php
		/* initialization of search method */
		if(isset($_GET["method"]) && isset($_GET["num"])){
			if($_GET["method"]=="dir" && !in_array($_GET["num"],array('1'))){
				echo "letterGen();";
			}elseif($_GET["method"]=="inv" && !in_array($_GET["num"],array('1','2','3'))){
				echo "letterExtendGen();";
			}elseif($_GET["method"]=="que"){
				echo "initQuestionnaires();";
			}
		}else{
			echo "letterGen();";
		}
		?>
	</script>
</body>

</html>