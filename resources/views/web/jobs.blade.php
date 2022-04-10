@extends('web.master')
@section('content')
<!-- / -->
<br>
<br>
<div class="container-fluid">
    <div class="row d-flex">
        <div class=" d-flex">
            <form action="#">
                <!-- Single Field Item Start  -->
                <div class="single-field-item keyword">
                    <label for="keyword">البحث بشكل عام </label>
                    <input id="keyword" placeholder="بحث" name="keyword" type="text">
                </div>
                <!-- Single Field Item End  -->
                <!-- Single Field Item Start  -->
                <div class="single-field-item keyword">
                    <label for="keyword"> البحث بحسب المدينة</label>
                    <input id="keyword" placeholder="المدينة" name="keyword" type="text">
                </div>
                <!-- Single Field Item End  -->
                <!-- Single Field Item Start  -->
                <div class="single-field-item location">
                    <label for="location"> البحث بحسب اسم الشركة</label>
                    <input id="location" class="input-field input-field-location" placeholder="الشركة" name="location" type="text">
                </div>
                <!-- Single Field Item End  -->
                <div class="submit-btn">
                    <button class="btn" type="submit">البحث</button>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="row d-flex  mx-auto my-5" style="max-width: 23rem;">

    <div class="card map-card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="../assests/imges/job1.svg" class="img-fluid" />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
        </div>

        <div class="card-body closed px-0">
            <div class="button px-2 mt-3">
                <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i class="fas fa-bicycle"></i></a>
            </div>
            <div class="bg-white px-4 pb-4 pt-3-5">
                <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                <div class="d-flex justify-content-between living-coral-text">
                    <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                    <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                </div>
                <div class="d-flex justify-content-between living-coral-text">
                    <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                    <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                </div>
                <hr>
                <div class="d-flex justify-content-between living-coral-text">
                    <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                    <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                </div>
                <hr>
                <div class=" mb-15 d-flex justify-content-between living-coral-text">
                    <div>
                        <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                        <p class="pb-15">اضافة للمفظلة </p>
                    </div>

                    <div>
                        <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                        <a href="jops_detaiels.html">
                            <p class="pb-15">المزيد</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</div>
<div class="container">
    <section class="mx-auto my-5" style="max-width: 23rem;">

        <div class="card map-card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../assests/imges/job1.svg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <div class="card-body closed px-0">
                <div class="button px-2 mt-3">
                    <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i class="fas fa-bicycle"></i></a>
                </div>
                <div class="bg-white px-4 pb-4 pt-3-5">
                    <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                    <div class="d-flex justify-content-between living-coral-text">
                        <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                        <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between living-coral-text">
                        <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                        <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                    </div>
                    <div class="d-flex justify-content-between living-coral-text">
                        <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                        <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                    </div>
                    <hr>
                    <div class=" mb-15 d-flex justify-content-between living-coral-text">
                        <div>
                            <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                            <p class="pb-15">اضافة للمفظلة </p>
                        </div>

                        <div>
                            <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                            <p class="pb-15">المزيد</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection