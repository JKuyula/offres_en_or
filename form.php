
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFfvgtroRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <title>Offres En Or</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <header>
    <h1>Offres En Or</h1>
    <nav>
      <ul>
        <li><a href="index.html">Acceuil</a></li>
        <li class="dropdown">
          <a href="#">Collection</a>
          <ul class="dropdown-content">
            <li><a href="cars.html">Véhicules</a></li>
            <li><a href="houses.html">Maisons</a></li>
          </ul>
        </li>
        <li><a href="about.html">À propos</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="intro">
    <div class="left">
      <h2>Publiez une annonce sur notre plateforme</h2>
      <p>Nous serions ravis de vous aider dans le processus d'annonce de votre voiture ou de votre maison sur notre plateforme.<br>
        Pour commencer, veuillez remplir le formulaire ci-dessous. Une fois envoyé, l'un de nos représentants vous contactera rapidement pour vous fournir des informations détaillées sur les tarifs ainsi que les termes et conditions.</p>
    </div>
    
    <!-- Car Image Slider -->
    <div class="right">
      <div class="car-slider">
        <div><img src="images/Accord.png" alt="Car 1"></div>
        <div><img src="images/Camry.png" alt="Car 2"></div>
        <div><img src="images/flat (1).jpg" alt="House 3"></div>
        <div><img src="images/house_2.jpg" alt="House 4"></div>
      </div>
    </div>
  </section>

  <!-- Slick JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
   $('.car-slider').slick({
     autoplay: true,
     dots: true,
     infinite: true,
     speed: 500,
     slidesToShow: 1,
     slidesToScroll: 1
   });
 });
 </script>

  <section id="contact">
    <div class="contact-container container">
      <div class="contact-img">
          <img src="images/email.jpg" alt="" />
      </div>
      <form class="form-container" action="submit_form.php" method="POST">
          <h2>Contactez-nous</h2>
          <input type="text" name="username" placeholder="Nom & Post-nom" required/>
          <input type="email" name="email" placeholder="Adresse E-mail" required/>
          <textarea name="msg" placeholder="Votre message"></textarea>
          <button type="submit" class="btn btn-primary" name="submit">Envoyé</button>
      </form>  
    </div>
  </section>

  <footer>
   <p>&copy; 2024 Offres En Or</p>
  </footer>
  
</body>
</html>
