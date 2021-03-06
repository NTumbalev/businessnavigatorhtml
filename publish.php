<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Informator site</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/search.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <?php include 'ssi/mainMenu.php'; ?>
        </header><!-- /header -->

        <!-- Page Content -->
        <div class="container">
            <?php include 'ssi/search.php'; ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <form class="" action=" " method="post"  id="contact_form">
                    <fieldset>

                    <legend>Публикувайте своята фирма при нас!</legend>
                    
                    <p>Всяко физическо лице или друг вид организация има право на безплатно участие в телефонния бизнес справочник. Безплатно участие включва: име, един адрес и един телефон, в подходяща за дейността категория.</p>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-12 control-label">Име на фирмата</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input name="company_name_bg" placeholder="Име на фирмата" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="col-md-12 control-label">Вид</label>
                            <div class="col-md-12 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-list"></i>
                                    </span>
                                    <select name="kind" class="form-control selectpicker" >
                                        <option value="0" selected="selected">Избери</option>
                                        <option value="ЕТ">ЕТ</option>
                                        <option value="ЕООД">ЕООД</option>
                                        <option value="ЕАД">ЕАД</option>
                                        <option value="ООД">ООД</option>
                                        <option value="АД">АД</option>
                                        <option value="СД">СД</option>
                                        <option value="КД">КД</option>
                                        <option value="Други">Други</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Пощенски код</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-home"></i>
                                    </span>
                                    <input name="post_code" placeholder="Пощенски код" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Телефон</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-earphone"></i>
                                    </span>
                                    <input name="phone" placeholder="0887/555-121" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Ключови думи</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </span>
                                    <input name="keywords" placeholder="Ключови думи" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">М.О.Л</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input name="owner" placeholder="М.О.Л" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- SECOND COLUMN -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-md-12 control-label">Име на фирмата (на латиница)</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input name="company_name_en" placeholder="Име на фирмата (на латиница)" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Адрес</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-home"></i>
                                    </span>
                                    <input name="address" placeholder="Адрес" class="form-control" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="col-md-12 control-label">Регион</label>
                            <div class="col-md-12 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-list"></i>
                                    </span>
                                    <select name="state" class="form-control selectpicker" >
                                        <option value="">населено място</option>
                                        <option  value="2">София</option>
                                        <option  value="1">Пловдив</option>
                                        <option  value="39">Бургас</option>
                                        <option  value="49">Стара Загора</option>
                                        <option  value="220">Айтос</option>
                                        <option  value="4">Асеновград</option>
                                        <option  value="340">Ахтопол</option>
                                        <option  value="319">Балчик</option>
                                        <option  value="282">Банкя</option>
                                        <option  value="72">Банско</option>
                                        <option  value="150">Баня</option>
                                        <option  value="108">Батак</option>
                                        <option  value="219">Белене</option>
                                        <option  value="85">Белово</option>
                                        <option  value="342">Берковица</option>
                                        <option  value="56">Благоевград</option>
                                        <option  value="47">Божурище</option>
                                        <option  value="339">Борово</option>
                                        <option  value="94">Ботевград</option>
                                        <option  value="75">Брацигово</option>
                                        <option  value="95">Брезник</option>
                                        <option  value="77">Брезово</option>
                                        <option  value="286">Бяла</option>
                                        <option  value="310">Бяла Слатина</option>
                                        <option  value="15">Варна</option>
                                        <option  value="274">Велики Преслав</option>
                                        <option  value="54">Велико Търново</option>
                                        <option  value="86">Велинград</option>
                                        <option  value="242">Видин</option>
                                        <option  value="42">Враца</option>
                                        <option  value="89">Габрово</option>
                                        <option  value="292">Годеч</option>
                                        <option  value="120">Горна Оряховица</option>
                                        <option  value="323">Гоце Делчев</option>
                                        <option  value="182">Гълъбово</option>
                                        <option  value="160">Девин</option>
                                        <option  value="129">Димитровград</option>
                                        <option  value="46">Добрич</option>
                                        <option  value="437">Долна Митрополия</option>
                                        <option  value="276">Доспат</option>
                                        <option  value="359">Дряново</option>
                                        <option  value="53">Дупница</option>
                                        <option  value="261">Елена</option>
                                        <option  value="295">Елин Пелин</option>
                                        <option  value="164">Етрополе</option>
                                        <option  value="7">Златоград</option>
                                        <option  value="133">Ивайловград</option>
                                        <option  value="317">Исперих</option>
                                        <option  value="296">Ихтиман</option>
                                        <option  value="354">Каблешково</option>
                                        <option  value="324">Каварна</option>
                                        <option  value="50">Казанлък</option>
                                        <option  value="130">Калофер</option>
                                        <option  value="18">Карлово</option>
                                        <option  value="243">Карнобат</option>
                                        <option  value="335">Каспичан</option>
                                        <option  value="239">Кермен</option>
                                        <option  value="256">Козлодуй</option>
                                        <option  value="98">Копривщица</option>
                                        <option  value="73">Костенец</option>
                                        <option  value="139">Кричим</option>
                                        <option  value="253">Крумовград</option>
                                        <option  value="5">Кърджали</option>
                                        <option  value="224">Кюстендил</option>
                                        <option  value="452">Левски</option>
                                        <option  value="348">Летница</option>
                                        <option  value="63">Ловеч</option>
                                        <option  value="231">Лом</option>
                                        <option  value="299">Луковит</option>
                                        <option  value="176">Лъки</option>
                                        <option  value="352">Любимец</option>
                                        <option  value="304">Лясковец</option>
                                        <option  value="236">Мадан</option>
                                        <option  value="300">Малко Търново</option>
                                        <option  value="321">Мездра</option>
                                        <option  value="283">Момин проход</option>
                                        <option  value="278">Момчилград</option>
                                        <option  value="117">Монтана</option>
                                        <option  value="175">Мъглиж</option>
                                        <option  value="44">Несебър</option>
                                        <option  value="166">Нова Загора</option>
                                        <option  value="316">Нови Пазар</option>
                                        <option  value="320">Омуртаг</option>
                                        <option  value="355">Оряхово</option>
                                        <option  value="345">Павел Баня</option>
                                        <option  value="3">Пазарджик</option>
                                        <option  value="62">Панагюрище</option>
                                        <option  value="114">Перник</option>
                                        <option  value="81">Перущица</option>
                                        <option  value="91">Петрич</option>
                                        <option  value="37">Пещера</option>
                                        <option  value="457">Пирдоп</option>
                                        <option  value="58">Плевен</option>
                                        <option  value="113">Поморие</option>
                                        <option  value="180">Попово</option>
                                        <option  value="322">Правец</option>
                                        <option  value="207">Провадия</option>
                                        <option  value="27">Първомай</option>
                                        <option  value="181">Раднево</option>
                                        <option  value="260">Радомир</option>
                                        <option  value="115">Разград</option>
                                        <option  value="325">Разлог</option>
                                        <option  value="109">Ракитово</option>
                                        <option  value="10">Раковски</option>
                                        <option  value="440">Роман</option>
                                        <option  value="45">Русе</option>
                                        <option  value="140">Садово</option>
                                        <option  value="92">Сандански</option>
                                        <option  value="152">Свиленград</option>
                                        <option  value="232">Свищов</option>
                                        <option  value="293">Своге</option>
                                        <option  value="142">Севлиево</option>
                                        <option  value="162">Силистра</option>
                                        <option  value="298">Симеоновград</option>
                                        <option  value="79">Сливен</option>
                                        <option  value="289">Сливница</option>
                                        <option  value="262">Сливо Поле</option>
                                        <option  value="124">Смолян</option>
                                        <option  value="246">Созопол</option>
                                        <option  value="171">Сопот</option>
                                        <option  value="318">Средец</option>
                                        <option  value="273">Старозагорски минерални бани</option>
                                        <option  value="59">Стражица</option>
                                        <option  value="68">Тетевен</option>
                                        <option  value="96">Троян</option>
                                        <option  value="284">Тръстеник</option>
                                        <option  value="330">Трявна</option>
                                        <option  value="357">Тутракан</option>
                                        <option  value="178">Търговище</option>
                                        <option  value="204">Харманли</option>
                                        <option  value="57">Хасково</option>
                                        <option  value="6">Хисаря</option>
                                        <option  value="351">Царево</option>
                                        <option  value="40">Чепеларе</option>
                                        <option  value="333">Червен Бряг</option>
                                        <option  value="65">Чирпан</option>
                                        <option  value="97">Шумен</option>
                                        <option  value="99">Ямбол</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Интернет страница</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-home"></i>
                                    </span>
                                    <input name="webpage" placeholder="Интернет страница" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">E-Mail</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </span>
                                    <input name="email" placeholder="E-Mail" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Лице за контакт</label>  
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </span>
                                    <input name="contact_person" placeholder="Лице за контакт" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group"> 
                            <label class="col-md-12 control-label">Категория</label>
                            <div class="col-md-12 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-list"></i>
                                    </span>
                                    <select name="category" class="form-control selectpicker" >
                                        <option value="0" selected="selected">Избери</option>
                                        <option>Кабелни телевизии</option>
                                        <option>Казина, хазартни игри</option>
                                        <option>Камини</option>
                                        <option>Касови апарати</option>
                                        <option>Кафе, чай и подправки</option>
                                        <option>Кафенета и сладкарници</option>
                                        <option>Керамика</option>
                                        <option>Кетъринг</option>
                                        <option>Кина</option>
                                        <option>Климатични инсталации</option>
                                        <option>Ключарски услуги</option>
                                        <option>Книжарници</option>
                                        <option>Ковано желязо</option>
                                        <option>Кожи - облекла и изделия</option>
                                        <option>Козметични и тоалетни продукти</option>
                                        <option>Козметични салони</option>
                                        <option>Колежи</option>
                                        <option>Композитна индустрия</option>
                                        <option>Компресори</option>
                                        <option>Компютри</option>
                                        <option>Комуникации, Телекомуникации</option>
                                        <option>Комуникационна техника</option>
                                        <option>Копирна техника</option>
                                        <option>Копирни услуги</option>
                                        <option>Корабни агенции и брокери</option>
                                        <option>Кредити и заеми</option>
                                        <option>Кредитни компании</option>
                                        <option>Крепежни изделия</option>
                                        <option>Куриерски услуги</option>
                                        <option>Кухненско обзавеждане и оборудване</option>
                                        <option>Лабораторно обзавеждане и оборудване</option>
                                        <option>Лагери, Ремъци и Семеринги</option>
                                        <option>Лазерна техника</option>
                                        <option>Лекари - акушер - гинеколози</option>
                                        <option>Лекари - алерголози</option>
                                        <option>Лекари - анестезиолози</option>
                                        <option>Лекари - вътрешни болести</option>
                                        <option>Лекари - гастроентеролози</option>
                                        <option>Лекари - дентална медицина (Зъболекари)</option>
                                        <option>Лекари - дермато - венеролози</option>
                                        <option>Лекари - ендокринолози</option>
                                        <option>Лекари - инфекциозни болести</option>
                                        <option>Лекари - кардиолози</option>
                                        <option>Лекари - кардиохирурзи</option>
                                        <option>Лекари - невролози</option>
                                        <option>Лекари - неврохирурзи</option>
                                        <option>Лекари - нефролози</option>
                                        <option>Лекари - онколози</option>
                                        <option>Лекари - ортопеди</option>
                                        <option>Лекари - очни</option>
                                        <option>Лекари - паразитолози</option>
                                        <option>Лекари - патоанатоми</option>
                                        <option>Лекари - патофизиолози</option>
                                        <option>Лекари - педиатри</option>
                                        <option>Лекари - пластични и естетични хирурзи</option>
                                        <option>Лекари - пневмолози, фтизиатри, пулмолози</option>
                                        <option>Лекари - психиатри</option>
                                        <option>Лекари - ревматолози</option>
                                        <option>Лекари - сексолози</option>
                                        <option>Лекари - семейни</option>
                                        <option>Лекари - токсиколози</option>
                                        <option>Лекари - уролози</option>
                                        <option>Лекари - уши, нос, гърло</option>
                                        <option>Лекари - физиотерапевти и рехабилитатори</option>
                                        <option>Лекари - хематолози</option>
                                        <option>Лекари - хирурзи</option>
                                        <option>Лекари - хомеопати</option>
                                        <option>Леярство</option>
                                        <option>Лизингови компании</option>
                                        <option>Лов и риболов</option>
                                        <option>Логопеди</option>
                                        <option>Магазини - обзавеждане и оборудване</option>
                                        <option>Маркетингова дейност</option>
                                        <option>Масаж и лечебна физкултура</option>
                                        <option>Масла, смазочни материали</option>
                                        <option>Матраци</option>
                                        <option>Машини - резервни части</option>
                                        <option>Машини - ремонт и поддръжка</option>
                                        <option>Машини и съоръжения под наем</option>
                                        <option>Мебели</option>
                                        <option>Мед и пчеларство</option>
                                        <option>Медицинска техника</option>
                                        <option>Медицинска техника – ремонт</option>
                                        <option>Медицински консумативи</option>
                                        <option>Медицински лаборатории</option>
                                        <option>Медицински центрове</option>
                                        <option>Международен транспорт</option>
                                        <option>Мелници и брашно</option>
                                        <option>Месо и месни продукти</option>
                                        <option>Метали</option>
                                        <option>Метални изделия</option>
                                        <option>Метални конструкции</option>
                                        <option>Металообработващи машини и инструменти</option>
                                        <option>Металообработка</option>
                                        <option>Митнически услуги</option>
                                        <option>Мляко и млечни продукти</option>
                                        <option>Мобилни телефони - продажба и сервиз</option>
                                        <option>Модни къщи и дизайнерски ателиета</option>
                                        <option>Мотоциклети и ATV</option>
                                        <option>Музеи</option>
                                        <option>Музикални и танцови формации</option>
                                        <option>Музикални магазини</option>
                                        <option>Мъжка мода</option>
                                        <option>Навигационни системи GPS</option>
                                        <option>Надгробни паметници</option>
                                        <option>Недвижими имоти</option>
                                        <option>Неотложна медицинска помощ</option>
                                        <option>Нетрадиционна медицина</option>
                                        <option>Нотариуси</option>
                                        <option>Обков</option>
                                        <option>Облекло - аксесоари</option>
                                        <option>Обмяна на валута</option>
                                        <option>Обувки</option>
                                        <option>Обувна промишленост машини и инструменти</option>
                                        <option>Обущари</option>
                                        <option>Одитори</option>
                                        <option>Озвучителни системи</option>
                                        <option>Озеленителни системи</option>
                                        <option>Озеленяване</option>
                                        <option>Окачени тавани</option>
                                        <option>Олио</option>
                                        <option>Опаковащи машини и инструменти</option>
                                        <option>Опаковки - пластмаса и полиетилен</option>
                                        <option>Опаковки - хартия и картон</option>
                                        <option>Оптики</option>
                                        <option>Органи за контрол</option>
                                        <option>Ортопедични пособия и приспособления</option>
                                        <option>Оръжейни магазини</option>
                                        <option>Осветителни тела</option>
                                        <option>Осигурителни дружества</option>
                                        <option>Основни училища</option>
                                        <option>Отоплителни уреди и системи</option>
                                        <option>Офис консумативи</option>
                                        <option>Офис техника</option>
                                        <option>Охранителна техника, видеонаблюдение</option>
                                        <option>Охранителни фирми</option>
                                        <option>Оценители - експерти</option>
                                        <option>Парапети и перила</option>
                                        <option>Парти аксесоари</option>
                                        <option>Парфюмерия, козметика</option>
                                        <option>Пердета, Завеси и Аксесоари</option>
                                        <option>Печатарски материали</option>
                                        <option>Печатарски машини и инструменти</option>
                                        <option>Печатарски услуги</option>
                                        <option>Печати, щампи и табели</option>
                                        <option>Печатници</option>
                                        <option>Пещи</option>
                                        <option>Пиротехника</option>
                                        <option>Пицарии</option>
                                        <option>Пластмаси - суровини</option>
                                        <option>Пластмасова промишленост машини и инструменти</option>
                                        <option>Пластмасови изделия</option>
                                        <option>Плодове и зеленчуци</option>
                                        <option>Подаръци и сувенири</option>
                                        <option>Подемно - транспортна техника и услуги</option>
                                        <option>Подови настилки и материали</option>
                                        <option>Поливни инсталации и съоръжения</option>
                                        <option>Полиетилен - производство и търговия</option>
                                        <option>Помпи и помпени съоръжения</option>
                                        <option>Почистване на офиси и домове</option>
                                        <option>Почистваща техника</option>
                                        <option>Прахово боядисване</option>
                                        <option>Превод и легализация</option>
                                        <option>Предпечат, компютърна обработка и експонация</option>
                                        <option>Пречиствателна техника и съоръжения</option>
                                        <option>Проектанти</option>
                                        <option>Промишлени и търговски помещения под наем</option>
                                        <option>Противопожарна техника и системи</option>
                                        <option>Професионални училища</option>
                                        <option>Психолози, психотерапевти</option>
                                        <option>Пътна помощ, репатриране</option>
                                        <option>Пътно строителство</option>
                                        <option>Работно облекло и Лични предпазни средства</option>
                                        <option>Радиа</option>
                                        <option>Разсадници</option>
                                        <option>Рамки - ателиета</option>
                                        <option>Растителна защита и Сортови семена</option>
                                        <option>Реклама</option>
                                        <option>Рекламни материали и сувенири</option>
                                        <option>Религиозни храмове</option>
                                        <option>Ремаркета и полуремаркета</option>
                                        <option>Рентгенолози (образна диагностика)</option>
                                        <option>Реставриране</option>
                                        <option>Ресторанти</option>
                                        <option>Решетки, мрежи и ролетки</option>
                                        <option>Риба и рибни продукти</option>
                                        <option>Санитарно - хигиенни материали</option>
                                        <option>Сватбени агенции</option>
                                        <option>Сглобяеми къщи</option>
                                        <option>Селскостопански машини и инструменти</option>
                                        <option>Сертификационни и регистрационни услуги</option>
                                        <option>Складове - оборудване</option>
                                        <option>Сладкарски изделия</option>
                                        <option>Сладолед</option>
                                        <option>Слухови апарати</option>
                                        <option>Соларни системи</option>
                                        <option>Соларни студия</option>
                                        <option>Сондажна техника и услуги</option>
                                        <option>Софтуер</option>
                                        <option>Социални услуги</option>
                                        <option>СПА и уелнес</option>
                                        <option>Спа и уелнес - обзавеждане и оборудване</option>
                                        <option>Спално бельо</option>
                                        <option>Спедиция, логистика</option>
                                        <option>Спортни организации и клубове</option>
                                        <option>Спортни стоки</option>
                                        <option>Спортни съоръжения</option>
                                        <option>Стоки втора употреба</option>
                                        <option>Стоков контрол</option>
                                        <option>Стокови борси</option>
                                        <option>Стоматологична техника</option>
                                        <option>Стоматологични материали, консумативи</option>
                                        <option>Строителен надзор</option>
                                        <option>Строителни конструкции</option>
                                        <option>Строителни материали</option>
                                        <option>Строителни машини и инструменти</option>
                                        <option>Строителни фирми</option>
                                        <option>Строително - ремонтни дейности</option>
                                        <option>Строителство - консултанти</option>
                                        <option>Строителство - сухо</option>
                                        <option>Стъклари</option>
                                        <option>Стъкло и порцелан</option>
                                        <option>Супермаркети и хипермаркети</option>
                                        <option>Счетоводни услуги</option>
                                        <option>Събитиен мениджмънт</option>
                                        <option>Съдебни изпълнители</option>
                                        <option>Таксита</option>
                                        <option>Тапицери</option>
                                        <option>Татуировки и пиърсинг</option>
                                        <option>Театри</option>
                                        <option>Текстил</option>
                                        <option>Текстилна промишленост машини и инструменти</option>
                                        <option>Телевизия</option>
                                        <option>Телефонни компании</option>
                                        <option>Трансформатори</option>
                                        <option>Траурни агенции и стоки</option>
                                        <option>Трудова медицина</option>
                                        <option>Тръби и фитинги</option>
                                        <option>Туристически агенции и туроператори</option>
                                        <option>Тържества - организатори</option>
                                        <option>Тютюн, тютюневи изделия</option>
                                        <option>Уеб Дизайн</option>
                                        <option>Учебни центрове, курсове</option>
                                        <option>Училища за хора с увреждания</option>
                                        <option>Учители - частни</option>
                                        <option>Фармацевтични компании и представителства</option>
                                        <option>Фаянс, теракота и керамика</option>
                                        <option>Фаянс, теракота и керамика - поставяне</option>
                                        <option>Филтри</option>
                                        <option>Финансови консултанти</option>
                                        <option>Фитнес зали</option>
                                        <option>Фотографски и видео материали</option>
                                        <option>Фотографски и видео услуги</option>
                                        <option>Фризьорски и козметични салони - оборудване и обзавеждане</option>
                                        <option>Фризьорски салони</option>
                                        <option>Фуражи</option>
                                        <option>Хамалски услуги</option>
                                        <option>Хартиена промишленост машини и инструменти</option>
                                        <option>Хартия и картон</option>
                                        <option>Хидравлика и Пневматика</option>
                                        <option>Химическа промишленост</option>
                                        <option>Химическа промишленост машини и инструменти</option>
                                        <option>Химически тоалетни</option>
                                        <option>Химическо чистене и пране</option>
                                        <option>Хладилна техника</option>
                                        <option>Хладилна техника - ремонт</option>
                                        <option>Хляб и тестени изделия</option>
                                        <option>Хосписи</option>
                                        <option>Хотели</option>
                                        <option>Хотелско обзавеждане и оборудване</option>
                                        <option>Храни - консервирани, замразени и полуфабрикати</option>
                                        <option>Храни - сухи</option>
                                        <option>Храни и Аксесоари за домашни животни</option>
                                        <option>Хранителни добавки</option>
                                        <option>Хранително-вкусова промишленост машини и инструменти</option>
                                        <option>Художествени материали</option>
                                        <option>Художници</option>
                                        <option>Цветя</option>
                                        <option>Чанти, раници и куфари</option>
                                        <option>Часовникари</option>
                                        <option>Часовници</option>
                                        <option>Човешки ресурси - консултанти</option>
                                        <option>Чорапи и чорапогащи</option>
                                        <option>Шивашка промишленост машини и инструменти</option>
                                        <option>Шивашки материали и консумативи</option>
                                        <option>Шивашки предприятия</option>
                                        <option>Шивашки услуги</option>
                                        <option>Щори, сенници, тенти</option>
                                        <option>Ядки и сушени плодове</option>
                                        <option>Яйца</option>
                                        <option>Яхти и малки плавателни съдове</option>              
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Съобщение</label>
                            <div class="col-md-12 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </span>
                                    <textarea class="form-control" name="comment" placeholder="Съобщение"></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Button -->
                        <div class="form-group text-center">
                            <label class="col-md-12 control-label"></label>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    Изпрати <span class="glyphicon glyphicon-send"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Success message -->
                    <!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

                    </fieldset>
                    </form>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <?php include 'ssi/footer.php'; ?>
        </div>
        <!-- /.container -->
    </body>
</html>
