<!DOCTYPE html>
<?php include "../includes/header.php"; ?>

<body id="top">
	<?php include "../includes/navbar.php"; ?>
	<!-- ################################################################################################ -->
	<div class="bgded overlay" style="background-image:url('../../images/associativnoe-myshlenie.jpg');">
		<div id="breadcrumb" class="hoc clear">
			<ul>
				<li><a href="../../index.php">Главная</a></li>
				<li><a href="../dict_fas.php">ФАС</a></li>
				<?php
					/* Path depending of the search method used */
					if(isset($_GET["method"]) && isset($_GET["num"])){
						switch ($_GET["method"]) {
							case 'inv':
								?> 
								<li><a>Обратный словарь</a></li>
								<?php
								switch ($_GET["num"]) {
									case '1':
										?>
										<li><a>По отдельному стимулу</a></li>
										<?php
										break;
									case '2':
										?>
										<li><a>По количеству стимулов</a></li>							
										<?php
										break;
									case '3':
										?>
										<li><a>По количеству реакций</a></li>							
										<?php
										break;
									default:
										?>
										<li><a>В алфавитном порядке</a></li>							
										<?php
										break;
								}
								break;
							case 'que':
								?>
								<li><a>Анкеты</a></li>
								<li><a>Индивидуальные анкеты</a></li>
								<?php
								break;
							default:
								?> 
								<li><a>Прямой словарь</a></li>
								<?php
								switch ($_GET["num"]) {
									case '1':
										?>
										<li><a>По отдельному стимулу</a></li>							
										<?php
										break;
									default:
										?>
										<li><a>В алфавитном порядке</a></li>							
										<?php
										break;
								}
								break;
						}
					}else{
					?>
						<li><a>Прямой словарь</a></li>
						<li><a>В алфавитном порядке</a></li>
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
						<li><a href="../dict_fas.php#about">О словаре</a></li>
						<li><a href="../dict_fas.php#stim">Стимулы</a></li>
						<li><a class="sdb_section">Прямой словарь</a>
							<ul>
								<li><a href="?method=dir&num=0">В алфавитном порядке</a></li>
								<li><a href="?method=dir&num=1">По отдельному стимулу</a></li>
							</ul>
						</li>
						<li><a class="sdb_section">Обратный словарь</a>
							<ul>
								<li><a href="?method=inv&num=0">В алфавитном порядке</a></li>
								<li><a href="?method=inv&num=1">По отдельному стимулу</a></li>
								<li><a href="?method=inv&num=2">По количеству стимулов</a></li>
								<li><a href="?method=inv&num=3">По количеству реакций</a></li>
							</ul>
						</li>
						<li><a class="sdb_section">Анкеты</a>
							<ul>
								<li><a href="?method=que&num=0">Индивидуальные анкеты</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!-- ################################################################################################ -->
			<div class="content three_quarter">
				<h1>Французский Ассоциативный Словарь</h1>
				<div id="result">
					<h2>Поиск</h2>
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
												<label for="">стимул</label>
												</div>
												<button class="btn-search"
												onclick="printRes(document.getElementById('input_searchDirect').value)">Rechercher</button>
											</div>
											<?php 
											break;
										case '2':
											?>
											<div id="stimulus_search">
												<div class="letter_container">
												<span onclick="printByStimulus();">All</span>
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
												<span onclick="printByReact();">All</span>
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
										<div onclick="printQuestionnaire('first')"><span>first</span></div>
										<div onclick="printQuestionnaire('less10')"><span><i class="fas fa-angle-double-left"></i></span></div>
										<div onclick="printQuestionnaire('less')"><span><i class="fas fa-angle-left"></i></span></div>
										<div>1/12800</div>
										<div onclick="printQuestionnaire('add')"><span><i class="fas fa-angle-right"></i></span></div>
										<div onclick="printQuestionnaire('add10')"><span><i class="fas fa-angle-double-right"></i></span></div>
										<div onclick="printQuestionnaire('last')"><span>last</span></div>
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
												<label for="">стимул</label>
												</div>
												<button class="btn-search"
												onclick="printRes(document.getElementById('input_searchDirect').value)">Rechercher</button>
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
					<div class="result"></div>
					<input type="hidden" id="dictionary" value="fas">
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