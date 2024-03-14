<?php require("partials/head.view.php") ?>
<?php require("partials/navbar.view.php") ?>
<main class="container w-100  w-md-50 my-5" >
    <h1 class="text-center mt-3 mb-5">
        <?= $title ?>
    </h1>
    <div class="table-responsive mt-3">
        <table class="table fs-5 table-hover  table-bordered">
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
                    <td><a href="/bookingdetail?id=<?= $bookings[$i]['id'] ?>" type="submit" class="btn btn-success">Details</a></td>
                </tr>
               <?php endfor ?>
            </tbody>
        </table>
    </div>
</main>
<?php require("partials/footer.view.php") ?>