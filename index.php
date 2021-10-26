<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>DevLife - Мысли просто</title>
    <meta name="description" content="DevLife - Быстрая и качественная разработка сайтов под ключ, а также логотипов, визиток и Landing-page"/>
    <link rel="icon" href="https://devlife.ru/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script>
        let epochId = Date.now();
        (function () {
            let mainccs= document.createElement("link");
            mainccs.rel="stylesheet";
            mainccs.href="css/main.css?t="+epochId;
            document.head.appendChild(mainccs);
        }())
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(85955552, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/85955552" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="head">
                <div class="logo">
                    <a href="/"><img src="images/logo.png" alt="logo"></a>
                </div>
                <div class="main_menu">
                    <nav class="menu">
                        <ul>
                            <li><a href="#">Главная</a></li>
                            <li><a href="#">Команда</a></li>
                            <li><a href="#">Примеры работ</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#" class="contact">Связаться с нами</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="leader">
        <div class="wrap">
            <div class="container">
                <div class="leader_head">
                    <div class="leader_one animate__animated animate__backInLeft">
                        <h3 class="full">
                            Full stack
                        </h3>
                        <h2 class="dev">
                            Разработка
                        </h2>
                        <div class="desc">
                            <div class="block"></div>
                            <div class="desc_text">
                                <p>Услуги по созданию логотипов, визиток, landing-page и прочих сайтов как с нуля, так и на популярных CMS системах.</p>
                                <div class="cont">
                                    <a href="#">Заказать работу</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leader_two animate__animated animate__backInRight">
                        <img src="images/comp.png" alt="comp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>