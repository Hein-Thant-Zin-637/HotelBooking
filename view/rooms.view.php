<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main>
   <h1 class="text-center mt-3 mb-5">
      <?= $title ?>
   </h1>
   <div class="grid w-100">
      <div class="row w-100 px-5">
         <?php foreach ($rooms as $room): ?>
            <div class="col-12">
               <div class="d-flex flex-row w-100">
                  <div class="card mb-5 overflow-hidden img-height" style="min-width: 100%; height: 100%;">
                     <div class="row h-100 g-0">
                        <div class="col-md-5 h-100 position-relative">
                           <img src="<?= $room['image'] ?>" class="img-fluid rounded-start object-fit-fill w-100 h-100" style="height: 350px;" alt="facilities">
                           <p style="position: absolute; top:15px; right:20px" class="fs-5 bg-success text-white p-2"><?= $room['price'] ?> MMK</p>
                        </div>
                        <div class="col-md-7">
                           <div class="card-body ">
                              <h3 class="card-title"><?= $room['room_type'] ?></h3>
                              <p class="card-text fs-5"><?= $room['description'] ?></p>
                              <p class=" fs-5"> Max Adults : <?= $room['max_adults'] ?> </p>
                              <p class=" fs-5">Max Childs : <?= $room['max_childs'] ?></p>
                              <div class="d-flex flex-row justify-content-between">
                                 <p class=" fs-5">Number Of Bed : <?= $room['no_of_bed'] ?></p>
                                 <form action="/booking" method="GET">
                                    <input type="hidden" name="room_id" value="<?= $room['id'] ?>">
                                    <button type="submit" class="btn btn-lg btn-outline-success">Booking</button>
                                 </form>
                                 
                              </div> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</main>
<?php require("partials/footer.view.php") ?>