<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main class="mx-5">
   <h1 class="text-center mt-3 mb-5">
      <?= $title ?>
   </h1>
   <div class="grid w-100">
      <div class="row w-100">
         <?php foreach ($facilities as $faciity): ?>
            <div class="col-12 col-md-6">
               <div class="d-flex flex-row w-100">
                  <div class="card mb-5 overflow-hidden" style="min-width: 100%; height: 200px;">
                     <div class="row h-100 g-0">
                        <div class="col-5 h-100">
                           <img src="<?= $faciity['image'] ?>" class="img-fluid rounded-start object-fit-fill w-100 h-100" alt="facilities">
                        </div>
                        <div class="col-7">
                           <div class="card-body ">
                              <h3 class="card-title"><?= $faciity['title'] ?></h3>
                              <p class="card-text fs-5"><?= $faciity['description'] ?></p>
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