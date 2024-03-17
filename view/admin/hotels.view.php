<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top: 50px;">


   <h1 class="text-center mt-3 mb-5">
      <?= $title ?>
   </h1>
   <form action="/hotels" class=" mx-5 fs-4 " method="POST">
      <div class="mb-3">
         <label for="email" class="form-label">Emails :</label>
         <input type="email" class="form-control shadow-none fs-5" id="email"  name="email" value="<?= $hotels[1]['description'] ?? '' ?>">
         <?php if (isset($errors['email'])) : ?>
            <p class="text-danger fs-5"><?= $errors['email'] ?></p>
         <?php endif ?>
      </div>
      <div class="mb-3 mt-3">
         <label for="phone" class="form-label">Phone :</label>
         <input type="text" class="form-control shadow-none fs-5" id="phone"  name="phone" value="<?= $hotels[2]['description'] ?? '' ?>">
         <?php if (isset($errors['phone'])) : ?>
            <p class="text-danger fs-5"><?= $errors['phone'] ?></p>
         <?php endif ?>
      </div>
      <div class="mb-3">
         <label for="location" class="form-label">Location :</label>
         <input type="text" class="form-control shadow-none fs-5" id="location" name="location" value="<?= $hotels[3]['description'] ?? '' ?>">
         <?php if (isset($errors['location'])) : ?>
            <p class="text-danger fs-5"><?= $errors['location'] ?></p>
         <?php endif ?>
      </div>
      <label for="about">About us:</label>
      <textarea class="form-control shadow-none fs-5" rows="5" id="about"  name="about" ><?= $hotels[0]['description']  ?? '' ?></textarea>
      <?php if (isset($errors['about'])) : ?>
         <p class="text-danger fs-5"><?= $errors['about'] ?></p>
      <?php endif ?>
      <input type="hidden" name="method" value="UPDATE">
      <button type="submit" class="btn btn-success btn-lg mt-3">Update</button>
   </form>
  

</main>

<?php require("../view/partials/adminfooter.view.php") ?>
