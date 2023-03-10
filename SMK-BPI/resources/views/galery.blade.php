<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/siswa">Data Siswa</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/guru">Data Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/galery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel wrapper -->
<div
id="carouselBasicExample"
class="carousel slide carousel-fade"
data-mdb-ride="carousel"
>
<!-- Indicators -->
<div class="carousel-indicators">
  <button
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide-to="0"
    class="active"
    aria-current="true"
    aria-label="Slide 1"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide-to="1"
    aria-label="Slide 2"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide-to="2"
    aria-label="Slide 3"
  ></button>
</div>

<!-- Inner -->
<div class="carousel-inner">
  <!-- Single item -->
  <div class="carousel-item active">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp"
      class="d-block w-100"
      alt="Sunset Over the City"
    />
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>
        Nulla vitae elit libero, a pharetra augue mollis interdum.
      </p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp"
      class="d-block w-100"
      alt="Canyon at Nigh"
    />
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp"
      class="d-block w-100"
      alt="Cliff Above a Stormy Sea"
    />
    <div class="carousel-caption d-none d-md-block">
      <h5>Third slide label</h5>
      <p>
        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
      </p>
    </div>
  </div>
</div>
<!-- Inner -->

<!-- Controls -->
<button
  class="carousel-control-prev"
  type="button"
  data-mdb-target="#carouselBasicExample"
  data-mdb-slide="prev"
>
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button
  class="carousel-control-next"
  type="button"
  data-mdb-target="#carouselBasicExample"
  data-mdb-slide="next"
>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<!-- Carousel wrapper -->

    
    <!-- Carousel wrapper -->
<div
id="carouselVideoExample"
class="carousel slide carousel-fade"
data-mdb-ride="carousel"
>
<!-- Indicators -->
<div class="carousel-indicators">
  <button
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide-to="0"
    class="active"
    aria-current="true"
    aria-label="Slide 1"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide-to="1"
    aria-label="Slide 2"
  ></button>
  <button
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide-to="2"
    aria-label="Slide 3"
  ></button>
</div>

<!-- Inner -->
<div class="carousel-inner">
  <!-- Single item -->
  <div class="carousel-item active">
    <video class="img-fluid" autoplay loop muted>
      <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
    </video>
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>
        Nulla vitae elit libero, a pharetra augue mollis interdum.
      </p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <video class="img-fluid" autoplay loop muted>
      <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
    </video>
    <div class="carousel-caption d-none d-md-block">
      <h5>Second slide label</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>

  <!-- Single item -->
  <div class="carousel-item">
    <video class="img-fluid" autoplay loop muted>
      <source
        src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
        type="video/mp4"
      />
    </video>
    <div class="carousel-caption d-none d-md-block">
      <h5>Third slide label</h5>
      <p>
        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
      </p>
    </div>
  </div>
</div>
<!-- Inner -->

<!-- Controls -->
<button
  class="carousel-control-prev"
  type="button"
  data-mdb-target="#carouselVideoExample"
  data-mdb-slide="prev"
>
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button
  class="carousel-control-next"
  type="button"
  data-mdb-target="#carouselVideoExample"
  data-mdb-slide="next"
>
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<!-- Carousel wrapper -->
</body>
</html>