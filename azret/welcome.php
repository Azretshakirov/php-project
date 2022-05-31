<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Portfolio Website | CodingLab </title>
    <link rel = "icon" href = "https://media.geeksforgeeks.org/wp-content/cdn-uploads/gfg_200X200.png" 
        type = "image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Portfolio</a></div>
      <ul class="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <div class="cancel-btn">
            <i class="fas fa-times"></i>
          </div>
      </ul>
      <div class="media-icons">
        <a href="https://www.instagram.com/azret_shakir"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

<!-- Home Section Start -->
 <section class="home" id="home">
   <div class="home-content">
     <div class="text">
       <div class="text-one">Hello,</div>
       <div class="text-two">I'm Azret Shakir</div>
       <div class="text-three">Developer</div>
       <div class="text-four">From Kyrgyzstan</div>
     </div>
     <div class="button">
     </div>
   </div>
 </section>

<!-- About Section Start -->
<section class="about" id="about">
  <div class="content">
    <div class="title"><span>About Me</span></div>
  <div class="about-details">
    <div class="left">
      <img src="sex.jpg" alt="">
    </div>
    <div class="right">
      <div class="topic">Developer Is My Passion</div>
      <p>Good afternoon, I do effective and bright design of websites and landing pages. I help businesses and studios with branding and design tasks. The most punctual designer you've ever met. Why do customers choose me: 1) I have been engaged in web design since 2020, during this time more than 100 projects have been made. 2) I know how to combine effective and bright design in one project. Sites with my design are easier to promote, since I immediately provide everything that is necessary for the work of a seo specialist. 3) I always deliver the work on time, thanks to my own planning system. 4) There are individual entrepreneurs, convenient payment methods, including cashless settlement with a contract and a full package of documents for your accounting department. 5) I am a private developer, not a studio, we will discuss all the details of the project directly, when working with me you do not need to pay managers and intermediaries.</p>
      <div class="button">
        <a href="azret.png"><button >Download CV</button></a>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- My Skill Section Start -->
<!-- Section Tag and Other Div will same where we need to put same CSS -->
<section class="skills" id="skills">
 <div class="content">
   <div class="title"><span>My Skills</span></div>
   <div class="skills-details">
     <div class="text">
       <div class="topic">Skills Reflects Our Knowledge</div>
       <p></p>
       <div class="experience">
         <div class="num">2</div>
         <div class="exp">Years Of <br> Experience</div>
       </div>
     </div>
     <div class="boxes">
       <div class="box">
         <div class="topic">HTML</div>
         <div class="per">90%</div>
       </div>
       <div class="box">
         <div class="topic">CSS</div>
         <div class="per">80%</div>
       </div>
       <div class="box">
         <div class="topic">JavScript</div>
         <div class="per">70%</div>
       </div>
       <div class="box">
         <div class="topic">PHP</div>
         <div class="per">60%</div>
       </div>
     </div>
   </div>
 </div>
</section>

<!-- My Services Section Start -->
 <section class="services" id="services">
   <div class="content">
     <div class="title"><span>My Services</span></div>
     <div class="boxes">
       <div class="box">
         <div class="icon">
           <i class="fas fa-desktop"></i>
       </div>
       <div class="topic">Web Devlopment</div>
       <p></p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-paint-brush"></i>
       </div>
       <div class="topic">Graphic Design</div>
       <p></p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-chart-line"></i>
       </div>
       <div class="topic">Digital Marketing</div>
       <p></p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fab fa-android"></i>
       </div>
       <div class="topic">Icon Design</div>
       <p></p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-camera-retro"></i>
       </div>
       <div class="topic">Photography</div>
       <p></p>
     </div>
       <div class="box">
         <div class="icon">
           <i class="fas fa-tablet-alt"></i>
       </div>
       <div class="topic">Apps Devlopment</div>
       <p></p>
     </div>
   </div>
   </div>
 </section>

<!-- Contact Me section Start -->
<section class="contact" id="contact">
  <div class="content">
    <div class="title"><span><?php echo "Welcome " . $_SESSION['username'] . ""; ?></span></div>
    <div class="text">
      <div class="topic"></div>
      <p></p>
      <div class="button">
       <a href="logout.php"><button>logout</button></a> 
      </div>
    </div>
  </div>
</section>

<!-- Footer Section Start -->
<footer>
  <div class="text">
    <span> 2022 Project</span>
  </div>
</footer>

  <script src="script.js"></script>
</body>
</html>
