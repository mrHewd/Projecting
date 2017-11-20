
<html>
<HEAD>
	<meta charset="UTF-8">
	<title>Книжный интернет-магазин</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" 
	href="https://css.labirint.ru/content-min.css?1505995665" media="screen">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/my_scripts.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript" src="js/vue.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/authstyle.css">
    <link rel="stylesheet" href="css/mobile.css" media="handheld"/>
</HEAD>
<body id="body-top" onload="init()">
    <div id="minwidth" class="body-main-content">
        <div class="top-header">
            <div class="cleaner0"></div>
            <div class="max-width">
               <div class="top-block ">
                  <div class="bl-inner">
                     <div class="bl-right">

                        <div class="bl-user-menu">
                           <div class="basket-block have-dropdown">
                              <a class="basket-block-icon basket-in-cart-a " href="/cart/" data-stype="href" title="Перейти в корзину">
                                 0						</a>
                                 <span class="basket-block-icon-e-gift-icon  hidden "></span>
                                 <div class="basket-block-txt">
                                     <a class="my-basket-link top-link-blue top-link-main" href="/cart/" data-stype="href" title="Перейти в корзину">Моя корзина</a>
                                     <div class="bakset-block-putted">
                                        <a class="putorder-link" href="/cabinet/putorder/">Отложено: <span class="basket-in-dreambox-a">0</span></a>
                                    </div>

                                    <div class="books-shelf basket-books-shelf">
                                    </div>		
                                </div>

                                <div class="popup-window top-block-popup basket-popup dropdown-block animated-dropdown hidden">
                                   <div class="popup-window-content b-basket-popinfo">
                                      <a class="b-basket-popinfo-close" href="javascript:void(0);" onclick="return false;"></a>



                                      <div class="b-basket-popinfo-e-gift-block">
                                        <div class="b-basket-popinfo-e-block-m-succeed">
                                        </div>    <div class="b-basket-popinfo-e-block-m-scale">

                                    </div></div>

                                </div>
                            </div>					</div>




                        </div>

                        <div class="search-top">
                           <form id="searchform" name="searchform" class="search-form" method="get" action="/search/" data-url="" data-section="" data-genre="0">
                              <input type="submit" class="search-top-submit search-top-disabled" value="">
                              <div class="search-top-wrapper">
                                 <input autocomplete="off" maxlength="100" id="search-field" class="search-top-input" type="text" value="" onkeyup="if(event.keyCode == 38 || event.keyCode==40) autohelp_timeout(event.keyCode, 1); else execTimeout(autohelp_timeout, event.keyCode, 1);" onblur="dhdisplaynone(1, 180, this);" onclick="autohelp_change(1, true)" placeholder="Поиск в Лабиринте">
                                 <input type="hidden" name="labsearch" value="1">
                             </div>
                             <input type="hidden" name="stype" value="0">

                             <div class="popup-window b-suggests b-suggests-m-advanced js-suggests" id="autohelp_rows" data-width="auto" data-id="#search-field" data-dhp="1"></div>
                         </form>
                     </div>		
                 </div>

                 <div class="header-logos bl-left logo-logo">



                   <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="120" height="70" style="max-width:100%" text-anchor="start">
                       <image href="https://st2.depositphotos.com/1020070/8352/v/950/depositphotos_83522830-stock-illustration-stack-of-books-with-bookmarks.jpg" width="150" height="90"></image>
                   </svg>					</span>
                   <div class="header-logo-txt">
                    <h1>Интернет-магазин</h1>				</div>
                </div>
            </div>
        </div>
        <div class="cleaner0"></div>
    </div>
    <script type="text/javascript">
       <!--
       //--></script>

   </div>

   <div class="top-actual ">
    <div class="bl-top-actual top-main-menu">
        <div class="max-width bl-inner">
            <ul class="ul-justify">		
                <li class="top-main-menu-item have-dropdown have-dropdown-clickable have-dropdown-notouch">
                    <a class="mm-link mm-link-big">Школа</a>
                    <span class="dropdown-link"></span>
                </li>
                <li class="top-main-menu-item have-dropdown have-dropdown-clickable have-dropdown-notouch">
                    <a class="mm-link mm-link-big">Канцтовары</a>
                    <span class="dropdown-link"></span>		
                </li>		
                <li class="top-main-menu-rating">
                    <a class="mm-link">Рейтинги</a>
                </li>
                <li>
                    <a class="mm-link">Новинки</a>
                </li>
                <li>
                    <a class="mm-link">Скидки</a>
                </li>
                <li class="top-main-menu-soc">
                    <a class="soc-icon-gray soc-icon-vk"></a>
                    <a class="soc-icon-gray soc-icon-yt"></a>
                    <a class="soc-icon-gray soc-icon-fb"></a>
                    <a class="soc-icon-gray soc-icon-in"></a>
                </li>
                ::after
            </ul>
        </div>
    </div>	
</div>

<div class="top-margin ">

    <div class="top-content">
        <div class="index-top-block">
            <div class="max-width">
                <ul class="index-top-list ul-justify">
                    <li class="index-top-item">
                        <span class="index-top-block-img">
                            <span class="index-top-block-icon index-top-block-icon-shop"></span>
                        </span>
                        <span class="index-top-block-text">
                            Книжный интернет-магазин — магазин книг 
                            и канцелярских товаров
                        </span>
                    </li>
                    <li class="index-top-item">
                        <span class="index-top-block-img">
                            <span class="index-top-block-icon index-top-block-icon-courier"></span>
                        </span>
                        <span class="index-top-block-text">
                            Наша курьерская служба работает в 379 городах России.
                            А заказ от 800 р. привезем бесплатно
                        </span>
                    </li>
                    <li class="index-top-item">
                        <span class="index-top-block-img">
                            <span class="index-top-block-icon index-top-block-icon-self"></span>
                        </span>
                        <span class="index-top-block-text">
                            У нас 1080 пунктов самовывоза по всей России, 
                            в городе Ульяновске — 396. Зачем переплачивать, если мы рядом?
                        </span>
                    </li>
                    <li class="index-top-item">
                        <span class="index-top-block-img">
                            <span class="index-top-block-icon index-top-block-icon-gift"></span>
                        </span>
                        <span class="index-top-block-text">
                            Скидка 5% уже на второй заказ, и вы можете увеличить ее до 30%, 
                            участвуя в конкурсах и акциях
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>








    <div id="maxwidth" class="max-width">
        <div id="outer">
            <div id="wrapper">
                <div id="wrapper-bottom" class="popup-limiter">
                    <div id="inner" class="bl-inner bl-content">

                        <div id="left" class="bl-left bl-left-main">
                            <div class="bl-left-col bl-left-margin bl-left-payments">
                                <div class="single-block-left-outer payments-block">
                                    <div class="single-block-left">
                                        <div class="single-block-left-inner">
                                            <a class="single-block-left-title">Мы принимаем все виды оплат</a>
                                            <div class="single-block-left-text">Банковские карты</div>
                                            <a class="payment-item payment-cards"></a>
                                            <div class="single-block-left-text">Оплата с мобильного</div>
                                            <a class="payment-item payment-mts"></a>
                                            <a class="payment-item payment-megafon"></a>
                                            <a class="payment-item payment-beeline"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bl-left-col bl-left-margin bl-left-getemail">
                                <form class="form-getemail-checkout" action="application/views/check.php" method="post">
                                    <script type="text/javascript">
                                        function show(state) {
                                            document.getElementById('windowAuth').style.display = state;            
                                            document.getElementById('wrap').style.display = state;          
                                        }
                                    </script>

                                    <div onclick="show('none')" id="wrap"></div>

                                    <div id="windowAuth">
                                        <style type="text/css">
                                    </style>
                                    <!-- Картинка крестика-->
                                    <img class="close" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png">
                                    <div id="container">
                                        <div id="wrapper">
                                            <div id="login">
                                                <form>
                                                    <h1>Авторизация</h1>
                                                    <p>
                                                        <label class="uname" data-icon="u">Введите EMail</label>
                                                        <input id="email" name="email" required="required" type="text" placeholder="Mymail@mail.com" method="post"/>
                                                    </p>
                                                    <?php

                                                    ?>
                                                    <p>
                                                        <label class="youpasswd" data-icon="p">Введите пароль</label>
                                                        <input id="password" name="password" required="required" type="password" placeholder="Password"/>
                                                    </p>
                                                    <p class="keeplogin">
                                                        <br>
                                                        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                                        <label for="loginkeeping">Запомните меня</label>
                                                    </p>
                                                    <input type="submit" value="Войти" onclick=""/>
                                                    <br>
                                                    <input type="submit" value="Проверка"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                


                                <div class="getemail-main-left-btn-outer">
                                    <span class="getemail-btn btn btn-small btn-clear-blue" onclick="show('block')">Авторизация</span>
                                </div>
                            </form>

                        </div>
                    </div>



                    <div id="right" class="bl-right bl-right-main">
                        <div id="right-inner"><div class="banners">
                            <div class="banner-big fleft radius-5">
                                <img src="https://img.labirint.ru/images/design/b/banner_59c1208c5ff7a.png" class="fotorama__img" style="width: 460px; height: 460px; left: 0px; top: 0px;">
                            </div>	
                            <div class="banners-right">
                                <div class="banners-small">
                                    <div class="banners-small-wrapper banners-small-wrapper__index">
                                        <div class="banner-small radius-5">
                                            <div class="banner-small__cover">
                                                <div class="banner-small__image" style="background-image: url(https://img.labirint.ru/images/design/b/banner_small_5908aa050bf51.png);"></div>
                                            </div>
                                            <?php include 'application/models/index.php'; ?>
                                            <a class="banner-small__link">
                                                <span class="banner-small__title">Журнальный магазин</span>       
                                                <span class="banner-small__anons">Критика, препринты, интервью, поэзия и проза  — целый мир серьезной периодики</span>
                                                <span class="banner-small__button">
                                                    <span>Смотреть</span>
                                                </span>
                                            </a>
                                        </div>        
                                    </div>

                                    <div class="banners-small-wrapper banners-small-wrapper__index">
                                        <div class="banner-small radius-5">
                                            <div class="banner-small__cover">
                                                <div class="banner-small__image" style="background-image: url(https://img.labirint.ru/images/design/b/banner_small_5979a2fec1bb2.png);"></div>
                                            </div>

                                            <a class="banner-small__link">
                                                <span class="banner-small__title">Спецноминация</span>       
                                                <span class="banner-small__anons">Идет прием работ на конкурс «Дети читают и пишут стихи!» для юных поэтов 11–17 лет</span>
                                                <span class="banner-small__button">
                                                    <span>Смотреть</span>
                                                </span>
                                            </a>
                                        </div>        
                                    </div>
                                </div>

                                <div class="banner-shelf radius-5">
                                    <div>
                                        <span class="banner-shelf__title">Подарки</span>
                                    </div>
                                    <div class="mt5">
                                        <a class="banner-shelf__subtitle">К любому заказу от 600 руб.</a>
                                    </div>

                                    <div class="banner-shelf-goods-wrap">
                                        <a class="banner-shelf__item">
                                            <span class="banner-shelf__cover-wrapper">
                                                <img alt="В гости к друзьям! Без постера" class="banner-shelf__cover" src="https://img1.labirint.ru/books45/447861/covermid.jpg" title="В гости к друзьям! Без постера">

                                                <span class="banner-shelf__overlay"></span>
                                            </span>
                                        </a>
                                        <a class="banner-shelf__item">
                                            <span class="banner-shelf__cover-wrapper">
                                                <img alt="Фебус 2. Ловец человеков" class="banner-shelf__cover" src="https://img2.labirint.ru/books45/446328/covermid.jpg" title="Фебус 2. Ловец человеков">

                                                <span class="banner-shelf__overlay"></span>
                                            </span>
                                        </a>
                                        <a class="banner-shelf__item">
                                            <span class="banner-shelf__cover-wrapper">
                                                <img alt="Да приидет царствие" class="banner-shelf__cover" src="https://img1.labirint.ru/books40/395679/covermid.jpg" title="Да приидет царствие">

                                                <span class="banner-shelf__overlay"></span>
                                            </span>
                                        </a>
                                        <a class="banner-shelf__item">
                                            <span class="banner-shelf__cover-wrapper">
                                                <img alt="Страсти драконьи" class="banner-shelf__cover" src="https://img1.labirint.ru/books45/445483/covermid.jpg" title="Страсти драконьи">

                                                <span class="banner-shelf__overlay"></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="main-block-carousel bestsellers" data-jcarousel="true">
                            <form id="books">

                                <div class="form-group">
                                    <label class="mm-link mm-link-big" for="inputGenre">Жанры: </label>
                                    <select class="mm-link" id="inputGenre" name="genre" v-model="selectedGenre">
                                        <option hidden></option>
                                        <option v-for="genre in genres" :value="genre.id">{{genre.name}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="mm-link mm-link-big" for="inputBook">Книги: </label>
                                    <select class="mm-link" id="inputBook" name="book" v-model="selectedBook">
                                        <option hidden></option>
                                        <option v-if="onChange(book)" v-for="book in books" :value="book.id">{{book.name}}</option>
                                    </select>
                                </div>
                            </form>
                            <script type ="text/javascript" src="js/jquery-3.2.1.min.js"></script>
                            <script type="text/javascript" charset="utf-8">
                                window.genres = <?php echo json_encode($genres); ?>;
                                window.books = <?php echo json_encode($books); ?>;
                            </script>
                            <script type = "text/javascript" src="application/controllers/scripts.js"></script>
                    </div> 

                    <div id="bottom" class="mt20 w90p content-little">
                        <h2>Интернет-магазин книг в деталях</h2>
                        <p>Интернет-магазин входит в первую тройку самых больших книжных магазинов <em>Ульяновска</em>. 
                            Мы предлагаем более 200 000 товаров от 1000 производителей. У нас вы найдете художественную 
                            литературу, деловые издания, учебники, детские книги: новинки и бестселлеры.</p>
                            <p>Специально для наших покупателей мы проводим постоянные акции и конкурсы, устраиваем 
                                викторины, приглашаем авторов для общения с читателями, пишем обзоры книг. 
                                Среди других интернет-магазинов наш отличается удобным интерфейсом, простой навигацией.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>  

</div>

</div>
</body>
</html>
