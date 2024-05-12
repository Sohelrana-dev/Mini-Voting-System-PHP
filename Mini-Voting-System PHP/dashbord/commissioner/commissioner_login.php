<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Commissioner Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/images/favicon.png">
    <link href="../asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img width="100" src="../asset/images/logo-sohel.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Commissioner Login Form</h4>
                                    <form action="commissioner_login_post.php" method="post">
                                        <?php 
                                        if(isset($_SESSION['phone_err'])){
                                            ?>
                                            <div class="alert bg-danger text-white"><?php echo $_SESSION['phone_err'];?></div>
                                            <?php
                                            unset($_SESSION['phone_err']);
                                        }
                                        ?>
                                        <?php 
                                        if(isset($_SESSION['key_err'])){
                                            ?>
                                            <div class="alert bg-danger text-white"><?php echo $_SESSION['key_err'];?></div>
                                            <?php
                                            unset($_SESSION['key_err']);
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Security Key</strong></label>
                                            <input type="number" class="form-control" placeholder="enter security key" name="security_key">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Phone Number</strong></label>
                                            <input type="number" class="form-control" placeholder="enter your phone number" name="phone_number">
                                        </div>
                                        <div class="text-center d-flex justify-content-end">
                                            <button type="submit" class="btn bg-success text-primary btn-inline-block">Login</button>
                                        </div>
                                    </form>
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
    <script src="../asset/vendor/global/global.min.js"></script>
	<script src="../asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../asset/js/custom.min.js"></script>
    <script src="../asset/js/deznav-init.js"></script>

</body>

</html>
