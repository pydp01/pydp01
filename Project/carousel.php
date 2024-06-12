<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/delhi.jpg" class="d-block w-100" alt="Img1" style="height: 600px; width: 800px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Delhi Pride March</h5>
        <p style="padding-left: 70px;">LGBTQ+ community holds pride march in Delhi, flags long struggle for marriage rights</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/africa.jpg" class="d-block w-100" alt="Img2" style="height: 600px; width: 800px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>South Africa Pride March</h5>
        <p style="padding-left: 180px;">Despite Terror Warning, Thousands Rally At South Africa Pride March</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/taiwan.png" class="d-block w-100" alt="Img3" style="height: 600px; width: 800px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Taiwan Pride March</h5>
        <p style="padding-left: 200px;">     </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>