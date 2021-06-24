<div class="wrapper row1">
	<header id="header" class="hoc clear">
	<div id="logo" class="fl_left">
		<h1 class="logoname">
			<a 
				<?php echo 'href="'.$BASE_PATH.'index.php"'; ?>>
				<?php echo $lang["navbar"]["title"]; ?>
			</a>
		</h1>
	</div>
	<nav id="mainav" class="fl_right"> 
		<ul class="clear">
			<li><a <?php echo 'href="'.$BASE_PATH.'pages/about.php"'; ?>><?php echo $lang["navbar"]["about"]; ?></a></li>
			<li><a <?php echo 'href="'.$BASE_PATH.'pages/authors.php"'; ?>><?php echo $lang["navbar"]["authors"]; ?></a></li>
			<li><a class="drop"><?php echo $lang["navbar"]["dictionaries"]; ?></a>
				<ul>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas.php"'; ?>><?php echo $lang["navbar"]["fas"]; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_sanf.php"'; ?>><?php echo $lang["navbar"]["sanf"]; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_sanfn.php"'; ?>><?php echo $lang["navbar"]["sanfn"]; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fasn.php"'; ?>><?php echo $lang["navbar"]["fasn"]; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas1_red.php"'; ?>><?php echo $lang["navbar"]["fas1_red"]; ?></a></li>
					<li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas2_red.php"'; ?>><?php echo $lang["navbar"]["fas2_red"]; ?></a></li>
				</ul>
			</li>
			<li><a <?php echo 'href="'.$BASE_PATH.'pages/help.php"'; ?>><?php echo $lang["navbar"]["help"]; ?></a></li>
			<li>
			<?php
				if($_SESSION["lang"]=="fr"){
				echo "<a href='?lang=ru'>RU</a>";
				}else{
				echo "<a href='?lang=fr'>Fr</a>";
				}
			?>
			</li>
		</ul>
	</nav>
	</header>
</div>