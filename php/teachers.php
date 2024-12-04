<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/teacher-style.css">
    <title>معلمان آموزشیار</title>
</head>
<body>

<!--     Start navbar Section    -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container py-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
            <img src="../images/logo.png" alt="logo" width="30px" class="mx-2 d-none d-md-block">
            <a class="navbar-brand" href="../index.html">موسسه علمی آموزشیار</a>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mt-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.html">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">معرفی معلم ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/contactUs.html">همکاری با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/aboutUs.html">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">ثبت نام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">ورود</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--  Start Header Section  -->
<div class="page-header-section">
    <div class="text-center">
        <h1>معرفی معلم ها</h1>
    </div>
</div>


<div class="container my-4">
    <div class="row text-center">

<?php
    // Create a connection
    $conn = mysqli_connect("localhost","root", "", "amozeshyar");      

        $result = mysqli_query($conn,"SELECT * FROM teacher");
    ?>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
        <div class="col-xs-12 col-md-4 mb-5">
                <div class="card">
                    <?php
                        if($row["gender"]=="0")
                            echo '<img src="../images/wuser.png" class="img-fluid card-img-top teacher-img">';
                        else if($row["gender"]=="1")
                            echo '<img src="../images/muser.png" class="img-fluid card-img-top teacher-img">';
                    ?>

                    <div class="card-body">
                        <h2 class="card-title h3"><?php echo $row["name"]; ?></h2>
                    <div class="post_details my-1">
                        <h5 class="card-title">آموزگار پایه <?php echo $row["level"]; ?></h5>
                        <h5 class="card-title"><?php echo $row["history"]; ?> سال سابقه تدریس</h5>
                        <h5 class="card-title">خدمت در دبستان <?php echo $row["school"]; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    <?php
    $i++;
    }
    ?>


    <?php
    }
    else{
    echo "No result found";
    }
    ?>

    </div>
</div>

<!--   Start Footer Section  -->
<section class="pt-4 pb-4 text-center text-white" id="footer-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <h5>درباره ما</h5>
                <P>تیم ما در راستای آشنا سازی شما با معلمان تلاش می کند تا بتوانید در دوران بحرانی کرونا برای یادگیری بیشتر و نتیجه مطلوب تر علم و دانش فرزندتان از معلم خصوصی مورد نظر استفاده کنید</P>
            </div>
            <div class="col-xs-12 col-md-4">
                <h5>دسترسی سریع تر</h5>
                <ul class="nav flex-column">
                    <li class="nav-link">
                        <a href="#">معرفی معلم ها</a>
                    </li>
                    <li class="nav-link">
                        <a href="../html/contactUs.html">همکاری با ما</a>
                    </li>
                    <li class="nav-link">
                        <a href="../html/aboutUs.html">درباره ما</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-4">
                <h5>آموزشیار</h5>
                <ul class="nav flex-column">
                    <li class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-map-pin text-light">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <a href=""> یزد ، خیابان طارمی، مجتمع لاله، موسسه آموزشیار</a>
                    </li>
                    <li class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-mail text-light">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <a href="">ایمیل : amozeshyar@gmail.com</a>
                    </li>
                    <li class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-phone-call text-light">
                            <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <a href="">تلفن تماس : 035-37529684</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="mt-4 font-size-15">
                     تمامی حقوق نزد موسسه آموزشیار محفوظ است
                </div>
            </div>
        </div>
    </div>
</section>


<script src="../js/bootstrap.js"></script>
</body>
</html>