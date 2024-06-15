<?php
// isset() -- Declared returns true and NULL or undefined returns false
// empty() -- Empty returns true and not empty returns false
// $_COOKIE["user"] => associative array
// $_SESSION["user"] => associative array
// header("file_path_to redirect") -- to redirect

### !true === false
### !false === true

// if (!isset($_COOKIE["user"])) {
//   header("Location: ./login/", replace: true);
// }

if (empty($_COOKIE["user"])) {
  header("Location: ./login/");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: #151515;  color: white;">
  <header>
    <h1 style="color: gold;">ACTION MOVIES</h1>
  </header>

  <main style="display: flex; margin-right: 30px; padding: 10px; position: relative;">
    <div class="card mb-3" style="max-width: 540px; padding: 10px; background-color:black;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px; padding:10px ;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px; padding:10px ;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px; padding:10px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  <header>
    <h1 style="color: gold;">HORROR MOVIES</h1>
  </header>

  <main style="display: flex; margin-right: 30px; position: relative;">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="./pics/dcs.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title">Card title</h3>
            <p class="card-text">This is a wider card with supporting text <br> as a natural lead-in to additional content. <br>This content is a little bit longer.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            <button style="background-color: gold;  color: #151515; border-radius: 10px; outline: none; border: none;">watch</button>
          </div>
        </div>
      </div>
    </div>

  </main>
  <marquee style="padding: 50px; background-color: #151515; height: 250px;" behavior="" direction="right">
    <img src="./pics/batiman.jpg" alt="">
    <img src="./pics/batiman.jpg" alt="">
    <img src="./pics/batiman.jpg" alt="">
    <img src="./pics/batiman.jpg" alt="">
    <img src="./pics/batiman.jpg" alt="">
    <img src="./pics/batiman.jpg" alt="">
  </marquee>

</body>

</html>