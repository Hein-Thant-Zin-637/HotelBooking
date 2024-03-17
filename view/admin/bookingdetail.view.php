<?php require("../view/partials/head.view.php") ?>
<?php require("../view/partials/adminnav.view.php") ?>
<?php require("../view/partials/adminmainnav.view.php") ?>

<main class="content-wrapper p-3" style="margin-top:50px ;">

      <table  id="table" class="table fs-4  table-bordered">
         <thead>
            <tr>
               <th colspan="4" class="text-center m-3 fs-3">Booking Number : <?= $bookingid ?></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th>Name</th>
               <td class="fs-5"><?= $bookingdetail['name'] ?></td>
               <th>Email</th>
               <td class="fs-5"><?= $bookingdetail['email'] ?></td>
            </tr>
            <tr>
               <th>Room Type</th>
               <td class="fs-5"><?= $bookingdetail['room_type'] ?></td>
               <th>Price</th>
               <td class="fs-5"><?= $bookingdetail['price'] ?></td>
            </tr>
            <tr>
               <th>Check In Date</th>
               <td class="fs-5"><?= $bookingdetail['check_in_date'] ?></td>
               <th>Check Out Date</th>
               <td class="fs-5"><?= $bookingdetail['check_out_date'] ?></td>
            </tr>
            <tr>
               <th>Booking Date</th>
               <td class="fs-5"><?= $bookingdetail['booking_date'] ?></td>
               <th>Special Request</th>
               <td class="fs-5"><?= $bookingdetail['special_request'] ?></td>
            </tr>
            <tr>
               <th>Remark</th>
               <td class="fs-5"> <?= ($bookingdetail['remark'] != "" ) ? $bookingdetail['remark'] : 'Not Response Yet' ?></td>
               <th>Status</th>
               <td class="fs-5"><?= $bookingdetail['status'] ?></td>
            </tr>
         </tbody>
      </table>

</main>

<?php require("../view/admin/footer/table.view.php") ?>
