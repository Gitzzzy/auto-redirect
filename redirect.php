<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10; url=subscribtion">
    <title>Page Redirect</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--BOOTSTRAP #CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style/css/style.css">

</head>
<body>
    


<div class="container mt-5">
<div class="card bg-dark text-white">
    <div class="card-header">
      World Server Link
    </div>
    <div class="card-body text-center">
        <h3>Redirecting on : </h3> 
        <h1 id="number">2140</h1>
  </div>
  <div class="card-footer text-center">
      <p class="lead text-muted"><i class="fas fa-info-circle"></i> This page are auto redirecting to the destination page....</p>
  </div>
  </div>
</div>


<style>
  body {
    background: url("img/bg.gif");
    background-repeat: no-repeat;
    background-size : cover;
    background-attachment : fixed;
  }
</style>




<>
  script  
var timer = 2140;

setInterval( function() {
    timer--;

    if( timer >= 0 ){
        field = document.getElementById('number');
        field.innerHTML = timer;
    }
});
</script>
<!--Bootstrap Script-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>