<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->

<?php include "includes/header.php" ?>

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <header id="header" class="hoc clear">
            <div id="logo" class="fl_left">
                <!-- ################################################################################################ -->
                <h1 class="logoname"><a href="../index.php">Французские <span>а</span>ссоциативные
                        <span>С</span>ловари</a></h1>
                <!-- ################################################################################################ -->
            </div>
            <nav id="mainav" class="fl_right">
                <!-- ################################################################################################ -->
                <ul class="clear">
                    <li><a href="about.php">О проекте</a></li>
                    <li><a href="authors.php#">Авторы</a></li>
                    <li><a class="drop" href="#">Словари</a>
                        <ul>
                            <li><a href="dict_fas.php">Французский Ассоциативный Словарь (ФАС)</a></li>
                            <li><a href="dict_sanf.php">Словарь ассоциативных норм франкофонии (САНФ)</a></li>
                            <li><a href="dict_sanfn.php">Словарь ассоциативных норм франкофонии нормализованый
                                    (САНФН)</a></li>
                            <li><a href="dict_fasn.php">Словарь французских ассоциаций 2019 (ФАСН-2019)</a></li>
                            <li><a href="dict_fas1_red.php">Словарь французских ассоциаций 2012+2019
                                    (ФАС1-сокращенный)</a></li>
                            <li><a href="dict_fas2_red.php">Словарь французских ассоциаций 2012+2019
                                    (ФАС2-сокращенный)</a></li>
                        </ul>
                    </li>
                    <li><a href="help.php">Помощь</a></li>
                    <li><a href="#">Fr</a></li>
                </ul>
                <!-- ################################################################################################ -->
            </nav>
        </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay" style="background-image:url('../images/associativnoe-myshlenie.jpg');">
        <div id="breadcrumb" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="#">Помощь</a></li>
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
                        <li><a href="#filter">Фильтр</a></li>
                        <li><a href="#fas">ФАС</a>
                            <ul>
                                <li><a href="#fas_direct">Прямой Словарь</a></li>
                                <li><a href="#fas_invert">Обратный Словарь</a></li>
                                <li><a href="#fas_questionnaire">Анкеты</a></li>
                            </ul>
                        </li>
                        <li><a href="#sanf">САНФ</a>
                            <ul>
                                <li><a href="#sanf_direct">Прямой Словарь</a></li>
                                <li><a href="#sanf_invert">Обратный Словарь</a></li>
                            </ul>
                        </li>
                        <li><a href="#sanfn">САНФН</a>
                            <ul>
                                <li><a href="#sanfn_direct">Прямой Словарь</a></li>
                                <li><a href="#sanfn_invert">Обратный Словарь</a></li>
                            </ul>
                        </li>
                        <li><a href="#fasn">ФАСН-2019</a>
                            <ul>
                                <li><a href="#fasn_direct">Прямой Словарь</a></li>
                                <li><a href="#fasn_invert">Обратный Словарь</a></li>
                                <li><a href="#fasn_questionnaire">Анкеты</a></li>
                            </ul>
                        </li>
                        <li><a href="#fas1">ФАС1-сокращенный</a>
                            <ul>
                                <li><a href="#fas1_direct">Прямой Словарь</a></li>
                                <li><a href="#fas1_invert">Обратный Словарь</a></li>
                                <li><a href="#fas1_questionnaire">Анкеты</a></li>
                            </ul>
                        </li>
                        <li><a href="#fas2">ФАС2-сокращенный</a>
                            <ul>
                                <li><a href="#fas2_direct">Прямой Словарь</a></li>
                                <li><a href="#fas2_invert">Обратный Словарь</a></li>
                                <li><a href="#fas2_questionnaire">Анкеты</a></li>
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
                <div id="filter">
                    <h2><b>Фильтр</b></h2>
                    <p>У вас есть возможность отфильтровать данные, нажав на фильтр для прямого и обратного словарей.</p>
                </div>
                <div id="fas">
                    <h2><b>Французский Ассоциативный Словарь (ФАС)</b></h2>
                    <div id="fas_direct">
                        <h3>Прямой Словарь</h3>
                        <p>
                            Если вводить только одну букву, Вы увидите все стимулы, начинающие с этой буквы (валфавитном
                            порядке).<br/>
                            В поле ответа фигурируют все реакции, данные на этот стимул, в обратном порядке частотности.
                            <br/>Цифры в скобках указывают :
                            <ol>
                                <li>общее количество ответов, данных на данный стимул,</li>
                                <li>количество разных реакций,</li>
                                <li>количество отказов,</li>
                                <li>количество единичных реакций.</li>
                            </ol>
                        </p>
                    </div>
                    <div id="fas_invert">
                        <h3>Обратный Словарь</h3>
                        <p>
                            В обратном словаре представлены реакции, полученные в ходе эксперимента, и стимулы,
                            вызвавшие их в порядке убывающей частотности.
                            Выберите, в каком порядке Вы хотите располагать реакции :
                            <ul>
                                <li>В алфавитном порядке : Все реакции, начинающиеся с выбранного символа</li>
                                <li>По отдельному стимулу : Все реакции, включая записанную символьную строку</li>
                                <li>По количеству стимулов : Все реакции отсортированы по количеству стимулов, в
                                    ответ на которые было дано то или иное слово.</li>
                                <li>По количеству реакций : Все реакции отсортированы по номеру реакции</li>
                            </ul>
                            Цифры в скобках указывают :
                            <ol>
                                <li>частотность реакции</li>
                                <li>количество стимулов, на которые данное слово было дано в качестве реакции.</li>
                            </ol>
                        </p>
                    </div>
                    <div id="fas_questionnaire">
                        <h3>Анкеты</h3>
                        <p>
                            В данной таблице представлены ответы отдельного респондента на анкету, состоящей из 100
                            стимулов, случайно взятых из списка. Частотность ответа – количество таких же ответов на
                            этот же стимул среди всех остальных респондентов. В среднем на каждый стимул ответили 500
                            человек.
                        </p>
                    </div>
                </div>
                <div id="sanf">
                    <h2><b>Словарь ассоциативных норм франкофонии (САНФ)</b></h2>
                    <div id="sanf_direct">
                        <h3>Прямой Словарь</h3>
                        <p>
                            Если вводить только одну букву, Вы увидите все стимулы, начинающие с этой буквы (в
                            алфавитном порядке)
                            <br/>
                            В поле ответа фигурируют все реакции, данные на этот стимул, в обратном порядке частотности
                            (указана цифрой сразу после реакции). В первом столбце - все реакции, независимо от
                            географического происхождения В остальных столбцах, реакции распределены в зависимости от
                            географического происхождения (Франция, Бельгия, Швейцария, Канада). Цветом обозначен факт
                            совпадения данной реакции в двух или нескольких зон.
                            <br/>
                            В скобках указаны:
                            <ol>
                                <li>общее количество ответов, данных на данный стимул,</li>
                                <li>количество разных реакций [в квардратных скобках дан процент разных ответов от их общего
                                    количества: тем меньше процент, тем больше единообразие в ответах респондентов],</li>
                                <li>количество отказов,</li>
                                <li>количество единичных реакций.</li>
                            </ol>
                            В колонке стимулов есть возможность нажать кнопку для отображения кривой, показывающей общее количество реакций и по странам (пока не реализовано).
                        </p>
                    </div>
                    <div id="sanf_invert">
                        <h3>Обратный Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit repellat a voluptas,
                            molestiae doloribus minima enim architecto, error ex culpa fugiat adipisci veritatis aut
                            esse accusantium maxime harum doloremque.
                        </p>
                    </div>
                </div>
                <div id="sanfn">
                    <h2><b>Словарь ассоциативных норм франкофонии нормализованый (САНФН)</b></h2>
                    <div id="sanfn_direct">
                        <h3>Прямой Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sequi officia fugiat
                            facere aliquid adipisci fuga porro omnis voluptas deleniti error laborum officiis impedit
                            eum harum, maiores quo expedita animi?
                        </p>
                    </div>
                    <div id="sanfn_invert">
                        <h3>Обратный Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit repellat a voluptas,
                            molestiae doloribus minima enim architecto, error ex culpa fugiat adipisci veritatis aut
                            esse accusantium maxime harum doloremque.
                        </p>
                    </div>
                </div>
                <div id="fasn">
                    <h2><b>Словарь французских ассоциаций 2019 (ФАСН-2019)</b></h2>
                    <div id="fasn_direct">
                        <h3>Прямой Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sequi officia fugiat
                            facere aliquid adipisci fuga porro omnis voluptas deleniti error laborum officiis impedit
                            eum harum, maiores quo expedita animi?
                        </p>
                    </div>
                    <div id="fasn_invert">
                        <h3>Обратный Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit repellat a voluptas,
                            molestiae doloribus minima enim architecto, error ex culpa fugiat adipisci veritatis aut
                            esse accusantium maxime harum doloremque.
                        </p>
                    </div>
                    <div id="fasn_questionnaire">
                        <h3>Анкеты</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem atque nemo distinctio
                            excepturi laboriosam similique explicabo commodi laudantium repellendus temporibus! Hic
                            nesciunt eos nihil nulla exercitationem odit officia obcaecati ratione.
                        </p>
                    </div>
                </div>
                <div id="fas1">
                    <h2><b>Словарь французских ассоциаций 2012+2019 (ФАС1-сокращенный)</b></h2>
                    <div id="fas1_direct">
                        <h3>Прямой Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sequi officia fugiat
                            facere aliquid adipisci fuga porro omnis voluptas deleniti error laborum officiis impedit
                            eum harum, maiores quo expedita animi?
                        </p>
                    </div>
                    <div id="fas1_invert">
                        <h3>Обратный Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit repellat a voluptas,
                            molestiae doloribus minima enim architecto, error ex culpa fugiat adipisci veritatis aut
                            esse accusantium maxime harum doloremque.
                        </p>
                    </div>
                    <div id="fas1_questionnaire">
                        <h3>Анкеты</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem atque nemo distinctio
                            excepturi laboriosam similique explicabo commodi laudantium repellendus temporibus! Hic
                            nesciunt eos nihil nulla exercitationem odit officia obcaecati ratione.
                        </p>
                    </div>
                </div>
                <div id="fas2">
                    <h2><b>Словарь французских ассоциаций 2012+2019 (ФАС2-сокращенный)</b></h2>
                    <div id="fas2_direct">
                        <h3>Прямой Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sequi officia fugiat
                            facere aliquid adipisci fuga porro omnis voluptas deleniti error laborum officiis impedit
                            eum harum, maiores quo expedita animi?
                        </p>
                    </div>
                    <div id="fas2_invert">
                        <h3>Обратный Словарь</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt odit repellat a voluptas,
                            molestiae doloribus minima enim architecto, error ex culpa fugiat adipisci veritatis aut
                            esse accusantium maxime harum doloremque.
                        </p>
                    </div>
                    <div id="fas2_questionnaire">
                        <h3>Анкеты</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem atque nemo distinctio
                            excepturi laboriosam similique explicabo commodi laudantium repellendus temporibus! Hic
                            nesciunt eos nihil nulla exercitationem odit officia obcaecati ratione.
                        </p>
                    </div>
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
    <script src="../layout/scripts/jquery.min.js"></script>
    <script src="../layout/scripts/jquery.backtotop.js"></script>
    <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>