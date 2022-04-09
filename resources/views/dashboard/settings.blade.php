@extends('dashboard.layout.master')
@section('content')
<!--start content -->

<div class="col-md-6 col-sm-4">
    <a href="setting1.html"> <img src="../assests/imges/settings.png" class="chatting" alt="">
    </a>
</div>


<div class="col-lg-3 ">
    <div id="profileimg1">
        <a href="#"> <img src="../assests/imges/girl.png" class=" " alt=""></a>
    </div>
    <div id="set">
        <a href="#">
            <i class="zmdi zmdi-account"></i>Account</a>
    </div>
    <div id="set">
        <a href="#">
            <i class="zmdi zmdi-settings"></i>Setting</a>
    </div>
    <div id="set">
        <a href="#">
            <i class="zmdi zmdi-money-box"></i>Billing</a>
    </div>

    <div id="set">
        <a href="#">
            <i class="zmdi zmdi-globe"></i>Language</a>
    </div>
    <div id="set">
        <a href="#">
            <i class="zmdi zmdi-pin"></i>Location</a>
    </div>
    <div id="set">
        <a href="#">
            <i class="zmdi zmdi-email"></i>Email</a>
    </div>
    <div id="set">
        <a href="#">
            <i onclick="myFunction(x)" class="zmdi zmdi-notifications"></i>Notifications</a>
    </div>

</div>



</div>

@endsection