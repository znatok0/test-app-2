<html>
    <head>
        <title>Дифференциально-диагностический опросник</title>
        <link rel="stylesheet" type="text/css" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}">
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
        <!-- {{-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script> --}} -->
        <script type="text/javascript" src="{{ url('/js/main.js') }}"></script>
    </head>
    <body>
        <header>
            <div class="container header">
                <div class="row header-row">
                    <div class="image-holder">
                        <img class="header-image" src="{{ url('/images/krmu-logo.jpg') }}">
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="test">
                <center><form name="form1" action="create" method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <td>ФИО</td>
                    <td><input type='text' name='full_name' /></td>
                    <td>email</td>
                    <td><input type='text' name='email' /></td>
                    <td>ИИН</td>
                    <td><input type='text' name='iin' /></td>
                    <?php 
                        if($errors->any()){
                            echo '<div class="alert alert-danger">
                                <ul>';
                                    foreach ($errors->all() as $error){
                                        echo '<li>{$error}</li>';
                                    }
                                echo '</ul>';
                            echo '</div>';
                        }
                    ?>
                    <table border="1">
                        <tr><td align="center">N вопроса</td><td colspan="2" align="center">Варианты ответов</td></tr>
                        <tr><td colspan="3" align="center" class="oddTableRow">Предположим, что после соответствующего обучения вы сможете выполнять любую работу. Однако если бы вам пришлось выбрать только из двух возможностей, что бы вы предпочли?</td></tr>
                        <tr>
                            <td rowspan="2" align="center">1</td>
                            <td align="center"><input id="1a" type="radio" name="1" value="1a"></td>
                            <td>Ухаживать за животными</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="1b" type="radio" name="1" value="1b"></td>
                            <td>Обслуживать машины, приборы (следить, регулировать)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">2</td>
                            <td align="center"><input id="2a" type="radio" name="2" value="2a"></td>
                            <td>Помогать больным людям, лечить их</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="2b" type="radio" name="2" value="2b"></td>
                            <td>Составлять таблицы, схемы, программы вычислительных машин</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">3</td>
                            <td align="center"><input id="3a" type="radio" name="3" value="3a"></td>
                            <td>Следить за качеством книжных иллюстраций, плакатов, художественных открыток, грампластинок</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="3b" type="radio" name="3" value="3b"></td>
                            <td>Следить за состоянием, развитием растений</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">4</td>
                            <td align="center"><input id="4a" type="radio" name="4" value="4a"></td>
                            <td>Обрабатывать материалы (дерево, ткань, металл, пластмассу и т. п.)</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="4b" type="radio" name="4" value="4b"></td>
                            <td>Доводить товары до потребителя (рекламировать, продавать)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">5</td>
                            <td align="center"><input id="5a" type="radio" name="5" value="5a"></td>
                            <td>Обсуждать научно-популярные книги, статьи</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="5b" type="radio" name="5" value="5b"></td>
                            <td>Обсуждать художественные книги (или пьесы, концерты)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">6</td>
                            <td align="center"><input id="6a" type="radio" name="6" value="6a"></td>
                            <td>Выращивать молодняк (животных какой-либо породы)</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="6b" type="radio" name="6" value="6b"></td>
                            <td>Тренировать товарищей (или младших) в выполнении каких-либо действий (трудовых, спортивных)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">7</td>
                            <td align="center"><input id="7a" type="radio" name="7" value="7a"></td>
                            <td>Копировать рисунки, изображения (или настраивать музыкальные инструменты)</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="7b" type="radio" name="7" value="7b"></td>
                            <td>Управлять каким-либо грузовым (подъемным или транспортным) средством — подъемным краном, трактором, тепловозом и др.</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">8</td>
                            <td align="center"><input id="8a" type="radio" name="8" value="8a"></td>
                            <td>Сообщать, разъяснять людям, нужные им сведения</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="8b" type="radio" name="8" value="8b"></td>
                            <td>Художественно оформлять выставки, витрины (или участвовать в подготовке пьес, концертов)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">9</td>
                            <td align="center"><input id="9a" type="radio" name="9" value="9a"></td>
                            <td>Ремонтировать вещи, изделия (одежду, технику), жилище</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="9b" type="radio" name="9" value="9b"></td>
                            <td>Искать и исправлять ошибки в текстах, таблицах, рисунках</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">10</td>
                            <td align="center"><input id="10a" type="radio" name="10" value="10a"></td>
                            <td>Лечить животных</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="10b" type="radio" name="10" value="10b"></td>
                            <td>Выполнять вычисления, расчеты</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">11</td>
                            <td align="center"><input id="11a" type="radio" name="11" value="11a"></td>
                            <td>Выводить новые сорта растений</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="11b" type="radio" name="11" value="11b"></td>
                            <td>Конструировать, проектировать новые виды промышленных изделий (машины или одежду, дома, продукты питания и т. п.)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">12</td>
                            <td align="center"><input id="12a" type="radio" name="12" value="12a"></td>
                            <td>Разбирать споры, ссоры между людьми, убеждать, разъяснять, уточнять, разъяснять, поощрять, наказывать</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="12b" type="radio" name="12" value="12b"></td>
                            <td>Разбираться в чертежах, схемах, таблицах (проверять, приводить в порядок)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">13</td>
                            <td align="center"><input id="13a" type="radio" name="13" value="13a"></td>
                            <td>Наблюдать, изучать работу кружков художественной самодеятельности</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="13b" type="radio" name="13" value="13b"></td>
                            <td>Наблюдать, изучать жизнь микробов</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">14</td>
                            <td align="center"><input id="14a" type="radio" name="14" value="14a"></td>
                            <td>Обслуживать, налаживать медицинские приборы, аппараты</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="14b" type="radio" name="14" value="14b"></td>
                            <td>Оказывать людям медицинскую помощь при ранениях, ушибах, ожогах и т. п.</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">15</td>
                            <td align="center"><input id="15a" type="radio" name="15" value="15a"></td>
                            <td>Составлять точные описания — отчеты о наблюдаемых явлениях, событиях, измеряемых объектах и др.</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="15b" type="radio" name="15" value="15b"></td>
                            <td>Художественно описывать, изображать события (наблюдаемые или представляемые)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">16</td>
                            <td align="center"><input id="16a" type="radio" name="16" value="16a"></td>
                            <td>Делать лабораторные анализы в больнице</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="16b" type="radio" name="16" value="16b"></td>
                            <td>Принимать, осматривать больных, беседовать с ними, назначать лечение</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">17</td>
                            <td align="center"><input id="17a" type="radio" name="17" value="17a"></td>
                            <td>Красить или расписывать стены помещений, поверхность изделий</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="17b" type="radio" name="17" value="17b"></td>
                            <td>Осуществлять монтаж здания или сборку машин, приборов</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">18</td>
                            <td align="center"><input id="18a" type="radio" name="18" value="18a"></td>
                            <td>Организовывать культпоходы сверстников или младших (в театры, музеи), экскурсии, туристские походы и т. п.</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="18b" type="radio" name="18" value="18b"></td>
                            <td>Играть на сцене, принимать участие в концертах</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">19</td>
                            <td align="center"><input id="19a" type="radio" name="19" value="19a"></td>
                            <td>Изготовлять по чертежам детали (машины, одежду), строить здания</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="19b" type="radio" name="19" value="19b"></td>
                            <td>Заниматься черчением, копировать чертежи, карты</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">20</td>
                            <td align="center"><input id="20a" type="radio" name="20" value="20a"></td>
                            <td>Вести борьбу с болезнями растений, с вредителями леса, сада</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="20b" type="radio" name="20" value="20b"></td>
                            <td>Работать на клавишных машинах (пишущей машинке, телетайпе, наборной машине и др.)</td>
                        </tr>
                        <tr><td colspan="3" align="center"><button onclick="sendResult()">Отправить</button></td></tr>
                            <script>
                                var txt = document.getElementById('result-text');
                                alert(txt.innerHTML);
                            </script>
                    </table>
                    <p id="result-text"></p>
                </form></center>
                </body>
                </html>
                </td>
                    </tr>
                        <!-- /content -->
                    <TR>
                        <TD valign="top" style="padding: 0 12px 0px 12px">
                        <!-- news -->
                        <div style="padding: 0 12px 12px 8px" class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,tutby,gplus,lj,moikrug,yaru,evernote,friendfeed,linkedin,myspace,surfingbird,blogger,moimir,delicious,yazakladki"></div>
                        </TD>
                    </TR>
                    </table>
                        </div>
                        <br style="clear:both">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container footer">
                <div class="row">
                    <div class="col-md-4">
                        <!-- {{-- <div class="footer-text-left">
                            <p>Казахстанско-Российский</p><br>
                            <p>Медицинский Университет</p><br>
                            <p>Все права защищены</p>
                        </div> --}} -->
                    </div>
                    <div class="col-md-4">
                        <div class="footer-image-holder">
                            <img class="footer-logo" src="{{ url('/images/Logo-podval.png') }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>