<?php
   $config = require("../config.php");
   $db = new Database($config['database']);
   
   $about = $db->query("select * from hotels where title = :title", [ 'title' => 'about'])->find();
   $email = $db->query("select * from hotels where title = :title", [ 'title' => 'email'])->find();
   $phone = $db->query("select * from hotels where title = :title", [ 'title' => 'phone'])->find();
   $location = $db->query("select * from hotels where title = :title", [ 'title' => 'location'])->find();
?>

<footer class="w-100 px-3 fs-5 mt-5">
    <div class="grid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>about</h2>
                <p><?= $about['description'] ?></p>
            </div>
            <div class="col-12 col-md-3 ">
                <h5>Room Type</h5>
                <ul class="list-unstyled ms-3 ">
                    <li>Single Room</li>
                    <li>Double Room</li>
                    <li>Trible Room</li>
                    <li>Queen Room</li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h5>Contact</h5>
                <ul class="list-unstyled ms-3" >
                    <li>Email : <?= $email['description'] ?></li>
                    <li>Phone : <?= $phone['description'] ?></li>
                    <li>Location : <?= $location['description'] ?></li>
                </ul>
            </div>
        </div>
    </div>
 
</footer>
<div style="width: 100%;" class="w-100 p-3 fs-5 text-white d-flex justify-content-center align-items-center bg-success"><p>Copyright &copy;2024</p></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>