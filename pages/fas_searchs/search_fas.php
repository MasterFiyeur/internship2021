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
                <li><a>Прямой словарь</a></li>
                <li><a>В алфавитном порядке</a></li>
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
                                <li><a href="">В алфавитном порядке</a></li>
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
                                <li><a href="./fas_que.php">Индивидуальные анкеты</a></li>
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
                    <?php include "../includes/filter.php"; ?>
                    <!--Hide/show the good method thanks to url arguments-->
                    <div class="search_method">
                        <div id="alpha_search">
                            <div class="letter_container">
                            </div>
                        </div>
                    </div>
                    <div class="result"></div>
                    <input type="hidden" id="dictionary" value="fas">
                    <input type="hidden" id="method" value="dir">
                </div>
                <!-- / main body -->
                <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <?php include "../includes/footer.php"; ?>
    <script src="../../layout/scripts/search.js"></script>
    <script>
        /* Generate letters */
        letterGen();
    </script>
</body>

</html>