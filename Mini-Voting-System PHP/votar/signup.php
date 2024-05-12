<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Voter Registration</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../dashbord/asset//dashbord/asset//images/favicon.png">
    <link href="../dashbord/asset//css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body class="h-100 mt-4">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html"><img width="100"
                                                src="../dashbord/asset/images/logo-sohel.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Voter Registration Form</h4>
                                    <form action="signup_post.php" method="post" enctype="multipart/form-data">
                                         <?php 
                                        if(isset($_SESSION['second_err'])){
                                            ?>
                                            <div class="alert bg-danger text-white"><?php echo $_SESSION['second_err'];?></div>
                                            <?php
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>NAME</strong></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="enter your name" value="<?php 
                                                        if(isset($_SESSION['old_name'])){
                                                            echo $_SESSION['old_name'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['name_err'])){
                                                            echo $_SESSION['name_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>EMAIL</strong></label>
                                                    <input type="email" class="form-control"
                                                        placeholder="enter your email address" name="email" value="<?php 
                                                        if(isset($_SESSION['old_email'])){
                                                            echo $_SESSION['old_email'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['email_err'])){
                                                            echo $_SESSION['email_err'];
                                                        }
                                                        ?>
                                                        <?php 
                                                        if(isset($_SESSION['email_check_err'])){
                                                            echo $_SESSION['email_check_err'];
                                                        }
                                                        ?>
                                                        <?php 
                                                        if(isset($_SESSION['duplicate_email_err'])){
                                                            echo $_SESSION['duplicate_email_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>PHONE NUMBER</strong></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="enter your phone number" name="phone_number" value="<?php 
                                                        if(isset($_SESSION['old_phone_number'])){
                                                            echo $_SESSION['old_phone_number'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['number_err'])){
                                                            echo $_SESSION['number_err'];
                                                        }
                                                        ?>
                                                        <?php 
                                                        if(isset($_SESSION['number_check_err'])){
                                                            echo $_SESSION['number_check_err'];
                                                        }
                                                        ?>
                                                        <?php 
                                                        if(isset($_SESSION['duplicate_check_err'])){
                                                            echo $_SESSION['duplicate_check_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>DATE OF
                                                            BIRTH</strong></label>
                                                    <input type="date" class="form-control"
                                                        placeholder="enter your phone number" name="birth_date" value="<?php 
                                                        if(isset($_SESSION['old_birth_date'])){
                                                            echo $_SESSION['old_birth_date'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['brithday_err'])){
                                                            echo $_SESSION['brithday_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>NID NUMBER</strong></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="enter your nid number" name="nid_number" value="<?php 
                                                        if(isset($_SESSION['old_nid_number'])){
                                                            echo $_SESSION['old_nid_number'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['nid_err'])){
                                                            echo $_SESSION['nid_err'];
                                                        }
                                                        ?>
                                                        <?php 
                                                        if(isset($_SESSION['nid_check_err'])){
                                                            echo $_SESSION['nid_check_err'];
                                                        }
                                                        ?>
                                                        <?php 
                                                        if(isset($_SESSION['duplicate_nid_err'])){
                                                            echo $_SESSION['duplicate_nid_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>FATHER NAME</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="enter father's name" name="father_name" value="<?php 
                                                        if(isset($_SESSION['old_father_name'])){
                                                            echo $_SESSION['old_father_name'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['father_name_err'])){
                                                            echo $_SESSION['father_name_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>MOTHER NAME</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="enter mother's name" name="mother_name" value="<?php 
                                                        if(isset($_SESSION['old_mother_name'])){
                                                            echo $_SESSION['old_mother_name'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['mother_name_err'])){
                                                            echo $_SESSION['mother_name_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>UNION</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="enter union name" name="union" value="<?php 
                                                        if(isset($_SESSION['old_union'])){
                                                            echo $_SESSION['old_union'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['union_err'])){
                                                            echo $_SESSION['union_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>SUB DISTRICT</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="enter sub district name" name="sub_district" value="<?php 
                                                        if(isset($_SESSION['old_sub_district'])){
                                                            echo $_SESSION['old_sub_district'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['sub_district_err'])){
                                                            echo $_SESSION['sub_district_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>DISTRICT</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="enter district name" name="district" value="<?php 
                                                        if(isset($_SESSION['old_district'])){
                                                            echo $_SESSION['old_district'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['district_err'])){
                                                            echo $_SESSION['district_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>DIVISION</strong></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="enter division name" name="division" value="<?php 
                                                        if(isset($_SESSION['old_division'])){
                                                            echo $_SESSION['old_division'];
                                                        }
                                                        ?>">
                                                        <?php 
                                                        if(isset($_SESSION['division_err'])){
                                                            echo $_SESSION['division_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>BLOOD GROUP</strong></label>
                                                    <select name="blood_group" id="" class="form-control">
                                                        <option value="">select blood group</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                    </select>
                                                    <?php 
                                                        if(isset($_SESSION['blood_group_err'])){
                                                            echo $_SESSION['blood_group_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="mb-1 text-white"><strong>IMAGE</strong></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image"
                                                            onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                        <label class="custom-file-label">Choose file</label>
                                                    </div>
                                                </div>
                                                <?php 
                                                        if(isset($_SESSION['image_err'])){
                                                            echo $_SESSION['image_err'];
                                                        }
                                                        ?>
                                                <?php 
                                                        if(isset($_SESSION['extension_err'])){
                                                            echo $_SESSION['extension_err'];
                                                        }
                                                        ?>
                                                <img width="200" src="" id="blah" alt="">
                                            </div>
                                        </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="mb-1 text-white"><strong>GENDER</strong></label>
                                                    <select name="gender" id="" class="form-control">
                                                        <option value="">select gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <?php 
                                                        if(isset($_SESSION['gender_err'])){
                                                            echo $_SESSION['gender_err'];
                                                        }
                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                                <div class="text-center d-flex justify-content-end mx-5">
                                                    <button type="submit" class="btn bg-green text-primary">Sign
                                                        up</button>
                                                </div>
                                     </form>
                            <div class="new-account mx-5 d-flex justify-content-center">
                                <p class="text-white">Already have an account? <a class="text-white"
                                        href="login.php">Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="../dashbord/asset//vendor/global/global.min.js"></script>
    <script src="../dashbord/asset//vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../dashbord/asset//js/custom.min.js"></script>
    <script src="../dashbord/asset//js/deznav-init.js"></script>

</body>

</html>

<?php 
session_unset();
?>