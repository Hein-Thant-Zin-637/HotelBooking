<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">

    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Bookings Table</h3>
        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered table-striped  ">
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
                    <?php for ($i = 0; $i < sizeof($bookings); $i++): ?>
                        <tr>
                            <td>
                                <?= $i + 1 ?>
                            </td>
                            <td>
                                <?= $bookings[$i]['id'] ?>
                            </td>
                            <td>
                                <?= $bookings[$i]['name'] ?>
                            </td>
                            <td>
                                <?= $bookings[$i]['email'] ?>
                            </td>
                            <td>
                                <?= $bookings[$i]['room_type'] ?>
                            </td>
                            <td>
                                <?= $bookings[$i]['price'] ?> MMK
                            </td>
                            <td>
                                <?= $bookings[$i]['status'] ?>
                            </td>
                            <td class="d-flex flex-row gap-2">
                                <a href="/adminbookingdetail?id=<?= $bookings[$i]['id'] ?>" type="submit" class="btn btn-success">Details</a>
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#<?= $bookings[$i]['id'] ?>">Remark</button>
                            </td>

                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
<?php for ($i = 0; $i < sizeof($bookings); $i++): ?>
    <div class="modal fade" id="<?= $bookings[$i]['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Remark</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/allbooking" method="POST">
                        <div class="mb-3 mt-1">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                            <label for="status"> Status</label>
                            <select name="status" class="form-select  shadow-none">
                                <option class="Pending" >Pending</option>
                                <option class="Confirm" >Confirm</option>
                                <option class="Cancel" >Cancel</option>
                            </select>
                            <input type="hidden" name="id" value="<?= $bookings[$i]['id'] ?>" >
                            <input type="hidden" name="method" value="PATCH">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 float-right">Remark</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endfor ?>

</main>

<?php require("../view/admin/footer/table.view.php") ?>
