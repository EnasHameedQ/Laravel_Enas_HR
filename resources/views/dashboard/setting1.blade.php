@extends('dashboard.layout.master')
@section('content')
<!--start content -->



<div class="col-md-6 col-sm-4 col-4">

    <div>
        <a href="#">
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label> Account</a>
    </div>
    <div>
        <a href="#">
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label> Setting</a>
        <div class="Underline">
            <hr>
        </div>
    </div>

    <div>
        <a href="#">
            <!--  <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label> -->Billing
        </a>
    </div>

    <div>
        <a href="#">
            Language</a>
    </div>
    <div>
        <a href="#">
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label> الموقع على الخريطة</a>

    </div>

    <div>
        <a href="#">
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label> البريد الالكتروني</a>
    </div>
    <div>
        <a href="#">
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>اللغة</a>
        <div class="Underline">
            <!-- this class whin we want to make "Underline" to divid as a groupe  -->
            <hr>
        </div>
    </div>
    <div>
        <a href="#">
            تعديلات</a>

    </div>
    <div>
        <a href="#">
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label> تغيير اللون</a>

    </div>
    <div>
        <a href="#">
            Location</a>

    </div>


</div>




<div id="tools" class="col-lg-3 col-3 ">
    <div id="profileimg1">
        <a href="#"> <img src="assests/imges/girl.png" class=" " alt=""></a>
    </div>
    <div>
        <a href="#">
            <i class="zmdi zmdi-account"></i>Account</a>
    </div>
    <div>
        <a href="#">
            <i class="zmdi zmdi-settings"></i>Setting</a>
    </div>
    <div>
        <a href="#">
            <i class="zmdi zmdi-money-box"></i>Billing</a>
    </div>

    <div>
        <a href="#">
            <i class="zmdi zmdi-globe"></i>Language</a>
    </div>
    <div>
        <a href="#">
            <i class="zmdi zmdi-pin"></i>Location</a>
    </div>
    <div>
        <a href="#">
            <i class="zmdi zmdi-email"></i>Email</a>
    </div>
    <div>
        <a href="#">
            <i onclick="myFunction(x)" class="zmdi zmdi-notifications"></i>Notifications</a>
    </div>

</div>

</div>
@endsection