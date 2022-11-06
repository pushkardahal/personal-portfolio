<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website complete</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Pushkar Dahal</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Projects</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Pushkar Dahal</span><br> Web Designer</h1>

                    <a href="#contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/pushkar-dahal-311b80235/" class="home__social-icon" target="_blank" ><i class='bx bxl-linkedin'></i></a>
                    
                    <a href=" https://github.com/pushkardahal" class="home__social-icon" target="_blank"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/perfil.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Pushkar Dahal</h2>
                        <p class="about__text">An enthusiastic and driven IT field graduate with MCA
                            degree from the Lovely Professional University and
                            currently looking to secure a good position to utilize my
                            strong IT skills and computer knowledge.</p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">I can handle multiple task on a daily basis & always energetic 
                            and eager to learn new skills.</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">HTML5/CSS3</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            
                            <div class="skills__bar skills__css">
                                
                                
                            </div>

                            
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                            
                        </div>

                        
                        <div class="skills__data">
                            
                        
                        <div class="skills__names">
                            <i class='bx bxs-paint skills__icon'></i>
                            <span class="skills__name">UX/UI</span>
                        </div>
                        <div class="skills__bar skills__ux">
                            
                        </div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>


                        <div class="skills__data">
                            <div class="skills__names">
                                <!-- <i class='bx bxl-javascript skills__icon' ></i> -->
                                <span class="skills__name">Bootstrap</span>
                            </div>
                            <div class="skills__bar skills__html">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <!-- <i class='bx bxl-javascript skills__icon' ></i> -->
                                <span class="skills__name">PHP/LARAVEL</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                      
                        <div class="skills__data">
                            <div class="skills__names">
                                <!-- <i class='bx bxl-javascript skills__icon' ></i> -->
                                <span class="skills__name">PYTHON</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Projects</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                        <center><br><br><h1>ℂ𝕠𝕞𝕡𝕦𝕥𝕖𝕣 𝕤𝕖𝕣𝕧𝕚𝕔𝕖 <br>𝕞𝕒𝕟𝕒𝕘𝕖𝕞𝕖𝕟𝕥 𝕤𝕪𝕤𝕥𝕖𝕞</h1></center>
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                        <center><br><br><h1>𝕊𝕥𝕠𝕔𝕜 𝕞𝕒𝕣𝕜𝕖𝕥 𝕒𝕟𝕒𝕝𝕪𝕤𝕚𝕤 <br>𝕦𝕤𝕚𝕟𝕘 ℙ𝕒𝕟𝕕𝕒𝕤</h1></center>
                    </a>
                    <a href="https://github.com/pushkardahal/Fit-Ritz" class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                        <center><br><br><h1>𝔽𝕚𝕥ℝ𝕚𝕥𝕫</h1></center>
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                        <center><br><br><h1>ℝ𝕖𝕒𝕝𝔼𝕤𝕥𝕒𝕥𝕖 𝕎𝕖𝕓𝕤𝕚𝕥𝕖</h1></center>
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                        <center><br><br><h1>ℚ𝕦𝕒𝕣𝕒𝕟𝕥𝕚𝕟𝕖 𝕄𝕒𝕟𝕒𝕘𝕖𝕞𝕖𝕟𝕥 𝕊𝕪𝕤𝕥𝕖𝕞 𝕦𝕤𝕚𝕟𝕘 ℙℍℙ</h1></center>
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                        <center><br><br><h1>ℙ𝕖𝕣𝕤𝕠𝕟𝕒𝕝 ℙ𝕠𝕣𝕥𝕗𝕠𝕝𝕚𝕠 𝕨𝕖𝕓𝕤𝕚𝕥𝕖</h1></center>
                    </a>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" method="POST" class="contact__form">
                        <input type="text" maxlength="20" name="name"  placeholder="Name" class="contact__input">
                        <input type="mail" maxlength="23" name="email"  placeholder="Email" class="contact__input">
                        <textarea name="descr" maxlength="190" placeholder="Description" id="" cols="0" rows="10" class="contact__input"></textarea>
                    
                        <button class="contact__button button">Send</button>
                    </form>
                </div>
            </section>
        </main>


        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Pushkar Dahal</p>
            <div class="footer__social">
                <a href=" https://www.facebook.com/pushkar.dahal.359" class="footer__icon" target="_blank"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p class="footer__copy">&#169; Personal. All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>


<?php

$connect=@mysqli_connect("localhost","root","","portfolio");

 $name =  $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $descr =  $_REQUEST['descr'];
 
 $abc="INSERT INTO `portfolio` (`name`, `email`, `descr`) VALUES ('$name', ' $email', '$descr')";
$dinsert=mysqli_query($connect,$abc);


?>