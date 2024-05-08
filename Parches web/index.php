<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MBX Hotel</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="header">
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li class="logo">Domain</li>
      <li><a href="#service">Service</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

  </div>
  <div class="ban" id="home">
    <div class="ban-text">
      <h2>MBX Hotel</h2>
      <p>Welcome to MBX Hotel, Arbaminch - where luxury meets comfort. </p> <p>
        Experience elegant accommodations, exceptional dining, and personalized service.</p>
     <a href="https://youtu.be/4K6Sh1tsAW4?si=kY1fgm-APSV4BFb9">Visit</a>
    </div>
  </div>
  <div class="about" id="about">
    <div class="section-header">
      <h2>About Us</h2>
      <p>Experience the comfort of MBX Hotel in Arbaminch. Indulge in delicious dishes, unwind in our cozy bedrooms, and enjoy a range of exceptional services during your stay
      </p>
    </div>
    <div class="about-content">
        <div class="single-about">
          <img src="img/jin.jpg" alt="">
          <div class="about-text">
            <h2>Best Time In Arba Minch</h2>
            <a href="map.html">View Map</a>

          
      </div>
    </div>
  </div>
  </div>

<div class="service" id="service">
  <div class="section-header">
    <h2>Our Service</h2>
    <p>Discover a world of luxury and hospitality at MBX. Our hotel offers exquisite rooms for a comfortable stay, delectable dining experiences at our restaurant, and event halls for memorable gatherings. Host your special dinner with us and enjoy personalized service that exceeds expectations.</p>
  </div>  
<div class="service-contet">
  <div class="single-service">
    <img src="img/jin4.jpg" alt="">
    <h2>Modern and Tranditional Foods</h2>
    <p>Enjoy a mix of modern and traditional meals at our hotel. We serve a variety of dishes that combine classic flavors with contemporary twists, ensuring a delightful dining experience for all our guests.</p>
    <a href="#">View</a>
  </div>
 <div class="single-service">
      <img src="img/d.jpg" alt="">
      <h2>Confortable Bed Room and Guest House</h2>
      <p>Indulge in relaxation and comfort at MBX's luxurious bedrooms. Our rooms are elegantly designed with modern amenities to ensure a restful stay. Experience plush bedding, soothing decor, and thoughtful touches that create a tranquil retreat during your visit.</p>
      <a href="#">View</a>
    </div>
 
    
      <div class="single-service">
        <img src="img/jin3.avif" alt="">
        <h2>Pool and Additional Service</h2>
        <p>Take a refreshing dip in our pool, one of the additional services we offer to enhance your stay. Relax by the poolside and enjoy a range of amenities designed to make your visit truly memorable.</p>
        <a href="#">View</a>
      </div>
</div>
</div> 
</div> 
<div class="contact"  id="contact">
  <div class="section-header">
    <h2>Contact Us</h2>
    <p>Have a question or need assistance? Contact us and we'll be happy to help!</p>
  </div>
</div> 
  <div class="single-contact">
  <form action="submit.php" method="post">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="text" name="name" placeholder="Enter your name">
        <textarea name="comment" cols="30" rows="10" placeholder="Enter your Query"></textarea>
        <input type="submit" value="Submit">
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $to = "tgmag5677@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nComment: $comment";
    mail($to, $subject, $message);
    echo "Thank you for your submission!";
}
?>
    </form>
  </div>

<footer>
  <h1> Contact Information</h1>
  <p> Call : +251 926505677 <b><br>
      Address : Arba Minch, Ethiopia</b></p>
  <p>  </p>
  <p>Copyright By Afomia Girma</p>
</footer>
  <script>
    $(window).on("scroll", function() {
if  ($(window).scrollTop() >50){
  $(".header").addClass("active");
}
else{
  $(".header").removeClass("active");
}

    });
  </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 
 
</body>
</html>