<?php include('server.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Дифференциально-диагностический опросник</title>
        <meta charset="utf=8">
        <link rel="stylesheet" type="text/css" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    </head>
    <body>
        <header>
            <div class="container header">
                <div class="row header-row">
                    <div class="image-holder">
                        <img class="header-image" src="/images/krmu-logo.jpg">
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="test">
                <center><form action="index.php" method="post">
                    <?php include('errors.php'); ?>       
                    <td>ФИО</td>
                    <td><input type='text' name='full_name' /></td>
                    <td>email</td>
                    <td><input type='text' name='email' /></td>
                    <td>ИИН</td>
                    <td><input type='text' name='iin' /></td>
                    <td><a href="login.php">Войти</a></td>
                    <table border="1">
                        <tr><td align="center">N вопроса / Сұрақ N</td><td colspan="2" align="center">Варианты ответов / Жауап нұсқалары</td></tr>
                        <tr><td colspan="3" align="center" class="oddTableRow">Предположим, что после соответствующего обучения вы сможете выполнять любую работу. Однако если бы вам пришлось выбрать только из двух возможностей, что бы вы предпочли?
                        Сіз қандай да бір оқуды бітірген соң, кез келген жұмысты орындай аласыз деп елестетейік. Бірақ егер сізге тек екі мүмкіндіктің біреуін ғана таңдау керек болса, сіз қайсысын таңдайтын едіңіз?</td></tr>
                        <tr>
                            <td rowspan="2" align="center">1</td>
                            <td align="center"><input id="1a" type="radio" name="1" value="1a"></td>
                            <td>Ухаживать за животными / Жануарларды күту </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="1b" type="radio" name="1" value="1b"></td>
                            <td>Обслуживать машины, приборы (следить, регулировать) / Көліктерді, құрал-жабдықтарды күту (тексеру, реттеу) </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">2</td>
                            <td align="center"><input id="2a" type="radio" name="2" value="2a"></td>
                            <td>Помогать больным людям, лечить их / Науқастарға жәрдем беру </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="2b" type="radio" name="2" value="2b"></td>
                            <td>Составлять таблицы, схемы, программы вычислительных машин / Есептеуіш машиналар үшін кестелер, схемалар, бағдарламалар құру </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">3</td>
                            <td align="center"><input id="3a" type="radio" name="3" value="3a"></td>
                            <td>Следить за качеством книжных иллюстраций, плакатов, художественных открыток, грампластинок / Кітап иллюстрацияларының, плакттардың, көрсем ашық хаттардың сапасын қадағалау </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="3b" type="radio" name="3" value="3b"></td>
                            <td>Следить за состоянием, развитием растений / Өсімдіктердің күйін, дамуын қадағалау </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">4</td>
                            <td align="center"><input id="4a" type="radio" name="4" value="4a"></td>
                            <td>Обрабатывать материалы (дерево, ткань, металл, пластмассу и т. п.) / Материалдарды өңдеу (ағаш, мата, металл, пластмасса және т.с.с.) </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="4b" type="radio" name="4" value="4b"></td>
                            <td>Доводить товары до потребителя (рекламировать, продавать) / Тауарларды тұтынушыға жеткізу, жарнамалау, сату</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">5</td>
                            <td align="center"><input id="5a" type="radio" name="5" value="5a"></td>
                            <td>Обсуждать научно-популярные книги, статьи / Ғылыми-танымал кітаптарды, мақалаларды талқылау </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="5b" type="radio" name="5" value="5b"></td>
                            <td>Обсуждать художественные книги (или пьесы, концерты) / Әдеби кітаптарды (немесе пьесаларды, концерттерді) талқылау </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">6</td>
                            <td align="center"><input id="6a" type="radio" name="6" value="6a"></td>
                            <td>Выращивать молодняк (животных какой-либо породы) / Төл (кез келген жануардың төлін) өсіру </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="6b" type="radio" name="6" value="6b"></td>
                            <td>Тренировать товарищей (или младших) в выполнении каких-либо действий (трудовых, спортивных) / Жолдастарын (немесе өзінен кішілерді) қандай да бір әрекеттерді (еңбек, оқу, спорт) орындауда жаттықтыру </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">7</td>
                            <td align="center"><input id="7a" type="radio" name="7" value="7a"></td>
                            <td>Копировать рисунки, изображения (или настраивать музыкальные инструменты) / Суреттерді, бейнелерді көшіру (немесе музыкалық аспатарды жөндеу)</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="7b" type="radio" name="7" value="7b"></td>
                            <td>Управлять каким-либо грузовым (подъемным или транспортным) средством — подъемным краном, трактором, тепловозом и др. / Қандай да бір жүк (көтергіш немесе көлік) құралымен – көтергіш кранмен, трактормен, тепловозбен басқару </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">8</td>
                            <td align="center"><input id="8a" type="radio" name="8" value="8a"></td>
                            <td>Сообщать, разъяснять людям, нужные им сведения / Адамдарға қажет мағлұматтарды жеткізу, түсіндіру (мәліметтік бюрода, экскурсияда және т.б.) </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="8b" type="radio" name="8" value="8b"></td>
                            <td>Художественно оформлять выставки, витрины (или участвовать в подготовке пьес, концертов) / Көрмелерді, витриналарды дайындау (немесе пьесаларды, концерттердің дайындығына қатысу) </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">9</td>
                            <td align="center"><input id="9a" type="radio" name="9" value="9a"></td>
                            <td>Ремонтировать вещи, изделия (одежду, технику), жилище / Заттарды, бұйымдарды (киім, техника), үйді жөндеу </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="9b" type="radio" name="9" value="9b"></td>
                            <td>Искать и исправлять ошибки в текстах, таблицах, рисунках / Тесттерде, кестелерде, суреттердң қателерді табу және түзету. </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">10</td>
                            <td align="center"><input id="10a" type="radio" name="10" value="10a"></td>
                            <td>Лечить животных / Жануарларды емдеу </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="10b" type="radio" name="10" value="10b"></td>
                            <td>Выполнять вычисления, расчеты / Есептеулерді жүргізу </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">11</td>
                            <td align="center"><input id="11a" type="radio" name="11" value="11a"></td>
                            <td>Выводить новые сорта растений / Өсімдіктердің жаңа сортын шығару </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="11b" type="radio" name="11" value="11b"></td>
                            <td>Конструировать, проектировать новые виды промышленных изделий (машины или одежду, дома, продукты питания и т. п.) / Өндірістік бұйымдардың (машиналар, киім-кешек, үйлер, азық-түлік) жаңа түрлерін құрастыру, жобалау </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">12</td>
                            <td align="center"><input id="12a" type="radio" name="12" value="12a"></td>
                            <td>Разбирать споры, ссоры между людьми, убеждать, разъяснять, уточнять, разъяснять, поощрять, наказывать / Таластарды, адамдар арасындағы ұрыстарды шешу, сендіру, түсіндіру, жазалау, мадақтау </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="12b" type="radio" name="12" value="12b"></td>
                            <td>Разбираться в чертежах, схемах, таблицах (проверять, приводить в порядок) / Сызбалардың, схемалардың, кестелердің ісін білу (тексеру, нақтылау, ретке келтіру) </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">13</td>
                            <td align="center"><input id="13a" type="radio" name="13" value="13a"></td>
                            <td>Наблюдать, изучать работу кружков художественной самодеятельности / Көркем өнер шығармашылығы үйірмелерінің жұмысын бақылау, зерттеу</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="13b" type="radio" name="13" value="13b"></td>
                            <td>Наблюдать, изучать жизнь микробов / Микробтардың өмірін бақылау, зерттеу </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">14</td>
                            <td align="center"><input id="14a" type="radio" name="14" value="14a"></td>
                            <td>Обслуживать, налаживать медицинские приборы, аппараты / Медициналық аспаптарды, аппараттарды жөндеу </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="14b" type="radio" name="14" value="14b"></td>
                            <td>Оказывать людям медицинскую помощь при ранениях, ушибах, ожогах и т. п. / Адамдарға жарақат, күйіктер кезінде медициналық жәрдем көрсету </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">15</td>
                            <td align="center"><input id="15a" type="radio" name="15" value="15a"></td>
                            <td>Составлять точные описания — отчеты о наблюдаемых явлениях, событиях, измеряемых объектах и др. / Оқиғаларды (бақыланып жатқан, көрсетіліп жатқан) көркемдеп сипаттау, бейнелеу </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="15b" type="radio" name="15" value="15b"></td>
                            <td>Художественно описывать, изображать события (наблюдаемые или представляемые) / Бақыланып жатқан құбылыстар, оқиғалар, өлшеніп жатқан обхекттер туралы нақты сипаттамалар - отчеттар құру </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">16</td>
                            <td align="center"><input id="16a" type="radio" name="16" value="16a"></td>
                            <td>Делать лабораторные анализы в больнице / Аурухана лабораториялы анализдер жасау </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="16b" type="radio" name="16" value="16b"></td>
                            <td>Принимать, осматривать больных, беседовать с ними, назначать лечение / Науқастарды қабылдау, қарау, олармен әңгімелесу, ем беру </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">17</td>
                            <td align="center"><input id="17a" type="radio" name="17" value="17a"></td>
                            <td>Красить или расписывать стены помещений, поверхность изделий / Ғимараттар қабырғаларын, бұйымдардың жазықтығын бояу немесе оларға сурет салу </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="17b" type="radio" name="17" value="17b"></td>
                            <td>Осуществлять монтаж здания или сборку машин, приборов / Машиналардың, құралдардың монтажын жасау немесе оларды жинау </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">18</td>
                            <td align="center"><input id="18a" type="radio" name="18" value="18a"></td>
                            <td>Организовывать культпоходы сверстников или младших (в театры, музеи), экскурсии, туристские походы и т. п. / Жолдастарын немесе өзінен кішілерді театрларға, музейлерге, туристтік жорықтарға алып баруды ұйымдастыру</td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="18b" type="radio" name="18" value="18b"></td>
                            <td>Играть на сцене, принимать участие в концертах / Сценада ойнау, концерттерге қатысу </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">19</td>
                            <td align="center"><input id="19a" type="radio" name="19" value="19a"></td>
                            <td>Изготовлять по чертежам детали (машины, одежду), строить здания / Сызбалар бойынша бөлшектерді, (машиналардың, киімнің) бұйымдарды жасау, ғимараттар құру </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="19b" type="radio" name="19" value="19b"></td>
                            <td>Заниматься черчением, копировать чертежи, карты / сызбаларды жасау, сызбаларды, карталарды көшіру </td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">20</td>
                            <td align="center"><input id="20a" type="radio" name="20" value="20a"></td>
                            <td>Вести борьбу с болезнями растений, с вредителями леса, сада / Өсімдіктер ауруларымен, бақтың, орманның зиянды жәндіктерімен күрес жүргізу </td>
                        </tr>
                        <tr class="oddTableRow">
                            <td align="center"><input id="20b" type="radio" name="20" value="20b"></td>
                            <td>Работать на клавишных машинах (пишущей машинке, телетайпе, наборной машине и др.) / Пернелік машиналарда (жазба машиналары, телетайп, теру машиналары) жұмыс істеу </td>
                        </tr>
                        <tr><td colspan="3" align="center"><button type="submit" class="btn" name="insert_result">Отправить</button></td></tr>
                    </table>
                    <?php 
                        if(isset($_POST['insert_result'])){
                            $one = $_POST['1'];
                            if($one == "1a"){
                                echo "1a";
                            }
                            else{
                                echo "1b";
                            }
                        }
                    ?>
                </form></center>
                </body>
                </html>
                </td>
                    </tr>
                    <TR>
                        <TD valign="top" style="padding: 0 12px 0px 12px">
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
        <!-- <center><h1>Ведутся технические работы!</h1></center> -->
        <footer>
            <div class="container footer">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="footer-image-holder">
                            <img class="footer-logo" src="/images/Logo-podval.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>