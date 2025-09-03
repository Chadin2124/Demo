
  <style>
    .parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(2, 1fr) repeat(2, 0.5fr) 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 { grid-area: 1 / 1 / 4 / 2; }
.div2 { grid-area: 1 / 2 / 4 / 3; }
.div3 { grid-area: 1 / 4 / 4 / 6; }
.div4 { grid-area: 4 / 1 / 5 / 6; }
  </style>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="https://www.facebook.com/AccountingStation.2022/"><img src="images/logo1.png" width="60" height="60"></a>
      <a class="navbar-brand">
        <font face="FC Motorway" font size="+3">ACCOUNTING STATION</font>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">หน้าหลัก<span class="sr-only"></span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              บริการของเรา
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="service.php">บริการด้านบัญชีและภาษี</a></li>
              <li><a class="dropdown-item" href="service2.php">บริการด้านการจดทะเบียน</a></li>
              <li><a class="dropdown-item" href="service3.php">บริการด้านตรายาง/ป้าย</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="request.php">ขอใบเสนอราคา</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              เรื่องน่ารู้
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="idea.php">บริษัทจำกัด/ห้างหุ้นส่วนจำกัด</a></li>
              <li><a class="dropdown-item" href="idea2.php">ควรจดทะเบียนเมื่อใด?</a></li>
              <li><a class="dropdown-item" href="idea3.php">ค่าอาหารกับการเคลมภาษีซื้อ</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.php">เกี่ยวกับเรา</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contract.php">ติดต่อเรา</a>
          </li>
      </div>
      </ul>
    </div>
  </nav>

  </header>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/b1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/b2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/b3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>