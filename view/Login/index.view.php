<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/navbar.view.php") ?>
<main class="w-100 w-md-50 my-5">
    <h1 class="text-center mt-3 mb-5">
        <?= $title ?>
    </h1>
    <form action="/login" method="POST" class="container fs-4">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control shadow-none fs-5 " id="email" name="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Enter Your Email">
            <?php if (isset($errors['email'])) : ?>
                <p class="text-danger fs-5"><?= $errors['email'] ?></p>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control shadow-none fs-5" id="password" name="password" placeholder="Enter Your Password">
            <?php if (isset($errors['password'])) : ?>
                <p class="text-danger fs-5"><?= $errors['password'] ?></p>
            <?php endif ?>
        </div>
        <button type="submit" class="btn btn-success btn-lg mt-3">Log In</button>
    </form>
    <p class="container fs-5 mt-3">Don't have an account ? <a href="/register">Register Now</a></p>
</main>
<?php require("../view/partials/footer.view.php") ?>