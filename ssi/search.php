<!-- <div class="row">
    <div class="col-lg-12">
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ul>
    </div>
</div> -->

<div id="searchRow" class="row" style="margin-top: 10px">
    <div class="col-lg-12">
        <h2 class="page-header">Търсене</h2>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="form-section">
        <div class="row">
            <form role="form" method="POST" action="search.php">
                <div class="col-md-7">
                    <div class="form-group">
                        <label class="sr-only" for="search">Търси</label>
                        <input type="text" class="form-control" id="search" placeholder="Търси продукт или услуга">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="sr-only" for="guest">Град</label>
                        <select id="guest" name="guest" class="form-control">
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
                <div class="col-md-1" style="text-align: right">
                    <button type="submit" class="btn btn-default btn-primary">Търси</button>
                </div>
            </form>
        </div>
		<!-- Call to Action Section -->
            <div class="well">
                <div class="row">
                    <div class="col-md-8">
                        <p>Може да пуснете своята фирма сами, като ние ще я публикуваме след одобрение</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-default btn-block" href="publish.php">Публикувай</a>
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>
<hr/>