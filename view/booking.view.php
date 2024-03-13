<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main class="grid mx-5">
    <h1 class="text-center mt-3 mb-5">
        <?= $title ?>
    </h1>
    <form action="/booking" method="POST" class="row  row-gap-3 fs-4">
        <div class="col-12 col-md-6">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control shadow-none fs-5" id="name" placeholder="Enter Your Name"
                    name="name" value="<?= $user['name'] ?? '' ?>">
                <?php if (isset($errors['name'])): ?>
                    <p class="text-danger fs-5">
                        <?= $errors['name'] ?>
                    </p>
                <?php endif ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control shadow-none fs-5" id="email" placeholder="Enter Your Email"
                    name="email" value="<?= $user['email'] ?? '' ?>">
                <?php if (isset($errors['name'])): ?>
                    <p class="text-danger fs-5">
                        <?= $errors['name'] ?>
                    </p>
                <?php endif ?>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone :</label>
                <input type="text" class="form-control shadow-none fs-5" id="phone"
                    placeholder="Enter Your Phone Number" name="phone" value="<?= $user['phone'] ?? '' ?>">
                <?php if (isset($errors['name'])): ?>
                    <p class="text-danger fs-5">
                        <?= $errors['name'] ?>
                    </p>
                <?php endif ?>
            </div>
            <label for="address">Address :</label>
            <textarea class="form-control shadow-none fs-5" rows="5" id="address" placeholder="Enter Your Address" name="address"><?= $user['address'] ?? '' ?></textarea>
            <?php if (isset($errors['address'])): ?>
                <p class="text-danger fs-5"> <?= $errors['address'] ?></p>
            <?php endif ?>
        </div>
        <div class="col-12 col-md-6">
            <input type="hidden" name="room_id" value=" <?= $_GET['room_id']?? $_POST['room_id'] ?>">
            <div class="mb-3">
                <label for="checkin" class="form-label">Check-In-Date :</label>
                <input type="date" class="form-control shadow-none fs-5" id="checkin" name="checkin" >
                <?php if (isset($errors['checkin'])): ?>
                    <p class="text-danger fs-5">
                        <?= $errors['checkin'] ?>
                    </p>
                <?php endif ?>
            </div>
            <div class="mb-3">
                <label for="checkout" class="form-label">Check-Out-Date :</label>
                <input type="date" class="form-control shadow-none fs-5" id="checkout" name="checkout">
                <?php if (isset($errors['checkout'])): ?>
                    <p class="text-danger fs-5">
                        <?= $errors['checkout'] ?>
                    </p>
                <?php endif ?>
            </div>
            <label for="request">Special Request :</label>
            <textarea class="form-control shadow-none fs-5" rows="5" id="request" placeholder="Enter Your Request" name="request"><?= $_POST['request'] ?? '' ?></textarea>
            <?php if (isset($errors['request'])): ?>
                <p class="text-danger fs-5"> <?= $errors['request'] ?></p>
            <?php endif ?>
        </div>
        <button class="btn btn-lg btn-success w-50 ">Submit</button>
    </form>
</main>


<?php require("partials/footer.view.php") ?>