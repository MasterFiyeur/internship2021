<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
  <title>dictaverf | Pages | FAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <!-- ################################################################################################ -->
        <h1 class="logoname"><a href="../../index.php">Французские <span>а</span>ссоциативные <span>С</span>ловари</a>
        </h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right">
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li><a href="../about.php">О проекте</a></li>
          <li><a href="../authors.php#">Авторы</a></li>
          <li><a class="drop" href="#">Словари</a>
            <ul>
              <li><a href="../dict_fas.php">Французский Ассоциативный Словарь (ФАС)</a></li>
              <li><a href="../dict_sanf.php">Словарь ассоциативных норм франкофонии (САНФ)</a></li>
              <li><a href="../dict_sanfn.php">Словарь ассоциативных норм франкофонии нормализованый (САНФН)</a></li>
              <li><a href="../dict_fasn.php">Словарь французских ассоциаций 2019 (ФАСН-2019)</a></li>
              <li><a href="../dict_fas1_red.php">Словарь французских ассоциаций 2012+2019 (ФАС1-сокращенный)</a></li>
              <li><a href="../dict_fas2_red.php">Словарь французских ассоциаций 2012+2019 (ФАС2-сокращенный)</a></li>
            </ul>
          </li>
          <li><a href="../help.php">Помощь</a></li>
          <li><a href="#">Fr</a></li>
        </ul>
        <!-- ################################################################################################ -->
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="bgded overlay" style="background-image:url('../../images/associativnoe-myshlenie.jpg');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="../../index.php">Главная</a></li>
        <li><a href="../dict_fas.php">ФАС</a></li>
        <li><a>Анкеты</a></li>
        <li><a>Индивидуальные анкеты</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="sidebar one_quarter first">
        <!-- ################################################################################################ -->
        <nav class="sdb_holder">
          <ul>
            <li><a href="../dict_fas.php#about">О словаре</a></li>
            <li><a href="../dict_fas.php#stim">Стимулы</a></li>
            <li><a class="sdb_section">Прямой словарь</a>
              <ul>
                <li><a href="./fas_dir0.php">В алфавитном порядке</a></li>
                <li><a href="./fas_dir1.php">По отдельному стимулу</a></li>
              </ul>
            </li>
            <li><a class="sdb_section">Обратный словарь</a>
              <ul>
                <li><a href="./fas_inv0.php">В алфавитном порядке</a></li>
                <li><a href="./fas_inv1.php">По отдельному стимулу</a></li>
                <li><a href="./fas_inv2.php">По количеству стимулов</a></li>
                <li><a href="./fas_inv3.php">По количеству реакций</a></li>
              </ul>
            </li>
            <li><a class="sdb_section">Анкеты</a>
              <ul>
                <li><a href="">Индивидуальные анкеты</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="content three_quarter">
        <!-- ################################################################################################ -->
        <h1>Французский Ассоциативный Словарь</h1>
        <!-- ################################################################################################ -->
        <div id="result">
          <h2>Поиск</h2>
          <!--Hide/show the good method thanks to url arguments-->
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
          <div class="result"></div>
          <input type="hidden" id="dictionary" value="fas">
          <input type="hidden" id="method" value="inv">
        </div>
        <!-- / main body -->
        <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->

  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">dictaverf.nsu.ru</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="../../layout/scripts/jquery.min.js"></script>
  <script src="../../layout/scripts/jquery.backtotop.js"></script>
  <script src="../../layout/scripts/jquery.mobilemenu.js"></script>
  <script src="../../layout/scripts/search.js"></script>
  <script>
    initQuestionnaires();
  </script>
</body>

</html>