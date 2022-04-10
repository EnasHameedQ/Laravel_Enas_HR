@extends('web.master')
@section('content')


<!-- start container slider-->
<section class="container">


    <div id="carouselExampleControls " class="carousel slide " data-bs-ride="carousel ">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="assests/imges/slider1.svg " class="d-block w-100 h-25 img-fluid " alt="... ">
            </div>
            <div class="carousel-item ">
                <img src="assests/imges/slider2.svg " class="d-block w-100 h-25 img-fluid " alt="... ">
            </div>
            <div class="carousel-item ">
                <img src="assests/imges/slider3.svg " class="d-block w-100 h-25 img-fluid " alt="... ">
            </div>
        </div>
        <button class="carousel-control-prev " type="button " data-bs-target="#carouselExampleControls " data-bs-slide="prev ">
            <span class="carousel-control-prev-icon " aria-hidden="true "></span>
            <span class="visually-hidden ">Previous</span>
        </button>
        <button class="carousel-control-next " type="button " data-bs-target="#carouselExampleControls " data-bs-slide="next ">
            <span class="carousel-control-next-icon " aria-hidden="true "></span>
            <span class="visually-hidden ">Next</span>
        </button>
    </div>

</section>




<div class="container-fluid ">
    <div class="grad mr-auto ">

    </div>
</div>
<!-- end container slider-->



<!-- start container slider-->
<section id="slider " class="container-fluid ">
    <!-- Slideshow container -->

    <h4 class="right ">ابرز الوضائف </h4>
    <h4 class="seeall "> <a href="# ">عرض الكل</a> </h4>

    <div id="carouselExampleIndicators " class="carousel slide " data-bs-ride="carousel ">
        <div class="carousel-indicators ">
            <button type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide-to="0 " class="active " aria-current="true " aria-label="Slide 1 "></button>
            <button type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide-to="1 " aria-label="Slide 2 "></button>
            <button type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide-to="2 " aria-label="Slide 3 "></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active ">

                <div class="carousel-item ">

                    <d iv class="carousel-item ">

                </div>
            </div>
            <button class="carousel-control-prev " type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide="prev ">
                <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next " type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide="next ">
                <span class="carousel-control-next-icon " aria-hidden="true "></span>
                <span class="visually-hidden ">Next</span>
            </button>
        </div>

</section>
<!-- end container slider -->
<div class="container-fluid ">
    <div class="grad mr-auto ">

    </div>
</div>
<!-- start container track & edu -->

<section class="container-fluid ">

    <div class="row ">
        <!-- start of edu -->
        <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">
            <div class="col ">
                <h4 class="right "> الشركات</h4>
                <h4 class="seeall "> <a href="# ">عرض الكل</a> </h4>

            </div>

            <div class="row ">
                <div class="col "> <img src="assests/imges/company1.jpg " alt="Los Angeles " class=" img-fluid rounded "></div>
                <div class="col "> <img src="assests/imges/company2.jpg " alt="Los Angeles " class="img-fluid rounded "></div>
                <div class="col "><img src="assests/imges/company3.png " alt="Los Angeles " class="img-fluid rounded "></div>
                <div class="col "> <img src="assests/imges/company4.png " alt="Los Angeles " class="img-fluid rounded "></div>
            </div>
            <div class="row ">
                <div class="col "> <img src="assests/imges/company4.png " alt="Los Angeles " class="img-fluid rounded "></div>
                <div class="col "> <img src="assests/imges/company4.png " alt="Los Angeles " class="img-fluid rounded "></div>
                <div class="col "> <img src="assests/imges/company4.png " alt="Los Angeles " class="img-fluid rounded "></div>
                <div class="col "> <img src="assests/imges/company1.jpg " alt="Los Angeles " class=" img-fluid rounded "></div>
            </div>

        </div>


        <!-- end  of edu-->

        <!-- start  of track -->
        <div class=" col-lg-3  col-12 ">
            <div class="col ">
                <h4 class="right "> اعلانات</h4>
                <h4 class="seeall "> <a href="# ">عرض الكل</a> </h4>
            </div>
            <div class="col "> <img src="assests/imges/undraw_collaborators_re_hont.svg " alt="Los Angeles " class="img-fluid rounded "></div>
            <div class="col "> <img src="assests/imges/undraw_percentages_re_a1ao.svg " alt="Los Angeles " class="img-fluid rounded "></div>
            <div class="col "> <img src="assests/imges/wait.svg " alt="Los Angeles " class="img-fluid rounded "></div>




            <!-- end  of track -->
        </div>
    </div>
    <!-- end  of row-->
</section>
<!-- end </section> track & edu -->

@endsection