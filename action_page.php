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
    <main class="main">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    include'connect.php';
                    $organi_id = $_GET['organi_id'];
                    $in_organi = $_GET['in_organi'];
                    $in_fullname = $_GET['in_fullname'];
                    $in_tel = $_GET['in_tel'];
                    $out_organi = $_GET['out_organi'];
                    $out_fullname = $_GET['out_fullname'];
                    $out_tel = $_GET['out_tel'];
                    $start_date = $_GET['start_date'];
                    $start_time = $_GET['start_time'];
                    $end_date = $_GET['end_date'];
                    $end_time = $_GET['end_time'];
                    $editor1 = $_GET['editor1'];

                    //echo $editor1;

                    $sql = "INSERT INTO activity (organi_id, in_organi, in_fullname, in_tel, out_organi, out_fullname, out_tel, start_date1, start_time, end_date, end_time, detail)
                    VALUES ('$organi_id', '$in_organi', '$in_fullname', '$in_tel', '$out_organi', '$out_fullname', '$out_tel', '$start_date', '$start_time', '$end_date', '$end_time', '$editor1')";

                    if ($conn->query($sql) === TRUE) {
                      echo "บันทึกข้อมูลสำเร็จ";
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();

                    ?>
                    <a href="form.php"><button type="button" class="btn btn-primary btn-sm">ย้อนกลับ</button></a>
                </div>
            </div>

        </section>
    </main>
</body>

</html>