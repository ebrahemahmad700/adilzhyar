<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
             <div class="brand">
                 <a href="#hero"> <h1> <span>N</span> MA <span>T</span> OWER</h1></a>
             </div>
             <div class="nav-list">
                 <div class="hamburger"><div class="bar"></div></div>
                 <ul>
                <li><a href="{{url('/')}}" data-after="Home">Home</a></li>
                     <li><a href="{{url('/sickness')}}" data-after="Sickness"> sickness</a></li>
                     <li><a href="{{url('/alldoctor')}}" data-after="Doctors"> doctor</a></li>
                     <li><a href="{{url('/about')}}" data-after="About"> About</a></li>
                     <li><a href="{{url('/contact')}}" data-after="contact"> Contact</a></li>
                 </ul>
             </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contactcontainer">
            <div> <h1 class="section-title"> contact <span>info</span> </h1></div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"> <img src="./images/icons8-phone-ringing-64.png" ></div>
                    <div class="contact-info">
                        <h1>phone </h1>
                        <h2> +964 0771 563 3720</h2>
                        <h2> +964 0770 036 52 95</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"> <img src="./images/icons8-email-50.png" ></div>
                    <div class="contact-info">
                        <h1>Email </h1>
                        <h2> ibrahimahamd@gmail.com</h2>
                        <h2> adilah12mad@gmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"> <img src="./images/adres.webp" ></div>
                    <div class="contact-info">
                        <h1>Adresse </h1>
                        <h2>  Slemani ,Ibrahim Pasha</h2>
                        <h2> from kurdistan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="footer">
        <div class="footer container">
            <div class="brand"> <h1><span>N</span> MA <span>T</span> OWER</h1></div> 
            <h2> Your complete web solution</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="# " > <img src="./images/icons8-facebook-50.png" ></a>
                </div>
                <div class="social-item">
                    <a href="# " > <img src="./images/icons8-instagram-50.png" ></a>
                </div>
                <div class="social-item">
                    <a href="# " > <img src="./images/icons8-snapchat-50 (1).png" ></a>
                </div>
                <div class="social-item">
                    <a href="# " > <img src="./images/icons8-twitter-50.png" ></a>
                </div>
            </div>
            <p>Copy right 2022 Adil,muhammad,zhyar,shazad .All right reserved</p>
        </div>
    </section>
    <script src="./ap.js"></script> 
</body>
</html>