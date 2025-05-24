
    

<head>
 '
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Index - Ritcom Systems and Services PVT LTD.</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
   
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
 <script>
 <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
  document.getElementById('navmenu').classList.toggle('active');
});
  </script>


 
</head>
<style>
  .button:hover {
    background-color: antiquewhite;
    color: gray;
  }
  .navmenu {
  display: flex;
  justify-content: space-around;
  background-color: #f8f9fa;
}

/* Hide mobile nav toggle by default */
.mobile-nav-toggle {
  display: none;
}

/* Styles for mobile screens */
@media (max-width: 768px) {
  .navmenu ul {
    display: none; /* Hide menu by default on mobile */
    flex-direction: column;
    background-color: #fff;
    position: absolute;
    top: 60px; /* Adjust based on header height */
    right: 0;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  .navmenu.active ul {
    display: flex; /* Show menu when active */
  }
  
  .mobile-nav-toggle {
    display: block; /* Show toggle icon on mobile */
    cursor: pointer;
  }
}
</style>

<body class="index-page">
       
          
    </div>
    
  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color:white;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
         
        <!--<h1 class="sitename">Ritcom Systems and Services</h1>-->
      </a>
      <style>
      .c {
        margin-right: 600px;
      }
      .d {
        margin-right: 500px;
      }
      
      .helpline {
        margin-top:20px;
  position: absolute;
  top: 10px; /* Adjust this value to position it below the nav bar */
  right: 20px; /* Adjust this value to move it horizontally */
  font-size: 16px;
  
  color:red;/* Change the color if needed */
  background-color: #fff; /* Optional: add background color */
  padding: 5px 10px; /* Optional: add some padding */
  border-radius: 5px; /* Optional: rounded corners */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: shadow effect */
  z-index: 1000; /* Ensure it stays on top */
}
.image-gallery {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* This creates 4 columns */
  gap: 20px; /* Adjust space between images */
  margin-top: 20px; /* Space above the gallery */
}

.image-item img {
  width: 100%; /* Ensure images fill the container */
  height: auto; /* Maintain aspect ratio */
  border-radius: 5px; /* Optional: Add rounded corners to the images */
}
</style>
      </style>
      
      <img src="assets/img/portfolio/download (26).jpeg" alt="" height="50" width="125" class="c">
      <br>
      
     
      <nav id="navmenu" class="navmenu">
        <ul>
        

          <li><a href="#hero" class="active" style="color:gray;">Home</a></li>
          <li><a href="#about" style="color:gray;">About</a></li>
          <li class="dropdown"><a href="#services" style="color:gray;"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
              <?php echo'<li><a href="cfc.php">Computer Repair and Services</a></li>';?>
              
              <?php echo'<li><a href="ob.php">Cloud & IT Solutions </a></li>';?>
              <?php echo'<li><a href="ne.php">Networking Solution</a></li>';?>
              <?php echo'<li><a href="cct.php">CCTV Surveillance Solutions</a></li>';?>
              <?php echo'<li><a href="back.php">Power Backup Solution</a></li>';?>
              <?php echo'<li><a href="adv.php">Audio Video Solution</a></li>';?>
              <?php echo'<li><a href="scl.php">Smart Class Solution</a></li>';?>
              <?php echo'<li><a href="cse.php">Cyber Security</a></li>';?>
            </ul>
          </li>
          <li class="dropdown" ><a href="#clients" style="color:gray;"><span>Clients</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul  class="bg">
            <style>
              .bg{
                color:black;
                justify-content: center;
              }
              .img-fluida {
                height:235px;
                width: 255px;
              }
            </style>
            <li><a href="#clients">Irrigation Department</a></li>
              <li><a href="#clients">UPDESCO</a></li>
              <li><a href="#clients">Public Service Commission</a></li>
              <li><a href="#clients">UP Power Corporation LTD</a></li>
             
              <li><a href="#clients">Aryavart Bank</a></li>
              <li><a href="#clients">Indian  Academy of Highway Engineers</a></li>
              <li><a href="#clients">IIIT Bhagalpur</a></li>
              <li><a href="#clients">UP University of Medical Science</a></li>
              <li><a href="#clients">UPDESCO</a></li>
              <li><a href="#clients">Dr. RML National Law University, Lucknow</li>
              
              
             
            </ul>
          </li>
          <?php echo'<li class="dropdown"><a href="" style="color:green;"><span>Employee Login</span> </a>';?>
          
          </li>
          
           
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
       

      <a class="btn-getstarted" href="aus.php">Get Started</a>

    </div>
  </header>
 <!-- Placeholder for the chatbot -->
 <div id="chatbot-icon" onclick="toggleChatbot()">
    💬 
   
</div>
<

<!-- Chatbot Container (Hidden by Default) -->
<div id="chatbot-container" style="display: none;"></div>

<script>
    // Function to toggle chatbot
    function toggleChatbot() {
        const container = document.getElementById('chatbot-container');
        if (container.style.display === 'none') {
            loadChatbot();
            container.style.display = 'block';
        } else {
            container.style.display = 'none';
        }
    }

    // Load chatbot dynamically
    function loadChatbot() {
        if (!document.querySelector('zapier-interfaces-chatbot-embed')) {
            const script = document.createElement('script');
            script.type = 'module';
            script.src = 'https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js';
            script.async = true;
            document.head.appendChild(script);

            const chatbotEmbed = document.createElement('zapier-interfaces-chatbot-embed');
            chatbotEmbed.setAttribute('is-popup', 'false');
            chatbotEmbed.setAttribute('chatbot-id', 'cm8wx35q0001iy3esi0o1uqrd');
            chatbotEmbed.setAttribute('height', '300px');
            chatbotEmbed.setAttribute('width', '400px');

            document.getElementById('chatbot-container').appendChild(chatbotEmbed);
        }
    }
</script>

<style>
    /* Circular Chatbot Icon */
    #chatbot-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #007bff;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 28px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
        z-index: 1000;
    }

    #chatbot-icon:hover {
        background-color: #0056b3;
    }

    /* Chatbot Container (for chatbot popup) */
    #chatbot-container {
        position: fixed;
        bottom: 90px;
        right: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        overflow: hidden;
    }
</style>


 



  <main class="main">
  

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">
    
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-9 order-2 order-lg-1 d-flex flex-column justify-content-center">
            
            <h1>Better  customer experience with Ritcom </h1>
            <p>We are team of talented engineers aimed at providing best solution at minimal rate</p>
      
            <div class="d-flex">
              <?php echo'<a href="aus.php" class="btn-get-started">Know More</a>';?>
            </div>
            
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
      


    </section><!-- /Hero Section -->
     
            

    

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/portfolio/sir - Copy.jpg" class="img-fluida" alt="" >
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Director's Desk</h3>
            
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>At Ritcom we are dedicated to provide innovative IT services and solutions that empower businesses to achieve their full potential. With 14 years of experience in the industry, we have built a reputation for delivering reliable, cutting-edge technologies that help organizations streamline operations, enhance productivity, and stay ahead in today’s rapidly evolving digital landscape.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Our team of expert professionals is committed to understanding the unique challenges our clients face and tailoring solutions that meet their specific needs. Whether you are a small business looking to optimize your IT infrastructure or a large enterprise seeking comprehensive digital transformation, we have the expertise to help you succeed.</span></li>
             

                  </ul>      
            <a href="aus.php" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->
   
      <!-- About Section -->
      <section id="about" class="about section">

        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
              <h3>We are proud to deliever our services to the Government organizations</h3>
              <p class="fst-italic">
              Ritcom provides a range of services and solutions to businesses, individuals, and other organizations. Our services are essential for maintaining and enhancing the technological infrastructure of the clients. Here are some key businesses and services provided by us.         </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Ritcom provides ongoing monitoring, maintenance, and management of a business's IT infrastructure, such as data centre, computers, wired and wireless network, cctv surveillance, power backup, audio/video conferencing and software development.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Prioritizing the needs of the people and working towards improving their quality of life through effective policy implementation. </span></li>
                <li><i class="bi bi-check-circle"></i> <span>Support teams assist businesses with troubleshooting hardware and software issues, often remotely or on-site.</span></li>
                     <li><i class="bi bi-check-circle"></i> <span>Offering immediate assistance for IT infrastructure related issues.</span></li>

                    </ul>      
            
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /About Section -->
     
  

    <!-- Services Section -->
    <section id="services" class="services section"> 

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>We cater to customer needs by providing listed services and more <div ></div> </p>
      </div><!-- End Section Title -->
<style>
  .button2 {
    background-color: #008CBA;
    color: white; 
    border: 2px solid #008CBA;
  }
  .button2:hover {
    background-color: white;
    color: : #008CBA;
  }  
</style>
      <div class="container">

        <div class="row ">
          
          

          <div class="col" data-aos="fade-up" data-aos-delay="100">
            <div >
              <div><img src="assets\img\portfolio\images (8).jpeg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>Cloud & IT Solutions</b></a></h5>
               <?php echo' &emsp;&emsp;     &emsp;&emsp;&emsp;&emsp; &emsp;&emsp; <a href="ob.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                </div>
              </div>
            </div>
          
          <!-- End Service Item -->

          <div class="col" data-aos="fade-up" data-aos-delay="200">
            <div >
              <div ><img src="assets\img\portfolio\networking.jpeg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>Networking Solution</b></a></h5>
               <?php echo'  &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;<a href="ne.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                </div>
              </div>
          
          </div><!-- End Service Item -->

         <!-- End Service Item -->

          <div class="col" data-aos="fade-up" data-aos-delay="400">
            <div >
              <div ><img src="assets\img\portfolio\security-solutions.jpg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>CCTV Surveillance Solutions</b></a></h5>
  <?php echo'                &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;<a href="cct.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                </div>
              </div>
            </div>
          <!-- End Service Item -->

          <div class="col" data-aos="fade-up" data-aos-delay="500">
            <div >
              <div ><img src="assets\img\portfolio\pb.jpeg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>Power Backup Solution</b></a></h5>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp; <?php echo'<a href="back.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                </div>
              </div>
          
          </div><!-- End Service Item -->
          <div class="col" data-aos="fade-up" data-aos-delay="500">
            <div >
              <div ><img src="assets\img\portfolio\Audio video.jpeg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>Audio Video Solution</b></a></h5>
                <?php echo'  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;<a href="adv.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                </div>
              </div>
          
          </div><!-- End Service Item -->
          <div class="col" data-aos="fade-up" data-aos-delay="500">
            <div > 
              <div ><img src="assets\img\portfolio\smart class.jpeg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>Smart Class Solution</b></a></h5>
               <?php echo' &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp; <a href="scl.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                </div>
              </div>
            
          </div><!-- End Service Item -->

          
          <div class="col" data-aos="fade-up" data-aos-delay="600">
            <div >
              <div ><img src="assets\img\portfolio\cyber sec.jpeg" alt="" width="260" height="260"></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link"><b>Cyber Security </b> </a></h4>
                <?php echo' &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &emsp;<a href="cse.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
                 </div>
              </div>
            </div>
            <div class="col" data-aos="fade-up" data-aos-delay="300">
            <div >
              <div ><img src="assets\img\portfolio\customer.jpeg" alt="" width="260" height="260"></div>
              <div>
                <h5 class="title"><a href="#" class="stretched-link"><b>Computer Repair & IT Services</b></a></h5>
               <?php echo' &emsp;&emsp;   &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;<a href="cfc.php"> <button type="button" class="btn btn-primary">Explore..</button></a><br>';?>
              </div>
            </div>
          </div>
          </div><!-- End Service Item -->
        </div>

        </div>

      </div>
      <style>
        h2 {
  text-align: center;
  font-size: 36px;
  color: #333;
  margin-bottom: 30px;
  font-family: 'Arial', sans-serif;
}

/* Image Gallery Styling */
.image-gallery {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* 4 columns */
  gap: 20px; /* Spacing between images */
  margin-top: 20px; /* Top margin for spacing */
  padding: 0 20px;
  background-color: #f7f7f7; /* Background color */
  border-radius: 10px; /* Rounded corners for gallery */
}

/* Individual Image Item Styling */
.image-item {
  overflow: hidden;
  position: relative;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth animation */
}

/* Hover Effect on Image Items */
.image-item:hover {
  transform: scale(1.05); /* Slight zoom-in effect */
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* More pronounced shadow */
}

/* Ensuring images are responsive */
.image-item img {
  width: 100%;
  height: auto; /* Maintain aspect ratio */
  display: block;
  border-radius: 10px; /* Round corners on the images */
  transition: opacity 0.3s ease-in-out;
}

/* Responsive Design: Adjust columns on smaller screens */
@media (max-width: 1024px) {
  .image-gallery {
    grid-template-columns: repeat(3, 1fr); /* 3 columns for tablet size */
  }
}

@media (max-width: 768px) {
  .image-gallery {
    grid-template-columns: repeat(2, 1fr); /* 2 columns for mobile size */
  }
}

@media (max-width: 480px) {
  .image-gallery {
    grid-template-columns: 1fr; /* 1 column for very small screens */
  }
}
      </style>

    </section><!-- /Services Section -->
    <section id="clients" > 

    <h2><b>Clients</b></h2>
<div class="image-gallery">
    <div class="image-item">
        <img src="assets/img/portfolio/download.jpg" alt="" width="300" height="100">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/irri.png" alt="" width="300" height="100">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/pow.png" alt="" width="300" height="100">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/ltd.jpg" alt="" width="300" height="100">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/download (1).png" alt="" width="300" height="100">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/images.jpg" alt="" width="300" height="100">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/images.png" alt="" height="100" width="300">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/download (3).jpg" alt="" height="100" width="300">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/download (4).jpg" alt="" height="100" width="300">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/download (5).jpg" alt="" height="100" width="300">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/download (6).jpg" alt="" height="100" width="300">
    </div>
    <div class="image-item">
        <img src="assets/img/portfolio/download (4).png" alt="" height="100" width="300">
    </div>
</div>
</section>
    
<section id="testimonials" class="testimonials section light-background">

   
    <h2 style="font-size: 45px;text-align: center;">Authorised Dealer</h2><br>
    

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <p style="font-size: 15px;"><b>Our strategic distributors help us deliver unmatched business value and unique experiences.</b></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper" >

            <div class="swiper-slide">
              <div class="testimonial-item" "="">
            <img src="assets\img\portfolio\net1.jpg" alt="" height="100" width="300">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\portfolio\net2.png" alt="" height="120" width="300">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" >
                <img src="assets\img\portfolio\net3.png" alt="" height="120" width="300">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
               <img src="assets\img\portfolio\net4.png" alt="" height="120" width="300">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item"> 
                <img src="assets\img\portfolio\dell.png" alt="" height="120" width="300">
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\portfolio\hp.png" alt="" height="120" width="300">
                
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\portfolio\acer.png" alt="" height="120" width="300">
                
              </div>
            </div><!-- End testimonial item -->
           
           
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets\img\portfolio\new.png" alt="" height="120" width="300">
                
              </div>
            </div>
            
            
 
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets\img\portfolio\cpp.png" alt="" height="120" width="300">
              
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets\img\portfolio\cpe.jpg" alt="" height="120" width="300">
              
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets\img\portfolio\apc.png" alt="" height="120" width="300">
              
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets\img\portfolio\sop.jpg" alt="" height="120" width="300">
              
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets\img\portfolio\for.png" alt="" height="120" width="300">
              
            </div>
          </div><!-- End testimonial item -->
            
          </div>
          </section>
       
       <!-- Contact Section -->
    <<!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p>You can come directly at our office or contact via phone or mail us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Dhan Nirman Complex</p>
                  <p> Ashok Marg, Lucknow - 226001</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>0522-404-4724</p>
                  
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>ritcomsystems@gmail.com</p>
                
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Saturday</p>
                  <p>10:30AM - 7:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>
          <div class="col-lg-6">
          <form action="" method="POST">
            
            <p>

                           <label for="name"> &emsp; &emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;&emsp;Name:&emsp;</label>
                           <input type="text" name="name" id="name">
                        </p>
            
                        
            <p>
                           <label for="email">&emsp; &emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;&emsp;Email:&emsp;</label>
                           <input type="text" name="email" id="email">
                        </p>
            
                        
            <p>
                           <label for="subject">&emsp; &emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;Subject:&emsp;</label>
                           <input type="text" name="subject" id="subject">
                        </p>
            
                        
            <p>
                           
            
                        
            <p>
                           <label for="message">&emsp; &emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp;&emsp;Message:&emsp;</label>
                           <textarea name="message" id="message" rows="4" cols="25"></textarea>
                        </p>
                     
                        &emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp;&emsp;&emsp; &emsp; &emsp;&emsp;&emsp; &emsp; &emsp; &emsp;&emsp;   <button type="sumnit" value="submit" class="btn btn-primary">Submit</button>
                     </form>
           
          </div><!-- End Contact Form -->
           
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Ritcom System and Services Private Limited</span>
          </a>
          <p>Welcome to Ritcom, your trusted partner in delivering cutting-edge computer services. We specialize in providing comprehensive IT solutions that cater to businesses and individuals alike. With over 5 years of experience, we are committed to enhancing your digital world with innovative, reliable, and efficient technology services.</p>
          <div class="social-links d-flex mt-4">
            
            <b><a href="https://www.facebook.com/p/Ritcom-Systems-And-Services-100068259100778/"><i class="bi bi-facebook"></i></a></b>
         
            <a href="https://www.linkedin.com/company/ritcom-systems-and-services/about/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Services</a></li>
              <?php echo'<li class="dropdown"><a href="http://ritcomsystems.com/crm/admin" style="color:yellow;"><span>Employee Login</span> </a>';?>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <?php echo'<li><a href="ne.php">Networking Solution</a></li>';?>
            <?php echo'<li><a href="cct.php">CCTV Surveillance</a></li>';?>
            <?php echo'<li><a href="back.php">Power Backup</a></li>';?>
            <?php echo'<li><a href="cse.php">Cyber Sercurity</a></li>';?>
            <?php echo'<li><a href="ob.php">IT Services and Solutions</a></li>';?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Dhan Nirman Complex,</p>
          <p>Ashok Marg, Lucknow -</p>
          <p>226001</p>
          <p class="mt-4"><strong>Phone:</strong> <span>0522-404-4724</span></p>
          <p style="color:white;"><b>Helpline: 9336131915</b></p>
          <p><strong>Email:</strong> <span>ritcomsystems@gmail.com.</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Ritcom System and Services Private Limited</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Shashank Singh</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>
?> 
<?php
error_reporting(E_ERROR | E_PARSE);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "nda";

$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    die("connection to the database failedc");
}

$name = $_POST['name'];
$email = $_POST['email'];



$subject = $_POST['subject'];
$message = $_POST['message'];

$sql =  "INSERT INTO `nda`.`nma`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email', '$subject ', '$message');";
  
    if($con->query($sql) == true){
        echo "successfully submitted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
  
    $con->close();


   
  

?> 