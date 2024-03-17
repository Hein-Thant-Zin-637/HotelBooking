<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">

    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Account Table</h3>
        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered table-striped  ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < sizeof($accounts); $i++): ?>
                        <tr>
                            <td>
                                <?= $i + 1 ?>
                            </td>
                            <td>
                                <?= $accounts[$i]['name'] ?>
                            </td>
                            <td>
                                <?= $accounts[$i]['email'] ?>
                            </td>
                            <td>
                                <?= $accounts[$i]['phone'] ?>
                            </td>
                            <td>
                                <?= $accounts[$i]['address'] ?>
                            </td>
                            <td class="d-flex flex-row gap-2">
                                <form action="/allaccount" method="POST">
                                    <input type="hidden" name="method" value="PATCH">
                                    <input type="hidden" name="id" value="<?= $accounts[$i]['id'] ?>">
                                    <?php if ($accounts[$i]['role']): ?>
                                        <input type="hidden" name="role" value="false">
                                        <button type="submit" class="btn btn-outline-info">Admin &nbsp;</button>
                                    <?php else: ?>
                                        <input type="hidden" name="role" value="true">
                                        <button type="submit" class="btn btn-outline-info"> &nbsp; &nbsp;User&nbsp;&nbsp;</button>
                                    <?php endif ?>
                                </form>
                                <form action="/allaccount" method="POST">
                                    <input type="hidden" name="method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= $accounts[$i]['id'] ?>">
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