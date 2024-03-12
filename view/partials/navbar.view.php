

<nav class="navbar navbar-expand-md bg-body-tertiary fs-5">
  <div class="container-fluid">
    <a class="navbar-brand d-md-none" href="#"><h2><i>HBMS</i></h2></a>
    <button class="navbar-toggler border-2 border-success shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-success"></span>
    </button>
    <div class="collapse navbar-collapse w-100" id="navbarNav">
      <ul class="nav navbar-nav d-flex flex-row gap-3 justify-content-between w-100">
        <div class="d-none d-md-flex">
          <h2><i>HBMS</i></h2>
        </div>
        <div class="d-flex flex-column flex-md-row gap-1">
          <li
            class="nav-item px-2  <?= ($_SERVER['REQUEST_URI'] === "/") ? "border-bottom border-success border-3" : '' ?>">
            <a class="nav-link" href="/"> Home</a>
          </li>
          <li
            class="nav-item px-2  <?= ($_SERVER['REQUEST_URI'] === "/about") ? "border-bottom border-success border-3" : '' ?>">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li
            class="nav-item px-2  <?= ($_SERVER['REQUEST_URI'] === "/facilities") ? "border-bottom border-success border-3" : '' ?>">
            <a class="nav-link" href="/facilities">Facilities</a>
          </li>
          <li
            class="nav-item px-2  <?= ($_SERVER['REQUEST_URI'] === "/rooms") ? "border-bottom border-success border-3" : '' ?>">
            <a class="nav-link" href="/rooms">Rooms</a>
          </li>
          <li
            class="nav-item px-2  <?= ($_SERVER['REQUEST_URI'] === "/contact") ? "border-bottom border-success border-3" : '' ?>">
            <a class="nav-link " href="/contact">Contact </a>
          </li>
          <?php if (isset($_SESSION['user'])): ?>
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle  <?= ($_SERVER['REQUEST_URI'] === "/profile" or $_SERVER['REQUEST_URI'] === "/booking") ? "border-bottom border-success border-3" : '' ?>" data-bs-toggle="dropdown">My Account</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Booking</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          <?php else: ?>
            <li class="nav-item  me-4 px-2 <?= ($_SERVER['REQUEST_URI'] === "/login" or $_SERVER['REQUEST_URI'] === "/register") ? "border-bottom border-success border-3" : '' ?>">
              <a class="nav-link" href="/login">Login </a>
            </li>
          <?php endif ?>
        </div>
      </ul>
    </div>
  </div>
</nav>