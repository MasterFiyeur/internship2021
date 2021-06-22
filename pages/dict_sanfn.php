<!DOCTYPE html>

<?php include "includes/header.php"; ?>

<body id="top">
    <?php include "includes/navbar.php"; ?>
    <!-- ################################################################################################ -->
    <div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
        <div id="breadcrumb" class="hoc clear">
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="#">САНФH</a></li>
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
                        <li><a href="#about">О словаре</a></li>
                        <li><a href="#stim">Стимулы</a></li>
                        <li><a href="#dict_direct">Прямой словарь</a>
                            <ul>
                                <li><a href="#">В алфавитном порядке</a></li>
                                <li><a href="#">По отдельному стимулу</a></li>
                            </ul>
                        </li>
                        <li><a href="#dict_inv">Обратный словарь</a>
                            <ul>
                                <li><a href="#">В алфавитном порядке</a></li>
                                <li><a href="#">По количеству стимулов</a></li>
                                <li><a href="#">По абсолютной частотности</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- ################################################################################################ -->
            <div class="content three_quarter">
                <h1>Французский Ассоциативный Словарь</h1>
                <div id=about>
                    <h2>О словаре</h2>
                    <p>САНФH - электронный словарь ассоциативных норм франкофонии</p>
                    <p>
                        В настоящем исследовании мы предлагаем сопоставить реакции носителей французского языка,
                        проживающих в четырех зонах Франкофонии: Франция, франкоязычная Бельгия (Валлония),
                        франкоязычная Швейцария (Романдия), франкоязычная Канада (преимущественно Квебек).
                        Целью этого исследования является выявление общих и различных черт у носителей, с
                        тем, чтобы определить, в какой степени носители одного и того же языка разделяют
                        одно "видение мира" или это всего лишь миф.
                    </p>
                    <p>
                        Эксперимент по сбору материала проходил с 15 сентября 2013 по 15 сентября 2015г.
                        Через интернет. Носителям французского языка указанных зон (без ограничений в
                        возрасте, место жительстве, профессии) был разослан google-опросник, содержащий
                        100 стимулов - наиболее частотных слов французского языка согласно сайту
                        <a href="http://eduscol.education.fr">http://eduscol.education.fr</a>. Испытуемые
                        должны были не задумываясь вписать первое попавшее на ум слово в реакции на каждый стимул.
                    </p>
                    <p>
                        После обработки полученных данных в словарь попали 590 анкет из Франции, 473 из Бельгии,
                        337 из Швейцарии и 456 из Канады.
                    </p>
                    <p>
                        Библиография
                        <br />
                        Дебренн М. Словарь ассоциативных норм Франкофонии как проявитель лингвоспецифичности /
                        этноспецифичности
                        <br />
                        Дебренн М. Методика сопоставления региональных вариантов языкового сознания носителей
                        французского
                        языка // Жизнь языка в культуре и социуме-5. Материалы конференции. Москва, 29-30 мая 2015 г. /
                        Ред.
                        коллегия: Е. Ф. Тарасов (отв. ред.), Н. В. Уфимцева, В. П. Синячкин, Д. В. Маховиков. — М.:
                        Издательство «Канцлер», 2015. С. 40-42
                        <br />
                        Дебренн М. Лексические отношения в ассоциативных словарях французского языка // Вопросы
                        психолингвистики 2016, вып. 1, №16 с.76-89
                    </p>
                    <p>
                        См также сайт:
                        <a href="https://sites.google.com/site/kevokcemot/home">
                            https://sites.google.com/site/kevokcemot/home
                        </a>
                    </p>

                </div>
                <div id="stim">
                    <h2>Стимулы</h2>
                    <p>Все анкеты содержали следующие 100 стимулов:</p>
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
                    <h2><a href="./search.php">Прямой словарь</a></h2>
                    <ul>
                        <li>В алфавитном порядке</li>
                        <li>По отдельному стимулу</li>
                    </ul>
                </div>
                <div id="dict_inv">
                    <h2><a href="./search.php">Обратный словарь</a></h2>
                    <ul>
                        <li>ВСЕ - все полученные в ходе эксперимента реакции, алфавитном порядке.</li>
                        <li>СТИМ - по количеству разных стимулов, вызвавшие реакции (от 315 до 1).</li>
                        <li>ЧАСТ - по абсолютной частотности (от 2415 до 1).</li>
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
                <div class="desc">Общее число участников веб-сайта</div>
            </div>
            <div class="counter-card">
                <span><i class="fas fa-history"></i></span>
                <div class="number">25 лет</div>
                <div class="desc">Средний возраст участников веб-сайта</div>
            </div>
            <div class="counter-card">
                <span><i class="fas fa-venus-mars"></i></span>
                <div class="number">45%/55%</div>
                <div class="desc">% Мужчина/% женщина<br />&nbsp;</div>
            </div>
            <div class="counter-card">
                <span><i class="fas fa-pencil-alt"></i></span>
                <div class="number">65432</div>
                <div class="desc">Количество слов, введенных авторами</div>
            </div>
            <div class="counter-card">
                <span><i class="fas fa-book"></i></span>
                <div class="number">1500</div>
                <div class="desc">Количество отдельных слов в словаре</div>
            </div>
        </section>
    </div>
    <!-- ################################################################################################ -->
    <?php include "includes/footer.php"; ?>
</body>

</html>