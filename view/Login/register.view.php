<?php require("view/partials/head.view.php") ?>
<?php require("view/partials/navbar.view.php") ?>

<main class="mt-3">
    <form class="border border-black m-3 p-3" action="/register" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $_POST['name'] ?? '' ?>" placeholder="Enter Your Name">
            <?php if (isset($errors['name'])) : ?>
                <p class="text-danger"><?= $errors['name'] ?></p>
            <?php endif ?>
        </div>
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
        <div class="mb-3">
            <label for="conpassword" class="form-label">Confirm Password</label>
            <input  value="<?= $_POST['password'] ?? '' ?>" type="text" class="form-control" id="conpassword" name="conpassword" placeholder="Confirm Password">
            <?php if (isset($errors['email'])) : ?>
                <p class="text-danger"><?= $errors['email'] ?></p>
            <?php endif ?>
        </div>
        <button type="submit">Sign Up</button>
    </form>
</main>