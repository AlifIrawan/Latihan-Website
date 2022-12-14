<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCsF92tZ8CFWQuCYORvv_A_A&key=AIzaSyCoXuAZtdQVxJUNRS8X9NFuJy7Ygx2dCks');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);



$result = json_decode($result, true);
var_dump($result);

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="mycss.css">

  <title>My portfolio</title>
</head>

<body class="mt-5" id="home">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Haikal Irawan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#about">About</a>
          <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
      <img class="rounded-circle img-thumbnail" src="img/profile1.png" My profile" title="My profile" width="32%">
      <h1 class="display-4">Haikal Irawan</h1>
      <p class="lead">Welcome to my Portfolio with Bootstrap 4 </p>
    </div>
  </div>
  <!-- Akhir Jumbotron -->


  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5  text-center">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus nisi ipsa asperiores voluptatum rerum!
            Dignissimos fugiat molestias quia ut veniam accusantium. Voluptates, et! Incidunt exercitationem nam dolorum
            aut et dicta!</p>
        </div>
        <div class="col-md-5 text-center">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perferendis laudantium quas voluptatem rem,
            sit ut enim ab, itaque cumque aliquid eum, tempore amet nisi repellendus vel animi veniam quibusdam.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir About -->


  <!-- Youtube & IG -->
  <section class="social bg-light" id="social">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Social Media</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-5 ">
          <div class="row">
            <div class="col-md-4">
              <img src="img/profile1.png" alt="foto profile" width="250" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5 class="mt-3">Haikal Irawan</h5>
              <p>100 Subscriber</p>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9 border border-dark rounded">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8uFTPkOz_f4?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="img/profile1.png" alt="foto profile" width="250" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5 class="mt-3">@ir.haikal02</h5>
              <p>210 Followers</p>
            </div>
          </div>

          <div class="row mt-4 pb-3">
            <div class="col">
              <div class="ig-thumbnail rounded float-left overflow-hidden" style="width: 100px; height: 100px;">
                <img src="img/thumbs/1.png" style="width: 100px;" alt="foto">
              </div>
              <div class="ig-thumbnail rounded float-left overflow-hidden" style="width: 100px; height: 100px;">
                <img src="img/thumbs/2.png" style="width: 100px;" alt="foto">
              </div>
              <div class="ig-thumbnail rounded float-left overflow-hidden" style="width: 100px; height: 100px;">
                <img src="img/thumbs/3.png" style="width: 100px;" alt="foto">
              </div>
              <div class="ig-thumbnail rounded float-left overflow-hidden" style="width: 100px; height: 100px;">
                <img src="img/thumbs/4.png" style="width: 100px;" alt="foto">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Youtube & IG -->










  <!-- Portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row mb-4 pt-4">
        <div class="col text-center">
          <h2>Portfolio</h2>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="img/thumbs/1.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="img/thumbs/2.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="img/thumbs/3.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row mb-4">
        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="img/thumbs/4.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="img/thumbs/5.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card">
            <img class="card-img-top" src="img/thumbs/6.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Portfolio -->


  <!-- Contact -->
  <section class="contact bg-light" id="contact">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact Us</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Contact Us</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, necessitatibus.
              </p>
            </div>
          </div>

          <ul class="list-group">
            <li class="list-group-item">
              <h1>Location</h1>
            </li>
            <li class="list-group-item">My Home</li>
            <li class="list-group-item">Jln. Jokotole timur pasar, Socah</li>
            <li class="list-group-item">East Java, Indonesian</li>
          </ul>
        </div>

        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="nama">Nama </label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="telp">No Telp </label>
              <input type="text" class="form-control" id="telp">
            </div>
            <div class="form-group">
              <label for="email">Email </label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pesan">Pesan </label>
              <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group text-right">
              <button type="button" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Contact -->


  <!-- Footer -->
  <footer class="bg-dark text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>&copy;Copyright | 2019</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Akhir footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>