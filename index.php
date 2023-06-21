<!DOCTYPE html>
<html>
<head>
  <title>Kantin Wikrama</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/dc37756546.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: grey;
    }
  </style>
</head>
<body>
  <header>
    <div class="container-menu">
      <h1>Wikrama's Eat</h1>
      <nav>
        <ul>
          <li><a href="#home"><i class="fa-solid fa-house"></i></a></li>
          <li><a href="#products"><i class="fa-solid fa-cart-shopping"></i></a></li>
          <li><a href="#contact"><i class="fa-solid fa-address-book"></i></a></li>
          <a href="logout.php" style="margin-left: 1100px;"><i class="fa-solid fa-right-from-bracket fa-xl"></i></a>
        </ul>
      </nav>
    </div>
  </header>

  <main>

  <section id="home">
    <div style="position: relative; display:inline-block;">
    <img src="img/bg-menu.jpg" alt="" style="width:1518px; margin-top:-20px; margin-left: -19px;">
    <h1 style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); font-family: sans-serif; text-align: center; color: white; font-size: 60px;">Welcome To Wikrama's Eat</h1>
    <h3 style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; font-size: 20px;">Enjoy Your Stay</h3>
    </div>
  </section>

  
  <br>
  <h2>Most Purchased</h2>
  <br>

  
  <section id="products">
    <div class="card mb-3" style="max-width: 1090px;">
      <div class="row g-0" style="background-color: lightblue;">
        <div class="col-md-4" >
          <img src="img/mieayam.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">Mie Ayam Bakso</h4>
            <p class="card-text">Mie Ayam Bakso adalah hidangan mie yang terdiri dari mie kuning yang dimasak dan disajikan dengan irisan daging ayam, bakso, serta berbagai sayuran seperti sawi, taoge, dan daun bawang. Biasanya disajikan dengan kuah ayam yang gurih dan bumbu khusus.</p>
            <p class="card-text"><small class="text-body-secondary">Harga: 7k~10k</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3" style="max-width: 1090px;">
      <div class="row g-0" style="background-color: lightblue;">
        <div class="col-md-4">
          <img src="img/batagor.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h4 class="card-title">Batagor</h4>
            <p class="card-text">Batagor merupakan singkatan dari Bakso Tahu Goreng, sebuah hidangan yang terdiri dari bakso ikan atau daging yang diisi ke dalam tahu. Batagor biasanya disajikan dengan kuah bumbu kacang dan saus pedas. Hidangan ini populer di daerah Bandung, Indonesia, dan sering dijadikan sebagai jajanan atau makanan ringan.</p>
            <p class="card-text"><small class="text-body-secondary">Harga: 5k~10k</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>

      <br>
        <h2>Most Liked</h2>
      <br>
      <div class="cardcolor" >
          <div class="card-group">
      <div class="card" style="background-color: lightblue;">
        <img src="img/seblak3.jpg" class="card-img-top" alt="..." >
        <div class="card-body" >
          <h5 class="card-title">Seblak</h5>
          <p class="card-text">Seblak adalah makanan Indonesia yang terbuat dari kerupuk basah yang dimasak dengan bumbu pedas. Biasanya, seblak juga ditambahkan dengan berbagai bahan tambahan seperti mie, tahu, telur, sosis, sayuran, dan daging ayam atau daging sapi. Seblak memiliki rasa pedas yang khas dan tekstur yang garing dan kenyal.</p>
          <p class="card-text"><small class="text-body-secondary">Harga: 5k~10k</small></p>
        </div>
      </div>
      <div class="card" style="background-color: lightblue;">
        <img src="img/nasgor.png" class="card-img-top" alt="..." style="width: 736px;">
        <div class="card-body">
          <h5 class="card-title">Nasi Goreng</h5>
          <p class="card-text">Nasi goreng adalah hidangan nasi yang digoreng dengan berbagai bumbu dan bahan tambahan. Nasi goreng umumnya terdiri dari nasi putih yang digoreng dengan minyak, kemudian ditambahkan dengan bumbu seperti kecap, bawang putih, bawang merah, dan cabai. Selain itu, nasi goreng juga sering diisi dengan telur, daging, udang, sayuran, dan rempah-rempah lainnya sesuai selera.</p>
          <p class="card-text"><small class="text-body-secondary">Harga: 12k</small></p>
        </div>
      </div>
    </div>
  </div>
</main>

  <section class="contact" id="contact">
      <div class="contentc">
        <h2>Contact Me</h2>
        <p></p>
      </div>
       <div class="contactForm">
              <form>
                <h2>Send Message</h2>
                <div class="inputBox">
                  <input type="text" name="" required="required">
                  <span>Full Name</span>
                </div>
                <div class="inputBox">
                  <input type="text" name="" required="required">
                  <span>Email</span>
                </div>
                <div class="inputBox">
                  <textarea required="required"></textarea>
                  <span>Type your Message...</span>
                </div>
                <div class="inputBox">
                  <input type="submit" name="" value="Send">
                </div>
              </form>
        </div>
      </div>

    </section>


    <div class="navbar-btm">
  <p>© 2023 Wikrama's Eat. All rights reserved.</p>
  </div>
</body>
</html>


