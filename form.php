<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>แบบฟอร์มขอเข้าพื้นที่ Work Permit V.1</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <script src="ckeditor/ckeditor.js"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
                <button type="submit" title="Search">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span> </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                    <!-- End Notification Dropdown Items -->
                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span> </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span> </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.html">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Components</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Alerts</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Accordion</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-badges.html">
                            <i class="bi bi-circle"></i><span>Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-breadcrumbs.html">
                            <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-buttons.html">
                            <i class="bi bi-circle"></i><span>Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-cards.html">
                            <i class="bi bi-circle"></i><span>Cards</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="bi bi-circle"></i><span>Carousel</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-list-group.html">
                            <i class="bi bi-circle"></i><span>List group</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-modal.html">
                            <i class="bi bi-circle"></i><span>Modal</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tabs.html">
                            <i class="bi bi-circle"></i><span>Tabs</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="bi bi-circle"></i><span>Pagination</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-progress.html">
                            <i class="bi bi-circle"></i><span>Progress</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-spinners.html">
                            <i class="bi bi-circle"></i><span>Spinners</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips.html">
                            <i class="bi bi-circle"></i><span>Tooltips</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Form Layouts</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <i class="bi bi-circle"></i><span>Form Editors</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html">
                            <i class="bi bi-circle"></i><span>Form Validation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i><span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Chart.js</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Remix Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Boxicons</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Icons Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form.php">
                    <i class="ri-draft-fill"></i>
                    <span>ขอเข้าพื้นที่</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="branch.php">
                    <i class="ri-git-branch-fill"></i>
                    <span>การไฟฟ้านำร่อง</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>
            <!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li>
            <!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li>
            <!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-error-404.html">
                    <i class="bi bi-dash-circle"></i>
                    <span>Error 404</span>
                </a>
            </li>
            <!-- End Error 404 Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li>
            <!-- End Blank Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">General Form Elements</h5>

                            <!-- General Form Elements -->
                            <form class="row g-3" action="action_page.php" method="get">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">การไฟฟ้าที่จะขอเข้าพื้นที่</label>
                                    <select class="form-select" aria-label="Default select example" name="organi_id">
                                        <option selected value="">- กรุณาเลือกพื้นที่ที่ต้องการเข้าปฏิบัติงาน -</option>
                                        <?php
                                    include'connect.php';

                                    $sql_branch = "SELECT * FROM branch";
                                    $result_branch = $conn->query($sql_branch);

                                    if ($result_branch->num_rows > 0) {
                                        
                                        // output data of each row
                                        //organi_id, in_organi, in_fullname, in_tel, out_organi, out_fullname, out_tel, start_date1, start_time, end_date, end_time, detail
                                        while($row_branch = $result_branch->fetch_assoc()) {
                                            ?>
                                        <option value="<?php echo $row_branch['branch_code'];?>"><?php echo $row_branch['branch_code']."-".$row_branch['branch_name'];?></option>

                                        <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">เจ้าหน้าที่ กฟภ.</label>
                                    <input type="text" class="form-control" name="in_organi" placeholder="กรส., กรท.,"
                                        required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">ชื่อผู้คุมงาน</label>
                                    <input type="text" class="form-control" name="in_fullname" placeholder="ชื่อ-สกุล"
                                        required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">เบอร์โทรศัพท์</label></label>
                                    <input type="text" class="form-control" name="in_tel" placeholder="0xx-xxxxxxx"
                                        required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">หน่วยงานภายนอก</label>
                                    <input type="text" class="form-control" name="out_organi" placeholder="บริษัท..."
                                        required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">ชื่อผู้คุมงาน</label>
                                    <input type="text" class="form-control" name="out_fullname" placeholder="ชื่อ-สกุล"
                                        required>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" name="out_tel" placeholder="0xx-xxxxxxx"
                                        required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword5" class="form-label">วันเริ่มปฏิบัติงาน</label>
                                    <input type="date" class="form-control" name="start_date" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword5" class="form-label">เวลา</label>
                                    <input type="time" class="form-control" name="start_time" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword5" class="form-label">วันสิ้นสุดงาน</label>
                                    <input type="date" class="form-control" name="end_date" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword5" class="form-label">เวลา</label>
                                    <input type="time" class="form-control" name="end_time" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">รายละเอียด</label>
                                    <textarea name="editor1" required class="form-control" type="text"
                                        required></textarea>
                                    <script>
                                    CKEDITOR.replace('editor1');
                                    </script>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                    <button type="reset" class="btn btn-secondary">RESET</button>
                                </div>
                            </form><!-- End Multi Columns Form -->
                            <!-- End General Form Elements -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Advanced Form Elements</h5>


                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ว/ด/ป</th>
                                        <th scope="col">ชื่อ - สกุล</th>
                                        <th scope="col"></th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Start Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Advanced Form Elements -->
                                    <?php
                                    include'connect.php';

                                    $sql = "SELECT * FROM activity";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        
                                        // output data of each row
                                        //organi_id, in_organi, in_fullname, in_tel, out_organi, out_fullname, out_tel, start_date1, start_time, end_date, end_time, detail
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['start_date1']." - ".$row['end_date'];?></th>
                                        <td><?php echo "(".$row['in_organi'].") ".$row['in_fullname'];?></td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#basicModal">
                                                ลบ
                                            </button>
                                            <div class="modal fade" id="basicModal" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            คุณแน่ใจแล้วใช่ไหม ข้อมูลนี้จะถูกลบนะ
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a
                                                                href="form_del.php?id=<?php echo $row['actity_id'];?>">แน่ใจ</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            <!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>