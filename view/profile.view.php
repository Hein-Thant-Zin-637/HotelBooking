<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main class="w-100 w-md-50 my-5">
   <h1 class="text-center mt-3 mb-5">
      <?= $title ?>
   </h1>
   <form action="/profile" class="container fs-4 " method="POST">
      <input type="hidden" name="method" value="PATCH">
      <div class="mb-3">
         <label for="name" class="form-label">Name:</label>
         <input type="text" class="form-control shadow-none fs-5" id="name" placeholder="Enter Name" name="name" value="<?= $user['name'] ?? '' ?>">
         <?php if (isset($errors['name'])) : ?>
            <p class="text-danger fs-5"><?= $errors['name'] ?></p>
         <?php endif ?>
      </div>
      <div class="mb-3 mt-3">
         <label for="email" class="form-label">Email :</label>
         <input type="email" class="form-control shadow-none fs-5" id="email" placeholder="Enter email" name="email" value="<?= $user['email'] ?? '' ?>">
         <?php if (isset($errors['email'])) : ?>
            <p class="text-danger fs-5"><?= $errors['email'] ?></p>
         <?php endif ?>
      </div>
      <div class="mb-3">
         <label for="phone" class="form-label">Phone :</label>
         <input type="text" class="form-control shadow-none fs-5" id="phone" placeholder="Enter Phone Number" name="phone" value="<?= $user['phone'] ?? '' ?>">
         <?php if (isset($errors['phone'])) : ?>
            <p class="text-danger fs-5"><?= $errors['phone'] ?></p>
         <?php endif ?>
      </div>
      <label for="address">Address :</label>
      <textarea class="form-control shadow-none fs-5" rows="5" id="address"  placeholder="Enter Your Address" name="address" ><?= $user['address'] ?? '' ?></textarea>
      <?php if (isset($errors['address'])) : ?>
         <p class="text-danger fs-5"><?= $errors['address'] ?></p>
      <?php endif ?>
      <button type="submit" class="btn btn-success btn-lg mt-3">Update</button>
   </form>
  
</main>
<?php require("partials/footer.view.php") ?>