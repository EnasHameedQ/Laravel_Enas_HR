<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Fontfaces CSS-->
    <link href="../assests/css/font-face.css" rel="stylesheet" media="all">

    <!-- style -->

    <link rel="stylesheet" type="text/css" href="../assests/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assests/css/media-query.css" />
    <link href="../assests/css/theme.css" rel="stylesheet" media="all">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS,  scroll    -->

    <script src="../assests/js/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--scroll  -->


    <title>بروفايل 1</title>
</head>

<body>

    <!-- start container nav -->
    <div class="container">
        <nav id="navbar" class="navbar  fixed-top navbar-expand-md navbar-light  navbar-right mt-0 ">
            <!--  navbar-expand-md مهم لعرض مكونات المنيو في الشاشات الكبيرة والمتوسطة-->
            <!--navbar-light مهن لعرض اقونة  البرقر في الشاشات الصغيرة -->
            <!-- bg-light للخلفية الرمادي بدل الديفولت سوداء     / navbar-right اتجاه المنيو-->

            <a class="navbar-brand" href="../index.html">
                <img class="img-responsive" src="../assests/imges/human-resources.png ">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- burger icon only in mobil   -->
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link  active" href="login.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> تسجيل الدخول
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="register.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> انشاء حساب
                    </a>
                </li>
            </ul>


        </nav>
    </div>
    <section id="contact" class="container-fluid ">

        <div class="row ">
            <div class="col-md-6 col-sm-12 ">
                <img class="mb-4  h-70" src="../assests/imges/sign in.svg" alt="">
            </div>
            <div class="col-md-6 col-sm-12 ">
                <div class="form-signin">
                    <form>

                        <h1 class="h3 mb-3 fw-normal">تسجيل دخول</h1>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">الإيميل</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">كلمة المرور</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                    <input type="checkbox" value="remember-me"> تذكرني
                                </label>
                        </div>
                        <button class="w-100 btn btn-lg " type="submit">تسجيل الدخول</button>

                    </form>
                </div>

            </div>
        </div>
    </section>
  