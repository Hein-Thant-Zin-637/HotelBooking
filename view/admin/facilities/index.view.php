<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">

    <div class="card ">
        <div class="card-header  w-100">
            <div class="d-flex flex-row align-items-center justify-content-between">
                <h3 class="card-title float-left">Bookings Table</h3>
                <a href="/addfacilities" class="btn btn-outline-success float-right">Add Facilities</a>
            </div>
        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered table-striped  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < sizeof($facilities); $i++): ?>
                        <tr>
                            <td>
                                <?= $i + 1 ?>
                            </td>
                            <td class="">
                                <img src="<?= $facilities[$i]['image'] ?>" alt="facilities Image"
                                    class="img-fluid img-thumbnail "
                                    style="max-width:145px !important; max-height:85px !important;">
                            </td>
                            <td>
                                <?= $facilities[$i]['title'] ?>
                            </td>
                            <td>
                                <?= $facilities[$i]['description'] ?>
                            </td>
                            <td class="d-flex flex-row gap-2">
                                <a href="/updatefacilities?id=<?= $facilities[$i]['id'] ?>" type="submit"
                                    class="btn btn-outline-info">Update</a>
                                <form action="/allfacilities" method="POST">
                                    <input type="hidden" name="method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $facilities[$i]['id'] ?>">
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>
    </div>

</main>

<?php require("../view/admin/footer/table.view.php") ?>