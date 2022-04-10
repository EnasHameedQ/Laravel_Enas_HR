<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Fontfaces CSS-->
    <link href="../assests/css/font-face.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assests/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">


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
                    <a class="nav-link" href="login.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> تسجيل الدخول
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  active" href="register.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> انشاء حساب
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
            <div class=" form-signin col-md-6 col-sm-12 ">

                <form>
                    <h1 class="h3 mb-3 fw-normal">انشاء الحساب </h1>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">الاسم الأول </label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">الاسم الاخير</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">الإيميل</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">كلمة السر</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">  تأكيد كلمة السر </label>
                    </div>


                    <button class="w-100 btn btn-lg " type="submit">انشاء حساب</button>

                </form>
            </div>
        </div>

    </section>


    <footer class="container-fluid ">
        <div class="row ">

            <div class=" col-md-4  col-sm-12  ">
                <a href="#home "><img class="mb-2 " src="../assests/imges/human-resources.png  " alt=" "></a>
                <small class="d-block mb-3 text-muted ">©2022</small>
            </div>
            <div id="call " class=" col-md-4  col-sm-12  ">
                <h5>التواصل الإجتماعي</h5>


                <a href="# "><img src="../assests/imges/facebook.png " class="callUs " alt="facebook " height="20px " width="20px; "></a>
                <a href="# "><img src="../assests/imges/inestgram.png " class="callUs " alt="inestgram " height="10px " width="10px; "></a>
                <a href="# "><img src="../assests/imges/twiter.png " class="callUs " alt="twiter " height="10px " width="10px; "></a>


            </div>
            <div class="col-md-4  col-sm-12  ">

                <h5>انظم الى نشرتنا البريدية</h5>
                <div class="send ">
                    <input type="email " name="email " placeholder="ادخل بريدك الإلكتروني ">
                    <svg class="email-icon " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 24 24 " width="24 " height="24 ">
                                        <path fill="none " d="M0 0h24v24H0z " />
                                        <path
                                            d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zm-7 7.732V18h2v-2.268a2 2 0 1 0-2 0zM16 8V7a4 4 0 1 0-8 0v1h8z " />
                                    </svg>
                    <button type="submit " name="submit "> اشتراك</button>



                </div>

            </div>

        </div>
        <div class="grad ">
            <hr>
        </div>
        <a href="../index.html "> <span class="EnasHR ">EnasHR-Ye</span></a>
    </footer>









</body>

</html>