<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">
    <form action="/updaterooms" class="mx-5 fs-4 " method="POST" enctype="multipart/form-data">
        <div class="mb-3 d-flex flex-column">
            <label for="imgInp" class="form-label">Image :</label>
            <img id="blah" src="<?= $room['image'] ?>" alt="your image" class="my-3 img-fluid img-thumbnail " style="max-width:80% !important; max-height:400px !important; " />
            <input class="form-control" type="file" accept="image/*" id="imgInp" name="image">
        </div>
        <div class="mb-3 mt-3">
            <label for="type" class="form-label">Room Type :</label>
            <input type="text" class="form-control shadow-none fs-5" id="type" placeholder="Enter a Room Type" name="type"
                value="<?= $room['room_type'] ?? '' ?>">
            <?php if (isset($errors['type'])): ?>
                <p class="text-danger fs-5">
                    <?= $errors['type'] ?>
                </p>
            <?php endif ?>
        </div>
        <div class="mb-3 mt-3">
            <label for="adults" class="form-label">Max Adults :</label>
            <input type="number" class="form-control shadow-none fs-5" id="adults" name="adults" value="<?= $room['max_adults'] ?? '' ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="childs" class="form-label">Max Childs :</label>
            <input type="number" class="form-control shadow-none fs-5" id="childs" name="childs" value="<?= $room['max_childs'] ?? '' ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="bed" class="form-label">Number of Bed :</label>
            <input type="number" class="form-control shadow-none fs-5" id="bed" name="bed" value="<?= $room['no_of_bed'] ?? '' ?>">
        </div>
        <div class="mb-3 mt-3">
            <label for="price" class="form-label">Price :</label>
            <input type="number" class="form-control shadow-none fs-5" id="price" name="price" value="<?= $room['price'] ?? '' ?>">
        </div>
        <label for="description">Description :</label>
        <textarea class="form-control shadow-none fs-5" rows="5" id="description" placeholder="Enter Your Description"
            name="description"><?= $room['description'] ?? '' ?></textarea>
        <?php if (isset($errors['description'])): ?>
            <p class="text-danger fs-5">
                <?= $errors['description'] ?>
            </p>
        <?php endif ?>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="hidden" name="method" value="UPDATE">
        <input type="hidden" name="orgimage" value="<?= $room['image'] ?>">
        <button type="submit" class="btn btn-success btn-lg mt-3">Update Room</button>
    </form>
</main>

<script>
 imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>

<?php require("../view/partials/adminfooter.view.php") ?>