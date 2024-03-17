<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">
    <form action="/addfacilities" class="mx-5 fs-4 " method="POST" enctype="multipart/form-data">
        <div class="mb-3 d-flex flex-column">
            <label for="imgInp" class="form-label">Image :</label>
            <img id="blah" src="/Image/default-ui-image.jpg" alt="your image" class="my-3 img-fluid img-thumbnail " style="max-width:80% !important; max-height:400px !important; " />
            <input class="form-control" type="file" accept="image/*" id="imgInp" name="image">
        </div>
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Title :</label>
            <input type="text" class="form-control shadow-none fs-5" id="title" placeholder="Enter a Title" name="title"
                value="<?= $_POST['title'] ?? '' ?>">
            <?php if (isset($errors['title'])): ?>
                <p class="text-danger fs-5">
                    <?= $errors['title'] ?>
                </p>
            <?php endif ?>
        </div>
        <label for="description">Description :</label>
        <textarea class="form-control shadow-none fs-5" rows="5" id="description" placeholder="Enter Your Description"
            name="description"><?= $_POST['description'] ?? '' ?></textarea>
        <?php if (isset($errors['description'])): ?>
            <p class="text-danger fs-5">
                <?= $errors['description'] ?>
            </p>
        <?php endif ?>
        <button type="submit" class="btn btn-success btn-lg mt-3">Add Facilities</button>
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