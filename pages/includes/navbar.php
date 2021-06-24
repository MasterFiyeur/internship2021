<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
        <h1 class="logoname">
            <a 
                <?php echo 'href="'.$BASE_PATH.'index.php"'; ?>>
                Французские <span>а</span>ссоциативные <span>С</span>ловари
            </a>
        </h1>
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li><a <?php echo 'href="'.$BASE_PATH.'pages/about.php"'; ?>>О проекте</a></li>
        <li><a <?php echo 'href="'.$BASE_PATH.'pages/authors.php"'; ?>>Авторы</a></li>
        <li><a class="drop">Словари</a>
          <ul>
            <li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas.php"'; ?>>Французский Ассоциативный Словарь (ФАС)</a></li>
            <li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_sanf.php"'; ?>>Словарь ассоциативных норм франкофонии (САНФ)</a></li>
            <li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_sanfn.php"'; ?>>Словарь ассоциативных норм франкофонии нормализованый (САНФН)</a></li>
            <li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fasn.php"'; ?>>Словарь французских ассоциаций 2019 (ФАСН-2019)</a></li>
            <li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas1_red.php"'; ?>>Словарь французских ассоциаций 2012+2019 (ФАС1-сокращенный)</a></li>
            <li><a <?php echo 'href="'.$BASE_PATH.'pages/dict_fas2_red.php"'; ?>>Словарь французских ассоциаций 2012+2019 (ФАС2-сокращенный)</a></li>
          </ul>
        </li>
        <li><a <?php echo 'href="'.$BASE_PATH.'pages/help.php"'; ?>>Помощь</a></li>
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