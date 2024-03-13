<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<img src="/Image/home.jpg" alt="Home" class=" w-100 position-relative img-fluid z-n1">

<main class="grid mx-5">
   <h1 class="text-center mt-3 mb-5"> Facilities</h1>
   <div class="row row-gap-3">
      <?php for ($i = 0; $i < 4; $i++): ?>
         <div class="col-6 col-md-3">
            <div class="card" style="height : 320px;">
               <img src="<?= $facilities[$i]['image'] ?>" style="height : 200px;" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">
                     <?= $facilities[$i]['title'] ?>
                  </h5>
                  <p class="card-text">
                     <?= $facilities[$i]['description'] ?>
                  </p>
               </div>
            </div>
         </div>
      <?php endfor ?>
   </div>
   <h1 class="text-center mt-3 mb-5"> Rooms</h1>
   <div class="row row-gap-3">
      <?php for($l=0 ;$l<2 ;$l++) : ?>
            <div class="col-12 col-md-6">
               <div class="d-flex flex-row w-100">
                  <div class="card mb-5 overflow-hidden" style="min-width: 100%; height: 300px;">
                     <div class="row h-100 g-0">
                        <div class="col-5 h-100">
                           <img src="<?= $rooms[$l]['image'] ?>" class="img-fluid rounded-start object-fit-fill w-100 h-100" alt="facilities">
                        </div>
                        <div class="col-7">
                           <div class="card-body ">
                              <h4 class="card-title"><?= $rooms[$l]['room_type'] ?></h4>
                              <p class="card-text fs-6"><?= $rooms[$l]['description'] ?></p>
                              <p class=" fs-6"> Max Adults : <?= $rooms[$l]['max_adults'] ?> </p>
                              <p class=" fs-6">Max Childs : <?= $rooms[$l]['max_childs'] ?></p>
                              <div class="d-flex flex-row justify-content-between">
                                 <p class=" fs-6">Number Of Bed : <?= $rooms[$l]['no_of_bed'] ?></p>
                                 <form action="/booking" method="GET">
                                    <input type="hidden" name="room_id" value="<?= $rooms[$l]['id'] ?>">
                                    <button type="submit" class="btn btn-outline-success">Booking</button>
                                 </form>
                              </div> 
                           </div> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <?php endfor ?>
   </div>
</main>
<?php require("partials/footer.view.php") ?>