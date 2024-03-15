<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">

    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <div class="card-body">
           <table id="example1" class="table table-bordered table-striped  ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Room type</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php for($i=0 ; $i < sizeof($bookings) ; $i++ ) : ?>
                <tr>
                    <td> <?= $i+1 ?></td>
                    <td><?= $bookings[$i]['id'] ?></td>
                    <td><?= $bookings[$i]['name'] ?></td>
                    <td><?= $bookings[$i]['email'] ?></td>
                    <td><?= $bookings[$i]['room_type'] ?></td>
                    <td><?= $bookings[$i]['price'] ?> MMK</td>
                    <td><?= $bookings[$i]['status'] ?></td>
                    <td><a href="/bookingdetail?id=<?= $bookings[$i]['id'] ?>" type="submit" class="btn btn-success">Details</a>
                    <a href="/bookingdetail?id=<?= $bookings[$i]['id'] ?>" type="submit" class="btn btn-info">Remark</a></td>

                </tr>
               <?php endfor ?>
            </tbody>
           </table>
        </div>
    </div>

</main>

<?php require("../view/admin/script/table.view.php") ?>

<?php require("../view/partials/adminfooter.view.php") ?>