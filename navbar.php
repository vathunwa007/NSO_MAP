<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mr-1" href="index.php"><img src="./images/logo.png" class="img-fluid top-logo" alt="Responsive image"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
    <ul class="nav navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link active" href="#"><strong>หน้าหลัก</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>วิธีการงาน</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>เกี่ยวกับเรา</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>ติดต่อเรา</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><strong>แผนผังเว็บไซต์</strong></a>
      </li>

    </ul>
    <ul class="navbar-nav ml-auto ml-md-0 mb-3">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger" style="font-size: 10px;">3</span>
          <i class="fas fa-user-circle fa-3x text-info mt-2 hide"></i>
          <img src="icon/image005.png" alt="" width="50">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

    <button class="btn btn-link btn-sm text-dark order-1 order-sm-0 hide" id="sidebarToggle" href="#">
      <i class="fas fa-bars fa-3x"></i>
    </button>

  </div>
</nav>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.php">Logout</a>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-light breadcrumb " style="height: 50px; background-color: #558ED5;">
  <form class="form-inline">
    <li class="breadcrumb-item">
      <a href="#" class="text-light">หน้าหลัก</a>
    </li>
    <li class="breadcrumb-item active text-light">ระบบนำเสนอแผนที่สถิติ</li>
    <li class="breadcrumb-item active text-light">สำนักงานสถิติจังหวัดน่าน</li>
  </form>

  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="-ค้นหาเมนู-" aria-label="Search">
    <button class="btn btn-primary my-2 my-sm-0" type="submit"><img src="icon/image009.png" alt=""></button>
  </form>
</nav>
<nav class="navbar navbar-light mt-n3" style="background-color: #7EA6B9;">
  <span class="navbar-text text-light">
    ระบบนำเสนอแผนที่สถิติ
    <h3 class="text-light">สำนักงานสถิติจังหวัดน่าน</h3>

  </span>
</nav>