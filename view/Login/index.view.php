<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/navbar.view.php") ?>
<main>
    <h1 class="text-center mt-3 mb-5">
        <?= $title ?>
    </h1>
    <form action="/" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>" placeholder="Enter Your Email">
            <?php if (isset($errors['email'])) : ?>
                <p class="text-danger"><?= $errors['email'] ?></p>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
            <?php if (isset($errors['password'])) : ?>
                <p class="text-danger"><?= $errors['password'] ?></p>
            <?php endif ?>
        </div>
        <button type="submit" class="btn btn-success">Log In</button>
    </form>
</main>
<?php require("../view/partials/footer.view.php") ?>