@extends('web.master')
@section('content')

<!-- Container (Contact Section) -->
<section id="contact" class="container-fluid ">

    <div class="row ">
        <div class="col-md-6 col-sm-12 ">
            <img class="mb-4 img-fluid " src="assests/imges/contuct_us.svg " alt=" ">
        </div>
        <div class="col-md-6 col-sm-12 ">

            <h3 class="text-center ">تواصل معنا</h3>
            <p class="text-center "><em>نحن نحب ان تشاركنا اراءك وتتواصل معنا</em></p>

            <div class="row ">

                <div class="col-md-8 ">
                    <div class="row mr-0">

                        <div class="col-sm-6 form-group ">
                            <input class="form-control " id="email " name="email " placeholder="الإيميل " type="email " required>
                        </div>
                        <div class=" col-sm-6 form-group ">
                            <input class="form-control " id="name " name="name " placeholder="الاسم " type="text " required>
                        </div>
                    </div>
                    <textarea class="form-control " id="comments " name="comments " placeholder="التعليق " rows="5 "></textarea>
                    <br>
                    <div class="row ">
                        <div class="  col-md-12  ">
                            <button class=" w-100 btn btn-lg" type="submit">ارسال</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <p><span class="glyphicon glyphicon-map-marker "></span>اليمن \صنعاء</p>
                    <p><span class="glyphicon glyphicon-phone "></span>الرقم : 777777777+967 </p>
                    <p><span class="glyphicon glyphicon-envelope "></span> الإيميل: mail@mail.com </p>
                </div>
            </div>
            <br>

        </div>
    </div>
</section>
@endsection