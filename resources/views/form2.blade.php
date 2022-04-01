<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  <link rel="stylesheet" href="form1.css">
  <link rel="stylesheet" href="style.css">

  <title>Login form</title>

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
              <li><a href="index.html" data-after="Home">Home</a></li>
                 <li><a href="sickness.html" data-after="Sickness"> sickness</a></li>
                 <li><a href="doctors.html" data-after="projects"> doctor</a></li>
                 <li><a href="about.html" data-after="About"> About</a></li>
                 <li><a href="contact.html" data-after="contact"> Contact</a></li>
             </ul>
         </div>
        </div>
    </div>
</section>

  <!-- for background -->
  <div class="background"></div>

  <!-- for form container -->
  <div class="container">
    <h2>take a ticket</h2>
    <form action="">

      <div class="form-item">
        <span class="material-icons-outlined">
         
        </span>
        <input type="text" name="user" id="user" placeholder="ناوی نەخۆش"required>
      </div>

      <div class="form-item">
        <span class="material-icons-outlined">
       
        </span>
        <input type="text" name="phone number" id="ph.num" placeholder="ژمارەی موبایل"required>
      </div>
    
      <div class="form-item" >
        <span class="material-icons-outlined" ></span>
     <input type="radio"name=" gender"id="gender"placeholder=" ڕەگەز">نێر
     <input type="radio"name=" gender"id="gender"placeholder=" ڕەگەز">مێ
    </div>
   
    <div class="form-item" >
        <span class="material-icons-outlined" ></span>
     <input type="datetime-local"name="select date"id="select date"placeholder="دیاری کردنی کات" required>

    
</div>


<div class="form-item" >
    <span class="material-icons-outlined" ></span>
 <input type="submit"name="send us"id="send us"placeholder="بۆمان بنێرەو" >

      

    </form>
  </div>
  <script src="scform.js"></script>
</body>

</html>