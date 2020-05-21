<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Portfolio Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сайт визитка веб-программиста Муруева Павла">
    <meta name="author" content="Программист Муруев Павел">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css"
/>
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                       
            <img class="profile-image img-responsive pull-left" src="assets/images/avatar.png" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">Павел Муруев</h1>
                <h2 class="desc">Разработчик Веб-Приложений, Back-end разработчик (junior)</h2>   
                <ul class="social list-inline">
                    <li><a href="https://vk.com/pavelmuruew"><i class="fa fa-vk"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/ckynet91"><i class="fa fa-github-alt"></i></a></li>               
                </ul> 
            </div><!--//profile-->
            <a class="btn btn-cta-primary pull-right" href="#" target="_blank"><i class="fa fa-paper-plane"></i> Contact Me</a>              
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">Обо мне</h2>
                        <div class="content">
                            <p>Я начинающий программист в сфере Веб-программирования. На моей странице я отобразил все свои наработки, с которыми вы можете ознакомится.</p>    
         
        <p>Опыт работы в даной сфере, только по собственным проектам, которые выложены на этом сайте. Работал до этого сиистемным администратором</p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Последний проект</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="/footwear" target="_blank">Footwear - интернет магазин</a></h3>
                                <p class="summary">Интернет - магазин по продажам обуви</p>
                                <div class="featured-image">
                                    <a href="/footwear" target="_blank">
                                    <img class="img-responsive project-image" src="assets/images/projects/footwear.png" alt="footwear - интернет магазин" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">Новый</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <p>Это мой последний проект, где я реализовал MVC - шаблон паттерна. Использовал последней версии PHP 7</p>
                                    <p></p>
                                </div><!--//desc-->         
                                <a class="btn btn-cta-secondary" href="/footwear" target="_blank"><i class="fa fa-thumbs-o-up"></i> Посмотреть проект</a>                 
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="/" target="_blank">Второй проект</a></h3>
                                    <p>В дальнейшем тут появится ссылка на другие мои проекты!</p>
                                    <p><a class="more-link" href="/" target="_blank"><i class="fa fa-external-link"></i> Узнайте больше</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">Другие проекты</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="#">Интернет магазин</a></h3>
                                <p class="summary">Проект интернет магазин с использования PHP, ООП, MVC. Можете посмотреть на GitHub</p>
                                <p><a class="more-link" href="https://github.com/ckynet91/firstprojectphp.git" target="_blank"><i class="fa fa-external-link"></i> Узнайте больше</a></p>
                            </div><!--//item-->
                            
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Опыт работы</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Инженер-программист - <span class="place"><a href="#">Росгвардия</a></span> <span class="year">(2018 - по настоящее время)</span></h3>
                                <p>Установка и обслуживание компьютерной и офисной техники, оргтехники, внутренней АТС.
Обеспечение безошибочной работы системного программного обеспечения (ОС Windows, Windows Server, ASTRA linux, CentOS).
Обеспечение работоспособности и безопасности сети компании.
Установка, настройка и обновление офисного и прикладного ПО (MS Office, 1С и т.п.).
Обеспечение резервного копирования данных (а также восстановление данных при необходимости).
Техническая поддержка и помощь пользователей.
Составление отчетов о проделанной работе.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Помощник системного администратора - <span class="place"><a href="#">ООО "Bellini group "</a></span> <span class="year">(2014 - 2015)</span></h3>
                                <p>Установка и обслуживание компьютерной и офисной техники, оргтехники.
Установка, настройка и обновление офисного и прикладного ПО (MS Office, и т.п.).
Обеспечение резервного копирования данных.
Техническая поддержка и помощь пользователей.</p>
                            </div><!--//item-->
                         
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">Мой GitHub</h2>
                        <p>Вы можете использовать шаблон MVC интернет магазина на GitHub <a href="https://github.com/ckynet91/firstprojectphp" target="_blank">GitHub интернет магазин</a> код. 
                        
                        <div id="github-graph" class="github-graph">

                        </div><!--//github-graph-->

                        <p>Я встроил свои действия на GitHub с помощью Кейси Скарборо <a href="http://caseyscarborough.com/projects/github-activity/" target="_blank">GitHub Activity Stream</a> widget.        
                        <!--//Usage: http://caseyscarborough.com/projects/github-activity/ -->                       
                        <div id="ghfeed" class="ghfeed">
                        </div><!--//ghfeed-->
                        
                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Основная информация</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Красноярск, Россия</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">ckynet91@mail.ru</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://ckynet3.beget.tech/</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Навыки</h2>
                        
                        <div class="content">
                            <p class="intro">
                                </p>
                            
                            <div class="skillset">
                               
                            - знание РНР, ООП, MySQL/SQLite, MVC.<br>
                            - Опыт работы с системой контроля версий (Git)<br>
                            - Опыт работы в unix-подобных системах<br>
                            - знание HTML5, CSS3, JavaScript<br>
                            - знание других языков программирования.<br>
                                
                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
<!--                 
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>                
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>                                                             
                            </div>//item
                            
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                            
                        </div>//content
                    </div>//section-inner
                </aside>//section
                 -->
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Образование</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> Автоматизированые системы обработки информации и управления</h3>
                                <h4 class="university">Дивногорский гидроэнергетический техникум <span class="year">(2006-2010)</span></h4>
                            </div><!--//item-->
                            <!-- <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> BSc Computer Science</h3>
                                <h4 class="university">University of Bristol <span class="year">(2008-2011)</span></h4>
                            </div>//item -->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Языки</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Русский:</strong></span>
                                    <span class="level">носитель языка <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Английский:</strong></span>
                                    <span class="level">А2 - средний начальный <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                <!-- <aside class="list conferences aside section">
                    <div class="section-inner">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-calendar"></i> <a href="https://developer.apple.com/wwdc/" target="_blank">WWDC 2014</a> (San Francisco)</li>
                                <li><i class="fa fa-calendar"></i> <a href="http://hive.aigaseattle.org/">Hive</a> (Seattle)</li>
                            </ul>
                        </div>//content
                    </div>//section-inner
                </aside>//section -->
                
                <!-- <aside class="credits aside section">
                    <div class="section-inner">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap</a></li>
                                <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwesome</a></li>
                                <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fa fa-external-link"></i> GitHub Calendar Plugin</a></li>
                                
                                <li><a href="http://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fa fa-external-link"></i> GitHub Activity Stream</a></li>
                                
                                <li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fa fa-external-link"></i> jQuery RSS</a></li>
                                
                                <li>Profile image: <a href="https://www.flickr.com/photos/dotbenjamin/2577394151" target="_blank">Ben Smith</a></li>
                                <li>iPad and iPhone mocks: <a href="https://dribbble.com/perlerar" target="_blank">Regy Perlera</a></li>
                                
                            </ul>
                            
                            <hr/>
                            
                             <p>This responsive portfolio template is handcrafted by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is <strong>FREE</strong> under the <a class="dotted-link" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a></p>
                             <p>We will improve or add new features to this template based on users' feedback so follow us on twitter to get notified when a new version is out!</p>
                            <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i> Follow us</a>
                            <a class="btn btn-cta-primary btn-download" href="http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/" target="_blank"><i class="fa fa-download"></i> I want to download</a>
                        </div>//content
                    </div>//section-inner
                </aside>//section -->
              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

