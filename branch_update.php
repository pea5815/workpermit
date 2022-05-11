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
                    //branch_id`, `branch_code`, `branch_name`, `branch_boss`, `branch_position
                    include'connect.php';
                    $branch_code = $_POST['branch_code'];
                    $branch_name = $_POST['branch_name'];
                    $branch_boss = $_POST['branch_boss'];
                    $branch_position = $_POST['branch_position'];
                    $h_id = $_POST['h_id'];

                    

                    //echo $editor1;
                    //UPDATE `branch` SET `branch_name` = 'การไฟฟ้าส่วนภูมิภาคอำเภอบัวใหญ่++' WHERE `branch`.`branch_id` = 1;
                    $target_dir = "uploads/";
                    $file_name = $_FILES["fileToUpload"]["name"];
                    //echo $file_name;
                    if(empty($file_name)){
                        $sql = "UPDATE branch SET branch_code='$branch_code', branch_name='$branch_name', branch_boss='$branch_boss', branch_position='$branch_position' WHERE branch_id='$h_id'";

                            if ($conn->query($sql) === TRUE) {
                            echo "บันทึกข้อมูลสำเร็จ";
                            } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            }

                            $conn->close();
                    }else{
                        $file_name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file_name);
                        $ext = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
                        $imagename = time() . "." . $ext;
                        $target_file = $target_dir . $imagename;
                        //$target_file = $target_dir . $id_img;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        // Check if image file is a actual image or fake image
                        if(isset($_POST["submit"])) {
                            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                            if($check !== false) {
                                echo "File is an image - " . $check["mime"] . ".";
                                $uploadOk = 1;
                            } else {
                                echo "File is not an image.";
                                $uploadOk = 0;
                            }
                        }

                        // Check if file already exists
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $uploadOk = 0;
                        }

                        // Check file size
                        if ($_FILES["fileToUpload"]["size"] > 500000) {
                            echo "Sorry, your file is too large.";
                            $uploadOk = 0;
                        }

                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                            echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                            //echo $check;
                            
                            //echo "img = ".$imagename."<br/>";
                            //echo $target_file;
                            
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                //echo "The file ". $imagename . " has been uploaded.";
                                $sql = "UPDATE branch SET branch_code='$branch_code', branch_name='$branch_name', branch_boss='$branch_boss', branch_position='$branch_position', branch_sign='$imagename' WHERE branch_id='$h_id'";

                                if ($conn->query($sql) === TRUE) {
                                echo "บันทึกข้อมูลสำเร็จ";
                                } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                                }

                                $conn->close();
                            } else {
                                echo "Sorry, there was an error uploading your file.";
                            }
                            
                        }
                    }
                    
                        
                    
                    

                    ?>
                    <a href="branch.php"><button type="button" class="btn btn-primary btn-sm">ย้อนกลับ</button></a>
                </div>
            </div>

        </section>
    </main>
</body>

</html>