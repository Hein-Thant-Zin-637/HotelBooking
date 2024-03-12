<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main>
    <h1 class="text-center mt-3 mb-5"> <?= $title ?></h1>
   <div class="grid my-3">
      <div class="row w-100">
         <div class="col-12 col-md-8">
            <img src="<?= $about['image'] ?>" alt="about" class="image-fluid w-100" >
         </div>
         <div class="col-12 col-md-4 mt-2">
            <h2>About us</h2>
            <p class="fs-4"><?= $about['description'] ?></p>
         </div>
      </div>
   </div>
</main>
<?php require("partials/footer.view.php") ?>