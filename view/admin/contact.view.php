<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">

    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Contact Table</h3>
        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered table-striped  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < sizeof($contact); $i++): ?>
                        <tr>
                            <td>
                                <?= $i + 1 ?>
                            </td>
                            <td>
                                <?= $contact[$i]['name'] ?>
                            </td>
                            <td>
                                <?= $contact[$i]['email'] ?>
                            </td>
                            <td>
                                <?= $contact[$i]['phone'] ?>
                            </td>
                            <td>
                                <?= $contact[$i]['message'] ?>
                            </td>
                            <td>
                                <form action="/allcontact" method="POST">
                                    <input type="hidden" name="method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $contact[$i]['id'] ?>">
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