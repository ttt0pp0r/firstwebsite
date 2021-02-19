<?php 
if(isset($_POST['submit'])){
    $to = "dainisvasiljev@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name_last = $_POST['first_name_last'];
    $phone = $_POST['phone'];
    $subject = 'Form submission';
    $subject2 = "Copy of your form submission";
    $message = $first_name_last . " " . $phone . " wrote the following:" . "\n\n" . $_POST['coffee'] . $_POST['coffeeRoast'] . $_POST['coffeeSize'];
    $message2 = "Here is a copy of your message " . $first_name_last . "\n\n" . $_POST['coffee'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name_last. ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/chooseoption.css">
  <link rel="stylesheet" href="style/select-css.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
</head>
<body>
  <div class="main">
    <div id="background">
      <div id="heading">
        <div class="leftSide">
          <a href="about.html">About</a>
          <a href="hotitworks.html">How It Works</a>
          <a href="faq.html">FAQ</a>
        </div>
        <div class="centralImg">
          <a href="index.html"><img src="image/logo.png" alt=""></a>
        </div>
        <div class="rightSide">
          <a href="blog.html">Blog</a>
          <a href="contact.html">Contact</a>
          <a href="chooseoption.html" id="outer">Choose Option</a>
        </div>
      </div>
      <div class="extraText">
        <div class="padding">
          <h2>Choose you Coffee preference</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-in">
    <div class="contact-form">
      <h1>Choose Your Coffee</h1>
      <form method="post" action="">
        <input type="text" placeholder="Name" name="first_name_last" class="contact-form-text">
        <input type="text" placeholder="E-mail" name="email" class="contact-form-text">
        <input type="text" placeholder="Phone" name="phone" class="contact-form-text">
        <select class="select-css" name="coffee">
          <option value="chooseoption">Choose Coffee</option>
          <option value="brazilSanton">Brazil Santos</option>
        </select>
        <select class="select-css" name="coffeeRoast">
          <option value="chooseRoast">Choose Roast</option>
          <option value="cinamon">196 °C (385 °F), Cinnamon Roast</option>
          <option value="newEngland">205 °C (401 °F), New England Roast</option>
          <option value="cityRoast">219 °C (426 °F), City Roast (RECOMENDED)</option>
          <option value="fullCity">225°C (437 °F), Full City Roast</option>
          <option value="vienna">230 °C (446 °F), Vienna Roast</option>
          <option value="french">240 °C (464 °F), French Roast</option>
          <option value="italian">245 °C (473 °F), Italian Roast</option>
        </select>
        <select class="select-css" name="coffeeSize">
          <option value="chooseoption">Choose Size</option>
          <option value="250gr">250gr</option>
          <option value="500gr">500gr</option>
        </select>
        <input type="submit" name="submit" value="Submit" class="contact-form-btn">
      </form>
    </div>
  </div>
    <div class="footer">
    <div class="social">
      <div class="facebook">
        <a href=""><img src="image\049-facebook.png"></a>
      </div>
      <div class="instagram">
        <a href=""><img src="image\060-instagram.png"></a>
      </div>
      <div class="twitter">
        <a href=""><img src="image\027-twitter.png"></a>
      </div>
    </div>
    <div class="signUp">
      <a href=""><b>Extra Text</b></a>
      <a href=""><b>Extra text</b></a>
    </div>
    <p>2021 OGUMAJAS SIA. All Rights Reserved. Site by Dainis Vasiljevs</p>
  </div>  
</body>
</html>