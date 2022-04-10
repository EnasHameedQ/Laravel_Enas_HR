<!DOCTYPE html>
<html lang="ar">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



  <!-- Fontfaces CSS-->
  <link href="assests/css/font-face.css" rel="stylesheet" media="all">

  <!-- Main CSS-->

  <link rel="stylesheet" type="text/css" href="assests/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assests/css/media-query.css" />
  <link href="assests/css/theme.css" rel="stylesheet" media="all">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS,  scroll    -->

  <script src="assests/js/jquery-3.6.0.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--scroll  -->

  <title>بروفايل 1</title>
</head>

<body>

  <nav id="navbar1" class="navbar  fixed-top navbar-expand-md navbar-light  navbar-right mt-0">
    <!--  navbar-expand-md مهم لعرض مكونات المنيو في الشاشات الكبيرة والمتوسطة-->
    <!--navbar-light مهن لعرض اقونة  البرقر في الشاشات الصغيرة -->
    <!-- bg-light للخلفية الرمادي بدل الديفولت سوداء     / navbar-right اتجاه المنيو-->

    <a class="navbar-brand" href="../index.html">
      <img class="img-responsive" src="assests/imges/human-resources.png ">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- burger icon only in mobil   -->


    <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
      <ul class="navbar-nav ">
       
        <li>
          <form class="form-inline">

            <span id="search-btnd" class="fa fa-search form-control-feedback"></span>
            <div id="search-container" class="form-group has-search">

              <input id="search" class="form-control mr-sm-2" type="search" placeholder="بحث عن مجالات وجهات " aria-label="Search">
            </div>

          </form>
          <script>
            var searchInput = $("#search-container"); //الديف الاساسي للمحتو الي عيختفي حسب الدالة
            //الدالة تم تخزينها في متغير ,والتي عملها اظهارالمحتوى المخفيفي حالة كان متاح يكون تركيز عليه

            var showSearchInput = function() {
              searchInput.show() // مكانه نفعل دالة تدور الاقونة
              if (searchInput.is(":visible")) {
                $("#search").focus();
              }
            };
            $("#search-btnd").hover(showSearchInput); //استدعينا الايقونة الظاهرة عند الهوفر تستدعي الدالة للتحقق

            searchInput.focusout(function(e) { //الغاء التركيز على الدالة
              searchInput.hide(); //;اخفاء المحتوى,  مكانة نعمل دالة ترجع الايقونة لحالتها الطبيعي

            });
          </script>

        </li>

        <!--   <li>
      <button class="btn btn-outline-success " type="submit"> الدخول</button>
     </li>
-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assests/imges/boy.png " alt="mdo " width="32 " height="32 " class="rounded-circle ">
          </a>
          <ul class="dropdown-menu bg-light  ">
            <li><a class="dropdown-item text-dark " href="main-dashboard.html">الصفحة الشخصية</a></li>
            <li>
              <a class="dropdown-item text-dark " href="my_cv.html">سيرتي الذاتية</a>
            </li>
            <li>
              <hr class="dropdown-divider ">
            </li>
            <li>
              <!-- تبرمج لدعم لغتين -->
              <a class=" dropdown-item text-dark " id="Language " ype="submit "> English</a>
            </li>
            <li><a class="dropdown-item text-dark" href="../index.html">خروج</a></li>
          </ul>
        </li>

      </ul>

    </div>

  </nav>




  <!--start of container  -->

  <div class="container-fluid">
    <div class="row ">
      <!--start of row -->

      <div id="studentmenu" class="col-3 ">

        <div id=" profileimg ">
          <a href="# "> <img src="assests/imges/boy.png " class="img-fluid w-100 mt-30 $zindex-fixed" alt=" "></a>
          <h4>اهلا </h4>
          <p>إيناس حميد القعادي</p>
        </div>

        <div class=" profile ">
          <a href="main-dashboard.html ">
            <img src="assests/imges/process (1).png " class=" active " alt=" ">


          </a>
        </div>


        <div class="profile ">
          <!-- رسالة الحافز -->
          <a href="# " class=" ">
            <img src="assests/imges/requirements.png " class=" " alt=" ">

          </a>

        </div>


        <div class="profile ">
          <a href="chatting.html "> <img src="assests/imges/chat.png " class=" " alt=" ">
          </a>
        </div>

        <div class="profile ">
          <a href="settings.html "> <img src="assests/imges/settings.png ">
          </a>
        </div>
      </div>




      <div class="col-md-9 " id="content ">
        <!--   المحتوى المستخدم في كل الصفحات

                        -xs-  خلل 575-767 يحتاج ضبط -->

        <div class="menu ">
          <ul class="list-unstyled ">
            <li>
              <a href="# "> البيانات الشخصية</a>
            </li>
            <li>
              <a href="qualification.html "> المؤهل الدراسي</a>
            </li>
            <li>
              <a href="courses.html ">الدورات </a>
            </li>
            <li>
              <a href="skills.html "> المهارات</a>
            </li>
            <li>
              <a href="experiences.html "> الخبرات</a>
            </li>
          </ul>
          <div class="menuLine ">
            <hr>
          </div>
        </div>
        <!--end of menu-->

        {{--  --}}

              <div class="fixed" id=dashbord-footer>
        <a href="#"> <span>EnasHR-Ye</span></a>
      </div>

      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="assests/js/scripts.js"></script>
      </body>

      </html>