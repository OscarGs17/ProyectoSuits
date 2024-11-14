<?php
    if(!isset($_SESSION['usuario'])){
        header("location:login");
        exit();
    }
?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./public/img/imagen1.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
      