<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/navbar.view.php") ?>

<main class="w-100 w-md-50 my-5">
    <h1 class="text-center mt-3 mb-5">
      <?= $title ?>
    </h1>
    <form class="container fs-4" action="/register" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control shadow-none fs-5" id="name" name="name" value="<?= $_POST['name'] ?? '' ?>" placeholder="Enter Your Name">
            <?php if (isset($errors['name'])) : ?>
                <p class="text-danger"><?= $errors['name'] ?></p>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control shadow-none fs-5" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Enter Your Email">
            <?php if (isset($errors['email'])) : ?>
                <p class="text-danger"><?= $errors['email'] ?></p>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control shadow-none fs-5" id="password" name="password" placeholder="Enter Your Password">
            <?php if (isset($errors['password'])) : ?>
                <p class="text-danger"><?= $errors['password'] ?></p>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="conpassword" class="form-label">Confirm Password</label>
            <input  value="<?= $_POST['password'] ?? '' ?>" type="text" class="form-control shadow-none fs-5" id="conpassword" name="conpassword" placeholder="Confirm Password">
            <?php if (isset($errors['email'])) : ?>
                <p class="text-danger"><?= $errors['email'] ?></p>
            <?php endif ?>
        </div>
        <button type="submit" class="btn btn-success btn-lg mt-3">Sign Up</button>
    </form>
    <p class="container fs-5 mt-3">Already have an account ? <a href="/login">LogIn Now</a></p>
</main>
<?php require("../view/partials/footer.view.php") ?>