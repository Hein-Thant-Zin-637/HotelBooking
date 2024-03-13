<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main class="w-100 w-md-50 my-5">
   <h1 class="text-center mt-3 mb-5">
      <?= $title ?>
   </h1>
   <form action="/contact" class="container fs-4 " method="POST">
      <div class="mb-3">
         <label for="name" class="form-label">Name:</label>
         <input type="text" class="form-control shadow-none fs-5" id="name" placeholder="Enter Name" name="name" value="<?= $_POST['name'] ?? '' ?>">
         <?php if (isset($errors['name'])) : ?>
            <p class="text-danger fs-5"><?= $errors['name'] ?></p>
         <?php endif ?>
      </div>
      <div class="mb-3 mt-3">
         <label for="email" class="form-label">Email :</label>
         <input type="email" class="form-control shadow-none fs-5" id="email" placeholder="Enter email" name="email" value="<?= $_POST['email'] ?? '' ?>">
         <?php if (isset($errors['email'])) : ?>
            <p class="text-danger fs-5"><?= $errors['email'] ?></p>
         <?php endif ?>
      </div>
      <div class="mb-3">
         <label for="phone" class="form-label">Phone :</label>
         <input type="text" class="form-control shadow-none fs-5" id="phone" placeholder="Enter Phone Number" name="phone" value="<?= $_POST['phone'] ?? '' ?>">
         <?php if (isset($errors['phone'])) : ?>
            <p class="text-danger fs-5"><?= $errors['phone'] ?></p>
         <?php endif ?>
      </div>
      <label for="message">Message:</label>
      <textarea class="form-control shadow-none fs-5" rows="5" id="message"  placeholder="Enter Your Message" name="message" ><?= $_POST['message'] ?? '' ?></textarea>
      <?php if (isset($errors['message'])) : ?>
         <p class="text-danger fs-5"><?= $errors['message'] ?></p>
      <?php endif ?>
      <button type="submit" class="btn btn-success btn-lg mt-3">Submit</button>
   </form>
  
</main>
<?php require("partials/footer.view.php") ?>