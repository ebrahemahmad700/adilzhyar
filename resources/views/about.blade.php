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

    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="images/IMG_5805.JPEG" >
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>Us</span></h1>
                <h2>Web Developer + Web programming</h2>
                <p> We Have Created this website to facilitate patiednts and doctors to restore a time
                    and ticketing through online
                </p>
                     <a href="https://www.facebook.com/Ex_man-121489779433064/" class="cta" target="blank">Follow <span>Us</span></a>
            </div>
            
        </div>
        
        
    </section>  
    <script src="./ap.js"></script> 
</body>
</html>